<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_2148c0af9ead457c7108b81ce996cc1634ec7f28b9c1cf379fc2ff416b0dd8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_849e81e4d8a87b08b7f6252a10dc72b5c7cc977be9bc711e9dffa72350c30675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849e81e4d8a87b08b7f6252a10dc72b5c7cc977be9bc711e9dffa72350c30675->enter($__internal_849e81e4d8a87b08b7f6252a10dc72b5c7cc977be9bc711e9dffa72350c30675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_673e77932fb7f74e375062a290dce2ae63683be9ae74680c869bfcc521c4b178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673e77932fb7f74e375062a290dce2ae63683be9ae74680c869bfcc521c4b178->enter($__internal_673e77932fb7f74e375062a290dce2ae63683be9ae74680c869bfcc521c4b178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849e81e4d8a87b08b7f6252a10dc72b5c7cc977be9bc711e9dffa72350c30675->leave($__internal_849e81e4d8a87b08b7f6252a10dc72b5c7cc977be9bc711e9dffa72350c30675_prof);

        
        $__internal_673e77932fb7f74e375062a290dce2ae63683be9ae74680c869bfcc521c4b178->leave($__internal_673e77932fb7f74e375062a290dce2ae63683be9ae74680c869bfcc521c4b178_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd8d1d012100c2753b28ee061ced2381a7f5a749374d9d8ca993e6388fb2a0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8d1d012100c2753b28ee061ced2381a7f5a749374d9d8ca993e6388fb2a0de->enter($__internal_bd8d1d012100c2753b28ee061ced2381a7f5a749374d9d8ca993e6388fb2a0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6538791acf7ce7db1b865108df75e7a71132c09c07fbf5df395dee20c86e29a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6538791acf7ce7db1b865108df75e7a71132c09c07fbf5df395dee20c86e29a3->enter($__internal_6538791acf7ce7db1b865108df75e7a71132c09c07fbf5df395dee20c86e29a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6538791acf7ce7db1b865108df75e7a71132c09c07fbf5df395dee20c86e29a3->leave($__internal_6538791acf7ce7db1b865108df75e7a71132c09c07fbf5df395dee20c86e29a3_prof);

        
        $__internal_bd8d1d012100c2753b28ee061ced2381a7f5a749374d9d8ca993e6388fb2a0de->leave($__internal_bd8d1d012100c2753b28ee061ced2381a7f5a749374d9d8ca993e6388fb2a0de_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a536b35eebf63a24bae046848d3d29559b56581a80428f193cb914b373bb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a536b35eebf63a24bae046848d3d29559b56581a80428f193cb914b373bb8a->enter($__internal_27a536b35eebf63a24bae046848d3d29559b56581a80428f193cb914b373bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ab99448660bab3ff14f50233958055f02bed3cdbe7f1cebf573df4800ada6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ab99448660bab3ff14f50233958055f02bed3cdbe7f1cebf573df4800ada6f->enter($__internal_89ab99448660bab3ff14f50233958055f02bed3cdbe7f1cebf573df4800ada6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  
  <p>
    Le forum n'est pas accessible pour le moment
      ";
        // line 26
        echo "  </p>

";
        
        $__internal_89ab99448660bab3ff14f50233958055f02bed3cdbe7f1cebf573df4800ada6f->leave($__internal_89ab99448660bab3ff14f50233958055f02bed3cdbe7f1cebf573df4800ada6f_prof);

        
        $__internal_27a536b35eebf63a24bae046848d3d29559b56581a80428f193cb914b373bb8a->leave($__internal_27a536b35eebf63a24bae046848d3d29559b56581a80428f193cb914b373bb8a_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

  <h2>Page d'accueil de notre site</h2>

  {# On affiche tous les messages flash dont le nom est « info » #}
  {% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

  {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
  <h3>Dernières annonces</h3>
  {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}

  
  <p>
    Le forum n'est pas accessible pour le moment
      {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
  </p>

{% endblock %}
", "OCCoreBundle:Core:index.html.twig", "/var/www/blablafpa/src/OC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
