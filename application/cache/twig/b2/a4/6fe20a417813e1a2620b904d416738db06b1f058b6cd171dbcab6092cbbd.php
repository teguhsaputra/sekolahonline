<?php

/* layout-register.html */
class __TwigTemplate_b2a46fe20a417813e1a2620b904d416738db06b1f058b6cd171dbcab6092cbbd extends Twig_Template
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
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "    </head>

    <body>

        <div id=\"body-content\">
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </div>

        ";
        // line 15
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 16
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 17
        echo "        
    </body>
</html>
";
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

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  73 => 12,  62 => 4,  52 => 16,  50 => 15,  46 => 13,  44 => 12,  37 => 7,  34 => 6,  28 => 4,  23 => 1,  1047 => 494,  1041 => 491,  1030 => 483,  1026 => 482,  1017 => 476,  1013 => 475,  1004 => 469,  1000 => 468,  991 => 462,  987 => 461,  978 => 455,  974 => 454,  971 => 453,  958 => 451,  954 => 450,  949 => 447,  936 => 445,  932 => 444,  921 => 436,  917 => 435,  908 => 429,  904 => 428,  900 => 427,  891 => 421,  887 => 420,  878 => 414,  874 => 413,  867 => 409,  862 => 408,  860 => 407,  857 => 406,  851 => 403,  840 => 395,  836 => 394,  827 => 388,  823 => 387,  814 => 381,  810 => 380,  801 => 374,  797 => 373,  788 => 367,  783 => 365,  779 => 364,  775 => 363,  771 => 362,  767 => 361,  756 => 353,  752 => 352,  749 => 351,  736 => 349,  732 => 348,  727 => 345,  714 => 343,  710 => 342,  699 => 334,  695 => 333,  686 => 327,  683 => 326,  670 => 324,  666 => 323,  655 => 315,  651 => 314,  642 => 308,  638 => 307,  634 => 306,  625 => 300,  621 => 299,  612 => 293,  608 => 292,  601 => 288,  596 => 287,  594 => 286,  589 => 283,  583 => 281,  581 => 280,  578 => 279,  572 => 277,  570 => 276,  566 => 274,  560 => 271,  556 => 269,  554 => 268,  549 => 266,  523 => 243,  509 => 232,  505 => 231,  498 => 227,  494 => 226,  487 => 222,  483 => 221,  476 => 217,  472 => 216,  464 => 211,  460 => 210,  457 => 209,  444 => 207,  440 => 206,  435 => 203,  422 => 201,  418 => 200,  408 => 193,  404 => 192,  397 => 188,  391 => 185,  386 => 183,  378 => 178,  374 => 177,  367 => 173,  363 => 172,  356 => 168,  340 => 155,  328 => 146,  324 => 145,  317 => 141,  313 => 140,  306 => 136,  302 => 135,  295 => 131,  291 => 130,  284 => 126,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  253 => 113,  249 => 112,  246 => 111,  233 => 109,  229 => 108,  224 => 105,  211 => 103,  207 => 102,  197 => 95,  193 => 94,  186 => 90,  183 => 89,  170 => 87,  166 => 86,  157 => 80,  153 => 79,  146 => 75,  140 => 72,  135 => 70,  127 => 65,  123 => 64,  116 => 60,  112 => 59,  105 => 55,  86 => 38,  79 => 34,  74 => 31,  72 => 30,  68 => 6,  55 => 17,  42 => 8,  39 => 7,  32 => 5,  29 => 3,);
    }
}
