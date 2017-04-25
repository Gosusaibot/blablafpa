<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d0a02654f87ee72b1e05026ac1b31cc6b87f50d05f6909cc12333c58bf6dc659 extends Twig_Template
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
        $__internal_e120ee8d7ffcb5fa9815c85a677011f6131062ab523d3fa119e004afa77cabdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e120ee8d7ffcb5fa9815c85a677011f6131062ab523d3fa119e004afa77cabdc->enter($__internal_e120ee8d7ffcb5fa9815c85a677011f6131062ab523d3fa119e004afa77cabdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_57bbe859986fb5e6a21182b0fa72ace9dce31064632a860a2558f3bff6b217f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bbe859986fb5e6a21182b0fa72ace9dce31064632a860a2558f3bff6b217f0->enter($__internal_57bbe859986fb5e6a21182b0fa72ace9dce31064632a860a2558f3bff6b217f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_e120ee8d7ffcb5fa9815c85a677011f6131062ab523d3fa119e004afa77cabdc->leave($__internal_e120ee8d7ffcb5fa9815c85a677011f6131062ab523d3fa119e004afa77cabdc_prof);

        
        $__internal_57bbe859986fb5e6a21182b0fa72ace9dce31064632a860a2558f3bff6b217f0->leave($__internal_57bbe859986fb5e6a21182b0fa72ace9dce31064632a860a2558f3bff6b217f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
