<?php


class Absenjurnal_model extends CI_Model
{
    
    public function retrieve_all(
        $no_of_records      = null,
        $page_no            = 1,
        $pengajar_id 		= array(),
        $tanggal_awal = null,
        $tanggal_akhir = null,
        /*
        $mapel_ajar_id    	= array(),
        $no_kikd            = null,
        $pokok_pembahasan   = null,
        $status_selesai 	= array(),
        $ket_absen_siswa 	= null,
        $keterangan 		= null,
        $tanggal_buat     	= null,
        $tanggal_update    	= null,
        */
        $pagination         = true
    ) {
        $no_of_records = (int)$no_of_records;
        $page_no       = (int)$page_no;

        $where    = array();
        $group_by = array();
        if (!empty($pengajar_id)) {
            $where['absen_pengajar.pengajar_id'] = array($pengajar_id, 'where_in');
        }
        
        if (!empty($tanggal_awal)) {
            $this->db->where('DATE(tanggal_buat) >=', $tanggal_awal);
            $this->db->where('DATE(tanggal_buat) <=', $tanggal_akhir);
            //$this->db->where('DATE(tanggal_buat) BETWEEN '.$tanggal_awal.' AND '.$tanggal_akhir, NULL, FALSE );
            //$where['absen_pengajar.tanggal_buat'] = array($pengajar_id, 'where_in');
            //$where['DATE(absen_pengajar.tanggal_buat) >='] = array($tanggal_awal, 'where');
            //$where['DATE(absen_pengajar.tanggal_buat) >='] = array($tanggal_akhir, 'where');
        }
        
        $orderby = array(
            'absen_pengajar.id' => 'DESC'
        );

        if ($pagination) {
            $data = $this->pager->set('absen_pengajar', $no_of_records, $page_no, $where, $orderby, 'absen_pengajar.*', $group_by);
        } else {
            # cari jumlah semua absen pengajar
            $no_of_records = $this->db->count_all('absen_pengajar');
            $search_all    = $this->pager->set('absen_pengajar', $no_of_records, $page_no, $where, $orderby, 'absen_pengajar.*', $group_by);
            $data          = $search_all['results'];
        }

        return $data;
    }
    
    # Ambil semua data absen siswa pada jam ngajar guru terkait
    public function retrieve_all_absensiswa($mapel_ajar_id,$tanggal_buat = '')
    {
        $mapel_ajar_id = (int)$mapel_ajar_id;
        $this->db->select('absen_siswa.id as absen_id, absen_siswa.siswa_id as siswa_id, absen_siswa.mapel_ajar_id as mapel_ajar_id, absen_siswa.status_hadir as status_hadir, absen_siswa.tanggal_buat as tanggal_buat, absen_siswa.tanggal_update as tanggal_update, siswa.nama as nama');
        $this->db->join('siswa', 'absen_siswa.siswa_id = siswa.id');
        $this->db->where('absen_siswa.mapel_ajar_id', $mapel_ajar_id);
        
         if (!empty($tanggal_buat)) {
             $this->db->where('DATE(absen_siswa.tanggal_buat)',$tanggal_buat);
            $this->db->like('absen_siswa.tanggal_buat',$tanggal_buat);
        }
        
        $this->db->order_by('siswa.nama', 'ASC');
        
        $result = $this->db->get('absen_siswa');
        return $result->result_array();
    }
    
    public function retrieve_all_siswa($kelas_id = null) 
    {
        $this->db->join('siswa', 'kelas_siswa.siswa_id = siswa.id');
        $this->db->where('kelas_siswa.kelas_id', $kelas_id);
        
        #$this->db->where('kelas_id', $kelas_id);
        $this->db->order_by('siswa.nama', 'ASC');

        $result = $this->db->get('kelas_siswa');
        return $result->result_array();
    }

    /**
     * Method untuk mengambil satu data absen_pengajar
     *
     * @param  integer $id
     * @return array
    **/
    
    public function retrieve($id)
    {
        $id = (int)$id;

        $this->db->where('id', $id);
        $result = $this->db->get('absen_pengajar', 1);
        return $result->row_array();
    }
    
    /**
     * Method untuk cek data jurnal mengajar
     */
    public function cek_jurnal(
        
        $mapel_ajar_id = null,
        $tanggal_buat = null,
        $tanggal_awal = null,
        $tanggal_akhir = null,
        $pengajar_id = null
        
        ){
        
        $this->db->select("COUNT(*) as jml");
        
        if (!empty($mapel_ajar_id)) {
            $this->db->where('mapel_ajar_id',$mapel_ajar_id);
        }
        
        if (!empty($tanggal_buat)) {
            $this->db->where('DATE(tanggal_buat)',$tanggal_buat);
        }
        
        if (!empty($tanggal_awal)) {
            $this->db->where('DATE(tanggal_buat) >=', $tanggal_awal);
            $this->db->where('DATE(tanggal_buat) <=', $tanggal_akhir);
        }
        
        if (!empty($pengajar_id)) {
            $this->db->where('pengajar_id',$pengajar_id);
        }
        
        $result = $this->db->get('absen_pengajar');
        $result = $result->row_array();
        return $result['jml'];
    }
    
