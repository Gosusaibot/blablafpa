<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee3a794719969798b2a123298b301cec86abde389461267b2f49f27df9dc0209 extends Twig_Template
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
        $__internal_d3bb46806bd41e17c4a4c890e5b65a05dca65d91185895f2175bad52bc9b4a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bb46806bd41e17c4a4c890e5b65a05dca65d91185895f2175bad52bc9b4a66->enter($__internal_d3bb46806bd41e17c4a4c890e5b65a05dca65d91185895f2175bad52bc9b4a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a1a252aec650b359df71067e2d9a23bc6cc800dbae394225160bf1ef8fd8826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a252aec650b359df71067e2d9a23bc6cc800dbae394225160bf1ef8fd8826a->enter($__internal_a1a252aec650b359df71067e2d9a23bc6cc800dbae394225160bf1ef8fd8826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_d3bb46806bd41e17c4a4c890e5b65a05dca65d91185895f2175bad52bc9b4a66->leave($__internal_d3bb46806bd41e17c4a4c890e5b65a05dca65d91185895f2175bad52bc9b4a66_prof);

        
        $__internal_a1a252aec650b359df71067e2d9a23bc6cc800dbae394225160bf1ef8fd8826a->leave($__internal_a1a252aec650b359df71067e2d9a23bc6cc800dbae394225160bf1ef8fd8826a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
