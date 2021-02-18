<?php

/* filter-siswa.html */
class __TwigTemplate_27143e0613e8a420cce8813a454b41e219fbd11bf32fe3297b2cab25f90ed1e0 extends Twig_Template
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
        echo "Filter Siswa - ";
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
            <h1 class=\"m-0 text-dark\">Filter Siswa</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url("siswa"), "html", null, true);
        echo "\">List Siswa</a></li>
              <li class=\"breadcrumb-item active\">Filter Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
";
        // line 26
        echo get_flashdata("siswa");
        echo "
    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <!-- Small boxes (Stat box) -->
        <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
              <div class=\"card-header text-light\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">Table Siswa</h3>
              </div>
              <!-- /.card-header -->
                <div class=\"card-body\">
                    ";
        // line 39
        if ((is_admin() == true)) {
            // line 40
            echo "                    <div class=\"col-6\">
                        <div class=\"btn-group flex-wrap\">
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, site_url("siswa/add/1"), "html", null, true);
            echo "\" class=\"btn btn-info\">Tambah Siswa</a>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, site_url(("siswa/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
            echo "\" class=\"btn btn-success\">Import Excel</a>
                        </div>
                    </div><br/>
                    ";
        }
        // line 47
        echo "                    
                    ";
        // line 48
        if ((is_admin() == true)) {
            echo "   
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                        <thead>
                        <tr>
                            <th colspan=\"7\">
                                <div class=\"btn-group flex-wrap\">
                                    ";
            // line 55
            echo anchor("siswa/index/1", "Aktif", array("class" => "btn btn-default"));
            echo "
                                    ";
            // line 56
            echo anchor("siswa/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"label label-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => "btn btn-default"));
            echo "
                                    ";
            // line 57
            echo anchor("siswa/index/2", "Blocking", array("class" => "btn btn-default"));
            echo "
                                    ";
            // line 58
            echo anchor("siswa/index/3", "Alumni", array("class" => "btn btn-default"));
            echo "
                                    ";
            // line 59
            echo anchor("siswa/filter", "Filter", array("class" => "btn btn-info"));
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
        echo form_open("siswa/filter");
        echo "
                            <table class=\"table table-striped\" id=\"form-search\">
                                <tr>
                                    <th width=\"20%\">NIS</th>
                                    <td>
                                        
                                        <input type=\"text\" class=\"form-control\" name=\"nis\" style=\"margin-bottom:0px;\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, set_value("nis", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nis", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nis")) : (""))), "html", null, true);
        echo "\">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" name=\"nama\" style=\"margin-bottom:0px;\" value=\"";
        // line 84
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
        // line 92
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Laki-laki
                                        </label>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
        // line 95
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Perempuan
                                        </label>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tahun Masuk</th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" name=\"tahun_masuk\" maxlength=\"4\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, set_value("tahun_masuk", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tahun_masuk", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tahun_masuk")) : (""))), "html", null, true);
        echo "\">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" name=\"tempat_lahir\" style=\"margin-bottom:0px;\" value=\"";
        // line 109
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
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 120
            echo "                                                        <option value=\"";
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
        // line 122
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-3 mb-2\">
                                                <select class=\"form-control\" name=\"bln_lahir\">
                                                    <option value=\"\">Bulan</option>
                                                    ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 128
            echo "                                                        <option value=\"";
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
        // line 130
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-3 mb-2\">
                                                <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 133
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
        // line 141
        echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
        echo "\">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>
                                        <div class=\"form-group\">
                                            <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"agama[]\" value=\"ISLAM\" ";
        // line 148
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "ISLAM", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("ISLAM", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">ISLAM</label>
                                            <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"agama[]\" value=\"KRISTEN\" ";
        // line 149
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "KRISTEN", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("KRISTEN", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">KRISTEN</label>
                                            <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"agama[]\" value=\"KATOLIK\" ";
        // line 150
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "KATOLIK", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("KATOLIK", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">KATOLIK</label>
                                            <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"agama[]\" value=\"HINDU\" ";
        // line 151
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "HINDU", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("HINDU", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">HINDU</label>
                                            <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"agama[]\" value=\"BUDHA\" ";
        // line 152
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "BUDHA", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("BUDHA", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">BUDHA</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>
                                        <div class=\"form-group\">
                                            ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas_all"]) ? $context["kelas_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 161
            echo "                                                <label class=\"form-check-label ml-4 mr-5\"><input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id", array(), "any", true, true) && twig_in_filter($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</label>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <div class=\"from-group\">
                                            ";
        // line 170
        if (is_admin()) {
            // line 171
            echo "                                            <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"0\" ";
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "0", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(0, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Pending</label>
                                            <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"1\" ";
            // line 172
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Aktif</label>
                                            <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"2\" ";
            // line 173
            echo twig_escape_filter($this->env, set_checkbox("status_id[]", "2", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(2, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
            echo "> Blocking</label>
                                            ";
        }
        // line 174
        echo "   
                                            <label class=\"form-check-label mr-5\"><input type=\"checkbox\" name=\"status_id[]\" value=\"3\" ";
        // line 175
        echo twig_escape_filter($this->env, set_checkbox("status_id[]", "3", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(3, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
        echo "> Alumni</label>
                                        </div>
                                    </td>
                                </tr>
                                ";
        // line 179
        if (is_admin()) {
            // line 180
            echo "                                <tr>
                                    <th>Username</th>
                                    <td>
                                        <input type=\"text\" name=\"username\" class=\"form-control\" style=\"margin-bottom:0px;\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, set_value("username", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username")) : (""))), "html", null, true);
            echo "\">
                                    </td>
                                </tr>
                                ";
        }
        // line 187
        echo "                                <tr>
                                    <td></td>
                                    <td>
                                        <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                                    </td>
                                </tr>
                            </table>
                            ";
        // line 194
        echo form_close();
        echo "
                        </div>
                    </div>
                    </blockquote>
                    
                    ";
        // line 199
        echo form_open("siswa/filter_action");
        echo "
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                ";
        // line 205
        if ((is_admin() && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 206
            echo "                                    <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_siswa_ch_uch_checkbox(this)\">
                                ";
        }
        // line 208
        echo "                            ID</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswas"]) ? $context["siswas"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 219
            echo "                            <tr>
                                <td>
                                ";
            // line 221
            if (is_admin()) {
                // line 222
                echo "                                    <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\" ";
                echo ((($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 3)) ? ("disabled") : (""));
                echo ">
                                ";
            }
            // line 224
            echo "                                    <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</b>
                                </td>
                                <td>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nis"), "html", null, true);
            echo "</td>
                                <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "</td>
                                <td>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
                                <td>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin"), "html", null, true);
            echo "</td>
                                <td>";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "agama"), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"btn-group flex-wrap\">
                                    ";
            // line 233
            if (is_admin()) {
                // line 234
                echo "                                        <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search-plus mr-1\"></i> Detail</a>
                                        <a class=\"btn btn-default dropdown-toggle\" href=\"#\" id=\"act-";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit</a>
                                        <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\">
                                            ";
                // line 237
                echo anchor(((("siswa/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4 dropdown-item", "title" => "Edit Profil Siswa"));
                echo "
                                            ";
                // line 238
                echo anchor(((("siswa/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5 dropdown-item", "title" => "Edit Foto Siswa"));
                echo "
                                            ";
                // line 239
                if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
                    // line 240
                    echo "                                                ";
                    echo anchor(((("siswa/moved_class/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Kelas Aktif", array("class" => "siswa-iframe dropdown-item", "title" => "Edit Kelas Aktif"));
                    echo "
                                            ";
                }
                // line 242
                echo "                                                ";
                echo anchor(((("siswa/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2 dropdown-item", "title" => "Edit Username Siswa"));
                echo "
                                                ";
                // line 243
                echo anchor(((("siswa/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3 dropdown-item", "title" => "Edit Password Siswa"));
                echo "
                                        </div>
                                    ";
            } else {
                // line 246
                echo "                                        <a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("siswa/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"fas fa-search\"></i> Detail</a>
                                    ";
            }
            // line 248
            echo "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                </div>
              <!-- /.card-body -->
            
            <div class=\"card-footer\">
            ";
        // line 270
        if ((is_admin() && (!twig_test_empty((isset($context["siswas"]) ? $context["siswas"] : null))))) {
            // line 271
            echo "                <div class=\"form-group d-flex\">
                    <div class=\"col-md-3\">
                        <select name=\"status_id\" class=\"form-control\">
                            <option>--Update Status--</option>
                            <option value=\"1\">Aktif</option>
                            <option value=\"2\">Blocking</option>
                            <option value=\"3\">Alumni</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select class=\"form-control\" name=\"kelas_id\">
                            <option value=\"\">--Pindah Kelas--</option>
                            ";
            // line 283
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 284
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"submit\" class=\"btn btn-default\">Update</button>
                    </div>
                </div>
                ";
        }
        // line 293
        echo "                ";
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
                ";
        // line 295
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
";
    }

    public function getTemplateName()
    {
        return "filter-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 295,  580 => 293,  571 => 286,  560 => 284,  556 => 283,  542 => 271,  540 => 270,  520 => 252,  511 => 248,  505 => 246,  499 => 243,  494 => 242,  488 => 240,  486 => 239,  482 => 238,  478 => 237,  474 => 236,  470 => 235,  465 => 234,  463 => 233,  457 => 230,  453 => 229,  449 => 228,  445 => 227,  441 => 226,  435 => 224,  427 => 222,  425 => 221,  421 => 219,  417 => 218,  405 => 208,  401 => 206,  399 => 205,  390 => 199,  382 => 194,  373 => 187,  366 => 183,  361 => 180,  359 => 179,  352 => 175,  349 => 174,  344 => 173,  340 => 172,  335 => 171,  333 => 170,  324 => 163,  311 => 161,  307 => 160,  296 => 152,  292 => 151,  288 => 150,  284 => 149,  280 => 148,  270 => 141,  259 => 133,  254 => 130,  241 => 128,  237 => 127,  230 => 122,  217 => 120,  213 => 119,  200 => 109,  191 => 103,  180 => 95,  174 => 92,  163 => 84,  154 => 78,  145 => 72,  138 => 67,  127 => 59,  123 => 58,  119 => 57,  115 => 56,  111 => 55,  101 => 48,  98 => 47,  91 => 43,  87 => 42,  83 => 40,  81 => 39,  65 => 26,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
