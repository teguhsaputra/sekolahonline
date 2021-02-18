<?php

/* tambah-tugas.html */
class __TwigTemplate_cee8dc26773d88322744b3f33a579b8fd216c8e2d4a1b21a9e007fc65c444869 extends Twig_Template
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
        echo "Tambah Tugas ";
        echo twig_escape_filter($this->env, (isset($context["type_label"]) ? $context["type_label"] : null), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1 class=\"m-0 text-dark\">Platform Sekolah Online</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("tugas"), "html", null, true);
        echo "\">Tugas</a></li>
            <li class=\"breadcrumb-item active\">Tambah Tugas</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
    ";
        // line 27
        echo get_flashdata("tugas");
        echo "
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Tambah Tugas
                </h3>
            </div>
            <!-- /.card-header -->
            
            ";
        // line 36
        echo form_open_multipart(("tugas/add/" . (isset($context["type"]) ? $context["type"] : null)), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body pad\">
                <!--
                <div class=\"form-group\">
                    <label>Tanggal Ujian <span class=\"text-danger\">*</span></label>
                        <div class=\"input-group date\" id=\"tanggal_ujian\" data-target-input=\"nearest\">
                            <input type=\"text\" name=\"tanggal_ujian\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("tanggal_ujian"), "html", null, true);
        echo "\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_ujian\"/>
                        </div>
                        <code>";
        // line 44
        echo form_error("tanggal_ujian");
        echo "</code>
                    </div>  
                -->
                <div class=\"form-group\">
                    <label>Tanggal Ujian <span class=\"text-danger\">*</span></label>
                    <div class=\"input-group date\" id=\"tanggal_ujian\" data-target-input=\"nearest\">
                        <input type=\"text\" name=\"tanggal_ujian\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_ujian\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>Judul</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, set_value("judul"), "html", null, true);
        echo "\" />
                    </div>
                    <code>";
        // line 58
        echo form_error("judul");
        echo "</code>
                </div>
                <div class=\"form-group\">
                <label>Matapelajaran</label>
                    <div class=\"input-group\">
                        <select class=\"form-control\" name=\"mapel_id\">
                            <option value=\"\">--pilih--</option>
                            ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 66
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </select>
                    </div>
                    <code>";
        // line 70
        echo form_error("mapel_id");
        echo "</code>
                </div>
                <div class=\"form-group\">
                    <label>Kelas</label>
                    <div class=\"input-group\">
                        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 76
            echo "                            <label class=\"form-check-label ml-4 mr-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo "/> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </div>
                    <code>";
        // line 81
        echo form_error("kelas_id[]");
        echo "</code>
                </div>
                <div class=\"form-group\">
                    <label>Info</label>
                    <div class=\"input-group\">
                        <textarea name=\"info\" id=\"info\" class=\"texteditor\">";
        // line 86
        echo set_value("info");
        echo "</textarea>
                    </div>
                    <code>";
        // line 88
        echo form_error("info");
        echo "</code>
                </div>
                ";
        // line 90
        if (((isset($context["type"]) ? $context["type"] : null) != 1)) {
            // line 91
            echo "                <div class=\"form-group\">
                    <label>Durasi</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"durasi\" class=\"form-control\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, set_value("durasi"), "html", null, true);
            echo "\" placeholder=\"Dalam menit *contoh : 30 , 60, 120\" />
                    </div>
                    <code>";
            // line 96
            echo form_error("durasi");
            echo "</code>
                </div>
                ";
        }
        // line 99
        echo "            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, site_url("tugas"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
            </div>
            ";
        // line 104
        echo form_close();
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 104,  217 => 102,  212 => 99,  206 => 96,  201 => 94,  196 => 91,  194 => 90,  189 => 88,  184 => 86,  176 => 81,  173 => 80,  160 => 77,  157 => 76,  153 => 75,  145 => 70,  141 => 68,  128 => 66,  124 => 65,  114 => 58,  109 => 56,  94 => 44,  89 => 42,  80 => 36,  68 => 27,  55 => 17,  44 => 8,  41 => 7,  32 => 4,  29 => 3,);
    }
}
