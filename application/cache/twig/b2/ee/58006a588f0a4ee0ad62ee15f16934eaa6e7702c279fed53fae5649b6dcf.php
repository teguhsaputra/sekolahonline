<?php

/* tambah-pengumuman.html */
class __TwigTemplate_b2ee58006a588f0a4ee0ad62ee15f16934eaa6e7702c279fed53fae5649b6dcf extends Twig_Template
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
        echo "Buat Pengumuman - ";
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
        <h1>Tambah Pengumuman</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\">Pengumuman</a></li>
            <li class=\"breadcrumb-item active\">Tambah Pengumuman</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>


<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-6 col-md-6 col-xs-12 p-3\" id=\"popTambah\">
    ";
        // line 28
        echo get_flashdata("pengumuman");
        echo "
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
            <h3 class=\"card-title\">
                Tambah Pengumuman
            </h3>
            <!-- tools box -->
    <!--       <div class=\"card-tools\">
                <button type=\"button\" class=\"btn btn-tool btn-sm\" data-card-widget=\"collapse\" data-toggle=\"tooltip\"
                        title=\"Collapse\">
                <i class=\"fas fa-minus\"></i></button>
            </div>  -->
            <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            ";
        // line 43
        echo form_open_multipart("pengumuman/add", array("class" => "form-horizontal row-fluid"));
        echo "
                <div class=\"card-body pad\">
                    <div class=\"form-group\">
                        <label>Judul</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, set_value("judul"), "html", null, true);
        echo "\">
                        </div>
                        <code>";
        // line 50
        echo form_error("judul");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tanggal Tampil</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"tgl_tampil\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("tgl_tampil"), "html", null, true);
        echo "\" id=\"pengumuman-tgl-tampil\">
                        </div>
                        <code>";
        // line 57
        echo form_error("tgl_tampil");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Info</label>
                            <div class=\"input-group\">
                                <textarea name=\"konten\" class=\"texteditor\">";
        // line 62
        echo set_value("konten");
        echo "</textarea>
                            </div>
                            <code>";
        // line 64
        echo form_error("konten");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tampil di Siswa</label>
                        <div class=\"form-check\">
                            <label class=\"form-check-label inline\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_siswa\" value=\"1\" ";
        // line 69
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "1", true), "html", null, true);
        echo "> Ya</label>
                            <label class=\"form-check-label inline ml-5\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_siswa\" value=\"0\" ";
        // line 70
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "0"), "html", null, true);
        echo "> Tidak</label>
                        </div>
                        <code>";
        // line 72
        echo form_error("tampil_siswa");
        echo "</code>
                    </div>
                    <div class=\"form-group\">
                        <label>Tampil di Pengajar</label>
                        <div class=\"form-check\">
                            <label class=\"form-check-label inline\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_pengajar\" value=\"1\" ";
        // line 77
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "1", true), "html", null, true);
        echo "> Ya</label>
                            <label class=\"form-check-label inline ml-5\"><input class=\"form-check-input\" type=\"radio\" name=\"tampil_pengajar\" value=\"0\" ";
        // line 78
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "0"), "html", null, true);
        echo "> Tidak</label>
                        </div>
                        <code>";
        // line 80
        echo form_error("tampil_pengajar");
        echo "</code>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-info\">Simpan</button>
                    <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            ";
        // line 87
        echo form_close();
        echo "
        
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  166 => 85,  158 => 80,  153 => 78,  149 => 77,  141 => 72,  136 => 70,  132 => 69,  124 => 64,  119 => 62,  111 => 57,  106 => 55,  98 => 50,  93 => 48,  85 => 43,  67 => 28,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
