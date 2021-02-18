<?php

/* register.html */
class __TwigTemplate_a048c89d8c00368fbe92b8d46ae5043d41acbdbb64fb2aaeee71d759a1453bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-register.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-register.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Register - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container\">

    <div class=\"row-fluid\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"col-lg-8 col-md-8 col-xs-12 p-3\" id=\"popTambah\">
                <div class=\"login-logo\">
                    <br/>
                    <table>
                    <tr>
                        <td>
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\" class=\"img-lg\"/>
                        </td>
                        <td>
                            <a href=\"./\"><b>Sekolah</b>Online</a>
                            <a href=\"./\"><i>AnugerahAbadi</i></a>
                        </td>
                    </tr>
                    </table>
                </div>
                <div class=\"card card-primary card-outline card-tabs\">
                    ";
        // line 29
        echo get_flashdata("register");
        echo "
                    ";
        // line 30
        if ((!twig_test_empty(get_pengaturan("info-registrasi", "value")))) {
            // line 31
            echo "                    <div class=\"alert alert-info\" style=\"margin:20px;\">
                        <h6>
                            <b>Informasi : </b><br>
                            ";
            // line 34
            echo get_pengaturan("info-registrasi", "value");
            echo "
                        </h6>
                    </div>
                    ";
        }
        // line 38
        echo "                    <div class=\"card-header p-0 pt-1 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-three-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"custom-tabs-three-home-tab\" data-toggle=\"pill\" href=\"#custom-tabs-three-home\" role=\"tab\" aria-controls=\"custom-tabs-three-home\" aria-selected=\"true\">Siswa</a>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"custom-tabs-three-profile-tab\" data-toggle=\"pill\" href=\"#custom-tabs-three-profile\" role=\"tab\" aria-controls=\"custom-tabs-three-profile\" aria-selected=\"false\">Pengajar</a>
                        </li>
                    </ul>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"tab-content\" id=\"custom-tabs-three-tabContent\">
                            <div class=\"tab-pane fade show active\" id=\"custom-tabs-three-home\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-three-home-tab\">
                                <div class=\"card\">
                                    <div class=\"card-body register-card-body\">
                                <p class=\"login-box-msg\"></p>
                                
                                ";
        // line 55
        echo form_open_multipart("login/register/siswa", array("class" => ""));
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-input\">
                                            <label>Nis</label>
                                            <input type=\"text\" id=\"nis\" name=\"nis\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
        echo "\" />
                                            ";
        // line 60
        echo form_error("nis");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Nama</label>
                                            <input type=\"text\" name=\"nama\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                            ";
        // line 65
        echo form_error("nama");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label class=\"mt-3\">Jenis Kelamin</label>
                                            <div class=\"form-check mb-3\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 70
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo " /> 
                                                <label class=\"form-check-label mr-4\">Laki-laki</label>
                                                <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 72
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo " />
                                                <label class=\"form-check-label\">Perempuan</label>
                                            </div>
                                            ";
        // line 75
        echo form_error("jenis_kelamin");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Tahun Masuk</label>
                                            <input type=\"text\" name=\"tahun_masuk\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, set_value("tahun_masuk"), "html", null, true);
        echo "\" placeholder=\"Tahun\"/>
                                            ";
        // line 80
        echo form_error("tahun_masuk");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Kelas</label>
                                                <select class=\"form-control\" name=\"kelas_id\">
                                                    <option value=\"\">--pilih--</option>
                                                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 87
            echo "                                                        <option value=\"";
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
        // line 89
        echo "                                                </select>
                                                ";
        // line 90
        echo form_error("kelas_id");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Tempat Lahir</label>
                                            <input type=\"text\" name=\"tempat_lahir\" class=\"form-control\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                                            ";
        // line 95
        echo form_error("tempat_lahir");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Tanggal Lahir</label>
                                            <div class=\"d-flex flex-nowrap\">
                                                <select class=\"form-control\" name=\"tgl_lahir\">
                                                    <option value=\"\">Tgl</option>
                                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "                                                        <option value=\"";
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
        // line 105
        echo "                                                </select>
                                                <select class=\"form-control\" name=\"bln_lahir\">
                                                    <option value=\"\">Bulan</option>
                                                    ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "                                                        <option value=\"";
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
        // line 111
        echo "                                                </select>
                                                <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                                                ";
        // line 113
        echo form_error("thn_lahir");
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Agama</label>
                                                <select name=\"agama\" class=\"form-control\">
                                                    <option value=\"\">--pilih--</option>
                                                    <option value=\"ISLAM\" ";
        // line 120
        echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
        echo ">ISLAM</option>
                                                    <option value=\"KRISTEN\" ";
        // line 121
        echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
        echo ">KRISTEN</option>
                                                    <option value=\"KATOLIK\" ";
        // line 122
        echo twig_escape_filter($this->env, set_select("agama", "KATOLIK"), "html", null, true);
        echo ">KATOLIK</option>
                                                    <option value=\"HINDU\" ";
        // line 123
        echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
        echo ">HINDU</option>
                                                    <option value=\"BUDHA\" ";
        // line 124
        echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
        echo ">BUDHA</option>
                                                </select>
                                                ";
        // line 126
        echo form_error("agama");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                        <label>Alamat</label>
                                            <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\">
                                            ";
        // line 131
        echo form_error("alamat");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Username</label>
                                                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
                                                ";
        // line 136
        echo form_error("username");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Password</label>
                                                <input type=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                                                ";
        // line 141
        echo form_error("password");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Ulangi Password</label>
                                                <input type=\"password\" name=\"password2\" class=\"form-control\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                                                ";
        // line 146
        echo form_error("password2");
        echo "
                                        </div>
                                        <div class=\"form-input mt-3\">
                                            <a href=\"../\" class=\"text-center\">Saya sudah punya akun login</a>
                                            <button type=\"submit\" class=\"btn btn-primary float-right\">Register</button>
                                            
                                        </div>
                                    </div>    
                                
                                ";
        // line 155
        echo form_close();
        echo "
                                
                                
                                    </div>
                                        <!-- /.form-box -->
                                </div><!-- /.card -->
                            </div>
                        
                            <div class=\"tab-pane fade\" id=\"custom-tabs-three-profile\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-three-profile-tab\">
                            <div class=\"card\">
                                <div class=\"card-body register-card-body\">
                                <p class=\"login-box-msg\"></p>
                                
                                ";
        // line 168
        echo form_open_multipart("login/register/pengajar", array("class" => ""));
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-input\">
                                            <label>Nip</label>
                                            <input type=\"text\" id=\"nip\" name=\"nip\" class=\"form-control col-md-12\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
        echo "\" />
                                            ";
        // line 173
        echo form_error("nip");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Nama</label>
                                            <input type=\"text\" name=\"nama\" class=\"form-control\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                            ";
        // line 178
        echo form_error("nama");
        echo "
                                        </div>
                                        <div class=\"form-input mt-3 mb-3\">
                                            <label>Jenis Kelamin</label>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 183
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo " /> 
                                                <label class=\"form-check-label mr-4\">Laki-laki</label>
                                                <input class=\"form-check-input\" type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 185
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo " />
                                                <label class=\"form-check-label\">Perempuan</label>
                                            </div>
                                            ";
        // line 188
        echo form_error("jenis_kelamin");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Tempat Lahir</label>
                                            <input type=\"text\" name=\"tempat_lahir\" class=\"form-control\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                                            ";
        // line 193
        echo form_error("tempat_lahir");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Tanggal Lahir</label>
                                            <div class=\"d-flex flex-nowrap\">
                                                <select class=\"form-control\" name=\"tgl_lahir\">
                                                    <option value=\"\">Tgl</option>
                                                    ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 201
            echo "                                                        <option value=\"";
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
        // line 203
        echo "                                                </select>
                                                <select class=\"form-control\" name=\"bln_lahir\">
                                                    <option value=\"\">Bulan</option>
                                                    ";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 207
            echo "                                                        <option value=\"";
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
        // line 209
        echo "                                                </select>
                                                <input type=\"text\" name=\"thn_lahir\" class=\"form-control\" maxlength=\"4\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\">
                                                ";
        // line 211
        echo form_error("thn_lahir");
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-input\">
                                        <label>Alamat</label>
                                            <input type=\"text\" name=\"alamat\" class=\"form-control\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\">
                                            ";
        // line 217
        echo form_error("alamat");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Username</label>
                                                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
                                                ";
        // line 222
        echo form_error("username");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Password</label>
                                                <input type=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                                                ";
        // line 227
        echo form_error("password");
        echo "
                                        </div>
                                        <div class=\"form-input\">
                                            <label>Ulangi Password</label>
                                                <input type=\"password\" name=\"password2\" class=\"form-control\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                                                ";
        // line 232
        echo form_error("password2");
        echo "
                                        </div>
                                        <div class=\"form-input mt-3\">
                                        <label class=\"mt-10\"></label>
                                            <a href=\"../\" class=\"text-center\">Saya sudah punya akun login</a>    
                                            <button type=\"submit\" class=\"btn btn-primary float-right\">Register</button>      
                                        </div>
                                    </div>    
                                
                                <!-- /.col -->
                                
                                ";
        // line 243
        echo form_close();
        echo "
                                
                                </div>
                                <!-- /.form-box -->
                            </div><!-- /.card --> 
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>    
</div>

