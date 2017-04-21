<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_9a582baec8e5b4f8764b7d79499ad740a366b20d86842d58e8e7bcf9ca99d8c4 extends Twig_Template
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
        $__internal_4da8826da94f629a75cf29cc829bd30cd0c537daa6e68d84213e5bd985252e55 = $this->env->getExtension("native_profiler");
        $__internal_4da8826da94f629a75cf29cc829bd30cd0c537daa6e68d84213e5bd985252e55->enter($__internal_4da8826da94f629a75cf29cc829bd30cd0c537daa6e68d84213e5bd985252e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da8826da94f629a75cf29cc829bd30cd0c537daa6e68d84213e5bd985252e55->leave($__internal_4da8826da94f629a75cf29cc829bd30cd0c537daa6e68d84213e5bd985252e55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_83d03ae2db3e1b8d1e438366aafb7f0e2d9bdf33b812f08554646886fcf175d9 = $this->env->getExtension("native_profiler");
        $__internal_83d03ae2db3e1b8d1e438366aafb7f0e2d9bdf33b812f08554646886fcf175d9->enter($__internal_83d03ae2db3e1b8d1e438366aafb7f0e2d9bdf33b812f08554646886fcf175d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83d03ae2db3e1b8d1e438366aafb7f0e2d9bdf33b812f08554646886fcf175d9->leave($__internal_83d03ae2db3e1b8d1e438366aafb7f0e2d9bdf33b812f08554646886fcf175d9_prof);

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
