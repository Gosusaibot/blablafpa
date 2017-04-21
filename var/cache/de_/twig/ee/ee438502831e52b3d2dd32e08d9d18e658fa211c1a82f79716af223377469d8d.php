<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d2bcc90b816a34d7ea58eca133e29471c5d4d8c0a478131dca74c0effd58b19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_86165120e096c9bcf308a28b15a00269d4d72319a0997acdb2158dfe24819820 = $this->env->getExtension("native_profiler");
        $__internal_86165120e096c9bcf308a28b15a00269d4d72319a0997acdb2158dfe24819820->enter($__internal_86165120e096c9bcf308a28b15a00269d4d72319a0997acdb2158dfe24819820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86165120e096c9bcf308a28b15a00269d4d72319a0997acdb2158dfe24819820->leave($__internal_86165120e096c9bcf308a28b15a00269d4d72319a0997acdb2158dfe24819820_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efe7c9511e16725777f2b08b6e414cee48859bdf7129dbcf5d0dea23b7e4070b = $this->env->getExtension("native_profiler");
        $__internal_efe7c9511e16725777f2b08b6e414cee48859bdf7129dbcf5d0dea23b7e4070b->enter($__internal_efe7c9511e16725777f2b08b6e414cee48859bdf7129dbcf5d0dea23b7e4070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_efe7c9511e16725777f2b08b6e414cee48859bdf7129dbcf5d0dea23b7e4070b->leave($__internal_efe7c9511e16725777f2b08b6e414cee48859bdf7129dbcf5d0dea23b7e4070b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
