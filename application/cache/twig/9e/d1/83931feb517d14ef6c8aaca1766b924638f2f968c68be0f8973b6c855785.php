<?php

/* detail-jawaban-upload.html */
class __TwigTemplate_9ed183931feb517d14ef6c8aaca1766b924638f2f968c68be0f8973b6c855785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container p-2\">
    ";
        // line 5
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 6
            echo "        <h3>Koreksi Jawaban</h3>
    ";
        } else {
            // line 8
            echo "        <h3>Detail Jawaban</h3>
    ";
        }
        // line 10
        echo "    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>Tgl Mengerjakan</th>
                ";
        // line 15
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 16
            echo "                <th>Nilai</th>
                ";
        }
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "mulai")), "html", null, true);
        echo "</td>
                ";
        // line 23
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 24
            echo "                <th>";
            echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["nilai"]) ? $context["nilai"] : null), "nilai"), 2), "html", null, true);
            echo "</th>
                ";
        }
        // line 26
        echo "            </tr>
        </tbody>
    </table>
    <br>
    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>IP</th>
                <th>Agent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "ip"), "html", null, true);
        echo "</td>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "agent_string"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    
    ";
        // line 47
        echo form_open(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")));
        echo "
    <b>File upload</b>
    <table class=\"table table-condensed table-striped\">
        <tbody>
            <tr>
                <th>Name</th>
                <td><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, base_url(("userfiles/files/" . $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"))), "html", null, true);
        echo "\" target=\"_tab\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"), "html", null, true);
        echo "</a></td>
            </tr>
            <tr>
                <th>Server Path</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "server_path"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, byte_format($this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "size")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modified</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, mdate("%d %F %Y %H:%i", $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "date")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mime</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "mime"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    <b>Nilai :</b>
    <br>
    <input type=\"text\" name=\"nilai\" class=\"form-control\" style=\"width:70px;\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nilai"]) ? $context["nilai"] : null), "nilai"), "html", null, true);
        echo "\">
    
    <hr style=\"margin-top: 5px;\">
    ";
        // line 79
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 80
            echo "    <button class=\"btn btn-primary\" type=\"submit\">Simpan Nilai</button>
    ";
        } else {
            // line 82
            echo "    <button class=\"btn btn-primary\" type=\"submit\">Update Nilai</button>
    ";
        }
        // line 84
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-jawaban-upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 84,  165 => 82,  161 => 80,  159 => 79,  153 => 76,  143 => 69,  136 => 65,  129 => 61,  122 => 57,  113 => 53,  104 => 47,  95 => 41,  91 => 40,  75 => 26,  69 => 24,  67 => 23,  63 => 22,  57 => 18,  53 => 16,  51 => 15,  44 => 10,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
