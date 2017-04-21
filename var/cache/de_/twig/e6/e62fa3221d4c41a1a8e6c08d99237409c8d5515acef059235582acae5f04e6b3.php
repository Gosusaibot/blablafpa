<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_0e38843069f41973a8b2e9b61936157d075bfce0e833701ea86a824646d28f53 extends Twig_Template
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
        $__internal_a439c2c8cf465c2efda42c869cc801f6bb5020258411d152cc1edf2e1a7c4707 = $this->env->getExtension("native_profiler");
        $__internal_a439c2c8cf465c2efda42c869cc801f6bb5020258411d152cc1edf2e1a7c4707->enter($__internal_a439c2c8cf465c2efda42c869cc801f6bb5020258411d152cc1edf2e1a7c4707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a439c2c8cf465c2efda42c869cc801f6bb5020258411d152cc1edf2e1a7c4707->leave($__internal_a439c2c8cf465c2efda42c869cc801f6bb5020258411d152cc1edf2e1a7c4707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b0f22c91bfe91bdf67c9002c3900f03fd61069abd3ee5519a69af615233efdb = $this->env->getExtension("native_profiler");
        $__internal_6b0f22c91bfe91bdf67c9002c3900f03fd61069abd3ee5519a69af615233efdb->enter($__internal_6b0f22c91bfe91bdf67c9002c3900f03fd61069abd3ee5519a69af615233efdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b0f22c91bfe91bdf67c9002c3900f03fd61069abd3ee5519a69af615233efdb->leave($__internal_6b0f22c91bfe91bdf67c9002c3900f03fd61069abd3ee5519a69af615233efdb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2f6c4f4be49f81e4d8b6080020cb4bdda2739bd9a72e96c780c494e4e7e2ed7e = $this->env->getExtension("native_profiler");
        $__internal_2f6c4f4be49f81e4d8b6080020cb4bdda2739bd9a72e96c780c494e4e7e2ed7e->enter($__internal_2f6c4f4be49f81e4d8b6080020cb4bdda2739bd9a72e96c780c494e4e7e2ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_2f6c4f4be49f81e4d8b6080020cb4bdda2739bd9a72e96c780c494e4e7e2ed7e->leave($__internal_2f6c4f4be49f81e4d8b6080020cb4bdda2739bd9a72e96c780c494e4e7e2ed7e_prof);

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
