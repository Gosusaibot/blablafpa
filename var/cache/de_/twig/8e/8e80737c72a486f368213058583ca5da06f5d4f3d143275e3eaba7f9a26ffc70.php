<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8ed35c1fe7384f2b15b9812110af7904ed075014679c75cc848d4d2d5d0504b4 extends Twig_Template
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
        $__internal_54e69e298b318d92d1439fd223e7b19dc4c7a59c8677b4491f1e2f502d891319 = $this->env->getExtension("native_profiler");
        $__internal_54e69e298b318d92d1439fd223e7b19dc4c7a59c8677b4491f1e2f502d891319->enter($__internal_54e69e298b318d92d1439fd223e7b19dc4c7a59c8677b4491f1e2f502d891319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_54e69e298b318d92d1439fd223e7b19dc4c7a59c8677b4491f1e2f502d891319->leave($__internal_54e69e298b318d92d1439fd223e7b19dc4c7a59c8677b4491f1e2f502d891319_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
