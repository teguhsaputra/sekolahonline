<?php

/* detail-jawaban-essay.html */
class __TwigTemplate_06bccedf36bd1100ccf99f848ee2c22ec98acfea18e577f67d3717521f224a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["set_layout"]) ? $context["set_layout"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 2
            $context["set_layout"] = "layout-print.html";
        } else {
            // line 4
            $context["set_layout"] = "layout-iframe.html";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container p-2\">
    ";
        // line 10
        if (twig_test_empty((isset($context["mode"]) ? $context["mode"] : null))) {
            // line 11
            echo "        <a class=\"btn btn-primary float-right btn-sm\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, site_url((((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "?mode=print")), "html", null, true);
            echo "\">Print</a>
    ";
        }
        // line 13
        echo "    
    ";
        // line 14
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 15
            echo "        <h3>Koreksi Jawaban</h3>
    ";
        } else {
            // line 17
            echo "        <h3>Detail Jawaban</h3>
    ";
        }
        // line 19
        echo "    
    ";
        // line 20
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 21
            echo "    <table class=\"table table-condensed table-striped\">
        <tbody>
            <tr>
                <td><b>Nis</b></td>
                <td>: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td>: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Kelas</b></td>
                <td>: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Tugas</b></td>
                <td>: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    ";
        }
        // line 43
        echo "    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>Tgl Mengerjakan</th>
                <th>Tgl Selesai</th>
                <th>Lama Pengerjaan</th>
                ";
        // line 50
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 51
            echo "                <th>Nilai</th>
                ";
        }
        // line 53
        echo "            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "mulai")), "html", null, true);
        echo "</td>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "tgl_submit")), "html", null, true);
        echo "</td>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "total_waktu"), "html", null, true);
        echo "</td>
                ";
        // line 60
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 61
            echo "                <th>";
            echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["nilai"]) ? $context["nilai"] : null), "nilai"), 2), "html", null, true);
            echo "</th>
                ";
        }
        // line 63
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
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "ip"), "html", null, true);
        echo "</td>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "agent_string"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    
    ";
        // line 84
        echo form_open(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")));
        echo "
    <table class=\"table table-condensed\">
        <thead>
            <tr>
                <th colspan=\"2\">List Jawaban</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 93
            echo "            <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                <td style=\"width:30px;\">
                    <b>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ".</b>
                </td>
                <td>
                    <div class=\"pertanyaan\">
                        ";
            // line 99
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                    </div>
    
                    <b>Jawaban :</b>
                    ";
            // line 103
            echo get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
            echo "
    
                    <p><b>Nilai :</b></p>
                    ";
            // line 106
            if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
                // line 107
                echo "                        <b>";
                echo twig_escape_filter($this->env, get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), "html", null, true);
                echo "</b>
                    ";
            } else {
                // line 109
                echo "                        <input type=\"text\" name=\"nilai[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "]\" class=\"form-control\" style=\"width:70px;\" value=\"";
                echo twig_escape_filter($this->env, get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), "html", null, true);
                echo "\">
                    ";
            }
            // line 111
            echo "                </td>
            </tr>
    
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        </tbody>
    </table>
    <hr>
    ";
        // line 118
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 119
            echo "    <button class=\"btn btn-primary\" type=\"submit\">Simpan Nilai</button>
    ";
        } else {
            // line 121
            echo "    <button class=\"btn btn-primary\" type=\"submit\">Update Nilai</button>
    ";
        }
        // line 123
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-jawaban-essay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 123,  270 => 121,  266 => 119,  264 => 118,  259 => 115,  242 => 111,  234 => 109,  228 => 107,  226 => 106,  220 => 103,  213 => 99,  206 => 95,  200 => 93,  183 => 92,  172 => 84,  163 => 78,  159 => 77,  143 => 63,  137 => 61,  135 => 60,  131 => 59,  127 => 58,  123 => 57,  117 => 53,  113 => 51,  111 => 50,  102 => 43,  93 => 37,  86 => 33,  79 => 29,  72 => 25,  66 => 21,  64 => 20,  61 => 19,  57 => 17,  53 => 15,  51 => 14,  48 => 13,  42 => 11,  40 => 10,  37 => 9,  34 => 8,  28 => 4,  25 => 2,  23 => 1,);
    }
}
