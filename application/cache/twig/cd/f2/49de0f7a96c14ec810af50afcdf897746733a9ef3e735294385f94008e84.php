<?php

/* hapus-data.html */
class __TwigTemplate_cdf249de0f7a96c14ec810af50afcdf897746733a9ef3e735294385f94008e84 extends Twig_Template
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
        echo "Hapus Data - ";
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
        <h1>Hapus Data</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Hapus Data</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <p><b>Note:</b> Data yang sudah dihapus tidak dapat dikembalikan lagi.</p>
        
                ";
        // line 31
        echo get_flashdata("hapus_data");
        echo "
        
                ";
        // line 33
        if (is_demo_app()) {
            // line 34
            echo "                    ";
            echo get_alert("warning", get_demo_msg());
            echo "
                ";
        }
        // line 36
        echo "        
                <form class=\"form-search\" method=\"post\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/siswa"), "html", null, true);
        echo "\">
                    <div class=\"input-append d-flex\">
                        <input type=\"text\" class=\"col-7 form-control mr-2\" placeholder=\"Siswa ID, pisah dengan koma jika lebih dari satu.\" name=\"siswa_id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, set_value("siswa_id"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-primary\">Hapus siswa</button>
                    </div>
                    <br>";
        // line 42
        echo form_error("siswa_id");
        echo "
                </form>
                <br>
                <form class=\"form-search\" method=\"post\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/pengajar"), "html", null, true);
        echo "\">
                    <div class=\"input-append d-flex\">
                        <input type=\"text\" class=\"col-7 form-control mr-2\" placeholder=\"Pengajar ID, pisah dengan koma jika lebih dari satu.\" name=\"pengajar_id\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, set_value("pengajar_id"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-primary\">Hapus pengajar</button>
                    </div>
                    <br>";
        // line 50
        echo form_error("pengajar_id");
        echo "
                </form>
                <br>
                <form class=\"form-search\" method=\"post\" action=\"";
        // line 53
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/tugas"), "html", null, true);
        echo "\">
                    <div class=\"input-append d-flex\">
                        <input type=\"text\" class=\"col-7 form-control mr-2\" placeholder=\"Tugas ID, pisah dengan koma jika lebih dari satu.\" name=\"tugas_id\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("tugas_id"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-primary\">Hapus tugas</button>
                    </div>
                    <br>";
        // line 58
        echo form_error("tugas_id");
        echo "
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "hapus-data.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 58,  125 => 55,  120 => 53,  114 => 50,  108 => 47,  103 => 45,  97 => 42,  91 => 39,  86 => 37,  83 => 36,  77 => 34,  75 => 33,  70 => 31,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
