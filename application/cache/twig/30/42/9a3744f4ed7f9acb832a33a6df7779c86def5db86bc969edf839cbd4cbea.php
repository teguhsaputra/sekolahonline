<?php

/* list-pengumuman.html */
class __TwigTemplate_30429a3744f4ed7f9acb832a33a6df7779c86def5db86bc969edf839cbd4cbea extends Twig_Template
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
        echo "Pengumuman - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>List Pengumuman</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Pengumuman</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class=\"content\">
      <div class=\"container-fluid\">
        <!-- Small boxes (Stat box) -->
        <div class=\"row\">
        <div class=\"col-12\">
        ";
        // line 30
        echo get_flashdata("pengumuman");
        echo "
          <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Table Pengumuman</h3>
                <form class=\"form-inline ml-3 float-right\" method=\"get\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, site_url((("pengumuman/index/" . (isset($context["page_no"]) ? $context["page_no"] : null)) . "/")), "html", null, true);
        echo "\">
                    <div class=\"input-group input-group-sm\">
                        <input class=\"form-control form-control-navbar\" type=\"text\" name=\"q\" placeholder=\"Cari pengumuman ...\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\" aria-label=\"Search\">
                        <div class=\"input-group-append\">
                        <button class=\"btn btn-default\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        </div>
                    </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <div class=\"col-6\">
                ";
        // line 48
        if ((is_siswa() == false)) {
            // line 49
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, site_url("pengumuman/add"), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-pen\"></i> Buat Pengumuman</a>
                ";
        }
        // line 51
        echo "                  
                </div><br/>
                <div class=\"table-responsive\">
                    <table id=\"TablePengumuman\" class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Tanggal Tampil</th>
                        <th>Tanggal Tutup</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 66
            echo "                        <tr>
                            <td><b>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "</b></td>
                            <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, site_url(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"), "html", null, true);
            echo "</b></a></td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil")), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tutup")), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"btn-group flex-wrap\">
                                ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "allow_action"));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 74
                echo "                                    ";
                if (((isset($context["a"]) ? $context["a"] : null) == "detail")) {
                    // line 75
                    echo "                                    <a class=\"btn btn-info btn-small\" href=\"";
                    echo twig_escape_filter($this->env, site_url(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"Detail\"><i class=\"fas fa-eye mr-2\"></i>Lihat</a>
                                    ";
                }
                // line 77
                echo "    
                                    ";
                // line 78
                if (((isset($context["a"]) ? $context["a"] : null) == "edit")) {
                    // line 79
                    echo "                                    <a class=\"btn btn-warning btn-small\" href=\"";
                    echo twig_escape_filter($this->env, site_url(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fas fa-edit mr-2\"></i>Edit</a>
                                    ";
                }
                // line 81
                echo "    
                                    ";
                // line 82
                if (((isset($context["a"]) ? $context["a"] : null) == "delete")) {
                    // line 83
                    echo "                                    <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"btn btn-danger btn-small\" href=\"";
                    echo twig_escape_filter($this->env, site_url(("pengumuman/delete/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"Hapus\"><i class=\"fas fa-trash mr-2\"></i>Hapus</a>
                                    ";
                }
                // line 85
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Tampil</th>
                        <th>Tanggal Tutup</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->
              <div class=\"card-footer\">
                ";
        // line 105
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
        return "list-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 105,  197 => 90,  188 => 86,  182 => 85,  176 => 83,  174 => 82,  171 => 81,  165 => 79,  163 => 78,  160 => 77,  154 => 75,  151 => 74,  147 => 73,  141 => 70,  137 => 69,  131 => 68,  127 => 67,  124 => 66,  120 => 65,  104 => 51,  98 => 49,  96 => 48,  81 => 36,  76 => 34,  69 => 30,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
