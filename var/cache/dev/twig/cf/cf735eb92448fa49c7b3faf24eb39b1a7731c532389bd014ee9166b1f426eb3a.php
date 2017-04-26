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
        $__internal_3fe614d1bc47fd722677025064ea71cb9c3de9c4130fce73d423682b8e375bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe614d1bc47fd722677025064ea71cb9c3de9c4130fce73d423682b8e375bcb->enter($__internal_3fe614d1bc47fd722677025064ea71cb9c3de9c4130fce73d423682b8e375bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_6db3ad8ad4f65724d2d02b28eda358030bf943ef544a8ee49d3ba8ce171eec0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db3ad8ad4f65724d2d02b28eda358030bf943ef544a8ee49d3ba8ce171eec0d->enter($__internal_6db3ad8ad4f65724d2d02b28eda358030bf943ef544a8ee49d3ba8ce171eec0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe614d1bc47fd722677025064ea71cb9c3de9c4130fce73d423682b8e375bcb->leave($__internal_3fe614d1bc47fd722677025064ea71cb9c3de9c4130fce73d423682b8e375bcb_prof);

        
        $__internal_6db3ad8ad4f65724d2d02b28eda358030bf943ef544a8ee49d3ba8ce171eec0d->leave($__internal_6db3ad8ad4f65724d2d02b28eda358030bf943ef544a8ee49d3ba8ce171eec0d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_110fc573edcce1addb1d8dee4ef1be6ea38b74c68d9bd9d396e29e60128f306f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110fc573edcce1addb1d8dee4ef1be6ea38b74c68d9bd9d396e29e60128f306f->enter($__internal_110fc573edcce1addb1d8dee4ef1be6ea38b74c68d9bd9d396e29e60128f306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a968b904b7c0702f04d6720cfaabf212f381c56d38d7cad85fd2bc754122d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a968b904b7c0702f04d6720cfaabf212f381c56d38d7cad85fd2bc754122d2d->enter($__internal_1a968b904b7c0702f04d6720cfaabf212f381c56d38d7cad85fd2bc754122d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a968b904b7c0702f04d6720cfaabf212f381c56d38d7cad85fd2bc754122d2d->leave($__internal_1a968b904b7c0702f04d6720cfaabf212f381c56d38d7cad85fd2bc754122d2d_prof);

        
        $__internal_110fc573edcce1addb1d8dee4ef1be6ea38b74c68d9bd9d396e29e60128f306f->leave($__internal_110fc573edcce1addb1d8dee4ef1be6ea38b74c68d9bd9d396e29e60128f306f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_34104a7c594d2813712d722c19150c3dd650cd7d3de9194734d200b95b811461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34104a7c594d2813712d722c19150c3dd650cd7d3de9194734d200b95b811461->enter($__internal_34104a7c594d2813712d722c19150c3dd650cd7d3de9194734d200b95b811461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d182bda34bcff8faedeca6d46d7b9f57df9cb73f6f815f62ca7b03ea9c63fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d182bda34bcff8faedeca6d46d7b9f57df9cb73f6f815f62ca7b03ea9c63fea->enter($__internal_3d182bda34bcff8faedeca6d46d7b9f57df9cb73f6f815f62ca7b03ea9c63fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d182bda34bcff8faedeca6d46d7b9f57df9cb73f6f815f62ca7b03ea9c63fea->leave($__internal_3d182bda34bcff8faedeca6d46d7b9f57df9cb73f6f815f62ca7b03ea9c63fea_prof);

        
        $__internal_34104a7c594d2813712d722c19150c3dd650cd7d3de9194734d200b95b811461->leave($__internal_34104a7c594d2813712d722c19150c3dd650cd7d3de9194734d200b95b811461_prof);

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
