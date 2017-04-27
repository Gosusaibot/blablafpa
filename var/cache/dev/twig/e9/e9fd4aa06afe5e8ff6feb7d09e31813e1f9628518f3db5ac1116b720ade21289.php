<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7c12136ee9ccc24e19666b1b1766faf29f734f45e4fcd4775bcb081adcbe65c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2788f0f5b4e0c41761170ffaf195e63702e3dadfeec24066a77043e4e6b734fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2788f0f5b4e0c41761170ffaf195e63702e3dadfeec24066a77043e4e6b734fb->enter($__internal_2788f0f5b4e0c41761170ffaf195e63702e3dadfeec24066a77043e4e6b734fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4544ace751dce6ec0d36236877d50e352b285d747aa60634651e7bdcb16aaf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4544ace751dce6ec0d36236877d50e352b285d747aa60634651e7bdcb16aaf41->enter($__internal_4544ace751dce6ec0d36236877d50e352b285d747aa60634651e7bdcb16aaf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2788f0f5b4e0c41761170ffaf195e63702e3dadfeec24066a77043e4e6b734fb->leave($__internal_2788f0f5b4e0c41761170ffaf195e63702e3dadfeec24066a77043e4e6b734fb_prof);

        
        $__internal_4544ace751dce6ec0d36236877d50e352b285d747aa60634651e7bdcb16aaf41->leave($__internal_4544ace751dce6ec0d36236877d50e352b285d747aa60634651e7bdcb16aaf41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_625040d3271403419b52da747af1b4fa7898580b53bb75be78edce7916e7f2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625040d3271403419b52da747af1b4fa7898580b53bb75be78edce7916e7f2a3->enter($__internal_625040d3271403419b52da747af1b4fa7898580b53bb75be78edce7916e7f2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e590acc402884eb7336a32c0e9bceefed9315caf2cdaf2042cbee76a87491cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e590acc402884eb7336a32c0e9bceefed9315caf2cdaf2042cbee76a87491cc3->enter($__internal_e590acc402884eb7336a32c0e9bceefed9315caf2cdaf2042cbee76a87491cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e590acc402884eb7336a32c0e9bceefed9315caf2cdaf2042cbee76a87491cc3->leave($__internal_e590acc402884eb7336a32c0e9bceefed9315caf2cdaf2042cbee76a87491cc3_prof);

        
        $__internal_625040d3271403419b52da747af1b4fa7898580b53bb75be78edce7916e7f2a3->leave($__internal_625040d3271403419b52da747af1b4fa7898580b53bb75be78edce7916e7f2a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
