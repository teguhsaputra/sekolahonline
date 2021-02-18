<?php

/* pantau-jawaban-sementara.html */
class __TwigTemplate_56f92139ac84035667c42ceca27b6273030ae5b11b03f239cc5e5155d637885e extends Twig_Template
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
        echo "<div class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-12\">
        <h1 class=\"m-0 text-dark\">Jawaban Sementara</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

";
        // line 14
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
            // line 15
            echo "<div class=\"container bg-light\">
    <div class=\"row\">
    <table class=\"table table-condensed table-bordered\">
        <thead>
            <tr>
                <th>Jml soal</th>
                <th>Benar</th>
                <th>Salah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, count((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null)), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["jml_benar"]) ? $context["jml_benar"] : null), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["jml_salah"]) ? $context["jml_salah"] : null), "html", null, true);
            echo "</td>
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
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
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
                // line 43
                echo "            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                <td style=\"width:30px;\">
                    <b>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b>
                    <br>
                    ";
                // line 47
                if ((get_jawaban((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) == get_kunci_pilihan($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan")))) {
                    // line 48
                    echo "                    <span class=\"text-error\"><i class=\"fas fa-check\"></i></span>
                    ";
                } else {
                    // line 50
                    echo "                    <span class=\"text-error\"><i class=\"fas fa-remove\"></i></span>
                    ";
                }
                // line 52
                echo "                </td>
                <td>
                    <div class=\"pertanyaan\">
                        ";
                // line 55
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                    </div>
    
                    <div id=\"pilihan-";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                        <table class=\"table table-condensed table-striped\">
                            <tbody>
                                ";
                // line 61
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                        // line 62
                        echo "                                <tr>
                                    <td style=\"width:15px;\"><b>";
                        // line 63
                        echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                        echo "</b></td>
                                    <td>
                                        ";
                        // line 65
                        echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                        echo "
    
                                        <ul class=\"unstyled inline\" style=\"margin-bottom: 0px;margin-left: -5px;\">
                                            ";
                        // line 68
                        if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                            // line 69
                            echo "                                                <li><small class=\"text-warning\"><i class=\"icon icon-star\"></i> Kunci Jawaban</small></li>
                                            ";
                        }
                        // line 71
                        echo "                                            ";
                        if ((is_pilih((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) == true)) {
                            // line 72
                            echo "                                                <li><small class=\"text-success\"><i class=\"icon-hand-up\"></i> Jawaban Siswa</small></li>
                                            ";
                        }
                        // line 74
                        echo "                                        </ul>
                                    </td>
                                </tr>
                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
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
            // line 86
            echo "        </tbody>
    </table>
    
    ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) {
            // line 90
            echo "    
    <table class=\"table table-condensed table-striped\">
        <thead>
            <tr>
                <th>Jml soal</th>
                <th>Terjawab</th>
                <th>Kosong</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, count((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null)), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["jml_terjawab"]) ? $context["jml_terjawab"] : null), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["jml_kosong"]) ? $context["jml_kosong"] : null), "html", null, true);
            echo "</td>
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
            // line 116
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
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
                // line 117
                echo "            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                <td style=\"width:30px;\">
                    <b>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b>
                </td>
                <td>
                    <div class=\"pertanyaan\">
                        ";
                // line 123
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                    </div>
    
                    <b>Jawaban :</b>
                    ";
                // line 127
                echo get_jawaban((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
                echo "
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
            // line 132
            echo "        </tbody>
    </table>
    </div>
</div>
";
        }
        // line 137
        echo "
";
    }

    public function getTemplateName()
    {
        return "pantau-jawaban-sementara.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 137,  300 => 132,  281 => 127,  274 => 123,  267 => 119,  261 => 117,  244 => 116,  228 => 103,  224 => 102,  220 => 101,  207 => 90,  201 => 86,  180 => 78,  170 => 74,  166 => 72,  163 => 71,  159 => 69,  157 => 68,  151 => 65,  146 => 63,  143 => 62,  138 => 61,  132 => 58,  126 => 55,  121 => 52,  117 => 50,  113 => 48,  111 => 47,  106 => 45,  100 => 43,  83 => 42,  67 => 29,  63 => 28,  59 => 27,  45 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
