<?php

/* list-presensikehadiran.html */
class __TwigTemplate_2fefeb99110a59c9121201e0c3af9a396272cee30aa59fadd2a11b946b2e8ca5 extends Twig_Template
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
        echo "Presensi Kehadiran Guru - ";
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
        <h1 class=\"m-0 text-dark\">List Presensi Kehadiran Guru</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">List Presensi Kehadiran Guru</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
    <div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-12 p-3\">
    ";
        // line 32
        echo get_flashdata("presensikehadiran");
        echo "
        <div class=\"card\">
            <div class=\"card-body\">
                
                <!--<button class=\"btn btn-primary mb-2\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"fas fa-search\"></i> PARAMETER PENCARIAN</button>-->
                <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                    ";
        // line 38
        echo form_open("presensikehadiran");
        echo "
                    <div class=\"col-lg-6 col-md-6 col-xs-12\">
                        <!-- Date and time range -->
                        <div class=\"form-group\">
                            <label>Tanggal</label>
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"tanggal_between\" class=\"form-control\" id=\"tanggal_between\">
                                <div class=\"input-group-prepend\">
                                    <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Cari\"/>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    </form>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-striped datatablepresensikehadiran\">
                        <thead>
                            <tr align=\"center\">
                                <th width=\"1%\" style=\"display:none;\"><small class=\"font-weight-bold\">ID</small></th>
                                <th width=\"13%\"style=\"display:none;\"><small class=\"font-weight-bold\">Pengajar</small></th>
                                <th width=\"13%\"><small class=\"font-weight-bold\">Tanggal Buat</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Absensi Kehadiran</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Mengajar Kelas</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Jumlah Jam Infal</small></th>
                                <th width=\"\"><small class=\"font-weight-bold\">Infal Kelas</small></th>

                                <th id=\"hapus1\" width=\"\"><small class=\"font-weight-bold\"></small></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presensikehadiran"]) ? $context["presensikehadiran"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["pk"]) {
            // line 74
            echo "                            <tr>
                                <td style=\"display:none;\"><small>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "pengajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "t_ubah"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "absensi_kehadiran"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "mengajar_kelas"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "lama_waktu_infal"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "infal_kelas"), "html", null, true);
            echo "</small></td>
                                <td id=\"hapus2\">    
                                    <div class=\"btn-group\">
                                    
                                        <!-- <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, site_url("presensikehadiran/detail"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "t_delete"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-search-plus\"></i> Detail</a> -->
                                        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, site_url("presensikehadiran/edit"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-edit\"></i> Edit</a>
                                        ";
            // line 87
            if (is_admin()) {
                // line 88
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, site_url("presensikehadiran/delete"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pk"]) ? $context["pk"] : null), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, enurl_redirect(current_url()), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\" onclick=\"return confirm('Anda yakin ingin menghapus?')\"><i class=\"fas fa-trash\"></i> Delete</a>
                                        ";
            }
            // line 90
            echo "                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['pk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            <!--
                            ";
        // line 95
        if ((!twig_test_empty((isset($context["presensikehadiran"]) ? $context["presensikehadiran"] : null)))) {
            // line 96
            echo "                            <tr>
                                <td colspan=\"8\">Jumlah : 100</td>
                            </tr>
                            ";
        }
        // line 100
        echo "                            -->
                            <!--
                            ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absenjurnal"]) ? $context["absenjurnal"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["aj"]) {
            // line 103
            echo "                            <tr>
                                <td style=\"display:none;\"><small>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pengajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_ubah"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "hari_ngajar"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "jam_ngajar"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "matapelajaran"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "kelas"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "no_kikd"), "html", null, true);
            echo "</small></td>
                                <td><small>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "pokok_pembahasan"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "status_selesai"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "ket_absen_siswa"), "html", null, true);
            echo "</small></td>
                                <td style=\"display:none;\"><small>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "keterangan"), "html", null, true);
            echo "</small></td>
                            
                                <td id=\"hapus2\">
                                    <div class=\"btn-group\">
                        
                                        <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, site_url("absenjurnal/detail"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_delete"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-search-plus\"></i> Detail</a>
                                        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, site_url("absenjurnal/edit"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-edit\"></i> Edit</a>
                                        <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, site_url("absenjurnal/delete"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "mapel_ajar_id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aj"]) ? $context["aj"] : null), "t_delete"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, enurl_redirect(current_url()), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" onclick=\"return confirm('Anda yakin ingin menghapus?')\"><i class=\"fas fa-trash\"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                        -->
                        </tbody>
                        <tfoot>
                        <!--
                        <tr style=\"display:none;\">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        -->
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer\">
                ";
        // line 145
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.row (main row) -->
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "list-presensikehadiran.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 145,  296 => 126,  277 => 121,  271 => 120,  263 => 119,  255 => 114,  251 => 113,  247 => 112,  243 => 111,  239 => 110,  235 => 109,  231 => 108,  225 => 107,  221 => 106,  217 => 105,  213 => 104,  210 => 103,  206 => 102,  202 => 100,  196 => 96,  194 => 95,  191 => 94,  182 => 90,  172 => 88,  170 => 87,  164 => 86,  156 => 85,  149 => 81,  145 => 80,  141 => 79,  137 => 78,  133 => 77,  129 => 76,  125 => 75,  122 => 74,  118 => 73,  80 => 38,  71 => 32,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
