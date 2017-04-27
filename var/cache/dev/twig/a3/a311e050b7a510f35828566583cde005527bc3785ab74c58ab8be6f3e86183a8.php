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
        $__internal_5e47afd3a35cc25ea20e78d96c40d8bd5773c8f9fbef2b62331235eb5d50bf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e47afd3a35cc25ea20e78d96c40d8bd5773c8f9fbef2b62331235eb5d50bf01->enter($__internal_5e47afd3a35cc25ea20e78d96c40d8bd5773c8f9fbef2b62331235eb5d50bf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_309bc09476969c6d45962341fa9a56e31303c0ef7a91eecb9b43b6c2d1b758de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309bc09476969c6d45962341fa9a56e31303c0ef7a91eecb9b43b6c2d1b758de->enter($__internal_309bc09476969c6d45962341fa9a56e31303c0ef7a91eecb9b43b6c2d1b758de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e47afd3a35cc25ea20e78d96c40d8bd5773c8f9fbef2b62331235eb5d50bf01->leave($__internal_5e47afd3a35cc25ea20e78d96c40d8bd5773c8f9fbef2b62331235eb5d50bf01_prof);

        
        $__internal_309bc09476969c6d45962341fa9a56e31303c0ef7a91eecb9b43b6c2d1b758de->leave($__internal_309bc09476969c6d45962341fa9a56e31303c0ef7a91eecb9b43b6c2d1b758de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a26a08473a6fd862343758d7ae6128d9c17dac35d2899d60be5bfad2461c1eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26a08473a6fd862343758d7ae6128d9c17dac35d2899d60be5bfad2461c1eba->enter($__internal_a26a08473a6fd862343758d7ae6128d9c17dac35d2899d60be5bfad2461c1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a1447dd9ed78a1fdea1ceb0485734a84d20501fd2cfe0c1d4c297bcf37e338a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1447dd9ed78a1fdea1ceb0485734a84d20501fd2cfe0c1d4c297bcf37e338a->enter($__internal_2a1447dd9ed78a1fdea1ceb0485734a84d20501fd2cfe0c1d4c297bcf37e338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a1447dd9ed78a1fdea1ceb0485734a84d20501fd2cfe0c1d4c297bcf37e338a->leave($__internal_2a1447dd9ed78a1fdea1ceb0485734a84d20501fd2cfe0c1d4c297bcf37e338a_prof);

        
        $__internal_a26a08473a6fd862343758d7ae6128d9c17dac35d2899d60be5bfad2461c1eba->leave($__internal_a26a08473a6fd862343758d7ae6128d9c17dac35d2899d60be5bfad2461c1eba_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7e53427425efdf7197cd9368f9516228fe1fff9e914a3c5b7a40359c2e42947f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e53427425efdf7197cd9368f9516228fe1fff9e914a3c5b7a40359c2e42947f->enter($__internal_7e53427425efdf7197cd9368f9516228fe1fff9e914a3c5b7a40359c2e42947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_dc7f9014ca51b4708ed90bb87476f63f73ceac8ce61dee91a54cb3aa7c20e33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7f9014ca51b4708ed90bb87476f63f73ceac8ce61dee91a54cb3aa7c20e33b->enter($__internal_dc7f9014ca51b4708ed90bb87476f63f73ceac8ce61dee91a54cb3aa7c20e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_dc7f9014ca51b4708ed90bb87476f63f73ceac8ce61dee91a54cb3aa7c20e33b->leave($__internal_dc7f9014ca51b4708ed90bb87476f63f73ceac8ce61dee91a54cb3aa7c20e33b_prof);

        
        $__internal_7e53427425efdf7197cd9368f9516228fe1fff9e914a3c5b7a40359c2e42947f->leave($__internal_7e53427425efdf7197cd9368f9516228fe1fff9e914a3c5b7a40359c2e42947f_prof);

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
