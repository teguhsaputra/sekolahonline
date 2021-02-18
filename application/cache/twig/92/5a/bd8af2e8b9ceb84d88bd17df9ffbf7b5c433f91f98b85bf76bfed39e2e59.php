<?php

/* edit-email-template.html */
class __TwigTemplate_925abd8af2e8b9ceb84d88bd17df9ffbf7b5c433f91f98b85bf76bfed39e2e59 extends Twig_Template
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
        echo "Edit Email Template - ";
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
        <h1>Edit Email Template</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("email"), "html", null, true);
        echo "\">Email Template</a></li>
            <li class=\"breadcrumb-item active\">Edit Email Template</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            ";
        // line 28
        echo form_open(("email/edit/" . $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body\">
                ";
        // line 30
        echo get_flashdata("email");
        echo "
        
                ";
        // line 32
        if (is_demo_app()) {
            // line 33
            echo "                    ";
            echo get_alert("warning", get_demo_msg());
            echo "
                ";
        }
        // line 35
        echo "        
                ";
        // line 36
        echo get_alert("success", "Ubah bentuk atau kata - kata template email selain {\$...}");
        echo "
                <div class=\"form-group\">
                    <label class=\"form-label\">ID</label>
                    <div class=\"form-input\">
                        <p style=\"margin-top:5px;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Nama</label>
                    <div class=\"form-input\">
                        <p style=\"margin-top:5px;\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "nama"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Subject</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"subject\" class=\"col-12 form-control\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, set_value("subject", $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "subject")), "html", null, true);
        echo "\">
                        <br>";
        // line 53
        echo form_error("subject");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Body</label>
                    <div class=\"form-input\">
                        <textarea name=\"body\" id=\"body\" class=\"texteditor\">";
        // line 59
        echo set_value("body", $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "body"));
        echo "</textarea>
                        ";
        // line 60
        echo form_error("body");
        echo "
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">  
                <div class=\"form-group\">
                    <div class=\"btn-group\">
                        ";
        // line 67
        if ((is_demo_app() == false)) {
            // line 68
            echo "                        <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        ";
        }
        // line 70
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, site_url("email"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                    </div>
                </div>
            </div>
            ";
        // line 74
        echo form_close();
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "edit-email-template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 74,  146 => 70,  142 => 68,  140 => 67,  130 => 60,  126 => 59,  117 => 53,  113 => 52,  104 => 46,  95 => 40,  88 => 36,  85 => 35,  79 => 33,  77 => 32,  72 => 30,  67 => 28,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
