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
        $__internal_0a14655132c6d0f6b98df4cafea95cf541c01a753befb177c99c3c2fb206a9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a14655132c6d0f6b98df4cafea95cf541c01a753befb177c99c3c2fb206a9ab->enter($__internal_0a14655132c6d0f6b98df4cafea95cf541c01a753befb177c99c3c2fb206a9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9eb3d43eb3086d8612c9dd4117d8a711dc7e462738dd33e8fe272208a807f182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb3d43eb3086d8612c9dd4117d8a711dc7e462738dd33e8fe272208a807f182->enter($__internal_9eb3d43eb3086d8612c9dd4117d8a711dc7e462738dd33e8fe272208a807f182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a14655132c6d0f6b98df4cafea95cf541c01a753befb177c99c3c2fb206a9ab->leave($__internal_0a14655132c6d0f6b98df4cafea95cf541c01a753befb177c99c3c2fb206a9ab_prof);

        
        $__internal_9eb3d43eb3086d8612c9dd4117d8a711dc7e462738dd33e8fe272208a807f182->leave($__internal_9eb3d43eb3086d8612c9dd4117d8a711dc7e462738dd33e8fe272208a807f182_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f35eef37c1700fd350289023731a36d471c86ceb3cd1654519cd59986e0803dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35eef37c1700fd350289023731a36d471c86ceb3cd1654519cd59986e0803dd->enter($__internal_f35eef37c1700fd350289023731a36d471c86ceb3cd1654519cd59986e0803dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b99316bd66e7716e1b9f5aaee8fed35c58dc02490fb8817ddd78e1afa5b1c0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99316bd66e7716e1b9f5aaee8fed35c58dc02490fb8817ddd78e1afa5b1c0d5->enter($__internal_b99316bd66e7716e1b9f5aaee8fed35c58dc02490fb8817ddd78e1afa5b1c0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b99316bd66e7716e1b9f5aaee8fed35c58dc02490fb8817ddd78e1afa5b1c0d5->leave($__internal_b99316bd66e7716e1b9f5aaee8fed35c58dc02490fb8817ddd78e1afa5b1c0d5_prof);

        
        $__internal_f35eef37c1700fd350289023731a36d471c86ceb3cd1654519cd59986e0803dd->leave($__internal_f35eef37c1700fd350289023731a36d471c86ceb3cd1654519cd59986e0803dd_prof);

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
