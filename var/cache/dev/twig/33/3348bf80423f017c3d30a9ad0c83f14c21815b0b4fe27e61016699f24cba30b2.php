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
        $__internal_25d4ff88f589debd923c8060b0eedb05123ad25100a0d3d50f0e4bbad07167ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d4ff88f589debd923c8060b0eedb05123ad25100a0d3d50f0e4bbad07167ee->enter($__internal_25d4ff88f589debd923c8060b0eedb05123ad25100a0d3d50f0e4bbad07167ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d633f7fe6d73683f72fe6c7829a859b0864a8cbedc1f11653e84594f31f55b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d633f7fe6d73683f72fe6c7829a859b0864a8cbedc1f11653e84594f31f55b02->enter($__internal_d633f7fe6d73683f72fe6c7829a859b0864a8cbedc1f11653e84594f31f55b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_25d4ff88f589debd923c8060b0eedb05123ad25100a0d3d50f0e4bbad07167ee->leave($__internal_25d4ff88f589debd923c8060b0eedb05123ad25100a0d3d50f0e4bbad07167ee_prof);

        
        $__internal_d633f7fe6d73683f72fe6c7829a859b0864a8cbedc1f11653e84594f31f55b02->leave($__internal_d633f7fe6d73683f72fe6c7829a859b0864a8cbedc1f11653e84594f31f55b02_prof);

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
