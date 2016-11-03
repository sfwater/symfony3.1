<?php

/* helloworld/session.html.twig */
class __TwigTemplate_546e95e6a165f3efeb3cd9c457b8140d5c018a499411df2c49d9cd3bca58b4d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "helloworld/session.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc45e245f845a663c829039b235135b7f75bb4b3200db67b8fafdfa85ac9cc3 = $this->env->getExtension("native_profiler");
        $__internal_8cc45e245f845a663c829039b235135b7f75bb4b3200db67b8fafdfa85ac9cc3->enter($__internal_8cc45e245f845a663c829039b235135b7f75bb4b3200db67b8fafdfa85ac9cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloworld/session.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc45e245f845a663c829039b235135b7f75bb4b3200db67b8fafdfa85ac9cc3->leave($__internal_8cc45e245f845a663c829039b235135b7f75bb4b3200db67b8fafdfa85ac9cc3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_107c952e266cbc46f2b83eb2e9607cc40b2534fdb758123e35b3b7b959425b71 = $this->env->getExtension("native_profiler");
        $__internal_107c952e266cbc46f2b83eb2e9607cc40b2534fdb758123e35b3b7b959425b71->enter($__internal_107c952e266cbc46f2b83eb2e9607cc40b2534fdb758123e35b3b7b959425b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <span class=\"panel panel-primary\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span>
";
        
        $__internal_107c952e266cbc46f2b83eb2e9607cc40b2534fdb758123e35b3b7b959425b71->leave($__internal_107c952e266cbc46f2b83eb2e9607cc40b2534fdb758123e35b3b7b959425b71_prof);

    }

    public function getTemplateName()
    {
        return "helloworld/session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <span class="panel panel-primary">{{ name }}</span>*/
/* {% endblock %}*/
