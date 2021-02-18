<?php

/* manajemen-tugas.html */
class __TwigTemplate_7a536c140678820f92a9bd036d430ad0b4a158cc409334292dedc2b448afbbf2 extends Twig_Template
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
        echo "Manajemen Soal Tugas - ";
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
        <h1 class=\"m-0 text-dark\">Manajemen Soal Tugas</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("tugas"), "html", null, true);
        echo "\">Tugas</a></li>
            <li class=\"breadcrumb-item active\">Manajemen Soal Tugas</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

";
        // line 25
        echo get_flashdata("tugas");
        echo "

<!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
        <!-- Small boxes (Stat box) -->
            <div class=\"row\">
                <div class=\"col-12\">
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
            echo "                                        ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-check\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                                    ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 44
            echo "                                        ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"fas fa-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                                    ";
        }
        // line 46
        echo "                                </div>
                                <div class=\"btn-group flex-wrap float-right m-2\">
                                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, site_url(("tugas/tambah_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-pertanyaan\" title=\"Tambah Pertanyaan\">Tambah Pertanyaan</a>
                                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, site_url(("tugas/copy_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info iframe-copy-pertanyaan\" title=\"Copy Pertanyaan\">Copy Pertanyaan</a>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                                    <table class=\"table\">
                                        <tr>
                                            <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                                            <td style=\"border-top: none;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Matapelajaran</th>
                                            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Kelas</th>
                                            <td>
                                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                                    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 72
            echo "                                                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Info</th>
                                            <td>";
        // line 79
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Durasi</th>
                                            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                                        </tr>
                                    </table>
                                </div>
                            </div><br/>
                            <div class=\"col-12\">
                                <table class=\"table table-bordered\">
                                    <thead>
                                        <tr>
                                            <th width=\"5%\">No</th>
                                            <th>Pertanyaan ";
        // line 93
        echo ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) ? (" dan Pilihan") : (""));
        echo "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 98
            echo "                                        <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                                            <td><b>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
            echo ".</b></td>
                                            <td>
                                                <div class=\"modal fade\" id=\"modal-default\">
                                                    <div class=\"modal-dialog modal-xl\">
                                                    <div class=\"modal-content\">
                                                        <!--
                                                        <div class=\"modal-header\">
                                                        <h4 class=\"modal-title\">Default Modal</h4>
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                        </button>
                                                        </div>
                                                        -->
                                                        <div class=\"modal-body\">
                                                            <div class=\"embed-responsive embed-responsive-16by9\">
                                                                <iframe id=\"iframe-pertanyaan\" class=\"embed-responsive-item\" src=\"\" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal-footer justify-content-end\">
                                                        <button type=\"button\" class=\"btn btn-dark\" data-dismiss=\"modal\"><i class=\"fas fa-times\"></i> Keluar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                                
                                                <div class=\"pertanyaan\">
                                                    <div class=\"btn-group float-right m-3\">
                                                        ";
            // line 129
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 130
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, site_url(((("tugas/tambah_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Tambah Pilihan\"><i class=\"fas fa-tasks\"></i></a>
                                                        ";
            }
            // line 132
            echo "                                                        <!-- <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default iframe-pertanyaan\" data-toggle=\"tooltip\" title=\"Edit Pertanyaan\"><i class=\"fas fa-edit\"></i></a> -->
                                                        <span data-toggle=\"tooltip\" title=\"Edit Pertanyaan\"><button class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal-default\" data-table=\"";
            // line 133
            echo twig_escape_filter($this->env, site_url(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\" ><i class=\"fas fa-edit\"></i></button></span>
                                                        <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, site_url(((((("tugas/hapus_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pertanyaan\"><i class=\"fas fa-trash\"></i></a>
                                                    </div>
                        
                                                    ";
            // line 137
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                                                </div>
                        
                                                ";
            // line 140
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 141
                echo "                                                <div id=\"pilihan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                                    <table class=\"table table-condensed table-striped\">
                                                        <tbody>
                                                            ";
                // line 144
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    // line 145
                    echo "                                                            <tr ";
                    echo ((($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) ? ("class=\"success\"") : (""));
                    echo ">
                                                                <td width=\"3%\"><b>(";
                    // line 146
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo ")</b></td>
                                                                <td>
                                                                    <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">
                                                                        ";
                    // line 149
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 0)) {
                        // line 150
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, site_url(((((((("tugas/kunci_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                        echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Jadikan Kunci\"><i class=\"fas fa-check\"></i></a>
                                                                        ";
                    }
                    // line 152
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, site_url(((((("tugas/edit_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Edit Pilihan\"><i class=\"fas fa-edit\"></i></a>
                                                                        <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
                    // line 153
                    echo twig_escape_filter($this->env, site_url(((((((("tugas/hapus_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pilihan\"><i class=\"fas fa-trash\"></i></a>
                                                                    </div>
                                                                    ";
                    // line 155
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    echo "
                        
                                                                    ";
                    // line 157
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 158
                        echo "                                                                    <b class=\"text-success\"><i class=\"fas fa-star\"></i> Kunci Jawaban</b>
                                                                    ";
                    }
                    // line 160
                    echo "                                                                </td>
                                                            </tr>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                                ";
            }
            // line 167
            echo "                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            ";
        // line 175
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
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
        // line 185
        echo anchor("tugas", "Tugas");
        echo " / Manajemen Soal Tugas</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 188
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
        // line 192
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                ";
        // line 193
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 194
            echo "                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 196
            echo "                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                ";
        }
        // line 198
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i> ";
        // line 199
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 220
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 227
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <div class=\"btn-group\">
            <a href=\"";
        // line 240
        echo twig_escape_filter($this->env, site_url(("tugas/tambah_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-pertanyaan\" title=\"Tambah Pertanyaan\">Tambah Pertanyaan</a>
            <a href=\"";
        // line 241
        echo twig_escape_filter($this->env, site_url(("tugas/copy_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-copy-pertanyaan\" title=\"Copy Pertanyaan\">Copy Pertanyaan</a>
        </div>
        <br><br>

        <table class=\"table\">
            <thead>
                <tr>
                    <th width=\"5%\">No</th>
                    <th>Pertanyaan ";
        // line 249
        echo ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) ? (" dan Pilihan") : (""));
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 254
            echo "                <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                    <td><b>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
            echo ".</b></td>
                    <td>
                        <div class=\"pertanyaan\">
                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">
                                ";
            // line 259
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 260
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, site_url(((("tugas/tambah_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Tambah Pilihan\"><i class=\"icon-tasks\"></i></a>
                                ";
            }
            // line 262
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default iframe-pertanyaan\" data-toggle=\"tooltip\" title=\"Edit Pertanyaan\"><i class=\"icon-edit\"></i></a>
                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
            // line 263
            echo twig_escape_filter($this->env, site_url(((((("tugas/hapus_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pertanyaan\"><i class=\"icon-trash\"></i></a>
                            </div>

                            ";
            // line 266
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                        </div>

                        ";
            // line 269
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 270
                echo "                        <div id=\"pilihan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                            <table class=\"table table-condensed table-striped\">
                                <tbody>
                                    ";
                // line 273
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    // line 274
                    echo "                                    <tr ";
                    echo ((($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) ? ("class=\"success\"") : (""));
                    echo ">
                                        <td width=\"3%\"><b>(";
                    // line 275
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo ")</b></td>
                                        <td>
                                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">
                                                ";
                    // line 278
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 0)) {
                        // line 279
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, site_url(((((((("tugas/kunci_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                        echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Jadikan Kunci\"><i class=\"icon-ok\"></i></a>
                                                ";
                    }
                    // line 281
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, site_url(((((("tugas/edit_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Edit Pilihan\"><i class=\"icon-edit\"></i></a>
                                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
                    // line 282
                    echo twig_escape_filter($this->env, site_url(((((((("tugas/hapus_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pilihan\"><i class=\"icon-trash\"></i></a>
                                            </div>
                                            ";
                    // line 284
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    echo "

                                            ";
                    // line 286
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 287
                        echo "                                            <b class=\"text-warning\"><i class=\"icon-star\"></i> Kunci Jawaban</b>
                                            ";
                    }
                    // line 289
                    echo "                                        </td>
                                    </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                                </tbody>
                            </table>
                        </div>
                        ";
            }
            // line 296
            echo "
                    </td>
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 304
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "manajemen-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 304,  603 => 301,  593 => 296,  587 => 292,  579 => 289,  575 => 287,  573 => 286,  568 => 284,  563 => 282,  558 => 281,  552 => 279,  550 => 278,  544 => 275,  539 => 274,  535 => 273,  528 => 270,  526 => 269,  520 => 266,  514 => 263,  509 => 262,  503 => 260,  501 => 259,  494 => 255,  489 => 254,  485 => 253,  478 => 249,  467 => 241,  463 => 240,  451 => 231,  444 => 227,  437 => 222,  428 => 220,  424 => 219,  415 => 213,  408 => 209,  401 => 205,  392 => 199,  389 => 198,  383 => 196,  377 => 194,  375 => 193,  371 => 192,  364 => 188,  358 => 185,  345 => 175,  338 => 170,  330 => 167,  324 => 163,  316 => 160,  312 => 158,  310 => 157,  305 => 155,  300 => 153,  295 => 152,  289 => 150,  287 => 149,  281 => 146,  276 => 145,  272 => 144,  265 => 141,  263 => 140,  257 => 137,  251 => 134,  247 => 133,  242 => 132,  236 => 130,  234 => 129,  201 => 99,  196 => 98,  192 => 97,  185 => 93,  172 => 83,  165 => 79,  158 => 74,  149 => 72,  145 => 71,  136 => 65,  129 => 61,  122 => 57,  111 => 49,  107 => 48,  103 => 46,  97 => 44,  91 => 42,  89 => 41,  85 => 40,  77 => 35,  64 => 25,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
