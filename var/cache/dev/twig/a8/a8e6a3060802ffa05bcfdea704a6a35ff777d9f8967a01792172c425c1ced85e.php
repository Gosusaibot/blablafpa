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
        $__internal_dfb5a942b88d38e220dda9d305afb415ac82444f0782b6707aa7a8d5413d7a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb5a942b88d38e220dda9d305afb415ac82444f0782b6707aa7a8d5413d7a3d->enter($__internal_dfb5a942b88d38e220dda9d305afb415ac82444f0782b6707aa7a8d5413d7a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_90df7a7923ae13199ef1cdfd811b75fd29e0edbdb67a127e3fe63de283c3df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90df7a7923ae13199ef1cdfd811b75fd29e0edbdb67a127e3fe63de283c3df53->enter($__internal_90df7a7923ae13199ef1cdfd811b75fd29e0edbdb67a127e3fe63de283c3df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dfb5a942b88d38e220dda9d305afb415ac82444f0782b6707aa7a8d5413d7a3d->leave($__internal_dfb5a942b88d38e220dda9d305afb415ac82444f0782b6707aa7a8d5413d7a3d_prof);

        
        $__internal_90df7a7923ae13199ef1cdfd811b75fd29e0edbdb67a127e3fe63de283c3df53->leave($__internal_90df7a7923ae13199ef1cdfd811b75fd29e0edbdb67a127e3fe63de283c3df53_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6ecfe3e1b8a042033a4f6de9bc3f3c14d1d2b3b0b3d3fdb407476ec77a1fc64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecfe3e1b8a042033a4f6de9bc3f3c14d1d2b3b0b3d3fdb407476ec77a1fc64b->enter($__internal_6ecfe3e1b8a042033a4f6de9bc3f3c14d1d2b3b0b3d3fdb407476ec77a1fc64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_243957d69e284cb46ee8634ca8cca199f5e8d30d618c4e3692c5d06cf2462e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243957d69e284cb46ee8634ca8cca199f5e8d30d618c4e3692c5d06cf2462e3f->enter($__internal_243957d69e284cb46ee8634ca8cca199f5e8d30d618c4e3692c5d06cf2462e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_243957d69e284cb46ee8634ca8cca199f5e8d30d618c4e3692c5d06cf2462e3f->leave($__internal_243957d69e284cb46ee8634ca8cca199f5e8d30d618c4e3692c5d06cf2462e3f_prof);

        
        $__internal_6ecfe3e1b8a042033a4f6de9bc3f3c14d1d2b3b0b3d3fdb407476ec77a1fc64b->leave($__internal_6ecfe3e1b8a042033a4f6de9bc3f3c14d1d2b3b0b3d3fdb407476ec77a1fc64b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c128c18bd3de2934a069f17f122c35c30ac0918ddc0a00991deb2815d34dc1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c128c18bd3de2934a069f17f122c35c30ac0918ddc0a00991deb2815d34dc1c5->enter($__internal_c128c18bd3de2934a069f17f122c35c30ac0918ddc0a00991deb2815d34dc1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3480f2f721e516e38cb6e25981054e95084fc26c4ea63439a0f87b01c2db2d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3480f2f721e516e38cb6e25981054e95084fc26c4ea63439a0f87b01c2db2d3a->enter($__internal_3480f2f721e516e38cb6e25981054e95084fc26c4ea63439a0f87b01c2db2d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_3480f2f721e516e38cb6e25981054e95084fc26c4ea63439a0f87b01c2db2d3a->leave($__internal_3480f2f721e516e38cb6e25981054e95084fc26c4ea63439a0f87b01c2db2d3a_prof);

        
        $__internal_c128c18bd3de2934a069f17f122c35c30ac0918ddc0a00991deb2815d34dc1c5->leave($__internal_c128c18bd3de2934a069f17f122c35c30ac0918ddc0a00991deb2815d34dc1c5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_96c9ac075c46ea62eef16b6ff956caf0db261b3fb491d8b3511c00b80d15c362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c9ac075c46ea62eef16b6ff956caf0db261b3fb491d8b3511c00b80d15c362->enter($__internal_96c9ac075c46ea62eef16b6ff956caf0db261b3fb491d8b3511c00b80d15c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d6d6a9c9a1752579ab6c8abfe8a86b9fd63553e63c3c1815a949f60fbc6b2114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d6a9c9a1752579ab6c8abfe8a86b9fd63553e63c3c1815a949f60fbc6b2114->enter($__internal_d6d6a9c9a1752579ab6c8abfe8a86b9fd63553e63c3c1815a949f60fbc6b2114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d6d6a9c9a1752579ab6c8abfe8a86b9fd63553e63c3c1815a949f60fbc6b2114->leave($__internal_d6d6a9c9a1752579ab6c8abfe8a86b9fd63553e63c3c1815a949f60fbc6b2114_prof);

        
        $__internal_96c9ac075c46ea62eef16b6ff956caf0db261b3fb491d8b3511c00b80d15c362->leave($__internal_96c9ac075c46ea62eef16b6ff956caf0db261b3fb491d8b3511c00b80d15c362_prof);

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
