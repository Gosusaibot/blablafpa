<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4eeb1516657ae84568da24c2e24cfd028eb64781409d2998fa7c6c82a43bb39d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b886953ba819983078bef29cc74e233865e3ed776f5d4b03b8bad624086cd2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b886953ba819983078bef29cc74e233865e3ed776f5d4b03b8bad624086cd2bb->enter($__internal_b886953ba819983078bef29cc74e233865e3ed776f5d4b03b8bad624086cd2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_febba25e4543eca0edf55da98ddbab12bc01e505f817fc6a7fc62439a00891d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febba25e4543eca0edf55da98ddbab12bc01e505f817fc6a7fc62439a00891d9->enter($__internal_febba25e4543eca0edf55da98ddbab12bc01e505f817fc6a7fc62439a00891d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b886953ba819983078bef29cc74e233865e3ed776f5d4b03b8bad624086cd2bb->leave($__internal_b886953ba819983078bef29cc74e233865e3ed776f5d4b03b8bad624086cd2bb_prof);

        
        $__internal_febba25e4543eca0edf55da98ddbab12bc01e505f817fc6a7fc62439a00891d9->leave($__internal_febba25e4543eca0edf55da98ddbab12bc01e505f817fc6a7fc62439a00891d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb1b4bef16c619acb9fa72e853737679bb34c3af9f1af003bec28d4979843b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1b4bef16c619acb9fa72e853737679bb34c3af9f1af003bec28d4979843b10->enter($__internal_fb1b4bef16c619acb9fa72e853737679bb34c3af9f1af003bec28d4979843b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fcb621fd3858471e944b5f045cfada99a8ae87bce215acc2f8aa948f4105f51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb621fd3858471e944b5f045cfada99a8ae87bce215acc2f8aa948f4105f51b->enter($__internal_fcb621fd3858471e944b5f045cfada99a8ae87bce215acc2f8aa948f4105f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fcb621fd3858471e944b5f045cfada99a8ae87bce215acc2f8aa948f4105f51b->leave($__internal_fcb621fd3858471e944b5f045cfada99a8ae87bce215acc2f8aa948f4105f51b_prof);

        
        $__internal_fb1b4bef16c619acb9fa72e853737679bb34c3af9f1af003bec28d4979843b10->leave($__internal_fb1b4bef16c619acb9fa72e853737679bb34c3af9f1af003bec28d4979843b10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
