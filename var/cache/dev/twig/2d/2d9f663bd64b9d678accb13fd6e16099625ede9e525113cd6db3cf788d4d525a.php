<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_eae0069c9d824958dd49f04fb3a7c22899e6a0dc1903e41de83a0bdfa236720d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_40028d8d407a590ec7327d33e781121f621b2bb34d678d5bb75d586552520530 = $this->env->getExtension("native_profiler");
        $__internal_40028d8d407a590ec7327d33e781121f621b2bb34d678d5bb75d586552520530->enter($__internal_40028d8d407a590ec7327d33e781121f621b2bb34d678d5bb75d586552520530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40028d8d407a590ec7327d33e781121f621b2bb34d678d5bb75d586552520530->leave($__internal_40028d8d407a590ec7327d33e781121f621b2bb34d678d5bb75d586552520530_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c81725afd7629305204515874dd01ffddcea49b5444f4efafa60b0c0227429f6 = $this->env->getExtension("native_profiler");
        $__internal_c81725afd7629305204515874dd01ffddcea49b5444f4efafa60b0c0227429f6->enter($__internal_c81725afd7629305204515874dd01ffddcea49b5444f4efafa60b0c0227429f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_c81725afd7629305204515874dd01ffddcea49b5444f4efafa60b0c0227429f6->leave($__internal_c81725afd7629305204515874dd01ffddcea49b5444f4efafa60b0c0227429f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
