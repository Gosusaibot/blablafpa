<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bb58597f6578a541fc7ad5f2042c2fa988ce11adab40514951f24ed15690368d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248c8d0872749c38b705be28db2c77c60561ba4499616846fd5e34de1e2b26dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248c8d0872749c38b705be28db2c77c60561ba4499616846fd5e34de1e2b26dc->enter($__internal_248c8d0872749c38b705be28db2c77c60561ba4499616846fd5e34de1e2b26dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7d36c2c327d61b9efc0000a9f7739dcf8a35f9038e9fab5c8b4558bf7dc07294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d36c2c327d61b9efc0000a9f7739dcf8a35f9038e9fab5c8b4558bf7dc07294->enter($__internal_7d36c2c327d61b9efc0000a9f7739dcf8a35f9038e9fab5c8b4558bf7dc07294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_248c8d0872749c38b705be28db2c77c60561ba4499616846fd5e34de1e2b26dc->leave($__internal_248c8d0872749c38b705be28db2c77c60561ba4499616846fd5e34de1e2b26dc_prof);

        
        $__internal_7d36c2c327d61b9efc0000a9f7739dcf8a35f9038e9fab5c8b4558bf7dc07294->leave($__internal_7d36c2c327d61b9efc0000a9f7739dcf8a35f9038e9fab5c8b4558bf7dc07294_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f4353f4b052ed752b5632f5243547b9cbcdf8ce23c983a53af1b471a785c8e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4353f4b052ed752b5632f5243547b9cbcdf8ce23c983a53af1b471a785c8e92->enter($__internal_f4353f4b052ed752b5632f5243547b9cbcdf8ce23c983a53af1b471a785c8e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8327930ff45efe4532858be0f79f5f61d4c47ca6d265eb9a70798cc0e0861b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8327930ff45efe4532858be0f79f5f61d4c47ca6d265eb9a70798cc0e0861b8a->enter($__internal_8327930ff45efe4532858be0f79f5f61d4c47ca6d265eb9a70798cc0e0861b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8327930ff45efe4532858be0f79f5f61d4c47ca6d265eb9a70798cc0e0861b8a->leave($__internal_8327930ff45efe4532858be0f79f5f61d4c47ca6d265eb9a70798cc0e0861b8a_prof);

        
        $__internal_f4353f4b052ed752b5632f5243547b9cbcdf8ce23c983a53af1b471a785c8e92->leave($__internal_f4353f4b052ed752b5632f5243547b9cbcdf8ce23c983a53af1b471a785c8e92_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f4a16c0c542ab5a03e76486cd8192a6b492f723d27cfd0c0668b653630dde7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a16c0c542ab5a03e76486cd8192a6b492f723d27cfd0c0668b653630dde7c9->enter($__internal_f4a16c0c542ab5a03e76486cd8192a6b492f723d27cfd0c0668b653630dde7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dff901b6e10ba0bf5027c86085cd037b5bd352880a6a19b20f602f774f9e68ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff901b6e10ba0bf5027c86085cd037b5bd352880a6a19b20f602f774f9e68ee->enter($__internal_dff901b6e10ba0bf5027c86085cd037b5bd352880a6a19b20f602f774f9e68ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_dff901b6e10ba0bf5027c86085cd037b5bd352880a6a19b20f602f774f9e68ee->leave($__internal_dff901b6e10ba0bf5027c86085cd037b5bd352880a6a19b20f602f774f9e68ee_prof);

        
        $__internal_f4a16c0c542ab5a03e76486cd8192a6b492f723d27cfd0c0668b653630dde7c9->leave($__internal_f4a16c0c542ab5a03e76486cd8192a6b492f723d27cfd0c0668b653630dde7c9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a7786d4862a7baa0bc8980692b5f006c271a1109b0713ba9e43cea59cf80ebf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7786d4862a7baa0bc8980692b5f006c271a1109b0713ba9e43cea59cf80ebf7->enter($__internal_a7786d4862a7baa0bc8980692b5f006c271a1109b0713ba9e43cea59cf80ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_30401b12af8b9716a8d578c7da041792f55f20e6910fd06fc4d9fcfa2375b55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30401b12af8b9716a8d578c7da041792f55f20e6910fd06fc4d9fcfa2375b55f->enter($__internal_30401b12af8b9716a8d578c7da041792f55f20e6910fd06fc4d9fcfa2375b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30401b12af8b9716a8d578c7da041792f55f20e6910fd06fc4d9fcfa2375b55f->leave($__internal_30401b12af8b9716a8d578c7da041792f55f20e6910fd06fc4d9fcfa2375b55f_prof);

        
        $__internal_a7786d4862a7baa0bc8980692b5f006c271a1109b0713ba9e43cea59cf80ebf7->leave($__internal_a7786d4862a7baa0bc8980692b5f006c271a1109b0713ba9e43cea59cf80ebf7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
