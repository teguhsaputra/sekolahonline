<?php

/* lupa-password.html */
class __TwigTemplate_3826e2ae765ddda07648a44694bef179e1d46dede0a5f04181c54b939f554685 extends Twig_Template
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
        echo "Lupa password - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"login-box\">
  <div class=\"login-logo\">
    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\" class=\"img-lg\"/>
    <a href=\"./\"><b>Sekolah</b>Online</a>
    <a href=\"./\"><i>AnugerahAbadi</i></a>
  </div>
  <!-- /.login-logo -->
  <div class=\"card\">
    <div class=\"card-body login-card-body\">
      <p class=\"login-box-msg\">";
        // line 18
        echo form_error("email");
        echo "</p>
      ";
        // line 19
        echo get_flashdata("lupa_password");
        echo "
      ";
        // line 20
        echo form_open("login/lupa_password", array("class" => "form-vertical"));
        echo "
        <div class=\"input-group mb-3\">
        <input class=\"form-control\" name=\"email\" type=\"text\" placeholder=\"Masukkan username (Email)\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\" autofocus>
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Request Password Baru</button>
          </div>
          <!-- /.col -->
        </div>
      ";
        // line 35
        echo (isset($context["form_close"]) ? $context["form_close"] : null);
        echo "

      <p class=\"mt-3 mb-1\">
        <a href=\"../\">Login</a>
      </p>
      <p class=\"mb-0\">
        <a href=\"./register\" class=\"text-center\">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!--
<div class=\"row\">
    <div class=\"module span4 offset4\">
        ";
        // line 52
        echo form_open("login/lupa_password", array("class" => "form-vertical"));
        echo "
            <div class=\"module-head\">
                <h3>Lupa password</h3>
            </div>
            <div class=\"module-body\">
               ";
        // line 57
        echo get_flashdata("lupa_password");
        echo "
                <div class=\"control-group\">
                    <div class=\"controls row-fluid\">
                        <input class=\"span12\" name=\"email\" type=\"text\" placeholder=\"Masukkan username (Email)\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\" autofocus>
                        ";
        // line 61
        echo form_error("email");
        echo "
                    </div>
                </div>
            </div>
            <div class=\"module-foot\">
                <div class=\"control-group\">
                    <div class=\"controls clearfix\">
                        <button type=\"submit\" class=\"btn btn-large btn-primary pull-right\">Kirim</button>
                    </div>
                </div>
            </div>
        ";
        // line 72
        echo (isset($context["form_close"]) ? $context["form_close"] : null);
        echo "
    </div>
</div>
-->


";
    }

    public function getTemplateName()
    {
        return "lupa-password.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  124 => 61,  120 => 60,  114 => 57,  106 => 52,  86 => 35,  70 => 22,  65 => 20,  61 => 19,  57 => 18,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
