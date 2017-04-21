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
        $__internal_a3e815e6e126f914951f4e7accd5ac2108f3b70fb7f418703d27ba19733fbf3e = $this->env->getExtension("native_profiler");
        $__internal_a3e815e6e126f914951f4e7accd5ac2108f3b70fb7f418703d27ba19733fbf3e->enter($__internal_a3e815e6e126f914951f4e7accd5ac2108f3b70fb7f418703d27ba19733fbf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a3e815e6e126f914951f4e7accd5ac2108f3b70fb7f418703d27ba19733fbf3e->leave($__internal_a3e815e6e126f914951f4e7accd5ac2108f3b70fb7f418703d27ba19733fbf3e_prof);

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
