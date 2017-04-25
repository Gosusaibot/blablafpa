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
        $__internal_89066053c639c1cf1a08718f6360aafebbc0a52c806455f415b8cfe78184a998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89066053c639c1cf1a08718f6360aafebbc0a52c806455f415b8cfe78184a998->enter($__internal_89066053c639c1cf1a08718f6360aafebbc0a52c806455f415b8cfe78184a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2658fda35e63bd4590a3907789ba444bccdbf1d9725ef8f5972fc1050a2a024c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2658fda35e63bd4590a3907789ba444bccdbf1d9725ef8f5972fc1050a2a024c->enter($__internal_2658fda35e63bd4590a3907789ba444bccdbf1d9725ef8f5972fc1050a2a024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_89066053c639c1cf1a08718f6360aafebbc0a52c806455f415b8cfe78184a998->leave($__internal_89066053c639c1cf1a08718f6360aafebbc0a52c806455f415b8cfe78184a998_prof);

        
        $__internal_2658fda35e63bd4590a3907789ba444bccdbf1d9725ef8f5972fc1050a2a024c->leave($__internal_2658fda35e63bd4590a3907789ba444bccdbf1d9725ef8f5972fc1050a2a024c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c8a16eeb1277b0e603e8a5823981aa4cc2ee700d64f2705cd2b15c8fd8861e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a16eeb1277b0e603e8a5823981aa4cc2ee700d64f2705cd2b15c8fd8861e4f->enter($__internal_c8a16eeb1277b0e603e8a5823981aa4cc2ee700d64f2705cd2b15c8fd8861e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0ca0e45bbcb902de0f0577ebc408003bedca5a75c987427b053fc1b759ba460c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca0e45bbcb902de0f0577ebc408003bedca5a75c987427b053fc1b759ba460c->enter($__internal_0ca0e45bbcb902de0f0577ebc408003bedca5a75c987427b053fc1b759ba460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_0ca0e45bbcb902de0f0577ebc408003bedca5a75c987427b053fc1b759ba460c->leave($__internal_0ca0e45bbcb902de0f0577ebc408003bedca5a75c987427b053fc1b759ba460c_prof);

        
        $__internal_c8a16eeb1277b0e603e8a5823981aa4cc2ee700d64f2705cd2b15c8fd8861e4f->leave($__internal_c8a16eeb1277b0e603e8a5823981aa4cc2ee700d64f2705cd2b15c8fd8861e4f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cad5c2d0f2a73db1400f346bba30fcb20caac9ee241b47b6c5db564a9c5f5213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad5c2d0f2a73db1400f346bba30fcb20caac9ee241b47b6c5db564a9c5f5213->enter($__internal_cad5c2d0f2a73db1400f346bba30fcb20caac9ee241b47b6c5db564a9c5f5213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fe6e7ff23756831113d6f97368a858474dd9ed1d4d853c5e5754f4f4b179137d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6e7ff23756831113d6f97368a858474dd9ed1d4d853c5e5754f4f4b179137d->enter($__internal_fe6e7ff23756831113d6f97368a858474dd9ed1d4d853c5e5754f4f4b179137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_fe6e7ff23756831113d6f97368a858474dd9ed1d4d853c5e5754f4f4b179137d->leave($__internal_fe6e7ff23756831113d6f97368a858474dd9ed1d4d853c5e5754f4f4b179137d_prof);

        
        $__internal_cad5c2d0f2a73db1400f346bba30fcb20caac9ee241b47b6c5db564a9c5f5213->leave($__internal_cad5c2d0f2a73db1400f346bba30fcb20caac9ee241b47b6c5db564a9c5f5213_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2046782e2d4ab89b79e9e32b95d45d08b1d8a5673b444c30cdfc5346a51bd4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2046782e2d4ab89b79e9e32b95d45d08b1d8a5673b444c30cdfc5346a51bd4ca->enter($__internal_2046782e2d4ab89b79e9e32b95d45d08b1d8a5673b444c30cdfc5346a51bd4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cb98b7bd6dd4208067122f9c4511560f381b613aa7cd8657cb66d6972baa96ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb98b7bd6dd4208067122f9c4511560f381b613aa7cd8657cb66d6972baa96ea->enter($__internal_cb98b7bd6dd4208067122f9c4511560f381b613aa7cd8657cb66d6972baa96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb98b7bd6dd4208067122f9c4511560f381b613aa7cd8657cb66d6972baa96ea->leave($__internal_cb98b7bd6dd4208067122f9c4511560f381b613aa7cd8657cb66d6972baa96ea_prof);

        
        $__internal_2046782e2d4ab89b79e9e32b95d45d08b1d8a5673b444c30cdfc5346a51bd4ca->leave($__internal_2046782e2d4ab89b79e9e32b95d45d08b1d8a5673b444c30cdfc5346a51bd4ca_prof);

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
