<?php

/* base.html.twig */
class __TwigTemplate_06554ca610d85c1a44fcbad47e0a140c654fd03cf91a6c5ffc6bf1c893e78c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_350781847e13c67b1560772983a6fda198f94133d704f865836040247c116869 = $this->env->getExtension("native_profiler");
        $__internal_350781847e13c67b1560772983a6fda198f94133d704f865836040247c116869->enter($__internal_350781847e13c67b1560772983a6fda198f94133d704f865836040247c116869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"container\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "sex"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "            <div class=\"flash-notice btn btn-primary\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_350781847e13c67b1560772983a6fda198f94133d704f865836040247c116869->leave($__internal_350781847e13c67b1560772983a6fda198f94133d704f865836040247c116869_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9eb8c6705819d1e2c25fe73d446968d305dae43b7c373dcc818b231c6a9b33f2 = $this->env->getExtension("native_profiler");
        $__internal_9eb8c6705819d1e2c25fe73d446968d305dae43b7c373dcc818b231c6a9b33f2->enter($__internal_9eb8c6705819d1e2c25fe73d446968d305dae43b7c373dcc818b231c6a9b33f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9eb8c6705819d1e2c25fe73d446968d305dae43b7c373dcc818b231c6a9b33f2->leave($__internal_9eb8c6705819d1e2c25fe73d446968d305dae43b7c373dcc818b231c6a9b33f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8b74b0a1608be41679a5be2d07964b8549615b80dba4cc17115fbb441a74128 = $this->env->getExtension("native_profiler");
        $__internal_c8b74b0a1608be41679a5be2d07964b8549615b80dba4cc17115fbb441a74128->enter($__internal_c8b74b0a1608be41679a5be2d07964b8549615b80dba4cc17115fbb441a74128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c8b74b0a1608be41679a5be2d07964b8549615b80dba4cc17115fbb441a74128->leave($__internal_c8b74b0a1608be41679a5be2d07964b8549615b80dba4cc17115fbb441a74128_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_581a5c446fd2d656d7cf6ef49f5deec634289cfb8f0070160744ad028f3ad727 = $this->env->getExtension("native_profiler");
        $__internal_581a5c446fd2d656d7cf6ef49f5deec634289cfb8f0070160744ad028f3ad727->enter($__internal_581a5c446fd2d656d7cf6ef49f5deec634289cfb8f0070160744ad028f3ad727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<h1>water</h1><h1>water</h1><h1>water</h1>";
        
        $__internal_581a5c446fd2d656d7cf6ef49f5deec634289cfb8f0070160744ad028f3ad727->leave($__internal_581a5c446fd2d656d7cf6ef49f5deec634289cfb8f0070160744ad028f3ad727_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21850d05603658c515b934a645ea7e7c553de52ff1ad386e8bf291319254e92d = $this->env->getExtension("native_profiler");
        $__internal_21850d05603658c515b934a645ea7e7c553de52ff1ad386e8bf291319254e92d->enter($__internal_21850d05603658c515b934a645ea7e7c553de52ff1ad386e8bf291319254e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/js/jquery.bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_21850d05603658c515b934a645ea7e7c553de52ff1ad386e8bf291319254e92d->leave($__internal_21850d05603658c515b934a645ea7e7c553de52ff1ad386e8bf291319254e92d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 16,  126 => 15,  120 => 14,  108 => 13,  99 => 8,  94 => 7,  88 => 6,  76 => 5,  67 => 23,  58 => 20,  55 => 19,  50 => 18,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('myapp/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('myapp/css/bootstrap-theme.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="container">*/
/*         {% block body %}<h1>water</h1><h1>water</h1><h1>water</h1>{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('myapp/js/jquery.bootstrap.js') }}"></script>*/
/*             <script src="{{ asset('myapp/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*         {% for flash_message in app.session.flashBag.get('sex') %}*/
/*             <div class="flash-notice btn btn-primary">*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </body>*/
/* </html>*/
/* */
