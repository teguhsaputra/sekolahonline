<?php

/* detail-pesan.html */
class __TwigTemplate_4409d83e7bf14b54192c22f7dbfcdca4c07e33344cb30d5e515e720c695ac3be extends Twig_Template
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
        echo "Detail Percakapan - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<style type=\"text/css\">
.chat-search-box {
    -webkit-border-radius: 3px 0 0 0;
    -moz-border-radius: 3px 0 0 0;
    border-radius: 3px 0 0 0;
    padding: .75rem 1rem;
}

.chat-search-box .input-group .form-control {
    -webkit-border-radius: 2px 0 0 2px;
    -moz-border-radius: 2px 0 0 2px;
    border-radius: 2px 0 0 2px;
    border-right: 0;
}

.chat-search-box .input-group .form-control:focus {
    border-right: 0;
}

.chat-search-box .input-group .input-group-btn .btn {
    -webkit-border-radius: 0 2px 2px 0;
    -moz-border-radius: 0 2px 2px 0;
    border-radius: 0 2px 2px 0;
    margin: 0;
}

.chat-search-box .input-group .input-group-btn .btn i {
    font-size: 1.2rem;
    line-height: 100%;
    vertical-align: middle;
}

@media (max-width: 767px) {
    .chat-search-box {
        display: none;
    }
}


/************************************************
\t************************************************
\t\t\t\t\t\t\t\t\tUsers Container
\t************************************************
************************************************/

.users-container {
    position: relative;
    padding: 1rem 0;
    border-right: 1px solid #e6ecf3;
    height: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}


/************************************************
\t************************************************
\t\t\t\t\t\t\t\t\t\t\tUsers
\t************************************************
************************************************/

.users {
    padding: 0;
}

.users .person {
    position: relative;
    width: 100%;
    padding: 10px 1rem;
    cursor: pointer;
    border-bottom: 1px solid #f0f4f8;
}

