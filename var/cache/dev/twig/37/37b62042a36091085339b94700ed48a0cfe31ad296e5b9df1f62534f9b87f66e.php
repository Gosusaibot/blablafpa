<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b67b02262aa4624d4752bb5fea8d037e083fe4a74a8c59c97e65a122aead5f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_26ef139399e87e96cbbc58d48c05052f19961f1c22de68fe76a9854438ffa647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ef139399e87e96cbbc58d48c05052f19961f1c22de68fe76a9854438ffa647->enter($__internal_26ef139399e87e96cbbc58d48c05052f19961f1c22de68fe76a9854438ffa647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_e8e4fa410f95ff42c615e9fe6ffe3980881749eaf23373ebb843fd319e4dc66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e4fa410f95ff42c615e9fe6ffe3980881749eaf23373ebb843fd319e4dc66f->enter($__internal_e8e4fa410f95ff42c615e9fe6ffe3980881749eaf23373ebb843fd319e4dc66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ef139399e87e96cbbc58d48c05052f19961f1c22de68fe76a9854438ffa647->leave($__internal_26ef139399e87e96cbbc58d48c05052f19961f1c22de68fe76a9854438ffa647_prof);

        
        $__internal_e8e4fa410f95ff42c615e9fe6ffe3980881749eaf23373ebb843fd319e4dc66f->leave($__internal_e8e4fa410f95ff42c615e9fe6ffe3980881749eaf23373ebb843fd319e4dc66f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35efe4b5733b5caa77344a03036e597f5ffbfd387966dc7bcf9eaea5124dd07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35efe4b5733b5caa77344a03036e597f5ffbfd387966dc7bcf9eaea5124dd07f->enter($__internal_35efe4b5733b5caa77344a03036e597f5ffbfd387966dc7bcf9eaea5124dd07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec0104059e8c57dbb13dca97308556a1ea09f122fb90561d10ea5997778bd724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0104059e8c57dbb13dca97308556a1ea09f122fb90561d10ea5997778bd724->enter($__internal_ec0104059e8c57dbb13dca97308556a1ea09f122fb90561d10ea5997778bd724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ec0104059e8c57dbb13dca97308556a1ea09f122fb90561d10ea5997778bd724->leave($__internal_ec0104059e8c57dbb13dca97308556a1ea09f122fb90561d10ea5997778bd724_prof);

        
        $__internal_35efe4b5733b5caa77344a03036e597f5ffbfd387966dc7bcf9eaea5124dd07f->leave($__internal_35efe4b5733b5caa77344a03036e597f5ffbfd387966dc7bcf9eaea5124dd07f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
