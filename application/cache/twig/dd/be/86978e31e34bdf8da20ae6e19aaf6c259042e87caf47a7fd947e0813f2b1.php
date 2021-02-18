<?php

/* pp-siswa.html */
class __TwigTemplate_ddbe86978e31e34bdf8da20ae6e19aaf6c259042e87caf47a7fd947e0813f2b1 extends Twig_Template
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
        echo "<div class=\"card card-default m-4\">
    <div class=\"card-header\">
        <strong>Profil Publik</strong>
        ";
        // line 11
        if (is_admin()) {
            // line 12
            echo "        <div class=\"btn-group float-right\" style=\"margin-top:-4px;\">
            ";
            // line 13
            echo anchor(((("siswa/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4 btn btn-small btn-primary", "title" => "Edit Profil Siswa"));
            echo "
            ";
            // line 14
            echo anchor(((("siswa/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5 btn btn-small btn-primary", "title" => "Edit Foto Siswa"));
            echo "
        </div>
        ";
        }
        // line 17
        echo "    </div>
    <div class=\"card-body\">
        <table class=\"table\">
            <tr>
                <th bgcolor=\"#FBFBFB\" width=\"25%\" style=\"border-top: 0px;\">NIS</th>
                <td style=\"border-top: 0px;\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
        echo "</td>
                <td rowspan=\"5\" width=\"15%\" style=\"border-top: 0px;\">
                    <img style=\"width:113px;\" class=\"img-polaroid\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "foto"), "medium", $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
                </td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Nama</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Jenis Kelamin</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Tahun Masuk</th>
                <td colspan=\"2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tahun_masuk"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Tempat Lahir</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Tanggal Lahir</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Agama</th>
                <td colspan=\"2\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "agama"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Alamat</th>
                <td colspan=\"2\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "alamat"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th bgcolor=\"#FBFBFB\">Status</th>
                <td colspan=\"2\">
                    ";
        // line 58
        if (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 0)) {
            // line 59
            echo "                        Pending
                    ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 1)) {
            // line 61
            echo "                        Aktif
                    ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 2)) {
            // line 63
            echo "                        Blocking
                    ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 3)) {
            // line 65
            echo "                        Alumni
                    ";
        }
        // line 67
        echo "                </td>
            </tr>
        </table>
    </div>
</div>

<div class=\"row-fluid\">
    <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <div class=\"card card-default m-3\" id=\"riwayat-kelas\">
            <div class=\"card-header\">
                <strong>Riwayat Kelas</strong>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th width=\"5%\">No</th>
                        <th>Kelas</th>
                        ";
        // line 85
        if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
            // line 86
            echo "                            <th>Aktif</th>
                        ";
        }
        // line 88
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["siswa_kelas"]) ? $context["siswa_kelas"] : null), "results"));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 92
            echo "                    <tr>
                        <td>";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : null), "html", null, true);
            echo ".</td>
                        <td>
                            ";
            // line 95
            echo twig_escape_filter($this->env, get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_id"), 1 => true), "nama"), "html", null, true);
            echo "
                        </td>
                        ";
            // line 97
            if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
                // line 98
                echo "                        <td>
                            ";
                // line 99
                if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "aktif") == 1)) {
                    // line 100
                    echo "                                <i class=\"fas fa-check\"></i>
                            ";
                }
                // line 102
                echo "                        </td>
                        ";
            }
            // line 104
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 111
        if (is_admin()) {
            // line 112
            echo "    <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <div class=\"card card-default m-3\" id=\"akun\">
            <div class=\"card-header\">
                <strong>Akun Login</strong>
                
                <div class=\"btn-group float-right\" style=\"margin-top:-4px;\">
                    ";
            // line 118
            echo anchor(((("siswa/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2 btn btn-small btn-primary", "title" => "Edit Username Siswa"));
            echo "
                    ";
            // line 119
            echo anchor(((("siswa/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3 btn btn-small btn-primary", "title" => "Edit Password Siswa"));
            echo "
                </div>
                
            </div>
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th width=\"30%\" bgcolor=\"#FBFBFB\" style=\"border-top: 0px;\">Username</th>
                            <td style=\"border-top: 0px;\">
                                ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "username"), "html", null, true);
            echo "
                            </td>
                        </tr>
                        <tr>
                            <th bgcolor=\"#FBFBFB\">Password</th>
                            <td>
                                *********
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 144
        echo "</div>

";
        // line 146
        if (((isset($context["show"]) ? $context["show"] : null) == "edit-password")) {
            // line 147
            echo "<input type=\"hidden\" id=\"siswa-edit-password\" value=\"1\">
";
        }
    }

    public function getTemplateName()
    {
        return "pp-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 147,  276 => 146,  272 => 144,  254 => 129,  241 => 119,  237 => 118,  229 => 112,  227 => 111,  220 => 106,  213 => 104,  209 => 102,  205 => 100,  203 => 99,  200 => 98,  198 => 97,  193 => 95,  188 => 93,  185 => 92,  181 => 91,  176 => 88,  172 => 86,  170 => 85,  150 => 67,  146 => 65,  142 => 63,  138 => 61,  134 => 59,  132 => 58,  124 => 53,  117 => 49,  110 => 45,  103 => 41,  96 => 37,  89 => 33,  82 => 29,  74 => 24,  69 => 22,  62 => 17,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
