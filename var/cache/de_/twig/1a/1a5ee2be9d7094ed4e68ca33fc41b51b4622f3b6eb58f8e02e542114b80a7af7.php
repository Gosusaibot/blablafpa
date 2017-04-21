<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4ef3b465d986a53dd742a4e924c32423de30e6ee3cbe5539b18627d5fce4e8dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_8ffb32eea68f9372b292778b253eff9920f3fdd818c760588cd67e6792d31695 = $this->env->getExtension("native_profiler");
        $__internal_8ffb32eea68f9372b292778b253eff9920f3fdd818c760588cd67e6792d31695->enter($__internal_8ffb32eea68f9372b292778b253eff9920f3fdd818c760588cd67e6792d31695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffb32eea68f9372b292778b253eff9920f3fdd818c760588cd67e6792d31695->leave($__internal_8ffb32eea68f9372b292778b253eff9920f3fdd818c760588cd67e6792d31695_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7c2d760becf220b4d6332af0196faef2a03a997ce22f399a07d5ffbf6457ac5 = $this->env->getExtension("native_profiler");
        $__internal_a7c2d760becf220b4d6332af0196faef2a03a997ce22f399a07d5ffbf6457ac5->enter($__internal_a7c2d760becf220b4d6332af0196faef2a03a997ce22f399a07d5ffbf6457ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a7c2d760becf220b4d6332af0196faef2a03a997ce22f399a07d5ffbf6457ac5->leave($__internal_a7c2d760becf220b4d6332af0196faef2a03a997ce22f399a07d5ffbf6457ac5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
