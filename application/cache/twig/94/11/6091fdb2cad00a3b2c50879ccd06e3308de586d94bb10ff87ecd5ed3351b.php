<?php

/* list-nilai.html */
class __TwigTemplate_94116091fdb2cad00a3b2c50879ccd06e3308de586d94bb10ff87ecd5ed3351b extends Twig_Template
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
        echo "Lihat Nilai - ";
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
        <h1 class=\"m-0 text-dark\">Lihat Nilai</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
        echo "\">Tugas</a></li>
            <li class=\"breadcrumb-item active\">Lihat Nilai</li>
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
                                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, site_url(("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">Pantau Ujian</a>
                                <a data-original-title=\"Print Query\" href=\"#\" class=\"btn btn-default\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"top\" data-content=\"<form method='post' target='_blank' action='";
        // line 47
        echo twig_escape_filter($this->env, site_url((("tugas/nilai/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/print")), "html", null, true);
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
        echo "</select><label><input type='checkbox' name='tampil_jawaban' value='1' style='margin-top:0px;'> Tampilkan jawaban</label><button class='btn btn-primary btn-sm'>Print</button</form>\">Print</a>
                                <a data-original-title=\"Export Query\" href=\"#\" class=\"btn btn-default\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"bottom\" data-content=\"<form method='post' target='_blank' action='";
        // line 48
        echo twig_escape_filter($this->env, site_url((("tugas/nilai/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/export_excel")), "html", null, true);
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
        echo "</select><label><input type='checkbox' name='tampil_jawaban' value='1' style='margin-top:0px;'> Tampilkan jawaban</label><button class='btn btn-primary btn-sm'>Export Excel</button</form>\">Export Excel</a>
                                <!--
                                ";
        // line 50
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) {
            // line 51
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default\">Pantau Ujian</a>
                                ";
        }
        // line 53
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
        // line 54
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
                                -->
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                                <table class=\"table\">
                                    <tr>
                                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                                        <td style=\"border-top: none;\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Judul</th>
                                        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Matapelajaran</th>
                                        <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>
                                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                                ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 78
            echo "                                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Info</th>
                                        <td>";
        // line 85
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Durasi</th>
                                        <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                                    </tr>
                                </table>
                            </div>
                        </div><br/>
                        ";
        // line 94
        echo form_open(("tugas/bulk_reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), array("id" => "form-bulk"));
        echo "
                        <div class=\"col-12 table-responsive\">
                            <table class=\"table table-striped datatable\">
                                <thead>
                                    <tr>
                                        <th width=\"3%\"></th>
                                        <th>Siswa</th>
                                        <th>Kelas</th>
                                        <th>Nilai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_nilai"]) ? $context["data_nilai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 108
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa_id"), "html", null, true);
            echo "\" style=\"margin-top:-2px;\">
                                        </td>
                                        <td>
                                            <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 113
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "jenis_kelamin")), "html", null, true);
            echo "\">
                                            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "status_id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                                        </td>
                                        <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span></td>
                                        <td>";
            // line 117
            echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "nilai"), 2), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                ";
            // line 120
            echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Detail", array("class" => "btn btn-small btn-primary iframe-detail-jawaban"));
            echo "
                                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, site_url(((("tugas/reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa_id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin menganggap siswa belum mengerjakan?')\" data-toggle=\"tooltip\" title=\"Reset jawaban siswa, <br>anggap siswa menjadi belum <br>mengerjakan.\">Reset</a>
                                            </div>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                </tbody>
                            </table>
                            <div class=\"btn-group flex-wrap\">
                                <button name=\"reset_tipe\" value=\"terpilih\" type=\"submit\" onclick=\"return confirm('Reset jawaban siswa terpilih?')\" class=\"btn btn-dark btn-sm\">Reset jawaban siswa terpilih</button>
                                <button name=\"reset_tipe\" value=\"semua\" type=\"submit\" onclick=\"return confirm('Reset jawaban semua siswa?')\" class=\"btn btn-info btn-sm\">Reset jawaban semua siswa</button>
                            </div>
                            <input type=\"hidden\" name=\"url_back\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, current_url(), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 134
        echo form_close();
        echo "
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
        // line 145
        echo anchor("tugas", "Tugas");
        echo " / Lihat Nilai</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 148
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
        // line 152
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                ";
        // line 153
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 154
            echo "                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 156
            echo "                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                ";
        }
        // line 158
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i> ";
        // line 159
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 180
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 187
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <div class=\"btn-group\">
            <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, site_url(("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Pantau Ujian</a>
            <a data-original-title=\"Print Query\" href=\"#\" class=\"btn btn-primary\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"top\" data-content=\"<form method='post' target='_blank' action='";
        // line 201
        echo twig_escape_filter($this->env, site_url((("tugas/nilai/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/print")), "html", null, true);
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
        echo "</select><label><input type='checkbox' name='tampil_jawaban' value='1' style='margin-top:0px;'> Tampilkan jawaban</label><button class='btn btn-primary btn-sm'>Print</button</form>\">Print</a>
            <a data-original-title=\"Export Query\" href=\"#\" class=\"btn btn-primary\" data-toggle=\"popover\" data-html=\"true\" data-placement=\"bottom\" data-content=\"<form method='post' target='_blank' action='";
        // line 202
        echo twig_escape_filter($this->env, site_url((("tugas/nilai/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/export_excel")), "html", null, true);
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
        echo "</select><label><input type='checkbox' name='tampil_jawaban' value='1' style='margin-top:0px;'> Tampilkan jawaban</label><button class='btn btn-primary btn-sm'>Export Excel</button</form>\">Export Excel</a>
        </div>

        <br><br>
        ";
        // line 206
        echo form_open(("tugas/bulk_reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), array("id" => "form-bulk"));
        echo "
        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th width=\"3%\"></th>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_nilai"]) ? $context["data_nilai"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 219
            echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa_id"), "html", null, true);
            echo "\" style=\"margin-top:-2px;\">
                    </td>
                    <td>
                        <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 224
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "status_id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                    </td>
                    <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span></td>
                    <td>";
            // line 228
            echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "nilai"), 2), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\">
                            ";
            // line 231
            echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Detail", array("class" => "btn btn-small btn-primary iframe-detail-jawaban"));
            echo "
                            <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, site_url(((("tugas/reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa_id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin menganggap siswa belum mengerjakan?')\" data-toggle=\"tooltip\" title=\"Reset jawaban siswa, <br>anggap siswa menjadi belum <br>mengerjakan.\">Reset</a>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "            </tbody>
        </table>

        <div class=\"btn-group\">
            <button name=\"reset_tipe\" value=\"terpilih\" type=\"submit\" onclick=\"return confirm('Reset jawaban siswa terpilih?')\" class=\"btn btn-primary\">Reset jawaban siswa terpilih</button>
            <button name=\"reset_tipe\" value=\"semua\" type=\"submit\" onclick=\"return confirm('Reset jawaban semua siswa?')\" class=\"btn btn-primary\">Reset jawaban semua siswa</button>
        </div>
        <input type=\"hidden\" name=\"url_back\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, current_url(), "html", null, true);
        echo "\">

        ";
        // line 246
        echo form_close();
        echo "
        <br>

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "list-nilai.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 246,  574 => 244,  565 => 237,  554 => 232,  550 => 231,  544 => 228,  538 => 227,  529 => 225,  525 => 224,  519 => 221,  515 => 219,  511 => 218,  496 => 206,  476 => 202,  459 => 201,  455 => 200,  443 => 191,  436 => 187,  429 => 182,  420 => 180,  416 => 179,  407 => 173,  400 => 169,  393 => 165,  384 => 159,  381 => 158,  375 => 156,  369 => 154,  367 => 153,  363 => 152,  356 => 148,  350 => 145,  336 => 134,  331 => 132,  323 => 126,  312 => 121,  308 => 120,  302 => 117,  296 => 116,  287 => 114,  283 => 113,  277 => 110,  273 => 108,  269 => 107,  253 => 94,  245 => 89,  238 => 85,  231 => 80,  222 => 78,  218 => 77,  209 => 71,  202 => 67,  195 => 63,  170 => 54,  152 => 53,  146 => 51,  144 => 50,  126 => 48,  109 => 47,  105 => 46,  102 => 45,  96 => 43,  90 => 41,  88 => 40,  84 => 39,  76 => 34,  70 => 31,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
