<?php

/* detail-jawaban-ganda.html */
class __TwigTemplate_5e63717e47f71e2fed73b42dfafbc7c4b6dca9a2b679b6e87b7127ae9a6b3492 extends Twig_Template
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
        echo "    <h3>Detail Jawaban</h3>
    
    ";
        // line 15
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 16
            echo "    <table class=\"table table-condensed table-striped\">
        <tbody>
            <tr>
                <td><b>Nis</b></td>
                <td>: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Kelas</b></td>
                <td>: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td><b>Tugas</b></td>
                <td>: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    ";
        }
        // line 38
        echo "    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>Tgl Mengerjakan</th>
                <th>Tgl Selesai</th>
                <th>Lama Pengerjaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "mulai")), "html", null, true);
        echo "</td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "tgl_submit")), "html", null, true);
        echo "</td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "total_waktu"), "html", null, true);
        echo "</td>
            </tr>
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
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "ip"), "html", null, true);
        echo "</td>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "agent_string"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>
    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>Jml soal</th>
                <th>Jml benar</th>
                <th>Jml salah</th>
                <th>Jml kosong</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 85
        echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")), "html", null, true);
        echo "</td>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar"), "html", null, true);
        echo "</td>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah"), "html", null, true);
        echo "</td>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, (((count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")) != ($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar") + $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah")))) ? ((count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")) - ($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar") + $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah")))) : (0)), "html", null, true);
        echo "</td>
                <td><b>";
        // line 89
        echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), 2), "html", null, true);
        echo "</b></td>
            </tr>
        </tbody>
    </table>
    <br>
    
    <table class=\"table table-condensed\">
        <thead>
            <tr>
                <th colspan=\"2\">List Jawaban</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 102
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
            // line 103
            echo "            <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                <td style=\"width:30px;\">
                    <b>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ".</b>
                    <br>
                    ";
            // line 107
            if ((get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) == get_kunci_pilihan($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan")))) {
                // line 108
                echo "                    <span class=\"text-error\"><i class=\"icon icon-ok\"></i></span>
                    ";
            } else {
                // line 110
                echo "                    <span class=\"text-error\"><i class=\"icon icon-remove\"></i></span>
                    ";
            }
            // line 112
            echo "                </td>
                <td>
                    <div class=\"pertanyaan\">
                        ";
            // line 115
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                    </div>
    
                    <div id=\"pilihan-";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                        <table class=\"table table-condensed table-striped\">
                            <tbody>
                                ";
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
            foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                    // line 122
                    echo "                                <tr>
                                    <td style=\"width:15px;\"><b>";
                    // line 123
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo "</b></td>
                                    <td>
                                        ";
                    // line 125
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    echo "
    
                                        <ul class=\"unstyled inline\" style=\"margin-bottom: 0px;margin-left: -5px;\">
                                            ";
                    // line 128
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 129
                        echo "                                                <li><small class=\"text-warning\"><i class=\"icon icon-star\"></i> Kunci Jawaban</small></li>
                                            ";
                    }
                    // line 131
                    echo "                                            ";
                    if ((is_pilih($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) == true)) {
                        // line 132
                        echo "                                                <li><small class=\"text-success\"><i class=\"icon-hand-up\"></i> Jawaban Siswa</small></li>
                                            ";
                    }
                    // line 134
                    echo "                                        </ul>
                                    </td>
                                </tr>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                            </tbody>
                        </table>
                    </div>
    
                </td>
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
        // line 146
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-jawaban-ganda.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 146,  283 => 138,  273 => 134,  269 => 132,  266 => 131,  262 => 129,  260 => 128,  254 => 125,  249 => 123,  246 => 122,  241 => 121,  235 => 118,  229 => 115,  224 => 112,  220 => 110,  216 => 108,  214 => 107,  209 => 105,  203 => 103,  186 => 102,  170 => 89,  166 => 88,  162 => 87,  158 => 86,  154 => 85,  133 => 67,  129 => 66,  111 => 51,  107 => 50,  103 => 49,  90 => 38,  81 => 32,  74 => 28,  67 => 24,  60 => 20,  54 => 16,  52 => 15,  48 => 13,  42 => 11,  40 => 10,  37 => 9,  34 => 8,  28 => 4,  25 => 2,  23 => 1,);
    }
}
