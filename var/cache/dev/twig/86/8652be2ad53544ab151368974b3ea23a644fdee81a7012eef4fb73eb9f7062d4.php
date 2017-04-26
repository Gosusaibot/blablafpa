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
        $__internal_5523f898b28cb8596ae74aeb0f1175e90ff5a2ac389bd56602dbbbff3c0f7168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5523f898b28cb8596ae74aeb0f1175e90ff5a2ac389bd56602dbbbff3c0f7168->enter($__internal_5523f898b28cb8596ae74aeb0f1175e90ff5a2ac389bd56602dbbbff3c0f7168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_92cd83ff701389398cd25653746b923ebfd4f135c012efbed05cc2eee70e085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cd83ff701389398cd25653746b923ebfd4f135c012efbed05cc2eee70e085f->enter($__internal_92cd83ff701389398cd25653746b923ebfd4f135c012efbed05cc2eee70e085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5523f898b28cb8596ae74aeb0f1175e90ff5a2ac389bd56602dbbbff3c0f7168->leave($__internal_5523f898b28cb8596ae74aeb0f1175e90ff5a2ac389bd56602dbbbff3c0f7168_prof);

        
        $__internal_92cd83ff701389398cd25653746b923ebfd4f135c012efbed05cc2eee70e085f->leave($__internal_92cd83ff701389398cd25653746b923ebfd4f135c012efbed05cc2eee70e085f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c77624ec34e96d977eb3c0b8f642e668758c69a6c9a2aecfd8c73593b8e85bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77624ec34e96d977eb3c0b8f642e668758c69a6c9a2aecfd8c73593b8e85bc4->enter($__internal_c77624ec34e96d977eb3c0b8f642e668758c69a6c9a2aecfd8c73593b8e85bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e2dc7501465562a30bc52d38ccc724d39e42d5ed778ac705c99b479c08f2fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2dc7501465562a30bc52d38ccc724d39e42d5ed778ac705c99b479c08f2fdd->enter($__internal_4e2dc7501465562a30bc52d38ccc724d39e42d5ed778ac705c99b479c08f2fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4e2dc7501465562a30bc52d38ccc724d39e42d5ed778ac705c99b479c08f2fdd->leave($__internal_4e2dc7501465562a30bc52d38ccc724d39e42d5ed778ac705c99b479c08f2fdd_prof);

        
        $__internal_c77624ec34e96d977eb3c0b8f642e668758c69a6c9a2aecfd8c73593b8e85bc4->leave($__internal_c77624ec34e96d977eb3c0b8f642e668758c69a6c9a2aecfd8c73593b8e85bc4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_953d93ceb0d217f3058382fd8738638e47f8a2f9e15c237448af7a1f9622b4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953d93ceb0d217f3058382fd8738638e47f8a2f9e15c237448af7a1f9622b4bc->enter($__internal_953d93ceb0d217f3058382fd8738638e47f8a2f9e15c237448af7a1f9622b4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9e7c60fd3930d38506aca6997a83e7a78d5054745ef7f7a38c25190fa75a4df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7c60fd3930d38506aca6997a83e7a78d5054745ef7f7a38c25190fa75a4df1->enter($__internal_9e7c60fd3930d38506aca6997a83e7a78d5054745ef7f7a38c25190fa75a4df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9e7c60fd3930d38506aca6997a83e7a78d5054745ef7f7a38c25190fa75a4df1->leave($__internal_9e7c60fd3930d38506aca6997a83e7a78d5054745ef7f7a38c25190fa75a4df1_prof);

        
        $__internal_953d93ceb0d217f3058382fd8738638e47f8a2f9e15c237448af7a1f9622b4bc->leave($__internal_953d93ceb0d217f3058382fd8738638e47f8a2f9e15c237448af7a1f9622b4bc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1f7a4ac7f13fc76eb3dabbd686ee3e0bc50bc2a6ad9b95a08941767729a9cd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7a4ac7f13fc76eb3dabbd686ee3e0bc50bc2a6ad9b95a08941767729a9cd82->enter($__internal_1f7a4ac7f13fc76eb3dabbd686ee3e0bc50bc2a6ad9b95a08941767729a9cd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_aaff34900595540862eb0c214a29d4c91dcae57cfc2a8bae9d359023fc0ff6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaff34900595540862eb0c214a29d4c91dcae57cfc2a8bae9d359023fc0ff6d9->enter($__internal_aaff34900595540862eb0c214a29d4c91dcae57cfc2a8bae9d359023fc0ff6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aaff34900595540862eb0c214a29d4c91dcae57cfc2a8bae9d359023fc0ff6d9->leave($__internal_aaff34900595540862eb0c214a29d4c91dcae57cfc2a8bae9d359023fc0ff6d9_prof);

        
        $__internal_1f7a4ac7f13fc76eb3dabbd686ee3e0bc50bc2a6ad9b95a08941767729a9cd82->leave($__internal_1f7a4ac7f13fc76eb3dabbd686ee3e0bc50bc2a6ad9b95a08941767729a9cd82_prof);

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
