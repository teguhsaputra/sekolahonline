<?php

/* list-mapel.html */
class __TwigTemplate_bb6551513400fc954bbd9f4bdbe187cbbeb863fc55965217a298d6e1d19b731b extends Twig_Template
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
        echo "Manajemen Matapelajaran - ";
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
        <h1>Manajemen Matapelajaran</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Manajemen Matapelajaran</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">        
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, site_url("mapel/add"), "html", null, true);
        echo "\" class=\"btn btn-primary mt-3\">Tambah Mapel</a>
                    </div>
                    <div class=\"col-sm-9\">
                        Atur matapelajaran yang ada di sekolah<br>
                        <b>Note: </b> Matapelajaran tidak dapat dihapus namun dapat di ubah menjadi tidak aktif
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                ";
        // line 40
        echo get_flashdata("mapel");
        echo "
        
                ";
        // line 42
        if (is_demo_app()) {
            // line 43
            echo "                    ";
            echo get_alert("warning", get_demo_msg());
            echo "
                ";
        }
        // line 45
        echo "                
                <br>
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th width=\"5%\">No</th>
                            <th>Matapelajaran</th>
                            <th width=\"5%\">Aktif</th>
                            <th width=\"5%\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapels"]) ? $context["mapels"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 58
            echo "                        <tr>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : null), "html", null, true);
            echo ".</td>
                            <td>
                                ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "
                                <br><small>";
            // line 62
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "info"), "html", null, true));
            echo "</small>
                            </td>
                            <td>
                                ";
            // line 65
            if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "aktif") == 1)) {
                // line 66
                echo "                                <i class=\"fas fa-check-circle text-success\" style=\"font-size:30px;\"></i>
                                ";
            } else {
                // line 68
                echo "                                <i class=\"fas fa-times-circle text-danger\" style=\"font-size:30px;\"></i>
                                ";
            }
            // line 70
            echo "                            </td>
                            <td>
                                <a class=\"btn btn-default\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, site_url(((("mapel/edit/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Edit</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </tbody>
                </table>
        
                <br>
                ";
        // line 80
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-mapel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 80,  155 => 76,  145 => 72,  141 => 70,  137 => 68,  133 => 66,  131 => 65,  125 => 62,  121 => 61,  116 => 59,  113 => 58,  109 => 57,  95 => 45,  89 => 43,  87 => 42,  82 => 40,  70 => 31,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
