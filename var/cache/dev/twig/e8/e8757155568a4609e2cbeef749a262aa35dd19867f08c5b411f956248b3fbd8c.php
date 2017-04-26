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
        $__internal_6f91e42f408be1b7d55bf53d72f0f31aba4f6d57106e92a5751a9c43acb25115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f91e42f408be1b7d55bf53d72f0f31aba4f6d57106e92a5751a9c43acb25115->enter($__internal_6f91e42f408be1b7d55bf53d72f0f31aba4f6d57106e92a5751a9c43acb25115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e6b3b658d1b26af67ebaf6f3b164c9a765e90519b21ff72111ee36029880a833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b3b658d1b26af67ebaf6f3b164c9a765e90519b21ff72111ee36029880a833->enter($__internal_e6b3b658d1b26af67ebaf6f3b164c9a765e90519b21ff72111ee36029880a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6f91e42f408be1b7d55bf53d72f0f31aba4f6d57106e92a5751a9c43acb25115->leave($__internal_6f91e42f408be1b7d55bf53d72f0f31aba4f6d57106e92a5751a9c43acb25115_prof);

        
        $__internal_e6b3b658d1b26af67ebaf6f3b164c9a765e90519b21ff72111ee36029880a833->leave($__internal_e6b3b658d1b26af67ebaf6f3b164c9a765e90519b21ff72111ee36029880a833_prof);

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
