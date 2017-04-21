<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c8c5a01253ff0e56c707b4ed774b8406877e3eb8aa2cf6f887f93d0b79e007eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4333e6b82562026fe5e2bba47932d8bc2bf17a9249a70df2149cf9c7d67b61 = $this->env->getExtension("native_profiler");
        $__internal_0b4333e6b82562026fe5e2bba47932d8bc2bf17a9249a70df2149cf9c7d67b61->enter($__internal_0b4333e6b82562026fe5e2bba47932d8bc2bf17a9249a70df2149cf9c7d67b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4333e6b82562026fe5e2bba47932d8bc2bf17a9249a70df2149cf9c7d67b61->leave($__internal_0b4333e6b82562026fe5e2bba47932d8bc2bf17a9249a70df2149cf9c7d67b61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2698040bc8a7d4f377e17c76c41e47eba2f43b24c9f2751a4c8541d3e13aa06 = $this->env->getExtension("native_profiler");
        $__internal_d2698040bc8a7d4f377e17c76c41e47eba2f43b24c9f2751a4c8541d3e13aa06->enter($__internal_d2698040bc8a7d4f377e17c76c41e47eba2f43b24c9f2751a4c8541d3e13aa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d2698040bc8a7d4f377e17c76c41e47eba2f43b24c9f2751a4c8541d3e13aa06->leave($__internal_d2698040bc8a7d4f377e17c76c41e47eba2f43b24c9f2751a4c8541d3e13aa06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