    /**
     * Method untuk create jurnal mengajar
     */
    public function create_jurnal(
        $pengajar_id,
        $mapel_ajar_id,
        $no_kikd,
        $pokok_pembahasan,
        $status_selesai,
        $ket_absen_siswa = '',
        $keterangan = '',
        $tanggal_buat
    ) {
        $pengajar_id = (int)$pengajar_id;
        $mapel_ajar_id   = (int)$mapel_ajar_id;
        $status_selesai   = (int)$status_selesai;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'pengajar_id'           => $pengajar_id,
            'mapel_ajar_id'         => $mapel_ajar_id,
            'no_kikd'               => $no_kikd,
            'pokok_pembahasan'      => $pokok_pembahasan,
            'status_selesai'        => $status_selesai,
            'ket_absen_siswa'       => $ket_absen_siswa,
            'keterangan'            => $keterangan,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->insert('absen_pengajar', $data);
        return $this->db->insert_id();
    }
    
    public function update_jurnal(
        $jurnal_id,
        $pengajar_id,
        $mapel_ajar_id,
        $no_kikd,
        $pokok_pembahasan,
        $status_selesai,
        $ket_absen_siswa = '',
        $keterangan = '',
        $tanggal_buat
    ) {
        $jurnal_id = (int)$jurnal_id;
        $pengajar_id = (int)$pengajar_id;
        $mapel_ajar_id   = (int)$mapel_ajar_id;
        $status_selesai   = (int)$status_selesai;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'pengajar_id'           => $pengajar_id,
            'mapel_ajar_id'         => $mapel_ajar_id,
            'no_kikd'               => $no_kikd,
            'pokok_pembahasan'      => $pokok_pembahasan,
            'status_selesai'        => $status_selesai,
            'ket_absen_siswa'       => $ket_absen_siswa,
            'keterangan'            => $keterangan,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->where('id', $jurnal_id);
        $this->db->update('absen_pengajar', $data);
        return true;
    }
    
    public function create_absen(
        $siswa_id,
        $mapel_ajar_id,
        $status_hadir,
        $tanggal_buat
    ) {
        $siswa_id           = (int)$siswa_id;
        $mapel_ajar_id      = (int)$mapel_ajar_id;
        $status_hadir     = (int)$status_hadir;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'siswa_id'              => $siswa_id,
            'mapel_ajar_id'         => $mapel_ajar_id,
            'status_hadir'          => $status_hadir,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->insert('absen_siswa', $data);
        return $this->db->insert_id();
    }
    
    public function update_absen(
        $id_absen,
        $siswa_id,
        $mapel_ajar_id,
        $status_hadir,
        $tanggal_buat
    ) {
        $id_absen           = (int)$id_absen;
        $siswa_id           = (int)$siswa_id;
        $mapel_ajar_id      = (int)$mapel_ajar_id;
        $status_hadir     = (int)$status_hadir;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'siswa_id'              => $siswa_id,
            'mapel_ajar_id'         => $mapel_ajar_id,
            'status_hadir'          => $status_hadir,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->where('id', $id_absen);
        $this->db->update('absen_siswa', $data);
        return true;
    }
    
    public function delete_jurnal($id)
    {
        $id = (int)$id;

        $this->db->where('id', $id);
        $this->db->delete('absen_pengajar');
        return true;
    }
    
    public function delete_absen($mapel_ajar_id,$tanggal_buat)
    {
        $mapel_ajar_id = (int)$mapel_ajar_id;
        $tanggal_buat = (string)$tanggal_buat;

        $this->db->where('mapel_ajar_id', $mapel_ajar_id);
        $this->db->where('DATE(tanggal_buat)', $tanggal_buat);
        $this->db->delete('absen_siswa');
        return true;
    }
    
    
    
    public function count($by,$param,$tanggal_buat = '')
    {
        $by = (int)$by;
        $tanggal_buat = (string)$tanggal_buat;
        switch ($by) {
            
            case 0:
                $this->db->select("COUNT(*) as jml");
                $this->db->where('mapel_ajar_id', $param);
                $this->db->where('status_hadir', $by);
                $this->db->where('DATE(tanggal_buat)', $tanggal_buat);
                $result = $this->db->get('absen_siswa');
                $result = $result->row_array();
                return $result['jml'];
            break;

            case 1:
                $this->db->select("COUNT(*) as jml");
                $this->db->where('mapel_ajar_id', $param);
                $this->db->where('status_hadir', $by);
                $this->db->where('DATE(tanggal_buat)', $tanggal_buat);
                $result = $this->db->get('absen_siswa');
                $result = $result->row_array();
                return $result['jml'];
            break;
            
            case 2:
                $this->db->select("COUNT(*) as jml");
                $this->db->where('mapel_ajar_id', $param);
                $this->db->where('status_hadir', $by);
                $this->db->where('DATE(tanggal_buat)', $tanggal_buat);
                $result = $this->db->get('absen_siswa');
                $result = $result->row_array();
                return $result['jml'];
            break;
            
            case 3:
                $this->db->select("COUNT(*) as jml");
                $this->db->where('mapel_ajar_id', $param);
                $this->db->where('status_hadir', $by);
                $this->db->where('DATE(tanggal_buat)', $tanggal_buat);
                $result = $this->db->get('absen_siswa');
                $result = $result->row_array();
                return $result['jml'];
            break;

            default:
                return 0;
            break;
        }
    }
    
    
}
