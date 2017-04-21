<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8288a0cfc4d835e33785a6cb84f21f4e2f7ce5b9f19c092dc97a074fe49f78de extends Twig_Template
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
        $__internal_3d5bda4705d788fb56558a2da65c46f57ad8b0abbf3a9b63f9ab373711e1cb0f = $this->env->getExtension("native_profiler");
        $__internal_3d5bda4705d788fb56558a2da65c46f57ad8b0abbf3a9b63f9ab373711e1cb0f->enter($__internal_3d5bda4705d788fb56558a2da65c46f57ad8b0abbf3a9b63f9ab373711e1cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3d5bda4705d788fb56558a2da65c46f57ad8b0abbf3a9b63f9ab373711e1cb0f->leave($__internal_3d5bda4705d788fb56558a2da65c46f57ad8b0abbf3a9b63f9ab373711e1cb0f_prof);

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
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
