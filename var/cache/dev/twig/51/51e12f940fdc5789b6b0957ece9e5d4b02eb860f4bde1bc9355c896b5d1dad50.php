<?php

/* helloworld/index.html.twig */
class __TwigTemplate_0ec2eaed317e81bbd9931fb86e967f7015a483467711f4a881cf96e29a80d2cf extends Twig_Template
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
        $__internal_f928fda88a1b5b7ba97c70a2c2fb9aaa92134bfb8db42a6073541aa0d8341e4a = $this->env->getExtension("native_profiler");
        $__internal_f928fda88a1b5b7ba97c70a2c2fb9aaa92134bfb8db42a6073541aa0d8341e4a->enter($__internal_f928fda88a1b5b7ba97c70a2c2fb9aaa92134bfb8db42a6073541aa0d8341e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld/index.html.twig"));

        // line 2
        echo "<h2>i never forget you --miss zhou </h2>
<p class=\"story\">sometimes,we don't know what to say each other</p>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "name", array()), "html", null, true);
        echo "</p>";
        
        $__internal_f928fda88a1b5b7ba97c70a2c2fb9aaa92134bfb8db42a6073541aa0d8341e4a->leave($__internal_f928fda88a1b5b7ba97c70a2c2fb9aaa92134bfb8db42a6073541aa0d8341e4a_prof);

    }

    public function getTemplateName()
    {
        return "helloworld/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {# app/Resources/views/helloworld/article_detail.html.twig#}*/
/* <h2>i never forget you --miss zhou </h2>*/
/* <p class="story">sometimes,we don't know what to say each other</p>*/
/* <p>{{ friend.name }}</p>*/
