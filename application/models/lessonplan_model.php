<?php

/**
 * Class Model untuk resource Absenjurnal
 *
 */
class Lessonplan_model extends CI_Model
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
            $where['lesson_plan.pengajar_id'] = array($pengajar_id, 'where_in');
        }
        
        if (!empty($tanggal_awal)) {
            $this->db->where('DATE(tanggal_mengajar) >=', $tanggal_awal);
            $this->db->where('DATE(tanggal_mengajar) <=', $tanggal_akhir);
            //$this->db->where('DATE(tanggal_buat) BETWEEN '.$tanggal_awal.' AND '.$tanggal_akhir, NULL, FALSE );
            //$where['absen_pengajar.tanggal_buat'] = array($pengajar_id, 'where_in');
            //$where['DATE(absen_pengajar.tanggal_buat) >='] = array($tanggal_awal, 'where');
            //$where['DATE(absen_pengajar.tanggal_buat) >='] = array($tanggal_akhir, 'where');
        }
        
        $orderby = array(
            'lesson_plan.id' => 'DESC'
        );

        if ($pagination) {
            $data = $this->pager->set('lesson_plan', $no_of_records, $page_no, $where, $orderby, 'lesson_plan.*', $group_by);
        } else {
            # cari jumlah semua absen pengajar
            $no_of_records = $this->db->count_all('lesson_plan');
            $search_all    = $this->pager->set('lesson_plan', $no_of_records, $page_no, $where, $orderby, 'lesson_plan.*', $group_by);
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
        $result = $this->db->get('lesson_plan', 1);
        return $result->row_array();
    }
    
    /**
     * Method untuk cek data presensi kehadiran
     */
    public function cek_lessonplan(
        
        $pengajar_id = null,
        $tanggal_mengajar = null,
        $tanggal_awal = null,
        $tanggal_akhir = null
        
        
        ){
        
        $pengajar_id = (int)$pengajar_id;
        
        $this->db->select("COUNT(*) as jml");
        
        if (!empty($tanggal_mengajar)) {
            $this->db->where('DATE(tanggal_mengajar)',$tanggal_mengajar);
        }
        
        if (!empty($tanggal_awal)) {
            $this->db->where('DATE(tanggal_mengajar) >=', $tanggal_awal);
            $this->db->where('DATE(tanggal_mengajar) <=', $tanggal_akhir);
        }
        
        if (!empty($pengajar_id)) {
            $this->db->where('pengajar_id',$pengajar_id);
        }
        
        $result = $this->db->get('lesson_plan');
        $result = $result->row_array();
        return $result['jml'];
    }

    /**
     * Method untuk create presensi kehadiran
     */
    public function create_lessonplan(
        $pengajar_id,
        $tanggal_mengajar,
        $mapel_ajar_id,
        $no_kikd,
        $pokok_pembahasan,
        $media,
        $tanggal_buat
    ) {
        $pengajar_id = (int)$pengajar_id;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'pengajar_id'           => $pengajar_id,
            'mapel_ajar_id'         => $mapel_ajar_id,
            'tanggal_mengajar'      => $tanggal_mengajar,
            'no_kikd'               => $no_kikd,
            'pokok_pembahasan'      => $pokok_pembahasan,
            'media'                 => $media,
            'tanggal_buat'          => $tanggal_buat,
            'tanggal_update'        => $tanggal_update
        );
        $this->db->insert('lesson_plan', $data);
        return $this->db->insert_id();
    }

    /**
     * Method untuk update presensi kehadiran
     */
    public function update_lessonplan(
        $lessonplan_id,
        $tanggal_mengajar,
        $mapel_ajar_id,
        $no_kikd,
        $pokok_pembahasan,
        $media
    ) {
        $lessonplan_id = (int)$lessonplan_id;
        date_default_timezone_set("Asia/Jakarta");
        $tanggal_update = date("Y-m-d H:i:s");

        $data = array(
            'tanggal_mengajar'          => $tanggal_mengajar,
            'mapel_ajar_id'             => $mapel_ajar_id,
            'no_kikd'                   => $no_kikd,
            'pokok_pembahasan'          => $pokok_pembahasan,
            'media'                     => $media,
            'tanggal_update'            => $tanggal_update
        );
        $this->db->where('id', $lessonplan_id);
        $this->db->update('lesson_plan', $data);
        return true;
    }
    
    public function delete_lessonplan($lessonplan_id)
    {
        $lessonplan_id = (int)$lessonplan_id;

        $this->db->where('id', $lessonplan_id);
        $this->db->delete('lesson_plan');
        return true;
    }

}
