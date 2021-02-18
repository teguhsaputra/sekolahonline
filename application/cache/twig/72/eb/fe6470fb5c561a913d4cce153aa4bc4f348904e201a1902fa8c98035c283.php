<?php

/* list-kelas.html */
class __TwigTemplate_72ebfe6470fb5c561a913d4cce153aa4bc4f348904e201a1902fa8c98035c283 extends Twig_Template
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
        <h1>List Kelas</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Kelas</li>
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
                <h4>Tambah Kelas</h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 38
        echo form_open("kelas", array("class" => "form-horizontal row-fluid"));
        echo "
                    <div class=\"form-group\">
                        <label class=\"form-label\">Nama Kelas <span class=\"text-error\">*</span></label>
                        <div class=\"form-input d-flex\">
                            <input type=\"text\" name=\"nama\" class=\"col-5 form-control mr-2\" placeholder=\"Nama Kelas\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                            <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            ";
        // line 44
        echo form_error("nama");
        echo "
                        </div>
                    </div>
                ";
        // line 47
        echo form_close();
        echo "
            </div>
            
            <div class=\"card-footer\">
                <p><i class=\"fas fa-info-circle\"></i> <b>Note:</b> Kelas tidak dapat dihapus namun dapat diubah menjadi tidak aktif</p>
            </div>
        
        </div>
    
        <div class=\"card card-default\">
            <div class=\"card-body\">
                ";
        // line 58
        echo (isset($context["kelas_hirarki"]) ? $context["kelas_hirarki"] : null);
        echo "
            </div>
            <div class=\"card-footer\">
                ";
        // line 61
        if ((is_demo_app() == false)) {
            // line 62
            echo "                    <code id=\"response_update\"></code><br/>
                    <button class=\"btn btn-primary\" id=\"update-hirarki\">Update Hirarki</button>
                ";
        }
        // line 65
        echo "            </div>
        </div>
        
        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "list-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 65,  127 => 62,  125 => 61,  119 => 58,  105 => 47,  99 => 44,  94 => 42,  87 => 38,  79 => 32,  73 => 30,  71 => 29,  66 => 27,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
