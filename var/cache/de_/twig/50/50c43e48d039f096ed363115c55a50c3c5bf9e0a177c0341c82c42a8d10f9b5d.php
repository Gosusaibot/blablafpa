<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_610e4eaae4972711352b69b4929676a4be247cb27462655d30dd8740d567730d extends Twig_Template
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
        $__internal_e2bc22de6c9af8a8682856c7715aeab4258ea1262b1a041f4f1ed027b995c684 = $this->env->getExtension("native_profiler");
        $__internal_e2bc22de6c9af8a8682856c7715aeab4258ea1262b1a041f4f1ed027b995c684->enter($__internal_e2bc22de6c9af8a8682856c7715aeab4258ea1262b1a041f4f1ed027b995c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e2bc22de6c9af8a8682856c7715aeab4258ea1262b1a041f4f1ed027b995c684->leave($__internal_e2bc22de6c9af8a8682856c7715aeab4258ea1262b1a041f4f1ed027b995c684_prof);

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
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
