<?php

/* list-email-template.html */
class __TwigTemplate_70efb794548bd1a6acb9b58332453353a7cbea333d382f2341e989269737b823 extends Twig_Template
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
        echo "Email Template - ";
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
        <h1>Email Template</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Email Template</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 29
        echo get_flashdata("mapel");
        echo "
        
                ";
        // line 31
        if (is_demo_app()) {
            // line 32
            echo "                    ";
            echo get_alert("warning", get_demo_msg());
            echo "
                ";
        }
        // line 34
        echo "        
                <table class=\"table table-striped datatable\">
                    <thead>
                        <tr>
                            <th>Nama template</th>
                            <th width=\"15%\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 44
            echo "                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "nama"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, site_url(("email/edit/" . $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </tbody>
                </table>
        
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "list-email-template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 51,  104 => 47,  99 => 45,  96 => 44,  92 => 43,  81 => 34,  75 => 32,  73 => 31,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
