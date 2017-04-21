<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b2e8dedbf03ffa67b7862587bf8f3ece0309013323f9171009ac5106f937e511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_aed39e433fe40e96142f53176e8f3379e3657ae1337d75a9290139350ae796ec = $this->env->getExtension("native_profiler");
        $__internal_aed39e433fe40e96142f53176e8f3379e3657ae1337d75a9290139350ae796ec->enter($__internal_aed39e433fe40e96142f53176e8f3379e3657ae1337d75a9290139350ae796ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed39e433fe40e96142f53176e8f3379e3657ae1337d75a9290139350ae796ec->leave($__internal_aed39e433fe40e96142f53176e8f3379e3657ae1337d75a9290139350ae796ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6892e69d9f231ab5810cd04925837b649c088f6b570af79e2033f93f69686d7 = $this->env->getExtension("native_profiler");
        $__internal_f6892e69d9f231ab5810cd04925837b649c088f6b570af79e2033f93f69686d7->enter($__internal_f6892e69d9f231ab5810cd04925837b649c088f6b570af79e2033f93f69686d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f6892e69d9f231ab5810cd04925837b649c088f6b570af79e2033f93f69686d7->leave($__internal_f6892e69d9f231ab5810cd04925837b649c088f6b570af79e2033f93f69686d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
