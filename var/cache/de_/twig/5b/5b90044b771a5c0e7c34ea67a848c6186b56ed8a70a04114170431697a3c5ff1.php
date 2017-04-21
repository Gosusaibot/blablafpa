<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_41666f09e781a48a249d3dedb879768ee4b322c118f9e7bed8352552164b53d1 extends Twig_Template
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
        $__internal_25bbad7562bf4519b425daea4c9f8c60e26d1d3f2dc0c272504f5929de58601f = $this->env->getExtension("native_profiler");
        $__internal_25bbad7562bf4519b425daea4c9f8c60e26d1d3f2dc0c272504f5929de58601f->enter($__internal_25bbad7562bf4519b425daea4c9f8c60e26d1d3f2dc0c272504f5929de58601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_25bbad7562bf4519b425daea4c9f8c60e26d1d3f2dc0c272504f5929de58601f->leave($__internal_25bbad7562bf4519b425daea4c9f8c60e26d1d3f2dc0c272504f5929de58601f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
