<?php

/* tulis-pesan.html */
class __TwigTemplate_35e5a628a8ea04528ec1abe306796622093d88686157145f6e5721b5e7920beb extends Twig_Template
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
        echo "Tulis pesan - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<!-- Content Header (Page header) -->
<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Tulis Surat</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\">Pesan</a></li>
            <li class=\"breadcrumb-item active\">Tulis Surat</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

";
        // line 26
        echo get_flashdata("msg");
        echo "

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <div class=\"row d-flex justify-content-center\">
        <!-- /.col -->
        <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card card-primary card-outline\">
            <div class=\"card-header text-light\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
            <h3 class=\"card-title\">Tulis Surat Baru</h3>
            </div>
            <!-- /.card-header -->
            ";
        // line 39
        echo form_open_multipart(("message/create/" . (((!twig_test_empty((isset($context["login"]) ? $context["login"] : null)))) ? ($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "id")) : (""))));
        echo "
            <div class=\"card-body\">
                <div class=\"form-group\">
                    ";
        // line 42
        if (twig_test_empty((isset($context["login"]) ? $context["login"] : null))) {
            // line 43
            echo "                        <input type=\"text\" class=\"form-control tt-query\" name=\"penerima\" id=\"psn-penerima\" placeholder=\"Nama atau email\" autocomplete=\"off\" spellcheck=\"false\" value=\"";
            echo set_value("penerima");
            echo "\">
                        <br>";
            // line 44
            echo form_error("penerima");
            echo "
                    ";
        } else {
            // line 46
            echo "                        <div style=\"margin-top: 5px;\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " </b> [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]</div>
                        <input type=\"hidden\" name=\"penerima\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]\">
                    ";
        }
        // line 49
        echo "                </div>
                <div class=\"form-group\">
                    <textarea name=\"content\" id=\"content\" class=\"form-control\" style=\"height: 300px\"></textarea><br/>
                    ";
        // line 52
        echo form_error("content");
        echo "
                </div>
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer\">
            <div class=\"float-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-envelope\"></i> Kirim</button>
            </div>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\" class=\"btn btn-default\"><i class=\"fas fa-times\"></i> Kembali</a>
            </div>
            <!-- /.card-footer -->
            ";
        // line 63
        echo form_close();
        echo "
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 77
        echo anchor("message", "Pesan");
        echo " / Tulis</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 80
        echo get_flashdata("msg");
        echo "

        ";
        // line 82
        echo form_open_multipart(("message/create/" . (((!twig_test_empty((isset($context["login"]) ? $context["login"] : null)))) ? ($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "id")) : (""))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Penerima <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    ";
        // line 86
        if (twig_test_empty((isset($context["login"]) ? $context["login"] : null))) {
            // line 87
            echo "                        <input type=\"text\" name=\"penerima\" id=\"msg-penerima\" data-role=\"tagsinput\" placeholder=\"Nama atau email\" value=\"";
            echo set_value("penerima");
            echo "\">
                        <br>";
            // line 88
            echo form_error("penerima");
            echo "
                    ";
        } else {
            // line 90
            echo "                        <div style=\"margin-top: 5px;\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " </b> [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]</div>
                        <input type=\"hidden\" name=\"penerima\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "profil"), "nama"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username"), "html", null, true);
            echo "]\">
                    ";
        }
        // line 93
        echo "                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Isi Pesan <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"content\" id=\"content\" class=\"texteditor\">";
        // line 98
        echo set_value("content");
        echo "</textarea>
                    ";
        // line 99
        echo form_error("content");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Kirim</button>
                    <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
                </div>
            </div>
        ";
        // line 108
        echo form_close();
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "tulis-pesan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 108,  216 => 105,  207 => 99,  203 => 98,  196 => 93,  189 => 91,  182 => 90,  177 => 88,  172 => 87,  170 => 86,  163 => 82,  158 => 80,  152 => 77,  135 => 63,  129 => 60,  118 => 52,  113 => 49,  106 => 47,  99 => 46,  94 => 44,  89 => 43,  87 => 42,  81 => 39,  65 => 26,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
