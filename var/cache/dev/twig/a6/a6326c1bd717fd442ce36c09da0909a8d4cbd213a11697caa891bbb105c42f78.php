<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acf4767fff4a3aaee059dfff6143a3fc36a855f5c8d3c72b55b46e603046a44c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0311da2a160b2f5dcff8ffdc3ba42a2b0459f31ee7e49758ff59419e2e5dc0c = $this->env->getExtension("native_profiler");
        $__internal_c0311da2a160b2f5dcff8ffdc3ba42a2b0459f31ee7e49758ff59419e2e5dc0c->enter($__internal_c0311da2a160b2f5dcff8ffdc3ba42a2b0459f31ee7e49758ff59419e2e5dc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0311da2a160b2f5dcff8ffdc3ba42a2b0459f31ee7e49758ff59419e2e5dc0c->leave($__internal_c0311da2a160b2f5dcff8ffdc3ba42a2b0459f31ee7e49758ff59419e2e5dc0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17261fd0e4f22f7395e791cb1d526d104204172d7fb15e354459e3b8b86639b1 = $this->env->getExtension("native_profiler");
        $__internal_17261fd0e4f22f7395e791cb1d526d104204172d7fb15e354459e3b8b86639b1->enter($__internal_17261fd0e4f22f7395e791cb1d526d104204172d7fb15e354459e3b8b86639b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17261fd0e4f22f7395e791cb1d526d104204172d7fb15e354459e3b8b86639b1->leave($__internal_17261fd0e4f22f7395e791cb1d526d104204172d7fb15e354459e3b8b86639b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a059ff3c12dd0498acef4a91c42dbc7bec4caa6eba135b8fe0a911ba7c0d2a91 = $this->env->getExtension("native_profiler");
        $__internal_a059ff3c12dd0498acef4a91c42dbc7bec4caa6eba135b8fe0a911ba7c0d2a91->enter($__internal_a059ff3c12dd0498acef4a91c42dbc7bec4caa6eba135b8fe0a911ba7c0d2a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a059ff3c12dd0498acef4a91c42dbc7bec4caa6eba135b8fe0a911ba7c0d2a91->leave($__internal_a059ff3c12dd0498acef4a91c42dbc7bec4caa6eba135b8fe0a911ba7c0d2a91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89549b5f666ec81b806676e745787a612e88b9cf326c01da66c1634748400ba3 = $this->env->getExtension("native_profiler");
        $__internal_89549b5f666ec81b806676e745787a612e88b9cf326c01da66c1634748400ba3->enter($__internal_89549b5f666ec81b806676e745787a612e88b9cf326c01da66c1634748400ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89549b5f666ec81b806676e745787a612e88b9cf326c01da66c1634748400ba3->leave($__internal_89549b5f666ec81b806676e745787a612e88b9cf326c01da66c1634748400ba3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
