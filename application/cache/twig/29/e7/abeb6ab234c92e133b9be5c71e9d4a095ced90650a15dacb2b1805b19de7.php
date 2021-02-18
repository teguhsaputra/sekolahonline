<?php

/* detail-materi.html */
class __TwigTemplate_29e7abeb6ab234c92e133b9be5c71e9d4a095ced90650a15dacb2b1805b19de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-detail-materi.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-detail-materi.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
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
<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Detail Materi</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
        echo "\">List Materi</a></li>
            <li class=\"breadcrumb-item active\">Detail Materi</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>



<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-10 col-md-10 col-xs-12 p-3\" id=\"popLihat\">
    ";
        // line 29
        echo get_flashdata("materi");
        echo "
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
            <h3 class=\"card-title\">
                Lihat Materi
            </h3>
            </div>
            <!-- /.card-header -->
            <div class=\"card-body pad\">
                <div class=\"col-12\">
                    <h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "</h3>
                    ";
        // line 40
        if ((!array_key_exists("error", $context))) {
            // line 41
            echo "                        <p>
                            <span class=\"badge badge-secondary\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
            echo "</span>
                            
                            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 45
                echo "                                <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            
                            <span class=\"badge badge-secondary\">";
            // line 48
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting")), "html", null, true);
            echo "</span>
                            
                            <span class=\"badge badge-secondary\">";
            // line 50
            echo ((((isset($context["type"]) ? $context["type"] : null) == "tertulis")) ? ("Dibaca") : ("Diunduh"));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "views"), "html", null, true);
            echo " Kali</span>
                            
                            <span class=\"badge badge-secondary\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar</span> 
                            
                            <span class=\"badge badge-secondary\">Diposting oleh : ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "nama"), "html", null, true);
            echo "</span>
                        </p>
                    ";
        }
        // line 57
        echo "                </div>
                ";
        // line 58
        if ((!array_key_exists("error", $context))) {
            // line 59
            echo "                <div class=\"col-12 p-3\" style=\"background-color: #f8f9d2;background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%);\">
                    ";
            // line 60
            if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
                // line 61
                echo "                        ";
                echo $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "konten");
                echo "
                    ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
                // line 63
                echo "                        <div class=\"table-responsive\">
                            <table class=\"table bg-light table-bordered\">
                                <thead>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Modified</th>
                                    <th>Mime</th>
                                    <th>Download</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file_info"), "name"))) ? ("noname") : ($this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file_info"), "name"))), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, byte_format($this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file_info"), "size")), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, tgl_jam_indo(mdate("%Y-%m-%d %H:%i:%s", $this->getAttribute((isset($context["materifile_info"]) ? $context["materifile_info"] : null), "date"))), "html", null, true);
                echo "</td>
                                        <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file_info"), "mime"), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "download_link"), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fas fa-download\"></i> Download File</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    ";
            }
            // line 84
            echo "                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        <h5 class=\"mt-4\">
                            <i class=\"fas fa-pen\"></i> Tulis komentar
                            <div class=\"float-right\" style=\"font-size: 14px;\">";
            // line 89
            echo form_error("komentar");
            echo "</div>
                        </h5>
                        <div class=\"bg-form-komentar\" id=\"form-komentar\">
                            <form method=\"post\" action=\"";
            // line 92
            echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id"))), "html", null, true);
            echo "\">
                                <p><textarea class=\"col-12 form-control\" id=\"komentar\" name=\"komentar\">";
            // line 93
            echo set_value("komentar");
            echo "</textarea></p>
                                <p>
                                    <button class=\"btn btn-primary float-right\">Post komentar</button>
                                    <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
            echo "\" style=\"height:30px;width:30px; margin-right:5px;\" class=\"img-circle img-thumbnail\">
                                    ";
            // line 97
            echo twig_escape_filter($this->env, get_sess_data("user", "nama"), "html", null, true);
            echo "
                                </p>
                                <div class=\"clear\"></div>
                            </form>
                        </div>
                        <br>
        
                        ";
            // line 104
            if (($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "jml_komentar") > 0)) {
                // line 105
                echo "                            <h4><i class=\"icon-comments\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "jml_komentar"), "html", null, true);
                echo " Komentar</h4>
        
                            ";
                // line 107
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "komentar"));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 108
                    echo "                            <div class=\"komentar\" id=\"komentar-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                    echo "\">
                                <img src=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_image"), "html", null, true);
                    echo "\" style=\"height:30px;width:30px; margin-left:5px;\" class=\"img-circle img-thumbnail float-right\">
                                <p><a href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_profil"), "html", null, true);
                    echo "\"><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "nama"), "html", null, true);
                    echo "</b></a>, <small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "tgl_posting"), "d F Y"), "html", null, true);
                    echo "</small>, <small><a href=\"";
                    echo twig_escape_filter($this->env, site_url(((("materi/detail/" . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id")) . "/laporkan/") . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"))), "html", null, true);
                    echo "\" class=\"text-muted iframe-laporkan\"><i class=\"icon-bug\"></i> laporkan</a></small></p>
                                ";
                    // line 111
                    echo $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "konten");
                    echo "
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "        
                            <div style=\"font-size:12px;\">
                            ";
                // line 116
                echo $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "komentar_pagination");
                echo "
                            </div>
                        ";
            }
            // line 119
            echo "                    </div>
                    <div class=\"col-sm-4\">
                        <h5 class=\"mt-4\"><i class=\"fas fa-file\"></i> Materi lainnya</h5>
                        <ul class=\"list-group\">
                            ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terkait"]) ? $context["terkait"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 124
                echo "                            <li class=\"list-group-item\">
                                <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"";
                echo ((twig_test_empty($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "file"))) ? ("fas fa-file") : ("fas fa-download"));
                echo " img-thumbnail mr-1 ";
                echo (((strlen($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "judul")) > 33)) ? ("float-left") : (""));
                echo "\"></i> ";
                echo $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "judul");
                echo "</a>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        
                            ";
            // line 129
            if (twig_test_empty((isset($context["terkait"]) ? $context["terkait"] : null))) {
                // line 130
                echo "                            <div class=\"alert alert-info\">Tidak ada materi terkait</div>
                            ";
            }
            // line 132
            echo "                        </ul>
                    </div>
                </div>
                ";
        } else {
            // line 136
            echo "                    <div class=\"alert alert-danger\">
                        <h3>";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</h3>
                    </div>
                ";
        }
        // line 140
        echo "            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group\">
                    <button onclick=\"window.close();\" class=\"btn btn-dark\" data-toggle=\"tooltip\" title=\"Kembali\"><i class=\"fas fa-redo mr-1\"></i>Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 140,  322 => 137,  319 => 136,  313 => 132,  309 => 130,  307 => 129,  304 => 128,  289 => 125,  286 => 124,  282 => 123,  276 => 119,  270 => 116,  266 => 114,  257 => 111,  247 => 110,  243 => 109,  238 => 108,  234 => 107,  228 => 105,  226 => 104,  216 => 97,  212 => 96,  206 => 93,  202 => 92,  196 => 89,  189 => 84,  180 => 78,  176 => 77,  172 => 76,  168 => 75,  164 => 74,  151 => 63,  145 => 61,  143 => 60,  140 => 59,  138 => 58,  135 => 57,  129 => 54,  124 => 52,  117 => 50,  112 => 48,  109 => 47,  100 => 45,  96 => 44,  91 => 42,  88 => 41,  86 => 40,  82 => 39,  69 => 29,  54 => 17,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
