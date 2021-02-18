<?php

/* pp-pengajar.html */
class __TwigTemplate_a57029d76ff40e0c9207668e96723f2b6971e282fe08a2cc8580b1856b3ba935 extends Twig_Template
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
        echo "<div class=\"justify-content-center\">
    <div class=\"col-lg-12 p-3\" id=\"popLihat\">
        <div class=\"card card-default\">
            <div class=\"card-header\">
                <strong>Profil Publik ";
        // line 12
        echo ((($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "is_admin") == 1)) ? ("<label class=\"label label-warning\">Administrator</label>") : (""));
        echo "</strong>
                <div class=\"btn-group float-right\" style=\"margin-top:-4px;\">
                    ";
        // line 14
        echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-7 btn btn-sm btn-primary", "title" => "Edit Profil Pengajar"));
        echo "
                    ";
        // line 15
        echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 btn btn-sm btn-info", "title" => "Edit Foto Pengajar"));
        echo "
                </div>
            </div>
            
            <div class=\"card-body\">
                <table class=\"table\">
                    <tr>
                        <th bgcolor=\"#FBFBFB\" width=\"25%\" style=\"border-top: 0px;\">NIP</th>
                        <td style=\"border-top: 0px;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nip"), "html", null, true);
        echo "</td>
                        <td rowspan=\"5\" width=\"15%\" style=\"border-top: 0px;\">
                            <img style=\"width:113px;\" class=\"img-polaroid\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Nama</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Jenis Kelamin</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tempat Lahir</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tanggal Lahir</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Alamat</th>
                        <td colspan=\"2\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Status</th>
                        <td colspan=\"2\">
                            ";
        // line 51
        if (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 0)) {
            // line 52
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 1)) {
            // line 54
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 2)) {
            // line 56
            echo "                                Blocking
                            ";
        }
        // line 58
        echo "                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class=\"col-lg-5 col-md-8 col-xs-12 pl-3\">
        <div class=\"card card-default\" id=\"akun\">
            <div class=\"card-header\">
                <strong>Akun Login</strong>
                <div class=\"btn-group float-right flex-wrap\" style=\"margin-top:-4px;\">
                    ";
        // line 70
        if (is_admin()) {
            // line 71
            echo "                    ";
            echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 btn btn-sm btn-primary", "title" => "Edit Username pengajar"));
            echo "
                    ";
        }
        // line 73
        echo "                    ";
        echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 btn btn-sm btn-info", "title" => "Edit Password pengajar"));
        echo "
                </div>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        ";
        // line 79
        if (is_admin()) {
            // line 80
            echo "                        <tr>
                            <th width=\"30%\" bgcolor=\"#FBFBFB\" style=\"border-top: 0px;\">Username</th>
                            <td style=\"border-top: 0px;\">
                                ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "username"), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        // line 87
        echo "                        <tr>
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
</div>
";
    }

    public function getTemplateName()
    {
        return "pp-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 87,  170 => 83,  165 => 80,  163 => 79,  153 => 73,  147 => 71,  145 => 70,  131 => 58,  127 => 56,  123 => 54,  119 => 52,  117 => 51,  109 => 46,  102 => 42,  95 => 38,  88 => 34,  81 => 30,  73 => 25,  68 => 23,  57 => 15,  53 => 14,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
