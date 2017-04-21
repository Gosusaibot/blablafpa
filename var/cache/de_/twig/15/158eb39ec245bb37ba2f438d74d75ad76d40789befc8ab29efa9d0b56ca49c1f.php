<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_615e052f8e0cb3bbe273c5f5350fe3459aa85288686deab05d4dd954a4f65c8d extends Twig_Template
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
        $__internal_5b0c6305d1982d0bcc1929914e323535dc5453230aba805ba90b63f632a608c3 = $this->env->getExtension("native_profiler");
        $__internal_5b0c6305d1982d0bcc1929914e323535dc5453230aba805ba90b63f632a608c3->enter($__internal_5b0c6305d1982d0bcc1929914e323535dc5453230aba805ba90b63f632a608c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5b0c6305d1982d0bcc1929914e323535dc5453230aba805ba90b63f632a608c3->leave($__internal_5b0c6305d1982d0bcc1929914e323535dc5453230aba805ba90b63f632a608c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
