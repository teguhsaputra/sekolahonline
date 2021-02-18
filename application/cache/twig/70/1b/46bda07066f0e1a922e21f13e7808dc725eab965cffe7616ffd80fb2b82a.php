<?php

/* detail-siswa.html */
class __TwigTemplate_701b46bda07066f0e1a922e21f13e7808dc725eab965cffe7616ffd80fb2b82a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
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
        <h1>Detail Siswa</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            ";
        // line 17
        if (is_admin()) {
            // line 18
            echo "                <li class=\"breadcumb-item\">";
            echo anchor(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "List Siswa");
            echo " / Detail Siswa</a></li>
            ";
        } else {
            // line 20
            echo "                <li class=\"breadcumb-item\">";
            echo anchor("siswa/filter", "Filter Siswa");
            echo " / Detail Siswa</a></li>
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
        echo get_flashdata("siswa");
        echo "
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-10 col-md-11 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                ";
        // line 32
        if (($this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "id") != get_sess_data("login", "id"))) {
            // line 33
            echo "                    <div class=\"btn-group\">
                        <div class=\"input-group\">
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, site_url(("message/to/siswa/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id"))), "html", null, true);
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
            echo anchor(((("siswa/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4 btn btn-sm btn-primary", "title" => "Edit Profil Siswa"));
            echo "
                        ";
            // line 42
            echo anchor(((("siswa/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5 btn btn-sm btn-primary", "title" => "Edit Foto Siswa"));
            echo "
                        ";
            // line 43
            if (is_admin()) {
                // line 44
                echo "                        ";
                echo anchor(("login/login_log/" . $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "id")), "Login log", array("class" => "btn btn-sm btn-default", "title" => "Login log"));
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
        echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "foto"), "medium", $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin")), "html", null, true);
        echo "\" /></td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk</td>
                        <td>:</td>
                        <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tahun_masuk"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>";
        // line 87
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "agama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            ";
        // line 102
        if (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 0)) {
            // line 103
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 1)) {
            // line 105
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 2)) {
            // line 107
            echo "                                Blocking
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 3)) {
            // line 109
            echo "                                Alumni
                            ";
        }
        // line 111
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
            <div class=\"col-sm-6\">
                <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Riwayat Kelas</h3>
                    <div class=\"card-tools\">
                    ";
        // line 126
        if ((is_admin() && ((isset($context["status_id"]) ? $context["status_id"] : null) != 3))) {
            // line 127
            echo "                        ";
            echo anchor(((("siswa/moved_class/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Pindah Kelas", array("class" => "siswa-iframe btn btn-sm btn-primary", "title" => "Pindah siswa ke Kelas lain"));
            echo "
                    ";
        }
        // line 129
        echo "                    </div>
                </div>
                    <!-- /.card-header -->
                        <div class=\"card-body\">
                            <table class=\"table table-bordered\">
                            <thead>
                            <th bgcolor=\"#FBFBFB\">No</th>
                            <th bgcolor=\"#FBFBFB\">Kelas</th>
                            ";
        // line 137
        if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
            // line 138
            echo "                            <th bgcolor=\"#FBFBFB\">Aktif</th>
                            ";
        }
        // line 140
        echo "                            </thead>
                            <tbody>
                            ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["siswa_kelas"]) ? $context["siswa_kelas"] : null), "results"));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 143
            echo "                            <tr>
                                <td>";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : null), "html", null, true);
            echo ".</td>
                                <td>
                                    ";
            // line 146
            echo twig_escape_filter($this->env, get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_id"), 1 => true), "nama"), "html", null, true);
            echo "
                                </td>
                                ";
            // line 148
            if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
                // line 149
                echo "                                <td>
                                    ";
                // line 150
                if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "aktif") == 1)) {
                    // line 151
                    echo "                                        <i class=\"fas fa-check\"></i>
                                    ";
                }
                // line 153
                echo "                                </td>
                                ";
            }
            // line 155
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                            </tbody>
                            </table>
                        </div>
                    <!-- /.card-body -->
                </div>
            </div>
            ";
        // line 163
        if (is_admin()) {
            // line 164
            echo "            <div class=\"col-sm-6\">
                <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Akun Login</h3>
                    <div class=\"card-tools\">
                        ";
            // line 169
            echo anchor(((("siswa/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2 btn btn-sm btn-primary", "title" => "Edit Username Siswa"));
            echo "
                        ";
            // line 170
            echo anchor(((("siswa/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3 btn btn-sm btn-info", "title" => "Edit Password Siswa"));
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
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "username"), "html", null, true);
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
        // line 198
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 198,  342 => 181,  328 => 170,  324 => 169,  317 => 164,  315 => 163,  307 => 157,  300 => 155,  296 => 153,  292 => 151,  290 => 150,  287 => 149,  285 => 148,  280 => 146,  275 => 144,  272 => 143,  268 => 142,  264 => 140,  260 => 138,  258 => 137,  248 => 129,  242 => 127,  240 => 126,  223 => 111,  219 => 109,  215 => 107,  211 => 105,  207 => 103,  205 => 102,  197 => 97,  189 => 92,  181 => 87,  173 => 82,  165 => 77,  157 => 72,  149 => 67,  141 => 62,  133 => 57,  121 => 47,  118 => 46,  112 => 44,  110 => 43,  106 => 42,  101 => 41,  99 => 40,  96 => 39,  89 => 35,  85 => 33,  83 => 32,  75 => 27,  68 => 22,  62 => 20,  56 => 18,  54 => 17,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
