<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_aba9ebc6a8097854bd90ad00e37dcd9bb590a80853649edfce32254faec4735c extends Twig_Template
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
        $__internal_7278d0e3b996fe688b44ace59812681a9624ce1d023e400d3507c4f52f3e7397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7278d0e3b996fe688b44ace59812681a9624ce1d023e400d3507c4f52f3e7397->enter($__internal_7278d0e3b996fe688b44ace59812681a9624ce1d023e400d3507c4f52f3e7397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e36a1ad6205d74ce10b2000ab6aed9e98f5bba2ff66a31170a28ab4ecc813020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36a1ad6205d74ce10b2000ab6aed9e98f5bba2ff66a31170a28ab4ecc813020->enter($__internal_e36a1ad6205d74ce10b2000ab6aed9e98f5bba2ff66a31170a28ab4ecc813020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7278d0e3b996fe688b44ace59812681a9624ce1d023e400d3507c4f52f3e7397->leave($__internal_7278d0e3b996fe688b44ace59812681a9624ce1d023e400d3507c4f52f3e7397_prof);

        
        $__internal_e36a1ad6205d74ce10b2000ab6aed9e98f5bba2ff66a31170a28ab4ecc813020->leave($__internal_e36a1ad6205d74ce10b2000ab6aed9e98f5bba2ff66a31170a28ab4ecc813020_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f23b8b6e81518a322acf05b64c3d85be0b4de280e21fa9537e555f02d65391cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23b8b6e81518a322acf05b64c3d85be0b4de280e21fa9537e555f02d65391cf->enter($__internal_f23b8b6e81518a322acf05b64c3d85be0b4de280e21fa9537e555f02d65391cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3e3bbcee2bc778b4c9fa80001f38bcd52537366907a58a930682bc52f6becef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3bbcee2bc778b4c9fa80001f38bcd52537366907a58a930682bc52f6becef0->enter($__internal_3e3bbcee2bc778b4c9fa80001f38bcd52537366907a58a930682bc52f6becef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_3e3bbcee2bc778b4c9fa80001f38bcd52537366907a58a930682bc52f6becef0->leave($__internal_3e3bbcee2bc778b4c9fa80001f38bcd52537366907a58a930682bc52f6becef0_prof);

        
        $__internal_f23b8b6e81518a322acf05b64c3d85be0b4de280e21fa9537e555f02d65391cf->leave($__internal_f23b8b6e81518a322acf05b64c3d85be0b4de280e21fa9537e555f02d65391cf_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f513120a18bb5893ce6b4ad62412390d480eaff1cbc239e322091c158d3012d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f513120a18bb5893ce6b4ad62412390d480eaff1cbc239e322091c158d3012d->enter($__internal_4f513120a18bb5893ce6b4ad62412390d480eaff1cbc239e322091c158d3012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dab652c6ac16753a2159103391949258be69487638530e57283ff15aaeb1d81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab652c6ac16753a2159103391949258be69487638530e57283ff15aaeb1d81b->enter($__internal_dab652c6ac16753a2159103391949258be69487638530e57283ff15aaeb1d81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_dab652c6ac16753a2159103391949258be69487638530e57283ff15aaeb1d81b->leave($__internal_dab652c6ac16753a2159103391949258be69487638530e57283ff15aaeb1d81b_prof);

        
        $__internal_4f513120a18bb5893ce6b4ad62412390d480eaff1cbc239e322091c158d3012d->leave($__internal_4f513120a18bb5893ce6b4ad62412390d480eaff1cbc239e322091c158d3012d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b092fb0cd9bce53109c5541059f680edfac90ecf3b50b679e8819e2886560660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b092fb0cd9bce53109c5541059f680edfac90ecf3b50b679e8819e2886560660->enter($__internal_b092fb0cd9bce53109c5541059f680edfac90ecf3b50b679e8819e2886560660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_fb4c9c07d3577487ce877b697173e18474285649db5e9bfe95f3f71e1db359d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4c9c07d3577487ce877b697173e18474285649db5e9bfe95f3f71e1db359d1->enter($__internal_fb4c9c07d3577487ce877b697173e18474285649db5e9bfe95f3f71e1db359d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fb4c9c07d3577487ce877b697173e18474285649db5e9bfe95f3f71e1db359d1->leave($__internal_fb4c9c07d3577487ce877b697173e18474285649db5e9bfe95f3f71e1db359d1_prof);

        
        $__internal_b092fb0cd9bce53109c5541059f680edfac90ecf3b50b679e8819e2886560660->leave($__internal_b092fb0cd9bce53109c5541059f680edfac90ecf3b50b679e8819e2886560660_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
