<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f9a4a6be9f055bec0f503d1393415fb631f397e4dc053c61c68685c1c7c734a4 extends Twig_Template
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
        $__internal_8e632fb923c9916ed428db79f5449dab635b67f4616025d9ab7ef4cef9c5bdfd = $this->env->getExtension("native_profiler");
        $__internal_8e632fb923c9916ed428db79f5449dab635b67f4616025d9ab7ef4cef9c5bdfd->enter($__internal_8e632fb923c9916ed428db79f5449dab635b67f4616025d9ab7ef4cef9c5bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8e632fb923c9916ed428db79f5449dab635b67f4616025d9ab7ef4cef9c5bdfd->leave($__internal_8e632fb923c9916ed428db79f5449dab635b67f4616025d9ab7ef4cef9c5bdfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
