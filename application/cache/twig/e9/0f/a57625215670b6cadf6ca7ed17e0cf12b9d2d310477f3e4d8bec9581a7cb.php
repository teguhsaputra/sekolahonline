<?php

/* layout-public.html */
class __TwigTemplate_e90fa57625215670b6cadf6ca7ed17e0cf12b9d2d310477f3e4d8bec9581a7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "</head>

<body class=\"hold-transition login-page\">
    
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
<!-- -->
    
<div class=\"footer\" style=\"z-index: 900;\">
    <div class=\"container\">
        <center class=\"text-light\">
            <b class=\"copyright\">";
        // line 18
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.<br>
            ";
        // line 19
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in ";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
        </center>
    </div>
</div>

    ";
        // line 24
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 25
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 26
        echo "
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-public.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  89 => 11,  84 => 6,  78 => 4,  72 => 26,  69 => 25,  67 => 24,  57 => 19,  53 => 18,  45 => 12,  43 => 11,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }
}
