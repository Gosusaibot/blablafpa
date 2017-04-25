<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e5bba54bcc820a1762d2476d3af20c6f0fa238de191cac83f521e78233130ba6 extends Twig_Template
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
        $__internal_f42ef7e8bee8eb5e00250caca5a54f841a4f5c9c80883f553ff52a959a888356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42ef7e8bee8eb5e00250caca5a54f841a4f5c9c80883f553ff52a959a888356->enter($__internal_f42ef7e8bee8eb5e00250caca5a54f841a4f5c9c80883f553ff52a959a888356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9b007a2246564df84ab869eeb7c50cffdd39d5a40b3755a0cf4c080b7188773f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b007a2246564df84ab869eeb7c50cffdd39d5a40b3755a0cf4c080b7188773f->enter($__internal_9b007a2246564df84ab869eeb7c50cffdd39d5a40b3755a0cf4c080b7188773f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f42ef7e8bee8eb5e00250caca5a54f841a4f5c9c80883f553ff52a959a888356->leave($__internal_f42ef7e8bee8eb5e00250caca5a54f841a4f5c9c80883f553ff52a959a888356_prof);

        
        $__internal_9b007a2246564df84ab869eeb7c50cffdd39d5a40b3755a0cf4c080b7188773f->leave($__internal_9b007a2246564df84ab869eeb7c50cffdd39d5a40b3755a0cf4c080b7188773f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
