<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_c8ed21d6a81afd8c89a67c33cb0be6b982888f8b214813d1a87af1def2d81e96 extends Twig_Template
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
        $__internal_14b7678f94a3e7a06fe3c75da9cfacdd497e9a4833249bb0091c0de8c4690f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b7678f94a3e7a06fe3c75da9cfacdd497e9a4833249bb0091c0de8c4690f14->enter($__internal_14b7678f94a3e7a06fe3c75da9cfacdd497e9a4833249bb0091c0de8c4690f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_49b18fa55f990883a58ebba3742ff3cbc234018ca8729d89d43c03d5cb20dca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b18fa55f990883a58ebba3742ff3cbc234018ca8729d89d43c03d5cb20dca8->enter($__internal_49b18fa55f990883a58ebba3742ff3cbc234018ca8729d89d43c03d5cb20dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b7678f94a3e7a06fe3c75da9cfacdd497e9a4833249bb0091c0de8c4690f14->leave($__internal_14b7678f94a3e7a06fe3c75da9cfacdd497e9a4833249bb0091c0de8c4690f14_prof);

        
        $__internal_49b18fa55f990883a58ebba3742ff3cbc234018ca8729d89d43c03d5cb20dca8->leave($__internal_49b18fa55f990883a58ebba3742ff3cbc234018ca8729d89d43c03d5cb20dca8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7b262ec25427b9fbb56a138530639149f07b8d0d883015299ce0d15bef447e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b262ec25427b9fbb56a138530639149f07b8d0d883015299ce0d15bef447e5->enter($__internal_d7b262ec25427b9fbb56a138530639149f07b8d0d883015299ce0d15bef447e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0df01588fc031556f1a5c702f55a755c92c3510bea19c1a3b3784cdec9f792b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0df01588fc031556f1a5c702f55a755c92c3510bea19c1a3b3784cdec9f792b->enter($__internal_e0df01588fc031556f1a5c702f55a755c92c3510bea19c1a3b3784cdec9f792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0df01588fc031556f1a5c702f55a755c92c3510bea19c1a3b3784cdec9f792b->leave($__internal_e0df01588fc031556f1a5c702f55a755c92c3510bea19c1a3b3784cdec9f792b_prof);

        
        $__internal_d7b262ec25427b9fbb56a138530639149f07b8d0d883015299ce0d15bef447e5->leave($__internal_d7b262ec25427b9fbb56a138530639149f07b8d0d883015299ce0d15bef447e5_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_eb26ccfac20193d7a41fbe2eb5bfd12ee4c8bad494bd983dd3e2846b5334c9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb26ccfac20193d7a41fbe2eb5bfd12ee4c8bad494bd983dd3e2846b5334c9eb->enter($__internal_eb26ccfac20193d7a41fbe2eb5bfd12ee4c8bad494bd983dd3e2846b5334c9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2bfeeb8592938220479590926fffa51d38e10685c90e26495f37a32ca45516ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfeeb8592938220479590926fffa51d38e10685c90e26495f37a32ca45516ac->enter($__internal_2bfeeb8592938220479590926fffa51d38e10685c90e26495f37a32ca45516ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_2bfeeb8592938220479590926fffa51d38e10685c90e26495f37a32ca45516ac->leave($__internal_2bfeeb8592938220479590926fffa51d38e10685c90e26495f37a32ca45516ac_prof);

        
        $__internal_eb26ccfac20193d7a41fbe2eb5bfd12ee4c8bad494bd983dd3e2846b5334c9eb->leave($__internal_eb26ccfac20193d7a41fbe2eb5bfd12ee4c8bad494bd983dd3e2846b5334c9eb_prof);

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
        return array (  99 => 26,  96 => 24,  89 => 19,  84 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}
", "OCPlatformBundle:Advert:delete.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
