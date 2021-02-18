<?php

/* pantau-ujian.html */
class __TwigTemplate_6097efafb5ec3b423f8b45d18d785bcfbdad8c959075c7103193bb80712a3d43 extends Twig_Template
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
        echo "Pantau Ujian - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1 class=\"m-0 text-dark\">Pantau Ujian</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\">";
        // line 17
        echo anchor("tugas?clear_filter=true", "Tugas");
        echo "</li>
            <li class=\"breadcrumb-item\">";
        // line 18
        echo anchor(((("tugas/" . ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) ? ("koreksi") : ("nilai"))) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Lihat Nilai");
        echo "</li>
            <li class=\"breadcrumb-item active\">Pantau Ujian</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 32
        echo get_flashdata("tugas");
        echo "
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Klik untuk detail !\"><b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"fas fa-info-circle\" style=\"line-height: 0px;\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b></h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"col-12\">
                            <div class=\"btn-group flex-wrap m-2\">
                                ";
        // line 40
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                                ";
        // line 41
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 42
            echo "                                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-ok\"></i> Terbitkan", array("class" => "btn btn-success"));
            echo "
                                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 44
            echo "                                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-minus\"></i> Tutup", array("class" => "btn btn-danger"));
            echo "
                                ";
        }
        // line 46
        echo "                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                                <table class=\"table\">
                                    <tr>
                                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                                        <td style=\"border-top: none;\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Judul</th>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Matapelajaran</th>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>
                                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 68
            echo "                                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Info</th>
                                        <td>";
        // line 75
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Durasi</th>
                                        <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                                    </tr>
                                </table>
                            </div>
                        </div><br/>
                        <div class=\"col-12 table-responsive\">                        
                            <table id=\"table\" class=\"table table-striped datatable\">
                                <thead>
                                    <tr>
                                        <th>Siswa</th>
                                        <th width=\"60%\">Informasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all"]) ? $context["retrieve_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 94
            echo "                                    <tr>
                                        <td>
                                            <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "jenis_kelamin")), "html", null, true);
            echo "\">
                                            <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "status_id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                                            <br> ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span>
                                        </td>
                                        <td>
                                            <table class=\"table table-condensed table-bordered\">
                                                <tr>
                                                    <td width=\"20%\">IP</td>
                                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "ip"), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Agent</td>
                                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "agent_string"), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Mulai</td>
                                                    <td>";
            // line 112
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "mulai")), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai</td>
                                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "selesai")), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Sisa waktu</td>
                                                    <td>";
            // line 120
            echo $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "sisa_menit_string");
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"2\">
                                                        <div class=\"btn-group\">
                                                            ";
            // line 125
            echo anchor(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/jawaban_sementara/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id")), "Lihat jawaban sementara", array("class" => "btn btn-small btn-primary iframe-jawaban-sementara"));
            echo "
                                                            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, site_url(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/reset/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin mengulang proses ujian siswa tersebut?')\" data-toggle=\"tooltip\" title=\"Ulang proses ujian siswa<br>dan anggap belum mengerjakan.\">Reset</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                </tbody>
                            </table><br/><br/>
                            <input type=\"hidden\" name=\"url_back\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, current_url(), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 148
        echo anchor("tugas", "Tugas");
        echo " / ";
        echo anchor(((("tugas/" . ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) ? ("koreksi") : ("nilai"))) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Lihat Nilai");
        echo " / Pantau Ujian</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 151
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
        // line 155
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                ";
        // line 156
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 157
            echo "                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 159
            echo "                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                ";
        }
        // line 161
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i> ";
        // line 162
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 183
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 190
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th width=\"60%\">Informasi</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 210
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all"]) ? $context["retrieve_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 211
            echo "                <tr>
                    <td>
                        <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 213
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "status_id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                        <br> ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span>
                    </td>
                    <td>
                        <table class=\"table table-condensed table-bordered\">
                            <tr>
                                <td width=\"20%\">IP</td>
                                <td>";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "ip"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Agent</td>
                                <td>";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "agent_string"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Mulai</td>
                                <td>";
            // line 229
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "mulai")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Selesai</td>
                                <td>";
            // line 233
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "selesai")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Sisa waktu</td>
                                <td>";
            // line 237
            echo $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "sisa_menit_string");
            echo "</td>
                            </tr>
                            <tr>
                                <td colspan=\"2\">
                                    <div class=\"btn-group\">
                                        ";
            // line 242
            echo anchor(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/jawaban_sementara/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id")), "Lihat jawaban sementara", array("class" => "btn btn-small btn-primary iframe-jawaban-sementara"));
            echo "
                                        <a href=\"";
            // line 243
            echo twig_escape_filter($this->env, site_url(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/reset/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin mengulang proses ujian siswa tersebut?')\" data-toggle=\"tooltip\" title=\"Ulang proses ujian siswa<br>dan anggap belum mengerjakan.\">Reset</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "            </tbody>
        </table>

    </div>
</div>
-->

";
    }

    public function getTemplateName()
    {
        return "pantau-ujian.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 251,  471 => 243,  467 => 242,  459 => 237,  452 => 233,  445 => 229,  438 => 225,  431 => 221,  420 => 215,  412 => 214,  408 => 213,  404 => 211,  400 => 210,  381 => 194,  374 => 190,  367 => 185,  358 => 183,  354 => 182,  345 => 176,  338 => 172,  331 => 168,  322 => 162,  319 => 161,  313 => 159,  307 => 157,  305 => 156,  301 => 155,  294 => 151,  286 => 148,  271 => 136,  267 => 134,  253 => 126,  249 => 125,  241 => 120,  234 => 116,  227 => 112,  220 => 108,  213 => 104,  202 => 98,  194 => 97,  190 => 96,  186 => 94,  182 => 93,  165 => 79,  158 => 75,  151 => 70,  142 => 68,  138 => 67,  129 => 61,  122 => 57,  115 => 53,  106 => 46,  100 => 44,  94 => 42,  92 => 41,  88 => 40,  80 => 35,  74 => 32,  57 => 18,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
