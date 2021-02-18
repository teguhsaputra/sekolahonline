<?php

/* tambah-presensikehadiran.html */
class __TwigTemplate_d6d9fa76307bc4b7daf8f734cda1b99b9166da60f00d061eff4fa7a942b9be71 extends Twig_Template
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
        echo "Tambah Presensi Kehadiran Guru - ";
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
        <h1>Tambah Presensi Kehadiran Guru</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("presensikehadiran?clear_filter=true"), "html", null, true);
        echo "\">List Presensi Kehadiran Guru</a></li>
            <li class=\"breadcrumb-item active\">Tambah Presensi Kehadiran Guru</li>
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
        echo form_open_multipart("presensikehadiran/add", array("class" => "form-horizontal row-fluid"));
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
                                <input id=\"tanggal_saiki\" type=\"text\" name=\"tanggal_buat\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, set_value("tanggal_buat"), "html", null, true);
        echo "\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_buat\" disabled/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Mengajar Kelas <span class=\"text-danger\">*</span></label>
                            <div class=\"select2-blue\">
                                <select name=\"mengajar_kelas[]\" id=\"select2\" multiple=\"multiple\" class=\"form-control\" data-placeholder=\"--Pilih--\">
                                    ";
        // line 50
        $context["retrieve_all_child"] = get_row_data("kelas_model", "retrieve_all_child");
        // line 51
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_child"]) ? $context["retrieve_all_child"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rk"]) {
            // line 52
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </select>
                                <code>";
        // line 55
        echo form_error("mengajar_kelas");
        echo "</code>
                            </div>
                        </div>
                        <!--
                        <div class=\"form-group\">
                            <label for=\"Hadir/Tidak Hadir\">Hadir/Tidak Hadir <span class=\"text-danger\">*</span></label>
                            <select name=\"absensi_kehadiran\" class=\"form-control\">
                                <option value=\"\">--pilih--</option>
                                <option value=\"0\">Hadir</option>
                                <option value=\"1\">Tidak Hadir</option>
                            </select>
                             <code>";
        // line 66
        echo form_error("absensi_kehadiran");
        echo "</code>
                        </div>
                        <div class=\"form-group\">
                            <label>Lama Waktu Infal </label>
                            <div class=\"input-group\">
                                <input name=\"lama_waktu_infal\" type=\"text\" class=\"form-control\" style=\"background:white;\">
                            </div>
                        </div>
                        -->
                        <div class=\"form-group\">
                            <label>Jumlah Jam Infal </label>
                            <select name=\"lama_waktu_infal\" class=\"form-control\">
                                <option value=\"\">--pilih--</option>
                                <option value=\"1\">1 Jam</option>
                                <option value=\"2\">2 Jam</option>
                                <option value=\"3\">3 Jam</option>
                                <option value=\"4\">4 Jam</option>
                                <option value=\"5\">5 Jam</option>
                                <option value=\"6\">6 Jam</option>
                                <option value=\"7\">7 Jam</option>
                                <option value=\"8\">8 Jam</option>
                                <option value=\"9\">9 Jam</option>
                                <option value=\"10\">10 Jam</option>
                                <option value=\"11\">11 Jam</option>
                                <option value=\"12\">12 Jam</option>
                            </select>
                             <code>";
        // line 92
        echo form_error("lama_waktu_infal");
        echo "</code>
                        </div>
                        <div class=\"form-group\">
                            <label>Infal Kelas </label>
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"infal_kelas\" class=\"form-control\"/>
                            </div>
                        </div>
                        <!--
                        <div class=\"form-group\">
                            <label>Infal Kelas </label>
                            <div class=\"select2-blue\">
                                <select name=\"infal_kelas[]\" id=\"select3\" multiple=\"multiple\" class=\"form-control\" data-placeholder=\"--Pilih--\">
                                    ";
        // line 105
        $context["retrieve_all_child"] = get_row_data("kelas_model", "retrieve_all_child");
        // line 106
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_child"]) ? $context["retrieve_all_child"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rk"]) {
            // line 107
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "nama"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                </select>
                            </div>
                        </div>
                        -->
                    </div>                 
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 117
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
        return "tambah-presensikehadiran.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 117,  196 => 109,  185 => 107,  180 => 106,  178 => 105,  162 => 92,  133 => 66,  119 => 55,  116 => 54,  105 => 52,  100 => 51,  98 => 50,  88 => 43,  72 => 30,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
