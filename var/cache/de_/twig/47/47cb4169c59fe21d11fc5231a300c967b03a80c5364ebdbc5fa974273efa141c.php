<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_80cb8a166f73a6061e1895777a6561035a93cc79fa63684a6e4fe6e7fdab2470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_188a7bb81454660f4060a95a69aecbb70715f8a7f58645d255e8e25c775b6c28 = $this->env->getExtension("native_profiler");
        $__internal_188a7bb81454660f4060a95a69aecbb70715f8a7f58645d255e8e25c775b6c28->enter($__internal_188a7bb81454660f4060a95a69aecbb70715f8a7f58645d255e8e25c775b6c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188a7bb81454660f4060a95a69aecbb70715f8a7f58645d255e8e25c775b6c28->leave($__internal_188a7bb81454660f4060a95a69aecbb70715f8a7f58645d255e8e25c775b6c28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45782744a140be1dec0885365e420db421d519877eed45f0634dfe86c3b5f183 = $this->env->getExtension("native_profiler");
        $__internal_45782744a140be1dec0885365e420db421d519877eed45f0634dfe86c3b5f183->enter($__internal_45782744a140be1dec0885365e420db421d519877eed45f0634dfe86c3b5f183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_45782744a140be1dec0885365e420db421d519877eed45f0634dfe86c3b5f183->leave($__internal_45782744a140be1dec0885365e420db421d519877eed45f0634dfe86c3b5f183_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
