<?php

/* list-peserta.html */
class __TwigTemplate_b739346f71a3a9f2ef8c0bb4486ee13a79e132b8959f74c20243fca7c26b1d3b extends Twig_Template
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
        echo "Koreksi - ";
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
        <h1 class=\"m-0 text-dark\">Koreksi</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
        echo "\">Tugas</a></li>
            <li class=\"breadcrumb-item active\">Koreksi</li>
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
        // line 31
        echo get_flashdata("tugas");
        echo "
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Klik untuk detail !\"><b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"fas fa-info-circle\" style=\"line-height: 0px;\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b></h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"col-12\">
                            <div class=\"btn-group flex-wrap m-2\">
                                ";
        // line 39
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                                ";
        // line 40
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 41
            echo "                                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-check\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 43
            echo "                                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                                ";
        }
        // line 45
        echo "                                
                                ";
        // line 46
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) {
            // line 47
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default\">Pantau Ujian</a>
                                ";
        }
        // line 49
        echo "                                <a data-original-title=\"Print Query\" href=\"#\" class=\"btn btn-default\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"top\" data-content=\"<form method='post' target='_blank' action='";
        echo twig_escape_filter($this->env, site_url((("tugas/koreksi/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/print")), "html", null, true);
        echo "'><select name='kelas_id'><option value='all'>--Semua Kelas--</option>";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas_nilai"]) ? $context["kelas_nilai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            echo " <option value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select><button class='btn btn-primary btn-sm'>Print</button</form>\">Print</a>
                                <a data-original-title=\"Export Query\" href=\"#\" class=\"btn btn-default\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"bottom\" data-content=\"<form method='post' target='_blank' action='";
        // line 50
        echo twig_escape_filter($this->env, site_url((("tugas/koreksi/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/export_excel")), "html", null, true);
        echo "'><select name='kelas_id'><option value='all'>--Semua Kelas--</option>";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas_nilai"]) ? $context["kelas_nilai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            echo " <option value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select><button class='btn btn-primary btn-sm'>Export Excel</button</form>\">Export Excel</a>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                                <table class=\"table\">
                                    <tr>
                                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                                        <td style=\"border-top: none;\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Judul</th>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Matapelajaran</th>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>
                                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                                ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 73
            echo "                                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Info</th>
                                        <td>";
        // line 80
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                                    </tr>
                                    ";
        // line 82
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") != 1)) {
            // line 83
            echo "                                    <tr>
                                        <th>Durasi</th>
                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
            echo " Menit</td>
                                    </tr>
                                    ";
        }
        // line 88
        echo "                                </table>
                            </div>
                        </div><br/>
                        ";
        // line 91
        echo form_open(("tugas/bulk_reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), array("id" => "form-bulk"));
        echo "
                        <div class=\"col-12 table-responsive\">                        
                            <table id=\"table\" class=\"table table-striped datatable\">
                                <thead>
                                    <tr>
                                        <th>Siswa</th>
                                        <th>Kelas</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_siswa"]) ? $context["data_siswa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 104
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
            echo "\" class=\"mr-2\">
                                            <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-thumbnail img-circle float-left\" src=\"";
            // line 107
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "foto"), "medium", $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                                        </td>
                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span></td>
                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, round($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nilai"), "nilai"), 2), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                ";
            // line 114
            if (twig_test_empty($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nilai"))) {
                // line 115
                echo "                                                    ";
                echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Koreksi", array("class" => "btn btn-small btn-primary iframe-koreksi-jawaban"));
                echo "
                                                ";
            } else {
                // line 117
                echo "                                                    ";
                echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Detail", array("class" => "btn btn-small btn-primary iframe-koreksi-jawaban"));
                echo "
                                                ";
            }
            // line 119
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default\" onclick=\"return confirm('Anda yakin ingin menganggap siswa belum mengerjakan?')\" data-toggle=\"tooltip\" title=\"Reset jawaban siswa, <br>anggap siswa menjadi belum <br>mengerjakan.\">Reset</a>
                                            </div>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                </tbody>
                            </table><br/><br/>
                            <input type=\"hidden\" name=\"url_back\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, current_url(), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"btn-group flex-wrap\">
                            <button name=\"reset_tipe\" value=\"terpilih\" type=\"submit\" onclick=\"return confirm('Reset jawaban siswa terpilih?')\" class=\"btn btn-dark btn-sm\">Reset jawaban siswa terpilih</button>
                            <button name=\"reset_tipe\" value=\"semua\" type=\"submit\" onclick=\"return confirm('Reset jawaban semua siswa?')\" class=\"btn btn-info btn-sm\">Reset jawaban semua siswa</button>
                        </div>
                        ";
        // line 132
        echo form_close();
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "list-peserta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 132,  302 => 126,  298 => 124,  286 => 119,  280 => 117,  274 => 115,  272 => 114,  266 => 111,  260 => 110,  251 => 108,  247 => 107,  243 => 106,  239 => 104,  235 => 103,  220 => 91,  215 => 88,  209 => 85,  205 => 83,  203 => 82,  198 => 80,  191 => 75,  182 => 73,  178 => 72,  169 => 66,  162 => 62,  155 => 58,  131 => 50,  113 => 49,  107 => 47,  105 => 46,  102 => 45,  96 => 43,  90 => 41,  88 => 40,  84 => 39,  76 => 34,  70 => 31,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