<!--
<div class=\"row\">
    <div class=\"module span8 offset2\">
            <div class=\"module-head\">
                <h3>Register E-learning</h3>
            </div>

            <div class=\"module-body\">
                ";
        // line 266
        echo get_flashdata("register");
        echo "

                ";
        // line 268
        if ((!twig_test_empty(get_pengaturan("info-registrasi", "value")))) {
            // line 269
            echo "                <div class=\"well well-small\" style=\"box-shadow: none;\">
                    <b>Informasi : </b><br>
                    ";
            // line 271
            echo get_pengaturan("info-registrasi", "value");
            echo "
                </div>
                ";
        }
        // line 274
        echo "
                <ul class=\"nav nav-tabs\">
                    ";
        // line 276
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 277
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-siswa\" data-toggle=\"tab\">Sebagai siswa</a></li>
                    ";
        }
        // line 279
        echo "
                    ";
        // line 280
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 281
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-pengajar\" data-toggle=\"tab\">Sebagai pengajar</a></li>
                    ";
        }
        // line 283
        echo "                </ul>

                <div class=\"tab-content\">
                    ";
        // line 286
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 287
            echo "                    <div class=\"tab-pane fade ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("active") : (""));
            echo " in\" id=\"register-siswa\">
                        ";
            // line 288
            echo form_open_multipart("login/register/siswa", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIS</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"span4\" value=\"";
            // line 292
            echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
            echo "\">
                                    <br>";
            // line 293
            echo form_error("nis");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 299
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 300
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
            // line 306
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
            // line 307
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 308
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tahun Masuk <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tahun_masuk\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 314
            echo twig_escape_filter($this->env, set_value("tahun_masuk"), "html", null, true);
            echo "\">
                                    <br>";
            // line 315
            echo form_error("tahun_masuk");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <select class=\"span3\" name=\"kelas_id\">
                                        <option value=\"\">--pilih--</option>
                                        ";
            // line 323
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 324
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
            // line 326
            echo "                                    </select>
                                    <br>";
            // line 327
            echo form_error("kelas_id");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 333
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 334
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
            // line 342
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 343
                echo "                                            <option value=\"";
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
            // line 345
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>
                                        ";
            // line 348
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 349
                echo "                                            <option value=\"";
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
            // line 351
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 352
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 353
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Agama</label>
                                <div class=\"controls\">
                                    <select name=\"agama\" class=\"span2\">
                                        <option value=\"\">--pilih--</option>
                                        <option value=\"ISLAM\" ";
            // line 361
            echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
            echo ">ISLAM</option>
                                        <option value=\"KRISTEN\" ";
            // line 362
            echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
            echo ">KRISTEN</option>
                                        <option value=\"KATOLIK\" ";
            // line 363
            echo twig_escape_filter($this->env, set_select("agama", "KATOLIK"), "html", null, true);
            echo ">KATOLIK</option>
                                        <option value=\"HINDU\" ";
            // line 364
            echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
            echo ">HINDU</option>
                                        <option value=\"BUDHA\" ";
            // line 365
            echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
            echo ">BUDHA</option>
                                    </select>
                                    <br>";
            // line 367
            echo form_error("agama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span8\" value=\"";
            // line 373
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 374
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 380
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 381
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 387
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 388
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 394
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 395
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>
                        ";
            // line 403
            echo form_close();
            echo "
                    </div>
                    ";
        }
        // line 406
        echo "
                    ";
        // line 407
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 408
            echo "                    <div class=\"tab-pane fade ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("active") : (""));
            echo " in\" id=\"register-pengajar\">
                        ";
            // line 409
            echo form_open_multipart("login/register/pengajar", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIP</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nip\" name=\"nip\" class=\"span4\" value=\"";
            // line 413
            echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
            echo "\">
                                    <br>";
            // line 414
            echo form_error("nip");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 420
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 421
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
            // line 427
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
            // line 428
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 429
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 435
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 436
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
            // line 444
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 445
                echo "                                            <option value=\"";
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
            // line 447
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>
                                        ";
            // line 450
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 451
                echo "                                            <option value=\"";
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
            // line 453
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 454
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 455
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span10\" value=\"";
            // line 461
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 462
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 468
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 469
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 475
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 476
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 482
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 483
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>
                        ";
            // line 491
            echo form_close();
            echo "
                    </div>
                    ";
        }
        // line 494
        echo "
                </div>
            </div>
    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1047 => 494,  1041 => 491,  1030 => 483,  1026 => 482,  1017 => 476,  1013 => 475,  1004 => 469,  1000 => 468,  991 => 462,  987 => 461,  978 => 455,  974 => 454,  971 => 453,  958 => 451,  954 => 450,  949 => 447,  936 => 445,  932 => 444,  921 => 436,  917 => 435,  908 => 429,  904 => 428,  900 => 427,  891 => 421,  887 => 420,  878 => 414,  874 => 413,  867 => 409,  862 => 408,  860 => 407,  857 => 406,  851 => 403,  840 => 395,  836 => 394,  827 => 388,  823 => 387,  814 => 381,  810 => 380,  801 => 374,  797 => 373,  788 => 367,  783 => 365,  779 => 364,  775 => 363,  771 => 362,  767 => 361,  756 => 353,  752 => 352,  749 => 351,  736 => 349,  732 => 348,  727 => 345,  714 => 343,  710 => 342,  699 => 334,  695 => 333,  686 => 327,  683 => 326,  670 => 324,  666 => 323,  655 => 315,  651 => 314,  642 => 308,  638 => 307,  634 => 306,  625 => 300,  621 => 299,  612 => 293,  608 => 292,  601 => 288,  596 => 287,  594 => 286,  589 => 283,  583 => 281,  581 => 280,  578 => 279,  572 => 277,  570 => 276,  566 => 274,  560 => 271,  556 => 269,  554 => 268,  549 => 266,  523 => 243,  509 => 232,  505 => 231,  498 => 227,  494 => 226,  487 => 222,  483 => 221,  476 => 217,  472 => 216,  464 => 211,  460 => 210,  457 => 209,  444 => 207,  440 => 206,  435 => 203,  422 => 201,  418 => 200,  408 => 193,  404 => 192,  397 => 188,  391 => 185,  386 => 183,  378 => 178,  374 => 177,  367 => 173,  363 => 172,  356 => 168,  340 => 155,  328 => 146,  324 => 145,  317 => 141,  313 => 140,  306 => 136,  302 => 135,  295 => 131,  291 => 130,  284 => 126,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  253 => 113,  249 => 112,  246 => 111,  233 => 109,  229 => 108,  224 => 105,  211 => 103,  207 => 102,  197 => 95,  193 => 94,  186 => 90,  183 => 89,  170 => 87,  166 => 86,  157 => 80,  153 => 79,  146 => 75,  140 => 72,  135 => 70,  127 => 65,  123 => 64,  116 => 60,  112 => 59,  105 => 55,  86 => 38,  79 => 34,  74 => 31,  72 => 30,  68 => 29,  55 => 19,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
