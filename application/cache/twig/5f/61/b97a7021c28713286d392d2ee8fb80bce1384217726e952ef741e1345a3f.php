<?php

/* pp-jadwal-pengajar.html */
class __TwigTemplate_5f61b97a7021c28713286d392d2ee8fb80bce1384217726e952ef741e1345a3f extends Twig_Template
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
        echo "Jadwal Mengajar - ";
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
        <h1>Jadwal Mengajar</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Jadwal Mengajar</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-10 col-md-10 col-xs-12 p-3\" id=\"popLihat\">
        <div class=\"card card-default\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr bgcolor=\"#fbfbfb\">
                                <th>HARI</th>
                                <th>MATAPELAJARAN DAN JAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(get_indo_hari());
        foreach ($context['_seq'] as $context["hari_id"] => $context["h"]) {
            // line 38
            echo "                            <tr>
                                <th width=\"15%\">";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "</th>
                                <td>
                                    ";
            // line 41
            echo anchor(((((("pengajar/add_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . (isset($context["hari_id"]) ? $context["hari_id"] : null)), "Tambah", array("class" => "pengajar-iframe btn btn-small btn-primary", "title" => ("Tambah jadwal hari " . (isset($context["h"]) ? $context["h"] : null))));
            echo "
                                    ";
            // line 42
            $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => (isset($context["hari_id"]) ? $context["hari_id"] : null), 1 => $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"), 2 => null));
            // line 43
            echo "                                    ";
            if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
                // line 44
                echo "                                    <table style=\"margin-top:10px;\" class=\"table table-striped\">
                                        ";
                // line 45
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                    // line 46
                    echo "                                            ";
                    $context["mk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                    // line 47
                    echo "                                            ";
                    $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id")));
                    // line 48
                    echo "                                            ";
                    $context["m"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "mapel_id")));
                    // line 49
                    echo "                                            <tr>
                                                ";
                    // line 50
                    echo ((($this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "aktif") == 0)) ? ("<td class=\"error text-danger\"><i class=\"fas fa-times\"></i> Tidak Aktif</td>") : ("<td class=\"info text-success\"><i class=\"fas fa-check\"></i> Aktif</td>"));
                    echo "
                                                <td width=\"20%\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                    echo "</td>
                                                <td width=\"20%\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "</td>
                                                <td width=\"15%\">
                                                    ";
                    // line 55
                    echo anchor(((((("pengajar/edit_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id")), "<i class=\"fas fa-edit\"></i> Edit", array("title" => "Edit Jadwal Ajar", "class" => "pengajar-iframe-6"));
                    echo "
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                    </table>
                                    ";
            }
            // line 61
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hari_id'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pp-jadwal-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  149 => 61,  145 => 59,  135 => 55,  130 => 53,  126 => 52,  120 => 51,  116 => 50,  113 => 49,  110 => 48,  107 => 47,  104 => 46,  100 => 45,  97 => 44,  94 => 43,  92 => 42,  88 => 41,  83 => 39,  80 => 38,  76 => 37,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
