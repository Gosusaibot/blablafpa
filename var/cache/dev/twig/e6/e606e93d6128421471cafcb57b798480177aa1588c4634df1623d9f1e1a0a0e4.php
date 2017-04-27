<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3e109b5dabfafb4f6e81be02249be195e26780b0febad944025e1735aac7d29c extends Twig_Template
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
        $__internal_7ef680633e771361deca0fb8a60402edf196f96ab4bfb466532d6bfe4572c0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef680633e771361deca0fb8a60402edf196f96ab4bfb466532d6bfe4572c0c3->enter($__internal_7ef680633e771361deca0fb8a60402edf196f96ab4bfb466532d6bfe4572c0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_df562cad24222c76cb53f41b11997accbfe15c885922464b5e5db4d4c4044094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df562cad24222c76cb53f41b11997accbfe15c885922464b5e5db4d4c4044094->enter($__internal_df562cad24222c76cb53f41b11997accbfe15c885922464b5e5db4d4c4044094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7ef680633e771361deca0fb8a60402edf196f96ab4bfb466532d6bfe4572c0c3->leave($__internal_7ef680633e771361deca0fb8a60402edf196f96ab4bfb466532d6bfe4572c0c3_prof);

        
        $__internal_df562cad24222c76cb53f41b11997accbfe15c885922464b5e5db4d4c4044094->leave($__internal_df562cad24222c76cb53f41b11997accbfe15c885922464b5e5db4d4c4044094_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
