<?php

/* tambah-materi.html */
class __TwigTemplate_b49c4ca0dd2bf805ae10b5c31d79022fa0c8f5e81e1b52d2307a3d812daeaadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        echo "Tambah Materi - ";
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
            <li class=\"breadcrumb-item active\">Tambah Materi</li>
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
                    Tambah Materi
                </h3>
            </div>
            <!-- /.card-header -->
            
            ";
        // line 36
        echo form_open_multipart(((("materi/add/" . (isset($context["type"]) ? $context["type"] : null)) . "/") . (isset($context["preview_id"]) ? $context["preview_id"] : null)), array("class" => "form-horizontal row-fluid", "id" => "form-materi"));
        echo "
            <div class=\"card-body pad\">
                <div class=\"form-group\">
                    <label>Judul</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"judul\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, set_value("judul"), "html", null, true);
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
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </select>
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
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo "/> ";
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
            echo set_value("konten");
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
                    <label>File</label>
                    <div class=\"form-input\">
                        <input type=\"file\" class=\"btn btn-default\" name=\"userfile\">
                    </div>
                    <div class=\"well well-small\">Ekstensi yang diijinkan: <br>.doc, .zip, .rar, .txt, .docx, .xls, .xlsx, .pdf, .tar, .gz, .jpg, .jpeg, .JPG, .JPEG, .png, .ppt, .pptx</div>
                    ";
            // line 83
            echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
            echo "
                </div>
                ";
        }
        // line 86
        echo "            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group flex-wrap\">
                    ";
        // line 89
        if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
            // line 90
            echo "                        <button type=\"submit\" name=\"status\" value=\"preview\" class=\"btn btn-info\">Preview</button>
                        <button type=\"submit\" name=\"status\" value=\"draft\" class=\"btn btn-primary\">Simpan Saja</button>
                        <button type=\"submit\" name=\"status\" value=\"publish\" class=\"btn btn-success\">Simpan & Terbitkan</button>
                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, site_url("materi"), "html", null, true);
            echo "\" class=\"btn btn-default\"
                            ";
            // line 94
            if (twig_test_empty((isset($context["preview_id"]) ? $context["preview_id"] : null))) {
                // line 95
                echo "                            onclick=\"return confirm('Materi belum disimpan, anda yakin ingin kembali tanpa menyimpan?')\"
                            ";
            }
            // line 97
            echo "                        >Kembali</a>
                    ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 99
            echo "                        <button type=\"submit\" name=\"status\" value=\"draft\" class=\"btn btn-primary\">Simpan Saja</button>
                        <button type=\"submit\" name=\"status\" value=\"publish\" class=\"btn btn-success\">Simpan & Terbitkan</button>
                        <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, site_url("materi"), "html", null, true);
            echo "\" class=\"btn btn-default\">Kembali</a>
                    ";
        }
        // line 103
        echo "                </div>
            </div>
            ";
        // line 105
        echo form_close();
        echo "
        </div>
    </div>
</div>
";
    }

    // line 111
    public function block_js($context, array $blocks = array())
    {
        // line 112
        echo "    ";
        if ((!twig_test_empty((isset($context["preview_id"]) ? $context["preview_id"] : null)))) {
            // line 113
            echo "    <script type=\"text/javascript\">
        window.open(site_url + '/materi/detail/";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["preview_id"]) ? $context["preview_id"] : null), "html", null, true);
            echo "', '_tab');
    </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "tambah-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 114,  245 => 113,  242 => 112,  239 => 111,  230 => 105,  226 => 103,  221 => 101,  217 => 99,  213 => 97,  209 => 95,  207 => 94,  203 => 93,  198 => 90,  196 => 89,  191 => 86,  185 => 83,  177 => 77,  171 => 74,  166 => 72,  161 => 69,  159 => 68,  154 => 66,  151 => 65,  138 => 62,  135 => 61,  131 => 60,  123 => 55,  119 => 53,  106 => 51,  102 => 50,  92 => 43,  87 => 41,  79 => 36,  67 => 27,  54 => 17,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
