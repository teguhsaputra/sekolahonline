<?php

/**
 * Class Model untuk resource Absenjurnal
 */
class Presensikehadiran_model extends CI_Model
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
            $where['presensi_kehadiran.pengajar_id'] = array($pengajar_id, 'where_in');
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
            'presensi_kehadiran.id' => 'DESC'
        );

        if ($pagination) {
            $data = $this->pager->set('presensi_kehadiran', $no_of_records, $page_no, $where, $orderby, 'presensi_kehadiran.*', $group_by);
        } else {
            # cari jumlah semua absen pengajar
            $no_of_records = $this->db->count_all('presensi_kehadiran');
            $search_all    = $this->pager->set('presensi_kehadiran', $no_of_records, $page_no, $where, $orderby, 'presensi_kehadiran.*', $group_by);
            $data          = $search_all['results'];
        }

        return $data;
    }

    /*
    * Method untuk mengambil satu data presensi kehadiran
    */
    public function retrieve($id)
    {
        $id = (int)$id;

        $this->db->where('id', $id);
        $result = $this->db->get('presensi_kehadiran', 1);
        return $result->row_array();
    }
    
    /**
     * Method untuk cek data presensi kehadiran
     */
    public function cek_presensi_kehadiran(
        
        $pengajar_id = null,
        $tanggal_buat = null,
        $tanggal_awal = null,
        $tanggal_akhir = null
        
        
        ){
        
        $pengajar_id = (int)$pengajar_id;
        
        $this->db->select("COUNT(*) as jml");
        
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
        
        $result = $this->db->get('presensi_kehadiran');
        $result = $result->row_array();
        return $result['jml'];
    }

    /**
     * Method untuk create presensi kehadiran
     */
    public function create_presensi_kehadiran(
        $pengajar_id,
        $mengajar_kelas,
        $absensi_kehadiran,
        $lama_waktu_infal,
        $infal_kelas,
        $tanggal_buat
    ) {
        $pengajar_id = (int)$pengajar_id;
        $absensi_kehadiran   = (int)$absensi_kehadiran;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'pengajar_id'           => $pengajar_id,
            'mengajar_kelas'        => $mengajar_kelas,
            'absensi_kehadiran'     => $absensi_kehadiran,
            'lama_waktu_infal'      => $lama_waktu_infal,
            'infal_kelas'           => $infal_kelas,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->insert('presensi_kehadiran', $data);
        return $this->db->insert_id();
    }

    /**
     * Method untuk update presensi kehadiran
     */
    public function update_presensi_kehadiran(
        $presensikehadiran_id,
        $pengajar_id,
        $mengajar_kelas,
        $absensi_kehadiran,
        $lama_waktu_infal,
        $infal_kelas
    ) {
        $presensikehadiran_id = (int)$presensikehadiran_id;
        $pengajar_id = (int)$pengajar_id;
        $absensi_kehadiran   = (int)$absensi_kehadiran;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'pengajar_id'           => $pengajar_id,
            'mengajar_kelas'        => $mengajar_kelas,
            'absensi_kehadiran'     => $absensi_kehadiran,
            'lama_waktu_infal'      => $lama_waktu_infal,
            'infal_kelas'           => $infal_kelas,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->where('id', $presensikehadiran_id);
        $this->db->update('presensi_kehadiran', $data);
        return true;
    }
    
    public function delete_presensikehadiran($presensikehadiran_id)
    {
        $presensikehadiran_id = (int)$presensikehadiran_id;

        $this->db->where('id', $presensikehadiran_id);
        $this->db->delete('presensi_kehadiran');
        return true;
    }

}
