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
        $__internal_9e61cb15330c700904d722afcacb4b430aae5805010a0bc3423958e0760e0720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61cb15330c700904d722afcacb4b430aae5805010a0bc3423958e0760e0720->enter($__internal_9e61cb15330c700904d722afcacb4b430aae5805010a0bc3423958e0760e0720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5a85bd8cd274af6c88dba179f30698658263bdf8456653892b77d45d96085e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a85bd8cd274af6c88dba179f30698658263bdf8456653892b77d45d96085e12->enter($__internal_5a85bd8cd274af6c88dba179f30698658263bdf8456653892b77d45d96085e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e61cb15330c700904d722afcacb4b430aae5805010a0bc3423958e0760e0720->leave($__internal_9e61cb15330c700904d722afcacb4b430aae5805010a0bc3423958e0760e0720_prof);

        
        $__internal_5a85bd8cd274af6c88dba179f30698658263bdf8456653892b77d45d96085e12->leave($__internal_5a85bd8cd274af6c88dba179f30698658263bdf8456653892b77d45d96085e12_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_327e553377c2469611612eaa40fee12b928a36dd370014a32a4041fbb1bc7a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327e553377c2469611612eaa40fee12b928a36dd370014a32a4041fbb1bc7a14->enter($__internal_327e553377c2469611612eaa40fee12b928a36dd370014a32a4041fbb1bc7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_dabd20171d456aa38e9cf0646313a91041c6304d45ec754f59518ffd15a4baaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabd20171d456aa38e9cf0646313a91041c6304d45ec754f59518ffd15a4baaf->enter($__internal_dabd20171d456aa38e9cf0646313a91041c6304d45ec754f59518ffd15a4baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_dabd20171d456aa38e9cf0646313a91041c6304d45ec754f59518ffd15a4baaf->leave($__internal_dabd20171d456aa38e9cf0646313a91041c6304d45ec754f59518ffd15a4baaf_prof);

        
        $__internal_327e553377c2469611612eaa40fee12b928a36dd370014a32a4041fbb1bc7a14->leave($__internal_327e553377c2469611612eaa40fee12b928a36dd370014a32a4041fbb1bc7a14_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_73722783e5ae112ff61f7605418c69077344a86f42e0264b371d12d48b4b0ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73722783e5ae112ff61f7605418c69077344a86f42e0264b371d12d48b4b0ca8->enter($__internal_73722783e5ae112ff61f7605418c69077344a86f42e0264b371d12d48b4b0ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_91f90695505334160fc9d60531b3eb8fd46989a688fe5d1e848026a9be48367c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f90695505334160fc9d60531b3eb8fd46989a688fe5d1e848026a9be48367c->enter($__internal_91f90695505334160fc9d60531b3eb8fd46989a688fe5d1e848026a9be48367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_91f90695505334160fc9d60531b3eb8fd46989a688fe5d1e848026a9be48367c->leave($__internal_91f90695505334160fc9d60531b3eb8fd46989a688fe5d1e848026a9be48367c_prof);

        
        $__internal_73722783e5ae112ff61f7605418c69077344a86f42e0264b371d12d48b4b0ca8->leave($__internal_73722783e5ae112ff61f7605418c69077344a86f42e0264b371d12d48b4b0ca8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d8af263991fb3dd3f41781ed2a90757ba4f9fe330b834370b9938ecb8985549e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8af263991fb3dd3f41781ed2a90757ba4f9fe330b834370b9938ecb8985549e->enter($__internal_d8af263991fb3dd3f41781ed2a90757ba4f9fe330b834370b9938ecb8985549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8d7e69f500dfdfd83fd13a6dbaeabbb972e0f53b9df5693040787c468d3a4606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7e69f500dfdfd83fd13a6dbaeabbb972e0f53b9df5693040787c468d3a4606->enter($__internal_8d7e69f500dfdfd83fd13a6dbaeabbb972e0f53b9df5693040787c468d3a4606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d7e69f500dfdfd83fd13a6dbaeabbb972e0f53b9df5693040787c468d3a4606->leave($__internal_8d7e69f500dfdfd83fd13a6dbaeabbb972e0f53b9df5693040787c468d3a4606_prof);

        
        $__internal_d8af263991fb3dd3f41781ed2a90757ba4f9fe330b834370b9938ecb8985549e->leave($__internal_d8af263991fb3dd3f41781ed2a90757ba4f9fe330b834370b9938ecb8985549e_prof);

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
