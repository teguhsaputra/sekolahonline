<?php

/* backup-restore.html */
class __TwigTemplate_57b88c0e8450f62012d5f04fc8e620b05e8467b168e4527e1db57133bbfb3073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Backup & Restore - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Backup & Restore Database</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Backup & Restore Database</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <p>Sejak versi 1.8, fitur backup & restore database sistem yang sebelumnya kami hilangkan, dan kami ganti dengan cara yang dijalaskan dibawah. Hal tersebut kami lakukan karena fitur backup & restore yang sebelumnya memiliki beberapa kekurangan dan berpotensi terjadi kesalahan.</p>
        
                <div class=\"row-fluid\">
                    <div class=\"col-12\">
                        <div class=\"bs-callout bs-callout-info\">
                            <h4><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#cara-backup\">Cara backup</a></h4>
                            <div id=\"cara-backup\" class=\"collapse\">
                                <hr style=\"margin-top:0px;margin-bottom: 10px;\">
                                <ol>
                                    <li>
                                        <b>Masuk ke halaman phpmyadmin</b>
                                        <ul>
                                            <li>Jika aplikasi masih dilocal, phpmyadmin dapat diakses dengan cara menuju ke alamat http://localhost/phpmyadmin</li>
                                            <li>Jika sudah berada dihosting, silakan menuju ke cpanel kemudian pilih menu phpmyadmin</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <b>Pilih database yang anda gunakan</b><br>
                                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url("assets/images/backup-pilih-database.png"), "html", null, true);
        echo "\" class=\"img-polaroid\">
                                    </li>
                                    <li>
                                        <b>Pilih menu export</b><br>
                                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url("assets/images/backup-pilih-export.png"), "html", null, true);
        echo "\" class=\"img-polaroid\">
                                    </li>
                                    <li>
                                        <b>Klik tombol go</b><br>
                                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, base_url("assets/images/backup-pilih-go.png"), "html", null, true);
        echo "\" class=\"img-polaroid\">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"col-12\">
                        <div class=\"bs-callout bs-callout-warning\">
                            <h4>Cara restore</h4>
                            <hr style=\"margin-top:0px;margin-bottom: 10px;\">
                            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#cara-restore-1\">- Kondisi aplikasi masih dilocalhost</a></b>
                            <div id=\"cara-restore-1\" class=\"collapse\">
                                <ol>
                                    <li>
                                        <b>Masuk ke halaman phpmyadmin dengan cara menuju ke alamat http://localhost/phpmyadmin</b>
                                    </li>
                                    <li>
                                        <b>Buat database baru</b>
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, base_url("assets/images/restore-local-buat-db.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, base_url("assets/images/restore-local-buat-db-2.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <b>Import file</b>
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url("assets/images/restore-local-import-file.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url("assets/images/restore-local-import-file-2.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
        
                            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#cara-restore-2\">- Kondisi aplikasi dihosting</a></b>
                            <div id=\"cara-restore-2\" class=\"collapse\">
                                <ol>
                                    <li><b>Masuk ke halaman cpanel</b></li>
                                    <li>
                                        <b>Buat database baru</b>
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-1.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-2.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-3.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <b>Pilih user database</b>
                                        <br>
                                        Jika menggunakan user yang sudah ada atau yang sebelumnya dipakai
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-user-1.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-user-2.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-user-3.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                        <br>
                                        Jika ingin menggunakan user baru
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-user-4.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                        <br>
                                        Setelah user baru dibuat, tambahkan user tersebut ke database seperti cara \"menggunakan user yang sudah ada\"
                                    </li>
                                    <li>
                                        <b>Masuk ke halaman phpmyadmin</b>
                                        <ul style=\"list-style: none;\">
                                            <li><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-phpmyadmin-1.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-phpmyadmin-2.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-phpmyadmin-3.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                            <li><br><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-phpmyadmin-4.png"), "html", null, true);
        echo "\" class=\"img-polaroid\"></li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
        
                            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#cara-restore-3\">- Sesuaikan konfigurasi database pada file application/config/database.php</a></b>
                            <div id=\"cara-restore-3\" class=\"collapse\">
                                <br>
                                <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, base_url("assets/images/restore-host-config.png"), "html", null, true);
        echo "\" class=\"img-polaroid\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "backup-restore.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 135,  216 => 126,  212 => 125,  208 => 124,  204 => 123,  193 => 115,  185 => 110,  181 => 109,  177 => 108,  166 => 100,  162 => 99,  158 => 98,  142 => 85,  138 => 84,  129 => 78,  125 => 77,  100 => 55,  93 => 51,  86 => 47,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
