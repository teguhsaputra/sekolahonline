<?php

/* search-results.html */
class __TwigTemplate_804c6b99321ce304cba5ce363630e8eafc98c7f0f25abe29738262d079515342 extends Twig_Template
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
        echo "Pencarian - ";
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
        <h1>Pencarian</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Pencarian</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"card m-4\">
    <div class=\"card-body\">
        <div class=\"well well-small\" style=\"box-shadow: none;\">
            Hasil pencarian dengan kata kunci : <b>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "</b>
        </div>

        ";
        // line 31
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "siswa")))) {
            // line 32
            echo "        <b><i class=\"fas fa-group\"></i> Siswa </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "siswa")), "html", null, true);
            echo " record)
        <table class=\"table table-bordered table-striped\">
            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "siswa"));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 35
                echo "            <tr>
                <td>
                    <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-polaroid img-circle float-left\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "medium", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
                    <b>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
                echo " ";
                echo (((!twig_test_empty($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nis")) . ")</span>")) : (""));
                echo "</b>
                    <br>";
                // line 39
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") != 3)) ? (($this->getAttribute($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_aktif"), "nama") . " , ")) : ("")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin"), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "agama"), "html", null, true);
                echo "
                </td>
                <td width=\"20%\">
                    <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">
                        ";
                // line 43
                if (is_admin()) {
                    // line 44
                    echo "                        <li><a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                    echo "\"><i class=\"fas fa-search\"></i> Detail</a></li>
                        <li class=\"dropdown\">
                            <a class=\"btn btn-default btn-sm\" href=\"#\" id=\"act-";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fas fa-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                    echo "\">
                                <li>";
                    // line 48
                    echo anchor(((("siswa/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4", "title" => "Edit Profil Siswa"));
                    echo "</li>
                                <li>";
                    // line 49
                    echo anchor(((("siswa/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5", "title" => "Edit Foto Siswa"));
                    echo "</li>
                                ";
                    // line 50
                    if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") != 3)) {
                        // line 51
                        echo "                                <li>";
                        echo anchor(((("siswa/moved_class/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Kelas Aktif", array("class" => "siswa-iframe-kelas-aktif", "title" => "Edit Kelas Aktif"));
                        echo "</li>
                                ";
                    }
                    // line 53
                    echo "                                <li>";
                    echo anchor(((("siswa/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2", "title" => "Edit Username Siswa"));
                    echo "</li>
                                <li>";
                    // line 54
                    echo anchor(((("siswa/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3", "title" => "Edit Password Siswa"));
                    echo "</li>
                            </ul>
                        </li>
                        ";
                } else {
                    // line 58
                    echo "                        <li><a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, site_url(("siswa/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                    echo "\"><i class=\"fas fa-search\"></i> Detail</a></li>
                        ";
                }
                // line 60
                echo "                    </ul>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </table>
        <br>
        ";
        }
        // line 67
        echo "
        ";
        // line 68
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengajar")))) {
            // line 69
            echo "        <b><i class=\"fas fa-user\"></i> Pengajar </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengajar")), "html", null, true);
            echo " record)
        <table class=\"table table-bordered table-striped\">
            ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengajar"));
            foreach ($context['_seq'] as $context["no"] => $context["v"]) {
                // line 72
                echo "            <tr>
                <td>
                    <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-polaroid img-circle float-left\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "medium", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
                    <b>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
                echo " ";
                echo (((!twig_test_empty($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")) . ")</span>")) : (""));
                echo "</b>
                    ";
                // line 76
                $context["is_admin"] = get_row_data("login_model", "retrieve", array(0 => null, 1 => null, 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "is_admin");
                // line 77
                echo "                    ";
                if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                    // line 78
                    echo "                        <span class=\"label label-warning\">Administrator</span>
                    ";
                }
                // line 80
                echo "                    <br><b>Alamat :</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
                echo "
                </td>
                <td width=\"20%\">
                    <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">
                        ";
                // line 84
                if ((is_admin() == true)) {
                    // line 85
                    echo "                        <li><a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                    echo "\"><i class=\"fas fa-search\"></i> Detail</a></li>
                        <li class=\"dropdown\">
                            <a class=\"btn btn-default btn-sm\" href=\"#\" id=\"act-";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fas fa-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                    echo "\">
                                <li>";
                    // line 89
                    echo anchor(((("pengajar/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4", "title" => "Edit Profil Pengajar"));
                    echo "</li>
                                <li>";
                    // line 90
                    echo anchor(((("pengajar/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5", "title" => "Edit Foto Pengajar"));
                    echo "</li>
                                <li>";
                    // line 91
                    echo anchor(((("pengajar/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2", "title" => "Edit Username Pengajar"));
                    echo "</li>
                                <li>";
                    // line 92
                    echo anchor(((("pengajar/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3", "title" => "Edit Password Pengajar"));
                    echo "</li>
                            </ul>
                        </li>
                        ";
                } else {
                    // line 96
                    echo "                        <li><a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                    echo "\"><i class=\"fas fa-search\"></i> Detail</a></li>
                        ";
                }
                // line 98
                echo "                    </ul>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        </table>
        <br>
        ";
        }
        // line 105
        echo "
        ";
        // line 106
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "materi")))) {
            // line 107
            echo "        <b><i class=\"fas fa-book\"></i> Materi </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "materi")), "html", null, true);
            echo " record)
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped\">
                ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "materi"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 111
                echo "                    ";
                if ((is_admin() == true)) {
                    // line 112
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 113
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 114
                    echo "                    ";
                } elseif ((is_pengajar() == true)) {
                    // line 115
                    echo "                        ";
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id") == get_sess_data("user", "id"))) {
                        // line 116
                        echo "                            ";
                        $context["action_edit"] = true;
                        // line 117
                        echo "                            ";
                        $context["action_delete"] = true;
                        // line 118
                        echo "                        ";
                    } else {
                        // line 119
                        echo "                            ";
                        $context["action_edit"] = false;
                        // line 120
                        echo "                            ";
                        $context["action_delete"] = false;
                        // line 121
                        echo "                        ";
                    }
                    // line 122
                    echo "                    ";
                }
                // line 123
                echo "
                    ";
                // line 124
                if (is_siswa()) {
                    // line 125
                    echo "                    <tr>
                        <td>
                            <a href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                    echo "\" target=\"_tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "</a>
                        </td>
                    </tr>
                    ";
                } else {
                    // line 131
                    echo "                    <tr>
                        <td>
                            ";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "
                        </td>
                        <td width=\"20%\">
                            <div class=\"btn-group\">
                                ";
                    // line 137
                    if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                        // line 138
                        echo "                                    ";
                        $context["url_type"] = "file";
                        // line 139
                        echo "                                ";
                    } else {
                        // line 140
                        echo "                                    ";
                        $context["url_type"] = "tertulis";
                        // line 141
                        echo "                                ";
                    }
                    // line 142
                    echo "                                ";
                    echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"fas fa-search\"></i> Detail", array("class" => "btn btn-default btn-sm", "target" => "_tab"));
                    echo "

                                ";
                    // line 144
                    if (((isset($context["action_edit"]) ? $context["action_edit"] : null) == true)) {
                        // line 145
                        echo "                                    ";
                        echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(((current_url() . "?q=") . (isset($context["keyword"]) ? $context["keyword"] : null)))), "<i class=\"fas fa-edit\"></i> Edit", array("class" => "btn btn-default btn-sm"));
                        echo "
                                ";
                    }
                    // line 147
                    echo "
                                ";
                    // line 148
                    if (((isset($context["action_delete"]) ? $context["action_delete"] : null) == true)) {
                        // line 149
                        echo "                                    ";
                        echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(((current_url() . "?q=") . (isset($context["keyword"]) ? $context["keyword"] : null)))), "<i class=\"fas fa-trash\"></i> Hapus", array("class" => "btn btn-default btn-sm", "onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                        echo "
                                ";
                    }
                    // line 151
                    echo "                            </div>
                        </td>
                    </tr>
                    ";
                }
                // line 155
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "            </table>
        </div>
        <br>
        ";
        }
        // line 160
        echo "
        ";
        // line 161
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "tugas")))) {
            // line 162
            echo "        <b><i class=\"fas fa-tasks\"></i> Tugas </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "tugas")), "html", null, true);
            echo " record)
        <table class=\"table table-bordered table-striped\">
            ";
            // line 164
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "tugas"));
            foreach ($context['_seq'] as $context["no"] => $context["m"]) {
                // line 165
                echo "            ";
                if ((is_admin() || is_pengajar())) {
                    // line 166
                    echo "                <tr>
                    <td>
                        ";
                    // line 168
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "
                    </td>
                    <td width=\"20%\">
                        <div class=\"btn-group\">
                            ";
                    // line 172
                    if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                        // line 173
                        echo "                                ";
                        echo anchor(("tugas/manajemen_soal/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon fas fa-tasks\"></i> Soal", array("class" => "btn btn-primary btn-sm"));
                        echo "
                            ";
                    }
                    // line 175
                    echo "                            ";
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0)) {
                        // line 176
                        echo "                                ";
                        echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(((current_url() . "?q=") . (isset($context["keyword"]) ? $context["keyword"] : null)))), "<i class=\"fas fa-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-sm"));
                        echo "
                            ";
                    } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                        // line 178
                        echo "                                ";
                        echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(((current_url() . "?q=") . (isset($context["keyword"]) ? $context["keyword"] : null)))), "<i class=\"fas fa-minus\"></i> Tutup", array("class" => "btn btn-danger btn-sm"));
                        echo "
                            ";
                    }
                    // line 180
                    echo "
                            ";
                    // line 181
                    echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(((current_url() . "?q=") . (isset($context["keyword"]) ? $context["keyword"] : null)))), "<i class=\"fas fa-edit\"></i> Edit", array("class" => "btn btn-default btn-sm"));
                    echo "
                            ";
                    // line 182
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_id") == 3)) {
                        // line 183
                        echo "                                ";
                        echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"fas fa-eye-open\"></i> Lihat Nilai", array("class" => "btn btn-info btn-sm"));
                        echo "
                            ";
                    } else {
                        // line 185
                        echo "                                ";
                        echo anchor(("tugas/koreksi/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"fas fa-check\"></i> Koreksi", array("class" => "btn btn-info btn-sm"));
                        echo "
                            ";
                    }
                    // line 187
                    echo "                        </div>
                    </td>
                </tr>
            ";
                } else {
                    // line 191
                    echo "                <tr>
                    <td>
                        <a href=\"";
                    // line 193
                    echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                // line 197
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        </table><br>
        ";
        }
        // line 200
        echo "
        ";
        // line 201
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pesan")))) {
            // line 202
            echo "        <b><i class=\"fas fa-comments\"></i> Pesan </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pesan")), "html", null, true);
            echo " record)
        <div class=\"message\">
            <table class=\"table table-message table-striped\">
            <tbody>
                ";
            // line 206
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pesan"));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 207
                echo "                <tr class=\"";
                echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "opened") == 0)) ? ("unread") : (""));
                echo " clickable-row\" data-href=\"";
                echo twig_escape_filter($this->env, site_url(((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "#msg-") . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id"))), "html", null, true);
                echo "\">
                    <td class=\"cell-author\">
                        <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-polaroid img-circle float-left\" src=\"";
                // line 209
                echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "jenis_kelamin")), "html", null, true);
                echo "\">
                        <a href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
                echo "</a>
                        <br><small>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</small>
                    </td>
                    <td class=\"cell-title hidden-phone hidden-tablet\">
                        <a class=\"float-right\" style=\"margin-left:10px;\" href=\"";
                // line 214
                echo twig_escape_filter($this->env, site_url((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "/?confirm=1#confirm")), "html", null, true);
                echo "\"><i class=\"fas fa-trash\"></i></a>
                        ";
                // line 215
                if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver")))) {
                    // line 216
                    echo "                        <div>To <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "link_profil"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "nama"), "html", null, true);
                    echo "</a></div>
                        ";
                }
                // line 218
                echo "                        ";
                echo character_limiter(strip_tags($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "content")), 80, "...");
                echo "
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "            </tbody>
            </table>
        </div>
            <br>
            ";
        }
        // line 227
        echo "
            ";
        // line 228
        if ((!twig_test_empty($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengumuman")))) {
            // line 229
            echo "            <b><i class=\"fas fa-bullhorn\"></i> Pengumuman </b>(ditemukan ";
            echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengumuman")), "html", null, true);
            echo " record)
            <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"5%\">ID</th>
                    <th>Judul</th>
                    <th width=\"17%\">Tgl. Tampil</th>
                    <th width=\"17%\">Tgl. Tutup</th>
                    <th width=\"15%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 241
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "pengumuman"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 242
                echo "                <tr>
                    <td><b>";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "</b></td>
                    <td><a href=\"";
                // line 244
                echo twig_escape_filter($this->env, site_url(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"), "html", null, true);
                echo "</b></a></td>
                    <td>";
                // line 245
                echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil")), "html", null, true);
                echo "</td>
                    <td>";
                // line 246
                echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tutup")), "html", null, true);
                echo "</td>
                    <td>
                        <div class=\"btn-group\">
                        ";
                // line 249
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "allow_action"));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 250
                    echo "                            ";
                    if (((isset($context["a"]) ? $context["a"] : null) == "detail")) {
                        // line 251
                        echo "                            <a class=\"btn btn-default btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, site_url(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" title=\"Detail\"><i class=\"fas fa-search\"></i> Detail</a>
                            ";
                    }
                    // line 253
                    echo "
                            ";
                    // line 254
                    if (((isset($context["a"]) ? $context["a"] : null) == "edit")) {
                        // line 255
                        echo "                            <a class=\"btn btn-default btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, site_url(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fas fa-edit\"></i> Edit</a>
                            ";
                    }
                    // line 257
                    echo "
                            ";
                    // line 258
                    if (((isset($context["a"]) ? $context["a"] : null) == "delete")) {
                        // line 259
                        echo "                            <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"btn btn-default btn-sm\" href=\"";
                        echo twig_escape_filter($this->env, site_url(("pengumuman/delete/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"fas fa-trash\"></i> Delete</a>
                            ";
                    }
                    // line 261
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "            </tbody>
            </table>
            <br>
        ";
        }
        // line 270
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "search-results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 270,  686 => 266,  677 => 262,  671 => 261,  665 => 259,  663 => 258,  660 => 257,  654 => 255,  652 => 254,  649 => 253,  643 => 251,  640 => 250,  636 => 249,  630 => 246,  626 => 245,  620 => 244,  616 => 243,  613 => 242,  609 => 241,  593 => 229,  591 => 228,  588 => 227,  581 => 222,  570 => 218,  562 => 216,  560 => 215,  556 => 214,  550 => 211,  544 => 210,  540 => 209,  532 => 207,  528 => 206,  520 => 202,  518 => 201,  515 => 200,  511 => 198,  505 => 197,  496 => 193,  492 => 191,  486 => 187,  480 => 185,  474 => 183,  472 => 182,  468 => 181,  465 => 180,  459 => 178,  453 => 176,  450 => 175,  444 => 173,  442 => 172,  435 => 168,  431 => 166,  428 => 165,  424 => 164,  418 => 162,  416 => 161,  413 => 160,  407 => 156,  401 => 155,  395 => 151,  389 => 149,  387 => 148,  384 => 147,  378 => 145,  376 => 144,  370 => 142,  367 => 141,  364 => 140,  361 => 139,  358 => 138,  356 => 137,  349 => 133,  345 => 131,  336 => 127,  332 => 125,  330 => 124,  327 => 123,  324 => 122,  321 => 121,  318 => 120,  315 => 119,  312 => 118,  309 => 117,  306 => 116,  303 => 115,  300 => 114,  297 => 113,  294 => 112,  291 => 111,  287 => 110,  280 => 107,  278 => 106,  275 => 105,  270 => 102,  261 => 98,  255 => 96,  248 => 92,  244 => 91,  240 => 90,  236 => 89,  232 => 88,  228 => 87,  222 => 85,  220 => 84,  212 => 80,  208 => 78,  205 => 77,  203 => 76,  197 => 75,  193 => 74,  189 => 72,  185 => 71,  179 => 69,  177 => 68,  174 => 67,  169 => 64,  160 => 60,  154 => 58,  147 => 54,  142 => 53,  136 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  112 => 44,  110 => 43,  99 => 39,  93 => 38,  89 => 37,  85 => 35,  81 => 34,  75 => 32,  73 => 31,  67 => 28,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
