<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6e9680d3ce0b949dad7fe12d73b5d4d3a810ce00e849d99670bbdc37b1f90387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7a4c30ade6cc8a81448d0a34fa4edcc1f1d27f09a35f7f62646cffade3f2a1d4 = $this->env->getExtension("native_profiler");
        $__internal_7a4c30ade6cc8a81448d0a34fa4edcc1f1d27f09a35f7f62646cffade3f2a1d4->enter($__internal_7a4c30ade6cc8a81448d0a34fa4edcc1f1d27f09a35f7f62646cffade3f2a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4c30ade6cc8a81448d0a34fa4edcc1f1d27f09a35f7f62646cffade3f2a1d4->leave($__internal_7a4c30ade6cc8a81448d0a34fa4edcc1f1d27f09a35f7f62646cffade3f2a1d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c804f8831c9e1decf3a831d11f4793a2ec57c192dc9f930231deebd1c73cfc9 = $this->env->getExtension("native_profiler");
        $__internal_7c804f8831c9e1decf3a831d11f4793a2ec57c192dc9f930231deebd1c73cfc9->enter($__internal_7c804f8831c9e1decf3a831d11f4793a2ec57c192dc9f930231deebd1c73cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7c804f8831c9e1decf3a831d11f4793a2ec57c192dc9f930231deebd1c73cfc9->leave($__internal_7c804f8831c9e1decf3a831d11f4793a2ec57c192dc9f930231deebd1c73cfc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
