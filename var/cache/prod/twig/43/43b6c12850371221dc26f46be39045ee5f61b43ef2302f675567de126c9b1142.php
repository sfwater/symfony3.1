<?php

/* helloworld/index.html.twig */
class __TwigTemplate_e45b472627eb901019cb109fdb07d4d61ff95fe7628a80973f1b7bf1f8469f47 extends Twig_Template
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
        // line 2
        echo "<h2>i never forget you --miss zhou </h2>
<p class=\"story\">sometimes,we don't know what to say each other</p>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "name", array()), "html", null, true);
        echo "</p>";
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
        return array (  23 => 4,  19 => 2,);
    }
}
/* {# app/Resources/views/helloworld/article_detail.html.twig#}*/
/* <h2>i never forget you --miss zhou </h2>*/
/* <p class="story">sometimes,we don't know what to say each other</p>*/
/* <p>{{ friend.name }}</p>*/
