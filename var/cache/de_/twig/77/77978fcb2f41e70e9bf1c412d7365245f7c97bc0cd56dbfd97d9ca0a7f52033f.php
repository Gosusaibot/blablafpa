<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5b704c35e3d5127ba3d057661948dec5b5a38da11940367d8f3c4762ca22d6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_628c5ab0c8ac35b2bbef77ab6af5e90865ff7eabcfbf483c845b92f48a44fb9e = $this->env->getExtension("native_profiler");
        $__internal_628c5ab0c8ac35b2bbef77ab6af5e90865ff7eabcfbf483c845b92f48a44fb9e->enter($__internal_628c5ab0c8ac35b2bbef77ab6af5e90865ff7eabcfbf483c845b92f48a44fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628c5ab0c8ac35b2bbef77ab6af5e90865ff7eabcfbf483c845b92f48a44fb9e->leave($__internal_628c5ab0c8ac35b2bbef77ab6af5e90865ff7eabcfbf483c845b92f48a44fb9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96023b979d8aaac573eb2d1a8cef5e4b85c6849243cbe53973be59fa481943c0 = $this->env->getExtension("native_profiler");
        $__internal_96023b979d8aaac573eb2d1a8cef5e4b85c6849243cbe53973be59fa481943c0->enter($__internal_96023b979d8aaac573eb2d1a8cef5e4b85c6849243cbe53973be59fa481943c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_96023b979d8aaac573eb2d1a8cef5e4b85c6849243cbe53973be59fa481943c0->leave($__internal_96023b979d8aaac573eb2d1a8cef5e4b85c6849243cbe53973be59fa481943c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
