<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c9ea5c85e2c02e5fec130cd1ef4ae0b0c9fe8ce008c988d28a53b1c28cf90b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47084cf82cb92ada6f839fdfdacd7efb8e1a1d16d1f8c4c590ff71b61e421aa3 = $this->env->getExtension("native_profiler");
        $__internal_47084cf82cb92ada6f839fdfdacd7efb8e1a1d16d1f8c4c590ff71b61e421aa3->enter($__internal_47084cf82cb92ada6f839fdfdacd7efb8e1a1d16d1f8c4c590ff71b61e421aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47084cf82cb92ada6f839fdfdacd7efb8e1a1d16d1f8c4c590ff71b61e421aa3->leave($__internal_47084cf82cb92ada6f839fdfdacd7efb8e1a1d16d1f8c4c590ff71b61e421aa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b45ef7b073c426e3d0580b72cfdbe8600a16c546c907c5d31995f50bb681dfc0 = $this->env->getExtension("native_profiler");
        $__internal_b45ef7b073c426e3d0580b72cfdbe8600a16c546c907c5d31995f50bb681dfc0->enter($__internal_b45ef7b073c426e3d0580b72cfdbe8600a16c546c907c5d31995f50bb681dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b45ef7b073c426e3d0580b72cfdbe8600a16c546c907c5d31995f50bb681dfc0->leave($__internal_b45ef7b073c426e3d0580b72cfdbe8600a16c546c907c5d31995f50bb681dfc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
