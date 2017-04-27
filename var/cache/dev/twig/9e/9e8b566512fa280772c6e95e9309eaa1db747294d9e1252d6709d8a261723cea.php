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
        $__internal_0dd4bae35d2c26c7e1f9ad8f13236e296b3d24bd7b94f518b0c478d2b5344cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd4bae35d2c26c7e1f9ad8f13236e296b3d24bd7b94f518b0c478d2b5344cf1->enter($__internal_0dd4bae35d2c26c7e1f9ad8f13236e296b3d24bd7b94f518b0c478d2b5344cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5277a934d3d84393c5940d87d05a9293560fb3370d0e599267e35b929b11de53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5277a934d3d84393c5940d87d05a9293560fb3370d0e599267e35b929b11de53->enter($__internal_5277a934d3d84393c5940d87d05a9293560fb3370d0e599267e35b929b11de53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_0dd4bae35d2c26c7e1f9ad8f13236e296b3d24bd7b94f518b0c478d2b5344cf1->leave($__internal_0dd4bae35d2c26c7e1f9ad8f13236e296b3d24bd7b94f518b0c478d2b5344cf1_prof);

        
        $__internal_5277a934d3d84393c5940d87d05a9293560fb3370d0e599267e35b929b11de53->leave($__internal_5277a934d3d84393c5940d87d05a9293560fb3370d0e599267e35b929b11de53_prof);

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
