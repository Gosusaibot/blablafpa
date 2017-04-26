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
        $__internal_4ba00e986d7d8e1d7627eaf7f5426c5998a2f02da30b01f546da097628d07930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba00e986d7d8e1d7627eaf7f5426c5998a2f02da30b01f546da097628d07930->enter($__internal_4ba00e986d7d8e1d7627eaf7f5426c5998a2f02da30b01f546da097628d07930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_82e2fc20a6246071b72a6be05840981240430579f9bcc0b885fbd5b659820a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e2fc20a6246071b72a6be05840981240430579f9bcc0b885fbd5b659820a34->enter($__internal_82e2fc20a6246071b72a6be05840981240430579f9bcc0b885fbd5b659820a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba00e986d7d8e1d7627eaf7f5426c5998a2f02da30b01f546da097628d07930->leave($__internal_4ba00e986d7d8e1d7627eaf7f5426c5998a2f02da30b01f546da097628d07930_prof);

        
        $__internal_82e2fc20a6246071b72a6be05840981240430579f9bcc0b885fbd5b659820a34->leave($__internal_82e2fc20a6246071b72a6be05840981240430579f9bcc0b885fbd5b659820a34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d1a9c335e5f6cdbd0d7ce95f7fe4105d4167a12f4d9f8d5830fd39e4ab27ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d1a9c335e5f6cdbd0d7ce95f7fe4105d4167a12f4d9f8d5830fd39e4ab27ed->enter($__internal_63d1a9c335e5f6cdbd0d7ce95f7fe4105d4167a12f4d9f8d5830fd39e4ab27ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_162c8385a31d4e7dc9b07c36212901c141e6f063919ac3a2e3eb9e29b304399f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162c8385a31d4e7dc9b07c36212901c141e6f063919ac3a2e3eb9e29b304399f->enter($__internal_162c8385a31d4e7dc9b07c36212901c141e6f063919ac3a2e3eb9e29b304399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_162c8385a31d4e7dc9b07c36212901c141e6f063919ac3a2e3eb9e29b304399f->leave($__internal_162c8385a31d4e7dc9b07c36212901c141e6f063919ac3a2e3eb9e29b304399f_prof);

        
        $__internal_63d1a9c335e5f6cdbd0d7ce95f7fe4105d4167a12f4d9f8d5830fd39e4ab27ed->leave($__internal_63d1a9c335e5f6cdbd0d7ce95f7fe4105d4167a12f4d9f8d5830fd39e4ab27ed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_415f3c4b9db75110bede4b23fe0bdf3348af934a30ca5d4904bc15941dc53e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415f3c4b9db75110bede4b23fe0bdf3348af934a30ca5d4904bc15941dc53e45->enter($__internal_415f3c4b9db75110bede4b23fe0bdf3348af934a30ca5d4904bc15941dc53e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a0b04974483ed0a973f3ed4cb4687759333828a5171df41e15525e74f36cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0b04974483ed0a973f3ed4cb4687759333828a5171df41e15525e74f36cac0->enter($__internal_9a0b04974483ed0a973f3ed4cb4687759333828a5171df41e15525e74f36cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a0b04974483ed0a973f3ed4cb4687759333828a5171df41e15525e74f36cac0->leave($__internal_9a0b04974483ed0a973f3ed4cb4687759333828a5171df41e15525e74f36cac0_prof);

        
        $__internal_415f3c4b9db75110bede4b23fe0bdf3348af934a30ca5d4904bc15941dc53e45->leave($__internal_415f3c4b9db75110bede4b23fe0bdf3348af934a30ca5d4904bc15941dc53e45_prof);

    }

    // line 16
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3b6f0fbda62f012b0f46ba2ceea804bb56c6b340a4c7c10c88bcdffea949ed82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6f0fbda62f012b0f46ba2ceea804bb56c6b340a4c7c10c88bcdffea949ed82->enter($__internal_3b6f0fbda62f012b0f46ba2ceea804bb56c6b340a4c7c10c88bcdffea949ed82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_39c513e0eb57859685c73d5b44be4235040234ccc285e899765362ef98e8c80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c513e0eb57859685c73d5b44be4235040234ccc285e899765362ef98e8c80c->enter($__internal_39c513e0eb57859685c73d5b44be4235040234ccc285e899765362ef98e8c80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_39c513e0eb57859685c73d5b44be4235040234ccc285e899765362ef98e8c80c->leave($__internal_39c513e0eb57859685c73d5b44be4235040234ccc285e899765362ef98e8c80c_prof);

        
        $__internal_3b6f0fbda62f012b0f46ba2ceea804bb56c6b340a4c7c10c88bcdffea949ed82->leave($__internal_3b6f0fbda62f012b0f46ba2ceea804bb56c6b340a4c7c10c88bcdffea949ed82_prof);

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
