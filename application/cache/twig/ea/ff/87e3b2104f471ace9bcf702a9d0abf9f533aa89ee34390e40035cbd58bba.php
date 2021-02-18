<?php

/* edit-mapel.html */
class __TwigTemplate_eaff87e3b2104f471ace9bcf702a9d0abf9f533aa89ee34390e40035cbd58bba extends Twig_Template
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
        <h1>Edit Matapelajaran</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
        echo "\">Manajemen Matapelajaran</a></li>
            <li class=\"breadcrumb-item active\">Edit Matapelajaran</li>
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
                ";
        // line 35
        echo form_open(((("mapel/edit/" . $this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "id")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid"));
        echo "
                    <div class=\"form-group\">
                        <label class=\"form-label\">Nama <span class=\"text-error\">*</span></label>
                        <div class=\"form-input\">
                            <input type=\"text\" name=\"nama\" class=\"col-8 form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, set_value("nama", $this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "nama")), "html", null, true);
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
        echo set_value("info", $this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "info"));
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label>Status</label>
                        <label class=\"form-check-label ml-5\">
                            <input  class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"status\" ";
        // line 52
        echo twig_escape_filter($this->env, set_checkbox("status", "1", ((($this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "aktif") == 1)) ? (true) : (false))), "html", null, true);
        echo ">
                            Aktif
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"btn-group\">
                            ";
        // line 58
        if ((is_demo_app() == false)) {
            // line 59
            echo "                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                            ";
        }
        // line 61
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
                        </div>
                    </div>
                ";
        // line 64
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
        return "edit-mapel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 64,  128 => 61,  124 => 59,  122 => 58,  113 => 52,  104 => 46,  95 => 40,  91 => 39,  84 => 35,  81 => 34,  75 => 32,  73 => 31,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
