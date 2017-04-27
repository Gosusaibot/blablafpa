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
        $__internal_90fe9f0773cb7a8faa453c98e3cc75dd1c32a411cdcaf3f40c7cf4469ae340c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fe9f0773cb7a8faa453c98e3cc75dd1c32a411cdcaf3f40c7cf4469ae340c8->enter($__internal_90fe9f0773cb7a8faa453c98e3cc75dd1c32a411cdcaf3f40c7cf4469ae340c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_70be379b21afa62a2f77ef91dc76498bb7be690b24eb1156a81af6ba97ed8186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70be379b21afa62a2f77ef91dc76498bb7be690b24eb1156a81af6ba97ed8186->enter($__internal_70be379b21afa62a2f77ef91dc76498bb7be690b24eb1156a81af6ba97ed8186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90fe9f0773cb7a8faa453c98e3cc75dd1c32a411cdcaf3f40c7cf4469ae340c8->leave($__internal_90fe9f0773cb7a8faa453c98e3cc75dd1c32a411cdcaf3f40c7cf4469ae340c8_prof);

        
        $__internal_70be379b21afa62a2f77ef91dc76498bb7be690b24eb1156a81af6ba97ed8186->leave($__internal_70be379b21afa62a2f77ef91dc76498bb7be690b24eb1156a81af6ba97ed8186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2e693e074021bfbadfd1f7d1dc74a64b0d811ed331b0487d53b89ade8359edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e693e074021bfbadfd1f7d1dc74a64b0d811ed331b0487d53b89ade8359edf->enter($__internal_e2e693e074021bfbadfd1f7d1dc74a64b0d811ed331b0487d53b89ade8359edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c92decfa74e289665ffb8d37b3d2fa2f86e2e199068dd416f44a43ce9527a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c92decfa74e289665ffb8d37b3d2fa2f86e2e199068dd416f44a43ce9527a4c->enter($__internal_4c92decfa74e289665ffb8d37b3d2fa2f86e2e199068dd416f44a43ce9527a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

  ";
        // line 8
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_4c92decfa74e289665ffb8d37b3d2fa2f86e2e199068dd416f44a43ce9527a4c->leave($__internal_4c92decfa74e289665ffb8d37b3d2fa2f86e2e199068dd416f44a43ce9527a4c_prof);

        
        $__internal_e2e693e074021bfbadfd1f7d1dc74a64b0d811ed331b0487d53b89ade8359edf->leave($__internal_e2e693e074021bfbadfd1f7d1dc74a64b0d811ed331b0487d53b89ade8359edf_prof);

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
        return array (  53 => 8,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}


  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
