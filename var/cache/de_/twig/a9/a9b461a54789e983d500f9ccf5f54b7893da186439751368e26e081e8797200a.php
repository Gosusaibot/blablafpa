<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_50b4f1366f5f6166b159815551771a8007d16375c42b4a60270b9e68046ec4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a9fa1fd8b17f1de4d2698fac92046bb1a88bed230ae8184a40e01f76c48f2285 = $this->env->getExtension("native_profiler");
        $__internal_a9fa1fd8b17f1de4d2698fac92046bb1a88bed230ae8184a40e01f76c48f2285->enter($__internal_a9fa1fd8b17f1de4d2698fac92046bb1a88bed230ae8184a40e01f76c48f2285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9fa1fd8b17f1de4d2698fac92046bb1a88bed230ae8184a40e01f76c48f2285->leave($__internal_a9fa1fd8b17f1de4d2698fac92046bb1a88bed230ae8184a40e01f76c48f2285_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d8ffb7380cf2b08789ea8c2a709cadbc329ef170b3df269b619ebc4b734cac3 = $this->env->getExtension("native_profiler");
        $__internal_2d8ffb7380cf2b08789ea8c2a709cadbc329ef170b3df269b619ebc4b734cac3->enter($__internal_2d8ffb7380cf2b08789ea8c2a709cadbc329ef170b3df269b619ebc4b734cac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2d8ffb7380cf2b08789ea8c2a709cadbc329ef170b3df269b619ebc4b734cac3->leave($__internal_2d8ffb7380cf2b08789ea8c2a709cadbc329ef170b3df269b619ebc4b734cac3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
