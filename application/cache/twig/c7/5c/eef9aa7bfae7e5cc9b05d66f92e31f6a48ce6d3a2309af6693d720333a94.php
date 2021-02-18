<?php

/* login.html */
class __TwigTemplate_c75ceef9aa7bfae7e5cc9b05d66f92e31f6a48ce6d3a2309af6693d720333a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-public.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-public.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        if ((!twig_test_empty((isset($context["sliders"]) ? $context["sliders"] : null)))) {
            // line 9
            echo "    <div class=\"slideshow\">
        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 11
                echo "            <div class=\"slideshow-image\" style=\"background-image: url(' ";
                echo twig_escape_filter($this->env, get_url_image($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "value")), "html", null, true);
                echo " ')\"></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        // line 15
        echo "<div class=\"login-box bg-light p-3 m-3 rounded\">
  <div class=\"login-logo\">
    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\" class=\"img-lg\"/>
    <a href=\"./\"><b>Sekolah</b>Online</a>
    <a href=\"./\"><i>SMPIT AL FADL</i></a>
  </div>
  <!-- /.login-logo -->
  <div class=\"card\">
  <!--
    <div class=\"card-header\">
        <nav class=\"navbar navbar-expand-md navbar-light navbar-white\">
            <div class=\"container\">
                <a href=\"../../index3.html\" class=\"navbar-brand\">
                    <span class=\"brand-text font-weight-light\"></span>
                </a>
                
                <button class=\"navbar-toggler order-1\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
        </nav>
    </div>
    -->
    <div class=\"card-body login-card-body\">
        
      <p class=\"login-box-msg text-danger\">";
        // line 40
        echo form_error("email");
        echo "</p>
        ";
        // line 41
        echo get_flashdata("login");
        echo "
        ";
        // line 42
        echo form_open("login", array("autocomplete" => "off", "class" => "form-vertical"));
        echo "
        
        <div class=\"input-group mb-3\">
          <input class=\"form-control\" name=\"email\" type=\"text\" placeholder=\"Username (Email)\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\" autofocus>
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          <input class=\"form-control\" name=\"password\" type=\"password\" placeholder=\"Password\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-8\">
            <p class=\"mb-1\">
                ";
        // line 63
        if (((get_pengaturan("registrasi-siswa", "value") == 1) || (get_pengaturan("registrasi-pengajar", "value") == 1))) {
            // line 64
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, site_url("login/lupa_password"), "html", null, true);
            echo "\">Lupa password?</a>
                ";
        }
        // line 66
        echo "            </p>
            <p class=\"mb-0\">
                ";
        // line 68
        if (((get_pengaturan("registrasi-siswa", "value") == 1) || (get_pengaturan("registrasi-pengajar", "value") == 1))) {
            // line 69
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, site_url("login/register"), "html", null, true);
            echo "\" class=\"text-center\">Daftar</a></li>
                ";
        }
        // line 71
        echo "            </p>
<!--        <div class=\"icheck-primary\">
              <input type=\"checkbox\" id=\"remember\">
              <label for=\"remember\">
                Remember Me
              </label>
            </div>
-->
          </div>
          <!-- /.col -->
          <div class=\"col-12\">
             <div class=\"g-recaptcha mb-3\" data-sitekey=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["site_key"]) ? $context["site_key"] : null), "html", null, true);
        echo "\"></div> 
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      ";
        // line 87
        echo form_close();
        echo "
<!--
      <div class=\"social-auth-links text-center mb-3\">
        <p>- OR -</p>
        <a href=\"#\" class=\"btn btn-block btn-primary\">
          <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
        </a>
        <a href=\"#\" class=\"btn btn-block btn-danger\">
          <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
<!--  
      <p class=\"mb-1\">
        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, site_url("login/lupa_password"), "html", null, true);
        echo "\">Lupa password?</a>
      </p>
      <p class=\"mb-0\">
        ";
        // line 104
        if (((get_pengaturan("registrasi-siswa", "value") == 1) || (get_pengaturan("registrasi-pengajar", "value") == 1))) {
            // line 105
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, site_url("login/register"), "html", null, true);
            echo "\" class=\"text-center\">Register</a></li>
        ";
        }
        // line 107
        echo "      </p>
-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!--
<div class=\"row\">
    ";
        // line 118
        if ((!twig_test_empty((isset($context["sliders"]) ? $context["sliders"] : null)))) {
            // line 119
            echo "    <div class=\"span5 offset1\">
        <div class=\"slider-wrapper theme-light\">
            <div id=\"slider-login\" class=\"nivoSlider\">
                ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 123
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, get_url_image($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "value")), "html", null, true);
                echo "\" data-thumb=\"";
                echo twig_escape_filter($this->env, get_url_image($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "value")), "html", null, true);
                echo "\" title=\"#html";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "            </div>
            ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 127
                echo "            <div id=\"html";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\" class=\"nivo-html-caption\">
                ";
                // line 128
                echo $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "title");
                echo "
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </div>
    </div>
    ";
        }
        // line 134
        echo "    
    <div class=\"module span4 ";
        // line 135
        echo ((twig_test_empty((isset($context["sliders"]) ? $context["sliders"] : null))) ? ("offset4") : (""));
        echo "\">
        ";
        // line 136
        echo form_open("login", array("autocomplete" => "off", "class" => "form-vertical"));
        echo "
            <div class=\"module-head\">
                <h3>Login E-learning</h3>
            </div>
            <div class=\"module-body\">
               ";
        // line 141
        echo get_flashdata("login");
        echo "
                <div class=\"control-group\">
                    <div class=\"controls row-fluid\">
                        <input class=\"span12\" name=\"email\" type=\"text\" placeholder=\"Username (Email)\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\" autofocus>
                        ";
        // line 145
        echo form_error("email");
        echo "
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"controls row-fluid\">
                        <input class=\"span12\" name=\"password\" type=\"password\" placeholder=\"Password\">
                    </div>
                </div>
            </div>
            <div class=\"module-foot\">
                <div class=\"control-group\">
                    <div class=\"controls clearfix\">
                        <button type=\"submit\" class=\"btn btn-large btn-primary pull-right\">Login</button>
                        <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, site_url("login/lupa_password"), "html", null, true);
        echo "\">Lupa password?</a>
                    </div>
                </div>
            </div>
        ";
        // line 162
        echo form_close();
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 162,  305 => 158,  289 => 145,  285 => 144,  279 => 141,  271 => 136,  267 => 135,  264 => 134,  259 => 131,  250 => 128,  245 => 127,  241 => 126,  238 => 125,  225 => 123,  221 => 122,  216 => 119,  214 => 118,  201 => 107,  195 => 105,  193 => 104,  187 => 101,  170 => 87,  162 => 82,  149 => 71,  143 => 69,  141 => 68,  137 => 66,  131 => 64,  129 => 63,  108 => 45,  102 => 42,  98 => 41,  94 => 40,  68 => 17,  64 => 15,  60 => 13,  51 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
