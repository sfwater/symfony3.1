<?php

/* YiiwaterWebBundle:Default:index.html.twig */
class __TwigTemplate_e8e1f801bb2318ecc040a5510b537b4842209bede31208a02eaeee5ca3c8e893 extends Twig_Template
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
        $__internal_740ca887d3c4eb2b222a4ca3b02c84cbc63c71e96a2ea9d93844db237be12cf5 = $this->env->getExtension("native_profiler");
        $__internal_740ca887d3c4eb2b222a4ca3b02c84cbc63c71e96a2ea9d93844db237be12cf5->enter($__internal_740ca887d3c4eb2b222a4ca3b02c84cbc63c71e96a2ea9d93844db237be12cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YiiwaterWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!";
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo "
";
        
        $__internal_740ca887d3c4eb2b222a4ca3b02c84cbc63c71e96a2ea9d93844db237be12cf5->leave($__internal_740ca887d3c4eb2b222a4ca3b02c84cbc63c71e96a2ea9d93844db237be12cf5_prof);

    }

    public function getTemplateName()
    {
        return "YiiwaterWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello World!{{ num }}*/
/* */
