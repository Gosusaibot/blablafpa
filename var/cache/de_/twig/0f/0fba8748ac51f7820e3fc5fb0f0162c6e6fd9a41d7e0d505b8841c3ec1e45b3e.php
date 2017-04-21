<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4001094f44e1649f8c9999fa5d7bd990d9841dda0a8673faa5aa0ed149daa6a3 extends Twig_Template
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
        $__internal_f0901c002faaa21f0e5a2720a4a57f5f11ae2cecf0855c673e214920f8313842 = $this->env->getExtension("native_profiler");
        $__internal_f0901c002faaa21f0e5a2720a4a57f5f11ae2cecf0855c673e214920f8313842->enter($__internal_f0901c002faaa21f0e5a2720a4a57f5f11ae2cecf0855c673e214920f8313842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f0901c002faaa21f0e5a2720a4a57f5f11ae2cecf0855c673e214920f8313842->leave($__internal_f0901c002faaa21f0e5a2720a4a57f5f11ae2cecf0855c673e214920f8313842_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
