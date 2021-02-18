<?php

/* edit-materi.html */
class __TwigTemplate_84b7ed6f68c91c9d605c0ed55641d039890087e9396a5a76defa6b0cdb51928a extends Twig_Template
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
        echo "Edit Materi - ";
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
        <h1 class=\"m-0 text-dark\">Platform Sekolah Online</h1>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
        echo "\">Materi</a></li>
            <li class=\"breadcrumb-item active\">Edit Materi</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
    ";
        // line 27
        echo get_flashdata("materi");
        echo "
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Edit Materi
                </h3>
            </div>
            <!-- /.card-header -->
            
            ";
        // line 36
        echo form_open_multipart(((((("materi/edit/" . (isset($context["type"]) ? $context["type"] : null)) . "/") . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body pad\">
                <div class=\"form-group\">
                    <label>Judul</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul")), "html", null, true);
        echo "\" />
                    </div>
                    <code>";
        // line 43
        echo form_error("judul");
        echo "</code>
                </div>
                <div class=\"form-group\">
                <label>Matapelajaran</label>
                    <div class=\"input-group\">
                        <select class=\"form-control\" name=\"mapel_id\">
                            <option value=\"\">--pilih--</option>
                            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 51
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id") == $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel_id"))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    
                        </select>
                    </div>
                    <code>";
        // line 55
        echo form_error("mapel_id");
        echo "</code>
                </div>
                <div class=\"form-group\">
                    <label>Kelas</label>
                    <div class=\"input-group\">
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 61
            echo "                            <label class=\"form-check-label ml-4 mr-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), (isset($context["materi_kelas"]) ? $context["materi_kelas"] : null))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </div>
                    <code>";
        // line 66
        echo form_error("kelas_id[]");
        echo "</code>
                </div>
                ";
        // line 68
        if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
            // line 69
            echo "                <div class=\"form-group\">
                    <label>Konten</label>
                    <div class=\"input-group\">
                        <textarea name=\"konten\" id=\"konten\" class=\"texteditor\">";
            // line 72
            echo set_value("konten", $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "konten"));
            echo "</textarea>
                    </div>
                    <code>";
            // line 74
            echo form_error("konten");
            echo "</code>
                </div>
                ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 77
            echo "                <div class=\"form-group\">
                    <label>Info File</label>
                    <div class=\"input-group table-responsive\">
                        <table class=\"table table-striped\">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, base_url(("userfiles/files/" . $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"))), "html", null, true);
            echo "\" target=\"_tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"), "html", null, true);
            echo "</a></td>
                                </tr>
                                <tr>
                                    <th>Server Path</th>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "server_path"), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, byte_format($this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "size")), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Modified</th>
                                    <td>";
            // line 96
            echo twig_escape_filter($this->env, mdate("%d %F %Y %H:%i", $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "date")), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Mime</th>
                                    <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "mime"), "html", null, true);
            echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>File</label>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" name=\"userfile\">
                        <label class=\"custom-file-label\" for=\"customFile\">Pilih File</label>
                    </div>
                    <div class=\"well well-small\">Ekstensi yang diijinkan: <br>.doc, .zip, .rar, .txt, .docx, .xls, .xlsx, .pdf, .tar, .gz, .jpg, .jpeg, .JPG, .JPEG, .png, .ppt, .pptx</div>
                    ";
            // line 113
            echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
            echo "
                </div>
                ";
        }
        // line 116
        echo "                <div class=\"form-group\">
                <label>Status</label>
                    <div class=\"form-check\">
                        <label class=\"form-check-label mr-4\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"publish\" value=\"1\" ";
        // line 120
        echo twig_escape_filter($this->env, set_radio("publish", "1", (($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "publish")) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                        </label>
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"publish\" value=\"0\" ";
        // line 123
        echo twig_escape_filter($this->env, set_radio("publish", "0", ((($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "publish") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Konsep
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group flex-wrap\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            </div>
            ";
        // line 134
        echo form_close();
        echo "
        </div>
    </div>
</div>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 142
        echo anchor((isset($context["uri_back"]) ? $context["uri_back"] : null), "Materi");
        echo " / Edit Materi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 145
        echo get_flashdata("materi");
        echo "

        ";
        // line 147
        echo form_open_multipart(((((("materi/edit/" . (isset($context["type"]) ? $context["type"] : null)) . "/") . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Judul <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"judul\" class=\"span12\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul")), "html", null, true);
        echo "\">
                    <br>";
        // line 152
        echo form_error("judul");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Matapelajaran <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <select name=\"mapel_id\">
                        <option value=\"\">--pilih--</option>
                        ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 161
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id") == $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel_id"))) ? (true) : (""))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    </select>
                    <br>";
        // line 164
        echo form_error("mapel_id");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                        ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 172
            echo "                        <li>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), (isset($context["materi_kelas"]) ? $context["materi_kelas"] : null))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                            </label>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                    </ul>
                    ";
        // line 179
        echo form_error("kelas_id[]");
        echo "
                </div>
            </div>
            ";
        // line 182
        if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
            // line 183
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Konten <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"konten\" id=\"konten\" class=\"texteditor\">";
            // line 186
            echo set_value("konten", $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "konten"));
            echo "</textarea>
                    ";
            // line 187
            echo form_error("konten");
            echo "
                </div>
            </div>
            ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 191
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Info File</label>
                <div class=\"controls\">
                    <table class=\"table table-condensed table-striped\">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td><a href=\"";
            // line 198
            echo twig_escape_filter($this->env, base_url(("userfiles/files/" . $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"))), "html", null, true);
            echo "\" target=\"_tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "name"), "html", null, true);
            echo "</a></td>
                            </tr>
                            <tr>
                                <th>Server Path</th>
                                <td>";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "server_path"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>";
            // line 206
            echo twig_escape_filter($this->env, byte_format($this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "size")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Modified</th>
                                <td>";
            // line 210
            echo twig_escape_filter($this->env, mdate("%d %F %Y %H:%i", $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "date")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>Mime</th>
                                <td>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_info"]) ? $context["file_info"] : null), "mime"), "html", null, true);
            echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Ganti File</label>
                <div class=\"controls\">
                    <input type=\"file\" name=\"userfile\">
                    <br>";
            // line 224
            echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
            echo "
                </div>
            </div>
            ";
        }
        // line 228
        echo "            <div class=\"control-group\">
                <label class=\"control-label\">Status <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <label class=\"radio\">
                        <input type=\"radio\" name=\"publish\" value=\"1\" ";
        // line 232
        echo twig_escape_filter($this->env, set_radio("publish", "1", (($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "publish")) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                    </label>
                    <label class=\"radio\">
                        <input type=\"radio\" name=\"publish\" value=\"0\" ";
        // line 235
        echo twig_escape_filter($this->env, set_radio("publish", "0", ((($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "publish") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Konsep
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            </div>
        ";
        // line 245
        echo form_close();
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "edit-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 245,  471 => 242,  461 => 235,  455 => 232,  449 => 228,  442 => 224,  429 => 214,  422 => 210,  415 => 206,  408 => 202,  399 => 198,  390 => 191,  383 => 187,  379 => 186,  374 => 183,  372 => 182,  366 => 179,  363 => 178,  349 => 174,  345 => 172,  341 => 171,  331 => 164,  328 => 163,  315 => 161,  311 => 160,  300 => 152,  296 => 151,  289 => 147,  284 => 145,  278 => 142,  267 => 134,  261 => 131,  250 => 123,  244 => 120,  238 => 116,  232 => 113,  216 => 100,  209 => 96,  202 => 92,  195 => 88,  186 => 84,  177 => 77,  171 => 74,  166 => 72,  161 => 69,  159 => 68,  154 => 66,  151 => 65,  138 => 62,  135 => 61,  131 => 60,  123 => 55,  118 => 52,  105 => 51,  101 => 50,  91 => 43,  86 => 41,  78 => 36,  66 => 27,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
