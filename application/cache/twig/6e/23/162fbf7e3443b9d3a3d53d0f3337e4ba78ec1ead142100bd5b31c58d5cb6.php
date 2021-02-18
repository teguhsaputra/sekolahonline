<?php

/* tambah-mapel.html */
class __TwigTemplate_6e23162fbf7e3443b9d3a3d53d0f3337e4ba78ec1ead142100bd5b31c58d5cb6 extends Twig_Template
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
        echo "Manajemen Matapelajaran - ";
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
        <h1>Tambah Matapelajaran</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
        echo "\">Manajemen Matapelajaran</a></li>
            <li class=\"breadcrumb-item active\">Tambah Matapelajaran</li>
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
            echo "                ";
            echo get_alert("warning", get_demo_msg());
            echo "
            ";
        }
        // line 34
        echo "        
            ";
        // line 35
        echo form_open("mapel/add", array("class" => "form-horizontal row-fluid"));
        echo "
                <div class=\"form-group\">
                    <label class=\"form-label\">Nama <span class=\"text-error\">*</span></label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"nama\" class=\"col-8 form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                        <br>";
        // line 40
        echo form_error("nama");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Deskripsi</label>
                    <div class=\"form-input\">
                        <textarea name=\"info\" class=\"col-12 form-control\" rows=\"5\">";
        // line 46
        echo set_value("info");
        echo "</textarea>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"form-group\">
                    <div class=\"btn-group\">
                        ";
        // line 53
        if ((is_demo_app() == false)) {
            // line 54
            echo "                        <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                        ";
        }
        // line 56
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
                    </div>
                </div>
            ";
        // line 59
        echo form_close();
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-mapel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  120 => 56,  116 => 54,  114 => 53,  104 => 46,  95 => 40,  91 => 39,  84 => 35,  81 => 34,  75 => 32,  73 => 31,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
