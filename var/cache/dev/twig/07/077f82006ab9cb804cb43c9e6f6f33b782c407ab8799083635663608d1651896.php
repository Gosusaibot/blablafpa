<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_55a620877e27272e8fba5ff929d8c43abb096c1eb6ad8dd10081d6d859526fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7eb0fa9064f7708c457c53854eabd1fedda2fe50b39936d94527dbb40a00bb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb0fa9064f7708c457c53854eabd1fedda2fe50b39936d94527dbb40a00bb1e->enter($__internal_7eb0fa9064f7708c457c53854eabd1fedda2fe50b39936d94527dbb40a00bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0e21e40d605c72e77004d9457f7e3dc589c7ec4b1ce37307d300ddcdb6009358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e21e40d605c72e77004d9457f7e3dc589c7ec4b1ce37307d300ddcdb6009358->enter($__internal_0e21e40d605c72e77004d9457f7e3dc589c7ec4b1ce37307d300ddcdb6009358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eb0fa9064f7708c457c53854eabd1fedda2fe50b39936d94527dbb40a00bb1e->leave($__internal_7eb0fa9064f7708c457c53854eabd1fedda2fe50b39936d94527dbb40a00bb1e_prof);

        
        $__internal_0e21e40d605c72e77004d9457f7e3dc589c7ec4b1ce37307d300ddcdb6009358->leave($__internal_0e21e40d605c72e77004d9457f7e3dc589c7ec4b1ce37307d300ddcdb6009358_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6727dc182f26a27aa911fa998268837e478818f0ff65b83a1af2cb1ac87fd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6727dc182f26a27aa911fa998268837e478818f0ff65b83a1af2cb1ac87fd2a->enter($__internal_b6727dc182f26a27aa911fa998268837e478818f0ff65b83a1af2cb1ac87fd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05bdf893c52ac15cd5496b82d58e66c33ae7cb11ccaca3a86ff714d27bcc6b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bdf893c52ac15cd5496b82d58e66c33ae7cb11ccaca3a86ff714d27bcc6b2a->enter($__internal_05bdf893c52ac15cd5496b82d58e66c33ae7cb11ccaca3a86ff714d27bcc6b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_05bdf893c52ac15cd5496b82d58e66c33ae7cb11ccaca3a86ff714d27bcc6b2a->leave($__internal_05bdf893c52ac15cd5496b82d58e66c33ae7cb11ccaca3a86ff714d27bcc6b2a_prof);

        
        $__internal_b6727dc182f26a27aa911fa998268837e478818f0ff65b83a1af2cb1ac87fd2a->leave($__internal_b6727dc182f26a27aa911fa998268837e478818f0ff65b83a1af2cb1ac87fd2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
