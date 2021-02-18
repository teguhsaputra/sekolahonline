<?php

/* edit-pertanyaan.html */
class __TwigTemplate_9ed671d49f7a78df3c2ae25b319519e77a446f8d21fcf0672fd1a09ecb88bc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        echo get_flashdata("tugas");
        echo "
<section class=\"content\">    
    <div class=\"card card-info\">
        <div class=\"card-header\">
            <h3 class=\"card-title p-1\">
                <b>Edit Pertanyaan ke ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["no_pertanyaan"]) ? $context["no_pertanyaan"] : null), "html", null, true);
        echo "</b>
            </h3>
            <div class=\"btn-group float-right p-1\">
                <a class=\"btn btn-warning\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, site_url(("tugas/tambah_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\">Tambah Pertanyaan</a></li>
                ";
        // line 14
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
            // line 15
            echo "                <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/tambah_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null), "id"))), "html", null, true);
            echo "\">Tambah Pilihan</a>
                ";
        }
        // line 17
        echo "            </div>
        </div>
        <div class=\"card-body\">
            ";
        // line 20
        echo form_open(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null), "id")));
        echo "
            <table class=\"table\" style=\"margin-top:20px;\">
                <tbody>
                    <tr>
                        <td>
                            <textarea name=\"pertanyaan\" id=\"pertanyaan\" class=\"texteditor\">";
        // line 25
        echo set_value("pertanyaan", $this->getAttribute((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null), "pertanyaan"));
        echo "</textarea>
                            ";
        // line 26
        echo form_error("pertanyaan");
        echo "
                        </td>
                    <tr>
                    <tr>
                        <td colspan=\"2\">
                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            ";
        // line 36
        echo form_close();
        echo "
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "edit-pertanyaan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  77 => 26,  73 => 25,  65 => 20,  60 => 17,  54 => 15,  52 => 14,  48 => 13,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
