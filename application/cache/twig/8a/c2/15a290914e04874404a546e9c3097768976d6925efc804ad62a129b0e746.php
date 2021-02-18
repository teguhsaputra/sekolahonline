<?php

/* list-tugas.html */
class __TwigTemplate_8ac215a290914e04874404a546e9c3097768976d6925efc804ad62a129b0e746 extends Twig_Template
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
        echo "Ujian - ";
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
        <h1 class=\"m-0 text-dark\">List Ujian</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Ujian</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
    <div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
    ";
        // line 32
        echo get_flashdata("tugas");
        echo "
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 35
        if ((is_siswa() == false)) {
            // line 36
            echo "                <div class=\"col-12\">
                    <div class=\"btn-group flex-wrap\">
                    
                        ";
            // line 39
            echo anchor("tugas/add/3", "Tambah Tugas Ganda", array("class" => "btn btn-danger btn-sm"));
            echo "
                        ";
            // line 40
            echo anchor("tugas/add/2", "Tambah Tugas Essay", array("class" => "btn btn-success btn-sm"));
            echo "
                        ";
            // line 41
            echo anchor("tugas/add/1", "Tambah Tugas Upload", array("class" => "btn btn-info btn-sm"));
            echo "
                    </div>
                </div>
                ";
        }
        // line 45
        echo "                
                ";
        // line 46
        if ((is_siswa() == false)) {
            // line 47
            echo "                <blockquote>
                <button class=\"btn btn-primary mb-2\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"fas fa-search\"></i> PARAMETER PENCARIAN</button>
                <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                    ";
            // line 50
            echo form_open("tugas");
            echo "
                        <table class=\"table table-bordered\">
                            <tr>
                                <th>Tanggal Ujian</th>
                                <td>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" name=\"tanggal_between\" class=\"form-control\" id=\"tanggal_between\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, set_value("tanggal_between", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tanggal_between")), "html", null, true);
            echo "\">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Mapel</th>
                                <td>
                                    <div class=\"form-group\">
                                        ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 67
                echo "                                            <label class=\"form-check-label ml-3 mr-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"mapel_id[]\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_checkbox("mapel_id[]", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id"))) && in_array($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id")))) ? (true) : (""))), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                echo "
                                            </label>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                    </div>
                                </td>
                            </tr>
                            ";
            // line 74
            if ((is_siswa() == false)) {
                // line 75
                echo "                            <tr>
                                <th>Kelas</th>
                                <td>
                                    <div class=\"form-group\">
                                        ";
                // line 79
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 80
                    echo "                                            <label class=\"form-check-label ml-3 mr-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id"))) && in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (""))), "html", null, true);
                    echo "> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "
                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                                    </div>
                                </td>
                            </tr>
                            ";
            }
            // line 88
            echo "                           <!--
                            <tr>
                                <th>Tipe</th>
                                <td>
                                    <div class=\"form-group\">
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"type[]\" value=\"3\" ";
            // line 94
            echo twig_escape_filter($this->env, set_checkbox("type[]", "3", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("3", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Ganda
                                        </label>
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"type[]\" value=\"2\" ";
            // line 97
            echo twig_escape_filter($this->env, set_checkbox("type[]", "2", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("2", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Essay
                                        </label>
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"type[]\" value=\"1\" ";
            // line 100
            echo twig_escape_filter($this->env, set_checkbox("type[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Upload
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            -->
                            <tr>
                                <th width=\"15%\">Judul</th>
                                <td>
                                    <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
            echo "\">
                                </td>
                            </tr>
                            <tr>
                                <th>Info</th>
                                <td>
                                    <input type=\"text\" name=\"info\" class=\"form-control\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, set_value("info", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "info")), "html", null, true);
            echo "\">
                                </td>
                            </tr>
                            ";
            // line 118
            if ((is_pengajar() == false)) {
                // line 119
                echo "                            <tr>
                                <th>Pembuat</th>
                                <td>
                                    <input type=\"text\" name=\"pembuat\" class=\"form-control\" value=\"";
                // line 122
                echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
                echo "\">
                                </td>
                            </tr>
                            ";
            }
            // line 126
            echo "                            
                            <tr>
                                <th>Status</th>
                                <td>
                                    <div class=\"form-group\">
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"status[]\" value=\"1\" ";
            // line 132
            echo twig_escape_filter($this->env, set_checkbox("status[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
            echo "> Terbit
                                        </label>
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"status[]\" value=\"0\" ";
            // line 135
            echo twig_escape_filter($this->env, set_checkbox("status[]", "0", (((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status") != "") && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
            echo "> Tutup
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>
                                    <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                </blockquote>
                ";
        }
        // line 152
        echo "
            <div class=\"table-responsive\">
            <table class=\"table table-striped display nowrap\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Informasi Ujian</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tugas"]) ? $context["tugas"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 163
            echo "                    <tr ";
            echo ((((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) && (sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false))) ? ("class=\"success\"") : (""));
            echo ">
                        <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>
                        <div class=\"col-12\">
                            <div class=\"float-right\">
                            <!--
                                ";
            // line 169
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda")) {
                // line 170
                echo "                                <button class=\"btn btn-sm btn-success\">Ganda</button>
                                ";
            } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay")) {
                // line 172
                echo "                                    <button class=\"btn btn-sm btn-primary\">Essay</button>
                                ";
            } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Upload")) {
                // line 174
                echo "                                    <button class=\"btn btn-sm btn-primary\">Upload</button>
                                ";
            }
            // line 176
            echo "                            -->
                                ";
            // line 177
            if ((is_siswa() == true)) {
                // line 178
                echo "                                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 179
                    echo "                                        ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                        // line 180
                        echo "                                            <button class=\"btn btn-sm btn-primary\"><i class=\"fas fa-info-circle\"></i> Tersedia</button>
                                        ";
                    }
                    // line 182
                    echo "                                    ";
                } else {
                    // line 183
                    echo "                                        ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                        // line 184
                        echo "                                            <button class=\"btn btn-sm btn-danger\"><i class=\"fas fa-info-circle\"></i> Tidak Tersedia</button>
                                        ";
                    }
                    // line 186
                    echo "                                    ";
                }
                // line 187
                echo "                                ";
            }
            // line 188
            echo "                            </div>
                            
                            <kbd>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "</kbd>
                            
                            <br><small><b>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "</b>
    
                            ";
            // line 194
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tugas_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 195
                echo "                                , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "    
                            ";
            // line 198
            if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                // line 199
                echo "                                , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "durasi"), "html", null, true);
                echo " Menit
                            ";
            }
            // line 201
            echo "                            
                            </small>
                            <br><small><b>Pembuat : </b> <a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
            echo "</a>, ";
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_buat")), "html", null, true);
            echo "</small>
                            ";
            // line 204
            if ((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info") != ""))) {
                // line 205
                echo "                                ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 206
                    echo "                                    ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == true)) {
                        // line 207
                        echo "                                        <div class=\"d-flex\">
                                            <small><b>";
                        // line 208
                        echo $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info");
                        echo "</b></small>
                                        </div>
                                    ";
                    }
                    // line 211
                    echo "                                ";
                }
                // line 212
                echo "                            ";
            }
            // line 213
            echo "                            <hr style=\"margin-top: 5px;margin-bottom: 5px;border:none;border-bottom: 1px dashed black;\">
                            
                            <div class=\"btn-group flex-wrap\">
                                ";
            // line 216
            if ((is_siswa() == false)) {
                // line 217
                echo "                                    ";
                if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                    // line 218
                    echo "                                        ";
                    echo anchor(("tugas/manajemen_soal/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon icon-tasks\"></i> Soal", array("class" => "btn btn-primary btn-sm"));
                    echo "
                                    ";
                }
                // line 220
                echo "                                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0)) {
                    // line 221
                    echo "                                        ";
                    echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-sm"));
                    echo "
                                    ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 223
                    echo "                                        ";
                    echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-sm"));
                    echo "
                                    ";
                }
                // line 225
                echo "        
                                    ";
                // line 226
                echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-sm"));
                echo "
                                    ";
                // line 227
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_id") == 3)) {
                    // line 228
                    echo "                                        ";
                    echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-eye-open\"></i> Lihat Nilai", array("class" => "btn btn-info btn-sm"));
                    echo "
                                    ";
                } else {
                    // line 230
                    echo "                                        ";
                    echo anchor(("tugas/koreksi/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-check\"></i> Koreksi", array("class" => "btn btn-info btn-sm"));
                    echo "
                                    ";
                }
                // line 232
                echo "                                ";
            } elseif ((is_siswa() == true)) {
                // line 233
                echo "                                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 234
                    echo "                                        ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                        // line 235
                        echo "                                        <div class=\"d-flex\">
                                            <small><b>";
                        // line 236
                        echo $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info");
                        echo "</b></small>
                                        </div>    
                                        <!-- anchor('tugas/kerjakan/' ~ m.id, '<i class=\"fas fa-pen\"></i> Mulai Kerjakan', {'class' : 'btn btn-success btn-sm', 'onclick' : 'return confirm(\\'Anda yakin ingin memulai mengerjakan tugas ini?\\')'})|raw -->
                                        <!--
                                             else 
                                             anchor('tugas/nilai/' ~ m.id, '<i class=\"fas fa-flag\"></i> Lihat Nilai', {'class' : 'btn btn-info btn-sm iframe-lihat-nilai'})|raw  
                                        -->
                                        ";
                    }
                    // line 244
                    echo "                                    ";
                } else {
                    // line 245
                    echo "                                            ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                        // line 246
                        echo "                                            <!--    <button type=\"button\" class=\"btn btn-sm btn-danger\"> <i class=\"fas fa-info-circle\"></i> Status Ditutup</button> -->
                                            ";
                    } else {
                        // line 247
                        echo " 
                                            <!-- <button type=\"button\" class=\"btn btn-sm btn-danger\"> <i class=\"fas fa-info-circle\"></i> Ulangan Selesai</button> -->
                                                <!--  anchor('tugas/nilai/' ~ m.id, '<i class=\"fas fa-flag\"></i> Lihat Nilai', {'class' : 'btn btn-info btn-sm iframe-lihat-nilai'})|raw -->    
                                            ";
                    }
                    // line 251
                    echo "                                    ";
                }
                // line 252
                echo "                                ";
            }
            // line 253
            echo "                            </div>
                        </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Informasi Ujian</th>
                </tr>
                </tfoot>
            </table>
            </div>
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer\">
                ";
        // line 270
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.row (main row) -->
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "list-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 270,  536 => 258,  526 => 253,  523 => 252,  520 => 251,  514 => 247,  510 => 246,  507 => 245,  504 => 244,  493 => 236,  490 => 235,  487 => 234,  484 => 233,  481 => 232,  475 => 230,  469 => 228,  467 => 227,  463 => 226,  460 => 225,  454 => 223,  448 => 221,  445 => 220,  439 => 218,  436 => 217,  434 => 216,  429 => 213,  426 => 212,  423 => 211,  417 => 208,  414 => 207,  411 => 206,  408 => 205,  406 => 204,  398 => 203,  394 => 201,  388 => 199,  386 => 198,  383 => 197,  374 => 195,  370 => 194,  365 => 192,  360 => 190,  356 => 188,  353 => 187,  350 => 186,  346 => 184,  343 => 183,  340 => 182,  336 => 180,  333 => 179,  330 => 178,  328 => 177,  325 => 176,  321 => 174,  317 => 172,  313 => 170,  311 => 169,  303 => 164,  298 => 163,  294 => 162,  282 => 152,  262 => 135,  256 => 132,  248 => 126,  241 => 122,  236 => 119,  234 => 118,  228 => 115,  219 => 109,  207 => 100,  201 => 97,  195 => 94,  187 => 88,  181 => 84,  168 => 81,  165 => 80,  161 => 79,  155 => 75,  153 => 74,  148 => 71,  135 => 68,  132 => 67,  128 => 66,  116 => 57,  106 => 50,  101 => 47,  99 => 46,  96 => 45,  89 => 41,  85 => 40,  81 => 39,  76 => 36,  74 => 35,  68 => 32,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
