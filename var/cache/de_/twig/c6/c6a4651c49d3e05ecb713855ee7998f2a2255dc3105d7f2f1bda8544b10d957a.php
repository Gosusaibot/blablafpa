<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b8fbdb4973c5eb4d5731700be524d56efc0be44a1f922d1b9cd37064b5bf6275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_dc81fe591240a0b1c62366c191468eab2d7439f84c1efd45be1346c562b553cb = $this->env->getExtension("native_profiler");
        $__internal_dc81fe591240a0b1c62366c191468eab2d7439f84c1efd45be1346c562b553cb->enter($__internal_dc81fe591240a0b1c62366c191468eab2d7439f84c1efd45be1346c562b553cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc81fe591240a0b1c62366c191468eab2d7439f84c1efd45be1346c562b553cb->leave($__internal_dc81fe591240a0b1c62366c191468eab2d7439f84c1efd45be1346c562b553cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceec3469a46ffee44dafc71e9b8a9ecd34184c30bfe4ab16f7a40ef4e786d6ef = $this->env->getExtension("native_profiler");
        $__internal_ceec3469a46ffee44dafc71e9b8a9ecd34184c30bfe4ab16f7a40ef4e786d6ef->enter($__internal_ceec3469a46ffee44dafc71e9b8a9ecd34184c30bfe4ab16f7a40ef4e786d6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ceec3469a46ffee44dafc71e9b8a9ecd34184c30bfe4ab16f7a40ef4e786d6ef->leave($__internal_ceec3469a46ffee44dafc71e9b8a9ecd34184c30bfe4ab16f7a40ef4e786d6ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
