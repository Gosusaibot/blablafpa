<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6df43727939037632ebf822faee37f25ca06fbb8a22ea6a61595d2481a1f4972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a48afca6aa4874daaac715e27c9fa133ff5f48889038ee07a47b850fa8b873b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48afca6aa4874daaac715e27c9fa133ff5f48889038ee07a47b850fa8b873b8->enter($__internal_a48afca6aa4874daaac715e27c9fa133ff5f48889038ee07a47b850fa8b873b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6bc3e6115bd83f85f178931811d86f1e9d1330c8bddf9057de38e97ad084bc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc3e6115bd83f85f178931811d86f1e9d1330c8bddf9057de38e97ad084bc3c->enter($__internal_6bc3e6115bd83f85f178931811d86f1e9d1330c8bddf9057de38e97ad084bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48afca6aa4874daaac715e27c9fa133ff5f48889038ee07a47b850fa8b873b8->leave($__internal_a48afca6aa4874daaac715e27c9fa133ff5f48889038ee07a47b850fa8b873b8_prof);

        
        $__internal_6bc3e6115bd83f85f178931811d86f1e9d1330c8bddf9057de38e97ad084bc3c->leave($__internal_6bc3e6115bd83f85f178931811d86f1e9d1330c8bddf9057de38e97ad084bc3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_625b596d872099c4505f6fdc39d6777089ca608f43a6940b06ce4c97c702382c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625b596d872099c4505f6fdc39d6777089ca608f43a6940b06ce4c97c702382c->enter($__internal_625b596d872099c4505f6fdc39d6777089ca608f43a6940b06ce4c97c702382c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1993fd5374ec5adcaf89480030869035fa377c61a1d3bfb0e129a4b10ff5edcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1993fd5374ec5adcaf89480030869035fa377c61a1d3bfb0e129a4b10ff5edcb->enter($__internal_1993fd5374ec5adcaf89480030869035fa377c61a1d3bfb0e129a4b10ff5edcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1993fd5374ec5adcaf89480030869035fa377c61a1d3bfb0e129a4b10ff5edcb->leave($__internal_1993fd5374ec5adcaf89480030869035fa377c61a1d3bfb0e129a4b10ff5edcb_prof);

        
        $__internal_625b596d872099c4505f6fdc39d6777089ca608f43a6940b06ce4c97c702382c->leave($__internal_625b596d872099c4505f6fdc39d6777089ca608f43a6940b06ce4c97c702382c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
