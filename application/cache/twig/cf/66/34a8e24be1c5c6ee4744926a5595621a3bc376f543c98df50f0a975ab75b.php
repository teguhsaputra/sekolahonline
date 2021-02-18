<?php

/* list-mapel-kelas.html */
class __TwigTemplate_cf6634a8e24be1c5c6ee4744926a5595621a3bc376f543c98df50f0a975ab75b extends Twig_Template
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
        echo "Matapelajaran Kelas - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Matapelajaran Kelas</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Matapelajaran Kelas</li>
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
        // line 29
        echo get_flashdata("mapel");
        echo "
            ";
        // line 30
        if (is_demo_app()) {
            // line 31
            echo "                ";
            echo get_alert("warning", get_demo_msg());
            echo "
            ";
        }
        // line 33
        echo "                <div class=\"card\">
                    <div class=\"card-header as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\">
                        <span class=\"btn btn-default\"><b><i class=\"fas fa-search\"></i> Filter Kelas</b></span>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"form-filter\" class=\"collapse\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <form class=\"form-horizontal row-fluid\" method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas/list"), "html", null, true);
        echo "\">
                                        <table class=\"table table-bordered\">
                                            <tr>
                                                <td class=\"pull-right\">Parent Kelas</td>
                                                <td>
                                                    <select name=\"parent_kelas\" class=\"form-control\" id=\"kelas-mapel-kelas-parent-kelas\">
                                                        <option>--pilih--</option>
                                                        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parent_kelas"]) ? $context["parent_kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pk"]) {
            // line 49
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "parent_id") == $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "nama"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"pull-right\">Sub Kelas</td>
                                                <td>
                                                    <select name=\"sub_kelas\" class=\"form-control\" id=\"kelas-mapel-kelas-sub-kelas\">
                                                        <option>--pilih--</option>
                                                        ";
        // line 59
        if ((!twig_test_empty((isset($context["sub_kelas"]) ? $context["sub_kelas"] : null)))) {
            // line 60
            echo "                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sub_kelas"]) ? $context["sub_kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sk"]) {
                // line 61
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "id"), "html", null, true);
                echo "\" ";
                echo ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "sub_id") == $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "id"))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "nama"), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                                        ";
        }
        // line 64
        echo "                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button class=\"btn btn-small btn-primary\" type=\"submit\">Submit</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class=\"col-sm-6 pt-1\">
                                    <kbd>Atur matapelajaran yang ada pada masing - masing kelas</kbd>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 82
        echo (isset($context["mapel_kelas_hirarki"]) ? $context["mapel_kelas_hirarki"] : null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>Matapelajaran Kelas</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 96
        echo get_flashdata("mapel");
        echo "

        ";
        // line 98
        if (is_demo_app()) {
            // line 99
            echo "            ";
            echo get_alert("warning", get_demo_msg());
            echo "
        ";
        }
        // line 101
        echo "
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\">
                        <b><i class=\"icon-search\"></i> Filter Kelas</b>
                    </div>
                    <div id=\"form-filter\" class=\"collapse\">
                        <div class=\"panel-body\">
                            <form class=\"form-horizontal row-fluid\" method=\"post\" action=\"";
        // line 110
        echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas/list"), "html", null, true);
        echo "\">
                                <table class=\"table table-form table-condensed\">
                                    <tr>
                                        <td class=\"pull-right\">Parent Kelas</td>
                                        <td>
                                            <select name=\"parent_kelas\" id=\"kelas-mapel-kelas-parent-kelas\">
                                                <option>--pilih--</option>
                                                ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parent_kelas"]) ? $context["parent_kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pk"]) {
            // line 118
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "parent_id") == $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "nama"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"pull-right\">Sub Kelas</td>
                                        <td>
                                            <select name=\"sub_kelas\" id=\"kelas-mapel-kelas-sub-kelas\">
                                                <option>--pilih--</option>
                                                ";
        // line 128
        if ((!twig_test_empty((isset($context["sub_kelas"]) ? $context["sub_kelas"] : null)))) {
            // line 129
            echo "                                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sub_kelas"]) ? $context["sub_kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sk"]) {
                // line 130
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "id"), "html", null, true);
                echo "\" ";
                echo ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "sub_id") == $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "id"))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sk"]) ? $context["sk"] : null), "nama"), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                                                ";
        }
        // line 133
        echo "                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button class=\"btn btn-small btn-primary\" type=\"submit\">Submit</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"span6\">
                Atur matapelajaran yang ada pada masing - masing kelas
            </div>
        </div>

        ";
        // line 153
        echo (isset($context["mapel_kelas_hirarki"]) ? $context["mapel_kelas_hirarki"] : null);
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "list-mapel-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 153,  271 => 133,  268 => 132,  255 => 130,  250 => 129,  248 => 128,  238 => 120,  225 => 118,  221 => 117,  211 => 110,  200 => 101,  194 => 99,  192 => 98,  187 => 96,  170 => 82,  150 => 64,  147 => 63,  134 => 61,  129 => 60,  127 => 59,  117 => 51,  104 => 49,  100 => 48,  90 => 41,  80 => 33,  74 => 31,  72 => 30,  68 => 29,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
