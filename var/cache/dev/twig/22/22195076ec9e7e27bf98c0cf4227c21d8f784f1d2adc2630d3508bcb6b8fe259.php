<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6df43727939037632ebf822faee37f25ca06fbb8a22ea6a61595d2481a1f4972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e112f1195ccef7f6240d9a346953e5d8774ca82dc8c55fae0c57dde74c4ca78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e112f1195ccef7f6240d9a346953e5d8774ca82dc8c55fae0c57dde74c4ca78a->enter($__internal_e112f1195ccef7f6240d9a346953e5d8774ca82dc8c55fae0c57dde74c4ca78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_fba4f8d3fe1bcbccb69be4f7de2f80b5557c8f15d5531a43610b5fdb1b91500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba4f8d3fe1bcbccb69be4f7de2f80b5557c8f15d5531a43610b5fdb1b91500f->enter($__internal_fba4f8d3fe1bcbccb69be4f7de2f80b5557c8f15d5531a43610b5fdb1b91500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e112f1195ccef7f6240d9a346953e5d8774ca82dc8c55fae0c57dde74c4ca78a->leave($__internal_e112f1195ccef7f6240d9a346953e5d8774ca82dc8c55fae0c57dde74c4ca78a_prof);

        
        $__internal_fba4f8d3fe1bcbccb69be4f7de2f80b5557c8f15d5531a43610b5fdb1b91500f->leave($__internal_fba4f8d3fe1bcbccb69be4f7de2f80b5557c8f15d5531a43610b5fdb1b91500f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7f05eb4a62e4de66ae07471451deb027aade5f71393fd249fcdbbbfafd1bf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f05eb4a62e4de66ae07471451deb027aade5f71393fd249fcdbbbfafd1bf15->enter($__internal_e7f05eb4a62e4de66ae07471451deb027aade5f71393fd249fcdbbbfafd1bf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4718f5dc066b02c61cadbd413637734e5eca9f11b8992f04f81c69bff0d16a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4718f5dc066b02c61cadbd413637734e5eca9f11b8992f04f81c69bff0d16a1b->enter($__internal_4718f5dc066b02c61cadbd413637734e5eca9f11b8992f04f81c69bff0d16a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4718f5dc066b02c61cadbd413637734e5eca9f11b8992f04f81c69bff0d16a1b->leave($__internal_4718f5dc066b02c61cadbd413637734e5eca9f11b8992f04f81c69bff0d16a1b_prof);

        
        $__internal_e7f05eb4a62e4de66ae07471451deb027aade5f71393fd249fcdbbbfafd1bf15->leave($__internal_e7f05eb4a62e4de66ae07471451deb027aade5f71393fd249fcdbbbfafd1bf15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
