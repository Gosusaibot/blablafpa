<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b21f4148cebdc02a99da375a2aa1448fc8a90519c8c5939021a9274929fb1917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_ae64a3847fe1782d9868509afc6d4e93f5b0196aa7a90d626007748bf7759496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae64a3847fe1782d9868509afc6d4e93f5b0196aa7a90d626007748bf7759496->enter($__internal_ae64a3847fe1782d9868509afc6d4e93f5b0196aa7a90d626007748bf7759496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f4216d63764849772271814d92e79a451bb5c8e639ae1a920e143d3cfd665a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4216d63764849772271814d92e79a451bb5c8e639ae1a920e143d3cfd665a88->enter($__internal_f4216d63764849772271814d92e79a451bb5c8e639ae1a920e143d3cfd665a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae64a3847fe1782d9868509afc6d4e93f5b0196aa7a90d626007748bf7759496->leave($__internal_ae64a3847fe1782d9868509afc6d4e93f5b0196aa7a90d626007748bf7759496_prof);

        
        $__internal_f4216d63764849772271814d92e79a451bb5c8e639ae1a920e143d3cfd665a88->leave($__internal_f4216d63764849772271814d92e79a451bb5c8e639ae1a920e143d3cfd665a88_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24f8d35e61a0bddde8d2cba5b532b9c55357d0267f3c8b4ada54ff2268b8ae2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f8d35e61a0bddde8d2cba5b532b9c55357d0267f3c8b4ada54ff2268b8ae2e->enter($__internal_24f8d35e61a0bddde8d2cba5b532b9c55357d0267f3c8b4ada54ff2268b8ae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0afc8d1eba0c3a54dc21ea9e990a5818dcdce38c3c298582415af0fbd6aada4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0afc8d1eba0c3a54dc21ea9e990a5818dcdce38c3c298582415af0fbd6aada4->enter($__internal_f0afc8d1eba0c3a54dc21ea9e990a5818dcdce38c3c298582415af0fbd6aada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f0afc8d1eba0c3a54dc21ea9e990a5818dcdce38c3c298582415af0fbd6aada4->leave($__internal_f0afc8d1eba0c3a54dc21ea9e990a5818dcdce38c3c298582415af0fbd6aada4_prof);

        
        $__internal_24f8d35e61a0bddde8d2cba5b532b9c55357d0267f3c8b4ada54ff2268b8ae2e->leave($__internal_24f8d35e61a0bddde8d2cba5b532b9c55357d0267f3c8b4ada54ff2268b8ae2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
