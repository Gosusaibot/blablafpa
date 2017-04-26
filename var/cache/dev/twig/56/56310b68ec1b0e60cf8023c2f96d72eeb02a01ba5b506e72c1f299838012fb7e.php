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
        $__internal_b9376b5df69f423c371502a726bc695bb8d3b47ad7a04ba6ab8034f300a69053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9376b5df69f423c371502a726bc695bb8d3b47ad7a04ba6ab8034f300a69053->enter($__internal_b9376b5df69f423c371502a726bc695bb8d3b47ad7a04ba6ab8034f300a69053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e50a1825f7abd64d79ae130552ff6dca5e66ef4e44a1bf9d1dacac9ae7345568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50a1825f7abd64d79ae130552ff6dca5e66ef4e44a1bf9d1dacac9ae7345568->enter($__internal_e50a1825f7abd64d79ae130552ff6dca5e66ef4e44a1bf9d1dacac9ae7345568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9376b5df69f423c371502a726bc695bb8d3b47ad7a04ba6ab8034f300a69053->leave($__internal_b9376b5df69f423c371502a726bc695bb8d3b47ad7a04ba6ab8034f300a69053_prof);

        
        $__internal_e50a1825f7abd64d79ae130552ff6dca5e66ef4e44a1bf9d1dacac9ae7345568->leave($__internal_e50a1825f7abd64d79ae130552ff6dca5e66ef4e44a1bf9d1dacac9ae7345568_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bfe54f68e3afcaf60bc31a41e96ce6d18c7f409dd31fc901232f4473cb76fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfe54f68e3afcaf60bc31a41e96ce6d18c7f409dd31fc901232f4473cb76fd1->enter($__internal_0bfe54f68e3afcaf60bc31a41e96ce6d18c7f409dd31fc901232f4473cb76fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_736ffe49aae3d1d07ee8dcc7cc3339ebdee9c90a7728e81e74f2aef7a2255170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736ffe49aae3d1d07ee8dcc7cc3339ebdee9c90a7728e81e74f2aef7a2255170->enter($__internal_736ffe49aae3d1d07ee8dcc7cc3339ebdee9c90a7728e81e74f2aef7a2255170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_736ffe49aae3d1d07ee8dcc7cc3339ebdee9c90a7728e81e74f2aef7a2255170->leave($__internal_736ffe49aae3d1d07ee8dcc7cc3339ebdee9c90a7728e81e74f2aef7a2255170_prof);

        
        $__internal_0bfe54f68e3afcaf60bc31a41e96ce6d18c7f409dd31fc901232f4473cb76fd1->leave($__internal_0bfe54f68e3afcaf60bc31a41e96ce6d18c7f409dd31fc901232f4473cb76fd1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0515f4f3f69dc9e23fdc4b6d94b7a5a3bba4cdd97a8f31e09d04b76721b9280d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0515f4f3f69dc9e23fdc4b6d94b7a5a3bba4cdd97a8f31e09d04b76721b9280d->enter($__internal_0515f4f3f69dc9e23fdc4b6d94b7a5a3bba4cdd97a8f31e09d04b76721b9280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc667de4c7026d61b34e74ea091d77ad42705f69474fdf29fff20e52ab84fb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc667de4c7026d61b34e74ea091d77ad42705f69474fdf29fff20e52ab84fb3c->enter($__internal_dc667de4c7026d61b34e74ea091d77ad42705f69474fdf29fff20e52ab84fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dc667de4c7026d61b34e74ea091d77ad42705f69474fdf29fff20e52ab84fb3c->leave($__internal_dc667de4c7026d61b34e74ea091d77ad42705f69474fdf29fff20e52ab84fb3c_prof);

        
        $__internal_0515f4f3f69dc9e23fdc4b6d94b7a5a3bba4cdd97a8f31e09d04b76721b9280d->leave($__internal_0515f4f3f69dc9e23fdc4b6d94b7a5a3bba4cdd97a8f31e09d04b76721b9280d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8890a67130dc94c29eceba027d59950dca974630d52c7c19ff90a8679f5ed45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8890a67130dc94c29eceba027d59950dca974630d52c7c19ff90a8679f5ed45e->enter($__internal_8890a67130dc94c29eceba027d59950dca974630d52c7c19ff90a8679f5ed45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e619d85763be425f2542d413e718e7559d444d2904478fcfac69acfc7ef0fb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e619d85763be425f2542d413e718e7559d444d2904478fcfac69acfc7ef0fb54->enter($__internal_e619d85763be425f2542d413e718e7559d444d2904478fcfac69acfc7ef0fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e619d85763be425f2542d413e718e7559d444d2904478fcfac69acfc7ef0fb54->leave($__internal_e619d85763be425f2542d413e718e7559d444d2904478fcfac69acfc7ef0fb54_prof);

        
        $__internal_8890a67130dc94c29eceba027d59950dca974630d52c7c19ff90a8679f5ed45e->leave($__internal_8890a67130dc94c29eceba027d59950dca974630d52c7c19ff90a8679f5ed45e_prof);

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
