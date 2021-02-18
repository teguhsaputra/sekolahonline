<?php

/* tambah-mapel-kelas.html */
class __TwigTemplate_d32da46c1fbf25e38c2c5554d64c3e67b8dcbd78f0003e2ad8b748a675298b08 extends Twig_Template
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
        echo "Matapelajaran Kelas - ";
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
        <h1>Atur Matapelajaran</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\">Matapelajaran Kelas</a></li>
            <li class=\"breadcrumb-item active\">Atur Matapelajaran</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-8 col-xs-12 p-3\">
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
                    <div class=\"col-6\">
                        Pilih Matapelajaran yang ingin dimasukkan pada <b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "nama", array(), "array"), "html", null, true);
        echo "</b><br/>
                        <b><a class=\"btn btn-default mt-2\" data-toggle=\"collapse\" data-target=\"#form-add-mapel\"><i class=\"fas fa-plus\"></i> Tambah Matapelajaran</a></b>
                    </div>
                    
                    <div id=\"form-add-mapel\" ";
        // line 40
        if (((isset($context["post_mapel"]) ? $context["post_mapel"] : null) == 0)) {
            echo " class=\"collapse\" ";
        }
        echo ">
                        ";
        // line 41
        if ((is_demo_app() == false)) {
            // line 42
            echo "                        ";
            echo form_open(((((("kelas/mapel_kelas/add/" . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "array")) . "/") . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid", "style" => "margin-top:20px;"));
            echo "
                        ";
        }
        // line 44
        echo "                            <input type=\"hidden\" name=\"add-mapel\" value=\"1\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"form-input\">
                                    <input type=\"text\" name=\"nama\" class=\"col-12 form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                    <br>";
        // line 49
        echo form_error("nama");
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-label\">Deskripsi</label>
                                <div class=\"form-input\">
                                    <textarea name=\"info\" class=\"col-12 form-control\" rows=\"5\">";
        // line 55
        echo set_value("info");
        echo "</textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"form-input\">
                                    ";
        // line 60
        if ((is_demo_app() == false)) {
            // line 61
            echo "                                    <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                                    ";
        }
        // line 63
        echo "                                </div>
                            </div>
                        ";
        // line 65
        if ((is_demo_app() == false)) {
            // line 66
            echo "                        ";
            echo form_close();
            echo "
                        ";
        }
        // line 68
        echo "                    </div>
                <br>
        
                ";
        // line 71
        if ((is_demo_app() == false)) {
            // line 72
            echo "                ";
            echo form_open(((((("kelas/mapel_kelas/add/" . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "array")) . "/") . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))));
            echo "
                ";
        }
        // line 74
        echo "                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <td>
                                <label><input type=\"checkbox\" class=\"checkAll\" style=\"margin-top:-3px;margin-right:5px;\"/> Pilih semua</label>
                            </td>
                        </tr>
                        ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapels"]) ? $context["mapels"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 82
            echo "                        ";
            $context["checked"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => null, 1 => $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array"), 2 => $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")));
            // line 83
            echo "                        <tr>
                            <td>
                                <label><input class=\"checkbox-mapel\" type=\"checkbox\" name=\"mapel[]\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" style=\"margin-top:-2px;margin-right:5px;\" ";
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") != 1)) ? ("disabled") : (""));
            echo " ";
            echo (((twig_test_empty((isset($context["checked"]) ? $context["checked"] : null)) || ($this->getAttribute((isset($context["checked"]) ? $context["checked"] : null), "aktif") == 0))) ? ("") : ("checked"));
            echo "> <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</b></label>
                                <small>";
            // line 86
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info"), "html", null, true));
            echo "</small>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                        <tr>
                            <td>
                                <label><input type=\"checkbox\" class=\"checkAll\" style=\"margin-top:-3px;margin-right:5px;\"/> Pilih semua</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                ";
        // line 98
        if ((is_demo_app() == false)) {
            // line 99
            echo "                <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                ";
        }
        // line 101
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
        
                ";
        // line 103
        if ((is_demo_app() == false)) {
            // line 104
            echo "                ";
            echo form_close();
            echo "
                ";
        }
        // line 106
        echo "            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "tambah-mapel-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 106,  228 => 104,  226 => 103,  220 => 101,  216 => 99,  214 => 98,  204 => 90,  194 => 86,  184 => 85,  180 => 83,  177 => 82,  173 => 81,  164 => 74,  158 => 72,  156 => 71,  151 => 68,  145 => 66,  143 => 65,  139 => 63,  135 => 61,  133 => 60,  125 => 55,  116 => 49,  112 => 48,  106 => 44,  100 => 42,  98 => 41,  92 => 40,  85 => 36,  81 => 34,  75 => 32,  73 => 31,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
