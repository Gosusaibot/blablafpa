<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9f16926799fb52ebf8195fbb74c93393c537794c62c05a4eb3dc0538815f02e7 extends Twig_Template
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
        $__internal_08a6b93e64e3dd3e6ea49a5d3c39522980f44fccd80c382e9aeb66700e491bee = $this->env->getExtension("native_profiler");
        $__internal_08a6b93e64e3dd3e6ea49a5d3c39522980f44fccd80c382e9aeb66700e491bee->enter($__internal_08a6b93e64e3dd3e6ea49a5d3c39522980f44fccd80c382e9aeb66700e491bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_08a6b93e64e3dd3e6ea49a5d3c39522980f44fccd80c382e9aeb66700e491bee->leave($__internal_08a6b93e64e3dd3e6ea49a5d3c39522980f44fccd80c382e9aeb66700e491bee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
