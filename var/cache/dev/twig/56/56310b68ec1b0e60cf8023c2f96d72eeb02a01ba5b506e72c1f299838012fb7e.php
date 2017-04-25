<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_04320a69ad562a4e50499b0d9879ac89759e3e6a7e1034607125f669dca20b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_0550a4f4f568094ee70f71866e0b1be636256da143350b994f120918fb2da727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0550a4f4f568094ee70f71866e0b1be636256da143350b994f120918fb2da727->enter($__internal_0550a4f4f568094ee70f71866e0b1be636256da143350b994f120918fb2da727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f23990e447720236f172287a56f64b5a474e759f10565f2863f23facae505922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23990e447720236f172287a56f64b5a474e759f10565f2863f23facae505922->enter($__internal_f23990e447720236f172287a56f64b5a474e759f10565f2863f23facae505922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0550a4f4f568094ee70f71866e0b1be636256da143350b994f120918fb2da727->leave($__internal_0550a4f4f568094ee70f71866e0b1be636256da143350b994f120918fb2da727_prof);

        
        $__internal_f23990e447720236f172287a56f64b5a474e759f10565f2863f23facae505922->leave($__internal_f23990e447720236f172287a56f64b5a474e759f10565f2863f23facae505922_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb9b06a5862a0fe6eab059bb7726379651da9ae3725013f38a38cf82dccade30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9b06a5862a0fe6eab059bb7726379651da9ae3725013f38a38cf82dccade30->enter($__internal_bb9b06a5862a0fe6eab059bb7726379651da9ae3725013f38a38cf82dccade30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82d93de2f950968dae89eca1e1b16cbc3159e337ed9549840a39786990a0fd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d93de2f950968dae89eca1e1b16cbc3159e337ed9549840a39786990a0fd4c->enter($__internal_82d93de2f950968dae89eca1e1b16cbc3159e337ed9549840a39786990a0fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_82d93de2f950968dae89eca1e1b16cbc3159e337ed9549840a39786990a0fd4c->leave($__internal_82d93de2f950968dae89eca1e1b16cbc3159e337ed9549840a39786990a0fd4c_prof);

        
        $__internal_bb9b06a5862a0fe6eab059bb7726379651da9ae3725013f38a38cf82dccade30->leave($__internal_bb9b06a5862a0fe6eab059bb7726379651da9ae3725013f38a38cf82dccade30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d49b704526a5e770d36eafdbd616e490770d5bd62a0256914d4adf7dd1944f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49b704526a5e770d36eafdbd616e490770d5bd62a0256914d4adf7dd1944f53->enter($__internal_d49b704526a5e770d36eafdbd616e490770d5bd62a0256914d4adf7dd1944f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_660c4b5fd710d9e56256993c29a1a8990dbbfb6cc1b77860f944d719d723649e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c4b5fd710d9e56256993c29a1a8990dbbfb6cc1b77860f944d719d723649e->enter($__internal_660c4b5fd710d9e56256993c29a1a8990dbbfb6cc1b77860f944d719d723649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_660c4b5fd710d9e56256993c29a1a8990dbbfb6cc1b77860f944d719d723649e->leave($__internal_660c4b5fd710d9e56256993c29a1a8990dbbfb6cc1b77860f944d719d723649e_prof);

        
        $__internal_d49b704526a5e770d36eafdbd616e490770d5bd62a0256914d4adf7dd1944f53->leave($__internal_d49b704526a5e770d36eafdbd616e490770d5bd62a0256914d4adf7dd1944f53_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6e2e2902d12d2b2b3f661d295ac79779a615a507aa8623d294cf0a0b4f5a9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e2e2902d12d2b2b3f661d295ac79779a615a507aa8623d294cf0a0b4f5a9cc->enter($__internal_f6e2e2902d12d2b2b3f661d295ac79779a615a507aa8623d294cf0a0b4f5a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75379ccac75d33986c1287d5a2881754d82181d2b1811fa301b0bc1226e7cfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75379ccac75d33986c1287d5a2881754d82181d2b1811fa301b0bc1226e7cfef->enter($__internal_75379ccac75d33986c1287d5a2881754d82181d2b1811fa301b0bc1226e7cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_75379ccac75d33986c1287d5a2881754d82181d2b1811fa301b0bc1226e7cfef->leave($__internal_75379ccac75d33986c1287d5a2881754d82181d2b1811fa301b0bc1226e7cfef_prof);

        
        $__internal_f6e2e2902d12d2b2b3f661d295ac79779a615a507aa8623d294cf0a0b4f5a9cc->leave($__internal_f6e2e2902d12d2b2b3f661d295ac79779a615a507aa8623d294cf0a0b4f5a9cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
