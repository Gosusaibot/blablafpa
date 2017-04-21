<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1a4ce18ec882d9def5e72028c2b86f7de4253afdafc1b14b8d1528bbea4e8ced extends Twig_Template
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
        $__internal_2fa4411da0b3ab978a3890033720c48ed1138da7af1598ebfc46820b75c3907a = $this->env->getExtension("native_profiler");
        $__internal_2fa4411da0b3ab978a3890033720c48ed1138da7af1598ebfc46820b75c3907a->enter($__internal_2fa4411da0b3ab978a3890033720c48ed1138da7af1598ebfc46820b75c3907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2fa4411da0b3ab978a3890033720c48ed1138da7af1598ebfc46820b75c3907a->leave($__internal_2fa4411da0b3ab978a3890033720c48ed1138da7af1598ebfc46820b75c3907a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
