<?php

/* helloworld/number.html.twig */
class __TwigTemplate_c56632fc4ea3a84024fab20b67724b5538188e067569c91d4326cf50a7f23f68 extends Twig_Template
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
            'test' => array($this, 'block_test'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2a4474f33c11ffcfafb1b4e06f21c5d825b88fbfb4df0216b8ec1a98543abaa = $this->env->getExtension("native_profiler");
        $__internal_b2a4474f33c11ffcfafb1b4e06f21c5d825b88fbfb4df0216b8ec1a98543abaa->enter($__internal_b2a4474f33c11ffcfafb1b4e06f21c5d825b88fbfb4df0216b8ec1a98543abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a4474f33c11ffcfafb1b4e06f21c5d825b88fbfb4df0216b8ec1a98543abaa->leave($__internal_b2a4474f33c11ffcfafb1b4e06f21c5d825b88fbfb4df0216b8ec1a98543abaa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a297c835b3a1ed3a2662ffb7b0eb1e477feab61e06c6b6e9cb3ac01117e98a29 = $this->env->getExtension("native_profiler");
        $__internal_a297c835b3a1ed3a2662ffb7b0eb1e477feab61e06c6b6e9cb3ac01117e98a29->enter($__internal_a297c835b3a1ed3a2662ffb7b0eb1e477feab61e06c6b6e9cb3ac01117e98a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " water try to test ";
        
        $__internal_a297c835b3a1ed3a2662ffb7b0eb1e477feab61e06c6b6e9cb3ac01117e98a29->leave($__internal_a297c835b3a1ed3a2662ffb7b0eb1e477feab61e06c6b6e9cb3ac01117e98a29_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cf9d659e5785296fcb0f8acb7ebfc9129d87c4022f3b5b3022113e1a4b29df1 = $this->env->getExtension("native_profiler");
        $__internal_2cf9d659e5785296fcb0f8acb7ebfc9129d87c4022f3b5b3022113e1a4b29df1->enter($__internal_2cf9d659e5785296fcb0f8acb7ebfc9129d87c4022f3b5b3022113e1a4b29df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2cf9d659e5785296fcb0f8acb7ebfc9129d87c4022f3b5b3022113e1a4b29df1->leave($__internal_2cf9d659e5785296fcb0f8acb7ebfc9129d87c4022f3b5b3022113e1a4b29df1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5349b935e9ebb50ad6586692e9bf90a52a40b1403708bdb469a567d4724a300 = $this->env->getExtension("native_profiler");
        $__internal_f5349b935e9ebb50ad6586692e9bf90a52a40b1403708bdb469a567d4724a300->enter($__internal_f5349b935e9ebb50ad6586692e9bf90a52a40b1403708bdb469a567d4724a300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
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
    ";
        // line 17
        $this->displayBlock('test', $context, $blocks);
        // line 20
        echo "    <p class=\"text text-danger\">";
        $this->displayBlock("test", $context, $blocks);
        echo "</p>
    <hr>
    ";
        // line 22
        $context["fruits"] = array(0 => "apple", 1 => "orange", 2 => "citrus");
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["fruits"]) ? $context["fruits"] : $this->getContext($context, "fruits")), $context["i"]), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <hr>
    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("myapp/images/favicon.ico"), "html", null, true);
        echo "\" alt=\"symfony\">
    ";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_f5349b935e9ebb50ad6586692e9bf90a52a40b1403708bdb469a567d4724a300->leave($__internal_f5349b935e9ebb50ad6586692e9bf90a52a40b1403708bdb469a567d4724a300_prof);

    }

    // line 17
    public function block_test($context, array $blocks = array())
    {
        $__internal_da5c66a611766f27a12ad096d5dc6ea9e51e84e83d90245f3da651093ae54631 = $this->env->getExtension("native_profiler");
        $__internal_da5c66a611766f27a12ad096d5dc6ea9e51e84e83d90245f3da651093ae54631->enter($__internal_da5c66a611766f27a12ad096d5dc6ea9e51e84e83d90245f3da651093ae54631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "test"));

        // line 18
        echo "        <span class=\"panel panel-danger\">what to next time!!!</span>
    ";
        
        $__internal_da5c66a611766f27a12ad096d5dc6ea9e51e84e83d90245f3da651093ae54631->leave($__internal_da5c66a611766f27a12ad096d5dc6ea9e51e84e83d90245f3da651093ae54631_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b28f960b107c39e573a44f27834dbd36fa51e351245225eac33bfae4ae0472d7 = $this->env->getExtension("native_profiler");
        $__internal_b28f960b107c39e573a44f27834dbd36fa51e351245225eac33bfae4ae0472d7->enter($__internal_b28f960b107c39e573a44f27834dbd36fa51e351245225eac33bfae4ae0472d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 29
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        
        $__internal_b28f960b107c39e573a44f27834dbd36fa51e351245225eac33bfae4ae0472d7->leave($__internal_b28f960b107c39e573a44f27834dbd36fa51e351245225eac33bfae4ae0472d7_prof);

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
        return array (  182 => 29,  176 => 28,  168 => 18,  162 => 17,  155 => 28,  151 => 27,  148 => 26,  139 => 24,  134 => 23,  132 => 22,  126 => 20,  124 => 17,  118 => 15,  102 => 13,  97 => 11,  93 => 10,  90 => 9,  72 => 8,  66 => 7,  56 => 5,  50 => 4,  38 => 3,  11 => 2,);
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
/*     {% block test %}*/
/*         <span class="panel panel-danger">what to next time!!!</span>*/
/*     {% endblock %}*/
/*     <p class="text text-danger">{{  block('test') }}</p>*/
/*     <hr>*/
/*     {% set fruits=['apple','orange','citrus'] %}*/
/*     {% for i in 0..10 %}*/
/*         {{ cycle(fruits,i) }}*/
/*     {% endfor %}*/
/*     <hr>*/
/*     <img src="{{ asset('myapp/images/favicon.ico') }}" alt="symfony">*/
/*     {% block javascript %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
