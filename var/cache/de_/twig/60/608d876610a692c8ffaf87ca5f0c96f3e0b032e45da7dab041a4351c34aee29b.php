<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_3827b021542697e918652166349c81484bb33e3c755ce57ae8303cfd1491de40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_13e54a171fc2f09dea6968bf4399cc29d327ba7fe7e78e1e8e88b0bc24969ea0 = $this->env->getExtension("native_profiler");
        $__internal_13e54a171fc2f09dea6968bf4399cc29d327ba7fe7e78e1e8e88b0bc24969ea0->enter($__internal_13e54a171fc2f09dea6968bf4399cc29d327ba7fe7e78e1e8e88b0bc24969ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e54a171fc2f09dea6968bf4399cc29d327ba7fe7e78e1e8e88b0bc24969ea0->leave($__internal_13e54a171fc2f09dea6968bf4399cc29d327ba7fe7e78e1e8e88b0bc24969ea0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5791f68fdd31ea292cbdd85290ae591d347dee6a7e07a19f5acae16dfc328c4c = $this->env->getExtension("native_profiler");
        $__internal_5791f68fdd31ea292cbdd85290ae591d347dee6a7e07a19f5acae16dfc328c4c->enter($__internal_5791f68fdd31ea292cbdd85290ae591d347dee6a7e07a19f5acae16dfc328c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5791f68fdd31ea292cbdd85290ae591d347dee6a7e07a19f5acae16dfc328c4c->leave($__internal_5791f68fdd31ea292cbdd85290ae591d347dee6a7e07a19f5acae16dfc328c4c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
