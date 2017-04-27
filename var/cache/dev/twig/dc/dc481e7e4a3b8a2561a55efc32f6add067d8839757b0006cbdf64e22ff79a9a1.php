<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a6c8cc78b192bc58284a767df204f484b639afc5ac1c75a8b623785342b41889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_157a2bc566cf8189ef9fa21bbbbf404260a6adbf60f8bb04f3099ff765465de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157a2bc566cf8189ef9fa21bbbbf404260a6adbf60f8bb04f3099ff765465de8->enter($__internal_157a2bc566cf8189ef9fa21bbbbf404260a6adbf60f8bb04f3099ff765465de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_dce79c1301766830a4da3d1bbef01fedb0fc1c270a6850f667bf7fbac10688a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce79c1301766830a4da3d1bbef01fedb0fc1c270a6850f667bf7fbac10688a0->enter($__internal_dce79c1301766830a4da3d1bbef01fedb0fc1c270a6850f667bf7fbac10688a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_157a2bc566cf8189ef9fa21bbbbf404260a6adbf60f8bb04f3099ff765465de8->leave($__internal_157a2bc566cf8189ef9fa21bbbbf404260a6adbf60f8bb04f3099ff765465de8_prof);

        
        $__internal_dce79c1301766830a4da3d1bbef01fedb0fc1c270a6850f667bf7fbac10688a0->leave($__internal_dce79c1301766830a4da3d1bbef01fedb0fc1c270a6850f667bf7fbac10688a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b870d50e264a788d37b8011d54b0b3d1552b054441a6499749d63785d6aad14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b870d50e264a788d37b8011d54b0b3d1552b054441a6499749d63785d6aad14->enter($__internal_5b870d50e264a788d37b8011d54b0b3d1552b054441a6499749d63785d6aad14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a98513ccef8407ef35161ff086c9aeb7ba4372e3a6d01d9d88c96188f0ba9869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98513ccef8407ef35161ff086c9aeb7ba4372e3a6d01d9d88c96188f0ba9869->enter($__internal_a98513ccef8407ef35161ff086c9aeb7ba4372e3a6d01d9d88c96188f0ba9869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a98513ccef8407ef35161ff086c9aeb7ba4372e3a6d01d9d88c96188f0ba9869->leave($__internal_a98513ccef8407ef35161ff086c9aeb7ba4372e3a6d01d9d88c96188f0ba9869_prof);

        
        $__internal_5b870d50e264a788d37b8011d54b0b3d1552b054441a6499749d63785d6aad14->leave($__internal_5b870d50e264a788d37b8011d54b0b3d1552b054441a6499749d63785d6aad14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
