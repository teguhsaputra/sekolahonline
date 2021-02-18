<?php

/* list-inbox.html */
class __TwigTemplate_0e76ab62e07afcd72ffe171409b0a6dbbb650bf91e8a072a4e9ac9dcbf44706d extends Twig_Template
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
        echo "Pesan - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- Main content -->
<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>List Pesan</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\">Beranda</a></li>
            <li class=\"breadcrumb-item active\">Pesan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section> 

";
        // line 26
        echo get_flashdata("msg");
        echo "   

<section class=\"content\">
    <div class=\"row d-flex justify-content-center\">
    <!-- /.col -->
    <div class=\"col-lg-9 col-md-10 col-xs-12 p-3\">
        <div class=\"card card-primary card-outline\">
        <div class=\"card-header\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, site_url("message/create/"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">Tulis Surat</a>
            <div class=\"card-tools\">
                <form class=\"form-search\" method=\"get\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, site_url("message/index/"), "html", null, true);
        echo "\">
                    <div class=\"input-group input-group-sm\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Cari pesan ...\" name=\"q\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                        <div class=\"input-group-append\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class=\"card-body p-0\">
            <div class=\"mailbox-controls\">
            <!-- /.btn-group -->
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-sync-alt\"></i></a>
            <div class=\"float-right\">
                ";
        // line 55
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
            <!-- /.float-right -->
            </div>
            <div class=\"table-responsive mailbox-messages\">
                <table class=\"table table-hover table-striped message table-message\">
                    <tbody>
                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 63
            echo "                        <tr class=\"";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "opened") == 0)) ? ("unread") : (""));
            echo " clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, site_url(((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "#msg-") . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id"))), "html", null, true);
            echo "\">
                            <td>
                                <a class=\"btn btn-default btn-sm\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, site_url((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "/?confirm=1#confirm")), "html", null, true);
            echo "\" ><i class=\"far fa-trash-alt\"></i></a>
                            </td>
                            <td class=\"mailbox-name\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
            echo "</a>";
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver")))) {
                echo "<i>
                            - Kepada : <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "nama"), "html", null, true);
                echo "</a></i>";
            }
            echo "</td>
                            <td class=\"mailbox-subject\">";
            // line 69
            echo character_limiter(strip_tags($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "content")), 80, "...");
            echo "</td>
                            <td class=\"mailbox-date\">
                                ";
            // line 71
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago")))) {
                // line 72
                echo "                                    <time class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</time>
                                ";
            } else {
                // line 74
                echo "                                    <small>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</small>
                                ";
            }
            // line 76
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    </tbody>
                </table>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
        <div class=\"card-footer p-0\">
            <div class=\"mailbox-controls\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-sync-alt\"></i></a>
                </div>
            <div class=\"float-right\">
                ";
        // line 92
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
            </div>
            <!-- /.float-right -->
            </div>
        </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<!--
<div class=\"module message\">
    <div class=\"module-head\">
        <h3>Pesan</h3>
    </div>
    <div class=\"module-body\">
        <div class=\"module-option clearfix\">
            ";
        // line 112
        echo get_flashdata("msg");
        echo "

            <div class=\"pull-right\">
                <form class=\"form-search\" method=\"get\" action=\"";
        // line 115
        echo twig_escape_filter($this->env, site_url("message/index/"), "html", null, true);
        echo "\">
                    <div class=\"input-append\">
                        <input type=\"text\" class=\"span3 search-query\" placeholder=\"cari pesan...\" name=\"q\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i></button>
                    </div>
                </form>
            </div>
            <div class=\"pull-left\">
                <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, site_url("message/create/"), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"icon-pencil\"></i> Tulis pesan</a>
            </div>
        </div>
        <div class=\"module-body table\">
            <table class=\"table table-message\">
                <tbody>
                    ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 130
            echo "                    <tr class=\"";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "opened") == 0)) ? ("unread") : (""));
            echo " clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, site_url(((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "#msg-") . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id"))), "html", null, true);
            echo "\">
                        <td class=\"cell-author\">
                            <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_image"), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
            echo "</a>
                            <br>
                            ";
            // line 135
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago")))) {
                // line 136
                echo "                                <time class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</time>
                            ";
            } else {
                // line 138
                echo "                                <small>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</small>
                            ";
            }
            // line 140
            echo "                        </td>
                        <td class=\"cell-title hidden-phone hidden-tablet\">
                            <a class=\"pull-right\" style=\"margin-left:10px;\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, site_url((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "/?confirm=1#confirm")), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            ";
            // line 143
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver")))) {
                // line 144
                echo "                            <div>To <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "nama"), "html", null, true);
                echo "</a></div>
                            ";
            }
            // line 146
            echo "                            ";
            echo character_limiter(strip_tags($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "content")), 80, "...");
            echo "
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "
                </tbody>
            </table>
        </div>
        <div class=\"module-foot\">
            ";
        // line 155
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
        </div>

    </div>
</div>
-->
";
    }

    public function getTemplateName()
    {
        return "list-inbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 155,  319 => 150,  308 => 146,  300 => 144,  298 => 143,  294 => 142,  290 => 140,  284 => 138,  276 => 136,  274 => 135,  267 => 133,  263 => 132,  255 => 130,  251 => 129,  242 => 123,  233 => 117,  228 => 115,  222 => 112,  199 => 92,  193 => 89,  181 => 79,  173 => 76,  167 => 74,  159 => 72,  157 => 71,  152 => 69,  144 => 68,  136 => 67,  131 => 65,  123 => 63,  119 => 62,  109 => 55,  104 => 53,  86 => 38,  81 => 36,  76 => 34,  65 => 26,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
