<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f3d0bad844baef9bee24e3ca4123aa01759f495c783a16628efd56b38c718c8c extends Twig_Template
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
        $__internal_f66c34d33860796b7ab098eda3b9adb2db04a45ea7b51895159d10a640250cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66c34d33860796b7ab098eda3b9adb2db04a45ea7b51895159d10a640250cac->enter($__internal_f66c34d33860796b7ab098eda3b9adb2db04a45ea7b51895159d10a640250cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4c28376f3164842c6fb7a8a4be8e7927dee4f546e74da346dd8ad0fed9a180d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28376f3164842c6fb7a8a4be8e7927dee4f546e74da346dd8ad0fed9a180d9->enter($__internal_4c28376f3164842c6fb7a8a4be8e7927dee4f546e74da346dd8ad0fed9a180d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f66c34d33860796b7ab098eda3b9adb2db04a45ea7b51895159d10a640250cac->leave($__internal_f66c34d33860796b7ab098eda3b9adb2db04a45ea7b51895159d10a640250cac_prof);

        
        $__internal_4c28376f3164842c6fb7a8a4be8e7927dee4f546e74da346dd8ad0fed9a180d9->leave($__internal_4c28376f3164842c6fb7a8a4be8e7927dee4f546e74da346dd8ad0fed9a180d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
