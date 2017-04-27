<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d35eec8e9b315424b47cede732b54b95b63f690434743aa00fb0eb2cf57aa317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5ccd9dd00ce9280352ccef586a5a8957a96ca6fcebed345e0e6700feaac6a6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccd9dd00ce9280352ccef586a5a8957a96ca6fcebed345e0e6700feaac6a6c3->enter($__internal_5ccd9dd00ce9280352ccef586a5a8957a96ca6fcebed345e0e6700feaac6a6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5dea99d4e97e92b826981373621a637e8b45a20a1055ae9bb62e12712238c9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dea99d4e97e92b826981373621a637e8b45a20a1055ae9bb62e12712238c9a1->enter($__internal_5dea99d4e97e92b826981373621a637e8b45a20a1055ae9bb62e12712238c9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ccd9dd00ce9280352ccef586a5a8957a96ca6fcebed345e0e6700feaac6a6c3->leave($__internal_5ccd9dd00ce9280352ccef586a5a8957a96ca6fcebed345e0e6700feaac6a6c3_prof);

        
        $__internal_5dea99d4e97e92b826981373621a637e8b45a20a1055ae9bb62e12712238c9a1->leave($__internal_5dea99d4e97e92b826981373621a637e8b45a20a1055ae9bb62e12712238c9a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5c79c22a2ebd3333b9b5683fd37c45a611dddc7bb2d686da8314e2a91286a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c79c22a2ebd3333b9b5683fd37c45a611dddc7bb2d686da8314e2a91286a32->enter($__internal_f5c79c22a2ebd3333b9b5683fd37c45a611dddc7bb2d686da8314e2a91286a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43e41bbccb8b8c04688361a8865bc96405a31aa206b9d9b69771e6eaaf8cc607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e41bbccb8b8c04688361a8865bc96405a31aa206b9d9b69771e6eaaf8cc607->enter($__internal_43e41bbccb8b8c04688361a8865bc96405a31aa206b9d9b69771e6eaaf8cc607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_43e41bbccb8b8c04688361a8865bc96405a31aa206b9d9b69771e6eaaf8cc607->leave($__internal_43e41bbccb8b8c04688361a8865bc96405a31aa206b9d9b69771e6eaaf8cc607_prof);

        
        $__internal_f5c79c22a2ebd3333b9b5683fd37c45a611dddc7bb2d686da8314e2a91286a32->leave($__internal_f5c79c22a2ebd3333b9b5683fd37c45a611dddc7bb2d686da8314e2a91286a32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
