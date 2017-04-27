<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_04320a69ad562a4e50499b0d9879ac89759e3e6a7e1034607125f669dca20b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3938f3705179976d0d339cdd63840b34e4479bef9c63a7cc4c6736e3a3fb1590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3938f3705179976d0d339cdd63840b34e4479bef9c63a7cc4c6736e3a3fb1590->enter($__internal_3938f3705179976d0d339cdd63840b34e4479bef9c63a7cc4c6736e3a3fb1590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5f680ea93958156d939c5285591024d2cb52d21249922438c5228ba78e6d5257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f680ea93958156d939c5285591024d2cb52d21249922438c5228ba78e6d5257->enter($__internal_5f680ea93958156d939c5285591024d2cb52d21249922438c5228ba78e6d5257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3938f3705179976d0d339cdd63840b34e4479bef9c63a7cc4c6736e3a3fb1590->leave($__internal_3938f3705179976d0d339cdd63840b34e4479bef9c63a7cc4c6736e3a3fb1590_prof);

        
        $__internal_5f680ea93958156d939c5285591024d2cb52d21249922438c5228ba78e6d5257->leave($__internal_5f680ea93958156d939c5285591024d2cb52d21249922438c5228ba78e6d5257_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b924287ab1795e6511865c4d9459d2be3946a287179918276907d7ba1df4070c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b924287ab1795e6511865c4d9459d2be3946a287179918276907d7ba1df4070c->enter($__internal_b924287ab1795e6511865c4d9459d2be3946a287179918276907d7ba1df4070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac52f179004607b9ba839cb5c75879d65dbedd2a69ca22739db13a714216c693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac52f179004607b9ba839cb5c75879d65dbedd2a69ca22739db13a714216c693->enter($__internal_ac52f179004607b9ba839cb5c75879d65dbedd2a69ca22739db13a714216c693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ac52f179004607b9ba839cb5c75879d65dbedd2a69ca22739db13a714216c693->leave($__internal_ac52f179004607b9ba839cb5c75879d65dbedd2a69ca22739db13a714216c693_prof);

        
        $__internal_b924287ab1795e6511865c4d9459d2be3946a287179918276907d7ba1df4070c->leave($__internal_b924287ab1795e6511865c4d9459d2be3946a287179918276907d7ba1df4070c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04a75dc72b69d5e2b6b6270edbc984061008d5a82c78a25d173bc6445d9dc5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a75dc72b69d5e2b6b6270edbc984061008d5a82c78a25d173bc6445d9dc5ff->enter($__internal_04a75dc72b69d5e2b6b6270edbc984061008d5a82c78a25d173bc6445d9dc5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f4465fc9d6d9cc95563161fdc8cfa466673a0d0f26a625ea5cc349ea4eea050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4465fc9d6d9cc95563161fdc8cfa466673a0d0f26a625ea5cc349ea4eea050->enter($__internal_0f4465fc9d6d9cc95563161fdc8cfa466673a0d0f26a625ea5cc349ea4eea050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0f4465fc9d6d9cc95563161fdc8cfa466673a0d0f26a625ea5cc349ea4eea050->leave($__internal_0f4465fc9d6d9cc95563161fdc8cfa466673a0d0f26a625ea5cc349ea4eea050_prof);

        
        $__internal_04a75dc72b69d5e2b6b6270edbc984061008d5a82c78a25d173bc6445d9dc5ff->leave($__internal_04a75dc72b69d5e2b6b6270edbc984061008d5a82c78a25d173bc6445d9dc5ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fbe07dec7dd59d2d5d27f45708f496bf2b6be1c81205f0677cb12745536341a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe07dec7dd59d2d5d27f45708f496bf2b6be1c81205f0677cb12745536341a3->enter($__internal_fbe07dec7dd59d2d5d27f45708f496bf2b6be1c81205f0677cb12745536341a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c205e6afc37caac19aa17a40e441e3ddeac8b73857d61cfd19c5c2e482e1d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c205e6afc37caac19aa17a40e441e3ddeac8b73857d61cfd19c5c2e482e1d42->enter($__internal_5c205e6afc37caac19aa17a40e441e3ddeac8b73857d61cfd19c5c2e482e1d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5c205e6afc37caac19aa17a40e441e3ddeac8b73857d61cfd19c5c2e482e1d42->leave($__internal_5c205e6afc37caac19aa17a40e441e3ddeac8b73857d61cfd19c5c2e482e1d42_prof);

        
        $__internal_fbe07dec7dd59d2d5d27f45708f496bf2b6be1c81205f0677cb12745536341a3->leave($__internal_fbe07dec7dd59d2d5d27f45708f496bf2b6be1c81205f0677cb12745536341a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
