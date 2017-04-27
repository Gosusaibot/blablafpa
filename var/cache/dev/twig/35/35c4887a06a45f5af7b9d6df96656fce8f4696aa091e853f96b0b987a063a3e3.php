<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_eaf5c8950b8c11e09c8e3490e109d2089dc2b9a7d4fbe059b7a5fb50d04ca52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f52a376e8f0d17026f1eb1fd8ea2a15f26db84f8b0cd5c9d4150a2ee8f961974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52a376e8f0d17026f1eb1fd8ea2a15f26db84f8b0cd5c9d4150a2ee8f961974->enter($__internal_f52a376e8f0d17026f1eb1fd8ea2a15f26db84f8b0cd5c9d4150a2ee8f961974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_60b7f4aedf378d78218ac7334bbc2cef32c59a95ef73043e906e2d9fa5a9f4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b7f4aedf378d78218ac7334bbc2cef32c59a95ef73043e906e2d9fa5a9f4f8->enter($__internal_60b7f4aedf378d78218ac7334bbc2cef32c59a95ef73043e906e2d9fa5a9f4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52a376e8f0d17026f1eb1fd8ea2a15f26db84f8b0cd5c9d4150a2ee8f961974->leave($__internal_f52a376e8f0d17026f1eb1fd8ea2a15f26db84f8b0cd5c9d4150a2ee8f961974_prof);

        
        $__internal_60b7f4aedf378d78218ac7334bbc2cef32c59a95ef73043e906e2d9fa5a9f4f8->leave($__internal_60b7f4aedf378d78218ac7334bbc2cef32c59a95ef73043e906e2d9fa5a9f4f8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6f6bf3debfe6004b22451a3a737b3b9a3f9025d3a21af3e1e9236026a43dc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f6bf3debfe6004b22451a3a737b3b9a3f9025d3a21af3e1e9236026a43dc56->enter($__internal_c6f6bf3debfe6004b22451a3a737b3b9a3f9025d3a21af3e1e9236026a43dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7b520ad3de38b63aefc972b50e364c5490d439561de05fa90672d1cb7150bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b520ad3de38b63aefc972b50e364c5490d439561de05fa90672d1cb7150bda->enter($__internal_b7b520ad3de38b63aefc972b50e364c5490d439561de05fa90672d1cb7150bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b7b520ad3de38b63aefc972b50e364c5490d439561de05fa90672d1cb7150bda->leave($__internal_b7b520ad3de38b63aefc972b50e364c5490d439561de05fa90672d1cb7150bda_prof);

        
        $__internal_c6f6bf3debfe6004b22451a3a737b3b9a3f9025d3a21af3e1e9236026a43dc56->leave($__internal_c6f6bf3debfe6004b22451a3a737b3b9a3f9025d3a21af3e1e9236026a43dc56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
