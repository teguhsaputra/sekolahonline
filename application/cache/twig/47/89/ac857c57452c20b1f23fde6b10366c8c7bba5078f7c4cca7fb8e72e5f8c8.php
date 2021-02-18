<?php

/* list-lessonplan.html */
class __TwigTemplate_4789ac857c57452c20b1f23fde6b10366c8c7bba5078f7c4cca7fb8e72e5f8c8 extends Twig_Template
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
        echo "Lesson Plan - ";
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
        <h1 class=\"m-0 text-dark\">List Lesson Plan</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Lesson Plan</li>
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
    <div class=\"col-lg-12 p-3\">
    ";
        // line 32
        echo get_flashdata("lessonplan");
        echo "
        <div class=\"card\">
            <div class=\"card-body\">
            <!--
                ";
        // line 36
        if ((is_siswa() == false)) {
            // line 37
            echo "                <div class=\"col-12\">
                    <div class=\"btn-group flex-wrap\">
                        ";
            // line 39
            echo anchor("absenjurnal/add", "Tambah Absen & Jurnal", array("class" => "btn btn-info btn-sm"));
            echo "
                    </div>
                </div><br/><br/>
                ";
        }
        // line 43
        echo "            -->    
                
                
                <!--<button class=\"btn btn-primary mb-2\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"fas fa-search\"></i> PARAMETER PENCARIAN</button>-->
                <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                    ";
        // line 48
        echo form_open("lessonplan");
        echo "
                    <div class=\"col-lg-6 col-md-6 col-xs-12\">
                        <!-- Date and time range -->
                        <div class=\"form-group\">
                            <label>Tanggal</label>
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"tanggal_between\" class=\"form-control\" id=\"tanggal_between\">
                                <div class=\"input-group-prepend\">
                                    <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Cari\"/>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    </form>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-striped datatablelessonplan\">
                        <thead>
                            <tr align=\"center\">
                                <th width=\"1%\" style=\"display:none;\"><small class=\"font-weight-bold\">ID</small></th>
                                <th width=\"13%\"style=\"display:none;><small class=\"font-weight-bold\">Pengajar</small></th>
                                <th width=\"13%\"><small class=\"font-weight-bold\">Tanggal Buat</small></th>
                                <th width=\"13%\"><small class=\"font-weight-bold\">Tanggal Mengajar</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Jam Mengajar</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Matapelajaran</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Kelas</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">No.KI/KD</small></th>
                                <th width=\"40%\"><small class=\"font-weight-bold\">Pokok Bahasan/Materi Tes Formatif/Suamtif/Sub Suamtif</small></th>
                                
                                <th width=\"\" style=\"display:none;\"><small class=\"font-weight-bold\">Media</small></th>
                                <th id=\"hapus1\" width=\"\"><small class=\"font-weight-bold\"></small></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessonplan"]) ? $context["lessonplan"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["aj"]) {
            // line 87
            echo "                            <tr>
                                <td style=\"display:none;\"><small>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pengajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_ubah"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_ubah2"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "hari_ngajar"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "jam_ngajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "matapelajaran"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "kelas"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "no_kikd"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pokok_pembahasan"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "media"), "html", null, true);
            echo "</small></td>
                            
                                <td id=\"hapus2\">
                                    <div class=\"btn-group\">
                                        <!-- ";
            // line 101
            echo anchor(("absenjurnal/detail/" . $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id")), "<i class=\"fas fa-search\"></i> Detail", array("class" => "btn btn-default btn-sm", "target" => "_tab"));
            echo " -->
                                        
                                        <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, site_url("lessonplan/edit"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-edit\"></i> Edit</a>
                                        ";
            // line 104
            if (is_admin()) {
                // line 105
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, site_url("lessonplan/delete"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, enurl_redirect(current_url()), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\" onclick=\"return confirm('Anda yakin ingin menghapus?')\"><i class=\"fas fa-trash\"></i> Delete</a>
                                        ";
            }
            // line 107
            echo "                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <tr>
                                
                            </tr>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer\">
                ";
        // line 124
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

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>Materi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 141
        echo get_flashdata("materi");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            ";
        // line 144
        if ((is_siswa() == false)) {
            // line 145
            echo "            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    ";
            // line 147
            echo anchor("materi/add/tertulis", "Tambah Materi Tertulis", array("class" => "btn btn-primary"));
            echo "
                </div>
                <div class=\"btn-group\">
                    ";
            // line 150
            echo anchor("materi/add/file", "Tambah Materi File", array("class" => "btn btn-primary"));
            echo "
                </div>
            ";
        }
        // line 153
        echo "                <div class=\"btn-group\">
                <a class=\"btn btn-success as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> Pencarian</a>
                </div>
            </div>
            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
        // line 158
        echo form_open("materi");
        echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 165
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("mapel_id[]", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id"))) && in_array($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id")))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "
                                        </label>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 178
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 179
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id"))) && in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                                        </label>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Tipe</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"tertulis\" ";
        // line 194
        echo twig_escape_filter($this->env, set_checkbox("type[]", "tertulis", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("tertulis", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Tertulis
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"file\" ";
        // line 199
        echo twig_escape_filter($this->env, set_checkbox("type[]", "file", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("file", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> File
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th width=\"15%\">Judul</th>
                            <td>
                                <input type=\"text\" name=\"judul\" class=\"span4\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Konten</th>
                            <td>
                                <input type=\"text\" name=\"konten\" class=\"span5\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, set_value("konten", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "konten")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        ";
        // line 217
        if ((is_admin() == true)) {
            // line 218
            echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
            // line 221
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
        }
        // line 225
        echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"1\" ";
        // line 231
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"0\" ";
        // line 236
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "0", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Konsep
                                        </label>
                                    </li>
                                </ul>
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

        </div>

        <br>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">ID</th>
                    <th>Informasi Materi</th>
                    <th width=\"15%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 265
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materi"]) ? $context["materi"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 266
            echo "
                ";
            // line 267
            if ((is_admin() == true)) {
                // line 268
                echo "                    ";
                $context["action_edit"] = true;
                // line 269
                echo "                    ";
                $context["action_delete"] = true;
                // line 270
                echo "                ";
            } elseif ((is_pengajar() == true)) {
                // line 271
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id") == get_sess_data("user", "id"))) {
                    // line 272
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 273
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 274
                    echo "                    ";
                } else {
                    // line 275
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 276
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 277
                    echo "                    ";
                }
                // line 278
                echo "                ";
            } elseif ((is_siswa() == true)) {
                // line 279
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "siswa_id") == get_sess_data("user", "id"))) {
                    // line 280
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 281
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 282
                    echo "                    ";
                } else {
                    // line 283
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 284
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 285
                    echo "                    ";
                }
                // line 286
                echo "                ";
            }
            // line 287
            echo "
                <tr>
                    <td><b>";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "</b></td>
                    <td>
                        <p><strong class=\"text-warning\">
                            ";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "
                        </strong></p>
                        <ul class=\"breadcrumb\" style=\"padding: 0px;background: none;\">
                            <li>
                                ";
            // line 296
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 1)) ? ("<span class=\"label label-success\">Terbit</span>") : ("<span class=\"label label-warning\">Konsep</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 300
            echo (((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) ? ("<span class=\"label label-success\">File</span>") : ("<span class=\"label label-info\">Tertulis</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 308
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 309
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 314
            if ((is_pengajar() == false)) {
                // line 315
                echo "                                    Pembuat <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>
                                    , ";
                // line 316
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            } else {
                // line 318
                echo "                                    Dibuat ";
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            }
            // line 320
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 323
            echo ((twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file"))) ? ("Dibaca") : ("Diunduh"));
            echo "
                                ";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "views"), "html", null, true);
            echo " kali
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar
                            </li>
                        </ul>
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            ";
            // line 334
            if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                // line 335
                echo "                                ";
                $context["url_type"] = "file";
                // line 336
                echo "                            ";
            } else {
                // line 337
                echo "                                ";
                $context["url_type"] = "tertulis";
                // line 338
                echo "                            ";
            }
            // line 339
            echo "                            ";
            echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-zoom-in\"></i> Detail", array("class" => "btn btn-default btn-small", "target" => "_tab"));
            echo "

                            ";
            // line 341
            if (((isset($context["action_edit"]) ? $context["action_edit"] : null) == true)) {
                // line 342
                echo "                                ";
                echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-small"));
                echo "
                            ";
            }
            // line 344
            echo "
                            ";
            // line 345
            if (((isset($context["action_delete"]) ? $context["action_delete"] : null) == true)) {
                // line 346
                echo "                                ";
                echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-trash\"></i> Hapus", array("class" => "btn btn-default btn-small", "onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                echo "
                            ";
            }
            // line 348
            echo "                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 355
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
-->

";
    }

    public function getTemplateName()
    {
        return "list-lessonplan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 355,  674 => 352,  665 => 348,  659 => 346,  657 => 345,  654 => 344,  648 => 342,  646 => 341,  640 => 339,  637 => 338,  634 => 337,  631 => 336,  628 => 335,  626 => 334,  617 => 328,  610 => 324,  606 => 323,  601 => 320,  595 => 318,  590 => 316,  583 => 315,  581 => 314,  576 => 311,  567 => 309,  563 => 308,  556 => 304,  549 => 300,  542 => 296,  535 => 292,  529 => 289,  525 => 287,  522 => 286,  519 => 285,  516 => 284,  513 => 283,  510 => 282,  507 => 281,  504 => 280,  501 => 279,  498 => 278,  495 => 277,  492 => 276,  489 => 275,  486 => 274,  483 => 273,  480 => 272,  477 => 271,  474 => 270,  471 => 269,  468 => 268,  466 => 267,  463 => 266,  459 => 265,  427 => 236,  419 => 231,  411 => 225,  404 => 221,  399 => 218,  397 => 217,  391 => 214,  382 => 208,  370 => 199,  362 => 194,  351 => 185,  337 => 181,  333 => 179,  329 => 178,  320 => 171,  306 => 167,  302 => 165,  298 => 164,  289 => 158,  282 => 153,  276 => 150,  270 => 147,  266 => 145,  264 => 144,  258 => 141,  238 => 124,  223 => 111,  214 => 107,  204 => 105,  202 => 104,  196 => 103,  191 => 101,  184 => 97,  180 => 96,  176 => 95,  172 => 94,  168 => 93,  162 => 92,  158 => 91,  154 => 90,  150 => 89,  146 => 88,  143 => 87,  139 => 86,  98 => 48,  91 => 43,  84 => 39,  80 => 37,  78 => 36,  71 => 32,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
