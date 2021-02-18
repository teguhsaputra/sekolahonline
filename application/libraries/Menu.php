<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class menu aplikasi e-learning dokumenary.net
 *
 * @author Almazari <almazary@gmail.com>
 * @since  1.8
 */
class Menu
{
    private $menus = array();

    function __construct()
    {
        $this->default_menu();
    }

    private function default_menu()
    {
        $this->menus['admin'] = array(
            
            0 => array(
                '<a href="' . site_url() . '" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Beranda</p>
                </a>',
                '<a href="' . site_url('pengumuman') . '" class="nav-link">
                    <i class="nav-icon fas fa-bullhorn"></i>
                    <p>Pengumuman</p>
                </a>',
                '<a href="' . site_url('message') . '" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Pesan</p>
                </a><hr style="border:1px solid gray;" />',
                '<a href="' . site_url('siswa') . '" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Siswa</p>
                </a>',
                '<a href="' . site_url('pengajar') . '" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Pengajar</p>
                </a><hr style="border:1px solid gray;" />',
                '<a href="' . site_url('tugas?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Ujian</p>
                </a>',
                '<a href="' . site_url('materi?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Materi</p>
                </a>',
                '<a href="' . site_url('materi/komentar') . '" class="nav-link">
                    <i class="nav-icon far fa-comments"></i>
                    <p>Komentar Materi</p>
                </a>',
                '<a href="' . site_url('absenjurnal') . '" class="nav-link">
                    <i class="nav-icon far fa-clock"></i>
                    <p>Jurnal & Absen</p>
                </a>',
                '<a href="' . site_url('presensikehadiran') . '" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>Presensi Kehadiran Guru</p>
                </a>',
                '<a href="' . site_url('lessonplan') . '" class="nav-link">
                <i class="nav-icon far fa-list-alt"></i>
                <p>Lesson Plan</p>
                </a><hr style="border:1px solid gray;" />',
                '<a href="' . site_url('kelas/mapel_kelas') . '" class="nav-link">
                    <i class="nav-icon fas fa-paste"></i>
                    <p>Matapelajaran Kelas</p>
                </a>',
                '<a href="' . site_url('kelas') . '" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Manajemen Kelas</p>
                </a>',
                '<a href="' . site_url('mapel') . '" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Manajemen Matapelajaran</p>
                </a><hr style="border:1px solid gray;" />',
                /*
                '<a href="' . site_url('welcome/pengaturan') . '" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Pengaturan</p>
                </a>',
                '<a href="' . site_url('email') . '" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>E-mail</p>
                </a>',
                '<a href="' . site_url('welcome/backup_restore') . '" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>Backup dan Restore</p>
                </a>',
                '<a href="' . site_url('welcome/hapus_data') . '" class="nav-link">
                    <i class="nav-icon fas fa-trash"></i>
                    <p>Hapus Data</p>
                </a><hr style="border:1px solid gray;"/>',
                */
                '<a href="' . site_url('login/logout') . '" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Logout</p>
                </a>'
                
            )
        
        );

        $this->menus['pengajar'] = array(
            
            0 => array(
                '<a href="' . site_url() . '" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Beranda</p>
                </a>',
                '<a href="' . site_url('pengumuman') . '" class="nav-link">
                    <i class="nav-icon fas fa-bullhorn"></i>
                    <p>Pengumuman</p>
                </a>',
                '<a href="' . site_url('message') . '" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Pesan</p>
                </a>',
                '<a href="' . site_url('pengajar/jadwal') . '" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Jadwal Mengajar</p>
                </a><hr style="border:1px solid gray;" />',
                // --------------------------------------------------------------------------------
                '<a href="' . site_url('tugas?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Ujian</p>
                </a>',
                '<a href="' . site_url('materi?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Materi</p>
                </a>',
                '<a href="' . site_url('materi/komentar') . '" class="nav-link">
                    <i class="nav-icon far fa-comments"></i>
                    <p>Komentar Saya</p>
                </a>',
                '<a href="' . site_url('absenjurnal') . '" class="nav-link">
                    <i class="nav-icon far fa-clock"></i>
                    <p>Jurnal & Absen</p>
                </a>',
                '<a href="' . site_url('presensikehadiran') . '" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>Presensi Kehadiran Guru</p>
                </a>',
                '<a href="' . site_url('lessonplan') . '" class="nav-link">
                <i class="nav-icon far fa-list-alt"></i>
                <p>Lesson Plan</p>
                </a><hr style="border:1px solid gray;" />',
               // --------------------------------------------------------------------------------
                '<a href="' . site_url('pengajar/filter') . '" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Filter Pengajar</p>
                </a>',
                '<a href="' . site_url('siswa/filter') . '" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Filter Siswa</p>
                </a>',
                // --------------------------------------------------------------------------------
                '<a href="' . site_url('login/logout') . '" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Logout</p>
                </a><hr style="border:1px solid gray;" />'
                
            )

        );

        $this->menus['siswa'] = array(
            
            0 => array(
                '<a href="' . site_url() . '" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Beranda</p>
                </a>',
                /*
                '<a href="' . site_url('message') . '" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Pesan</p>
                </a>',
                */
                '<a href="' . site_url('siswa/jadwal_mapel') . '" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Jadwal Matapelajaran</p>
                </a>',
                // --------------------------------------------------------------------------------
                '<a href="' . site_url('tugas?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Ujian</p>
                </a>',
                '<a href="' . site_url('materi?clear_filter=true') . '" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Materi</p>
                </a>',
                '<a href="' . site_url('materi/komentar') . '" class="nav-link">
                    <i class="nav-icon far fa-comments"></i>
                    <p>Komentar Saya</p>
                </a><hr style="border:1px solid gray;" />',
               // --------------------------------------------------------------------------------
               /* 
               '<a href="' . site_url('pengajar/filter') . '" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Filter Pengajar</p>
                </a>',
                '<a href="' . site_url('siswa/filter') . '" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Filter Siswa</p>
                </a>',
                */
                // --------------------------------------------------------------------------------
                '<a href="' . site_url('login/logout') . '" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Logout</p>
                </a><hr style="border:1px solid gray;" />'
            )
        );
    }

    public function add($rule, $index, $link)
    {
        $this->menus[$rule][$index][] = $link;
    }

    public function get()
    {
        if (is_admin()) {
            return $this->menus['admin'];
        } elseif (is_pengajar()) {
            return $this->menus['pengajar'];
        } elseif (is_siswa()) {
            return $this->menus['siswa'];
        }
    }
    
    /*
    public function breadcumb()
    {
        $url = $this-load-uri();
        $url = $url->segment(2);
        return $url;
        
        $url = var_dump(parse_url($url, PHP_URL_PATH));
        if($url == "" || "welcome"){return "active";}
        
    }
    */
    
}