.users .person:hover {
    background-color: #ffffff;
    /* Fallback Color */
    background-image: -webkit-gradient(linear, left top, left bottom, from(#e9eff5), to(#ffffff));
    /* Saf4+, Chrome */
    background-image: -webkit-linear-gradient(right, #e9eff5, #ffffff);
    /* Chrome 10+, Saf5.1+, iOS 5+ */
    background-image: -moz-linear-gradient(right, #e9eff5, #ffffff);
    /* FF3.6 */
    background-image: -ms-linear-gradient(right, #e9eff5, #ffffff);
    /* IE10 */
    background-image: -o-linear-gradient(right, #e9eff5, #ffffff);
    /* Opera 11.10+ */
    background-image: linear-gradient(right, #e9eff5, #ffffff);
}

.users .person.active-user {
    background-color: #ffffff;
    /* Fallback Color */
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f9fb), to(#ffffff));
    /* Saf4+, Chrome */
    background-image: -webkit-linear-gradient(right, #f7f9fb, #ffffff);
    /* Chrome 10+, Saf5.1+, iOS 5+ */
    background-image: -moz-linear-gradient(right, #f7f9fb, #ffffff);
    /* FF3.6 */
    background-image: -ms-linear-gradient(right, #f7f9fb, #ffffff);
    /* IE10 */
    background-image: -o-linear-gradient(right, #f7f9fb, #ffffff);
    /* Opera 11.10+ */
    background-image: linear-gradient(right, #f7f9fb, #ffffff);
}

.users .person:last-child {
    border-bottom: 0;
}

.users .person .user {
    display: inline-block;
    position: relative;
    margin-right: 10px;
}

.users .person .user img {
    width: 48px;
    height: 48px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}

.users .person .user .status {
    width: 10px;
    height: 10px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    background: #e6ecf3;
    position: absolute;
    top: 0;
    right: 0;
}

.users .person .user .status.online {
    background: #9ec94a;
}

.users .person .user .status.offline {
    background: #c4d2e2;
}

.users .person .user .status.away {
    background: #f9be52;
}

.users .person .user .status.busy {
    background: #fd7274;
}

.users .person p.name-time {
    font-weight: 600;
    font-size: .85rem;
    display: inline-block;
}

.users .person p.name-time .time {
    font-weight: 400;
    font-size: .7rem;
    text-align: right;
    color: #8796af;
}

@media (max-width: 767px) {
    .users .person .user img {
        width: 30px;
        height: 30px;
    }
    .users .person p.name-time {
        display: none;
    }
    .users .person p.name-time .time {
        display: none;
    }
}


/************************************************
\t************************************************
\t\t\t\t\t\t\t\t\tChat right side
\t************************************************
************************************************/

.selected-user {
    width: 100%;
    padding: 0 15px;
    min-height: 64px;
    line-height: 64px;
    border-bottom: 1px solid #e6ecf3;
    -webkit-border-radius: 0 3px 0 0;
    -moz-border-radius: 0 3px 0 0;
    border-radius: 0 3px 0 0;
}

.selected-user span {
    line-height: 100%;
}

.selected-user span.name {
    font-weight: 700;
}

.chat-container {
    position: relative;
    padding: 1rem;
}

.chat-container li.chat-left,
.chat-container li.chat-right {
    display: flex;
    flex: 1;
    flex-direction: row;
    margin-bottom: 40px;
}

.chat-container li img {
    width: 48px;
    height: 48px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
}

.chat-container li .chat-avatar {
    margin-right: 20px;
}

.chat-container li.chat-right {
    justify-content: flex-end;
}

.chat-container li.chat-right > .chat-avatar {
    margin-left: 20px;
    margin-right: 0;
}

.chat-container li .chat-name {
    font-size: .75rem;
    color: #999999;
    text-align: center;
}

.chat-container li .chat-text {
    padding: .4rem 1rem;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: #ffffff;
    font-weight: 300;
    line-height: 150%;
    position: relative;
}

.chat-container li .chat-text:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    top: 10px;
    left: -20px;
    border: 10px solid;
    border-color: transparent #ffffff transparent transparent;
}

.chat-container li.chat-right > .chat-text {
    text-align: right;
}

.chat-container li.chat-right > .chat-text:before {
    right: -20px;
    border-color: transparent transparent transparent #ffffff;
    left: inherit;
}

.chat-container li .chat-hour {
    padding: 0;
    margin-bottom: 10px;
    font-size: .75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin: 0 0 0 15px;
}

.chat-container li .chat-hour > span {
    font-size: 16px;
    color: #9ec94a;
}

.chat-container li.chat-right > .chat-hour {
    margin: 0 15px 0 0;
}

@media (max-width: 767px) {
    .chat-container li.chat-left,
    .chat-container li.chat-right {
        flex-direction: column;
        margin-bottom: 30px;
    }
    .chat-container li img {
        width: 32px;
        height: 32px;
    }
    .chat-container li.chat-left .chat-avatar {
        margin: 0 0 5px 0;
        display: flex;
        align-items: center;
    }
    .chat-container li.chat-left .chat-hour {
        justify-content: flex-end;
    }
    .chat-container li.chat-left .chat-name {
        margin-left: 5px;
    }
    .chat-container li.chat-right .chat-avatar {
        order: -1;
        margin: 0 0 5px 0;
        align-items: center;
        display: flex;
        justify-content: right;
        flex-direction: row-reverse;
    }
    .chat-container li.chat-right .chat-hour {
        justify-content: flex-start;
        order: 2;
    }
    .chat-container li.chat-right .chat-name {
        margin-right: 5px;
    }
    .chat-container li .chat-text {
        font-size: .8rem;
    }
}

.chat-form {
    padding: 15px;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ffffff;
    border-top: 1px solid white;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.card {
    border: 0;
    background: #f4f5fb;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 2rem;
    box-shadow: none;
}
.chatContainerScroll{
height:350px;
overflow:auto;
}
</style>

<section class=\"content-header\">
    <div class=\"container-fluid\">
    <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
        <h1>Detail Pesan</h1>
        </div>
        <div class=\"col-sm-6\">
        <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 385
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\">Pesan</a></li>
            <li class=\"breadcrumb-item active\">Detail Pesan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

";
        // line 393
        $context["active_msg_id"] = $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id");
        // line 394
        echo "
<div class=\"container\">
    <div class=\"d-flex justify-content-center\">
                <div class=\"col-lg-8 col-md-10 col-xs-12 p-3\">
                    <div class=\"selected-user\">
                        <span>Ke: <span class=\"name\">";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["receiver_name"]) ? $context["receiver_name"] : null), "html", null, true);
        echo "</span></span>
                    </div>
                    <div class=\"chat-container\">
                        <ul class=\"chat-box chatContainerScroll\">
                                ";
        // line 403
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["old_related_msg"]) ? $context["old_related_msg"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 404
            echo "                                    ";
            $context["item_msg"] = (isset($context["d"]) ? $context["d"] : null);
            // line 405
            echo "                                    ";
            $this->env->loadTemplate("detail-pesan-item.html")->display($context);
            // line 406
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "    
                                ";
        // line 408
        $context["item_msg"] = (isset($context["r"]) ? $context["r"] : null);
        // line 409
        echo "                                ";
        $this->env->loadTemplate("detail-pesan-item.html")->display($context);
        // line 410
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_related_msg"]) ? $context["new_related_msg"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 411
            echo "                                    ";
            $context["item_msg"] = (isset($context["n"]) ? $context["n"] : null);
            // line 412
            echo "                                    ";
            $this->env->loadTemplate("detail-pesan-item.html")->display($context);
            // line 413
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "                        </ul>
                        
                        ";
        // line 416
        if (((isset($context["confirm_del_all"]) ? $context["confirm_del_all"] : null) == false)) {
            // line 417
            echo "                        <br/>
                        <div class=\"msg-active\">
                            ";
            // line 419
            echo form_open_multipart(("message/create/" . $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "sender_receiver_id")), array("class" => "form-horizontal row-fluid"));
            echo "
                                <input type=\"hidden\" name=\"penerima\" value=\"";
            // line 420
            echo twig_escape_filter($this->env, (isset($context["receiver_name"]) ? $context["receiver_name"] : null), "html", null, true);
            echo "\">
                                <textarea name=\"content\" id=\"content\" class=\"form-control\">";
            // line 421
            echo set_value("content");
            echo "</textarea>
                                ";
            // line 422
            echo form_error("content");
            echo "
                                <br>
                                <p><button class=\"btn btn-primary\">Kirim</button></p>
                            ";
            // line 425
            echo form_close();
            echo "
                        </div>
                        ";
        }
        // line 428
        echo "                        
                        ";
        // line 429
        if (((isset($context["confirm_del_all"]) ? $context["confirm_del_all"] : null) == true)) {
            // line 430
            echo "                        <hr class=\"hr-msg\">
                        <div id=\"confirm\" class=\"alert alert-block\">
                        <b class=\"mb-3\">Anda yakin ingin menghapus percakapan ini?</b><br/>
                            <div class=\"pull-right btn-group\" style=\"margin-top: 5px;\">
                                <a class=\"btn btn-danger\" style=\"text-decoration:none;\" href=\"";
            // line 434
            echo twig_escape_filter($this->env, site_url(("message/del_all/" . $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id"))), "html", null, true);
            echo "\">Ya hapus</a>
                                <a class=\"btn btn-primary\" style=\"text-decoration:none;\" href=\"";
            // line 435
            echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
            echo "\">Batal</a>
                            </div>
                        </div>
                        ";
        }
        // line 439
        echo "                
                        <input type=\"hidden\" id=\"active_msg_id\" value=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id"), "html", null, true);
        echo "\">
                        </div>
                    
                </div>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "detail-pesan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 440,  587 => 439,  580 => 435,  576 => 434,  570 => 430,  568 => 429,  565 => 428,  559 => 425,  553 => 422,  549 => 421,  545 => 420,  541 => 419,  537 => 417,  535 => 416,  531 => 414,  517 => 413,  514 => 412,  511 => 411,  493 => 410,  490 => 409,  488 => 408,  485 => 407,  471 => 406,  468 => 405,  465 => 404,  448 => 403,  441 => 399,  434 => 394,  432 => 393,  421 => 385,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
