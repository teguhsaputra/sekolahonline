<?php

/* layout-header.html */
class __TwigTemplate_d8245c3c092e01e0ae9366d766a745f41900b15da9a60d78669b09fea9826e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\">    
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<!-- Tell the browser to be responsive to screen width -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
-->
<!--
<link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("assets/comp/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline-theme-chrome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("assets/comp/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 17
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
-->

<link type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap4/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!--<link type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap4/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
<link type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("assets/comp/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline-theme-chrome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url("assets/comp/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 29
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
";
    }

    public function getTemplateName()
    {
        return "layout-header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
