<?php

/* import_siswa.html */
class __TwigTemplate_fb3df7fced7cbeb192f281d2ed9b40ca831a7eaa6bb14f157acaeda7781563ca extends Twig_Template
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
        echo "Data Siswa - ";
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
        <h1>Import Excel</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("siswa"), "html", null, true);
        echo "\">List Siswa</a></li>
            <li class=\"breadcrumb-item active\">Import Excel</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-8 col-xs-12 p-3\" id=\"popTambah\">
    ";
        // line 27
        echo get_flashdata("siswa");
        echo "
\t\t<div class=\"card m-3\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<b>Contoh format data excel :</b>
                <div class=\"table-responsive\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url("plugins/src/import_export_siswa/img/contoh-import-excel-siswa.jpg"), "html", null, true);
        echo "\" class=\"img img-polaroid\">
\t\t\t\t</div>
                <p>Data siswa mulai terbaca mulai baris kedua, baris pertama digunakan untuk judul.</p>
\t\t\t\tFormat field :
\t\t\t\t<ul>
\t\t\t\t\t<li><b>Jenis kelamin</b> : L (laki-laki) dan P (Perempuan)</li>
\t\t\t\t\t<li><b>Tgl Lahir</b> : Tanggal/Bulan/Tahun</li>
\t\t\t\t\t<li><b>Agama</b> : Islam, Kristen, Katolik, Hindu, Budha</li>
\t\t\t\t</ul>
\t\t
\t\t\t\t";
        // line 42
        echo form_open_multipart("siswa/import_siswa", array("class" => "form-horizontal row-fluid"));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Kelas</label>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<select class=\"form-control col-6\" name=\"kelas_id\">
                                <option value=\"\">--Pilih--</option>
\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<code>";
        // line 53
        echo form_error("kelas_id");
        echo "</code>
\t\t\t\t\t</div>
\t\t\t\t\t<!--
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Domain username <span class=\"text-error\">*</span></label>
\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control col-6\" id=\"default_username\" name=\"default_username\" placeholder=\"Contoh : sekolah.sch.id\">
\t\t\t\t\t\t\t<div>Berfungsi untuk membuat username untuk siswa berdasarkan NIS, misalkan NIS siswa 123 dan domain username adalah sekolah.sch.id, maka username untuk siswa tersebut adalah 123@sekolah.sch.id</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<code>";
        // line 62
        echo form_error("default_username");
        echo "</code>
\t\t\t\t\t</div>
\t\t\t\t\t-->
\t\t\t\t\t<!--
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Default password</label>
\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t<p style=\"margin-top: 5px;\">Password akan diambil dari tanggal lahir siswa</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">File Excel (xls) <span class=\"text-error\">*</span></label>
\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t<input type=\"file\" class=\"btn btn-default\" name=\"userfile\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<code>";
        // line 78
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "</code>
\t\t\t\t\t\t<code>";
        // line 79
        echo form_error("userfile");
        echo "</code>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-input\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Import</button>
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, site_url("siswa"), "html", null, true);
        echo "\">Kembali</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "import_siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 84,  152 => 79,  148 => 78,  129 => 62,  117 => 53,  113 => 51,  100 => 49,  96 => 48,  87 => 42,  74 => 32,  66 => 27,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
