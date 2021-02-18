<?php

/* tambah-jurnalabsen.html */
class __TwigTemplate_c11c58f4b748bca9a6b1f2e2512f77027f96bfc3417fce3584d151fbda6dac9a extends Twig_Template
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
        echo "Tambah Jurnal dan Absen - ";
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
        <h1>Tambah Absen & Jurnal Mengajar</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("absenjurnal?clear_filter=true"), "html", null, true);
        echo "\">List Absen & Jurnal Mengajar</a></li>
            <li class=\"breadcrumb-item active\">Tambah Absen & Jurnal Mengajar</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 p-3\" id=\"popLihat\">
    ";
        // line 29
        echo get_flashdata("absenjurnal");
        echo "
        ";
        // line 30
        echo form_open_multipart("absenjurnal/add", array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card\">
                <div class=\"card-header\">
                    <nav style=\"margin-bottom:-13px;\">
                        <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                            <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Jurnal Mengajar</a>
                            <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Absen Siswa</a>
                        </div>
                    </nav>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <div class=\"tab-content\" id=\"nav-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                            <div class=\"col-12\">
                                <table class=\"table table-bordered table-striped\">
                                    <thead>
                                    <th colspan=\"2\" class=\"text-center\">Jurnal Mengajar</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                <label>Tanggal Buat <span class=\"text-danger\">*</span></label>
                                                    <div class=\"input-group date\" id=\"tanggal_buat\" data-target-input=\"nearest\">
                                                        <input id=\"tanggal_saiki\" type=\"text\" name=\"tanggal_buat\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("tanggal_buat"), "html", null, true);
        echo "\" class=\"form-control datetimepicker-input\" data-toggle=\"datetimepicker\" data-target=\"#tanggal_buat\"/>
                                                    </div>
                                                    <code>";
        // line 57
        echo form_error("tanggal_buat");
        echo "</code>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
        // line 63
        $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => null, 1 => (isset($context["user_id"]) ? $context["user_id"] : null), 2 => null));
        // line 64
        echo "                                                ";
        if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
            // line 65
            echo "                                                <div class=\"form-group\">
                                                    <label for=\"jam_mengajar\">Jam Mengajar <span class=\"text-danger\">*</span></label>
                                                    <select name=\"mapel_ajar_id\" class=\"form-control\" id=\"jam_mengajar\">
                                                    <option value=\"\">--pilih--</option>
                                                    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                // line 70
                echo "                                                    ";
                $context["rk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                // line 71
                echo "                                                    ";
                $context["mp"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "mapel_id")));
                // line 72
                echo "                                                    ";
                $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id")));
                // line 73
                echo "                                                    ";
                $context["kelas_id"] = $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id");
                // line 74
                echo "                                                        <option data-matapelajaran=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp"]) ? $context["mp"] : null), "nama"), "html", null, true);
                echo "\" data-kelas=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id"), "html", null, true);
                echo "\">
                                                        ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arr_hari"]) ? $context["arr_hari"] : null), $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "hari_id"), array(), "array"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo " ~ 
                                                        ";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                                    </select>
                                                </div>
                                                ";
        } else {
            // line 81
            echo "                                                <div class=\"form-group\">
                                                    <label for=\"jam_mengajar\">Jam Mengajar <span class=\"text-danger\">*</span></label>
                                                    <select name=\"mapel_ajar_id\" class=\"form-control bg-danger\" id=\"jam_mengajar\" disabled>
                                                        <option value=\"ma.id\">Jam Mengajar Belum Ada</option>
                                                    </select>
                                                </div>
                                                ";
        }
        // line 88
        echo "                                            </td>
                                            <code>";
        // line 89
        echo form_error("mapel_ajar_id");
        echo "</code>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label>Matapelajaran (otomatis) <span class=\"text-danger\">*</span></label>
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" class=\"form-control\" style=\"background:white;\" id=\"get_ma\" disabled>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label>Kelas (otomatis)</label>
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" class=\"form-control\" style=\"background:white;\" id=\"get_kelas\" disabled>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        -->
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                <label>No.KI/KD <span class=\"text-danger\">*</span></label>
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" name=\"no_kikd\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, set_value("no_kikd"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                    <code>";
        // line 120
        echo form_error("no_kikd");
        echo "</code>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                <label>Pokok Bahasan/Materi Tes Formatif/Suamtif/Sub Suamtif <span class=\"text-danger\">*</span></label>
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" name=\"pokok_pembahasan\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, set_value("pokok_pembahasan"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                    <code>";
        // line 131
        echo form_error("pokok_pembahasan");
        echo "</code>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"jam_mengajar\">Selesai/Belum <span class=\"text-danger\">*</span></label>
                                                    <select name=\"status_selesai\" class=\"form-control\">
                                                        <option value=\"\">--pilih--</option>
                                                        <option value=\"0\">Selesai</option>
                                                        <option value=\"1\">Belum</option>
                                                    </select>
                                                     <code>";
        // line 144
        echo form_error("status_selesai");
        echo "</code>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                <label>Keterangan</label>
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" name=\"keterangan\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, set_value("keterangan"), "html", null, true);
        echo "\" class=\"form-control\"/>
                                                        <input type=\"text\" class=\"form-control\" style=\"background:white;\" id=\"get_kelas\" hidden>
                                                    </div>
                                                    <code>";
        // line 156
        echo form_error("keterangan");
        echo "</code>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                            <div class=\"col-12\" id=\"refresh\">
                                <table class=\"table table-bordered table-striped\">
                                    <thead>
                                        <th colspan=\"2\" class=\"text-center\">Absen Siswa</th>
                                    </thead>
                                    <tbody id=\"data_siswa\">
                                  
                                        <!--
                                        ";
        // line 173
        $context["retrieve_all_siswa"] = get_row_data("absenjurnal_model", "retrieve_all_siswa", array());
        // line 174
        echo "                                        ";
        if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
            // line 175
            echo "                                            ";
            $context["rk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
            // line 176
            echo "                                            ";
            $context["mp"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "mapel_id")));
            // line 177
            echo "                                            ";
            $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["rk"]) ? $context["rk"] : null), "kelas_id")));
            // line 178
            echo "                                                <option data-matapelajaran=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp"]) ? $context["mp"] : null), "nama"), "html", null, true);
            echo "\" data-kelas=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id"), "html", null, true);
            echo "\">
                                                ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arr_hari"]) ? $context["arr_hari"] : null), $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "hari_id"), array(), "array"), "html", null, true);
            echo " ~ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo " ~ 
                                                ";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
            echo "</option>
                                        ";
        }
        // line 182
        echo "                                        -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 191
        echo twig_escape_filter($this->env, site_url("absenjurnal"), "html", null, true);
        echo "\" class=\"btn btn-dark\" data-toggle=\"tooltip\" title=\"Kembali\"><i class=\"fas fa-redo mr-1\"></i>Kembali</a>
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
        return "tambah-jurnalabsen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 191,  327 => 182,  320 => 180,  314 => 179,  305 => 178,  302 => 177,  299 => 176,  296 => 175,  293 => 174,  291 => 173,  271 => 156,  265 => 153,  253 => 144,  237 => 131,  232 => 129,  220 => 120,  215 => 118,  183 => 89,  180 => 88,  171 => 81,  166 => 78,  156 => 76,  150 => 75,  141 => 74,  138 => 73,  135 => 72,  132 => 71,  129 => 70,  125 => 69,  119 => 65,  116 => 64,  114 => 63,  105 => 57,  100 => 55,  72 => 30,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
