<?php

/* tambah-lessonplan.html */
class __TwigTemplate_db7af7582d37d18039203f9e06bdeeb5c29168e68ea92cf79f9cf87053695e37 extends Twig_Template
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
        echo "Tambah Lesson Plan- ";
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
        <h1>Tambah Lesson Plan</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("lessonplan?clear_filter=true"), "html", null, true);
        echo "\">List Lesson Plan</a></li>
            <li class=\"breadcrumb-item active\">Tambah Lesson Plan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 p-3\" id=\"popLihat\">
    ";
        // line 29
        echo get_flashdata("lessonplan");
        echo "
        ";
        // line 30
        echo form_open_multipart("lessonplan/add", array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card card-info\">
                <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                    <h3 class=\"card-title\">
                        Lesson Plan
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label>Tanggal Mengajar <span class=\"text-danger\">*</span></label>
                            <div class=\"input-group date\" id=\"tanggal_mengajar\" data-target-input=\"nearest\">
                                <input type=\"text\" name=\"tanggal_mengajar\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_mengajar\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                        ";
        // line 47
        $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => null, 1 => (isset($context["user_id"]) ? $context["user_id"] : null), 2 => null));
        // line 48
        echo "                        ";
        if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
            // line 49
            echo "                            <label for=\"jam_mengajar\">Jam Mengajar <span class=\"text-danger\">*</span></label>
                            <select name=\"mapel_ajar_id\" class=\"form-control\" id=\"jam_mengajar\">
                            <option value=\"\">--pilih--</option>
                            ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                // line 53
                echo "                            ";
                $context["rk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                // line 54
                echo "                            ";
                $context["mp"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "mapel_id")));
                // line 55
                echo "                            ";
                $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id")));
                // line 56
                echo "                            ";
                $context["kelas_id"] = $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id");
                // line 57
                echo "                                <option data-matapelajaran=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp"]) ? $context["mp"] : null), "nama"), "html", null, true);
                echo "\" data-kelas=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id"), "html", null, true);
                echo "\">
                                ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arr_hari"]) ? $context["arr_hari"] : null), $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "hari_id"), array(), "array"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo " ~ 
                                ";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </select>
                        ";
        } else {
            // line 63
            echo "                            <label for=\"jam_mengajar\">Jam Mengajar <span class=\"text-danger\">*</span></label>
                            <select name=\"mapel_ajar_id\" class=\"form-control bg-danger\" id=\"jam_mengajar\" disabled>
                                <option value=\"ma.id\">Jam Mengajar Belum Ada</option>
                            </select>
                        ";
        }
        // line 68
        echo "                            <code>";
        echo form_error("mapel_ajar_id");
        echo "</code>
                        </div>
                        <div class=\"form-group\">
                            <label>Matapelajaran (otomatis) <span class=\"text-danger\">*</span></label>
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" style=\"background:white;\" id=\"get_ma\" disabled>
                            </div>
                        </div>
                        <!--
                        <div class=\"form-group\">
                            <label>Mengajar Kelas <span class=\"text-danger\">*</span></label>
                            <div class=\"select2-blue\">
                                <select name=\"mengajar_kelas[]\" id=\"select2\" multiple=\"multiple\" class=\"form-control\" data-placeholder=\"--Pilih--\">
                                    ";
        // line 81
        $context["retrieve_all_child"] = get_row_data("kelas_model", "retrieve_all_child");
        // line 82
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_child"]) ? $context["retrieve_all_child"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rk"]) {
            // line 83
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
        // line 85
        echo "                                </select>
                                <code>";
        // line 86
        echo form_error("mengajar_kelas");
        echo "</code>
                            </div>
                        </div>
                        -->
                        <!--
                        <div class=\"form-group\">
                            <label for=\"Hadir/Tidak Hadir\">Hadir/Tidak Hadir <span class=\"text-danger\">*</span></label>
                            <select name=\"absensi_kehadiran\" class=\"form-control\">
                                <option value=\"\">--pilih--</option>
                                <option value=\"0\">Hadir</option>
                                <option value=\"1\">Tidak Hadir</option>
                            </select>
                             <code>";
        // line 98
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
                            <label>No.KI/KD <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"no_kikd\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, set_value("no_kikd"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                </div>
                                <code>";
        // line 112
        echo form_error("no_kikd");
        echo "</code>
                        </div>
                        <div class=\"form-group\">
                            <label>Pokok Bahasan/Materi Tes Formatif/Suamtif/Sub Suamtif <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"pokok_pembahasan\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, set_value("pokok_pembahasan"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                </div>
                                <code>";
        // line 119
        echo form_error("pokok_pembahasan");
        echo "</code>
                        </div>
                        <div class=\"form-group\">
                            <label>Media Yang Digunakan <span class=\"text-danger\">*</span></label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"media\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, set_value("media"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                </div>
                                <code>";
        // line 126
        echo form_error("media");
        echo "</code>
                            </div>
                    </div>                 
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, site_url("lessonplan"), "html", null, true);
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
        return "tambah-lessonplan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 132,  253 => 126,  248 => 124,  240 => 119,  235 => 117,  227 => 112,  222 => 110,  207 => 98,  192 => 86,  189 => 85,  178 => 83,  173 => 82,  171 => 81,  154 => 68,  147 => 63,  143 => 61,  133 => 59,  127 => 58,  118 => 57,  115 => 56,  112 => 55,  109 => 54,  106 => 53,  102 => 52,  97 => 49,  94 => 48,  92 => 47,  72 => 30,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
