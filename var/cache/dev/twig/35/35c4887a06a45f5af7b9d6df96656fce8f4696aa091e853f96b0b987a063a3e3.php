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
        $__internal_59ffe9e5bedc7912130084191eeeb828ff61debfa7d8dd6bba859c918b85b5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ffe9e5bedc7912130084191eeeb828ff61debfa7d8dd6bba859c918b85b5a9->enter($__internal_59ffe9e5bedc7912130084191eeeb828ff61debfa7d8dd6bba859c918b85b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d08d4efb45cba55bb3587b14c6ff9a2e7532b765a254bdd2103add5dd0a472b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08d4efb45cba55bb3587b14c6ff9a2e7532b765a254bdd2103add5dd0a472b7->enter($__internal_d08d4efb45cba55bb3587b14c6ff9a2e7532b765a254bdd2103add5dd0a472b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ffe9e5bedc7912130084191eeeb828ff61debfa7d8dd6bba859c918b85b5a9->leave($__internal_59ffe9e5bedc7912130084191eeeb828ff61debfa7d8dd6bba859c918b85b5a9_prof);

        
        $__internal_d08d4efb45cba55bb3587b14c6ff9a2e7532b765a254bdd2103add5dd0a472b7->leave($__internal_d08d4efb45cba55bb3587b14c6ff9a2e7532b765a254bdd2103add5dd0a472b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4101ed7aa8de775052049a7af09f318ff593a60261d50bf6665d0b19fb7cea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4101ed7aa8de775052049a7af09f318ff593a60261d50bf6665d0b19fb7cea0->enter($__internal_c4101ed7aa8de775052049a7af09f318ff593a60261d50bf6665d0b19fb7cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c875e684e7065976ff64be2c046b7b6b1bfb99af8aae1d13a380d7c6510734cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c875e684e7065976ff64be2c046b7b6b1bfb99af8aae1d13a380d7c6510734cf->enter($__internal_c875e684e7065976ff64be2c046b7b6b1bfb99af8aae1d13a380d7c6510734cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c875e684e7065976ff64be2c046b7b6b1bfb99af8aae1d13a380d7c6510734cf->leave($__internal_c875e684e7065976ff64be2c046b7b6b1bfb99af8aae1d13a380d7c6510734cf_prof);

        
        $__internal_c4101ed7aa8de775052049a7af09f318ff593a60261d50bf6665d0b19fb7cea0->leave($__internal_c4101ed7aa8de775052049a7af09f318ff593a60261d50bf6665d0b19fb7cea0_prof);

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
