<?php

/* edit-presensikehadiran.html */
class __TwigTemplate_91fa31c4284f606f83fef22c1bd6edfc4240f1c71c1f4263cfc6d84010895783 extends Twig_Template
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
        echo "Edit Presensi Kehadiran Guru - ";
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
        <h1>Edit Presensi Kehadiran Guru</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("presensikehadiran?clear_filter=true"), "html", null, true);
        echo "\">List Presensi Kehadiran Guru</a></li>
            <li class=\"breadcrumb-item active\">Edit Presensi Kehadiran Guru</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 p-3\" id=\"popLihat\">
    ";
        // line 29
        echo get_flashdata("presensikehadiran");
        echo "
    ";
        // line 30
        echo form_open_multipart(((("presensikehadiran/edit/" . (isset($context["presensikehadiran_id"]) ? $context["presensikehadiran_id"] : null)) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("id" => "edit-presensikehadiran"));
        echo "
            <div class=\"card card-info\">
                <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                    <h3 class=\"card-title\">
                        Presensi Kehadiran Guru
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <div class=\"col-sm-12\">

                        <div class=\"form-group\">
                            <label>Tanggal Buat <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group date\" id=\"tanggal_buat\" data-target-input=\"nearest\">
                                    <input type=\"text\" id=\"input_tanggal_buat\" name=\"tanggal_buat\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, set_value("tanggal_buat", (isset($context["tanggal_buat"]) ? $context["tanggal_buat"] : null)), "html", null, true);
        echo "\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_buat\" disabled />
                                </div>
                                <!-- <code>";
        // line 46
        echo form_error("get_tanggal_buat");
        echo "</code> -->
                        </div>
                        <div class=\"form-group\">
                            <label>Mengajar Kelas <span class=\"text-danger\">*</span></label>
                            <div class=\"select2-blue\">
                                <select name=\"mengajar_kelas[]\" id=\"select2\" multiple=\"multiple\" class=\"form-control\" data-placeholder=\"--Pilih--\">
                                    ";
        // line 52
        $context["retrieve_all_child"] = get_row_data("kelas_model", "retrieve_all_child");
        // line 53
        echo "                                    ";
        $context["mk"] = twig_in_filter((isset($context["mk"]) ? $context["mk"] : null), (isset($context["mengajar_kelas"]) ? $context["mengajar_kelas"] : null));
        // line 54
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_child"]) ? $context["retrieve_all_child"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["rk"]) {
            // line 55
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mengajar_kelas[]", $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), ((in_array($this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), (isset($context["mengajar_kelas"]) ? $context["mengajar_kelas"] : null))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </select>
                                <code>";
        // line 58
        echo form_error("mengajar_kelas");
        echo "</code>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Jumlah Jam Infal </label>
                                <select name=\"lama_waktu_infal\" class=\"form-control\" data-placeholder=\"--Pilih--\">
                                    ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("lama_waktu_infal", (isset($context["i"]) ? $context["i"] : null), ((((isset($context["i"]) ? $context["i"] : null) == (isset($context["lama_waktu_infal"]) ? $context["lama_waktu_infal"] : null))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo " Jam</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                </select>
                        </div>
                        <div class=\"form-group\">
                            <label>Infal Kelas </label>
                            <div class=\"input-group\">
                                <input name=\"infal_kelas\" type=\"text\" class=\"form-control\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, set_value("infal_kelas", (isset($context["infal_kelas"]) ? $context["infal_kelas"] : null)), "html", null, true);
        echo "\" style=\"background:white;\">
                            </div>
                        </div>
                    </div>                 
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, site_url("presensikehadiran"), "html", null, true);
        echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Kembali\"><i class=\"fas fa-redo mr-1\"></i>Kembali</a>
                        <button type=\"submit\" class=\"btn btn-info\">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "edit-presensikehadiran.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 79,  162 => 72,  155 => 67,  142 => 65,  138 => 64,  129 => 58,  126 => 57,  113 => 55,  108 => 54,  105 => 53,  103 => 52,  94 => 46,  89 => 44,  72 => 30,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
