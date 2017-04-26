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
        $__internal_84de8426d7639980ff1532da050114c7081d73b4cb9bc2f75aab5e646726c46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84de8426d7639980ff1532da050114c7081d73b4cb9bc2f75aab5e646726c46e->enter($__internal_84de8426d7639980ff1532da050114c7081d73b4cb9bc2f75aab5e646726c46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_ca4c0da31f6d82b955967e0a1889d6c921a2cdf8143a8f99c09c4a91dd28323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4c0da31f6d82b955967e0a1889d6c921a2cdf8143a8f99c09c4a91dd28323c->enter($__internal_ca4c0da31f6d82b955967e0a1889d6c921a2cdf8143a8f99c09c4a91dd28323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84de8426d7639980ff1532da050114c7081d73b4cb9bc2f75aab5e646726c46e->leave($__internal_84de8426d7639980ff1532da050114c7081d73b4cb9bc2f75aab5e646726c46e_prof);

        
        $__internal_ca4c0da31f6d82b955967e0a1889d6c921a2cdf8143a8f99c09c4a91dd28323c->leave($__internal_ca4c0da31f6d82b955967e0a1889d6c921a2cdf8143a8f99c09c4a91dd28323c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6190fce5d46e13752b0b8c01a889c6384fafe453f223df9c7d44c7c925339f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6190fce5d46e13752b0b8c01a889c6384fafe453f223df9c7d44c7c925339f1->enter($__internal_c6190fce5d46e13752b0b8c01a889c6384fafe453f223df9c7d44c7c925339f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a24f68dc6602d630b766605449fac46fe0d1e031a8b4bdcbf5344606103c7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a24f68dc6602d630b766605449fac46fe0d1e031a8b4bdcbf5344606103c7cf->enter($__internal_4a24f68dc6602d630b766605449fac46fe0d1e031a8b4bdcbf5344606103c7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a24f68dc6602d630b766605449fac46fe0d1e031a8b4bdcbf5344606103c7cf->leave($__internal_4a24f68dc6602d630b766605449fac46fe0d1e031a8b4bdcbf5344606103c7cf_prof);

        
        $__internal_c6190fce5d46e13752b0b8c01a889c6384fafe453f223df9c7d44c7c925339f1->leave($__internal_c6190fce5d46e13752b0b8c01a889c6384fafe453f223df9c7d44c7c925339f1_prof);

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
