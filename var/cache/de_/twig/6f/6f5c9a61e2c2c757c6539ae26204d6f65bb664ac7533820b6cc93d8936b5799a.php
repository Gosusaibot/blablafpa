<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_8a96ce21d2198e8880cc7880e9293815ffeb783f1eed3a739ff5b34c03d619c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/delete.html.twig", 3);
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
        $__internal_f092cf72f2aba938b0b65e09b16afe6c740c5d4efe5ac2b9e5af9be21e099ae9 = $this->env->getExtension("native_profiler");
        $__internal_f092cf72f2aba938b0b65e09b16afe6c740c5d4efe5ac2b9e5af9be21e099ae9->enter($__internal_f092cf72f2aba938b0b65e09b16afe6c740c5d4efe5ac2b9e5af9be21e099ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f092cf72f2aba938b0b65e09b16afe6c740c5d4efe5ac2b9e5af9be21e099ae9->leave($__internal_f092cf72f2aba938b0b65e09b16afe6c740c5d4efe5ac2b9e5af9be21e099ae9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ef6c37d42fbda7850d5cd9eb53a1196f830508ed582285f0854b7c6a3c34f3 = $this->env->getExtension("native_profiler");
        $__internal_39ef6c37d42fbda7850d5cd9eb53a1196f830508ed582285f0854b7c6a3c34f3->enter($__internal_39ef6c37d42fbda7850d5cd9eb53a1196f830508ed582285f0854b7c6a3c34f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39ef6c37d42fbda7850d5cd9eb53a1196f830508ed582285f0854b7c6a3c34f3->leave($__internal_39ef6c37d42fbda7850d5cd9eb53a1196f830508ed582285f0854b7c6a3c34f3_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4863660334e14aaa0d546d73438df82d5c99e01faff8456f33f2fe85ba27e4f5 = $this->env->getExtension("native_profiler");
        $__internal_4863660334e14aaa0d546d73438df82d5c99e01faff8456f33f2fe85ba27e4f5->enter($__internal_4863660334e14aaa0d546d73438df82d5c99e01faff8456f33f2fe85ba27e4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_4863660334e14aaa0d546d73438df82d5c99e01faff8456f33f2fe85ba27e4f5->leave($__internal_4863660334e14aaa0d546d73438df82d5c99e01faff8456f33f2fe85ba27e4f5_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   <p>*/
/*     Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('oc_platform_delete', {'id': advert.id}) }}" method="post">*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
