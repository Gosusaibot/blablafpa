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
        $__internal_f7c07cd779e0ddd1155b053cdcf02193e9ee7e1901a5a1e533a39d4e7845e327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c07cd779e0ddd1155b053cdcf02193e9ee7e1901a5a1e533a39d4e7845e327->enter($__internal_f7c07cd779e0ddd1155b053cdcf02193e9ee7e1901a5a1e533a39d4e7845e327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a8242c70f7238a8aef31f350efc51943ba1d6f894f569cea39f0d55a398cd767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8242c70f7238a8aef31f350efc51943ba1d6f894f569cea39f0d55a398cd767->enter($__internal_a8242c70f7238a8aef31f350efc51943ba1d6f894f569cea39f0d55a398cd767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f7c07cd779e0ddd1155b053cdcf02193e9ee7e1901a5a1e533a39d4e7845e327->leave($__internal_f7c07cd779e0ddd1155b053cdcf02193e9ee7e1901a5a1e533a39d4e7845e327_prof);

        
        $__internal_a8242c70f7238a8aef31f350efc51943ba1d6f894f569cea39f0d55a398cd767->leave($__internal_a8242c70f7238a8aef31f350efc51943ba1d6f894f569cea39f0d55a398cd767_prof);

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
