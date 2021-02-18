<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lessonplan extends MY_Controller
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
        
        # ubah format tanggal mengajar
        $tanggal_mengajar = date_create($val['tanggal_mengajar']);
        $tanggal_mengajar = date_format($tanggal_mengajar,"d-m-Y H:i:s");
        $val['t_ubah2'] = $tanggal_mengajar;

        # ubah format tanggal buat
        $tanggal_buat = date_create($val['tanggal_buat']);
        $tanggal_buat = date_format($tanggal_buat,"d-m-Y H:i:s");
        $val['t_ubah'] = $tanggal_buat;
        
        # ambil jam ngajar
        $ma = $this->pengajar_model->retrieve_ma($val['mapel_ajar_id']);
        $val['jam_ngajar'] = $ma['jam_mulai']."-".$ma['jam_selesai'];
        
        # ambil nama kelas
        $rk = $this->mapel_model->retrieve_kelas($ma['mapel_kelas_id']);
        $kelas_id = $rk['kelas_id'];
        $k = $this->kelas_model->retrieve($kelas_id);
        $nama_kelas = str_replace("KELAS","",$k['nama']);
        $nama_kelas = trim($nama_kelas," ");
        $val['kelas'] = $nama_kelas;
        
        # ambil nama matapelajaran
        $mapel_id = $rk['mapel_id'];
        $mp = $this->mapel_model->retrieve($mapel_id);
        $val['matapelajaran'] = $mp['nama'];
        
        # ambil hari ngajar
        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari_ngajar = $ma['hari_id'];
        $val['hari_ngajar'] = $hari[$hari_ngajar]; 

        /*
        # ubah status selesai
        $ss_arr = array("Selesai","Belum Selesai");
        $ss_nmb = $val['status_selesai'];
        $val['status_selesai'] = $ss_arr[$ss_nmb];
        */
        return $val;
    }
    
    private function formatDataSiswa($val)
    {
        # cek status hadir
        #$status_hadir = array("Hadir","Sakit","Izin","Alpha"); 
        #$as['status_hadir'] = $status_hadir[$as['status_hadir']];
        
        # ambil data nama siswa
        $siswa = $this->siswa_model->retrieve($val['siswa_id']);
        $val['siswa'] = $siswa['nama'];
        
        return $val;
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
        if($this->form_validation->run('lessonplan') == TRUE) {
            
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
            $cj = $this->lessonplan_model->cek_lessonplan(null,null,$first_date,$last_date,$p_id);
            
            //echo $cj;
            $number_of_record = 100000;
            
            $filter = array(
                'number_of_record' => $number_of_record,
                'tanggal_awal' => $first_date,
                'tanggal_akhir' => $last_date,
            );
            
            //$this->session->set_userdata('filter_absenjurnal', $filter);
        }
		
		//$filter = $this->session->userdata('filter_absenjurnal');
        if (empty($filter)) {
            $filter = array(
                'number_of_record' => 50,
                'tanggal_awal'     		=> '',
                'tanggal_akhir'     	=> '',
            );
        }
        $data['filter'] = $filter;
        
		# jika sebagai pengajar tampilkan leeson plan miliknya saja
		if (is_pengajar()) {
            $filter['pengajar_id'] = get_sess_data('user', 'id');
        }
        if (is_admin()) {
            $filter['pengajar_id'] = null;
        }
        
		# ambil semua data lesson plan
		$retrieve_all_lessonplan = $this->lessonplan_model->retrieve_all(
            $filter['number_of_record'],
            $page_no,
            $filter['pengajar_id'],
            $filter['tanggal_awal'],
            $filter['tanggal_akhir']
            /*
            $filter['mapel_ajar_id'],
            $filter['no_kikd'],
            $filter['pokok_pembahasan'],
            $filter['status_selesai'],
            $filter['ket_absen_siswa'],
            $filter['keterangan'],
            $filter['tanggal_buat'], 
            $filter['tanggal_update']
            */
        );
		
		# format array data
        $results = array();
        foreach ($retrieve_all_lessonplan['results'] as $key => $val) {
            $results[$key] = $this->formatData($val);
        }
        
        /*
        echo "<pre>";
        print_r($retrieve_all_absenjurnal['results']);
        echo "</pre>";
        */
        
		$data['lessonplan'] = $results;
        $data['pagination']  = $this->pager->view($retrieve_all_lessonplan, 'lessonplan/index/');
        
        $this->twig->display('list-lessonplan.html',$data);
    }
    
    function detail($segment_3 = '', $segment_4 = '')
    {
        $ap_id = (int)$segment_3;
        $t_ubah = (string)$segment_4;
        
        if (is_siswa()) {
            redirect('welcome');
        }
        
        if (empty($ap_id)) {
            show_404();
        }
        
        #ambil data table absen_guru 
        $ap = $this->absenjurnal_model->retrieve($ap_id);
        if (empty($ap)) {
            show_404();
        }
        
        #ambil data absen_siswa
        $mapel_ajar_id = $ap['mapel_ajar_id'];
        $as = $this->absenjurnal_model->retrieve_all_absensiswa($mapel_ajar_id,$t_ubah);
        
        #panggil private function formDataSiswa
        $results1 = array();
        foreach ($as as $key => $val) {
            $results1[$key] = $this->formatDataSiswa($val);
        }
        $data['absen_siswa'] = $results1;
        
        # hitung kehadiran
        $arr_ht = array();
        foreach ($as as $key => $value){
                foreach ($value as $key2 => $value2){
                        if (array_key_exists($key2, $arr_ht) && array_key_exists($value2, $arr_ht[$key2])){
                                $arr_ht[$key2][$value2]++;
                        } else {
                                $arr_ht[$key2][$value2] = 1;
                        }
                }
        }
        
        if(!empty($arr_ht['status_hadir'][0])){
            $data['hadir'] = $arr_ht['status_hadir'][0];
        }
        if(!empty($arr_ht['status_hadir'][1])){
            $data['sakit'] = $arr_ht['status_hadir'][1];
        }
        if(!empty($arr_ht['status_hadir'][2])){
            $data['izin'] = $arr_ht['status_hadir'][2];
        }
        if(!empty($arr_ht['status_hadir'][3])){
            $data['alpha'] = $arr_ht['status_hadir'][3];
        }
        
        #panggil private function formatDataGuru
        $results2 = $this->formatData($ap);
        $data['aj'] = $results2;
        
        $this->twig->display('detail-absenjurnal.html',$data);
    }
    
    function add($segment_3 = '')
    {
        if (is_siswa()) {
            redirect('welcome');
        }
        
        # ambil session user id
        $user_id = get_sess_data('user', 'id');
        
        # ambil data absen guru
        $ag = $this->lessonplan_model->retrieve($user_id);
        
        # panggil datepicker
        $data['comp_js'] = load_comp_js(array(
            base_url('assets/comp/moment/moment.min.js'),
            base_url('assets/comp/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'),
        ));
        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'),
        ));
        
        if(!empty($_POST))
        {
            date_default_timezone_set("Asia/Jakarta");
            #ambil post jurnal
            $pengajar_id = $user_id;
            $tanggal_mengajar = $this->input->post('tanggal_mengajar');
            $tanggal_mengajar = date_create($tanggal_mengajar);
            $tanggal_mengajar = date_format($tanggal_mengajar,"Y-m-d H:i:s");
            $this->form_validation->set_rules('tanggal_mengajar','Jam Mengajar','required|trim|xss_clean');
            $mapel_ajar_id = $this->input->post('mapel_ajar_id');
            $this->form_validation->set_rules('mapel_ajar_id', 'Jam Mengajar', 'required|trim|xss_clean');
            $no_kikd = $this->input->post('no_kikd');
            $this->form_validation->set_rules('no_kikd', 'No.KI/KD', 'required|trim|xss_clean');
            $pokok_pembahasan = $this->input->post('pokok_pembahasan');
            $this->form_validation->set_rules('pokok_pembahasan', 'Pokok Pembahasan', 'required|trim|xss_clean');
            $media = $this->input->post('media');
            $this->form_validation->set_rules('media', 'Media', 'required|trim|xss_clean');
            $tanggal_buat = date("Y-m-d H:i:s");

            # cek form validasi
            if($this->form_validation->run('lessonplan/add') == TRUE) {

                $this->lessonplan_model->create_lessonplan($pengajar_id,$tanggal_mengajar,$mapel_ajar_id,$no_kikd,$pokok_pembahasan,$media,$tanggal_buat);
                $this->session->set_flashdata('lessonplan', get_alert('success', "Lesson Plan Berhasil di Simpan"));
                redirect('lessonplan');
            }
        
        }
        
        # buat array hari
        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        
        $data['arr_hari'] = $hari;
        $data['user_id'] = $user_id;
        
        $this->twig->display('tambah-lessonplan.html',$data);
        
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
        ));
        $data['comp_css'] = load_comp_css(array(
            base_url('assets/comp/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'),
        ));
        
        #ambil segment 3
        $lessonplan_id = (int)$segment_3;
        
        # buat array hari
        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        
        # retrieve lessonplan model
        $r = $this->lessonplan_model->retrieve($lessonplan_id);
        
        $data['lessonplan_id'] = $lessonplan_id;
        $tanggal_mengajar = $r['tanggal_mengajar'];
        $tanggal_mengajar = date_create($tanggal_mengajar);
        $data['tanggal_mengajar'] = date_format($tanggal_mengajar,"d-m-Y H:i:s");
        $data['mapel_ajar_id'] = $r['mapel_ajar_id'];
        $data['no_kikd'] = $r['no_kikd'];
        $data['pokok_pembahasan'] = $r['pokok_pembahasan'];
        $data['media'] = $r['media'];
        
        $data['arr_hari'] = $hari;
        $data['user_id'] = $user_id;
        
        if(!empty($_POST))
        {
            date_default_timezone_set("Asia/Jakarta");
            #ambil post jurnal
            //$pengajar_id = $user_id;
            
            $tanggal_mengajar = $this->input->post('tanggal_mengajar');
            $tanggal_mengajar = date_create($tanggal_mengajar);
            $tanggal_mengajar = date_format($tanggal_mengajar,"Y-m-d H:i:s");
            $this->form_validation->set_rules('tanggal_mengajar','Jam Mengajar','required|trim|xss_clean');
            
            $mapel_ajar_id = $this->input->post('mapel_ajar_id');
            $this->form_validation->set_rules('mapel_ajar_id', 'Jam Mengajar', 'required|trim|xss_clean');
            
            $no_kikd = $this->input->post('no_kikd');
            $this->form_validation->set_rules('no_kikd', 'No.KI/KD', 'required|trim|xss_clean');
            
            $pokok_pembahasan = $this->input->post('pokok_pembahasan');
            $this->form_validation->set_rules('pokok_pembahasan', 'Pokok Pembahasan', 'required|trim|xss_clean');
            
            $media = $this->input->post('media');
            $this->form_validation->set_rules('media', 'Media', 'required|trim|xss_clean');

            # cek form validasi
            if($this->form_validation->run('lessonplan/edit/'.$lessonplan_id) == TRUE) {        
                $this->lessonplan_model->update_lessonplan($lessonplan_id,$tanggal_mengajar,$mapel_ajar_id,$no_kikd,$pokok_pembahasan,$media);
                $this->session->set_flashdata('lessonplan', get_alert('success', "Lesson Plan Berhasil diperbaharui"));
                redirect('lessonplan');
            }
        }
        
        $this->twig->display('edit-lessonplan.html',$data);
        
    }
    
    function delete($segment_3 = '',$segment_4 = '', $segment_5 = '', $segment_6 = ''){
        
        if (is_siswa()) {
            redirect('welcome');
        }
        
        $lessonplan_id = (int)$segment_3; //lessonplan id
        $uri_back  = (string)$segment_6; // uri back

        if (empty($uri_back)) {
            $uri_back = site_url('lessonplan');
        } else {
            $uri_back = deurl_redirect($uri_back);
        }
        
        $this->lessonplan_model->delete_lessonplan($lessonplan_id);
        
         $this->session->set_flashdata('lessonplan', get_alert('warning', 'Lesson Plan berhasil dihapus.'));
         redirect($uri_back);
        
    }
}
