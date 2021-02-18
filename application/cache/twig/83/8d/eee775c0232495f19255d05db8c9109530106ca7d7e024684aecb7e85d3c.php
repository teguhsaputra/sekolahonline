<?php

/* detail-pengumuman.html */
class __TwigTemplate_838deee775c0232495f19255d05db8c9109530106ca7d7e024684aecb7e85d3c extends Twig_Template
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
        echo "Detail Pengumuman - ";
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
        <h1>Detail Pengumuman</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\">Pengumuman</a></li>
            <li class=\"breadcrumb-item active\">Detail Pengumuman</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

";
        // line 25
        echo get_flashdata("pengumuman");
        echo "

<div class=\"d-flex justify-content-center\">
    <div class=\"col-lg-10 col-md-10 col-xs-12 p-3\" id=\"popLihat\">
        <div class=\"card card-info\">
            <div class=\"card-header\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
            <h3 class=\"card-title\">
                Lihat Pengumuman
            </h3>
            </div>
            <!-- /.card-header -->
            <div class=\"card-body pad\">
                <h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"), "html", null, true);
        echo "</h3>
                <p><i class=\"fas fa-calendar-check mr-2\"></i>Tanggal : ";
        // line 38
        echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil")), "html", null, true);
        echo " s/d ";
        echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tutup")), "html", null, true);
        echo "</p>
                <div style=\"background-color: #f8f9d2;background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%);\" class=\"p-3 m-2\">
                    <p>";
        // line 40
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten");
        echo "</p><br/><br/>
                </div>
                <p>Pembuat : ";
        // line 42
        echo anchor($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar"), "link_profil"), $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar"), "nama"));
        echo " </p>
            </div>
            <div class=\"card-footer\">
                <div class=\"btn-group flex-wrap\">
                    ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "allow_action"));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 47
            echo "                        ";
            if (((isset($context["a"]) ? $context["a"] : null) == "edit")) {
                // line 48
                echo "                        <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"fas fa-edit mr-1\"></i>Edit</a>
                        ";
            }
            // line 50
            echo "            
                        ";
            // line 51
            if (((isset($context["a"]) ? $context["a"] : null) == "delete")) {
                // line 52
                echo "                        <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengumuman/delete/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Hapus\"><i class=\"fas fa-trash mr-1\"></i>Hapus</a>
                        ";
            }
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Kembali\"><i class=\"fas fa-kembali mr-1\"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  126 => 54,  120 => 52,  118 => 51,  115 => 50,  109 => 48,  106 => 47,  102 => 46,  95 => 42,  90 => 40,  83 => 38,  79 => 37,  64 => 25,  53 => 17,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
