<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_51c3ef4add23bd76429220523acb4f81db12478ec5eb79bb60079fa1986a86c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe8b4a4aa6e87b8958aa71441b1b35e8263370340888b1cc7fc66daa51decc9c = $this->env->getExtension("native_profiler");
        $__internal_fe8b4a4aa6e87b8958aa71441b1b35e8263370340888b1cc7fc66daa51decc9c->enter($__internal_fe8b4a4aa6e87b8958aa71441b1b35e8263370340888b1cc7fc66daa51decc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe8b4a4aa6e87b8958aa71441b1b35e8263370340888b1cc7fc66daa51decc9c->leave($__internal_fe8b4a4aa6e87b8958aa71441b1b35e8263370340888b1cc7fc66daa51decc9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d172c7ad1b70c21152a4e92ba21ca4dcdcdd6c6433bfbc24fe36fa0cf36292e = $this->env->getExtension("native_profiler");
        $__internal_6d172c7ad1b70c21152a4e92ba21ca4dcdcdd6c6433bfbc24fe36fa0cf36292e->enter($__internal_6d172c7ad1b70c21152a4e92ba21ca4dcdcdd6c6433bfbc24fe36fa0cf36292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d172c7ad1b70c21152a4e92ba21ca4dcdcdd6c6433bfbc24fe36fa0cf36292e->leave($__internal_6d172c7ad1b70c21152a4e92ba21ca4dcdcdd6c6433bfbc24fe36fa0cf36292e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86ebe1bb580da5a77f3728b9382651a49e58a361c5c0d51d7480340ddec39ee6 = $this->env->getExtension("native_profiler");
        $__internal_86ebe1bb580da5a77f3728b9382651a49e58a361c5c0d51d7480340ddec39ee6->enter($__internal_86ebe1bb580da5a77f3728b9382651a49e58a361c5c0d51d7480340ddec39ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86ebe1bb580da5a77f3728b9382651a49e58a361c5c0d51d7480340ddec39ee6->leave($__internal_86ebe1bb580da5a77f3728b9382651a49e58a361c5c0d51d7480340ddec39ee6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e85bdcb53297b518f4e2277e2c566a2dcad28923f5cee1f945227b49c80e0c = $this->env->getExtension("native_profiler");
        $__internal_07e85bdcb53297b518f4e2277e2c566a2dcad28923f5cee1f945227b49c80e0c->enter($__internal_07e85bdcb53297b518f4e2277e2c566a2dcad28923f5cee1f945227b49c80e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_07e85bdcb53297b518f4e2277e2c566a2dcad28923f5cee1f945227b49c80e0c->leave($__internal_07e85bdcb53297b518f4e2277e2c566a2dcad28923f5cee1f945227b49c80e0c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
