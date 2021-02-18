<?php

/* detail-pengajar.html */
class __TwigTemplate_eee55d9c69784dce413c51105b6b30d1f2c87fc9144a5f00a6520f77def28ddd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
        echo " - ";
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
        <h1>Detail Pengajar</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            ";
        // line 17
        if (is_admin()) {
            // line 18
            echo "                <li class=\"breadcumb-item\">";
            echo anchor(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "List Pengajar");
            echo " / Detail Pengajar</a></li>
            ";
        } else {
            // line 20
            echo "                <li class=\"breadcumb-item\">";
            echo anchor("pengajar/filter", "Filter Pengajar");
            echo " / Detail Pengajar</a></li>
            ";
        }
        // line 22
        echo "        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
";
        // line 27
        echo get_flashdata("pengajar");
        echo "
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-10 col-md-11 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                ";
        // line 32
        if (($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id") != get_sess_data("login", "id"))) {
            // line 33
            echo "                    <div class=\"btn-group\">
                        <div class=\"input-group\">
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, site_url(("message/to/pengajar/" . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"fas fa-comments mr-1\"></i> Kirim Pesan</a>
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "                <div class=\"card-tools\">
                    ";
        // line 40
        if (is_admin()) {
            // line 41
            echo "                        ";
            echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4 btn btn-sm btn-primary", "title" => "Edit Profil pengajar"));
            echo "
                        ";
            // line 42
            echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 btn btn-sm btn-primary", "title" => "Edit Foto pengajar"));
            echo "
                        ";
            // line 43
            if (is_admin()) {
                // line 44
                echo "                        ";
                echo anchor(("login/login_log/" . $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id")), "Login log", array("class" => "btn btn-sm btn-default", "title" => "Login log"));
                echo "
                        ";
            }
            // line 46
            echo "                    ";
        }
        // line 47
        echo "                </div>
            </div>
        
            <!-- /.card-header -->
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td class=\"col-md-9\"><img style=\"width:113px;\" class=\"img-thumbnail\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\" /></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nip"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>";
        // line 82
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            ";
        // line 92
        if (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 0)) {
            // line 93
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 1)) {
            // line 95
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 2)) {
            // line 97
            echo "                                Blocking
                            ";
        }
        // line 99
        echo "                        </td>
                    </tr>
                    <tr>
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class=\"container\">  
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Jadwal Mengajar</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr bgcolor=\"#fbfbfb\">
                                        <th>HARI</th>
                                        <th>MATAPELAJARAN DAN JAM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(get_indo_hari());
        foreach ($context['_seq'] as $context["hari_id"] => $context["h"]) {
            // line 125
            echo "                                    <tr>
                                        <th width=\"15%\">";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "</th>
                                        <td>
                                            ";
            // line 128
            if ((is_admin() == true)) {
                // line 129
                echo "                                            ";
                echo anchor(((((("pengajar/add_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . (isset($context["hari_id"]) ? $context["hari_id"] : null)), "Tambah", array("class" => "pengajar-iframe btn btn-small btn-primary", "title" => ("Tambah jadwal hari " . (isset($context["h"]) ? $context["h"] : null))));
                echo "
                                            ";
            }
            // line 131
            echo "        
                                            ";
            // line 132
            $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => (isset($context["hari_id"]) ? $context["hari_id"] : null), 1 => $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"), 2 => null, 3 => ((((is_pengajar() == true) || (is_pengajar() == true))) ? (1) : (null))));
            // line 133
            echo "                                            ";
            if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
                // line 134
                echo "                                            <table style=\"margin-top:10px;\" class=\"table table-condensed\">
                                                ";
                // line 135
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                    // line 136
                    echo "                                                    ";
                    $context["mk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                    // line 137
                    echo "                                                    ";
                    $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id")));
                    // line 138
                    echo "                                                    ";
                    $context["m"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "mapel_id")));
                    // line 139
                    echo "                                                    <tr ";
                    echo ((($this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "aktif") == 0)) ? ("class=\"error text-muted\"") : ("class=\"info text-info\""));
                    echo ">
                                                        <td width=\"15%\">";
                    // line 140
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                    echo "</td>
                                                        <td width=\"20%\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "</td>
        
                                                        ";
                    // line 144
                    if ((is_admin() == true)) {
                        // line 145
                        echo "                                                        <td width=\"10%\">
                                                            ";
                        // line 146
                        echo anchor(((((("pengajar/edit_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id")), "<i class=\"icon-edit\"></i> Edit", array("title" => "Edit Jadwal Ajar", "class" => "pengajar-iframe-6"));
                        echo "
                                                        </td>
                                                        ";
                    }
                    // line 149
                    echo "        
                                                    </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                                            </table>
                                            ";
            }
            // line 154
            echo "                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hari_id'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 164
        if (is_admin()) {
            // line 165
            echo "            <div class=\"col-sm-6\">
                <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Akun Login</h3>
                    <div class=\"card-tools\">
                        ";
            // line 170
            echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 btn btn-sm btn-primary", "title" => "Edit Username pengajar"));
            echo "
                        ";
            // line 171
            echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 btn btn-sm btn-info", "title" => "Edit Password pengajar"));
            echo "
                    </div>
                    </div>
                    <!-- /.card-header -->
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\">
                                <tbody>
                                    <tr>
                                        <th bgcolor=\"#FBFBFB\">Username</th>
                                        <td>
                                            ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "username"), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <th bgcolor=\"#FBFBFB\">Password</th>
                                        <td>
                                            *********
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- /.card-body -->
                </div>
            </div>
            ";
        }
        // line 199
        echo "            </div>
        </div>
    </div>
</div>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        ";
        // line 207
        if ((is_admin() == true)) {
            // line 208
            echo "        <h3>";
            echo anchor(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "Data Pengajar");
            echo " / Detail Pengajar</h3>
        ";
        } else {
            // line 210
            echo "        <h3>";
            echo anchor("pengajar/filter", "Filter Pengajar");
            echo " / Detail Pengajar</h3>
        ";
        }
        // line 212
        echo "    </div>
    <div class=\"module-body\">
        ";
        // line 214
        echo get_flashdata("pengajar");
        echo "

        ";
        // line 216
        if (($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id") != get_sess_data("login", "id"))) {
            // line 217
            echo "        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-default btn-sm\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, site_url(("message/to/pengajar/" . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-comments\"></i> Kirim Pesan</a>
                </div>
            </div>
        </div>
        <br>
        ";
        }
        // line 226
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>Profil pengajar ";
        // line 229
        echo ((($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "is_admin") == 1)) ? ("<label class=\"label label-warning\">Administrator</label>") : (""));
        echo "</strong>
                ";
        // line 230
        if ((is_admin() == true)) {
            // line 231
            echo "                <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                    ";
            // line 232
            echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4 btn btn-small btn-primary", "title" => "Edit Profil Pengajar"));
            echo "
                    ";
            // line 233
            echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 btn btn-small btn-primary", "title" => "Edit Foto Pengajar"));
            echo "
                    ";
            // line 234
            if (is_admin()) {
                // line 235
                echo "                    ";
                echo anchor(("login/login_log/" . $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id")), "Login log", array("class" => "btn btn-small btn-default", "title" => "Login log"));
                echo "
                    ";
            }
            // line 237
            echo "                </div>
                ";
        }
        // line 239
        echo "            </div>
            <div class=\"panel-body\">
                <table class=\"table\">
                    <tr>
                        <th bgcolor=\"#FBFBFB\" width=\"25%\" style=\"border-top: 0px;\">NIP</th>
                        <td style=\"border-top: 0px;\">";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nip"), "html", null, true);
        echo "</td>
                        <td rowspan=\"5\" width=\"15%\" style=\"border-top: 0px;\">
                            <img style=\"width:113px;\" class=\"img-polaroid\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Nama</th>
                        <td>";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Jenis Kelamin</th>
                        <td>";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tempat Lahir</th>
                        <td>";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tanggal Lahir</th>
                        <td>";
        // line 263
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Alamat</th>
                        <td colspan=\"2\">";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Status</th>
                        <td colspan=\"2\">
                            ";
        // line 272
        if (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 0)) {
            // line 273
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 1)) {
            // line 275
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 2)) {
            // line 277
            echo "                                Blocking
                            ";
        }
        // line 279
        echo "                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Jadwal Mengajar</strong>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                                <tr bgcolor=\"#fbfbfb\">
                                    <th>HARI</th>
                                    <th>MATAPELAJARAN DAN JAM</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 300
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(get_indo_hari());
        foreach ($context['_seq'] as $context["hari_id"] => $context["h"]) {
            // line 301
            echo "                                <tr>
                                    <th width=\"15%\">";
            // line 302
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "</th>
                                    <td>
                                        ";
            // line 304
            if ((is_admin() == true)) {
                // line 305
                echo "                                        ";
                echo anchor(((((("pengajar/add_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . (isset($context["hari_id"]) ? $context["hari_id"] : null)), "Tambah", array("class" => "pengajar-iframe btn btn-small btn-primary", "title" => ("Tambah jadwal hari " . (isset($context["h"]) ? $context["h"] : null))));
                echo "
                                        ";
            }
            // line 307
            echo "
                                        ";
            // line 308
            $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => (isset($context["hari_id"]) ? $context["hari_id"] : null), 1 => $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"), 2 => null, 3 => ((((is_pengajar() == true) || (is_pengajar() == true))) ? (1) : (null))));
            // line 309
            echo "                                        ";
            if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
                // line 310
                echo "                                        <table style=\"margin-top:10px;\" class=\"table table-condensed\">
                                            ";
                // line 311
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                    // line 312
                    echo "                                                ";
                    $context["mk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                    // line 313
                    echo "                                                ";
                    $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id")));
                    // line 314
                    echo "                                                ";
                    $context["m"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "mapel_id")));
                    // line 315
                    echo "                                                <tr ";
                    echo ((($this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "aktif") == 0)) ? ("class=\"error text-muted\"") : ("class=\"info text-info\""));
                    echo ">
                                                    <td width=\"15%\">";
                    // line 316
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 317
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                    echo "</td>
                                                    <td width=\"20%\">";
                    // line 318
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "</td>

                                                    ";
                    // line 320
                    if ((is_admin() == true)) {
                        // line 321
                        echo "                                                    <td width=\"10%\">
                                                        ";
                        // line 322
                        echo anchor(((((("pengajar/edit_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id")), "<i class=\"icon-edit\"></i> Edit", array("title" => "Edit Jadwal Ajar", "class" => "pengajar-iframe-6"));
                        echo "
                                                    </td>
                                                    ";
                    }
                    // line 325
                    echo "
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "                                        </table>
                                        ";
            }
            // line 330
            echo "                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hari_id'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 339
        if ((is_admin() == true)) {
            // line 340
            echo "        <div class=\"row-fluid\">
            <div class=\"span5\">
                <div class=\"panel panel-default\" id=\"akun\">
                    <div class=\"panel-heading\">
                        <strong>Akun Login</strong>
                        <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                            ";
            // line 346
            echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 btn btn-small btn-primary", "title" => "Edit Username pengajar"));
            echo "
                            ";
            // line 347
            echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 btn btn-small btn-primary", "title" => "Edit Password pengajar"));
            echo "
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th width=\"30%\" bgcolor=\"#FBFBFB\" style=\"border-top: 0px;\">Username</th>
                                    <td style=\"border-top: 0px;\">
                                        ";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "username"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th bgcolor=\"#FBFBFB\">Password</th>
                                    <td>
                                        *********
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 372
        echo "    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "detail-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 372,  686 => 356,  674 => 347,  670 => 346,  662 => 340,  660 => 339,  652 => 333,  644 => 330,  640 => 328,  632 => 325,  626 => 322,  623 => 321,  621 => 320,  616 => 318,  612 => 317,  606 => 316,  601 => 315,  598 => 314,  595 => 313,  592 => 312,  588 => 311,  585 => 310,  582 => 309,  580 => 308,  577 => 307,  571 => 305,  569 => 304,  564 => 302,  561 => 301,  557 => 300,  534 => 279,  530 => 277,  526 => 275,  522 => 273,  520 => 272,  512 => 267,  505 => 263,  498 => 259,  491 => 255,  484 => 251,  476 => 246,  471 => 244,  464 => 239,  460 => 237,  454 => 235,  452 => 234,  448 => 233,  444 => 232,  441 => 231,  439 => 230,  435 => 229,  430 => 226,  421 => 220,  416 => 217,  414 => 216,  409 => 214,  405 => 212,  399 => 210,  393 => 208,  391 => 207,  381 => 199,  361 => 182,  347 => 171,  343 => 170,  336 => 165,  334 => 164,  325 => 157,  317 => 154,  313 => 152,  305 => 149,  299 => 146,  296 => 145,  294 => 144,  289 => 142,  285 => 141,  279 => 140,  274 => 139,  271 => 138,  268 => 137,  265 => 136,  261 => 135,  258 => 134,  255 => 133,  253 => 132,  250 => 131,  244 => 129,  242 => 128,  237 => 126,  234 => 125,  230 => 124,  203 => 99,  199 => 97,  195 => 95,  191 => 93,  189 => 92,  181 => 87,  173 => 82,  165 => 77,  157 => 72,  149 => 67,  141 => 62,  133 => 57,  121 => 47,  118 => 46,  112 => 44,  110 => 43,  106 => 42,  101 => 41,  99 => 40,  96 => 39,  89 => 35,  85 => 33,  83 => 32,  75 => 27,  68 => 22,  62 => 20,  56 => 18,  54 => 17,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
