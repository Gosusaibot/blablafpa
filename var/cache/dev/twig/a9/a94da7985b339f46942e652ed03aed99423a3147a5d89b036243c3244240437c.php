<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a6b4e9beae38738caceaa73066e89870f2554548389461f0fec7631e4368656f extends Twig_Template
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
        $__internal_0f90a1d2c549b1893d73fc59de9d9b3a1ba848202bd7e9354a49bb39693356f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f90a1d2c549b1893d73fc59de9d9b3a1ba848202bd7e9354a49bb39693356f1->enter($__internal_0f90a1d2c549b1893d73fc59de9d9b3a1ba848202bd7e9354a49bb39693356f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_562493a60df9c8dceda5d26e5c5b93f53ac10b29f28facb7da93815b1c50e0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562493a60df9c8dceda5d26e5c5b93f53ac10b29f28facb7da93815b1c50e0de->enter($__internal_562493a60df9c8dceda5d26e5c5b93f53ac10b29f28facb7da93815b1c50e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0f90a1d2c549b1893d73fc59de9d9b3a1ba848202bd7e9354a49bb39693356f1->leave($__internal_0f90a1d2c549b1893d73fc59de9d9b3a1ba848202bd7e9354a49bb39693356f1_prof);

        
        $__internal_562493a60df9c8dceda5d26e5c5b93f53ac10b29f28facb7da93815b1c50e0de->leave($__internal_562493a60df9c8dceda5d26e5c5b93f53ac10b29f28facb7da93815b1c50e0de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
