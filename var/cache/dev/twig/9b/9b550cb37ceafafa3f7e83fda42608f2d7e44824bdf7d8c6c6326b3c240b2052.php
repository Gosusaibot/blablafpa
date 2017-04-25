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
        $__internal_0f04d09312227ef3197ca8982505673fee18daee4203e12e13feebff66a7e95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f04d09312227ef3197ca8982505673fee18daee4203e12e13feebff66a7e95b->enter($__internal_0f04d09312227ef3197ca8982505673fee18daee4203e12e13feebff66a7e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_f3c31eccdbb06aa9c91fb4d64cd1765a030d88527862cca2e35714d0838f93d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c31eccdbb06aa9c91fb4d64cd1765a030d88527862cca2e35714d0838f93d0->enter($__internal_f3c31eccdbb06aa9c91fb4d64cd1765a030d88527862cca2e35714d0838f93d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f04d09312227ef3197ca8982505673fee18daee4203e12e13feebff66a7e95b->leave($__internal_0f04d09312227ef3197ca8982505673fee18daee4203e12e13feebff66a7e95b_prof);

        
        $__internal_f3c31eccdbb06aa9c91fb4d64cd1765a030d88527862cca2e35714d0838f93d0->leave($__internal_f3c31eccdbb06aa9c91fb4d64cd1765a030d88527862cca2e35714d0838f93d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8afc7edee963d8571217d23b1b19cc0b7a53b7d29646bfabdaf38d1064c343c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afc7edee963d8571217d23b1b19cc0b7a53b7d29646bfabdaf38d1064c343c4->enter($__internal_8afc7edee963d8571217d23b1b19cc0b7a53b7d29646bfabdaf38d1064c343c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a1aace2d0cbc8fb6e20ab2ac1c93135c2142e2cf16b0078799b2ca8d68754bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1aace2d0cbc8fb6e20ab2ac1c93135c2142e2cf16b0078799b2ca8d68754bb->enter($__internal_7a1aace2d0cbc8fb6e20ab2ac1c93135c2142e2cf16b0078799b2ca8d68754bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a1aace2d0cbc8fb6e20ab2ac1c93135c2142e2cf16b0078799b2ca8d68754bb->leave($__internal_7a1aace2d0cbc8fb6e20ab2ac1c93135c2142e2cf16b0078799b2ca8d68754bb_prof);

        
        $__internal_8afc7edee963d8571217d23b1b19cc0b7a53b7d29646bfabdaf38d1064c343c4->leave($__internal_8afc7edee963d8571217d23b1b19cc0b7a53b7d29646bfabdaf38d1064c343c4_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5e37e89461b4b6a410ba03687f2c46b80c6ef82f0dfcd7ba12c1ad324ac50769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e37e89461b4b6a410ba03687f2c46b80c6ef82f0dfcd7ba12c1ad324ac50769->enter($__internal_5e37e89461b4b6a410ba03687f2c46b80c6ef82f0dfcd7ba12c1ad324ac50769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cd83f68b0ed07ab198cac6cb41430b489d2177c7fe10a05fd00f99c095e3ab24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd83f68b0ed07ab198cac6cb41430b489d2177c7fe10a05fd00f99c095e3ab24->enter($__internal_cd83f68b0ed07ab198cac6cb41430b489d2177c7fe10a05fd00f99c095e3ab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_cd83f68b0ed07ab198cac6cb41430b489d2177c7fe10a05fd00f99c095e3ab24->leave($__internal_cd83f68b0ed07ab198cac6cb41430b489d2177c7fe10a05fd00f99c095e3ab24_prof);

        
        $__internal_5e37e89461b4b6a410ba03687f2c46b80c6ef82f0dfcd7ba12c1ad324ac50769->leave($__internal_5e37e89461b4b6a410ba03687f2c46b80c6ef82f0dfcd7ba12c1ad324ac50769_prof);

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
