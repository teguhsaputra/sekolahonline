<?php

/* welcome.html */
class __TwigTemplate_eac5bd087f7d7ce830ba114e3d5059d5d345ccf707b1b3ae165ebebcc76f7e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Main content -->
    <section class=\"content\">    
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <blockquote>
                        <i class=\"fas fa-address-card\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, tgl_indo(date("Y-m-d")), "html", null, true);
        echo ", IP anda: ";
        echo twig_escape_filter($this->env, get_ip(), "html", null, true);
        echo "<br/>
                        <i class=\"fas fa-building\"></i> Selamat datang di <b>Sekolah Online ";
        // line 11
        echo twig_escape_filter($this->env, get_pengaturan("nama-sekolah", "value"), "html", null, true);
        echo "</b><br/>
                        <i class=\"fas fa-map\"></i> Alamat: ";
        // line 12
        echo twig_escape_filter($this->env, get_pengaturan("alamat", "value"), "html", null, true);
        echo "<br/>
                        ";
        // line 13
        if ((!twig_test_empty(get_pengaturan("telp", "value")))) {
            // line 14
            echo "                        <i class=\"fas fa-phone\"></i> Telpon: ";
            echo twig_escape_filter($this->env, get_pengaturan("telp", "value"), "html", null, true);
            echo "
                        ";
        }
        // line 16
        echo "                    </blockquote>
                </div>
            </div>
            ";
        // line 19
        if (is_admin()) {
            // line 20
            echo "            ";
            if (((isset($context["count_mapel_kelas"]) ? $context["count_mapel_kelas"] : null) == 0)) {
                // line 21
                echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\"><b>Atur data berikut supaya aplikasi sekolah online dapat berjalan dengan baik:</b></h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <tr>
                                    <td>
                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-book\"></i> Manajemen Matapelajaran</b></a>
                                    </td>
                                    <td>
                                        Input semua Matapelajaran yang ada di sekolah
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-tasks\"></i> Manajemen Kelas</b></a>
                                    </td>
                                    <td>
                                        Input semua Kelas yang ada di sekolah
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-paste\"></i> Matapelajaran Kelas</b></a>
                                    </td>
                                    <td>
                                        Atur Matapelajaran pada tiap-tiap Kelas
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 59
            echo "            
            <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-info\">
                            <div class=\"inner\">
                                <h3>";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["jml_siswa"]) ? $context["jml_siswa"] : null), "html", null, true);
            echo "</h3>
                    
                                <p>Siswa</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person\"></i>
                            </div>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, site_url("siswa/index/1"), "html", null, true);
            echo "\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-success\">
                            <div class=\"inner\">
                                <h3>";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
            echo "</h3>
                    
                                <p>Pengajar</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person\"></i>
                            </div>
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, site_url("pengajar/index/1"), "html", null, true);
            echo "\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-warning\">
                            <div class=\"inner\">
                                <h3>";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["jml_siswa_pending"]) ? $context["jml_siswa_pending"] : null), "html", null, true);
            echo "</h3>
                    
                                <p>Pending Siswa</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, site_url("siswa/index/0"), "html", null, true);
            echo "\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-danger\">
                            <div class=\"inner\">
                                <h3>";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar_pending"]) ? $context["jml_pengajar_pending"] : null), "html", null, true);
            echo "</h3>
                    
                                <p>Pending Pengajar</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, site_url("pengajar/index/0"), "html", null, true);
            echo "\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-primary\">
                            <h3 class=\"card-title\">Pengumuman</h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 131
                echo "                                <tr>
                                    <td>";
                // line 132
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-danger\">
                            <h3 class=\"card-title\">Riwayat login pengguna</h3>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"show-last-login-list\"></div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 151
        echo "        </div>
    </section>
    <!-- end section admin -->
    
    ";
        // line 155
        if (is_pengajar()) {
            // line 156
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 157
            echo "    <section class=\"content\">    
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
            // line 160
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 161
                echo "                <div class=\"col-12\">
                    <blockquote class=\"quote-warning\">
                    <b>Peraturan e-learning : </b><br>
                    ";
                // line 164
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
                    </blockquote>
                </div>
                ";
            }
            // line 168
            echo "                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-primary\">
                            <h3 class=\"card-title\">Pengumuman</h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                ";
            // line 175
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 176
                echo "                                <tr>
                                    <td>";
                // line 177
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-danger\">
                            <h3 class=\"card-title\">Riwayat login pengguna</h3>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"show-last-login-list\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        }
        // line 198
        echo "    <!-- end section pengajar -->
    
    ";
        // line 200
        if (is_siswa()) {
            // line 201
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 202
            echo "    <section class=\"content\">    
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
            // line 205
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 206
                echo "                <div class=\"col-12\">
                    <blockquote class=\"quote-warning\">
                    <b>Peraturan e-learning : </b><br>
                    ";
                // line 209
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
                    </blockquote>
                </div>
                ";
            }
            // line 213
            echo "            
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header  bg-primary\">
                            <h3 class=\"card-title\">Informasi Ujian Terbaru</h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                ";
            // line 221
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 222
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 224
                echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-success\">
                            <h3 class=\"card-title\">Materi terbaru</h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                ";
            // line 239
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materi_terbaru"]) ? $context["materi_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 240
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 242
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" target=\"_tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-warning\">
                            <h3 class=\"card-title\">Pengumuman</h3>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                ";
            // line 257
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 258
                echo "                                <tr>
                                    <td>";
                // line 259
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "                            </table>
                        </div>
                    </div>
                </div>
                ";
            // line 266
            if ((is_siswa() == false)) {
                // line 267
                echo "                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header bg-danger\">
                            <h3 class=\"card-title\">Riwayat login pengguna</h3>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"show-last-login-list\"></div>
                        </div>
                    </div>
                </div>
                ";
            }
            // line 278
            echo "            </div>
        </div>
    </section>
    ";
        }
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 278,  454 => 267,  452 => 266,  446 => 262,  437 => 259,  434 => 258,  430 => 257,  417 => 246,  405 => 242,  401 => 240,  397 => 239,  384 => 228,  372 => 224,  368 => 222,  364 => 221,  354 => 213,  347 => 209,  342 => 206,  340 => 205,  335 => 202,  332 => 201,  330 => 200,  326 => 198,  306 => 180,  297 => 177,  294 => 176,  290 => 175,  281 => 168,  274 => 164,  269 => 161,  267 => 160,  262 => 157,  259 => 156,  257 => 155,  251 => 151,  233 => 135,  224 => 132,  221 => 131,  217 => 130,  201 => 117,  191 => 110,  180 => 102,  170 => 95,  159 => 87,  149 => 80,  138 => 72,  128 => 65,  120 => 59,  105 => 47,  94 => 39,  83 => 31,  71 => 21,  68 => 20,  66 => 19,  61 => 16,  55 => 14,  53 => 13,  49 => 12,  45 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
