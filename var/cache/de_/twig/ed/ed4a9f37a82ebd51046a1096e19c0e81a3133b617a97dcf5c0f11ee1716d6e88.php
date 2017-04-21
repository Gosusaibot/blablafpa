<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4fe667caf457baad591942768f990b2adc6bec39f07e24f89ea97f7f855005c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_337051c4f17d73a71d7fd8bdc6f18bf5eeba989b1f9446ae8b4dfdd2936d74c6 = $this->env->getExtension("native_profiler");
        $__internal_337051c4f17d73a71d7fd8bdc6f18bf5eeba989b1f9446ae8b4dfdd2936d74c6->enter($__internal_337051c4f17d73a71d7fd8bdc6f18bf5eeba989b1f9446ae8b4dfdd2936d74c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337051c4f17d73a71d7fd8bdc6f18bf5eeba989b1f9446ae8b4dfdd2936d74c6->leave($__internal_337051c4f17d73a71d7fd8bdc6f18bf5eeba989b1f9446ae8b4dfdd2936d74c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d14b41dde35116f3acac1aa2e904382dc801d515acd35421c79c4378410f9b5 = $this->env->getExtension("native_profiler");
        $__internal_1d14b41dde35116f3acac1aa2e904382dc801d515acd35421c79c4378410f9b5->enter($__internal_1d14b41dde35116f3acac1aa2e904382dc801d515acd35421c79c4378410f9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1d14b41dde35116f3acac1aa2e904382dc801d515acd35421c79c4378410f9b5->leave($__internal_1d14b41dde35116f3acac1aa2e904382dc801d515acd35421c79c4378410f9b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
