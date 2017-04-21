<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_a36f708a1bff1b17c4748b7ccb7950728b353aa81afad0d5fbdaf01d7fe43c63 extends Twig_Template
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
        $__internal_a211190712914a978ae7c83b1d3a2c7cd51b226d5363af53367d3cccec1df0cb = $this->env->getExtension("native_profiler");
        $__internal_a211190712914a978ae7c83b1d3a2c7cd51b226d5363af53367d3cccec1df0cb->enter($__internal_a211190712914a978ae7c83b1d3a2c7cd51b226d5363af53367d3cccec1df0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a211190712914a978ae7c83b1d3a2c7cd51b226d5363af53367d3cccec1df0cb->leave($__internal_a211190712914a978ae7c83b1d3a2c7cd51b226d5363af53367d3cccec1df0cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cbe7f3bd2b872d4fd1d2a2185dfef0600edc7b804a8ca08dc6b27373564938d = $this->env->getExtension("native_profiler");
        $__internal_0cbe7f3bd2b872d4fd1d2a2185dfef0600edc7b804a8ca08dc6b27373564938d->enter($__internal_0cbe7f3bd2b872d4fd1d2a2185dfef0600edc7b804a8ca08dc6b27373564938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0cbe7f3bd2b872d4fd1d2a2185dfef0600edc7b804a8ca08dc6b27373564938d->leave($__internal_0cbe7f3bd2b872d4fd1d2a2185dfef0600edc7b804a8ca08dc6b27373564938d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f66c97895420cb836e8949244056ee616ae06682e1dc12ad37eff878e4df0f9 = $this->env->getExtension("native_profiler");
        $__internal_4f66c97895420cb836e8949244056ee616ae06682e1dc12ad37eff878e4df0f9->enter($__internal_4f66c97895420cb836e8949244056ee616ae06682e1dc12ad37eff878e4df0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_4f66c97895420cb836e8949244056ee616ae06682e1dc12ad37eff878e4df0f9->leave($__internal_4f66c97895420cb836e8949244056ee616ae06682e1dc12ad37eff878e4df0f9_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a00ee148b3975634f3ec4463235212deb7556915a3f56c8d69f2b06361f225d4 = $this->env->getExtension("native_profiler");
        $__internal_a00ee148b3975634f3ec4463235212deb7556915a3f56c8d69f2b06361f225d4->enter($__internal_a00ee148b3975634f3ec4463235212deb7556915a3f56c8d69f2b06361f225d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_a00ee148b3975634f3ec4463235212deb7556915a3f56c8d69f2b06361f225d4->leave($__internal_a00ee148b3975634f3ec4463235212deb7556915a3f56c8d69f2b06361f225d4_prof);

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
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
