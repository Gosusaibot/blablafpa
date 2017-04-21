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
        $__internal_430bc1dad7ac6a9d8928976e655579adfe28dfb04bd363ffdc4a159cc8b4b648 = $this->env->getExtension("native_profiler");
        $__internal_430bc1dad7ac6a9d8928976e655579adfe28dfb04bd363ffdc4a159cc8b4b648->enter($__internal_430bc1dad7ac6a9d8928976e655579adfe28dfb04bd363ffdc4a159cc8b4b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430bc1dad7ac6a9d8928976e655579adfe28dfb04bd363ffdc4a159cc8b4b648->leave($__internal_430bc1dad7ac6a9d8928976e655579adfe28dfb04bd363ffdc4a159cc8b4b648_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d552833ed972bb5377ca957f4362e88d5f3f1e1d8b44e109fa7028a8177cad6f = $this->env->getExtension("native_profiler");
        $__internal_d552833ed972bb5377ca957f4362e88d5f3f1e1d8b44e109fa7028a8177cad6f->enter($__internal_d552833ed972bb5377ca957f4362e88d5f3f1e1d8b44e109fa7028a8177cad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d552833ed972bb5377ca957f4362e88d5f3f1e1d8b44e109fa7028a8177cad6f->leave($__internal_d552833ed972bb5377ca957f4362e88d5f3f1e1d8b44e109fa7028a8177cad6f_prof);

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
