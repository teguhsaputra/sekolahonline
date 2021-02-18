<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presensikehadiran extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        must_login();
		#selain admin dan pengajar dilarang akses
        if (is_siswa()) {
            redirect('welcome');
        }
    }

    private function formatData($val)
    {
        # nama pengajar
        $pengajar = $this->pengajar_model->retrieve($val['pengajar_id']);
        $val['pengajar'] = $pengajar['nama'];

        # tanggal untuk delete
        $t_delete = date_create($val['tanggal_buat']);
        $t_delete = date_format($t_delete,"Y-m-d");
        $val['t_delete'] = $t_delete;
        
        /*
         # ambil nama kelas
         $rk = $this->kelas_model->retrieve_all_child(false);
         $k = $rk['nama'];
         $nama_kelas = str_replace("KELAS","",$k['nama']);
         $nama_kelas = trim($nama_kelas," ");
         $val['kelas'] = $nama_kelas;
        */

        # ubah format tanggal buat
        $tanggal_buat = date_create($val['tanggal_buat']);
        $tanggal_buat = date_format($tanggal_buat,"d-m-Y H:i:s");
        $val['t_ubah'] = $tanggal_buat;

        # ubah format kehadiran menjadi string
        /*
        $absensi_kehadiran = $val['absensi_kehadiran'];
        if($absensi_kehadiran == 0){
            $absensi_kehadiran = "Hadir";
        }
        else{
            $absensi_kehadiran = "Tidak Hadir";
        }
        $val['absensi_kehadiran'] = $absensi_kehadiran;
        */
        
        return $val;
    }
    
    private function formatDataSiswa($val)
    {
        
    }

    function index($segment_3 = '')
    {
        
        # panggil datatables
        $data['comp_js'] = load_comp_js(array(
            base_url('assets/comp/datatables/new/js/jquery.dataTables.js'),
            base_url('assets/comp/datatables/new/js/buttons.print.min.js'),
            base_url('assets/comp/datatables/new/js/dataTables.buttons.min.js'),
            base_url('assets/comp/datatables/new/js/dataTables.bootstrap4.js'),
            base_url('assets/comp/datatables/new/js/buttons.html5.min.js'),
            base_url('assets/comp/datatables/new/js/jszip.min.js'),
            base_url('assets/comp/moment/moment.min.js'),
            base_url('assets/comp/daterangepicker/daterangepicker.js'),
        ));

        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/datatables/new/css/dataTables.bootstrap4.css'),
            base_url('assets/comp/datatables/new/css/buttons.dataTables.min.css'),
            base_url('assets/comp/daterangepicker/daterangepicker.css'),
        ));
        
        /*
        if (!empty($_GET['clear_filter']) AND $_GET['clear_filter'] == 'true') {
            $this->session->set_userdata('filter_absenjurnal', null);
        }
        */
        
        $page_no = (int)$segment_3;
        
        if (empty($page_no)) {
            $page_no = 1;
        }
        
        $this->form_validation->set_rules('tanggal_between', 'Tanggal', 'required|trim|xss_clean');
        if($this->form_validation->run('presensikehadiran') == TRUE) {
            
            $tanggal_between = $this->input->post('tanggal_between',true);
            
            $replace_tgl = str_replace(" ","",$tanggal_between);
            $replace_tgl = str_replace("/","-",$replace_tgl);
            
            $first_date = substr($replace_tgl,0,10);
            $first_date = date_create($first_date);
            $first_date = date_format($first_date,"Y-m-d");
            
            $last_date = substr($replace_tgl,11);
            $last_date = date_create($last_date);
            $last_date = date_format($last_date,"Y-m-d");
            
            $p_id = get_sess_data('user', 'id');
            
            $number_of_record = 100000;
            
            $filter = array(
                'number_of_record' => $number_of_record,
                'tanggal_awal' => $first_date,
                'tanggal_akhir' => $last_date,
            );
            
            //$this->session->set_userdata('filter_absenjurnal', $filter);
        }
        
        if (empty($filter)) {
            $filter = array(
                'number_of_record' => 50,
                'tanggal_awal'     		=> '',
                'tanggal_akhir'     	=> '',
            );
        }
        $data['filter'] = $filter;

        # jika sebagai pengajar tampilkan presensi kehadiran miliknya saja
		if (is_pengajar()) {
            $filter['pengajar_id'] = get_sess_data('user', 'id');
        }
        if (is_admin()) {
            $filter['pengajar_id'] = null;
        }

        # ambil semua data materi
		$retrieve_all_presensikehadiran = $this->presensikehadiran_model->retrieve_all(
            $filter['number_of_record'],
            $page_no,
            $filter['pengajar_id'],
            $filter['tanggal_awal'],
            $filter['tanggal_akhir']
        );

        # format array data
        $results = array();
        foreach ($retrieve_all_presensikehadiran['results'] as $key => $val) {
            $results[$key] = $this->formatData($val);
        }

        $data['presensikehadiran'] = $results;
        $data['pagination']  = $this->pager->view($retrieve_all_presensikehadiran, 'presensikehadiran/index/');

        $this->twig->display('list-presensikehadiran.html',$data);
    }

    function add($segment_3 = '')
    {
        if (is_siswa()) {
            redirect('welcome');
        }
        
        # ambil session user id
        $user_id = get_sess_data('user', 'id');
        
        # panggil datepicker
        $data['comp_js'] = load_comp_js(array(
            base_url('assets/comp/moment/moment.min.js'),
            base_url('assets/comp/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'),
            base_url('assets/comp/select2/js/select2.full.min.js'),
        ));
        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'),
            base_url('assets/comp/select2/css/select2.min.css'),
        ));

        if(!empty($_POST))
        {
            
            #ambil post jurnal
            $pengajar_id = $user_id;
            $mengajar_kelas = $this->input->post('mengajar_kelas');
            $this->form_validation->set_rules('mengajar_kelas', 'Mengajar Kelas', 'required|xss_clean');
            //$absensi_kehadiran = $this->input->post('absensi_kehadiran');
            //$this->form_validation->set_rules('absensi_kehadiran','Hadir/Tidak Hadir','required|trim|xss_clean');
            $absensi_kehadiran = 1;
            //$tanggal_buat = $this->input->post('tanggal_buat');
            date_default_timezone_set("Asia/Jakarta");
            $tanggal_buat = date("Y-m-d H:i:s");
            //$tanggal_buat = date_create($tanggal_buat);
            //$tanggal_buat = date_format($tanggal_buat,"Y-m-d H:i:s");
            //$this->form_validation->set_rules('tanggal_buat', 'Tanggal Buat', 'required|trim|xss_clean');
            
            $lama_waktu_infal = $this->input->post('lama_waktu_infal');
            $this->form_validation->set_rules('lama_waktu_infal','Lama Waktu Infal','trim|xss_clean');

            $infal_kelas = $this->input->post('infal_kelas');
            $this->form_validation->set_rules('infal_kelas','Infal Kelas','xss_clean');
            


            # cek form validasi
            if($this->form_validation->run('presensikehadiran/add') == TRUE) {
                
                # buat array tampung
                $arr_mengajar_kelas = array();
                //$arr_infal_kelas = array();

                foreach($mengajar_kelas as $mk => $val)
                {
                    $arr_mengajar_kelas[] = $val;
                }
                
                /*
                foreach($infal_kelas as $ik => $val2)
                {
                    $arr_infal_kelas[] = $val2;
                }
                */

                //implode mengajar kelas
                $arr_mengajar_kelas = implode(",",$arr_mengajar_kelas);
                $mengajar_kelas = $arr_mengajar_kelas;
                //implode infal kelas
                //$arr_infal_kelas = implode(",",$arr_infal_kelas);
                //$infal_kelas = $arr_infal_kelas;

                # cek apakah ada presensi yang sama di tanggal yang sama
                $tanggal_doang = date_create($tanggal_buat);
                $tanggal_doang = date_format($tanggal_doang,"Y-m-d");
                $cp = $this->presensikehadiran_model->cek_presensi_kehadiran($pengajar_id,$tanggal_doang);
                if($cp > 0)
                {
                    $this->session->set_flashdata('presensikehadiran', get_alert('danger', "Presensi Kehadiran Sudah Pernah di Buat di Tanggal Tersebut!"));
                    redirect('presensikehadiran/add');
                }
                
                $this->presensikehadiran_model->create_presensi_kehadiran($pengajar_id,$mengajar_kelas,$absensi_kehadiran,$lama_waktu_infal,$infal_kelas,$tanggal_buat);
                $this->session->set_flashdata('presensikehadiran', get_alert('success', "Presensi Kehadiran Berhasil di simpan"));
                redirect('presensikehadiran');
            }
        
        }
        
        $this->twig->display('tambah-presensikehadiran.html',$data);
        
    }

    function edit($segment_3 = '')
    {
        if (is_siswa()) {
            redirect('welcome');
        }
        
        # ambil session user id
        $user_id = get_sess_data('user', 'id');
        
        # panggil datepicker
        $data['comp_js'] = load_comp_js(array(
            base_url('assets/comp/moment/moment.min.js'),
            base_url('assets/comp/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'),
            base_url('assets/comp/select2/js/select2.full.min.js'),
        ));
        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'),
            base_url('assets/comp/select2/css/select2.min.css'),
        ));

        #ambil segment 3
        $presensikehadiran_id = (int)$segment_3;

        # retrieve presensikehadiran model
        $r = $this->presensikehadiran_model->retrieve($presensikehadiran_id);

        $data['presensikehadiran_id'] = $presensikehadiran_id;
        $tanggal_buat = $r['tanggal_buat'];
        $tanggal_buat = date_create($tanggal_buat);
        $data['tanggal_buat'] = date_format($tanggal_buat,"d-m-Y H:i:s");
        // explode mengajar kelas ke array
        $arr_mengajar_kelas = $r['mengajar_kelas'];
        $arr_mengajar_kelas = explode(",",$arr_mengajar_kelas);
        // print_r($arr_mengajar_kelas);
        $data['mengajar_kelas'] = $arr_mengajar_kelas;
        $data['absensi_kehadiran'] = $r['absensi_kehadiran'];
        $data['lama_waktu_infal'] = $r['lama_waktu_infal'];
        $data['infal_kelas'] = $r['infal_kelas'];

        if(!empty($_POST))
        {
            #ambil post jurnal
            $pengajar_id = $user_id;
            $mengajar_kelas = $this->input->post('mengajar_kelas');
            $this->form_validation->set_rules('mengajar_kelas', 'Mengajar Kelas', 'required|xss_clean');
            
            $absensi_kehadiran = 1;
           
            //date_default_timezone_set("Asia/Jakarta");
            //$tanggal_buat = date("Y-m-d H:i:s");
            
            $lama_waktu_infal = $this->input->post('lama_waktu_infal');
            $this->form_validation->set_rules('lama_waktu_infal','Lama Waktu Infal','trim|xss_clean');

            $infal_kelas = $this->input->post('infal_kelas');
            $this->form_validation->set_rules('infal_kelas','Infal Kelas','xss_clean');
            
            # cek form validasi
            if($this->form_validation->run('presensikehadiran/edit'.$presensikehadiran_id) == TRUE) {
                
                # buat array tampung
                $arr_mengajar_kelas = array();

                foreach($mengajar_kelas as $mk => $val)
                {
                    $arr_mengajar_kelas[] = $val;
                }

                //implode mengajar kelas
                $arr_mengajar_kelas = implode(",",$arr_mengajar_kelas);
                $mengajar_kelas = $arr_mengajar_kelas;
                
                $this->presensikehadiran_model->update_presensi_kehadiran($presensikehadiran_id,$pengajar_id,$mengajar_kelas,$absensi_kehadiran,$lama_waktu_infal,$infal_kelas);
                $this->session->set_flashdata('presensikehadiran', get_alert('success', "Presensi Kehadiran Berhasil di update"));
                redirect('presensikehadiran');
            }
            
        }

        $this->twig->display('edit-presensikehadiran.html',$data);
    }

    function delete($segment_3 = ''){
        
        if (is_siswa()) {
            redirect('welcome');
        }
        
        $presensikehadiran_id = (int)$segment_3; //presensi kehadiran id

        if (empty($uri_back)) {
            $uri_back = site_url('presensikehadiran');
        } else {
            $uri_back = deurl_redirect($uri_back);
        }
        
        $this->presensikehadiran_model->delete_presensikehadiran($presensikehadiran_id);
        
         $this->session->set_flashdata('presensikehadiran', get_alert('warning', 'Presensi Kehadiran berhasil dihapus.'));
         redirect($uri_back);
        
    }
    
}
