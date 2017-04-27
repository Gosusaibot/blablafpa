<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_878f65fff183341a6b5e467b5a2fe6811013a3ab7636bb2cfd9c557e42212b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f2c37b1aad134f06ee1acd29a0d60cd7ebb094f95157f8c864ebfc69b676a2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c37b1aad134f06ee1acd29a0d60cd7ebb094f95157f8c864ebfc69b676a2c0->enter($__internal_f2c37b1aad134f06ee1acd29a0d60cd7ebb094f95157f8c864ebfc69b676a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_bdc4d952c8281a3f33caba33f150674410ecac4d3fae6b9954729bc853b1be8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc4d952c8281a3f33caba33f150674410ecac4d3fae6b9954729bc853b1be8e->enter($__internal_bdc4d952c8281a3f33caba33f150674410ecac4d3fae6b9954729bc853b1be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c37b1aad134f06ee1acd29a0d60cd7ebb094f95157f8c864ebfc69b676a2c0->leave($__internal_f2c37b1aad134f06ee1acd29a0d60cd7ebb094f95157f8c864ebfc69b676a2c0_prof);

        
        $__internal_bdc4d952c8281a3f33caba33f150674410ecac4d3fae6b9954729bc853b1be8e->leave($__internal_bdc4d952c8281a3f33caba33f150674410ecac4d3fae6b9954729bc853b1be8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01c4718fd47c5206ebf4b88e98ab7f775d7f6416dde8d37fce97f6dd49205480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c4718fd47c5206ebf4b88e98ab7f775d7f6416dde8d37fce97f6dd49205480->enter($__internal_01c4718fd47c5206ebf4b88e98ab7f775d7f6416dde8d37fce97f6dd49205480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94be4738263736664ee25b6f707796980c5d8220d36cfd7fbf7d7095acdfa699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94be4738263736664ee25b6f707796980c5d8220d36cfd7fbf7d7095acdfa699->enter($__internal_94be4738263736664ee25b6f707796980c5d8220d36cfd7fbf7d7095acdfa699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_94be4738263736664ee25b6f707796980c5d8220d36cfd7fbf7d7095acdfa699->leave($__internal_94be4738263736664ee25b6f707796980c5d8220d36cfd7fbf7d7095acdfa699_prof);

        
        $__internal_01c4718fd47c5206ebf4b88e98ab7f775d7f6416dde8d37fce97f6dd49205480->leave($__internal_01c4718fd47c5206ebf4b88e98ab7f775d7f6416dde8d37fce97f6dd49205480_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
