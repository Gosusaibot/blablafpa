<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3568f9a335b61776ee49453c430d5ab9bb5eff2923d7a7f2f74c6e1d49033509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e56d47f3bd4f4657a98fea420ccdeb975c073e45ace8b874cafa9fe7b671f6c6 = $this->env->getExtension("native_profiler");
        $__internal_e56d47f3bd4f4657a98fea420ccdeb975c073e45ace8b874cafa9fe7b671f6c6->enter($__internal_e56d47f3bd4f4657a98fea420ccdeb975c073e45ace8b874cafa9fe7b671f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56d47f3bd4f4657a98fea420ccdeb975c073e45ace8b874cafa9fe7b671f6c6->leave($__internal_e56d47f3bd4f4657a98fea420ccdeb975c073e45ace8b874cafa9fe7b671f6c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e101b71f681b9bdad57c331d57e71875c12ce6a7462c9383aede23602447529 = $this->env->getExtension("native_profiler");
        $__internal_4e101b71f681b9bdad57c331d57e71875c12ce6a7462c9383aede23602447529->enter($__internal_4e101b71f681b9bdad57c331d57e71875c12ce6a7462c9383aede23602447529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4e101b71f681b9bdad57c331d57e71875c12ce6a7462c9383aede23602447529->leave($__internal_4e101b71f681b9bdad57c331d57e71875c12ce6a7462c9383aede23602447529_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
