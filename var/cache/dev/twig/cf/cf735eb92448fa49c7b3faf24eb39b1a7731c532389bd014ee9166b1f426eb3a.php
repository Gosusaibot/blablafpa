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
        $__internal_edd513a5d79f33439452a9c978e667ced7d0b82efbcc0fb3f69e9c09fb30d76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd513a5d79f33439452a9c978e667ced7d0b82efbcc0fb3f69e9c09fb30d76e->enter($__internal_edd513a5d79f33439452a9c978e667ced7d0b82efbcc0fb3f69e9c09fb30d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_bbaf42d693dbaa21b7faf134e8d8391c14a2095c96e6a0a65040981460abaa02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbaf42d693dbaa21b7faf134e8d8391c14a2095c96e6a0a65040981460abaa02->enter($__internal_bbaf42d693dbaa21b7faf134e8d8391c14a2095c96e6a0a65040981460abaa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd513a5d79f33439452a9c978e667ced7d0b82efbcc0fb3f69e9c09fb30d76e->leave($__internal_edd513a5d79f33439452a9c978e667ced7d0b82efbcc0fb3f69e9c09fb30d76e_prof);

        
        $__internal_bbaf42d693dbaa21b7faf134e8d8391c14a2095c96e6a0a65040981460abaa02->leave($__internal_bbaf42d693dbaa21b7faf134e8d8391c14a2095c96e6a0a65040981460abaa02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab04f0cae88c4a334af3cec8a24008595a47b29c4de9eedd3e5a3f469dcfec4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab04f0cae88c4a334af3cec8a24008595a47b29c4de9eedd3e5a3f469dcfec4d->enter($__internal_ab04f0cae88c4a334af3cec8a24008595a47b29c4de9eedd3e5a3f469dcfec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f228897a40dc5e9036af51f657a2eadc2ba5ad0859e18a738cba0b5f1f06ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f228897a40dc5e9036af51f657a2eadc2ba5ad0859e18a738cba0b5f1f06ce5->enter($__internal_4f228897a40dc5e9036af51f657a2eadc2ba5ad0859e18a738cba0b5f1f06ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f228897a40dc5e9036af51f657a2eadc2ba5ad0859e18a738cba0b5f1f06ce5->leave($__internal_4f228897a40dc5e9036af51f657a2eadc2ba5ad0859e18a738cba0b5f1f06ce5_prof);

        
        $__internal_ab04f0cae88c4a334af3cec8a24008595a47b29c4de9eedd3e5a3f469dcfec4d->leave($__internal_ab04f0cae88c4a334af3cec8a24008595a47b29c4de9eedd3e5a3f469dcfec4d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ad38029437b583b5a19237bdf0dcd49b3d08fba90244b31592f23074755533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ad38029437b583b5a19237bdf0dcd49b3d08fba90244b31592f23074755533->enter($__internal_d2ad38029437b583b5a19237bdf0dcd49b3d08fba90244b31592f23074755533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_118abca7bbd6617ba1954a3e953f17205686bf0d183b514ce6c70763eb567c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118abca7bbd6617ba1954a3e953f17205686bf0d183b514ce6c70763eb567c40->enter($__internal_118abca7bbd6617ba1954a3e953f17205686bf0d183b514ce6c70763eb567c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_118abca7bbd6617ba1954a3e953f17205686bf0d183b514ce6c70763eb567c40->leave($__internal_118abca7bbd6617ba1954a3e953f17205686bf0d183b514ce6c70763eb567c40_prof);

        
        $__internal_d2ad38029437b583b5a19237bdf0dcd49b3d08fba90244b31592f23074755533->leave($__internal_d2ad38029437b583b5a19237bdf0dcd49b3d08fba90244b31592f23074755533_prof);

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
        return array (  104 => 25,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
  </p>

{% endblock %}
", "OCCoreBundle:Core:index.html.twig", "/var/www/blablafpa/src/OC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
