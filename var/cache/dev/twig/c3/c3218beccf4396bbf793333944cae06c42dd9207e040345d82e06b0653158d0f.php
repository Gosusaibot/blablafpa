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
        $__internal_797249775f1c69525e4fd01adbf1c958de51845c214cb121560e38cef1a2c238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797249775f1c69525e4fd01adbf1c958de51845c214cb121560e38cef1a2c238->enter($__internal_797249775f1c69525e4fd01adbf1c958de51845c214cb121560e38cef1a2c238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_da07bacd46f4597d00769f2fe3797570b97691b4b92512c1143f877b4914bfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da07bacd46f4597d00769f2fe3797570b97691b4b92512c1143f877b4914bfa9->enter($__internal_da07bacd46f4597d00769f2fe3797570b97691b4b92512c1143f877b4914bfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797249775f1c69525e4fd01adbf1c958de51845c214cb121560e38cef1a2c238->leave($__internal_797249775f1c69525e4fd01adbf1c958de51845c214cb121560e38cef1a2c238_prof);

        
        $__internal_da07bacd46f4597d00769f2fe3797570b97691b4b92512c1143f877b4914bfa9->leave($__internal_da07bacd46f4597d00769f2fe3797570b97691b4b92512c1143f877b4914bfa9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0edfff01b3440be4e934377519e721c5852d48b707f7e4d065aad4364ad661d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edfff01b3440be4e934377519e721c5852d48b707f7e4d065aad4364ad661d8->enter($__internal_0edfff01b3440be4e934377519e721c5852d48b707f7e4d065aad4364ad661d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_24886a7d9ab77ed25e9f3c7ff297a14c84987f26d7034f63f5097c362649088a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24886a7d9ab77ed25e9f3c7ff297a14c84987f26d7034f63f5097c362649088a->enter($__internal_24886a7d9ab77ed25e9f3c7ff297a14c84987f26d7034f63f5097c362649088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_24886a7d9ab77ed25e9f3c7ff297a14c84987f26d7034f63f5097c362649088a->leave($__internal_24886a7d9ab77ed25e9f3c7ff297a14c84987f26d7034f63f5097c362649088a_prof);

        
        $__internal_0edfff01b3440be4e934377519e721c5852d48b707f7e4d065aad4364ad661d8->leave($__internal_0edfff01b3440be4e934377519e721c5852d48b707f7e4d065aad4364ad661d8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93a931013e3405b30e6b450ad8708c30dd06c36f01cecf710dd0e158fe7cea3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a931013e3405b30e6b450ad8708c30dd06c36f01cecf710dd0e158fe7cea3c->enter($__internal_93a931013e3405b30e6b450ad8708c30dd06c36f01cecf710dd0e158fe7cea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e42dc1e2dbd08138969cd2558eb9a11b7483d0f1cfefdfabace62bdf96f3dc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42dc1e2dbd08138969cd2558eb9a11b7483d0f1cfefdfabace62bdf96f3dc30->enter($__internal_e42dc1e2dbd08138969cd2558eb9a11b7483d0f1cfefdfabace62bdf96f3dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e42dc1e2dbd08138969cd2558eb9a11b7483d0f1cfefdfabace62bdf96f3dc30->leave($__internal_e42dc1e2dbd08138969cd2558eb9a11b7483d0f1cfefdfabace62bdf96f3dc30_prof);

        
        $__internal_93a931013e3405b30e6b450ad8708c30dd06c36f01cecf710dd0e158fe7cea3c->leave($__internal_93a931013e3405b30e6b450ad8708c30dd06c36f01cecf710dd0e158fe7cea3c_prof);

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
