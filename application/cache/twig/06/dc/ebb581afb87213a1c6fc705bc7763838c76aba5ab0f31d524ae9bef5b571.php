<?php

/* detail-absenjurnal.html */
class __TwigTemplate_06dcebb581afb87213a1c6fc705bc7763838c76aba5ab0f31d524ae9bef5b571 extends Twig_Template
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
        echo "Detail Absen dan Jurnal - ";
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
        <h1>Detail Absen & Jurnal Mengajar</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("absenjurnal?clear_filter=true"), "html", null, true);
        echo "\">List Absen & Jurnal Mengajar</a></li>
            <li class=\"breadcrumb-item active\">Detail Absen & Jurnal Mengajar</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-12 p-3\" id=\"popLihat\">
    ";
        // line 29
        echo get_flashdata("absenjurnal");
        echo "
        <div class=\"card card-info\">
            <!-- /.card-header -->
            <div class=\"card-body pad\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                            <th colspan=\"2\" class=\"text-center\">Jurnal Mengajar</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width=\"30%\" class=\"text-bold\">ID</td>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Tanggal Buat</td>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "tanggal_buat"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Nama Pengajar</td>
                                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pengajar"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Jam Mengajar</td>
                                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "jam_ngajar"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Matapelajaran</td>
                                    <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "matapelajaran"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Kelas</td>
                                    <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "kelas"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">No.KI/KD</td>
                                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "no_kikd"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Pokok Bahasan/Materi Tes Formatif/Suamtif/Sub Suamtif</td>
                                    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pokok_pembahasan"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Selesai/Belum</td>
                                    <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "status_selesai"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Absensi Siswa</td>
                                    <td>
                                        ";
        // line 79
        if ((!twig_test_empty((isset($context["hadir"]) ? $context["hadir"] : null)))) {
            // line 80
            echo "                                            <span class=\"badge badge-secondary\">Hadir ";
            echo twig_escape_filter($this->env, (isset($context["hadir"]) ? $context["hadir"] : null), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 82
        echo "                                        ";
        if ((!twig_test_empty((isset($context["sakit"]) ? $context["sakit"] : null)))) {
            // line 83
            echo "                                            <span class=\"badge badge-secondary\">Sakit ";
            echo twig_escape_filter($this->env, (isset($context["sakit"]) ? $context["sakit"] : null), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 85
        echo "                                        ";
        if ((!twig_test_empty((isset($context["izin"]) ? $context["izin"] : null)))) {
            // line 86
            echo "                                            <span class=\"badge badge-secondary\">Izin ";
            echo twig_escape_filter($this->env, (isset($context["izin"]) ? $context["izin"] : null), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 88
        echo "                                        ";
        if ((!twig_test_empty((isset($context["alpha"]) ? $context["alpha"] : null)))) {
            // line 89
            echo "                                            <span class=\"badge badge-secondary\">Alpha ";
            echo twig_escape_filter($this->env, (isset($context["alpha"]) ? $context["alpha"] : null), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 91
        echo "                                    </td>
                                 <!--   <td>";
        // line 92
        echo twig_escape_filter($this->env, print_r($this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "ket_absen_siswa")), "html", null, true);
        echo "</td> -->
                                </tr>
                                <tr>
                                    <td class=\"text-bold\">Keterangan</td>
                                    <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "keterangan"), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"col-sm-6\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                            <th colspan=\"2\" class=\"text-center\">Absen Siswa</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width=\"80%\" class=\"text-bold\">Nama Siswa</td>
                                    <td class=\"text-bold\">Kehadiran</td>
                                </tr>
                                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absen_siswa"]) ? $context["absen_siswa"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["as"]) {
            // line 112
            echo "                                <tr>    
                                    <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["as"]) ? $context["as"] : null), "siswa"), "html", null, true);
            echo "</td>
                                    ";
            // line 114
            if (($this->getAttribute((isset($context["as"]) ? $context["as"] : null), "status_hadir") == 0)) {
                // line 115
                echo "                                    <td class=\"text-center\">
                                        <i class=\"text-success fas fa-check-circle\"></i> Hadir
                                    </td>
                                    ";
            }
            // line 119
            echo "                                    ";
            if (($this->getAttribute((isset($context["as"]) ? $context["as"] : null), "status_hadir") == 1)) {
                // line 120
                echo "                                    <td class=\"text-center\">
                                        <i class=\"text-warning fas fa-plus-circle\"></i> Sakit
                                    </td>
                                    ";
            }
            // line 124
            echo "                                    ";
            if (($this->getAttribute((isset($context["as"]) ? $context["as"] : null), "status_hadir") == 2)) {
                // line 125
                echo "                                    <td class=\"text-center\">
                                        <i class=\"text-info fas fa-info-circle\"></i> Izin
                                    </td>
                                    ";
            }
            // line 129
            echo "                                    ";
            if (($this->getAttribute((isset($context["as"]) ? $context["as"] : null), "status_hadir") == 3)) {
                // line 130
                echo "                                    <td class=\"text-center\">
                                        <i class=\"text-danger fas fa-times-circle\"></i> Alpha
                                    </td>
                                    ";
            }
            // line 134
            echo "                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['as'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                <!--
                                <tr>
                                    <td>Teguh Saputra</td>
                                    <td class=\"text-center\">
                                        <i class=\"text-info fas fa-info-circle\"></i> Izin
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jessica</td>
                                    <td class=\"text-center\">
                                        <i class=\"text-warning fas fa-plus-circle\"></i> Sakit
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonardo</td>
                                    <td class=\"text-center\">
                                        <i class=\"text-danger fas fa-times-circle\"></i> Alpha
                                    </td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, site_url("absenjurnal"), "html", null, true);
        echo "\" class=\"btn btn-dark\" data-toggle=\"tooltip\" title=\"Kembali\"><i class=\"fas fa-redo mr-1\"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-absenjurnal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 163,  264 => 136,  257 => 134,  251 => 130,  248 => 129,  242 => 125,  239 => 124,  233 => 120,  230 => 119,  224 => 115,  222 => 114,  218 => 113,  215 => 112,  211 => 111,  193 => 96,  186 => 92,  183 => 91,  177 => 89,  174 => 88,  168 => 86,  165 => 85,  159 => 83,  156 => 82,  150 => 80,  148 => 79,  140 => 74,  133 => 70,  126 => 66,  119 => 62,  112 => 58,  105 => 54,  98 => 50,  91 => 46,  84 => 42,  68 => 29,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
