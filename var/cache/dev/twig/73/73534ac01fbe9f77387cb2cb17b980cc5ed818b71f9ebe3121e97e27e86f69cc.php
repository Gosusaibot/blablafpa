<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_7a7658ac82c0f72ecfe462a8488c1320f59e5295c0e869b1cdcaa1504ae9793f extends Twig_Template
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
        $__internal_772d441dc16e878c1a301628ef69a103697eca310eb5e02cc449e55075005cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772d441dc16e878c1a301628ef69a103697eca310eb5e02cc449e55075005cde->enter($__internal_772d441dc16e878c1a301628ef69a103697eca310eb5e02cc449e55075005cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_cd70b949648534a733f5c14de50295f01004d732ceba3f29ec1286b5813f86f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd70b949648534a733f5c14de50295f01004d732ceba3f29ec1286b5813f86f4->enter($__internal_cd70b949648534a733f5c14de50295f01004d732ceba3f29ec1286b5813f86f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772d441dc16e878c1a301628ef69a103697eca310eb5e02cc449e55075005cde->leave($__internal_772d441dc16e878c1a301628ef69a103697eca310eb5e02cc449e55075005cde_prof);

        
        $__internal_cd70b949648534a733f5c14de50295f01004d732ceba3f29ec1286b5813f86f4->leave($__internal_cd70b949648534a733f5c14de50295f01004d732ceba3f29ec1286b5813f86f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cfca03ec3df6c941918bebecb92b1ac3cad8049a4640b916f07b8b1681ec850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfca03ec3df6c941918bebecb92b1ac3cad8049a4640b916f07b8b1681ec850->enter($__internal_0cfca03ec3df6c941918bebecb92b1ac3cad8049a4640b916f07b8b1681ec850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37228569dc1fc3395ad748dd2f8daf4695c70ec5d8647928406ef75ee5e0bbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37228569dc1fc3395ad748dd2f8daf4695c70ec5d8647928406ef75ee5e0bbe4->enter($__internal_37228569dc1fc3395ad748dd2f8daf4695c70ec5d8647928406ef75ee5e0bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37228569dc1fc3395ad748dd2f8daf4695c70ec5d8647928406ef75ee5e0bbe4->leave($__internal_37228569dc1fc3395ad748dd2f8daf4695c70ec5d8647928406ef75ee5e0bbe4_prof);

        
        $__internal_0cfca03ec3df6c941918bebecb92b1ac3cad8049a4640b916f07b8b1681ec850->leave($__internal_0cfca03ec3df6c941918bebecb92b1ac3cad8049a4640b916f07b8b1681ec850_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_747410e7d9d12fe5e12f4de506044453756c9a016dee62254a7d953af1cacefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747410e7d9d12fe5e12f4de506044453756c9a016dee62254a7d953af1cacefb->enter($__internal_747410e7d9d12fe5e12f4de506044453756c9a016dee62254a7d953af1cacefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcd664a8686fdd4f125de6d2bf8cec13aca8cf2f8ec5bca84faf88363056484e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd664a8686fdd4f125de6d2bf8cec13aca8cf2f8ec5bca84faf88363056484e->enter($__internal_fcd664a8686fdd4f125de6d2bf8cec13aca8cf2f8ec5bca84faf88363056484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h2 class=\"featurette-heading\"><i class=\"fa fa-car fa-1x hred\"></i> Annonces</h2>
  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_fcd664a8686fdd4f125de6d2bf8cec13aca8cf2f8ec5bca84faf88363056484e->leave($__internal_fcd664a8686fdd4f125de6d2bf8cec13aca8cf2f8ec5bca84faf88363056484e_prof);

        
        $__internal_747410e7d9d12fe5e12f4de506044453756c9a016dee62254a7d953af1cacefb->leave($__internal_747410e7d9d12fe5e12f4de506044453756c9a016dee62254a7d953af1cacefb_prof);

    }

    // line 16
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_525202cf239bb510dd08e8259da86a8cac8937185c77f8b13c5319b18d0c6084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525202cf239bb510dd08e8259da86a8cac8937185c77f8b13c5319b18d0c6084->enter($__internal_525202cf239bb510dd08e8259da86a8cac8937185c77f8b13c5319b18d0c6084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_771a96c21b7d42fb9d01e9e3223ecc92fd2a995298c504b07f11e4ea9fef9d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771a96c21b7d42fb9d01e9e3223ecc92fd2a995298c504b07f11e4ea9fef9d1b->enter($__internal_771a96c21b7d42fb9d01e9e3223ecc92fd2a995298c504b07f11e4ea9fef9d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_771a96c21b7d42fb9d01e9e3223ecc92fd2a995298c504b07f11e4ea9fef9d1b->leave($__internal_771a96c21b7d42fb9d01e9e3223ecc92fd2a995298c504b07f11e4ea9fef9d1b_prof);

        
        $__internal_525202cf239bb510dd08e8259da86a8cac8937185c77f8b13c5319b18d0c6084->leave($__internal_525202cf239bb510dd08e8259da86a8cac8937185c77f8b13c5319b18d0c6084_prof);

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
        return array (  104 => 17,  95 => 16,  84 => 18,  81 => 16,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h2 class=\"featurette-heading\"><i class=\"fa fa-car fa-1x hred\"></i> Annonces</h2>
  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
