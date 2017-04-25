<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a6c8cc78b192bc58284a767df204f484b639afc5ac1c75a8b623785342b41889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_6facbd564110b93c06e1f772d14935da78f56726f21bed5deab20b629a0c25d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6facbd564110b93c06e1f772d14935da78f56726f21bed5deab20b629a0c25d3->enter($__internal_6facbd564110b93c06e1f772d14935da78f56726f21bed5deab20b629a0c25d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_217eb94484e74482006676dfec6839879802d9b4b6e659b74b318127326e1de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217eb94484e74482006676dfec6839879802d9b4b6e659b74b318127326e1de6->enter($__internal_217eb94484e74482006676dfec6839879802d9b4b6e659b74b318127326e1de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6facbd564110b93c06e1f772d14935da78f56726f21bed5deab20b629a0c25d3->leave($__internal_6facbd564110b93c06e1f772d14935da78f56726f21bed5deab20b629a0c25d3_prof);

        
        $__internal_217eb94484e74482006676dfec6839879802d9b4b6e659b74b318127326e1de6->leave($__internal_217eb94484e74482006676dfec6839879802d9b4b6e659b74b318127326e1de6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_929eb3ffdd312007ce896915370dbb3df9e7bfe69f3802d6475dc481e2480ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929eb3ffdd312007ce896915370dbb3df9e7bfe69f3802d6475dc481e2480ef8->enter($__internal_929eb3ffdd312007ce896915370dbb3df9e7bfe69f3802d6475dc481e2480ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a68f6d7967c20b65940d389fa72d8d2e6e4be5bfebd9eeb9b5463af4912abffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68f6d7967c20b65940d389fa72d8d2e6e4be5bfebd9eeb9b5463af4912abffb->enter($__internal_a68f6d7967c20b65940d389fa72d8d2e6e4be5bfebd9eeb9b5463af4912abffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a68f6d7967c20b65940d389fa72d8d2e6e4be5bfebd9eeb9b5463af4912abffb->leave($__internal_a68f6d7967c20b65940d389fa72d8d2e6e4be5bfebd9eeb9b5463af4912abffb_prof);

        
        $__internal_929eb3ffdd312007ce896915370dbb3df9e7bfe69f3802d6475dc481e2480ef8->leave($__internal_929eb3ffdd312007ce896915370dbb3df9e7bfe69f3802d6475dc481e2480ef8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
