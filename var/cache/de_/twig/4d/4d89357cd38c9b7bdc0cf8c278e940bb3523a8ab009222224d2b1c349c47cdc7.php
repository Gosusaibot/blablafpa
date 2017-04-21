<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7e4c111e189cd6319ee153ba5764d4459d18e6be94d35c2291f18736e82b28f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b27bde3dea43d4b8eee30e8c47a2ce73b7eed4475d5604ca52675a355b949ce0 = $this->env->getExtension("native_profiler");
        $__internal_b27bde3dea43d4b8eee30e8c47a2ce73b7eed4475d5604ca52675a355b949ce0->enter($__internal_b27bde3dea43d4b8eee30e8c47a2ce73b7eed4475d5604ca52675a355b949ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27bde3dea43d4b8eee30e8c47a2ce73b7eed4475d5604ca52675a355b949ce0->leave($__internal_b27bde3dea43d4b8eee30e8c47a2ce73b7eed4475d5604ca52675a355b949ce0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2c3c9f76c15b68c81006321eaecf357a972e84df2b0d81b304301e180b19f79 = $this->env->getExtension("native_profiler");
        $__internal_b2c3c9f76c15b68c81006321eaecf357a972e84df2b0d81b304301e180b19f79->enter($__internal_b2c3c9f76c15b68c81006321eaecf357a972e84df2b0d81b304301e180b19f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b2c3c9f76c15b68c81006321eaecf357a972e84df2b0d81b304301e180b19f79->leave($__internal_b2c3c9f76c15b68c81006321eaecf357a972e84df2b0d81b304301e180b19f79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
