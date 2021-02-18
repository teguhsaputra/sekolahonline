<?php

/* layout-footer.html */
class __TwigTemplate_7a25c528a66c4a92a5303c593807b878208ca3ddfc874f844ed7273987a3481b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
var site_url = \"";
        // line 2
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
var base_url = \"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
</script>

<!---
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script data-pace-options='{ \"ajax\": false }' src=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 12
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
<!--<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>-->


<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script data-pace-options='{ \"ajax\": false }' src=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap4/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url("assets/comp/bs-custom-file-input/bs-custom-file-input.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url("assets/comp/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        // line 25
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$(\".clickable-row\").click(function() {
    
        thisdata = \$(this).attr('data-href');
        console.log(thisdata);
    
        window.location.href = thisdata;
    });
    
    \$(\"#popover\").popover();

    // popover demo
    \$(\"a[data-toggle=popover]\")
      .popover()
      .click(function(e) {
        e.preventDefault()
    });
    
    // call bootstrap toogle in ajax complete
    //\$(document).ajaxComplete(function() {
       // \$('input[type=checkbox][data-toggle^=toggle]').bootstrapToggle();
   // });
    
    \$('[data-toggle=\"tooltip\"]').tooltip({html:true});
    
    \$('.chatContainerScroll').overlayScrollbars({
        className: \"os-theme-dark\",
    });

    \$.widget.bridge('uibutton', \$.ui.button)   
    
});
</script>
";
    }

    public function getTemplateName()
    {
        return "layout-footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  26 => 3,  22 => 2,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
