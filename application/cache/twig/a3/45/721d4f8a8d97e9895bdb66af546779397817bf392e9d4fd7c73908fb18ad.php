<?php

/* list-siswa.html */
class __TwigTemplate_a345721d4f8a8d97e9895bdb66af546779397817bf392e9d4fd7c73908fb18ad extends Twig_Template
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
        echo "Data Siswa - ";
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
            <h1 class=\"m-0 text-dark\">List Siswa</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
              <li class=\"breadcrumb-item active\">List Siswa</li>
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
        <div class=\"row\">
        <div class=\"col-12\">
            ";
        // line 33
        echo get_flashdata("siswa");
        echo "
          <div class=\"card\">
              <!-- /.card-header -->
              <div class=\"card-body\">
                <div class=\"col-6\">
                    <div class=\"btn-group flex-wrap\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, site_url(("siswa/add/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn btn-info\">Tambah Siswa</a>
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, site_url("siswa/import_siswa"), "html", null, true);
        echo "\" class=\"btn btn-success\">Import Excel</a>
                    </div>
                </div><br/>
                
                <div class=\"table-responsive\">
                    <table id=\"TablePengumuman\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th colspan=\"7\">
                            <div class=\"btn-group flex-wrap\">
                                ";
        // line 50
        echo anchor("siswa/index/1", "Aktif", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 1)) ? ("btn btn-info") : ("btn btn-default"))));
        echo "
                                ";
        // line 51
        echo anchor("siswa/index/0", ("Pending " . ((((isset($context["count_pending"]) ? $context["count_pending"] : null) > 0)) ? ((("<span class=\"badge badge-warning\">" . (isset($context["count_pending"]) ? $context["count_pending"] : null)) . "</span>")) : (""))), array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) ? ("btn btn-info") : ("btn btn-default"))));
        echo "
                                ";
        // line 52
        echo anchor("siswa/index/2", "Blocking", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 2)) ? ("btn btn-info") : ("btn btn-default"))));
        echo "
                                ";
        // line 53
        echo anchor("siswa/index/3", "Alumni", array("class" => ((((isset($context["status_id"]) ? $context["status_id"] : null) == 3)) ? ("btn btn-info") : ("btn btn-default"))));
        echo "
                                ";
        // line 54
        echo anchor("siswa/filter", "Filter", array("class" => "btn btn-default"));
        echo "
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            ";
        // line 60
        if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
            // line 61
            echo "                                <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"filter_siswa_ch_uch_checkbox(this)\">
                            ";
        }
        // line 63
        echo "                        ID</th>
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
        // line 73
        echo form_open(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)));
        echo "
                        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswas"]) ? $context["siswas"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 75
            echo "                        <tr>
                            <td>
                            ";
            // line 77
            if ((((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2))) {
                // line 78
                echo "                                <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
                echo "\" style=\"margin-top:-2px;\">
                            ";
            }
            // line 80
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nis"), "html", null, true);
            echo "</td>
                            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "</td>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin"), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "agama"), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"btn-group flex-wrap\">
                                    <a class=\"btn btn-info\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"fas fa-search-plus mr-1\"></i> Detail</a>
                                    <a class=\"btn btn-default dropdown-toggle\" href=\"#\" id=\"act-";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit</a>
                                    <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "\">
                                        ";
            // line 91
            echo anchor(((("siswa/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4 dropdown-item", "title" => "Edit Profil Siswa"));
            echo "
                                        ";
            // line 92
            echo anchor(((("siswa/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5 dropdown-item", "title" => "Edit Foto Siswa"));
            echo "
                                        ";
            // line 93
            if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
                // line 94
                echo "                                            ";
                echo anchor(((("siswa/moved_class/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Kelas Aktif", array("class" => "siswa-iframe dropdown-item", "title" => "Edit Kelas Aktif"));
                echo "
                                        ";
            }
            // line 96
            echo "                                            ";
            echo anchor(((("siswa/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2 dropdown-item", "title" => "Edit Username Siswa"));
            echo "
                                            ";
            // line 97
            echo anchor(((("siswa/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3 dropdown-item", "title" => "Edit Password Siswa"));
            echo "
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </tbody>
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
        // line 120
        if (((!twig_test_empty((isset($context["siswas"]) ? $context["siswas"] : null))) && (((isset($context["status_id"]) ? $context["status_id"] : null) == 0) || ((isset($context["status_id"]) ? $context["status_id"] : null) == 2)))) {
            // line 121
            echo "                <div class=\"form-group d-flex\">
                    <div class=\"col-md-3\">
                        <select name=\"status_id\" class=\"form-control\">
                            <option>--Pilih Status--</option>
                            <option value=\"1\">Aktif</option>
                            ";
            // line 126
            if (((isset($context["status_id"]) ? $context["status_id"] : null) == 0)) {
                // line 127
                echo "                            <option value=\"2\">Blocking</option>
                            ";
            } elseif (((isset($context["status_id"]) ? $context["status_id"] : null) == 2)) {
                // line 129
                echo "                            <option value=\"3\">Alumni</option>
                            ";
            }
            // line 131
            echo "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"submit\" class=\"btn btn-default\">Update</button>
                    </div>
                </div>
                ";
        }
        // line 138
        echo "                ";
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
              </div>
                ";
        // line 140
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
        return "list-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 140,  280 => 138,  271 => 131,  267 => 129,  263 => 127,  261 => 126,  254 => 121,  252 => 120,  233 => 103,  221 => 97,  216 => 96,  210 => 94,  208 => 93,  204 => 92,  200 => 91,  196 => 90,  192 => 89,  188 => 88,  182 => 85,  178 => 84,  174 => 83,  170 => 82,  166 => 81,  161 => 80,  155 => 78,  153 => 77,  149 => 75,  145 => 74,  141 => 73,  129 => 63,  125 => 61,  123 => 60,  114 => 54,  110 => 53,  106 => 52,  102 => 51,  98 => 50,  85 => 40,  81 => 39,  72 => 33,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
