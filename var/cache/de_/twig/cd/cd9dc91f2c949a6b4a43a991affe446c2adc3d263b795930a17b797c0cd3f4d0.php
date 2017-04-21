<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_c8eb7d014eb7cbda77be03b367bba0cedabfdebcf085821e839facb8f2c2f7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_3610f3b80ec8992dee7aa34ddee2e6f6e0a2968121da279b952b373418683a10 = $this->env->getExtension("native_profiler");
        $__internal_3610f3b80ec8992dee7aa34ddee2e6f6e0a2968121da279b952b373418683a10->enter($__internal_3610f3b80ec8992dee7aa34ddee2e6f6e0a2968121da279b952b373418683a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3610f3b80ec8992dee7aa34ddee2e6f6e0a2968121da279b952b373418683a10->leave($__internal_3610f3b80ec8992dee7aa34ddee2e6f6e0a2968121da279b952b373418683a10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c97c4e7dd8af9a5e05d1903bce4b0c59de90cfd9b777e1f4f3f143ccaeb9b755 = $this->env->getExtension("native_profiler");
        $__internal_c97c4e7dd8af9a5e05d1903bce4b0c59de90cfd9b777e1f4f3f143ccaeb9b755->enter($__internal_c97c4e7dd8af9a5e05d1903bce4b0c59de90cfd9b777e1f4f3f143ccaeb9b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c97c4e7dd8af9a5e05d1903bce4b0c59de90cfd9b777e1f4f3f143ccaeb9b755->leave($__internal_c97c4e7dd8af9a5e05d1903bce4b0c59de90cfd9b777e1f4f3f143ccaeb9b755_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a7ec6459d67f646a8fc05390fff9a8f357301198c013325d7a97b27dd5e4bece = $this->env->getExtension("native_profiler");
        $__internal_a7ec6459d67f646a8fc05390fff9a8f357301198c013325d7a97b27dd5e4bece->enter($__internal_a7ec6459d67f646a8fc05390fff9a8f357301198c013325d7a97b27dd5e4bece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_a7ec6459d67f646a8fc05390fff9a8f357301198c013325d7a97b27dd5e4bece->leave($__internal_a7ec6459d67f646a8fc05390fff9a8f357301198c013325d7a97b27dd5e4bece_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
