<?php

/* list-absenjurnal.html */
class __TwigTemplate_b5ec727782b0e2d2810c383464a721df8f9381d7a91ee66011ea4cf003e523d1 extends Twig_Template
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
        echo "Absen dan Jurnal - ";
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
        <h1 class=\"m-0 text-dark\">List Absen & Jurnal Mengajar</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Absen & Jurnal Mengajar</li>
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
        echo get_flashdata("absenjurnal");
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
        echo form_open("absenjurnal");
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
                    <table class=\"table table-bordered table-striped datatablejurnal\">
                        <thead>
                            <tr align=\"center\">
                                <th width=\"1%\" style=\"display:none;\"><small class=\"font-weight-bold\">ID</small></th>
                                <th width=\"13%\"style=\"display:none;><small class=\"font-weight-bold\">Pengajar</small></th>
                                <th width=\"13%\"><small class=\"font-weight-bold\">Tanggal Buat</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Jam Mengajar</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Matapelajaran</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Kelas</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">No.KI/KD</small></th>
                                <th width=\"40%\"><small class=\"font-weight-bold\">Pokok Bahasan/Materi Tes Formatif/Suamtif/Sub Suamtif</small></th>
                                
                                <th width=\"\" style=\"display:none;\"><small class=\"font-weight-bold\">Selesai/Belum</small></th>
                                <th width=\"\" style=\"display:none;\"><small class=\"font-weight-bold\">Absensi Siswa</small></th>
                                <th width=\"40%\" style=\"display:none;\"><small class=\"font-weight-bold\">Keterangan</small></th>
                                <th id=\"hapus1\" width=\"\"><small class=\"font-weight-bold\"></small></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absenjurnal"]) ? $context["absenjurnal"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["aj"]) {
            // line 90
            echo "                            <tr>
                                <td style=\"display:none;\"><small>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pengajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_ubah"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "hari_ngajar"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "jam_ngajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "matapelajaran"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "kelas"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "no_kikd"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pokok_pembahasan"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "status_selesai"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "ket_absen_siswa"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "keterangan"), "html", null, true);
            echo "</small></td>
                            
                                <td id=\"hapus2\">
                                    <div class=\"btn-group\">
                                        <!-- ";
            // line 105
            echo anchor(("absenjurnal/detail/" . $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id")), "<i class=\"fas fa-search\"></i> Detail", array("class" => "btn btn-default btn-sm", "target" => "_tab"));
            echo " -->
                                        <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, site_url("absenjurnal/detail"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_delete"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-search-plus\"></i> Detail</a>
                                        <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, site_url("absenjurnal/edit"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-edit\"></i> Edit</a>
                                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, site_url("absenjurnal/delete"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "mapel_ajar_id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_delete"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, enurl_redirect(current_url()), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" onclick=\"return confirm('Anda yakin ingin menghapus?')\"><i class=\"fas fa-trash\"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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
        // line 126
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
        // line 143
        echo get_flashdata("materi");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            ";
        // line 146
        if ((is_siswa() == false)) {
            // line 147
            echo "            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    ";
            // line 149
            echo anchor("materi/add/tertulis", "Tambah Materi Tertulis", array("class" => "btn btn-primary"));
            echo "
                </div>
                <div class=\"btn-group\">
                    ";
            // line 152
            echo anchor("materi/add/file", "Tambah Materi File", array("class" => "btn btn-primary"));
            echo "
                </div>
            ";
        }
        // line 155
        echo "                <div class=\"btn-group\">
                <a class=\"btn btn-success as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> Pencarian</a>
                </div>
            </div>
            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
        // line 160
        echo form_open("materi");
        echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 167
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 169
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
        // line 173
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 181
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 183
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
        // line 187
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
        // line 196
        echo twig_escape_filter($this->env, set_checkbox("type[]", "tertulis", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("tertulis", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Tertulis
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"file\" ";
        // line 201
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
        // line 210
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Konten</th>
                            <td>
                                <input type=\"text\" name=\"konten\" class=\"span5\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, set_value("konten", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "konten")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        ";
        // line 219
        if ((is_admin() == true)) {
            // line 220
            echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
            // line 223
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
        }
        // line 227
        echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"1\" ";
        // line 233
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"0\" ";
        // line 238
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
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materi"]) ? $context["materi"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 268
            echo "
                ";
            // line 269
            if ((is_admin() == true)) {
                // line 270
                echo "                    ";
                $context["action_edit"] = true;
                // line 271
                echo "                    ";
                $context["action_delete"] = true;
                // line 272
                echo "                ";
            } elseif ((is_pengajar() == true)) {
                // line 273
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id") == get_sess_data("user", "id"))) {
                    // line 274
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 275
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 276
                    echo "                    ";
                } else {
                    // line 277
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 278
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 279
                    echo "                    ";
                }
                // line 280
                echo "                ";
            } elseif ((is_siswa() == true)) {
                // line 281
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "siswa_id") == get_sess_data("user", "id"))) {
                    // line 282
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 283
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 284
                    echo "                    ";
                } else {
                    // line 285
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 286
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 287
                    echo "                    ";
                }
                // line 288
                echo "                ";
            }
            // line 289
            echo "
                <tr>
                    <td><b>";
            // line 291
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "</b></td>
                    <td>
                        <p><strong class=\"text-warning\">
                            ";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "
                        </strong></p>
                        <ul class=\"breadcrumb\" style=\"padding: 0px;background: none;\">
                            <li>
                                ";
            // line 298
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 1)) ? ("<span class=\"label label-success\">Terbit</span>") : ("<span class=\"label label-warning\">Konsep</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 302
            echo (((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) ? ("<span class=\"label label-success\">File</span>") : ("<span class=\"label label-info\">Tertulis</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 310
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 311
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 316
            if ((is_pengajar() == false)) {
                // line 317
                echo "                                    Pembuat <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>
                                    , ";
                // line 318
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            } else {
                // line 320
                echo "                                    Dibuat ";
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            }
            // line 322
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 325
            echo ((twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file"))) ? ("Dibaca") : ("Diunduh"));
            echo "
                                ";
            // line 326
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "views"), "html", null, true);
            echo " kali
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 330
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar
                            </li>
                        </ul>
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            ";
            // line 336
            if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                // line 337
                echo "                                ";
                $context["url_type"] = "file";
                // line 338
                echo "                            ";
            } else {
                // line 339
                echo "                                ";
                $context["url_type"] = "tertulis";
                // line 340
                echo "                            ";
            }
            // line 341
            echo "                            ";
            echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-zoom-in\"></i> Detail", array("class" => "btn btn-default btn-small", "target" => "_tab"));
            echo "

                            ";
            // line 343
            if (((isset($context["action_edit"]) ? $context["action_edit"] : null) == true)) {
                // line 344
                echo "                                ";
                echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-small"));
                echo "
                            ";
            }
            // line 346
            echo "
                            ";
            // line 347
            if (((isset($context["action_delete"]) ? $context["action_delete"] : null) == true)) {
                // line 348
                echo "                                ";
                echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-trash\"></i> Hapus", array("class" => "btn btn-default btn-small", "onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                echo "
                            ";
            }
            // line 350
            echo "                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 357
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
-->

";
    }

    public function getTemplateName()
    {
        return "list-absenjurnal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 357,  686 => 354,  677 => 350,  671 => 348,  669 => 347,  666 => 346,  660 => 344,  658 => 343,  652 => 341,  649 => 340,  646 => 339,  643 => 338,  640 => 337,  638 => 336,  629 => 330,  622 => 326,  618 => 325,  613 => 322,  607 => 320,  602 => 318,  595 => 317,  593 => 316,  588 => 313,  579 => 311,  575 => 310,  568 => 306,  561 => 302,  554 => 298,  547 => 294,  541 => 291,  537 => 289,  534 => 288,  531 => 287,  528 => 286,  525 => 285,  522 => 284,  519 => 283,  516 => 282,  513 => 281,  510 => 280,  507 => 279,  504 => 278,  501 => 277,  498 => 276,  495 => 275,  492 => 274,  489 => 273,  486 => 272,  483 => 271,  480 => 270,  478 => 269,  475 => 268,  471 => 267,  439 => 238,  431 => 233,  423 => 227,  416 => 223,  411 => 220,  409 => 219,  403 => 216,  394 => 210,  382 => 201,  374 => 196,  363 => 187,  349 => 183,  345 => 181,  341 => 180,  332 => 173,  318 => 169,  314 => 167,  310 => 166,  301 => 160,  294 => 155,  288 => 152,  282 => 149,  278 => 147,  276 => 146,  270 => 143,  250 => 126,  235 => 113,  216 => 108,  210 => 107,  202 => 106,  198 => 105,  191 => 101,  187 => 100,  183 => 99,  179 => 98,  175 => 97,  171 => 96,  167 => 95,  161 => 94,  157 => 93,  153 => 92,  149 => 91,  146 => 90,  142 => 89,  98 => 48,  91 => 43,  84 => 39,  80 => 37,  78 => 36,  71 => 32,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
