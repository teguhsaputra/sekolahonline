<?php

/* layout-print.html */
class __TwigTemplate_04dd718307fd81562cf3e305709903886f3ab80453041c47ec5e76bc7fc117c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "    <style type=\"text/css\">
       
    </style>
    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "</head>
<body>
    <div class=\"container bg-light p-3\">
        <div class=\"row\">
            <div class=\"col-12\">
                <table class=\"table mt-2\">
                    <tr>
                        <td><img class=\"img-lg pt-1\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\"></td>
                        <td>
                        <div class=\"mt-3\">Sekolah ";
        // line 19
        echo twig_escape_filter($this->env, get_pengaturan("nama-sekolah", "value"), "html", null, true);
        echo "</div>
                        <div>Alamat : ";
        // line 20
        echo twig_escape_filter($this->env, get_pengaturan("alamat", "value"), "html", null, true);
        echo ", <br/>Telepon : ";
        echo twig_escape_filter($this->env, get_pengaturan("telp", "value"), "html", null, true);
        echo "</div>
                        </td>
                    </tr>
                </table>
                <hr class=\"kop-print-hr\">
            </div>
        </div>
        <br>
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  86 => 9,  80 => 4,  73 => 29,  71 => 28,  58 => 20,  54 => 19,  49 => 17,  40 => 10,  38 => 9,  33 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
