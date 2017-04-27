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
        $__internal_27497363428b2b10dc7ad65c3a7118b89f6f43c10e3f35c00db9166a8757a985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27497363428b2b10dc7ad65c3a7118b89f6f43c10e3f35c00db9166a8757a985->enter($__internal_27497363428b2b10dc7ad65c3a7118b89f6f43c10e3f35c00db9166a8757a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b408be455f5144a355150970b30f8f5e70ff92be44433abf00a8370ba226b686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b408be455f5144a355150970b30f8f5e70ff92be44433abf00a8370ba226b686->enter($__internal_b408be455f5144a355150970b30f8f5e70ff92be44433abf00a8370ba226b686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27497363428b2b10dc7ad65c3a7118b89f6f43c10e3f35c00db9166a8757a985->leave($__internal_27497363428b2b10dc7ad65c3a7118b89f6f43c10e3f35c00db9166a8757a985_prof);

        
        $__internal_b408be455f5144a355150970b30f8f5e70ff92be44433abf00a8370ba226b686->leave($__internal_b408be455f5144a355150970b30f8f5e70ff92be44433abf00a8370ba226b686_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6caf08644eff506e573c85ae2f9aa892ec03d64aca291ba945fa323fdcddb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6caf08644eff506e573c85ae2f9aa892ec03d64aca291ba945fa323fdcddb00->enter($__internal_e6caf08644eff506e573c85ae2f9aa892ec03d64aca291ba945fa323fdcddb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36127c1df570f01e6b036dd222dd8cb71d79b457c4d69e2a266b689e54dd7454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36127c1df570f01e6b036dd222dd8cb71d79b457c4d69e2a266b689e54dd7454->enter($__internal_36127c1df570f01e6b036dd222dd8cb71d79b457c4d69e2a266b689e54dd7454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_36127c1df570f01e6b036dd222dd8cb71d79b457c4d69e2a266b689e54dd7454->leave($__internal_36127c1df570f01e6b036dd222dd8cb71d79b457c4d69e2a266b689e54dd7454_prof);

        
        $__internal_e6caf08644eff506e573c85ae2f9aa892ec03d64aca291ba945fa323fdcddb00->leave($__internal_e6caf08644eff506e573c85ae2f9aa892ec03d64aca291ba945fa323fdcddb00_prof);

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
