<?php

/* edit-pengumuman.html */
class __TwigTemplate_c28f9bacf4e1c4e5280a6c6f37c80a261e6ca2a27ff728faf00d3a3422fa1f01 extends Twig_Template
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
        echo "Edit Pengumuman - ";
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
        <h1>Edit Pengumuman</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\">Pengumuman</a></li>
            <li class=\"breadcrumb-item active\">Edit Pengumuman</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

";
        // line 25
        echo get_flashdata("pengumuman");
        echo "
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-6 col-md-6 col-xs-12 p-3\" id=\"popTambah\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Edit Pengumuman
                </h3>
            </div>
            <!-- /.card-header -->
            ";
        // line 35
        echo form_open_multipart(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
                <div class=\"card-body pad\">
                    <div class=\"form-group\">
                        <label>Judul</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul")), "html", null, true);
        echo "\">
                            
                        </div>
                        <code>";
        // line 43
        echo form_error("judul");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tanggal Tampil</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"tgl_tampil\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, set_value("tgl_tampil", (isset($context["arr_tgl"]) ? $context["arr_tgl"] : null)), "html", null, true);
        echo "\" id=\"pengumuman-tgl-tampil\">
                        </div>
                        <code>";
        // line 50
        echo form_error("tgl_tampil");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                    <label>Info</label>
                        <div class=\"input-group\">
                            <textarea name=\"konten\" class=\"texteditor\">";
        // line 55
        echo set_value("konten", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten"));
        echo "</textarea>
                        </div>
                        <code>";
        // line 57
        echo form_error("konten");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tampil di Siswa</label>
                        <div class=\"form-check\">
                            <label class=\"form-check-label inline\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_siswa\" value=\"1\" ";
        // line 62
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "1", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_siswa") == 1)) ? (true) : (""))), "html", null, true);
        echo "> Ya</label>
                            <label class=\"form-check-label inline ml-5\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_siswa\" value=\"0\" ";
        // line 63
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "0", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_siswa") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Tidak</label>
                        </div>
                        <code>";
        // line 65
        echo form_error("tampil_siswa");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tampil di Pengajar</label>
                        <div class=\"form-check\">
                            <label class=\"form-check-label inline\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_pengajar\" value=\"1\" ";
        // line 70
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "1", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_pengajar") == 1)) ? (true) : (""))), "html", null, true);
        echo "> Ya</label>
                            <label class=\"form-check-label inline ml-5\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_pengajar\" value=\"0\" ";
        // line 71
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "0", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_pengajar") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Tidak</label>
                        </div>
                        <code>";
        // line 73
        echo form_error("tampil_pengajar");
        echo "</code>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-info\">Simpan</button>
                    <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            ";
        // line 80
        echo form_close();
        echo "
        
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "edit-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 80,  159 => 78,  151 => 73,  146 => 71,  142 => 70,  134 => 65,  129 => 63,  125 => 62,  117 => 57,  112 => 55,  104 => 50,  99 => 48,  91 => 43,  85 => 40,  77 => 35,  64 => 25,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
