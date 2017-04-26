<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_66f9ecc2c4c1e71407fa0e9422dc10837ee7f2516bf36afa2fee822428ed6854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d945edde286c98075b8c50174da768c86602937f940594f0051d7e4aa7fd6808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d945edde286c98075b8c50174da768c86602937f940594f0051d7e4aa7fd6808->enter($__internal_d945edde286c98075b8c50174da768c86602937f940594f0051d7e4aa7fd6808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_25f67e0b5f488a16d73e45148f6b5bd6ee5b7d2b7aea9980877b934f831f6111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f67e0b5f488a16d73e45148f6b5bd6ee5b7d2b7aea9980877b934f831f6111->enter($__internal_25f67e0b5f488a16d73e45148f6b5bd6ee5b7d2b7aea9980877b934f831f6111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d945edde286c98075b8c50174da768c86602937f940594f0051d7e4aa7fd6808->leave($__internal_d945edde286c98075b8c50174da768c86602937f940594f0051d7e4aa7fd6808_prof);

        
        $__internal_25f67e0b5f488a16d73e45148f6b5bd6ee5b7d2b7aea9980877b934f831f6111->leave($__internal_25f67e0b5f488a16d73e45148f6b5bd6ee5b7d2b7aea9980877b934f831f6111_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27136b9c3f879d2921c580736f0696df79a8a2277d365af9d51a56751078884c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27136b9c3f879d2921c580736f0696df79a8a2277d365af9d51a56751078884c->enter($__internal_27136b9c3f879d2921c580736f0696df79a8a2277d365af9d51a56751078884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bca7208ee3711c70b205745304347a54d3b68a48a9c164353440ac5a05729d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bca7208ee3711c70b205745304347a54d3b68a48a9c164353440ac5a05729d6->enter($__internal_0bca7208ee3711c70b205745304347a54d3b68a48a9c164353440ac5a05729d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bca7208ee3711c70b205745304347a54d3b68a48a9c164353440ac5a05729d6->leave($__internal_0bca7208ee3711c70b205745304347a54d3b68a48a9c164353440ac5a05729d6_prof);

        
        $__internal_27136b9c3f879d2921c580736f0696df79a8a2277d365af9d51a56751078884c->leave($__internal_27136b9c3f879d2921c580736f0696df79a8a2277d365af9d51a56751078884c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_434ae3c6eb439238cc4bd6940965408289e7abbc9148ed569f2c7b8282601e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434ae3c6eb439238cc4bd6940965408289e7abbc9148ed569f2c7b8282601e7e->enter($__internal_434ae3c6eb439238cc4bd6940965408289e7abbc9148ed569f2c7b8282601e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b68d142f18d4b8c5ccce6ebc9721078515345d40166d7cb75ea3da94bca851d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68d142f18d4b8c5ccce6ebc9721078515345d40166d7cb75ea3da94bca851d6->enter($__internal_b68d142f18d4b8c5ccce6ebc9721078515345d40166d7cb75ea3da94bca851d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b68d142f18d4b8c5ccce6ebc9721078515345d40166d7cb75ea3da94bca851d6->leave($__internal_b68d142f18d4b8c5ccce6ebc9721078515345d40166d7cb75ea3da94bca851d6_prof);

        
        $__internal_434ae3c6eb439238cc4bd6940965408289e7abbc9148ed569f2c7b8282601e7e->leave($__internal_434ae3c6eb439238cc4bd6940965408289e7abbc9148ed569f2c7b8282601e7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
