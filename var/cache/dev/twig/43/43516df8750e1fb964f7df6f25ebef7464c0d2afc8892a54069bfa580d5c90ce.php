<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_927333a030f95e987536279a639b7a0b180a78e75acc5cdd57392e31031e3dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dcdb6a76eb1d93b98e8bdf966aac54aba08de62087d81c430f325590b7ab521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcdb6a76eb1d93b98e8bdf966aac54aba08de62087d81c430f325590b7ab521->enter($__internal_1dcdb6a76eb1d93b98e8bdf966aac54aba08de62087d81c430f325590b7ab521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_da47f8cf390bacba7073877c8566296bbe655d536b84b0b161bc601a114cdb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da47f8cf390bacba7073877c8566296bbe655d536b84b0b161bc601a114cdb00->enter($__internal_da47f8cf390bacba7073877c8566296bbe655d536b84b0b161bc601a114cdb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcdb6a76eb1d93b98e8bdf966aac54aba08de62087d81c430f325590b7ab521->leave($__internal_1dcdb6a76eb1d93b98e8bdf966aac54aba08de62087d81c430f325590b7ab521_prof);

        
        $__internal_da47f8cf390bacba7073877c8566296bbe655d536b84b0b161bc601a114cdb00->leave($__internal_da47f8cf390bacba7073877c8566296bbe655d536b84b0b161bc601a114cdb00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21b2ecb1a2ce46f3ccc4810dee542c26d32a6d4ba48115059ef5af96b4e16c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21b2ecb1a2ce46f3ccc4810dee542c26d32a6d4ba48115059ef5af96b4e16c9->enter($__internal_c21b2ecb1a2ce46f3ccc4810dee542c26d32a6d4ba48115059ef5af96b4e16c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c2484efc0c0f061dac01b0bf8c4bb74c00897350216fe2d2cd07419c2acd645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2484efc0c0f061dac01b0bf8c4bb74c00897350216fe2d2cd07419c2acd645->enter($__internal_3c2484efc0c0f061dac01b0bf8c4bb74c00897350216fe2d2cd07419c2acd645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_3c2484efc0c0f061dac01b0bf8c4bb74c00897350216fe2d2cd07419c2acd645->leave($__internal_3c2484efc0c0f061dac01b0bf8c4bb74c00897350216fe2d2cd07419c2acd645_prof);

        
        $__internal_c21b2ecb1a2ce46f3ccc4810dee542c26d32a6d4ba48115059ef5af96b4e16c9->leave($__internal_c21b2ecb1a2ce46f3ccc4810dee542c26d32a6d4ba48115059ef5af96b4e16c9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
