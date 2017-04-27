<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0ee9f31f5a09fe8b9197c3bb42400aa6cb58abd65825c82a47564ee68720de0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93643dbbde8e6d2e360490df1d4b22884779064294c16100e8720df2e3572e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93643dbbde8e6d2e360490df1d4b22884779064294c16100e8720df2e3572e1b->enter($__internal_93643dbbde8e6d2e360490df1d4b22884779064294c16100e8720df2e3572e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d95ec9157a2ddce02ea1b8641b0b0918a4fa16513514dd712190252a401ffe56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95ec9157a2ddce02ea1b8641b0b0918a4fa16513514dd712190252a401ffe56->enter($__internal_d95ec9157a2ddce02ea1b8641b0b0918a4fa16513514dd712190252a401ffe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93643dbbde8e6d2e360490df1d4b22884779064294c16100e8720df2e3572e1b->leave($__internal_93643dbbde8e6d2e360490df1d4b22884779064294c16100e8720df2e3572e1b_prof);

        
        $__internal_d95ec9157a2ddce02ea1b8641b0b0918a4fa16513514dd712190252a401ffe56->leave($__internal_d95ec9157a2ddce02ea1b8641b0b0918a4fa16513514dd712190252a401ffe56_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a4d00a3b77ecbfb3250f9a5bb4e80f250968d620a0c4eb11456ddafd9429baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d00a3b77ecbfb3250f9a5bb4e80f250968d620a0c4eb11456ddafd9429baa8->enter($__internal_a4d00a3b77ecbfb3250f9a5bb4e80f250968d620a0c4eb11456ddafd9429baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1d2138b5a331f3fc4a095c08c1cccbf7fda3577061af576ac7953cf94c024fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2138b5a331f3fc4a095c08c1cccbf7fda3577061af576ac7953cf94c024fe4->enter($__internal_1d2138b5a331f3fc4a095c08c1cccbf7fda3577061af576ac7953cf94c024fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1d2138b5a331f3fc4a095c08c1cccbf7fda3577061af576ac7953cf94c024fe4->leave($__internal_1d2138b5a331f3fc4a095c08c1cccbf7fda3577061af576ac7953cf94c024fe4_prof);

        
        $__internal_a4d00a3b77ecbfb3250f9a5bb4e80f250968d620a0c4eb11456ddafd9429baa8->leave($__internal_a4d00a3b77ecbfb3250f9a5bb4e80f250968d620a0c4eb11456ddafd9429baa8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d9807351ec955e601719a6492fd75cbfe3f9bcaa371630343240fcf78ef33b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9807351ec955e601719a6492fd75cbfe3f9bcaa371630343240fcf78ef33b7->enter($__internal_0d9807351ec955e601719a6492fd75cbfe3f9bcaa371630343240fcf78ef33b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b80dff8fe4068c43d5d3bb4a7bc76fcdcb524101a924b652b1c921ba44d8e82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80dff8fe4068c43d5d3bb4a7bc76fcdcb524101a924b652b1c921ba44d8e82c->enter($__internal_b80dff8fe4068c43d5d3bb4a7bc76fcdcb524101a924b652b1c921ba44d8e82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b80dff8fe4068c43d5d3bb4a7bc76fcdcb524101a924b652b1c921ba44d8e82c->leave($__internal_b80dff8fe4068c43d5d3bb4a7bc76fcdcb524101a924b652b1c921ba44d8e82c_prof);

        
        $__internal_0d9807351ec955e601719a6492fd75cbfe3f9bcaa371630343240fcf78ef33b7->leave($__internal_0d9807351ec955e601719a6492fd75cbfe3f9bcaa371630343240fcf78ef33b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
