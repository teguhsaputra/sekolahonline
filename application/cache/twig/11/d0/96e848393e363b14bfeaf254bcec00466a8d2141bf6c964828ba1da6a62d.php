<?php

/* list-komentar.html */
class __TwigTemplate_11d096e848393e363b14bfeaf254bcec00466a8d2141bf6c964828ba1da6a62d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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
        echo "Komentar Materi - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "<style type=\"text/css\">
    .komentar img {
        height: auto;
        max-width: 100%;
        width: auto;
    }
    table {
        table-layout: fixed;
    }
</style>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>List Komentar</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, site_url("materi/komentar"), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Komentar</li>
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
        // line 42
        echo get_flashdata("komentar");
        echo "
        <div class=\"card\">
            <!-- /.card-header -->
            <div class=\"card-body\">
            <div class=\"col-6\">
            ";
        // line 47
        if (is_admin()) {
            // line 48
            echo "                <div class=\"btn-group\">
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, site_url("materi/komentar"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Semua</a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, site_url("materi/komentar/laporan"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">Laporan ";
            echo twig_escape_filter($this->env, ((((isset($context["jml_laporan_baru"]) ? $context["jml_laporan_baru"] : null) > 0)) ? ((("(" . (isset($context["jml_laporan_baru"]) ? $context["jml_laporan_baru"] : null)) . ")")) : ("")), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 53
        echo "            </div><br/>
            <div class=\"table-responsive\">
                <table class=\"table table-striped datatable\">
                    <thead>
                        <tr>
                            <th width=\"5%\">ID</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["komentar"]) ? $context["komentar"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 64
            echo "                        <tr>
                            <td>
                                <b>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "</b>
                                ";
            // line 67
            if (is_admin()) {
                // line 68
                echo "                                <br>
                                <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, site_url(("materi/komentar/delete/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"))), "html", null, true);
                echo "\" onclick=\"return confirm('Anda yakin ingin menghapus komentar ini?')\"><i class=\"icon icon-trash\"></i></a>
                                ";
            }
            // line 71
            echo "                            </td>
                            <td>
                                <div class=\"row\">
                                    <div class=\"col-10\">
                                        <p><span class=\"badge badge-primary\"><a class=\"text-light\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_profil"), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "nama"), "html", null, true);
            echo "</b></a></span> <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "tgl_posting"), "d F Y"), "html", null, true);
            echo "</small> | <b><a href=\"";
            echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "materi"), "id"))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "materi"), "judul"), "html", null, true);
            echo "</a></b></p>
                                        <div class=\"bg-light p-3\">";
            // line 76
            echo $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "konten");
            echo "</div>
                                    </div>
                                    <div class=\"col-2\">
                                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_image"), "html", null, true);
            echo "\" style=\"height:25px;width:25px;\" class=\"img-circle img-polaroid float-right\">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
                </table>
            </div>
            </div>
            <!-- /.card-body -->
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
        <h3>Komentar Materi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 104
        echo get_flashdata("komentar");
        echo "

        ";
        // line 106
        if (is_admin()) {
            // line 107
            echo "        <div class=\"btn-group\">
            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, site_url("materi/komentar"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Semua</a>
            <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, site_url("materi/komentar/laporan"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">Laporan ";
            echo twig_escape_filter($this->env, ((((isset($context["jml_laporan_baru"]) ? $context["jml_laporan_baru"] : null) > 0)) ? ((("(" . (isset($context["jml_laporan_baru"]) ? $context["jml_laporan_baru"] : null)) . ")")) : ("")), "html", null, true);
            echo "</a>
        </div>
        <br><br>
        ";
        }
        // line 113
        echo "
        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th width=\"5%\">ID</th>
                    <th>Komentar</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["komentar"]) ? $context["komentar"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 123
            echo "                <tr>
                    <td>
                        <b>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "</b>
                        ";
            // line 126
            if (is_admin()) {
                // line 127
                echo "                        <br>
                        <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, site_url(("materi/komentar/delete/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"))), "html", null, true);
                echo "\" onclick=\"return confirm('Anda yakin ingin menghapus komentar ini?')\"><i class=\"icon icon-trash\"></i></a>
                        ";
            }
            // line 130
            echo "                    </td>
                    <td>
                        <div class=\"media\">
                            <div class=\"pull-right\">
                                <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_image"), "html", null, true);
            echo "\" style=\"height:25px;width:25px;\" class=\"img-circle img-polaroid\">
                            </div>
                            <div class=\"media-body\">
                                <p><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_profil"), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "nama"), "html", null, true);
            echo "</b></a>, <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "tgl_posting"), "d F Y"), "html", null, true);
            echo "</small> | <b><a href=\"";
            echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "materi"), "id"))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "materi"), "judul"), "html", null, true);
            echo "</a></b></p>
                                ";
            // line 138
            echo $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "konten");
            echo "
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </tbody>
        </table>

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "list-komentar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 144,  282 => 138,  270 => 137,  264 => 134,  258 => 130,  253 => 128,  250 => 127,  248 => 126,  244 => 125,  240 => 123,  236 => 122,  225 => 113,  216 => 109,  212 => 108,  209 => 107,  207 => 106,  202 => 104,  181 => 85,  169 => 79,  163 => 76,  151 => 75,  145 => 71,  140 => 69,  137 => 68,  135 => 67,  131 => 66,  127 => 64,  123 => 63,  111 => 53,  103 => 50,  99 => 49,  96 => 48,  94 => 47,  86 => 42,  70 => 29,  60 => 21,  57 => 20,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
