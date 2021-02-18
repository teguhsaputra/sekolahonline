<?php

/* tambah-siswa.html */
class __TwigTemplate_426c358e7d386fc844c94ce079b0163bd292963be77b91bcb637ecc8d3d56d9e extends Twig_Template
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
        echo "Tambah Siswa - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-dark\">Tambah Siswa</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url("siswa"), "html", null, true);
        echo "\">List Siswa</a></li>
              <li class=\"breadcrumb-item active\">Tambah Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

";
        // line 27
        echo get_flashdata("siswa");
        echo "
<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                <h3 class=\"card-title\">
                    Tambah Siswa
                </h3>
            </div>
            <!-- /.card-header -->
            ";
        // line 37
        echo form_open_multipart(("siswa/add/" . (isset($context["status_id"]) ? $context["status_id"] : null)), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"card-body pad\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label>NIS</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
        echo "\" />
                                </div>
                                <code>";
        // line 47
        echo form_error("nis");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Nama</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"nama\" class=\"form-control\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 54
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
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
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
        // line 65
        echo "                                        </select>
                                    </div>
                                    <div class=\"input-group\">
                                        <select class=\"form-control mr-2\" name=\"bln_lahir\">
                                            <option value=\"\">Bulan</option>
                                            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
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
        // line 73
        echo "                                        </select>
                                    </div>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\" />
                                    </div>
                                    <code>";
        // line 78
        echo form_error("thn_lahir");
        echo "</code>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label>Tahun Masuk</label>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"tahun_masuk\" maxlength=\"4\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, set_value("tahun_masuk"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 86
        echo form_error("tahun_masuk");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Kelas</label>
                                <div class=\"form-group\">
                                    <select class=\"form-control\" name=\"kelas_id\">
                                        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 93
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                    </select>
                                </div>
                                <code>";
        // line 97
        echo form_error("kelas_id");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Tempat Lahir</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"form-control\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 104
        echo form_error("tempat_lahir");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Jenis Kelamin</label>
                                <div class=\"d-flex\">
                                    <div class=\"form-check ml-3\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 110
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo " />
                                        <label class=\"form-check-label\">Laki-laki</label>
                                    </div>
                                    <div class=\"form-check ml-3\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 114
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo " />
                                        <label class=\"form-check-label\">Prempuan</label>
                                    </div>
                                </div>
                                <code>";
        // line 118
        echo form_error("jenis_kelamin");
        echo "</code>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label>Agama</label>
                                <div class=\"input-group\">
                                    <select name=\"agama\" class=\"form-control\">
                                        <option value=\"\">--pilih--</option>
                                        <option value=\"ISLAM\" ";
        // line 127
        echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
        echo ">ISLAM</option>
                                        <option value=\"KRISTEN\" ";
        // line 128
        echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
        echo ">KRISTEN</option>
                                        <option value=\"PROTESTANT\" ";
        // line 129
        echo twig_escape_filter($this->env, set_select("agama", "PROTESTANT"), "html", null, true);
        echo ">PROTESTANT</option>
                                        <option value=\"KHATOLIK\" ";
        // line 130
        echo twig_escape_filter($this->env, set_select("agama", "KHATOLIK"), "html", null, true);
        echo ">KHATOLIK</option>
                                        <option value=\"HINDU\" ";
        // line 131
        echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
        echo ">HINDU</option>
                                        <option value=\"BUDHA\" ";
        // line 132
        echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
        echo ">BUDHA</option>
                                        <option value=\"KHONGHUCU\" ";
        // line 133
        echo twig_escape_filter($this->env, set_select("agama", "KHONGHUCU"), "html", null, true);
        echo ">KHONGHUCU</option>
                                    </select>
                                </div>
                                <code>";
        // line 136
        echo form_error("agama");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Alamat</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\" />
                                </div>
                                <code>";
        // line 143
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
        // line 151
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Username *</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"username\" name=\"username\" id=\"Untukusername\" class=\"form-control\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" placeholder=\"contoh : [nis]@aa.sch.id\" />
                                    <div class=\"input-group-prepend\">
                                        <div class=\"input-group-text\"><label class=\"form-check-label\"><input type=\"checkbox\" name=\"default_username\" id=\"default_username\" onclick=\"username_default()\" value=\"1\" ";
        // line 158
        echo twig_escape_filter($this->env, set_checkbox("default_username", "1"), "html", null, true);
        echo " /> Default</label></div>
                                    </div>
                                </div>
                                <code>";
        // line 161
        echo form_error("username");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Password *</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 168
        echo form_error("password");
        echo "</code>
                            </div>
                            <div class=\"form-group\">
                                <label>Ulangi Password *</label>
                                <div class=\"input-group\">
                                    <input type=\"password\" name=\"password2\" class=\"form-control\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                                </div>
                                <code>";
        // line 175
        echo form_error("password2");
        echo "</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-info\">Simpan</button>
            <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, site_url(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn btn-default\">Batal</a>
            </div>
            ";
        // line 185
        echo form_close();
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 185,  372 => 183,  361 => 175,  356 => 173,  348 => 168,  343 => 166,  335 => 161,  329 => 158,  324 => 156,  316 => 151,  305 => 143,  300 => 141,  292 => 136,  286 => 133,  282 => 132,  278 => 131,  274 => 130,  270 => 129,  266 => 128,  262 => 127,  250 => 118,  243 => 114,  236 => 110,  227 => 104,  222 => 102,  214 => 97,  210 => 95,  197 => 93,  193 => 92,  184 => 86,  179 => 84,  170 => 78,  165 => 76,  160 => 73,  147 => 71,  143 => 70,  136 => 65,  123 => 63,  119 => 62,  108 => 54,  103 => 52,  95 => 47,  90 => 45,  79 => 37,  66 => 27,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
