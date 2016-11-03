<?php

/* helloworld/number.html.twig */
class __TwigTemplate_680281358f033b1f0f9a3267f3ebe28b4e6594eb032320d2d5121e6dd179cec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "helloworld/number.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " water try to test ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 9
            echo "        <ul>
            <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "index", array()), "html", null, true);
            echo "</li>
        </ul>
        ";
            // line 13
            echo twig_include($this->env, $context, "helloworld/index.html.twig", array("friend" => $context["friend"]));
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("hello");
        echo "\">HELLO</a>
    <hr>
    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/images/favicon.ico"), "html", null, true);
        echo "\" alt=\"symfony\">
    ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "helloworld/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  106 => 18,  102 => 17,  96 => 15,  80 => 13,  75 => 11,  71 => 10,  68 => 9,  50 => 8,  47 => 7,  40 => 5,  37 => 4,  31 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/helloworld/index.html.twig#}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %} water try to test {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body%}*/
/*     {% for friend in friends %}*/
/*         <ul>*/
/*             <li>{{ friend.name }}</li>*/
/*             <li>{{ friend.index }}</li>*/
/*         </ul>*/
/*         {{ include('helloworld/index.html.twig',{'friend':friend}) }}*/
/*     {% endfor %}*/
/*     <a class="btn btn-primary" href="{{ path('hello') }}">HELLO</a>*/
/*     <hr>*/
/*     <img src="{{ asset('myapp/images/favicon.ico') }}" alt="symfony">*/
/*     {% block javascript %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
