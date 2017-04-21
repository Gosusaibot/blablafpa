<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_9e2fa2a4002590a0eb0faa89ec8b8bb3abbafe7c93c372edc079e627c519f8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_1b625d6322d121a48cceb390b6d1fc35aaf55ef542ee9c5fcdb0b8607e23a15b = $this->env->getExtension("native_profiler");
        $__internal_1b625d6322d121a48cceb390b6d1fc35aaf55ef542ee9c5fcdb0b8607e23a15b->enter($__internal_1b625d6322d121a48cceb390b6d1fc35aaf55ef542ee9c5fcdb0b8607e23a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b625d6322d121a48cceb390b6d1fc35aaf55ef542ee9c5fcdb0b8607e23a15b->leave($__internal_1b625d6322d121a48cceb390b6d1fc35aaf55ef542ee9c5fcdb0b8607e23a15b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddd42ed503d3a7d01c530735a2c7d96e3f15f548387408d1aab1fafc414c8690 = $this->env->getExtension("native_profiler");
        $__internal_ddd42ed503d3a7d01c530735a2c7d96e3f15f548387408d1aab1fafc414c8690->enter($__internal_ddd42ed503d3a7d01c530735a2c7d96e3f15f548387408d1aab1fafc414c8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddd42ed503d3a7d01c530735a2c7d96e3f15f548387408d1aab1fafc414c8690->leave($__internal_ddd42ed503d3a7d01c530735a2c7d96e3f15f548387408d1aab1fafc414c8690_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
