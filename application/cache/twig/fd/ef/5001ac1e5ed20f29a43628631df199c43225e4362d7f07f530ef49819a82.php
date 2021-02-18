<?php

/* tambah-pengajar.html */
class __TwigTemplate_fdef5001ac1e5ed20f29a43628631df199c43225e4362d7f07f530ef49819a82 extends Twig_Template
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
        echo "Tambah Pengajar - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-dark\">Tambah Pengajar</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("pengajar"), "html", null, true);
        echo "\">List Pengajar</a></li>
              <li class=\"breadcrumb-item active\">Tambah Pengajar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

";
        // line 26
        echo get_flashdata("pengajar");
        echo "
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Tambah Pengajar
                </h3>
            </div>
            <!-- /.card-header -->
            ";
        // line 36
        echo form_open_multipart(("pengajar/add/" . (isset($context["status_id"]) ? $context["status_id"] : null)), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body pad\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label>NIP</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"nip\" name=\"nip\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
        echo "\" />
                                </div>
                                <code>";
        // line 46
        echo form_error("nis");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Nama</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"nama\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 53
        echo form_error("nama");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Tanggal Lahir</label>
                                <div class=\"d-flex\">
                                    <div class=\"input-group\">
                                        <select class=\"form-control mr-2\" name=\"tgl_lahir\">
                                            <option value=\"\">Tgl</option>
                                            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                        </select>
                                    </div>
                                    <div class=\"input-group\">
                                        <select class=\"form-control mr-2\" name=\"bln_lahir\">
                                            <option value=\"\">Bulan</option>
                                            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 70
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                        </select>
                                    </div>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\" />
                                    </div>
                                    <code>";
        // line 77
        echo form_error("thn_lahir");
        echo "</code>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label>Tempat Lahir</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"form-control\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 85
        echo form_error("tempat_lahir");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Jenis Kelamin</label>
                                <div class=\"d-flex\">
                                    <div class=\"form-check ml-3\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 91
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo " />
                                        <label class=\"form-check-label\">Laki-laki</label>
                                    </div>
                                    <div class=\"form-check ml-3\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 95
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo " />
                                        <label class=\"form-check-label\">Prempuan</label>
                                    </div>
                                </div>
                                <code>";
        // line 99
        echo form_error("jenis_kelamin");
        echo "</code>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label>Alamat</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\" />
                                </div>
                                <code>";
        // line 108
        echo form_error("alamat");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Foto</label>
                                <div class=\"input-group\">
                                    <input type=\"file\" class=\"custom-file-input\" id=\"exampleInputFile\" name=\"userfile\">
                                    <label class=\"custom-file-label\" for=\"exampleInputFile\">Browse ...</label>
                                </div>
                                <code>";
        // line 116
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Username *</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"username\" name=\"username\" id=\"Untukusername\" class=\"form-control\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" placeholder=\"example@example.sch.id\" />
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\"><label class=\"form-check-label\"><input type=\"checkbox\" name=\"default_username\" id=\"default_username\" onclick=\"username_default_pengajar()\" value=\"1\" ";
        // line 123
        echo twig_escape_filter($this->env, set_checkbox("default_username", "1"), "html", null, true);
        echo " /> Default</label></div>
                                    </div>
                                </div>
                                <code>";
        // line 126
        echo form_error("username");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Password *</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 133
        echo form_error("password");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Ulangi Password *</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password2\" class=\"form-control\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 140
        echo form_error("password2");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Opsi</label>
                                <div class=\"input-group\">
                                    <label class=\"checkbox text-warning\"><input type=\"checkbox\" name=\"is_admin\" value=\"1\" ";
        // line 145
        echo twig_escape_filter($this->env, set_checkbox("is_admin", "1"), "html", null, true);
        echo "> Jadikan pengajar admin website</label>
                                    <br>";
        // line 146
        echo form_error("is_admin");
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-info\">Simpan</button>
            <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, site_url(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
            </div>
            ";
        // line 157
        echo form_close();
        echo "
        </div>
    </div>
</div>

<!--
<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 165
        echo anchor(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "Data Pengajar");
        echo " / Tambah Pengajar</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 168
        echo get_flashdata("pengajar");
        echo "

        ";
        // line 170
        echo form_open_multipart(("pengajar/add/" . (isset($context["status_id"]) ? $context["status_id"] : null)), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">NIP</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"nip\" name=\"nip\" class=\"span4\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
        echo "\">
                    <br>";
        // line 175
        echo form_error("nip");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                    <br>";
        // line 182
        echo form_error("nama");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 188
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo "> Laki-laki</label>
                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 189
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo "> Perempuan</label>
                    <br>";
        // line 190
        echo form_error("jenis_kelamin");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tempat Lahir</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                    <br>";
        // line 197
        echo form_error("tempat_lahir");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tanggal Lahir</label>
                <div class=\"controls\">
                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                        <option value=\"\">Tgl</option>
                        ";
        // line 205
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 206
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                    </select>
                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                        <option value=\"\">Bulan</option>
                        ";
        // line 211
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 212
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                    </select>
                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                    <br>";
        // line 216
        echo form_error("thn_lahir");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Alamat</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"alamat\" class=\"span10\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\">
                    <br>";
        // line 223
        echo form_error("alamat");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Foto</label>
                <div class=\"controls\">
                    <input type=\"file\" name=\"userfile\">
                    ";
        // line 230
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" placeholder=\"example@example.sch.id\">

                    <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"default_username\" id=\"default_username\" onclick=\"username_default_pengajar()\" value=\"1\" ";
        // line 238
        echo twig_escape_filter($this->env, set_checkbox("default_username", "1"), "html", null, true);
        echo "> Gunakan default username</label>
                    <br>";
        // line 239
        echo form_error("username");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                    <br>";
        // line 246
        echo form_error("password");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
        // line 252
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                    <br>";
        // line 253
        echo form_error("password2");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Opsi</label>
                <div class=\"controls\">
                    <label class=\"checkbox text-warning\"><input type=\"checkbox\" name=\"is_admin\" value=\"1\" ";
        // line 259
        echo twig_escape_filter($this->env, set_checkbox("is_admin", "1"), "html", null, true);
        echo "> Jadikan pengajar admin website</label>
                    <br>";
        // line 260
        echo form_error("is_admin");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                    <a href=\"";
        // line 266
        echo twig_escape_filter($this->env, site_url(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn\">Batal</a>
                </div>
            </div>
        ";
        // line 269
        echo form_close();
        echo "

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "tambah-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 269,  528 => 266,  519 => 260,  515 => 259,  506 => 253,  502 => 252,  493 => 246,  489 => 245,  480 => 239,  476 => 238,  471 => 236,  462 => 230,  452 => 223,  448 => 222,  439 => 216,  435 => 215,  432 => 214,  419 => 212,  415 => 211,  410 => 208,  397 => 206,  393 => 205,  382 => 197,  378 => 196,  369 => 190,  365 => 189,  361 => 188,  352 => 182,  348 => 181,  339 => 175,  335 => 174,  328 => 170,  323 => 168,  317 => 165,  306 => 157,  301 => 155,  289 => 146,  285 => 145,  277 => 140,  272 => 138,  264 => 133,  259 => 131,  251 => 126,  245 => 123,  240 => 121,  232 => 116,  221 => 108,  216 => 106,  206 => 99,  199 => 95,  192 => 91,  183 => 85,  178 => 83,  169 => 77,  164 => 75,  159 => 72,  146 => 70,  142 => 69,  135 => 64,  122 => 62,  118 => 61,  107 => 53,  102 => 51,  94 => 46,  89 => 44,  78 => 36,  65 => 26,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
