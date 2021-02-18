<?php

/* ujian-online.html */
class __TwigTemplate_05a64897fee5bb54ea9e06f4fbb16f094fd9ff8bbf56322c850a937526ded41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-ujian.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-ujian.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

<div id=\"wrap\">
    <div class=\"container bg-light\">
        <div class=\"row\">
            <table class=\"table table-striped\">
                <tr>
                    <td class=\"col-2\"><b>Tugas</b></td>
                    <td class=\"col-1\"><b>:</b></td>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td class=\"col-1\"><b>:</b></td>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Kelas</b></td>
                    <td class=\"col-1\"><b>:</b></td>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["kelas_aktif"]) ? $context["kelas_aktif"] : null), "html", null, true);
        echo "</td>
                </tr>
                <!--
                <tr>
                    <td><b>Informasi Tugas</b></td>
                    <td class=\"col-1\"><b>:</b></td>
                    <td>";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "info");
        echo "</td>
                </tr>
                -->
                ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 37
            echo "                <tr>
                    <td><b>Waktu</b></td>
                    <td class=\"col-1\"><b>:</b></td>
                    <td>
                        <div class=\"clock\">
                            <div class=\"box-show-hide-countdown\">
                                ";
            // line 43
            $context["hide_countdown"] = sess_hide_countdown("get", $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"));
            // line 44
            echo "                                ";
            if (((isset($context["hide_countdown"]) ? $context["hide_countdown"] : null) == 1)) {
                // line 45
                echo "                                    <a href=\"javascript:void(0)\" onclick=\"show_countdown()\" class=\"text-muted\"><i class=\"icon icon-eye-open\"></i> TAMPILKAN TIMER</a>
                                ";
            } else {
                // line 47
                echo "                                    <a href=\"javascript:void(0)\" onclick=\"hide_countdown()\" class=\"text-muted\"><i class=\"icon icon-eye-close\"></i> SEMBUNYIKAN TIMER</a>
                                ";
            }
            // line 49
            echo "                            </div>
                            <div class=\"iosl-theme-wrapper countdown\" ";
            // line 50
            echo ((((isset($context["hide_countdown"]) ? $context["hide_countdown"] : null) == 1)) ? ("style=\"display:none;\"") : (""));
            echo ">
                                <div class=\"iosl-theme\">
                                    <ul>
                                        <li><p><span><em><b class=\"hours\">00</b><i class=\"hoursSlider\"><u>00</u><u>00</u></i></em></span></p></li>
                                        <li><p><span><em><b class=\"minutes\">00</b><i class=\"minutesSlider\"><u>00</u><u>00</u></i></em></span></p></li>
                                        <li><p><span><em><b class=\"seconds\">00</b><i class=\"secondsSlider\"><u>00</u><u>00</u></i></em></span></p></li>
                                    </ul>
                                    <div class=\"jC-clear\"></div>
                                    <p class=\"jCtext\">
                                        <span><em class=\"textSeconds\">SECONDS</em></span>
                                        <span><em class=\"textMinutes\">MINUTES</em></span>
                                        <span><em class=\"textHours\">HOURS</em></span>
                                    </p>
                                    <div class=\"jC-clear\"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        }
        // line 70
        echo "            </table>
        </div>
    </div>
    <div class=\"container bg-light p-3\">
        <div class=\"row\">
            ";
        // line 75
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 1)) {
            // line 76
            echo "            <div class=\"col-12\">
                <p><b>Upload File : </b></p>
                <div class=\"well well-sm p-3\">
                    ";
            // line 79
            echo form_open_multipart(((("tugas/submit_upload/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")));
            echo "
                    <input type=\"file\" name=\"userfile\">
                    <hr class=\"hr1\">
                    <div class=\"row-fluid\">
                        <div class=\"col-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
                        </div>
                        <div class=\"col-9\">
                            <code>";
            // line 87
            echo get_flashdata("upload");
            echo "</code>
                        </div>
                    </div>
                    ";
            // line 90
            echo form_close();
            echo "
                </div>
            </div>
            ";
        }
        // line 94
        echo "        
        ";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) {
            // line 96
            echo "            <div class=\"col-12\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th width=\"5%\">No</th>
                            <th>Pertanyaan ";
            // line 101
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 105
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
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
                // line 106
                echo "                        <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                            <td><b>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b></td>
                            <td>
                                <div class=\"pertanyaan\">
                                    ";
                // line 110
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                                </div>
    
                                <div id=\"pilihan-";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                    <table class=\"table table-striped\">
                                        <tbody>
                                            ";
                // line 116
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                        // line 117
                        echo "                                            <tr>
                                                <td width=\"5%\"><label class=\"form-check-label ml-3\"><input ";
                        // line 118
                        echo ((is_pilih($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))) ? ("checked") : (""));
                        echo " type=\"radio\" name=\"pilihan-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan"), "html", null, true);
                        echo "\" onclick=\"update_ganda(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"), "html", null, true);
                        echo ")\" class=\"form-check-input\" /> ";
                        echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                        echo "</label></td>
                                                <td>
                                                    ";
                        // line 120
                        echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                        echo "
                                                </td>
                                            </tr>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                                        </tbody>
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
            // line 131
            echo "                    </tbody>
                </table>
    
                <div class=\"well well-sm p-3\">
                    <p class=\"p-info\">Periksa kembali jawaban anda sebelum mengahiri pengerjaan tugas ini.</p>
                    <button type=\"button\" class=\"btn btn-large btn-primary\" data-toggle=\"modal\" data-target=\"#selesai-mengerjakan\">
                        Selesai Mengerjakan
                    </button>
                </div>
    
                <div class=\"modal fade\" id=\"selesai-mengerjakan\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                Anda yakin ingin mengahiri pengerjaan tugas ini?
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nanti dulu</button>
                                <a class=\"btn btn-primary\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\" id=\"btn-submit\">Ya, saya sudah selesai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"float bg-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\"><i class=\"fa fa-sort-numeric-down my-float medium\" style=\"font-size:20px;\"></i></a>
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nomor Soal</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 166
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
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
                // line 167
                echo "                        <a href=\"#pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" class=\"ngitung\"><span class=\"btn btn-default m-1\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</span></a>
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
            // line 169
            echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 177
        echo "

        ";
        // line 179
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 2)) {
            // line 180
            echo "            <div class=\"col-12\">
                ";
            // line 181
            echo form_open(((("tugas/submit_essay/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")), array("id" => "form-essay"));
            echo "
                <input type=\"hidden\" id=\"str_id\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "str_id"), "html", null, true);
            echo "\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th width=\"5%\">No</th>
                            <th>Pertanyaan ";
            // line 187
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 191
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
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
                // line 192
                echo "                        <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                            <td><b>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b></td>
                            <td>
                                <div class=\"pertanyaan\">
                                    ";
                // line 196
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                                </div>
    
                                <textarea name=\"jawaban[";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "]\" id=\"jawaban-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" class=\"texteditor\">";
                echo get_jawaban($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
                echo "</textarea>
    
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
            // line 204
            echo "                    </tbody>
                </table>
    
                <div class=\"well well-sm p-3\">
                    <p class=\"p-info\">Periksa kembali jawaban anda sebelum mengahiri pengerjaan tugas ini.</p>
                    <button type=\"button\" class=\"btn btn-large btn-primary\" data-toggle=\"modal\" data-target=\"#selesai-mengerjakan\">
                        Selesai Mengerjakan
                    </button>
                </div>
                ";
            // line 213
            echo form_close();
            echo "
    
                <div class=\"modal fade\" id=\"selesai-mengerjakan\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                Anda yakin ingin mengahiri pengerjaan tugas ini?
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nanti dulu</button>
                                <button type=\"button\" class=\"btn btn-primary\" id=\"btn-submit\">Ya, saya sudah selesai</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 230
        echo "        
        </div>
    </div>            
</div>
";
        // line 234
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 235
            echo "<input type=\"hidden\" id=\"process-submit\" value=\"0\">
<input type=\"hidden\" id=\"tugas_id\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"type_id\" value=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"sisa_menit\" value=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sisa_menit"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"finish_url\" value=\"";
            // line 239
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"siswa_id\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, get_sess_data("user", "id"), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "ujian-online.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 240,  512 => 239,  508 => 238,  504 => 237,  500 => 236,  497 => 235,  495 => 234,  489 => 230,  469 => 213,  458 => 204,  435 => 199,  429 => 196,  423 => 193,  418 => 192,  401 => 191,  394 => 187,  386 => 182,  382 => 181,  379 => 180,  377 => 179,  373 => 177,  363 => 169,  344 => 167,  327 => 166,  307 => 149,  287 => 131,  267 => 124,  256 => 120,  239 => 118,  236 => 117,  231 => 116,  225 => 113,  219 => 110,  213 => 107,  208 => 106,  191 => 105,  184 => 101,  177 => 96,  175 => 95,  172 => 94,  165 => 90,  159 => 87,  148 => 79,  143 => 76,  141 => 75,  134 => 70,  111 => 50,  108 => 49,  104 => 47,  100 => 45,  97 => 44,  95 => 43,  87 => 37,  85 => 36,  79 => 33,  70 => 27,  62 => 22,  54 => 17,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
