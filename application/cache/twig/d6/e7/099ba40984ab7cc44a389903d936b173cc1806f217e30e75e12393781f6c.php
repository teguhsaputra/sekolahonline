<?php

/* filter-pengajar.html */
class __TwigTemplate_d6e7099ba40984ab7cc44a389903d936b173cc1806f217e30e75e12393781f6c extends Twig_Template
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
        echo "Filter Pengajar - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<!-- Content Header (Page header) -->
<div class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-dark\">Filter Pengajar</h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url("pengajar"), "html", null, true);
        echo "\">List Pengajar</a></li>
                <li class=\"breadcrumb-item active\">Filter Pengajar</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
";
        // line 26
        echo get_flashdata("pengajar");
        echo "
<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header text-light\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                    <h3 class=\"card-title\">Table Pengajar</h3>
                </div>
                    <!-- /.card-header -->
                <div class=\"card-body\">
                    
                ";
        // line 40
        if ((is_admin() == true)) {
            // line 41
            echo "                <div class=\"col-6\">
                    <div class=\"btn-group flex-wrap\">
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, site_url("pengajar/add/1"), "html", null, true);
            echo "\" class=\"btn btn-info\">Tambah Pengajar</a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, site_url(("pengajar/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
            echo "\" class=\"btn btn-success\">Import Excel</a>
                    </div>
                </div><br/>
                ";
        }
        // line 48
        echo "                
                ";
        // line 49
        if ((is_admin() == true)) {
            echo "   
                <div class=\"table-responsive\">
                    <table class=\"table\">
                    <thead>
                    <tr>
                        <th colspan=\"7\">
                            <div class=\"btn-group flex-wrap\">
                                ";
            // line 56
            echo anchor("pengajar/index/1", "Aktif", array("class" => "btn btn-default"));
            echo "
                                ";
            // line 57
            echo anchor("pengajar/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => "btn btn-default"));
            echo "
                                ";
            // line 58
            echo anchor("pengajar/index/2", "Blocking", array("class" => "btn btn-default"));
            echo "
                                ";
            // line 59
            echo anchor("pengajar/filter", "Filter", array("class" => "btn btn-info"));
            echo "
                            </div>
                        </th>
                    </tr>
                    </thead>
                    </table>
                </div>
                ";
        }
        // line 67
        echo "                    
                <blockquote>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary mb-2\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"fas fa-search\"></i> PARAMETER PENCARIAN</button>
                    <div id=\"form-filter\" class=\"collapse\">
                        ";
        // line 72
        echo form_open("pengajar/filter");
        echo "
                        <table class=\"table table-striped\" id=\"form-search\">
                            <tr>
                                <th width=\"20%\">NIP</th>
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"nip\" style=\"margin-bottom:0px;\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, set_value("nip", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip")) : (""))), "html", null, true);
        echo "\">
                                </td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"nama\" style=\"margin-bottom:0px;\" value=\"";
        // line 83
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
        // line 91
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Laki-laki
                                    </label>
                                    <label class=\"checkbox inline\">
                                        <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
        // line 94
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Perempuan
                                    </label>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"tempat_lahir\" style=\"margin-bottom:0px;\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, set_value("tempat_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir")) : (""))), "html", null, true);
        echo "\">
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>
                                    <div class=\"row\">
                                        <div class=\"col-md-3 mb-2\">
                                            <select class=\"form-control\" name=\"tgl_lahir\">
                                                <option value=\"\">Tgl</option>
                                                ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 113
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
        // line 115
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-md-3 mb-2\">
                                            <select class=\"form-control\" name=\"bln_lahir\">
                                                <option value=\"\">Bulan</option>
                                                ";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 121
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
        // line 123
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-md-3 mb-2\">
                                            <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>
                                    <input type=\"text\" name=\"alamat\" class=\"form-control\" style=\"margin-bottom:0px;\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
        echo "\">
                                </td>
                            </tr>
                            ";
        // line 137
        if (is_admin()) {
            // line 138
            echo "                            <tr>
                                <th>Status</th>
                                <td>
                                    <div class=\"from-group\">
                                        <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"0\" ";
            // line 142
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "0", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(0, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Pending</label>
                                        <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"1\" ";
            // line 143
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Aktif</label>
                                        <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"2\" ";
            // line 144
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "2", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(2, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Blocking</label>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        // line 149
        echo "                            ";
        if (is_admin()) {
            // line 150
            echo "                            <tr>
                                <th>Username</th>
                                <td>
                                    <input type=\"text\" name=\"username\" class=\"form-control\" style=\"margin-bottom:0px;\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, set_value("username", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username")) : (""))), "html", null, true);
            echo "\">
                                </td>
                            </tr>
                            ";
        }
        // line 157
        echo "                            <tr>
                                <td></td>
                                <td>
                                    <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                                </td>
                            </tr>
                        </table>
                        ";
        // line 164
        echo form_close();
        echo "
                    </div>
                </div>
                </blockquote>
                    
                    ";
        // line 169
        echo form_open("pengajar/filter_action");
        echo "
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                ";
        // line 175
        if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 176
            echo "                                    <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_pengajar_ch_uch_checkbox(this)\">
                                ";
        }
        // line 178
        echo "                            ID</th>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengajars"]) ? $context["pengajars"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 188
            echo "                            <tr>
                                <td>
                                ";
            // line 190
            if (is_admin()) {
                // line 191
                echo "                                    <input type=\"checkbox\" name=\"pengajar_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\" ";
                echo ((($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 3)) ? ("disabled") : (""));
                echo ">
                                ";
            }
            // line 193
            echo "                                    <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</b>
                                </td>
                                <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip"), "html", null, true);
            echo "</td>
                                <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "</td>
                                <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
            echo "</td>
                                <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin"), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"btn-group flex-wrap\">
                                    ";
            // line 201
            if (is_admin()) {
                // line 202
                echo "                                        <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search-plus mr-1\"></i> Detail</a>
                                        <a class=\"btn btn-default dropdown-toggle\" href=\"#\" id=\"act-";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit</a>
                                        <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">
                                            ";
                // line 205
                echo anchor(((("pengajar/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4 dropdown-item", "title" => "Edit Profil pengajar"));
                echo "
                                            ";
                // line 206
                echo anchor(((("pengajar/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 dropdown-item", "title" => "Edit Foto pengajar"));
                echo "
                                            ";
                // line 207
                echo anchor(((("pengajar/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 dropdown-item", "title" => "Edit Username pengajar"));
                echo "
                                            ";
                // line 208
                echo anchor(((("pengajar/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 dropdown-item", "title" => "Edit Password pengajar"));
                echo "
                                        </div>
                                    ";
            } else {
                // line 211
                echo "                                        <a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search\"></i> Detail</a>
                                    ";
            }
            // line 213
            echo "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>   
                <!-- /.card-body -->
                
                <div class=\"card-footer\">
                ";
        // line 233
        if ((is_admin() && (!twig_test_empty((isset($context["pengajars"]) ? $context["pengajars"] : null))))) {
            // line 234
            echo "                    <div class=\"form-group d-flex\">
                        <div class=\"col-md-3\">
                            <select name=\"status_id\" class=\"form-control\">
                                <option>--Update Status--</option>
                                <option value=\"1\">Aktif</option>
                                <option value=\"2\">Blocking</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button type=\"submit\" class=\"btn btn-default\">Update</button>
                        </div>
                    </div>
                ";
        }
        // line 247
        echo "                ";
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
                </div>
                ";
        // line 249
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
        <h3>Filter Pengajar</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 265
        echo get_flashdata("pengajar");
        echo "

        ";
        // line 267
        if ((is_admin() == true)) {
            // line 268
            echo "        <div class=\"row-fluid\">
            <div class=\"span7\">
                <a href=\"";
            // line 270
            echo twig_escape_filter($this->env, site_url("pengajar/add/1"), "html", null, true);
            echo "\" class=\"btn btn-primary\">Tambah Pengajar</a>
            </div>

            <div class=\"span5\">
                <div class=\"btn-group pull-right\">
                    ";
            // line 275
            echo anchor("pengajar/index/1", "Aktif", array("class" => "btn btn-default"));
            echo "
                    ";
            // line 276
            echo anchor("pengajar/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => "btn btn-default"));
            echo "
                    ";
            // line 277
            echo anchor("pengajar/index/2", "Blocking", array("class" => "btn btn-default"));
            echo "
                    ";
            // line 278
            echo anchor("pengajar/filter", "<i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter", array("class" => "btn btn-info"));
            echo "
                </div>
            </div>
        </div>
        <br>
        ";
        }
        // line 284
        echo "
        <div class=\"bs-callout bs-callout-info\">
            <b class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\"></i> PARAMETER PENCARIAN</b>
            <div id=\"form-filter\" class=\"collapse\">
                ";
        // line 288
        echo form_open("pengajar/filter");
        echo "
                <table class=\"table table-condensed\" id=\"form-search\">
                    <tr>
                        <th width=\"20%\">NIP</th>
                        <td>
                            <input type=\"text\" name=\"nip\" class=\"span2\" style=\"margin-bottom:0px;\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, set_value("nip", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nip")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>
                            <input type=\"text\" name=\"nama\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 299
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
        // line 307
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Laki-laki
                            </label>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
        // line 310
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
        // line 318
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
        // line 326
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 327
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
        // line 329
        echo "                            </select>
                            <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                <option value=\"\">Bulan</option>
                                ";
        // line 332
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 333
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
        // line 335
        echo "                            </select>
                            <input type=\"text\" name=\"thn_lahir\" class=\"span1\" maxlength=\"4\" value=\"";
        // line 336
        echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                        </td>
                    <tr>
                    <tr>
                        <th>Alamat</th>
                        <td>
                            <input type=\"text\" name=\"alamat\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 342
        echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
        echo "\">
                        </td>
                    <tr>
                    ";
        // line 345
        if ((is_admin() == true)) {
            // line 346
            echo "                    <tr>
                        <th>Status</th>
                        <td>
                            <p style=\"margin-top:0px; margin-bottom:5px;\">
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"0\" ";
            // line 350
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "0", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(0, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Pending</label>
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"1\" ";
            // line 351
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Aktif</label>
                                <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"2\" ";
            // line 352
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "2", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(2, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Blocking</label>
                            </p>
                        </td>
                    <tr>
                    <tr>
                        <th>Username</th>
                        <td>
                            <input type=\"text\" name=\"username\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
            // line 359
            echo twig_escape_filter($this->env, set_value("username", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username")) : (""))), "html", null, true);
            echo "\">
                        </td>
                    </tr>
                    ";
        }
        // line 363
        echo "                    <tr>
                        <th>Opsi</th>
                        <td>
                            <label><input type=\"checkbox\" name=\"is_admin\" value=\"1\" style=\"margin-top:-2px;\" ";
        // line 366
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
        // line 376
        echo form_close();
        echo "
            </div>
        </div>

        <br>

        ";
        // line 382
        echo form_open("pengajar/filter_action");
        echo "
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">
                        ";
        // line 387
        if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 388
            echo "                            <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_pengajar_ch_uch_checkbox(this)\">
                        ";
        }
        // line 390
        echo "                        ID
                    </th>
                    <th>Informasi Pengajar</th>
                    <th width=\"22%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 397
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengajars"]) ? $context["pengajars"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 398
            echo "                <tr>
                    <td>
                        ";
            // line 400
            if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
                // line 401
                echo "                            <input type=\"checkbox\" name=\"pengajar_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\">
                        ";
            }
            // line 403
            echo "                        <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</b>
                    </td>
                    <td>
                        <img style=\"height:40px;width:40px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 406
            echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "medium", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <b>";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nip")) . ")</span>")) : (""));
            echo "</b>
                        ";
            // line 408
            $context["is_admin"] = get_row_data("login_model", "retrieve", array(0 => null, 1 => null, 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "is_admin");
            // line 409
            echo "                        ";
            if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                // line 410
                echo "                            <span class=\"label label-warning\">Administrator</span>
                        ";
            }
            // line 412
            echo "                        <br><b>Alamat :</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "alamat"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">
                            ";
            // line 416
            if ((is_admin() == true)) {
                // line 417
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            <li class=\"dropdown\">
                                <a class=\"btn btn-default btn-small\" href=\"#\" id=\"act-";
                // line 419
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 420
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">
                                    <li>";
                // line 421
                echo anchor(((("pengajar/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4", "title" => "Edit Profil Pengajar"));
                echo "</li>
                                    <li>";
                // line 422
                echo anchor(((("pengajar/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5", "title" => "Edit Foto Pengajar"));
                echo "</li>
                                    <li>";
                // line 423
                echo anchor(((("pengajar/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2", "title" => "Edit Username Pengajar"));
                echo "</li>
                                    <li>";
                // line 424
                echo anchor(((("pengajar/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3", "title" => "Edit Password Pengajar"));
                echo "</li>
                                </ul>
                            </li>
                            ";
            } else {
                // line 428
                echo "                            <li><a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            ";
            }
            // line 430
            echo "                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "            </tbody>
        </table>

        ";
        // line 437
        if ((is_admin() && (!twig_test_empty((isset($context["pengajars"]) ? $context["pengajars"] : null))))) {
            // line 438
            echo "        <br>
        <div class=\"row-fluid\">
            <div class=\"span8\">
                <table cellpadding=\"5\">
                    <tr>
                        <th valign=\"top\">Aksi Terpilih</th>
                        <td valign=\"top\">
                            <select name=\"status_id\" style=\"width:auto;\">
                                <option value=\"\">--Update Status--</option>
                                <option value=\"1\">Aktif</option>
                                <option value=\"2\">Blocking</option>
                            </select>
                        </td>
                        <td valign=\"top\">
                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        ";
        }
        // line 459
        echo "
        ";
        // line 460
        echo form_close();
        echo "

        <br>
        ";
        // line 463
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>

-->

";
    }

    public function getTemplateName()
    {
        return "filter-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 463,  870 => 460,  867 => 459,  844 => 438,  842 => 437,  837 => 434,  828 => 430,  822 => 428,  815 => 424,  811 => 423,  807 => 422,  803 => 421,  799 => 420,  795 => 419,  789 => 417,  787 => 416,  779 => 412,  775 => 410,  772 => 409,  770 => 408,  764 => 407,  760 => 406,  753 => 403,  747 => 401,  745 => 400,  741 => 398,  737 => 397,  728 => 390,  724 => 388,  722 => 387,  714 => 382,  705 => 376,  692 => 366,  687 => 363,  680 => 359,  670 => 352,  666 => 351,  662 => 350,  656 => 346,  654 => 345,  648 => 342,  639 => 336,  636 => 335,  623 => 333,  619 => 332,  614 => 329,  601 => 327,  597 => 326,  586 => 318,  575 => 310,  569 => 307,  558 => 299,  549 => 293,  541 => 288,  535 => 284,  526 => 278,  522 => 277,  518 => 276,  514 => 275,  506 => 270,  502 => 268,  500 => 267,  495 => 265,  476 => 249,  470 => 247,  455 => 234,  453 => 233,  435 => 217,  426 => 213,  420 => 211,  414 => 208,  410 => 207,  406 => 206,  402 => 205,  398 => 204,  394 => 203,  389 => 202,  387 => 201,  381 => 198,  377 => 197,  373 => 196,  369 => 195,  363 => 193,  355 => 191,  353 => 190,  349 => 188,  345 => 187,  334 => 178,  330 => 176,  328 => 175,  319 => 169,  311 => 164,  302 => 157,  295 => 153,  290 => 150,  287 => 149,  279 => 144,  275 => 143,  271 => 142,  265 => 138,  263 => 137,  257 => 134,  246 => 126,  241 => 123,  228 => 121,  224 => 120,  217 => 115,  204 => 113,  200 => 112,  187 => 102,  176 => 94,  170 => 91,  159 => 83,  150 => 77,  142 => 72,  135 => 67,  124 => 59,  120 => 58,  116 => 57,  112 => 56,  102 => 49,  99 => 48,  92 => 44,  88 => 43,  84 => 41,  82 => 40,  65 => 26,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
