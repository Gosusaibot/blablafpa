<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0c6c70263e6c6f8b9e2def67fb3ac8e57dd1b8283bcebe518be366e636842232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_66640428e84cde12bac8e53c1a110b090e3f8dd6a91541ee779e5cd3907c0beb = $this->env->getExtension("native_profiler");
        $__internal_66640428e84cde12bac8e53c1a110b090e3f8dd6a91541ee779e5cd3907c0beb->enter($__internal_66640428e84cde12bac8e53c1a110b090e3f8dd6a91541ee779e5cd3907c0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66640428e84cde12bac8e53c1a110b090e3f8dd6a91541ee779e5cd3907c0beb->leave($__internal_66640428e84cde12bac8e53c1a110b090e3f8dd6a91541ee779e5cd3907c0beb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4797a366a6526913c924539fd88d6d4a3ba0a0ef2961f090e48b35c17c0573a6 = $this->env->getExtension("native_profiler");
        $__internal_4797a366a6526913c924539fd88d6d4a3ba0a0ef2961f090e48b35c17c0573a6->enter($__internal_4797a366a6526913c924539fd88d6d4a3ba0a0ef2961f090e48b35c17c0573a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4797a366a6526913c924539fd88d6d4a3ba0a0ef2961f090e48b35c17c0573a6->leave($__internal_4797a366a6526913c924539fd88d6d4a3ba0a0ef2961f090e48b35c17c0573a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
