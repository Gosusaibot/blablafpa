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
        $__internal_fc696272848b09d21bc759e12f737be5b5704431c5d96b604ed4b4b44ee81bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc696272848b09d21bc759e12f737be5b5704431c5d96b604ed4b4b44ee81bd0->enter($__internal_fc696272848b09d21bc759e12f737be5b5704431c5d96b604ed4b4b44ee81bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d732f89be20760f681de3284d3b2ff286537456af709208785948c0fda676909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732f89be20760f681de3284d3b2ff286537456af709208785948c0fda676909->enter($__internal_d732f89be20760f681de3284d3b2ff286537456af709208785948c0fda676909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc696272848b09d21bc759e12f737be5b5704431c5d96b604ed4b4b44ee81bd0->leave($__internal_fc696272848b09d21bc759e12f737be5b5704431c5d96b604ed4b4b44ee81bd0_prof);

        
        $__internal_d732f89be20760f681de3284d3b2ff286537456af709208785948c0fda676909->leave($__internal_d732f89be20760f681de3284d3b2ff286537456af709208785948c0fda676909_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4ec060d65383bf0a22ea1a3915b1dff536670fe7ac58893fde58d83ecabf623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ec060d65383bf0a22ea1a3915b1dff536670fe7ac58893fde58d83ecabf623->enter($__internal_a4ec060d65383bf0a22ea1a3915b1dff536670fe7ac58893fde58d83ecabf623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44b745fac7abc8d5f2f0f3aec4d18b8efb105eb658f62a387b5cc0a75ff1f0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b745fac7abc8d5f2f0f3aec4d18b8efb105eb658f62a387b5cc0a75ff1f0e2->enter($__internal_44b745fac7abc8d5f2f0f3aec4d18b8efb105eb658f62a387b5cc0a75ff1f0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_44b745fac7abc8d5f2f0f3aec4d18b8efb105eb658f62a387b5cc0a75ff1f0e2->leave($__internal_44b745fac7abc8d5f2f0f3aec4d18b8efb105eb658f62a387b5cc0a75ff1f0e2_prof);

        
        $__internal_a4ec060d65383bf0a22ea1a3915b1dff536670fe7ac58893fde58d83ecabf623->leave($__internal_a4ec060d65383bf0a22ea1a3915b1dff536670fe7ac58893fde58d83ecabf623_prof);

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
