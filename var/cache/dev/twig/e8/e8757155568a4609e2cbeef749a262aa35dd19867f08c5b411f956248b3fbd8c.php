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
        $__internal_f04aa55e8f0b4fde3b3871692ad30b12a93d62b724c83f93883aaaa383e09b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04aa55e8f0b4fde3b3871692ad30b12a93d62b724c83f93883aaaa383e09b37->enter($__internal_f04aa55e8f0b4fde3b3871692ad30b12a93d62b724c83f93883aaaa383e09b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9a90840860d12ddd22ba875e5dc8f8c14db7b3e113500b14484b417c7d20946d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a90840860d12ddd22ba875e5dc8f8c14db7b3e113500b14484b417c7d20946d->enter($__internal_9a90840860d12ddd22ba875e5dc8f8c14db7b3e113500b14484b417c7d20946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f04aa55e8f0b4fde3b3871692ad30b12a93d62b724c83f93883aaaa383e09b37->leave($__internal_f04aa55e8f0b4fde3b3871692ad30b12a93d62b724c83f93883aaaa383e09b37_prof);

        
        $__internal_9a90840860d12ddd22ba875e5dc8f8c14db7b3e113500b14484b417c7d20946d->leave($__internal_9a90840860d12ddd22ba875e5dc8f8c14db7b3e113500b14484b417c7d20946d_prof);

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
