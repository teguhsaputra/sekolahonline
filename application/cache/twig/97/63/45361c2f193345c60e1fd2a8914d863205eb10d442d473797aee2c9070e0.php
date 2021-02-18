<?php

/* detail-pesan-item.html */
class __TwigTemplate_976345361c2f193345c60e1fd2a8914d863205eb10d442d473797aee2c9070e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"chat-left\" id=\"msg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "id"), "html", null, true);
        echo "\">
    <div class=\"chat-avatar\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "link_image"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
        echo "\">
        <div class=\"chat-name\">";
        // line 4
        echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
        echo "</div>
    </div>
    <div class=\"chat-text\">";
        // line 6
        echo $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "content");
        echo "</div>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "timeago")))) {
            // line 8
            echo "        <time class=\"timeago chat-hour\" datetime=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "timeago"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "date"), "html", null, true);
            echo "</time><!-- <span class=\"fas fa-trash\" onclick=\"return confirm('Anda yakin ingin menghapus?'),window.location.href='";
            echo twig_escape_filter($this->env, site_url(((("message/del/" . $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "id")) . "/") . (isset($context["active_msg_id"]) ? $context["active_msg_id"] : null))), "html", null, true);
            echo "' \"></span> -->
    ";
        } else {
            // line 10
            echo "        <small class=\"chat-hour\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "date"), "html", null, true);
            echo "</small><!-- <span class=\"fas fa-trash\" onclick=\"return confirm('Anda yakin ingin menghapus?'),window.location.href='";
            echo twig_escape_filter($this->env, site_url(((("message/del/" . $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "id")) . "/") . (isset($context["active_msg_id"]) ? $context["active_msg_id"] : null))), "html", null, true);
            echo "' \"></span> -->
    ";
        }
        // line 12
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "detail-pesan-item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  52 => 10,  40 => 7,  36 => 6,  31 => 4,  25 => 3,  19 => 1,  590 => 440,  587 => 439,  580 => 435,  576 => 434,  570 => 430,  568 => 429,  565 => 428,  559 => 425,  553 => 422,  549 => 421,  545 => 420,  541 => 419,  537 => 417,  535 => 416,  531 => 414,  517 => 413,  514 => 412,  511 => 411,  493 => 410,  490 => 409,  488 => 408,  485 => 407,  471 => 406,  468 => 405,  465 => 404,  448 => 403,  441 => 399,  434 => 394,  432 => 393,  421 => 385,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
