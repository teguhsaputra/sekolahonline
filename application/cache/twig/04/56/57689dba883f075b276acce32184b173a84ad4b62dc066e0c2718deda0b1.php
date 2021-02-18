<?php

/* edit-tugas.html */
class __TwigTemplate_045657689dba883f075b276acce32184b173a84ad4b62dc066e0c2718deda0b1 extends Twig_Template
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
        echo "Edit Tugas ";
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
            <li class=\"breadcrumb-item active\">Edit Tugas</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

";
        // line 25
        echo get_flashdata("tugas");
        echo "

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Edit Tugas
                </h3>
            </div>
            <!-- /.card-header -->
            
            ";
        // line 37
        echo form_open_multipart(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body pad\">
                <div class=\"form-group\">
                    <label>Tanggal Ujian <span class=\"text-danger\">*</span></label>
                    <div class=\"input-group date\" id=\"tanggal_ujian\" data-target-input=\"nearest\">
                        <input type=\"text\" name=\"tanggal_ujian\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("tanggal_ujian", (isset($context["tanggal_ujian"]) ? $context["tanggal_ujian"] : null)), "html", null, true);
        echo "\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_ujian\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>Judul</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "\" />
                    </div>
                    <code>";
        // line 50
        echo form_error("judul");
        echo "</code>
                </div>
                <div class=\"form-group\">
                <label>Matapelajaran</label>
                    <div class=\"input-group\">
                        <select class=\"form-control\" name=\"mapel_id\">
                            <option value=\"\">--pilih--</option>
                            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 58
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id") == $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel_id"))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </select>
                    </div>
                    <code>";
        // line 62
        echo form_error("mapel_id");
        echo "</code>
                </div>
                <div class=\"form-group\">
                    <label>Kelas</label>
                    <div class=\"input-group\">
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 68
            echo "                            <label class=\"form-check-label ml-4 mr-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), (isset($context["tugas_kelas"]) ? $context["tugas_kelas"] : null))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </div>
                    <code>";
        // line 73
        echo form_error("kelas_id[]");
        echo "</code>
                </div>
                <div class=\"form-group\">
                    <label>Info</label>
                    <div class=\"input-group\">
                         <textarea name=\"info\" id=\"info\" class=\"texteditor\">";
        // line 78
        echo set_value("info", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info"));
        echo "</textarea>
                    </div>
                    <code>";
        // line 80
        echo form_error("info");
        echo "</code>
                </div>
                ";
        // line 82
        if (((isset($context["type"]) ? $context["type"] : null) != 1)) {
            // line 83
            echo "                <div class=\"form-group\">
                    <label>Durasi</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"durasi\" class=\"form-control\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, set_value("durasi", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi")), "html", null, true);
            echo "\" placeholder=\"Dalam menit *contoh : 30 , 60, 120\"/>
                    </div>
                    <code>";
            // line 88
            echo form_error("durasi");
            echo "</code>
                </div>
                ";
        }
        // line 91
        echo "            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
            </div>
            ";
        // line 96
        echo form_close();
        echo "
        </div>
    </div>
</div>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 104
        echo anchor((isset($context["uri_back"]) ? $context["uri_back"] : null), "Tugas");
        echo " / Edit Tugas ";
        echo twig_escape_filter($this->env, (isset($context["type_label"]) ? $context["type_label"] : null), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 107
        echo get_flashdata("tugas");
        echo "

        ";
        // line 109
        echo form_open_multipart(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Judul <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"judul\" class=\"span12\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "\">
                    <br>";
        // line 114
        echo form_error("judul");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Matapelajaran <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <select name=\"mapel_id\">
                        <option value=\"\">--pilih--</option>
                        ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 123
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id") == $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel_id"))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </select>
                    <br>";
        // line 126
        echo form_error("mapel_id");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                        ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 134
            echo "                        <li>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), (isset($context["tugas_kelas"]) ? $context["tugas_kelas"] : null))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                            </label>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                    </ul>
                    ";
        // line 141
        echo form_error("kelas_id[]");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Info</label>
                <div class=\"controls\">
                    <textarea name=\"info\" id=\"info\" class=\"texteditor\">";
        // line 147
        echo set_value("info", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info"));
        echo "</textarea>
                    ";
        // line 148
        echo form_error("info");
        echo "
                </div>
            </div>
            ";
        // line 151
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") != 1)) {
            // line 152
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Durasi <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"durasi\" class=\"span2\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, set_value("durasi", $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi")), "html", null, true);
            echo "\" placeholder=\"Dalam menit\">
                    <br>";
            // line 156
            echo form_error("durasi");
            echo "
                </div>
            </div>
            ";
        }
        // line 160
        echo "            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            </div>
        ";
        // line 166
        echo form_close();
        echo "

    </div>
</div>
-->

";
    }

    public function getTemplateName()
    {
        return "edit-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 166,  354 => 163,  349 => 160,  342 => 156,  338 => 155,  333 => 152,  331 => 151,  325 => 148,  321 => 147,  312 => 141,  309 => 140,  295 => 136,  291 => 134,  287 => 133,  277 => 126,  274 => 125,  261 => 123,  257 => 122,  246 => 114,  242 => 113,  235 => 109,  230 => 107,  222 => 104,  211 => 96,  206 => 94,  201 => 91,  195 => 88,  190 => 86,  185 => 83,  183 => 82,  178 => 80,  173 => 78,  165 => 73,  162 => 72,  149 => 69,  146 => 68,  142 => 67,  134 => 62,  130 => 60,  117 => 58,  113 => 57,  103 => 50,  98 => 48,  89 => 42,  81 => 37,  66 => 25,  55 => 17,  44 => 8,  41 => 7,  32 => 4,  29 => 3,);
    }
}
