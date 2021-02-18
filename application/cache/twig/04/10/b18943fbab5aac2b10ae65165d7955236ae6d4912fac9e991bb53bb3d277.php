<?php

/* edit-kelas.html */
class __TwigTemplate_0410b18943fbab5aac2b10ae65165d7955236ae6d4912fac9e991bb53bb3d277 extends Twig_Template
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
        echo "Manajemen Kelas - ";
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
        <h1>Manajemen Kelas</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
        echo "\">List kelas</a></li>
            <li class=\"breadcrumb-item active\">Manajemen Kelas</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"container\">
    <div class=\"row-fluid\">
        ";
        // line 27
        echo get_flashdata("kelas");
        echo "
    
        ";
        // line 29
        if (is_demo_app()) {
            // line 30
            echo "            ";
            echo get_alert("warning", get_demo_msg());
            echo "
        ";
        }
        // line 32
        echo "    
        <div class=\"card card-default\">
            <div class=\"card-header\">
                <h4>Edit Kelas</h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 38
        echo form_open(("kelas/edit/" . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
                    <div class=\"form-group\">
                        <label class=\"form-label\">Nama Kelas <span class=\"text-error\">*</span></label>
                        <div class=\"form-input\">
                            <input type=\"text\" name=\"nama\" class=\"col-5 form-control\" placeholder=\"Nama Kelas\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("nama", $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "nama")), "html", null, true);
        echo "\">
                            ";
        // line 43
        echo form_error("nama");
        echo "
                        </div>
                    </div>
                    ";
        // line 46
        if ((!(null === $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "parent_id")))) {
            // line 47
            echo "                    <div class=\"form-group\">
                        <label class=\"form-label\">Status</label>
                        <div class=\"form-input\">
                            <label class=\"form-check-label\">
                                <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"status\" ";
            // line 51
            echo twig_escape_filter($this->env, set_checkbox("status", "1", ((($this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "aktif") == 1)) ? (true) : (false))), "html", null, true);
            echo ">
                                Aktif
                            </label>
                        </div>
                    </div>
                    ";
        }
        // line 57
        echo "                    <div class=\"form-group\">
                        <div class=\"btn-group\">
                            ";
        // line 59
        if ((is_demo_app() == false)) {
            // line 60
            echo "                            <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            ";
        }
        // line 62
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
        echo "\" class=\"btn\">Batal</a>
                        </div>
                    </div>
                ";
        // line 65
        echo form_close();
        echo "
            </div>
            
            <div class=\"card-footer\">
                <p><i class=\"fas fa-info-circle\"></i> <b>NB:</b> Kelas tidak dapat dihapus namun dapat diubah menjadi tidak aktif.</p>
            </div>
        
        </div>
    
        <div class=\"card card-default\">
            <div class=\"card-body\">
                ";
        // line 76
        echo (isset($context["kelas_hirarki"]) ? $context["kelas_hirarki"] : null);
        echo "
            </div>
            <div class=\"card-footer\">
                ";
        // line 79
        if ((is_demo_app() == false)) {
            // line 80
            echo "                    <code id=\"response_update\"></code><br/>
                    <button class=\"btn btn-primary\" id=\"update-hirarki\">Update Hirarki</button>
                ";
        }
        // line 83
        echo "            </div>
        </div>
        
        
    </div>
</div>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>Manajemen Kelas</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 96
        echo get_flashdata("kelas");
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
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                Edit Kelas
            </div>
            <div class=\"panel-body\">
                ";
        // line 107
        echo form_open(("kelas/edit/" . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
                    <div class=\"control-group\">
                        <label class=\"control-label\">Nama Kelas <span class=\"text-error\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"nama\" class=\"span5\" placeholder=\"Nama Kelas\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, set_value("nama", $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "nama")), "html", null, true);
        echo "\">
                            ";
        // line 112
        echo form_error("nama");
        echo "
                        </div>
                    </div>
                    ";
        // line 115
        if ((!(null === $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "parent_id")))) {
            // line 116
            echo "                    <div class=\"control-group\">
                        <label class=\"control-label\">Status</label>
                        <div class=\"controls\">
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" value=\"1\" name=\"status\" ";
            // line 120
            echo twig_escape_filter($this->env, set_checkbox("status", "1", ((($this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "aktif") == 1)) ? (true) : (false))), "html", null, true);
            echo ">
                                Aktif
                            </label>
                        </div>
                    </div>
                    ";
        }
        // line 126
        echo "                    <div class=\"control-group\">
                        <div class=\"controls\">
                            ";
        // line 128
        if ((is_demo_app() == false)) {
            // line 129
            echo "                            <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            ";
        }
        // line 131
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
        echo "\" class=\"btn\">Batal</a>
                        </div>
                    </div>
                ";
        // line 134
        echo form_close();
        echo "
            </div>
        </div>

        <p><b>NB:</b> Kelas tidak dapat dihapus namun dapat diubah menjadi tidak aktif.</p>

        ";
        // line 140
        echo (isset($context["kelas_hirarki"]) ? $context["kelas_hirarki"] : null);
        echo "

        <br>
        <div id=\"response_update\"></div>
        <button class=\"btn btn-primary\" id=\"update-hirarki\">Update Hirarki</button>
    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "edit-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 140,  252 => 134,  245 => 131,  241 => 129,  239 => 128,  235 => 126,  226 => 120,  220 => 116,  218 => 115,  212 => 112,  208 => 111,  201 => 107,  193 => 101,  187 => 99,  185 => 98,  180 => 96,  165 => 83,  160 => 80,  158 => 79,  152 => 76,  138 => 65,  131 => 62,  127 => 60,  125 => 59,  121 => 57,  112 => 51,  106 => 47,  104 => 46,  98 => 43,  94 => 42,  87 => 38,  79 => 32,  73 => 30,  71 => 29,  66 => 27,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
