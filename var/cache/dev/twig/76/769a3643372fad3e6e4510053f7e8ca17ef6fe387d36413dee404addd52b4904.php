<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_02540387031c5cd92fff7d636c08ca631e918864b52bae87d456073cfa608a75 extends Twig_Template
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
        $__internal_6398db1977a58df39a430b01da5d1fdaae15dce91ccb40fa65ed79f787f3c1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6398db1977a58df39a430b01da5d1fdaae15dce91ccb40fa65ed79f787f3c1d3->enter($__internal_6398db1977a58df39a430b01da5d1fdaae15dce91ccb40fa65ed79f787f3c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e29b55736f1e04841f197e1c9bbd032877b7caf0bd5920e423b14d0ec817a668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29b55736f1e04841f197e1c9bbd032877b7caf0bd5920e423b14d0ec817a668->enter($__internal_e29b55736f1e04841f197e1c9bbd032877b7caf0bd5920e423b14d0ec817a668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_6398db1977a58df39a430b01da5d1fdaae15dce91ccb40fa65ed79f787f3c1d3->leave($__internal_6398db1977a58df39a430b01da5d1fdaae15dce91ccb40fa65ed79f787f3c1d3_prof);

        
        $__internal_e29b55736f1e04841f197e1c9bbd032877b7caf0bd5920e423b14d0ec817a668->leave($__internal_e29b55736f1e04841f197e1c9bbd032877b7caf0bd5920e423b14d0ec817a668_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
