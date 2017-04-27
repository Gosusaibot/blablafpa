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
        $__internal_d1bce695ea21bb99b673575f5ecf1ce9872cf9b39fafa74141b74aeb0817e941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bce695ea21bb99b673575f5ecf1ce9872cf9b39fafa74141b74aeb0817e941->enter($__internal_d1bce695ea21bb99b673575f5ecf1ce9872cf9b39fafa74141b74aeb0817e941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_06381138c5000f506d6b8502c9f4f9f7328ccb8d0b4e265dd9ebf31c60ec78a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06381138c5000f506d6b8502c9f4f9f7328ccb8d0b4e265dd9ebf31c60ec78a4->enter($__internal_06381138c5000f506d6b8502c9f4f9f7328ccb8d0b4e265dd9ebf31c60ec78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_d1bce695ea21bb99b673575f5ecf1ce9872cf9b39fafa74141b74aeb0817e941->leave($__internal_d1bce695ea21bb99b673575f5ecf1ce9872cf9b39fafa74141b74aeb0817e941_prof);

        
        $__internal_06381138c5000f506d6b8502c9f4f9f7328ccb8d0b4e265dd9ebf31c60ec78a4->leave($__internal_06381138c5000f506d6b8502c9f4f9f7328ccb8d0b4e265dd9ebf31c60ec78a4_prof);

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
