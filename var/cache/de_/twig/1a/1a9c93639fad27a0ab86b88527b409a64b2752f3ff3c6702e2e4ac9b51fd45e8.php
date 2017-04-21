<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_ed83b8ec9ed298dfbde882afa92dfbdd68831abfd7356460b0f3856e5567fc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_9ed9b70b72b1571627d6c2f14b7103b1d7e276821d66e01fa97804ba437458cc = $this->env->getExtension("native_profiler");
        $__internal_9ed9b70b72b1571627d6c2f14b7103b1d7e276821d66e01fa97804ba437458cc->enter($__internal_9ed9b70b72b1571627d6c2f14b7103b1d7e276821d66e01fa97804ba437458cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed9b70b72b1571627d6c2f14b7103b1d7e276821d66e01fa97804ba437458cc->leave($__internal_9ed9b70b72b1571627d6c2f14b7103b1d7e276821d66e01fa97804ba437458cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_656319daca48f3d239ecd5305b8d94cea9ce552b5f7eecb86f63096bf227facb = $this->env->getExtension("native_profiler");
        $__internal_656319daca48f3d239ecd5305b8d94cea9ce552b5f7eecb86f63096bf227facb->enter($__internal_656319daca48f3d239ecd5305b8d94cea9ce552b5f7eecb86f63096bf227facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_656319daca48f3d239ecd5305b8d94cea9ce552b5f7eecb86f63096bf227facb->leave($__internal_656319daca48f3d239ecd5305b8d94cea9ce552b5f7eecb86f63096bf227facb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_04ea8f49a979802c47f3d8f41aa395ebe5f304c7e34801f6401a3445eba6c8cd = $this->env->getExtension("native_profiler");
        $__internal_04ea8f49a979802c47f3d8f41aa395ebe5f304c7e34801f6401a3445eba6c8cd->enter($__internal_04ea8f49a979802c47f3d8f41aa395ebe5f304c7e34801f6401a3445eba6c8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_04ea8f49a979802c47f3d8f41aa395ebe5f304c7e34801f6401a3445eba6c8cd->leave($__internal_04ea8f49a979802c47f3d8f41aa395ebe5f304c7e34801f6401a3445eba6c8cd_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
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
