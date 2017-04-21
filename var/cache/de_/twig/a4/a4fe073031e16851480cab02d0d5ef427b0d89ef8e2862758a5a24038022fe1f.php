<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18224f1e4261f2667d9389e3724de95880e493b497931890d0f86a949511586a extends Twig_Template
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
        $__internal_4927c19ae0f2ef7256d0cb1b663a950aee36c7b4b02c1fe428f3b437bc3ca1c9 = $this->env->getExtension("native_profiler");
        $__internal_4927c19ae0f2ef7256d0cb1b663a950aee36c7b4b02c1fe428f3b437bc3ca1c9->enter($__internal_4927c19ae0f2ef7256d0cb1b663a950aee36c7b4b02c1fe428f3b437bc3ca1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4927c19ae0f2ef7256d0cb1b663a950aee36c7b4b02c1fe428f3b437bc3ca1c9->leave($__internal_4927c19ae0f2ef7256d0cb1b663a950aee36c7b4b02c1fe428f3b437bc3ca1c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
