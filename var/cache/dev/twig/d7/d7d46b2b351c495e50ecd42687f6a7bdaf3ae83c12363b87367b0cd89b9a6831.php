<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6beb8993bf5bd5b2da7ee0a4bf0aef08b18711dee013c4b731439e792665578d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1c5286a12e105c38ae781e2339a76cc94adcfb582371e3a63bc9ab1f6020d9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5286a12e105c38ae781e2339a76cc94adcfb582371e3a63bc9ab1f6020d9fa->enter($__internal_1c5286a12e105c38ae781e2339a76cc94adcfb582371e3a63bc9ab1f6020d9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5deb9d312577f818d0cfdce2d269ad440a307b389deedea1d435fa76353d202b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deb9d312577f818d0cfdce2d269ad440a307b389deedea1d435fa76353d202b->enter($__internal_5deb9d312577f818d0cfdce2d269ad440a307b389deedea1d435fa76353d202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5286a12e105c38ae781e2339a76cc94adcfb582371e3a63bc9ab1f6020d9fa->leave($__internal_1c5286a12e105c38ae781e2339a76cc94adcfb582371e3a63bc9ab1f6020d9fa_prof);

        
        $__internal_5deb9d312577f818d0cfdce2d269ad440a307b389deedea1d435fa76353d202b->leave($__internal_5deb9d312577f818d0cfdce2d269ad440a307b389deedea1d435fa76353d202b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23bcb8aab448c0a7e4604a20f8ddf7521c4e916ec1033d978839ebe57a890cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bcb8aab448c0a7e4604a20f8ddf7521c4e916ec1033d978839ebe57a890cb4->enter($__internal_23bcb8aab448c0a7e4604a20f8ddf7521c4e916ec1033d978839ebe57a890cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9961379807dc4e36ae07bebde2c281c93f23268e698c3bc283d8fdbda115c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9961379807dc4e36ae07bebde2c281c93f23268e698c3bc283d8fdbda115c95->enter($__internal_d9961379807dc4e36ae07bebde2c281c93f23268e698c3bc283d8fdbda115c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d9961379807dc4e36ae07bebde2c281c93f23268e698c3bc283d8fdbda115c95->leave($__internal_d9961379807dc4e36ae07bebde2c281c93f23268e698c3bc283d8fdbda115c95_prof);

        
        $__internal_23bcb8aab448c0a7e4604a20f8ddf7521c4e916ec1033d978839ebe57a890cb4->leave($__internal_23bcb8aab448c0a7e4604a20f8ddf7521c4e916ec1033d978839ebe57a890cb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
