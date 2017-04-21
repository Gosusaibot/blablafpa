<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a7c3d8aabb7a92a4428fc4dc75cf81ffa4dcce17adc7e61d43bcc643afefdbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_db0db0e5a869fb589bd27cff9584e733ecd451adbde810a028144771245e5858 = $this->env->getExtension("native_profiler");
        $__internal_db0db0e5a869fb589bd27cff9584e733ecd451adbde810a028144771245e5858->enter($__internal_db0db0e5a869fb589bd27cff9584e733ecd451adbde810a028144771245e5858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db0db0e5a869fb589bd27cff9584e733ecd451adbde810a028144771245e5858->leave($__internal_db0db0e5a869fb589bd27cff9584e733ecd451adbde810a028144771245e5858_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9918985e937a6cc0511aef302d3349c0e5d1f12a1b19db906f009c322cd70a3a = $this->env->getExtension("native_profiler");
        $__internal_9918985e937a6cc0511aef302d3349c0e5d1f12a1b19db906f009c322cd70a3a->enter($__internal_9918985e937a6cc0511aef302d3349c0e5d1f12a1b19db906f009c322cd70a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9918985e937a6cc0511aef302d3349c0e5d1f12a1b19db906f009c322cd70a3a->leave($__internal_9918985e937a6cc0511aef302d3349c0e5d1f12a1b19db906f009c322cd70a3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
