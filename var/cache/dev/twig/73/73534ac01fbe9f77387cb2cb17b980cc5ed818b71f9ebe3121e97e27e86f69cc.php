<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_7a7658ac82c0f72ecfe462a8488c1320f59e5295c0e869b1cdcaa1504ae9793f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d48ba7988e2a59985aeaf26ba8ad57096cce0d766eff15c7f93c53fa7730e6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48ba7988e2a59985aeaf26ba8ad57096cce0d766eff15c7f93c53fa7730e6b1->enter($__internal_d48ba7988e2a59985aeaf26ba8ad57096cce0d766eff15c7f93c53fa7730e6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_377fa7aa301e5cbaa15702795ab471d3e63e254465a5ebcde8b4a2d4feb3e669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377fa7aa301e5cbaa15702795ab471d3e63e254465a5ebcde8b4a2d4feb3e669->enter($__internal_377fa7aa301e5cbaa15702795ab471d3e63e254465a5ebcde8b4a2d4feb3e669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48ba7988e2a59985aeaf26ba8ad57096cce0d766eff15c7f93c53fa7730e6b1->leave($__internal_d48ba7988e2a59985aeaf26ba8ad57096cce0d766eff15c7f93c53fa7730e6b1_prof);

        
        $__internal_377fa7aa301e5cbaa15702795ab471d3e63e254465a5ebcde8b4a2d4feb3e669->leave($__internal_377fa7aa301e5cbaa15702795ab471d3e63e254465a5ebcde8b4a2d4feb3e669_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f6e9c3023b4fee4f34a7d0f6cabd30deb1e1b6bfeaa1dcd4b1aea0431cf2e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6e9c3023b4fee4f34a7d0f6cabd30deb1e1b6bfeaa1dcd4b1aea0431cf2e45->enter($__internal_9f6e9c3023b4fee4f34a7d0f6cabd30deb1e1b6bfeaa1dcd4b1aea0431cf2e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1b30b9fb7a40b7b081f0ee289270929c8d2f6415dbc128235df0c9c8b39ff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b30b9fb7a40b7b081f0ee289270929c8d2f6415dbc128235df0c9c8b39ff28->enter($__internal_a1b30b9fb7a40b7b081f0ee289270929c8d2f6415dbc128235df0c9c8b39ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1b30b9fb7a40b7b081f0ee289270929c8d2f6415dbc128235df0c9c8b39ff28->leave($__internal_a1b30b9fb7a40b7b081f0ee289270929c8d2f6415dbc128235df0c9c8b39ff28_prof);

        
        $__internal_9f6e9c3023b4fee4f34a7d0f6cabd30deb1e1b6bfeaa1dcd4b1aea0431cf2e45->leave($__internal_9f6e9c3023b4fee4f34a7d0f6cabd30deb1e1b6bfeaa1dcd4b1aea0431cf2e45_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce87164934bacf195f3d205f70ad2c5eb4705c10471b0d3d90c5c5f6fa88971c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce87164934bacf195f3d205f70ad2c5eb4705c10471b0d3d90c5c5f6fa88971c->enter($__internal_ce87164934bacf195f3d205f70ad2c5eb4705c10471b0d3d90c5c5f6fa88971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed5e1432de946b0f7466e22f5d0d65aa54f1bb126cfa8a2ebeae51490df015a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5e1432de946b0f7466e22f5d0d65aa54f1bb126cfa8a2ebeae51490df015a5->enter($__internal_ed5e1432de946b0f7466e22f5d0d65aa54f1bb126cfa8a2ebeae51490df015a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h2 class=\"featurette-heading\"><i class=\"fa fa-car fa-1x hred\"></i> Annonces</h2>
  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_ed5e1432de946b0f7466e22f5d0d65aa54f1bb126cfa8a2ebeae51490df015a5->leave($__internal_ed5e1432de946b0f7466e22f5d0d65aa54f1bb126cfa8a2ebeae51490df015a5_prof);

        
        $__internal_ce87164934bacf195f3d205f70ad2c5eb4705c10471b0d3d90c5c5f6fa88971c->leave($__internal_ce87164934bacf195f3d205f70ad2c5eb4705c10471b0d3d90c5c5f6fa88971c_prof);

    }

    // line 16
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8e056bb5d4c8fbe8731aa36ee69096e1fe71b328a5e53eedac26d3f1ced74fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e056bb5d4c8fbe8731aa36ee69096e1fe71b328a5e53eedac26d3f1ced74fa3->enter($__internal_8e056bb5d4c8fbe8731aa36ee69096e1fe71b328a5e53eedac26d3f1ced74fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_175ca90b39c80cac9bcec2e10994e832de52516f8316c79f6f67c17ef8eba1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ca90b39c80cac9bcec2e10994e832de52516f8316c79f6f67c17ef8eba1b4->enter($__internal_175ca90b39c80cac9bcec2e10994e832de52516f8316c79f6f67c17ef8eba1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_175ca90b39c80cac9bcec2e10994e832de52516f8316c79f6f67c17ef8eba1b4->leave($__internal_175ca90b39c80cac9bcec2e10994e832de52516f8316c79f6f67c17ef8eba1b4_prof);

        
        $__internal_8e056bb5d4c8fbe8731aa36ee69096e1fe71b328a5e53eedac26d3f1ced74fa3->leave($__internal_8e056bb5d4c8fbe8731aa36ee69096e1fe71b328a5e53eedac26d3f1ced74fa3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  95 => 16,  84 => 18,  81 => 16,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h2 class=\"featurette-heading\"><i class=\"fa fa-car fa-1x hred\"></i> Annonces</h2>
  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
