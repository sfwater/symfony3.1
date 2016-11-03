<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_679469f88b99776a450a9a166efb39229b2a3c29166b7d9c97528553613281c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_86cf1da67d33051f7ef630cb4be1d7deb1d21fa6753b26ee515c286278f8b69d = $this->env->getExtension("native_profiler");
        $__internal_86cf1da67d33051f7ef630cb4be1d7deb1d21fa6753b26ee515c286278f8b69d->enter($__internal_86cf1da67d33051f7ef630cb4be1d7deb1d21fa6753b26ee515c286278f8b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86cf1da67d33051f7ef630cb4be1d7deb1d21fa6753b26ee515c286278f8b69d->leave($__internal_86cf1da67d33051f7ef630cb4be1d7deb1d21fa6753b26ee515c286278f8b69d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e62fe93e0a6e99262e72ec63e2e01fbf7344d458cf81b1aa34f414b1fdcbd9fa = $this->env->getExtension("native_profiler");
        $__internal_e62fe93e0a6e99262e72ec63e2e01fbf7344d458cf81b1aa34f414b1fdcbd9fa->enter($__internal_e62fe93e0a6e99262e72ec63e2e01fbf7344d458cf81b1aa34f414b1fdcbd9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e62fe93e0a6e99262e72ec63e2e01fbf7344d458cf81b1aa34f414b1fdcbd9fa->leave($__internal_e62fe93e0a6e99262e72ec63e2e01fbf7344d458cf81b1aa34f414b1fdcbd9fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e78761037f6ef8d0da9e41851045d31dcce3dbbb87e92c90d0b16e11a9540b83 = $this->env->getExtension("native_profiler");
        $__internal_e78761037f6ef8d0da9e41851045d31dcce3dbbb87e92c90d0b16e11a9540b83->enter($__internal_e78761037f6ef8d0da9e41851045d31dcce3dbbb87e92c90d0b16e11a9540b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e78761037f6ef8d0da9e41851045d31dcce3dbbb87e92c90d0b16e11a9540b83->leave($__internal_e78761037f6ef8d0da9e41851045d31dcce3dbbb87e92c90d0b16e11a9540b83_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39c92f1878a8c365a50e6e3b8d81f4abadef835269dd4cd63cd85dc6f8ace38d = $this->env->getExtension("native_profiler");
        $__internal_39c92f1878a8c365a50e6e3b8d81f4abadef835269dd4cd63cd85dc6f8ace38d->enter($__internal_39c92f1878a8c365a50e6e3b8d81f4abadef835269dd4cd63cd85dc6f8ace38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_39c92f1878a8c365a50e6e3b8d81f4abadef835269dd4cd63cd85dc6f8ace38d->leave($__internal_39c92f1878a8c365a50e6e3b8d81f4abadef835269dd4cd63cd85dc6f8ace38d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
