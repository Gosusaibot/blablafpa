<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a4af1a3f18ba96397e54052cefc28c8ec11c66fba6890a51b4a7d5882e7da8ab extends Twig_Template
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
        $__internal_19ba9a58cd4cf26a9cac41f5d13d14eb47927724575f009e9599d5777de52758 = $this->env->getExtension("native_profiler");
        $__internal_19ba9a58cd4cf26a9cac41f5d13d14eb47927724575f009e9599d5777de52758->enter($__internal_19ba9a58cd4cf26a9cac41f5d13d14eb47927724575f009e9599d5777de52758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19ba9a58cd4cf26a9cac41f5d13d14eb47927724575f009e9599d5777de52758->leave($__internal_19ba9a58cd4cf26a9cac41f5d13d14eb47927724575f009e9599d5777de52758_prof);

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
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
