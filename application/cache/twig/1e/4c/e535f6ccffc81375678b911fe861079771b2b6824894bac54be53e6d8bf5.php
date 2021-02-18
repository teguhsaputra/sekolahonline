<?php

/* list-login-log.html */
class __TwigTemplate_1e4ce535f6ccffc81375678b911fe861079771b2b6824894bac54be53e6d8bf5 extends Twig_Template
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
        echo "Login log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Login Log</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            ";
        // line 16
        if (is_admin()) {
            // line 17
            echo "                <li class=\"breadcumb-item\">";
            echo anchor(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "List Siswa");
            echo " / Login Log</a></li>
            ";
        } else {
            // line 19
            echo "                <li class=\"breadcumb-item\">";
            echo anchor("siswa/filter", "Filter Siswa");
            echo " / Login Log</a></li>
            ";
        }
        // line 21
        echo "        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class=\"content\">
    <div class=\"container-fluid\">
    <!-- Small boxes (Stat box) -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header text-light\" style=\"background-color: #0beef9;background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);\">
                    <h3 class=\"card-title\">Username : ";
        // line 34
        echo (isset($context["nama"]) ? $context["nama"] : null);
        echo "</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table id=\"TablePengumuman\" class=\"table table-bordered\">
                        <thead>
                            <th>Tanggal</th>
                            <th>IP</th>
                            <th>Agent</th>
                        </thead>
                        <tbody>
                            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["log"]) ? $context["log"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 47
            echo "                            ";
            $context["a"] = json_decode($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "agent"), 1);
            // line 48
            echo "                            <tr>
                                <td>
                                ";
            // line 50
            if ((!twig_test_empty($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago")))) {
                // line 51
                echo "                                    <time class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "</time>
                                ";
            } else {
                // line 53
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "
                                ";
            }
            // line 55
            echo "                                </td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ip"), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "agent_string"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>IP</th>
                            <th>Agent</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                        ";
        // line 73
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
                    </div>
                    ";
        // line 75
        echo form_close();
        echo "
                </div>
                <!-- /.card -->
            </div>
        <!-- /.row (main row) -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "list-login-log.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 75,  154 => 73,  139 => 60,  130 => 57,  126 => 56,  123 => 55,  117 => 53,  109 => 51,  107 => 50,  103 => 48,  100 => 47,  96 => 46,  81 => 34,  66 => 21,  60 => 19,  54 => 17,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
