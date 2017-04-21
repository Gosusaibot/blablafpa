<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_203525707432d57390d1a4a751eaacdc74e686283de8e106cdbb1cd776a7ba23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_882be1f053065d0745cb534cba25b5d235964ab40fdd8e13a1dccbe53f264441 = $this->env->getExtension("native_profiler");
        $__internal_882be1f053065d0745cb534cba25b5d235964ab40fdd8e13a1dccbe53f264441->enter($__internal_882be1f053065d0745cb534cba25b5d235964ab40fdd8e13a1dccbe53f264441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882be1f053065d0745cb534cba25b5d235964ab40fdd8e13a1dccbe53f264441->leave($__internal_882be1f053065d0745cb534cba25b5d235964ab40fdd8e13a1dccbe53f264441_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0705063472862e3c3cbd6d03b202e2bbcf689415e333036d576f8660977dd53c = $this->env->getExtension("native_profiler");
        $__internal_0705063472862e3c3cbd6d03b202e2bbcf689415e333036d576f8660977dd53c->enter($__internal_0705063472862e3c3cbd6d03b202e2bbcf689415e333036d576f8660977dd53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_0705063472862e3c3cbd6d03b202e2bbcf689415e333036d576f8660977dd53c->leave($__internal_0705063472862e3c3cbd6d03b202e2bbcf689415e333036d576f8660977dd53c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
