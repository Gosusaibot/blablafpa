<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_c8ed21d6a81afd8c89a67c33cb0be6b982888f8b214813d1a87af1def2d81e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_48649d34e99c190edda1f47e36a01ef16fe5258bc34a1a967e50b06dab288de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48649d34e99c190edda1f47e36a01ef16fe5258bc34a1a967e50b06dab288de6->enter($__internal_48649d34e99c190edda1f47e36a01ef16fe5258bc34a1a967e50b06dab288de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_c7df684638456aeeece9d1d759a39c079d599b167c36b31e595a88a08e33ebc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7df684638456aeeece9d1d759a39c079d599b167c36b31e595a88a08e33ebc8->enter($__internal_c7df684638456aeeece9d1d759a39c079d599b167c36b31e595a88a08e33ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48649d34e99c190edda1f47e36a01ef16fe5258bc34a1a967e50b06dab288de6->leave($__internal_48649d34e99c190edda1f47e36a01ef16fe5258bc34a1a967e50b06dab288de6_prof);

        
        $__internal_c7df684638456aeeece9d1d759a39c079d599b167c36b31e595a88a08e33ebc8->leave($__internal_c7df684638456aeeece9d1d759a39c079d599b167c36b31e595a88a08e33ebc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af51d6e75c12436bcc38b1d3db72343d6728ba48fcc895616ffcbcd8b53a533f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af51d6e75c12436bcc38b1d3db72343d6728ba48fcc895616ffcbcd8b53a533f->enter($__internal_af51d6e75c12436bcc38b1d3db72343d6728ba48fcc895616ffcbcd8b53a533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d282f3b1079f29312e291eef4a7236ed4f0148b2f4f641d4d9b0fa21787e7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d282f3b1079f29312e291eef4a7236ed4f0148b2f4f641d4d9b0fa21787e7f0->enter($__internal_2d282f3b1079f29312e291eef4a7236ed4f0148b2f4f641d4d9b0fa21787e7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d282f3b1079f29312e291eef4a7236ed4f0148b2f4f641d4d9b0fa21787e7f0->leave($__internal_2d282f3b1079f29312e291eef4a7236ed4f0148b2f4f641d4d9b0fa21787e7f0_prof);

        
        $__internal_af51d6e75c12436bcc38b1d3db72343d6728ba48fcc895616ffcbcd8b53a533f->leave($__internal_af51d6e75c12436bcc38b1d3db72343d6728ba48fcc895616ffcbcd8b53a533f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ee3f0c2d4943554b74f090887383c2fb34f8ee3d5244f052ab7dfe657bb99b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3f0c2d4943554b74f090887383c2fb34f8ee3d5244f052ab7dfe657bb99b83->enter($__internal_ee3f0c2d4943554b74f090887383c2fb34f8ee3d5244f052ab7dfe657bb99b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f9b435fa090fa3df9b5e6e4e2eed4ddf868e38aa14f0fdf492f25f2cb653c79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b435fa090fa3df9b5e6e4e2eed4ddf868e38aa14f0fdf492f25f2cb653c79a->enter($__internal_f9b435fa090fa3df9b5e6e4e2eed4ddf868e38aa14f0fdf492f25f2cb653c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_f9b435fa090fa3df9b5e6e4e2eed4ddf868e38aa14f0fdf492f25f2cb653c79a->leave($__internal_f9b435fa090fa3df9b5e6e4e2eed4ddf868e38aa14f0fdf492f25f2cb653c79a_prof);

        
        $__internal_ee3f0c2d4943554b74f090887383c2fb34f8ee3d5244f052ab7dfe657bb99b83->leave($__internal_ee3f0c2d4943554b74f090887383c2fb34f8ee3d5244f052ab7dfe657bb99b83_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  96 => 24,  89 => 19,  84 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}
", "OCPlatformBundle:Advert:delete.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
