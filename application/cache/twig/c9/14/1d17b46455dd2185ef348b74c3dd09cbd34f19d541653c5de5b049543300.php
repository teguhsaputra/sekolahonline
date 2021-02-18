<?php

/* layout-private.html */
class __TwigTemplate_c9141d17b46455dd2185ef348b74c3dd09cbd34f19d541653c5de5b049543300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "        <style>
          @media screen and (max-width:410px) {
            #nama_panggilan{
              display: none;
            }
          }
        </style>
    </head>

<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\" method=\"get\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url("/index.php/welcome/search?q="), "html", null, true);
        echo "\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"text\" name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>
    
    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\"> <b id=\"nama_panggilan\">";
        // line 43
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "</b>
          <i class=\"fas fa-user-circle pl-2 fa-lg\" style=\"font-size: 30px;font: outline;\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                ";
        // line 47
        if (is_admin()) {
            // line 48
            echo "                ";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "<i class=\"fas fa-address-card mr-2\"></i>Detail Profil", array("title" => "Detail Profil", "class" => "dropdown-item"));
            echo "
                ";
        }
        // line 50
        echo "        
                ";
        // line 51
        if (is_pengajar()) {
            // line 52
            echo "                ";
            echo anchor("login/pp", "<i class=\"fas fa-address-card mr-2\"></i> Profil & Akun Login", array("class" => "dropdown-item"));
            echo "
                ";
        }
        // line 54
        echo "        
                ";
        // line 55
        if (is_siswa()) {
            // line 56
            echo "                ";
            echo anchor("login/pp", "<i class=\"fas fa-address-card mr-2\"></i> Profil & Akun Login", array("class" => "dropdown-item"));
            echo "
                ";
        }
        // line 58
        echo "    
            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, site_url(("login/login_log/" . get_sess_data("login", "id"))), "html", null, true);
        echo "\" class=\"dropdown-item\">
                <i class=\"fas fa-history mr-2\"></i>Login log
            </a>
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                <i class=\"fas fa-power-off mr-2\"></i>Logout
            </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" class=\"brand-link\">
      <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\" alt=\"SekolahOnline Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Sekolah Online</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          ";
        // line 88
        if (is_admin()) {
            // line 89
            echo "          ";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), nama_panggilan(get_sess_data("user", "nama")), array("class" => "d-block"));
            echo "
          ";
        }
        // line 91
        echo "        
          ";
        // line 92
        if (is_pengajar()) {
            // line 93
            echo "          ";
            echo anchor("login/pp", nama_panggilan(get_sess_data("user", "nama")), array("class" => "d-block"));
            echo "
          ";
        }
        // line 95
        echo "        
          ";
        // line 96
        if (is_siswa()) {
            // line 97
            echo "          ";
            echo anchor("login/pp", nama_panggilan(get_sess_data("user", "nama")), array("class" => "d-block"));
            echo "
          ";
        }
        // line 99
        echo "        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
          ";
        // line 104
        $this->env->loadTemplate("sidebar-menu.html")->display($context);
        // line 105
        echo "      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header mb-3\" style=\"background-color: #0beef9;
background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-light\">Platform Sekolah Online</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    ";
        // line 126
        if ((pass_siswa_equal_nis() == true)) {
            // line 127
            echo "        ";
            echo get_alert("warning", ("Dimohon untuk segera mengganti password anda untuk alasan keamanan. " . anchor("login/pp?show=edit-password", "Ganti Password")));
            echo "
    ";
        }
        // line 129
        echo "    
    ";
        // line 130
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "  </div>
  
      <footer class=\"main-footer text-center\">
        <b class=\"copyright\">";
        // line 134
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.
                    ";
        // line 135
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in ";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
      </footer>
  
        ";
        // line 138
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 139
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 140
        echo "</div>
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
    }

    // line 139
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-private.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 139,  277 => 130,  272 => 6,  266 => 4,  259 => 140,  256 => 139,  254 => 138,  246 => 135,  242 => 134,  237 => 131,  235 => 130,  232 => 129,  226 => 127,  224 => 126,  201 => 105,  199 => 104,  192 => 99,  186 => 97,  184 => 96,  181 => 95,  175 => 93,  173 => 92,  170 => 91,  164 => 89,  162 => 88,  156 => 85,  143 => 75,  139 => 74,  124 => 62,  118 => 59,  115 => 58,  109 => 56,  107 => 55,  104 => 54,  98 => 52,  96 => 51,  93 => 50,  87 => 48,  85 => 47,  78 => 43,  61 => 29,  37 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }
}
