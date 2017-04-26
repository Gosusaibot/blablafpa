<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_f9178fd88e444bd9bf320d7f005a1866c2e0f8e3de7daa9a809d1022cf74a9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_265235296000bf45a1f0b336861bb3ea738a4a87c21da17d8ea136aa93844d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265235296000bf45a1f0b336861bb3ea738a4a87c21da17d8ea136aa93844d57->enter($__internal_265235296000bf45a1f0b336861bb3ea738a4a87c21da17d8ea136aa93844d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_f217ac06e7fa6600b69973216fdf88112b7925d25a66add448f797ea13a179dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f217ac06e7fa6600b69973216fdf88112b7925d25a66add448f797ea13a179dd->enter($__internal_f217ac06e7fa6600b69973216fdf88112b7925d25a66add448f797ea13a179dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265235296000bf45a1f0b336861bb3ea738a4a87c21da17d8ea136aa93844d57->leave($__internal_265235296000bf45a1f0b336861bb3ea738a4a87c21da17d8ea136aa93844d57_prof);

        
        $__internal_f217ac06e7fa6600b69973216fdf88112b7925d25a66add448f797ea13a179dd->leave($__internal_f217ac06e7fa6600b69973216fdf88112b7925d25a66add448f797ea13a179dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60eaab2a9a93d59c64030a7c5d8f7f1241ca0cae8758d2caa9674503a4fb6d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60eaab2a9a93d59c64030a7c5d8f7f1241ca0cae8758d2caa9674503a4fb6d50->enter($__internal_60eaab2a9a93d59c64030a7c5d8f7f1241ca0cae8758d2caa9674503a4fb6d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4f9f6eb5fbcf83e24b3491e75a4dc9524476030b62f8eb55d295f39cd68598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f9f6eb5fbcf83e24b3491e75a4dc9524476030b62f8eb55d295f39cd68598e->enter($__internal_f4f9f6eb5fbcf83e24b3491e75a4dc9524476030b62f8eb55d295f39cd68598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4f9f6eb5fbcf83e24b3491e75a4dc9524476030b62f8eb55d295f39cd68598e->leave($__internal_f4f9f6eb5fbcf83e24b3491e75a4dc9524476030b62f8eb55d295f39cd68598e_prof);

        
        $__internal_60eaab2a9a93d59c64030a7c5d8f7f1241ca0cae8758d2caa9674503a4fb6d50->leave($__internal_60eaab2a9a93d59c64030a7c5d8f7f1241ca0cae8758d2caa9674503a4fb6d50_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c008045229e7d3d65b173e30cfcc6cf401d80582482e6b726102c27e522c3e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c008045229e7d3d65b173e30cfcc6cf401d80582482e6b726102c27e522c3e1d->enter($__internal_c008045229e7d3d65b173e30cfcc6cf401d80582482e6b726102c27e522c3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cc8d7c488041af714524abe60c4467c3830a909e1b6459f73e36308ed877b783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8d7c488041af714524abe60c4467c3830a909e1b6459f73e36308ed877b783->enter($__internal_cc8d7c488041af714524abe60c4467c3830a909e1b6459f73e36308ed877b783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_cc8d7c488041af714524abe60c4467c3830a909e1b6459f73e36308ed877b783->leave($__internal_cc8d7c488041af714524abe60c4467c3830a909e1b6459f73e36308ed877b783_prof);

        
        $__internal_c008045229e7d3d65b173e30cfcc6cf401d80582482e6b726102c27e522c3e1d->leave($__internal_c008045229e7d3d65b173e30cfcc6cf401d80582482e6b726102c27e522c3e1d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
