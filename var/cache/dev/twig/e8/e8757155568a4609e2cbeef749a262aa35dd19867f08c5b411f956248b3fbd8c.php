<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0104eef7a3524e9d8fbe7e3c7e96c5f4249d2614fcd163954a61fd4b96b5011d extends Twig_Template
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
        $__internal_b404711dc79ee330fe0a61c9324898727ae819c38cb35d6bdbe15f8240e2beab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b404711dc79ee330fe0a61c9324898727ae819c38cb35d6bdbe15f8240e2beab->enter($__internal_b404711dc79ee330fe0a61c9324898727ae819c38cb35d6bdbe15f8240e2beab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b9a608f57437414e62f3f0c9e29e04189c9a99a4474f00f1e11005a6d766a423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a608f57437414e62f3f0c9e29e04189c9a99a4474f00f1e11005a6d766a423->enter($__internal_b9a608f57437414e62f3f0c9e29e04189c9a99a4474f00f1e11005a6d766a423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b404711dc79ee330fe0a61c9324898727ae819c38cb35d6bdbe15f8240e2beab->leave($__internal_b404711dc79ee330fe0a61c9324898727ae819c38cb35d6bdbe15f8240e2beab_prof);

        
        $__internal_b9a608f57437414e62f3f0c9e29e04189c9a99a4474f00f1e11005a6d766a423->leave($__internal_b9a608f57437414e62f3f0c9e29e04189c9a99a4474f00f1e11005a6d766a423_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
