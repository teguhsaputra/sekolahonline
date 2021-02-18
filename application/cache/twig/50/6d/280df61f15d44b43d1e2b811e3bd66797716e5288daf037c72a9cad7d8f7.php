<?php

/* jadwal-mapel.html */
class __TwigTemplate_506d280df61f15d44b43d1e2b811e3bd66797716e5288daf037c72a9cad7d8f7 extends Twig_Template
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
        echo "Profilku - ";
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
        <h1>Jadwal Matapelajaran</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Jadwal Matapelajaran</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\" id=\"popTambah\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Tanggal : ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["hari_ini"]) ? $context["hari_ini"] : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["tanggal"]) ? $context["tanggal"] : null), "html", null, true);
        echo "
                </h3>
            </div>
            <!-- /.card-header -->
            <div class=\"card-body pad table-responsive\">
                <table class=\"table table-responsive\">
                    <tbody>
                        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_jadwal"]) ? $context["list_jadwal"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["lj"]) {
            // line 38
            echo "                        <tr>
                            <td><b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "nama_hari"), "html", null, true);
            echo "</b></td>
                            <td>
                                ";
            // line 41
            if ((!twig_test_empty($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal")))) {
                // line 42
                echo "                                <table class=\"table table-bordered\">
                                    <tbody>
                                        ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal"));
                foreach ($context['_seq'] as $context["_key"] => $context["jd"]) {
                    // line 45
                    echo "                                        <tr>
                                            <td width=\"5%\">";
                    // line 46
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo "</td>
                                            <td width=\"2%\">-</td>
                                            <td width=\"5%\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                            <td width=\"30%\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "mapel"), "nama"), "html", null, true);
                    echo "</td>
                                            <td>Pengajar : ";
                    // line 50
                    echo anchor($this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "link_profil"), $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "nama"));
                    echo "</td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                    </tbody>
                                </table>
                                ";
            }
            // line 56
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <strong>Jadwal Matapelajaran</strong>
    </div>
    <div class=\"panel-body\">
        <table class=\"table\">
            <tbody>
                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_jadwal"]) ? $context["list_jadwal"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["lj"]) {
            // line 74
            echo "                <tr>
                    <td ";
            // line 75
            echo ((((isset($context["key"]) ? $context["key"] : null) == 1)) ? ("style=\"border-top: 0px;\"") : (""));
            echo " width=\"15%\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "nama_hari"), "html", null, true);
            echo "</b></td>
                    <td ";
            // line 76
            echo ((((isset($context["key"]) ? $context["key"] : null) == 1)) ? ("style=\"border-top: 0px;\"") : (""));
            echo ">
                        ";
            // line 77
            if ((!twig_test_empty($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal")))) {
                // line 78
                echo "                        <table class=\"table table-condensed\">
                            <tbody>
                                ";
                // line 80
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal"));
                foreach ($context['_seq'] as $context["_key"] => $context["jd"]) {
                    // line 81
                    echo "                                <tr class=\"success\">
                                    <td width=\"5%\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo "</td>
                                    <td width=\"2%\">-</td>
                                    <td width=\"5%\">";
                    // line 84
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                    <td width=\"30%\">";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "mapel"), "nama"), "html", null, true);
                    echo "</td>
                                    <td>Pengajar : ";
                    // line 86
                    echo anchor($this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "link_profil"), $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "nama"));
                    echo "</td>
                                </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                            </tbody>
                        </table>
                        ";
            }
            // line 92
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            </tbody>
        </table>
    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "jadwal-mapel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 95,  214 => 92,  209 => 89,  200 => 86,  196 => 85,  192 => 84,  187 => 82,  184 => 81,  180 => 80,  176 => 78,  174 => 77,  170 => 76,  164 => 75,  161 => 74,  157 => 73,  141 => 59,  133 => 56,  128 => 53,  119 => 50,  115 => 49,  111 => 48,  106 => 46,  103 => 45,  99 => 44,  95 => 42,  93 => 41,  88 => 39,  85 => 38,  81 => 37,  69 => 30,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
