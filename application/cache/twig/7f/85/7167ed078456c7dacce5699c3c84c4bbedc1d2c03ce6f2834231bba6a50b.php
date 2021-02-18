<?php

/* list-materi.html */
class __TwigTemplate_7f857167ed078456c7dacce5699c3c84c4bbedc1d2c03ce6f2834231bba6a50b extends Twig_Template
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
        echo "Materi - ";
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
        <h1 class=\"m-0 text-dark\">List Materi</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Materi</li>
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
        echo get_flashdata("materi");
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
            // line 38
            echo anchor("materi/add/tertulis", "Tambah Materi Tertulis", array("class" => "btn btn-info btn-sm"));
            echo "
                        ";
            // line 39
            echo anchor("materi/add/file", "Tambah Materi File", array("class" => "btn btn-success btn-sm"));
            echo "
                    </div>
                </div>
                ";
        }
        // line 43
        echo "                
                <blockquote>
                <button class=\"btn btn-primary mb-2\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"fas fa-search\"></i> PARAMETER PENCARIAN</button>
                <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                    ";
        // line 47
        echo form_open("materi");
        echo "
                        <table class=\"table table-condensed\">
                            <tr>
                                <th>Mapel</th>
                                <td>
                                    <div class=\"form-group\">
                                        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 54
            echo "                                            <label class=\"form-check-label ml-3 mr-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 55
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
        // line 58
        echo "                                    </div>
                                </td>
                            </tr>
                            ";
        // line 61
        if ((is_admin() == true)) {
            // line 62
            echo "                            <tr>
                                <th>Kelas</th>
                                <td>
                                    <div class=\"form-group\">
                                        ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 67
                echo "                                            <label class=\"form-check-label ml-3 mr-4\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
                // line 68
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
            // line 71
            echo "                                    </div>
                                </td>
                            </tr>
                            ";
        }
        // line 75
        echo "                            <tr>
                                <th>Tipe</th>
                                <td>
                                    <div class=\"form-group\">
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"tertulis\" ";
        // line 80
        echo twig_escape_filter($this->env, set_checkbox("type[]", "tertulis", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("tertulis", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Tertulis
                                        </label>
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"file\" ";
        // line 83
        echo twig_escape_filter($this->env, set_checkbox("type[]", "file", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("file", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> File
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>
                                    <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                                </td>
                            </tr>
                            <tr>
                                <th>Konten</th>
                                <td>
                                    <input type=\"text\" name=\"konten\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, set_value("konten", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "konten")), "html", null, true);
        echo "\">
                                </td>
                            </tr>
                            ";
        // line 100
        if ((is_admin() == true)) {
            // line 101
            echo "                            <tr>
                                <th>Pembuat</th>
                                <td>
                                    <input type=\"text\" name=\"pembuat\" class=\"form-control\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                                </td>
                            </tr>
                            ";
        }
        // line 108
        echo "                            <tr>
                                <th>Status</th>
                                <td>
                                    <div class=\"form-group\">
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"1\" ";
        // line 113
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                        <label class=\"form-check-label ml-3 mr-4\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"0\" ";
        // line 116
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "0", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Konsep
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
                
                <table class=\"table table-striped display nowrap\">
                    <thead>
                        <tr>
                            <th width=\"7%\">ID</th>
                            <th>Informasi Materi</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materi"]) ? $context["materi"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 141
            echo "        
                        ";
            // line 142
            if ((is_admin() == true)) {
                // line 143
                echo "                            ";
                $context["action_edit"] = true;
                // line 144
                echo "                            ";
                $context["action_delete"] = true;
                // line 145
                echo "                        ";
            } elseif ((is_pengajar() == true)) {
                // line 146
                echo "                            ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id") == get_sess_data("user", "id"))) {
                    // line 147
                    echo "                                ";
                    $context["action_edit"] = true;
                    // line 148
                    echo "                                ";
                    $context["action_delete"] = true;
                    // line 149
                    echo "                            ";
                } else {
                    // line 150
                    echo "                                ";
                    $context["action_edit"] = false;
                    // line 151
                    echo "                                ";
                    $context["action_delete"] = false;
                    // line 152
                    echo "                            ";
                }
                // line 153
                echo "                        ";
            } elseif ((is_siswa() == true)) {
                // line 154
                echo "                            ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "siswa_id") == get_sess_data("user", "id"))) {
                    // line 155
                    echo "                                ";
                    $context["action_edit"] = true;
                    // line 156
                    echo "                                ";
                    $context["action_delete"] = true;
                    // line 157
                    echo "                            ";
                } else {
                    // line 158
                    echo "                                ";
                    $context["action_edit"] = false;
                    // line 159
                    echo "                                ";
                    $context["action_delete"] = false;
                    // line 160
                    echo "                            ";
                }
                // line 161
                echo "                        ";
            }
            // line 162
            echo "        
                        <tr>
                            <td><b>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "</b></td>
                            <td>
                                <p><strong class=\"text-warning\">
                                    ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "
                                </strong></p>
                                <ul class=\"breadcrumb\" style=\"padding: 0px;background: none;\">
                                    <li>
                                        ";
            // line 171
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 1)) ? ("<span class=\"label label-success\">Terbit</span>") : ("<span class=\"label label-warning\">Konsep</span>"));
            echo "
                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 175
            echo (((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) ? ("<span class=\"label label-success\">File</span>") : ("<span class=\"label label-info\">Tertulis</span>"));
            echo "
                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "
                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 183
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 184
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "&nbsp;
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 189
            if ((is_pengajar() == false)) {
                // line 190
                echo "                                            Pembuat <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>
                                            , ";
                // line 191
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                        ";
            } else {
                // line 193
                echo "                                            Dibuat ";
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                        ";
            }
            // line 195
            echo "                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 198
            echo ((twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file"))) ? ("Dibaca") : ("Diunduh"));
            echo "
                                        ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "views"), "html", null, true);
            echo " kali
                                        <span class=\"divider\">/</span>
                                    </li>
                                    <li>
                                        ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar
                                    </li>
                                </ul>
                                <div class=\"btn-group\">
                                    ";
            // line 207
            if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                // line 208
                echo "                                        ";
                $context["url_type"] = "file";
                // line 209
                echo "                                    ";
            } else {
                // line 210
                echo "                                        ";
                $context["url_type"] = "tertulis";
                // line 211
                echo "                                    ";
            }
            // line 212
            echo "                                    ";
            echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-zoom-in\"></i> Detail", array("class" => "btn btn-default btn-small", "target" => "_tab"));
            echo "
        
                                    ";
            // line 214
            if (((isset($context["action_edit"]) ? $context["action_edit"] : null) == true)) {
                // line 215
                echo "                                        ";
                echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-small"));
                echo "
                                    ";
            }
            // line 217
            echo "        
                                    ";
            // line 218
            if (((isset($context["action_delete"]) ? $context["action_delete"] : null) == true)) {
                // line 219
                echo "                                        ";
                echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-trash\"></i> Hapus", array("class" => "btn btn-default btn-small", "onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                echo "
                                    ";
            }
            // line 221
            echo "                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <tr>
                            <th width=\"7%\">ID</th>
                            <th>Informasi Materi</th>
                        </tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer\">
                ";
        // line 238
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
        // line 255
        echo get_flashdata("materi");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            ";
        // line 258
        if ((is_siswa() == false)) {
            // line 259
            echo "            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    ";
            // line 261
            echo anchor("materi/add/tertulis", "Tambah Materi Tertulis", array("class" => "btn btn-primary"));
            echo "
                </div>
                <div class=\"btn-group\">
                    ";
            // line 264
            echo anchor("materi/add/file", "Tambah Materi File", array("class" => "btn btn-primary"));
            echo "
                </div>
            ";
        }
        // line 267
        echo "                <div class=\"btn-group\">
                <a class=\"btn btn-success as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> Pencarian</a>
                </div>
            </div>
            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
        // line 272
        echo form_open("materi");
        echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 279
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 281
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
        // line 285
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 292
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 293
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 295
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
        // line 299
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
        // line 308
        echo twig_escape_filter($this->env, set_checkbox("type[]", "tertulis", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("tertulis", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Tertulis
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"file\" ";
        // line 313
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
        // line 322
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Konten</th>
                            <td>
                                <input type=\"text\" name=\"konten\" class=\"span5\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, set_value("konten", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "konten")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        ";
        // line 331
        if ((is_admin() == true)) {
            // line 332
            echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
            // line 335
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
        }
        // line 339
        echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"1\" ";
        // line 345
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"0\" ";
        // line 350
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
        // line 379
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materi"]) ? $context["materi"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 380
            echo "
                ";
            // line 381
            if ((is_admin() == true)) {
                // line 382
                echo "                    ";
                $context["action_edit"] = true;
                // line 383
                echo "                    ";
                $context["action_delete"] = true;
                // line 384
                echo "                ";
            } elseif ((is_pengajar() == true)) {
                // line 385
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id") == get_sess_data("user", "id"))) {
                    // line 386
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 387
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 388
                    echo "                    ";
                } else {
                    // line 389
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 390
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 391
                    echo "                    ";
                }
                // line 392
                echo "                ";
            } elseif ((is_siswa() == true)) {
                // line 393
                echo "                    ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "siswa_id") == get_sess_data("user", "id"))) {
                    // line 394
                    echo "                        ";
                    $context["action_edit"] = true;
                    // line 395
                    echo "                        ";
                    $context["action_delete"] = true;
                    // line 396
                    echo "                    ";
                } else {
                    // line 397
                    echo "                        ";
                    $context["action_edit"] = false;
                    // line 398
                    echo "                        ";
                    $context["action_delete"] = false;
                    // line 399
                    echo "                    ";
                }
                // line 400
                echo "                ";
            }
            // line 401
            echo "
                <tr>
                    <td><b>";
            // line 403
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "</b></td>
                    <td>
                        <p><strong class=\"text-warning\">
                            ";
            // line 406
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "
                        </strong></p>
                        <ul class=\"breadcrumb\" style=\"padding: 0px;background: none;\">
                            <li>
                                ";
            // line 410
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 1)) ? ("<span class=\"label label-success\">Terbit</span>") : ("<span class=\"label label-warning\">Konsep</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 414
            echo (((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) ? ("<span class=\"label label-success\">File</span>") : ("<span class=\"label label-info\">Tertulis</span>"));
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 418
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 422
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 423
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 428
            if ((is_pengajar() == false)) {
                // line 429
                echo "                                    Pembuat <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>
                                    , ";
                // line 430
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            } else {
                // line 432
                echo "                                    Dibuat ";
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting")), "html", null, true);
                echo "
                                ";
            }
            // line 434
            echo "                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 437
            echo ((twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file"))) ? ("Dibaca") : ("Diunduh"));
            echo "
                                ";
            // line 438
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "views"), "html", null, true);
            echo " kali
                                <span class=\"divider\">/</span>
                            </li>
                            <li>
                                ";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar
                            </li>
                        </ul>
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            ";
            // line 448
            if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                // line 449
                echo "                                ";
                $context["url_type"] = "file";
                // line 450
                echo "                            ";
            } else {
                // line 451
                echo "                                ";
                $context["url_type"] = "tertulis";
                // line 452
                echo "                            ";
            }
            // line 453
            echo "                            ";
            echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-zoom-in\"></i> Detail", array("class" => "btn btn-default btn-small", "target" => "_tab"));
            echo "

                            ";
            // line 455
            if (((isset($context["action_edit"]) ? $context["action_edit"] : null) == true)) {
                // line 456
                echo "                                ";
                echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-small"));
                echo "
                            ";
            }
            // line 458
            echo "
                            ";
            // line 459
            if (((isset($context["action_delete"]) ? $context["action_delete"] : null) == true)) {
                // line 460
                echo "                                ";
                echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-trash\"></i> Hapus", array("class" => "btn btn-default btn-small", "onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                echo "
                            ";
            }
            // line 462
            echo "                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 469
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
-->

";
    }

    public function getTemplateName()
    {
        return "list-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 469,  925 => 466,  916 => 462,  910 => 460,  908 => 459,  905 => 458,  899 => 456,  897 => 455,  891 => 453,  888 => 452,  885 => 451,  882 => 450,  879 => 449,  877 => 448,  868 => 442,  861 => 438,  857 => 437,  852 => 434,  846 => 432,  841 => 430,  834 => 429,  832 => 428,  827 => 425,  818 => 423,  814 => 422,  807 => 418,  800 => 414,  793 => 410,  786 => 406,  780 => 403,  776 => 401,  773 => 400,  770 => 399,  767 => 398,  764 => 397,  761 => 396,  758 => 395,  755 => 394,  752 => 393,  749 => 392,  746 => 391,  743 => 390,  740 => 389,  737 => 388,  734 => 387,  731 => 386,  728 => 385,  725 => 384,  722 => 383,  719 => 382,  717 => 381,  714 => 380,  710 => 379,  678 => 350,  670 => 345,  662 => 339,  655 => 335,  650 => 332,  648 => 331,  642 => 328,  633 => 322,  621 => 313,  613 => 308,  602 => 299,  588 => 295,  584 => 293,  580 => 292,  571 => 285,  557 => 281,  553 => 279,  549 => 278,  540 => 272,  533 => 267,  527 => 264,  521 => 261,  517 => 259,  515 => 258,  509 => 255,  489 => 238,  474 => 225,  465 => 221,  459 => 219,  457 => 218,  454 => 217,  448 => 215,  446 => 214,  440 => 212,  437 => 211,  434 => 210,  431 => 209,  428 => 208,  426 => 207,  419 => 203,  412 => 199,  408 => 198,  403 => 195,  397 => 193,  392 => 191,  385 => 190,  383 => 189,  378 => 186,  369 => 184,  365 => 183,  358 => 179,  351 => 175,  344 => 171,  337 => 167,  331 => 164,  327 => 162,  324 => 161,  321 => 160,  318 => 159,  315 => 158,  312 => 157,  309 => 156,  306 => 155,  303 => 154,  300 => 153,  297 => 152,  294 => 151,  291 => 150,  288 => 149,  285 => 148,  282 => 147,  279 => 146,  276 => 145,  273 => 144,  270 => 143,  268 => 142,  265 => 141,  261 => 140,  234 => 116,  228 => 113,  221 => 108,  214 => 104,  209 => 101,  207 => 100,  201 => 97,  192 => 91,  181 => 83,  175 => 80,  168 => 75,  162 => 71,  149 => 68,  146 => 67,  142 => 66,  136 => 62,  134 => 61,  129 => 58,  116 => 55,  113 => 54,  109 => 53,  100 => 47,  94 => 43,  87 => 39,  83 => 38,  79 => 36,  77 => 35,  71 => 32,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
