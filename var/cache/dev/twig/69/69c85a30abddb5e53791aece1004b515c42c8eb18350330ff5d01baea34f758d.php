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
        $__internal_22195d5a158fad14f6e71c9aa6673ec7a6f1a8a78af07dfda64574a95d810f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22195d5a158fad14f6e71c9aa6673ec7a6f1a8a78af07dfda64574a95d810f2c->enter($__internal_22195d5a158fad14f6e71c9aa6673ec7a6f1a8a78af07dfda64574a95d810f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_82170535621e49395801e770efd78e3e5c1f5c249c4b19d4524b055c3df82cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82170535621e49395801e770efd78e3e5c1f5c249c4b19d4524b055c3df82cca->enter($__internal_82170535621e49395801e770efd78e3e5c1f5c249c4b19d4524b055c3df82cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_22195d5a158fad14f6e71c9aa6673ec7a6f1a8a78af07dfda64574a95d810f2c->leave($__internal_22195d5a158fad14f6e71c9aa6673ec7a6f1a8a78af07dfda64574a95d810f2c_prof);

        
        $__internal_82170535621e49395801e770efd78e3e5c1f5c249c4b19d4524b055c3df82cca->leave($__internal_82170535621e49395801e770efd78e3e5c1f5c249c4b19d4524b055c3df82cca_prof);

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
