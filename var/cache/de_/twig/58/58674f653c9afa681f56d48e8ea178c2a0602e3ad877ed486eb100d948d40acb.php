<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ba06515b6e7e5a30106321aeb88112b2596f3e2b81f684f10dcb7b98bcc7c9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c500c3f27ca6441574104b11beb399fce5547aed60da770155359a8e45200e9a = $this->env->getExtension("native_profiler");
        $__internal_c500c3f27ca6441574104b11beb399fce5547aed60da770155359a8e45200e9a->enter($__internal_c500c3f27ca6441574104b11beb399fce5547aed60da770155359a8e45200e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c500c3f27ca6441574104b11beb399fce5547aed60da770155359a8e45200e9a->leave($__internal_c500c3f27ca6441574104b11beb399fce5547aed60da770155359a8e45200e9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_578b4681d2c2b2d95109a33e13c2d696b5683bc65885d591b5cd9e794055310c = $this->env->getExtension("native_profiler");
        $__internal_578b4681d2c2b2d95109a33e13c2d696b5683bc65885d591b5cd9e794055310c->enter($__internal_578b4681d2c2b2d95109a33e13c2d696b5683bc65885d591b5cd9e794055310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_578b4681d2c2b2d95109a33e13c2d696b5683bc65885d591b5cd9e794055310c->leave($__internal_578b4681d2c2b2d95109a33e13c2d696b5683bc65885d591b5cd9e794055310c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
