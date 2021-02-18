<?php

/* pengaturan.html */
class __TwigTemplate_8f9d7c6785edc4eca16ab1544d48104c49727a1d4b532f8759711570632a9508 extends Twig_Template
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
        echo "Pengaturan - ";
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
        <h1>Pengaturan</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Pengaturan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 28
        echo get_flashdata("pengaturan");
        echo "
        
                ";
        // line 30
        if (is_demo_app()) {
            // line 31
            echo "                    ";
            echo get_alert("warning", get_demo_msg());
            echo "
                ";
        }
        // line 33
        echo "        
                ";
        // line 34
        echo form_open_multipart("welcome/pengaturan", array("class" => "form-horizontal row-fluid"));
        echo "
                <div class=\"form-group\">
                    <label>Logo sekolah</label>
                    <div class=\"form-input\">
                        ";
        // line 38
        $context["logo_sekolah"] = get_pengaturan("logo-sekolah", "value");
        // line 39
        echo "                        ";
        if (twig_test_empty((isset($context["logo_sekolah"]) ? $context["logo_sekolah"] : null))) {
            // line 40
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["logo_url_medium"]) ? $context["logo_url_medium"] : null), "html", null, true);
            echo "\">
                        ";
        } else {
            // line 42
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=5"), "html", null, true);
            echo "\" onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"pull-right\" title=\"Hapus logo\"><i class=\"icon-trash\"></i></a>
                            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, get_url_image((isset($context["logo_sekolah"]) ? $context["logo_sekolah"] : null)), "html", null, true);
            echo "\" style=\"max-width: 120px;\">
                        ";
        }
        // line 45
        echo "                        <br>Ganti logo <small>(Ukuran terbaik 120 x 122 pixel)</small><br>
                        <div class=\"custom-file\">
                            <input type=\"file\" name=\"logo-sekolah\" class=\"custom-file-input\" id=\"customFile\">
                            <label class=\"custom-file-label\" for=\"customFile\">Pilih File</label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>Nama sekolah <span class=\"text-error\">*</span></label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"nama-sekolah\" class=\"col-12 form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("nama-sekolah", get_pengaturan("nama-sekolah", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 56
        echo form_error("nama-sekolah");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Alamat sekolah <span class=\"text-error\">*</span></label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"alamat\" class=\"col-12 form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, set_value("alamat", get_pengaturan("alamat", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 63
        echo form_error("alamat");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Telpon</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"telp\" class=\"col-12 form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, set_value("telp", get_pengaturan("telp", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 70
        echo form_error("telp");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Registrasi siswa</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"registrasi-siswa\" value=\"1\" ";
        // line 77
        echo twig_escape_filter($this->env, set_radio("registrasi-siswa", "1", (((get_pengaturan("registrasi-siswa", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Tampilkan
                        </label>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"registrasi-siswa\" value=\"0\" ";
        // line 80
        echo twig_escape_filter($this->env, set_radio("registrasi-siswa", "0", (((get_pengaturan("registrasi-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Sembunyikan
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Status registrasi siswa</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"status-registrasi-siswa\" value=\"0\" ";
        // line 88
        echo twig_escape_filter($this->env, set_radio("status-registrasi-siswa", "0", ((in_array(get_pengaturan("status-registrasi-siswa", "value"), array(0 => "", 1 => "0"))) ? (true) : (""))), "html", null, true);
        echo "> Pending
                        </label>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"status-registrasi-siswa\" value=\"1\" ";
        // line 91
        echo twig_escape_filter($this->env, set_radio("status-registrasi-siswa", "1", (((get_pengaturan("status-registrasi-siswa", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Aktif
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Registrasi pengajar</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"registrasi-pengajar\" value=\"1\" ";
        // line 99
        echo twig_escape_filter($this->env, set_radio("registrasi-pengajar", "1", (((get_pengaturan("registrasi-pengajar", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Tampilkan
                        </label>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"registrasi-pengajar\" value=\"0\" ";
        // line 102
        echo twig_escape_filter($this->env, set_radio("registrasi-pengajar", "0", (((get_pengaturan("registrasi-pengajar", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Sembunyikan
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Status registrasi pengajar</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"status-registrasi-pengajar\" value=\"0\" ";
        // line 110
        echo twig_escape_filter($this->env, set_radio("status-registrasi-pengajar", "0", ((in_array(get_pengaturan("status-registrasi-pengajar", "value"), array(0 => "", 1 => "0"))) ? (true) : (""))), "html", null, true);
        echo "> Pending
                        </label>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"status-registrasi-pengajar\" value=\"1\" ";
        // line 113
        echo twig_escape_filter($this->env, set_radio("status-registrasi-pengajar", "1", (((get_pengaturan("status-registrasi-pengajar", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Aktif
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Info Registrasi</label>
                    <div class=\"form-input\">
                        <textarea name=\"info-registrasi\" class=\"texteditor\" style=\"width:100%; height:300px;\">";
        // line 120
        echo set_value("info-registrasi", get_pengaturan("info-registrasi", "value"));
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Peraturan E-learning</label>
                    <div class=\"form-input\">
                        <textarea name=\"peraturan-elearning\" class=\"texteditor\" style=\"width:100%; height:300px;\">";
        // line 126
        echo set_value("peraturan-elearning", get_pengaturan("peraturan-elearning", "value"));
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Email server</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"email-server\" class=\"col-5 form-control\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, set_value("email-server", get_pengaturan("email-server", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 133
        echo form_error("email-server");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">SMTP host</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"smtp-host\" class=\"col-5 form-control\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, set_value("smtp-host", get_pengaturan("smtp-host", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 140
        echo form_error("smtp-host");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">SMTP username</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"smtp-username\" class=\"col-5 form-control\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, set_value("smtp-username", get_pengaturan("smtp-username", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 147
        echo form_error("smtp-username");
        echo "
                    </div>
                </div>
                ";
        // line 150
        if ((is_demo_app() == false)) {
            // line 151
            echo "                <div class=\"form-group\">
                    <label class=\"form-label\">SMTP password</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"smtp-pass\" class=\"col-5 form-control\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, set_value("smtp-pass", get_pengaturan("smtp-pass", "value")), "html", null, true);
            echo "\">
                        <br>";
            // line 155
            echo form_error("smtp-pass");
            echo "
                    </div>
                </div>
                ";
        }
        // line 159
        echo "                <div class=\"form-group\">
                    <label class=\"form-label\">SMTP port</label>
                    <div class=\"form-input\">
                        <input type=\"text\" name=\"smtp-port\" class=\"col-5 form-control\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, set_value("smtp-port", get_pengaturan("smtp-port", "value")), "html", null, true);
        echo "\">
                        <br>";
        // line 163
        echo form_error("smtp-port");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Edit username siswa</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"edit-username-siswa\" value=\"1\" ";
        // line 170
        echo twig_escape_filter($this->env, set_radio("edit-username-siswa", "1", ((in_array(get_pengaturan("edit-username-siswa", "value"), array(0 => "", 1 => "1"))) ? (true) : (""))), "html", null, true);
        echo "> Siswa dapat mengganti username
                        </label><br/>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"edit-username-siswa\" value=\"0\" ";
        // line 173
        echo twig_escape_filter($this->env, set_radio("edit-username-siswa", "0", (((get_pengaturan("edit-username-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Siswa tidak dapat mengganti username
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Edit foto siswa</label>
                    <div class=\"form-input\">
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"edit-foto-siswa\" value=\"1\" ";
        // line 181
        echo twig_escape_filter($this->env, set_radio("edit-foto-siswa", "1", ((in_array(get_pengaturan("edit-foto-siswa", "value"), array(0 => "", 1 => "1"))) ? (true) : (""))), "html", null, true);
        echo "> Siswa dapat mengganti foto
                        </label><br/>
                        <label class=\"radio inline\">
                            <input type=\"radio\" name=\"edit-foto-siswa\" value=\"0\" ";
        // line 184
        echo twig_escape_filter($this->env, set_radio("edit-foto-siswa", "0", (((get_pengaturan("edit-foto-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Siswa tidak dapat mengganti foto
                        </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"form-label\">Slider halaman login</label>
                    <div class=\"form-input\" style=\"background-color: #FBFBFB; padding: 10px;border-radius: 5px;\">
                        <table class=\"table table-condensed\">
                            <tr>
                                <td style=\"border-top: none;\">
                                    <div class=\"row-fluid\">
                                        <div class=\"col-6\" style=\"margin-bottom: 10px;\">
                                            Gambar 1
                                        </div>
                                        <div class=\"col-12\">
                                            ";
        // line 199
        if (get_pengaturan("img-slide-1", "value")) {
            // line 200
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=1"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                            <img src=\"";
            // line 201
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-1", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                            <br>Ganti gambar :
                                            ";
        }
        // line 204
        echo "                                            <div class=\"custom-file\">
                                                <input type=\"file\" name=\"img-slide-1\" class=\"custom-file-input\" id=\"img-slide-1\">
                                                <label class=\"custom-file-label\" for=\"img-slide-1\">Pilih File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                        <div class=\"col-6\">
                                            Info gambar 1
                                        </div>
                                        <div class=\"col-12\">
                                            <textarea name=\"info-slide-1\" class=\"col-12 form-control\" placeholder=\"text atau html\">";
        // line 215
        echo set_value("info-slide-1", get_pengaturan("info-slide-1", "value"));
        echo "</textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"border-top:1px dashed #fbfbfb;\">
                                    <div class=\"row-fluid\">
                                        <div class=\"col-6\" style=\"margin-bottom: 10px;\">
                                            Gambar 2
                                        </div>
                                        <div class=\"col-12\">
                                            ";
        // line 227
        if (get_pengaturan("img-slide-2", "value")) {
            // line 228
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=2"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                            <img src=\"";
            // line 229
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-2", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                            <br>Ganti gambar :
                                            ";
        }
        // line 232
        echo "                                            <div class=\"custom-file\">
                                                <input type=\"file\" name=\"img-slide-2\" class=\"custom-file-input\" id=\"img-slide-2\">
                                                <label class=\"custom-file-label\" for=\"img-slide-2\">Pilih File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                        <div class=\"col-6\">
                                            Info gambar 2
                                        </div>
                                        <div class=\"col-12\">
                                            <textarea name=\"info-slide-2\" class=\"col-12 form-control\" placeholder=\"text atau html\">";
        // line 243
        echo set_value("info-slide-2", get_pengaturan("info-slide-2", "value"));
        echo "</textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"border-top:1px dashed #fbfbfb;\">
                                    <div class=\"row-fluid\">
                                        <div class=\"col-6\" style=\"margin-bottom: 10px;\">
                                            Gambar 3
                                        </div>
                                        <div class=\"col-12\">
                                            ";
        // line 255
        if (get_pengaturan("img-slide-3", "value")) {
            // line 256
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=3"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                            <img src=\"";
            // line 257
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-3", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                            <br>Ganti gambar :
                                            ";
        }
        // line 260
        echo "                                            <div class=\"custom-file\">
                                                <input type=\"file\" name=\"img-slide-3\" class=\"custom-file-input\" id=\"img-slide-3\">
                                                <label class=\"custom-file-label\" for=\"img-slide-3\">Pilih File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                        <div class=\"col-6\">
                                            Info gambar 3
                                        </div>
                                        <div class=\"col-12\">
                                            <textarea name=\"info-slide-3\" class=\"col-12 form-control\" placeholder=\"text atau html\">";
        // line 271
        echo set_value("info-slide-3", get_pengaturan("info-slide-3", "value"));
        echo "</textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"border-top:1px dashed #fbfbfb;\">
                                    <div class=\"row-fluid\">
                                        <div class=\"col-6\" style=\"margin-bottom: 10px;\">
                                            Gambar 4
                                        </div>
                                        <div class=\"col-12\">
                                            ";
        // line 283
        if (get_pengaturan("img-slide-4", "value")) {
            // line 284
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=4"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                            <img src=\"";
            // line 285
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-4", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                            <br>Ganti gambar :
                                            ";
        }
        // line 288
        echo "                                                <div class=\"custom-file\">
                                                <input type=\"file\" name=\"img-slide-4\" class=\"custom-file-input\" id=\"img-slide-4\">
                                                <label class=\"custom-file-label\" for=\"img-slide-4\">Pilih File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                        <div class=\"col-6\">
                                            Info gambar 4
                                        </div>
                                        <div class=\"col-12\">
                                            <textarea name=\"info-slide-4\" class=\"col-12 form-control\" placeholder=\"text atau html\">";
        // line 299
        echo set_value("info-slide-4", get_pengaturan("info-slide-4", "value"));
        echo "</textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
                ";
        // line 309
        if ((is_demo_app() == false)) {
            // line 310
            echo "                    <div class=\"form-group\">
                        <div class=\"form-input\">
                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        </div>
                    </div>
                    ";
        }
        // line 316
        echo "            </div>  
            ";
        // line 317
        echo form_close();
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pengaturan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 317,  534 => 316,  526 => 310,  524 => 309,  511 => 299,  498 => 288,  492 => 285,  487 => 284,  485 => 283,  470 => 271,  457 => 260,  451 => 257,  446 => 256,  444 => 255,  429 => 243,  416 => 232,  410 => 229,  405 => 228,  403 => 227,  388 => 215,  375 => 204,  369 => 201,  364 => 200,  362 => 199,  344 => 184,  338 => 181,  327 => 173,  321 => 170,  311 => 163,  307 => 162,  302 => 159,  295 => 155,  291 => 154,  286 => 151,  284 => 150,  278 => 147,  274 => 146,  265 => 140,  261 => 139,  252 => 133,  248 => 132,  239 => 126,  230 => 120,  220 => 113,  214 => 110,  203 => 102,  197 => 99,  186 => 91,  180 => 88,  169 => 80,  163 => 77,  153 => 70,  149 => 69,  140 => 63,  136 => 62,  127 => 56,  123 => 55,  111 => 45,  106 => 43,  101 => 42,  95 => 40,  92 => 39,  90 => 38,  83 => 34,  80 => 33,  74 => 31,  72 => 30,  67 => 28,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
