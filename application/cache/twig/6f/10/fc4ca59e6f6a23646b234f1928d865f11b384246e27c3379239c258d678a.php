<?php

/* layout-ujian.html */
class __TwigTemplate_6f10fc4ca59e6f6a23646b234f1928d865f11b384246e27c3379239c258d678a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        ";
        // line 4
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 5
        echo "        <!--
        <link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap4/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/adminlte/css/adminlte.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        -->
        <link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/read.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/ujian.css\" rel=\"stylesheet\">
        <style type=\"text/css\">
        .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                box-shadow: 2px 2px 3px #999;
        }
                
        .my-float{
                margin-top:22px;
        }
        </style>
        
        ";
        // line 30
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "    </head>
    <body>

        ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "
        <br><br>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b class=\"copyright\">";
        // line 41
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.<br>
                    ";
        // line 42
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in ";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
                </center>
            </div>
        </div>

        ";
        // line 47
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 48
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 59
        echo "    </body>
</html>
";
    }

    // line 30
    public function block_css($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 48
    public function block_js($context, array $blocks = array())
    {
        // line 49
        echo "        <!--
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap4/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        -->
        <script type=\"text/javascript\">
        \$( \".ngitung\" ).click(function() {
                \$('#exampleModal').modal('hide');
        });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "layout-ujian.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  129 => 50,  126 => 49,  123 => 48,  118 => 34,  113 => 30,  107 => 59,  104 => 48,  92 => 42,  88 => 41,  80 => 35,  73 => 31,  71 => 30,  49 => 11,  45 => 10,  36 => 7,  27 => 4,  22 => 1,  514 => 238,  510 => 237,  506 => 236,  502 => 235,  498 => 234,  495 => 233,  493 => 232,  487 => 228,  467 => 211,  456 => 202,  433 => 197,  427 => 194,  421 => 191,  416 => 190,  399 => 189,  392 => 185,  384 => 180,  380 => 179,  377 => 178,  375 => 177,  371 => 175,  361 => 167,  342 => 165,  325 => 164,  305 => 147,  285 => 129,  265 => 122,  254 => 118,  237 => 116,  234 => 115,  229 => 114,  223 => 111,  217 => 108,  211 => 105,  206 => 104,  189 => 103,  182 => 99,  175 => 94,  173 => 93,  170 => 92,  163 => 88,  157 => 85,  146 => 77,  141 => 74,  139 => 73,  132 => 68,  109 => 48,  106 => 47,  102 => 47,  98 => 43,  95 => 42,  93 => 41,  85 => 35,  83 => 34,  78 => 34,  70 => 27,  62 => 22,  54 => 17,  43 => 8,  40 => 8,  32 => 6,  29 => 5,);
    }
}
