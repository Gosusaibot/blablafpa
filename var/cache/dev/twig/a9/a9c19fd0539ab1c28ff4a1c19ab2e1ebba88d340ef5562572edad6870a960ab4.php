<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f3d0bad844baef9bee24e3ca4123aa01759f495c783a16628efd56b38c718c8c extends Twig_Template
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
        $__internal_ae98c6738ab78bdfcdc4c513ffcedc75d33096f0ccc3cffc7002e14050f263b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae98c6738ab78bdfcdc4c513ffcedc75d33096f0ccc3cffc7002e14050f263b7->enter($__internal_ae98c6738ab78bdfcdc4c513ffcedc75d33096f0ccc3cffc7002e14050f263b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fa0b41294d49d767fe57fe876e6d193106e8f7d3b8dae22b0c805ff0906f99f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b41294d49d767fe57fe876e6d193106e8f7d3b8dae22b0c805ff0906f99f4->enter($__internal_fa0b41294d49d767fe57fe876e6d193106e8f7d3b8dae22b0c805ff0906f99f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_ae98c6738ab78bdfcdc4c513ffcedc75d33096f0ccc3cffc7002e14050f263b7->leave($__internal_ae98c6738ab78bdfcdc4c513ffcedc75d33096f0ccc3cffc7002e14050f263b7_prof);

        
        $__internal_fa0b41294d49d767fe57fe876e6d193106e8f7d3b8dae22b0c805ff0906f99f4->leave($__internal_fa0b41294d49d767fe57fe876e6d193106e8f7d3b8dae22b0c805ff0906f99f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
