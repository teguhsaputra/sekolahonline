<?php

/* list-pengajar.html */
class __TwigTemplate_1da7980c10c5b7b27622e8b3961e0f0e2a6f8a4151a7611cc45b7071bbec8d7b extends Twig_Template
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
        echo "Data Pengajar - ";
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
        <h1 class=\"m-0 text-dark\">List Pengajar</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Pengajar</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
";
        // line 25
        echo get_flashdata("pengajar");
        echo "
<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <div class=\"col-6\">
                            <div class=\"btn-group flex-wrap\">
                                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, site_url(("pengajar/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn btn-info\">Tambah Pengajar</a>
                                <!--<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, site_url(("siswa/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn btn-success\">Import Excel</a> -->
                            </div>
                        </div><br/>
                        ";
        // line 41
        if ((is_admin() == true)) {
            // line 42
            echo "                        <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th colspan=\"7\">
                                <div class=\"btn-group flex-wrap\">
                                    ";
            // line 47
            echo anchor("pengajar/index/1", "Aktif", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 1)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                                    ";
            // line 48
            echo anchor("pengajar/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                                    ";
            // line 49
            echo anchor("pengajar/index/2", "Blocking", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 2)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                                    ";
            // line 50
            echo anchor("pengajar/filter", "Filter", array("class" => "btn btn-default"));
            echo "
                                </div>
                            </th>
                        </tr>
                        <tr>
                        </table>
                        ";
        } elseif ((is_pengajar() == true)) {
            // line 57
            echo "                        <div class=\"bs-callout bs-callout-info\">
                            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter</a></b>
                            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                                ";
            // line 60
            echo form_open("pengajar/filter");
            echo "
                                <table class=\"table table-bordered\" id=\"form-search\">
                                    <tr>
                                        <th width=\"20%\" style=\"border-top:none;\">NIP</th>
                                        <td style=\"border-top:none;\">
                                            <input type=\"text\" name=\"nip\" class=\"span2\" style=\"margin-bottom:0px;\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, set_value("nip", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip")) : (""))), "html", null, true);
            echo "\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>
                                            <input type=\"text\" name=\"nama\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, set_value("nama", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama")) : (""))), "html", null, true);
            echo "\">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>
                                            <p style=\"margin-top:0px; margin-bottom:5px;\">
                                            <label class=\"checkbox inline\">
                                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Laki-laki\" ";
            // line 79
            echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
            echo "> Laki-laki
                                            </label>
                                            <label class=\"checkbox inline\">
                                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
            // line 82
            echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
            echo "> Perempuan
                                            </label>
                                            </p>
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>
                                            <input type=\"text\" name=\"tempat_lahir\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, set_value("tempat_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir")) : (""))), "html", null, true);
            echo "\">
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>
                                            <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                                <option value=\"\">Tgl</option>
                                                ";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 99
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir")))) ? (true) : (false))), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                            </select>
                                            <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                                <option value=\"\">Bulan</option>
                                                ";
            // line 104
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 105
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir")))) ? (true) : (false))), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                            </select>
                                            <input type=\"text\" name=\"thn_lahir\" class=\"span1\" maxlength=\"4\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>
                                            <input type=\"text\" name=\"alamat\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
            echo "\">
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>Opsi</th>
                                        <td>
                                            <label><input type=\"checkbox\" name=\"is_admin\" value=\"1\" style=\"margin-top:-2px;\" ";
            // line 120
            echo twig_escape_filter($this->env, set_checkbox("is_admin", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin", array(), "any", true, true) && ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin") == 1))) ? (true) : (false))), "html", null, true);
            echo "> Administrator</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                                        </td>
                                    </tr>
                                </table>
                                ";
            // line 130
            echo form_close();
            echo "
                            </div>
                        </div>
                        ";
        }
        // line 134
        echo "                        
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                            <thead>
                                <th>
                                ";
        // line 139
        if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
            // line 140
            echo "                                    <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_pengajar_ch_uch_checkbox(this)\">
                                ";
        }
        // line 142
        echo "                                ID</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                    ";
        // line 151
        echo form_open(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)));
        echo "
                                ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengajar"]) ? $context["pengajar"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 153
            echo "                                <tr>
                                    <td>
                                    ";
            // line 155
            if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
                // line 156
                echo "                                        <input type=\"checkbox\" name=\"pengajar_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\">
                                    ";
            }
            // line 158
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
            echo "</td>
                                    <td>
                                        <div class=\"btn-group flex-wrap\">
                                        ";
            // line 165
            if ((is_admin() == true)) {
                // line 166
                echo "                                            <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search-plus mr-1\"></i> Detail</a>
                                            <a class=\"btn btn-default dropdown-toggle\" href=\"#\" id=\"act-";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit</a>
                                            <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">        
                                                ";
                // line 169
                echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4 dropdown-item", "title" => "Edit Profil Pengajar"));
                echo "
                                                ";
                // line 170
                echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 dropdown-item", "title" => "Edit Foto Pengajar"));
                echo "
                                                ";
                // line 171
                echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 dropdown-item", "title" => "Edit Username Pengajar"));
                echo "
                                                ";
                // line 172
                echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 dropdown-item", "title" => "Edit Password Pengajar"));
                echo "
                                            </div>
                                            ";
            } elseif ((is_pengajar() == true)) {
                // line 175
                echo "                                            <a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search-plus\"></i> Detail</a>
                                            ";
            }
            // line 177
            echo "                                        </div>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                    <div class=\"card-footer\">
                    ";
        // line 198
        if (((!twig_test_empty((isset($context["pengajar"]) ? $context["pengajar"] : null))) && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 199
            echo "                    <div class=\"form-group d-flex\">
                        <div class=\"col-md-3\">
                            <select name=\"status_id\" class=\"form-control\">
                                <option>--Pilih Status--</option>
                                <option value=\"1\">Aktif</option>
                                ";
            // line 204
            if (((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) {
                // line 205
                echo "                                <option value=\"2\">Blocking</option>
                                ";
            }
            // line 207
            echo "                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button type=\"submit\" class=\"btn btn-default\">Update</button>
                        </div>
                    </div>
                    ";
        }
        // line 214
        echo "                    ";
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
                    </div>
                    ";
        // line 216
        echo form_close();
        echo "
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
        <h3>Data Pengajar</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 232
        echo get_flashdata("pengajar");
        echo "

        ";
        // line 234
        if ((is_admin() == true)) {
            // line 235
            echo "        <div class=\"row-fluid\">
            <div class=\"span7\">
                <a href=\"";
            // line 237
            echo twig_escape_filter($this->env, site_url(("pengajar/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Tambah Pengajar</a>
            </div>

            <div class=\"span5\">
                <div class=\"btn-group pull-right\">
                    ";
            // line 242
            echo anchor("pengajar/index/1", "Aktif", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 1)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                    ";
            // line 243
            echo anchor("pengajar/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                    ";
            // line 244
            echo anchor("pengajar/index/2", "Blocking", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 2)) ? ("btn btn-info") : ("btn btn-default"))));
            echo "
                    ";
            // line 245
            echo anchor("pengajar/filter", "<i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter", array("class" => "btn btn-default"));
            echo "
                </div>
            </div>
        </div>
        ";
        } elseif ((is_pengajar() == true)) {
            // line 250
            echo "        <div class=\"bs-callout bs-callout-info\">
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter</a></b>
            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
            // line 253
            echo form_open("pengajar/filter");
            echo "
                <table class=\"table table-condensed\" id=\"form-search\">
                    <tr>
                        <th width=\"20%\" style=\"border-top:none;\">NIPs</th>
                        <td style=\"border-top:none;\">
                            <input type=\"text\" name=\"nip\" class=\"span2\" style=\"margin-bottom:0px;\" value=\"";
            // line 258
            echo twig_escape_filter($this->env, set_value("nip", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>
                            <input type=\"text\" name=\"nama\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
            // line 264
            echo twig_escape_filter($this->env, set_value("nama", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                            <p style=\"margin-top:0px; margin-bottom:5px;\">
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Laki-laki\" ";
            // line 272
            echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
            echo "> Laki-laki
                            </label>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
            // line 275
            echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
            echo "> Perempuan
                            </label>
                            </p>
                        </td>
                    <tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>
                            <input type=\"text\" name=\"tempat_lahir\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
            // line 283
            echo twig_escape_filter($this->env, set_value("tempat_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    <tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>
                            <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                <option value=\"\">Tgl</option>
                                ";
            // line 291
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 292
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir")))) ? (true) : (false))), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "                            </select>
                            <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                <option value=\"\">Bulan</option>
                                ";
            // line 297
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 298
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir")))) ? (true) : (false))), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "                            </select>
                            <input type=\"text\" name=\"thn_lahir\" class=\"span1\" maxlength=\"4\" value=\"";
            // line 301
            echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                        </td>
                    <tr>
                    <tr>
                        <th>Alamat</th>
                        <td>
                            <input type=\"text\" name=\"alamat\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
            // line 307
            echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    <tr>
                    <tr>
                        <th>Opsi</th>
                        <td>
                            <label><input type=\"checkbox\" name=\"is_admin\" value=\"1\" style=\"margin-top:-2px;\" ";
            // line 313
            echo twig_escape_filter($this->env, set_checkbox("is_admin", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin", array(), "any", true, true) && ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "is_admin") == 1))) ? (true) : (false))), "html", null, true);
            echo "> Administrator</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </td>
                    </tr>
                </table>
                ";
            // line 323
            echo form_close();
            echo "
            </div>
        </div>
        ";
        }
        // line 327
        echo "        <br>

        ";
        // line 329
        echo form_open(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)));
        echo "
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">
                        ";
        // line 334
        if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
            // line 335
            echo "                            <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_pengajar_ch_uch_checkbox(this)\">
                        ";
        }
        // line 337
        echo "                        ID
                    </th>
                    <th>Informasi Pengajar</th>
                    <th width=\"22%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 344
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengajar"]) ? $context["pengajar"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 345
            echo "                <tr>
                    <td>
                        ";
            // line 347
            if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
                // line 348
                echo "                            <input type=\"checkbox\" name=\"pengajar_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\">
                        ";
            }
            // line 350
            echo "                        <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</b>
                    </td>
                    <td>
                        <img style=\"height:40px;width:40px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 353
            echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "medium", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <b>";
            // line 354
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")) . ")</span>")) : (""));
            echo "</b>
                        ";
            // line 355
            $context["is_admin"] = get_row_data("login_model", "retrieve", array(0 => null, 1 => null, 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "is_admin");
            // line 356
            echo "                        ";
            if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                // line 357
                echo "                            <span class=\"label label-warning\">Administrator</span>
                        ";
            }
            // line 359
            echo "                        <br><b>Alamat :</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">
                            ";
            // line 363
            if ((is_admin() == true)) {
                // line 364
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            <li class=\"dropdown\">
                                <a class=\"btn btn-default btn-small\" href=\"#\" id=\"act-";
                // line 366
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 367
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">
                                    <li>";
                // line 368
                echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4", "title" => "Edit Profil Pengajar"));
                echo "</li>
                                    <li>";
                // line 369
                echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5", "title" => "Edit Foto Pengajar"));
                echo "</li>
                                    <li>";
                // line 370
                echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2", "title" => "Edit Username Pengajar"));
                echo "</li>
                                    <li>";
                // line 371
                echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3", "title" => "Edit Password Pengajar"));
                echo "</li>
                                </ul>
                            </li>
                            ";
            } elseif ((is_pengajar() == true)) {
                // line 375
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            ";
            }
            // line 377
            echo "                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "            </tbody>
        </table>

        ";
        // line 384
        if (((!twig_test_empty((isset($context["pengajar"]) ? $context["pengajar"] : null))) && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 385
            echo "        <br>
        <div class=\"row-fluid\">
            <div class=\"span7\">
                <table cellpadding=\"5\">
                    <tr>
                        <th valign=\"top\">Update Status Terpilih</th>
                        <td valign=\"top\">
                            <select name=\"status_id\" style=\"width:100%;\">
                                <option>--Pilih Status--</option>
                                <option value=\"1\">Aktif</option>
                                ";
            // line 395
            if (((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) {
                // line 396
                echo "                                <option value=\"2\">Blocking</option>
                                ";
            }
            // line 398
            echo "                            </select>
                        </td>
                        <td valign=\"top\">
                            <button type=\"submit\" class=\"btn\">Update</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        ";
        }
        // line 408
        echo "
        ";
        // line 409
        echo form_close();
        echo "

        <br>
        ";
        // line 412
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "list-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 412,  791 => 409,  788 => 408,  776 => 398,  772 => 396,  770 => 395,  758 => 385,  756 => 384,  751 => 381,  742 => 377,  736 => 375,  729 => 371,  725 => 370,  721 => 369,  717 => 368,  713 => 367,  709 => 366,  703 => 364,  701 => 363,  693 => 359,  689 => 357,  686 => 356,  684 => 355,  678 => 354,  674 => 353,  667 => 350,  661 => 348,  659 => 347,  655 => 345,  651 => 344,  642 => 337,  638 => 335,  636 => 334,  628 => 329,  624 => 327,  617 => 323,  604 => 313,  595 => 307,  586 => 301,  583 => 300,  570 => 298,  566 => 297,  561 => 294,  548 => 292,  544 => 291,  533 => 283,  522 => 275,  516 => 272,  505 => 264,  496 => 258,  488 => 253,  483 => 250,  475 => 245,  471 => 244,  467 => 243,  463 => 242,  455 => 237,  451 => 235,  449 => 234,  444 => 232,  425 => 216,  419 => 214,  410 => 207,  406 => 205,  404 => 204,  397 => 199,  395 => 198,  376 => 181,  367 => 177,  361 => 175,  355 => 172,  351 => 171,  347 => 170,  343 => 169,  339 => 168,  335 => 167,  330 => 166,  328 => 165,  322 => 162,  318 => 161,  314 => 160,  310 => 159,  305 => 158,  299 => 156,  297 => 155,  293 => 153,  289 => 152,  285 => 151,  274 => 142,  270 => 140,  268 => 139,  261 => 134,  254 => 130,  241 => 120,  232 => 114,  223 => 108,  220 => 107,  207 => 105,  203 => 104,  198 => 101,  185 => 99,  181 => 98,  170 => 90,  159 => 82,  153 => 79,  142 => 71,  133 => 65,  125 => 60,  120 => 57,  110 => 50,  106 => 49,  102 => 48,  98 => 47,  91 => 42,  89 => 41,  83 => 38,  79 => 37,  64 => 25,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
