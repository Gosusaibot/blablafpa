<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_f9178fd88e444bd9bf320d7f005a1866c2e0f8e3de7daa9a809d1022cf74a9c8 extends Twig_Template
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
        $__internal_7ac048cdc4be6073e29ffac06e063df89f7bfde540580c766f693da4a7bcd67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac048cdc4be6073e29ffac06e063df89f7bfde540580c766f693da4a7bcd67c->enter($__internal_7ac048cdc4be6073e29ffac06e063df89f7bfde540580c766f693da4a7bcd67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_052246ad18066281c9c336b76aadd4bd4b4a2bd7897f3376648f61776c89f4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052246ad18066281c9c336b76aadd4bd4b4a2bd7897f3376648f61776c89f4e1->enter($__internal_052246ad18066281c9c336b76aadd4bd4b4a2bd7897f3376648f61776c89f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac048cdc4be6073e29ffac06e063df89f7bfde540580c766f693da4a7bcd67c->leave($__internal_7ac048cdc4be6073e29ffac06e063df89f7bfde540580c766f693da4a7bcd67c_prof);

        
        $__internal_052246ad18066281c9c336b76aadd4bd4b4a2bd7897f3376648f61776c89f4e1->leave($__internal_052246ad18066281c9c336b76aadd4bd4b4a2bd7897f3376648f61776c89f4e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d44b921133d2b7662405292d081c8bed2967ad5ed03f24d19a53116f91bfb5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44b921133d2b7662405292d081c8bed2967ad5ed03f24d19a53116f91bfb5eb->enter($__internal_d44b921133d2b7662405292d081c8bed2967ad5ed03f24d19a53116f91bfb5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f78be55f8cb798d4677c91010332e3c6b18296afc3679e4849764d690dc7f7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78be55f8cb798d4677c91010332e3c6b18296afc3679e4849764d690dc7f7c3->enter($__internal_f78be55f8cb798d4677c91010332e3c6b18296afc3679e4849764d690dc7f7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f78be55f8cb798d4677c91010332e3c6b18296afc3679e4849764d690dc7f7c3->leave($__internal_f78be55f8cb798d4677c91010332e3c6b18296afc3679e4849764d690dc7f7c3_prof);

        
        $__internal_d44b921133d2b7662405292d081c8bed2967ad5ed03f24d19a53116f91bfb5eb->leave($__internal_d44b921133d2b7662405292d081c8bed2967ad5ed03f24d19a53116f91bfb5eb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c3247b57ccf7e039e73be08509218e0aa01b39adfe01b6b1826b7970580b95e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3247b57ccf7e039e73be08509218e0aa01b39adfe01b6b1826b7970580b95e4->enter($__internal_c3247b57ccf7e039e73be08509218e0aa01b39adfe01b6b1826b7970580b95e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_32b82dae6c181e19da344b308ba8ecce5add5918f6fbd07fe02d2a0f07cb03a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b82dae6c181e19da344b308ba8ecce5add5918f6fbd07fe02d2a0f07cb03a1->enter($__internal_32b82dae6c181e19da344b308ba8ecce5add5918f6fbd07fe02d2a0f07cb03a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_32b82dae6c181e19da344b308ba8ecce5add5918f6fbd07fe02d2a0f07cb03a1->leave($__internal_32b82dae6c181e19da344b308ba8ecce5add5918f6fbd07fe02d2a0f07cb03a1_prof);

        
        $__internal_c3247b57ccf7e039e73be08509218e0aa01b39adfe01b6b1826b7970580b95e4->leave($__internal_c3247b57ccf7e039e73be08509218e0aa01b39adfe01b6b1826b7970580b95e4_prof);

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
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
