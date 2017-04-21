<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_95fb8a5a2d0adde92fcc53c03650838e5473e2c901ace942237ae3b912c298dd extends Twig_Template
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
        $__internal_be2c8c1a0c42c008293e0c338349d54ddc6e06623828c104acc24a38b06e92fa = $this->env->getExtension("native_profiler");
        $__internal_be2c8c1a0c42c008293e0c338349d54ddc6e06623828c104acc24a38b06e92fa->enter($__internal_be2c8c1a0c42c008293e0c338349d54ddc6e06623828c104acc24a38b06e92fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_be2c8c1a0c42c008293e0c338349d54ddc6e06623828c104acc24a38b06e92fa->leave($__internal_be2c8c1a0c42c008293e0c338349d54ddc6e06623828c104acc24a38b06e92fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
