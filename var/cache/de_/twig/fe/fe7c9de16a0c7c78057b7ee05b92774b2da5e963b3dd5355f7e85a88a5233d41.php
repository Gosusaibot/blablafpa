<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ed236bbb2bb521354398fd54e54b61ce2723c028bd6e10adbf0b3c04da75140e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ee8bcd273d3d0a22202dc415cd7fefc26b3b8a2ac1bbb8c1355a869b991d3ef9 = $this->env->getExtension("native_profiler");
        $__internal_ee8bcd273d3d0a22202dc415cd7fefc26b3b8a2ac1bbb8c1355a869b991d3ef9->enter($__internal_ee8bcd273d3d0a22202dc415cd7fefc26b3b8a2ac1bbb8c1355a869b991d3ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8bcd273d3d0a22202dc415cd7fefc26b3b8a2ac1bbb8c1355a869b991d3ef9->leave($__internal_ee8bcd273d3d0a22202dc415cd7fefc26b3b8a2ac1bbb8c1355a869b991d3ef9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb810bea155a761c570129f2623a22b3dd82e902aeee01d954f1d1274cf2b1ac = $this->env->getExtension("native_profiler");
        $__internal_bb810bea155a761c570129f2623a22b3dd82e902aeee01d954f1d1274cf2b1ac->enter($__internal_bb810bea155a761c570129f2623a22b3dd82e902aeee01d954f1d1274cf2b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bb810bea155a761c570129f2623a22b3dd82e902aeee01d954f1d1274cf2b1ac->leave($__internal_bb810bea155a761c570129f2623a22b3dd82e902aeee01d954f1d1274cf2b1ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
