<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612052a8503801ec7d1b01398d1c08cf207365585856668860edb2a38f1c072d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_36b319c00459c4b052af3f0d32c4daf5cdf75b48789d10453397d15095ffefb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b319c00459c4b052af3f0d32c4daf5cdf75b48789d10453397d15095ffefb5->enter($__internal_36b319c00459c4b052af3f0d32c4daf5cdf75b48789d10453397d15095ffefb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a02b62c3fcf092e81ff86250465899700b991c2e4584b8208cc02e49a4fd88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a02b62c3fcf092e81ff86250465899700b991c2e4584b8208cc02e49a4fd88b->enter($__internal_5a02b62c3fcf092e81ff86250465899700b991c2e4584b8208cc02e49a4fd88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b319c00459c4b052af3f0d32c4daf5cdf75b48789d10453397d15095ffefb5->leave($__internal_36b319c00459c4b052af3f0d32c4daf5cdf75b48789d10453397d15095ffefb5_prof);

        
        $__internal_5a02b62c3fcf092e81ff86250465899700b991c2e4584b8208cc02e49a4fd88b->leave($__internal_5a02b62c3fcf092e81ff86250465899700b991c2e4584b8208cc02e49a4fd88b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d04daa624f1aa902517a88dfee7dd7d4025b5396c4ce43b8204dec6e1a604a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d04daa624f1aa902517a88dfee7dd7d4025b5396c4ce43b8204dec6e1a604a7->enter($__internal_8d04daa624f1aa902517a88dfee7dd7d4025b5396c4ce43b8204dec6e1a604a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a2c31aaace8bb2f892f85f4f4e0a038763a9afcec84bcedd7d5e41078ab0439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2c31aaace8bb2f892f85f4f4e0a038763a9afcec84bcedd7d5e41078ab0439->enter($__internal_1a2c31aaace8bb2f892f85f4f4e0a038763a9afcec84bcedd7d5e41078ab0439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a2c31aaace8bb2f892f85f4f4e0a038763a9afcec84bcedd7d5e41078ab0439->leave($__internal_1a2c31aaace8bb2f892f85f4f4e0a038763a9afcec84bcedd7d5e41078ab0439_prof);

        
        $__internal_8d04daa624f1aa902517a88dfee7dd7d4025b5396c4ce43b8204dec6e1a604a7->leave($__internal_8d04daa624f1aa902517a88dfee7dd7d4025b5396c4ce43b8204dec6e1a604a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ffe1c2fe4a9cc4902f973dcac768d219f15f0acaa39d30f319cb95dcc05fcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffe1c2fe4a9cc4902f973dcac768d219f15f0acaa39d30f319cb95dcc05fcd4->enter($__internal_1ffe1c2fe4a9cc4902f973dcac768d219f15f0acaa39d30f319cb95dcc05fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9acb1c7a46260c3512034b1b9771a2fd6f2adb366410ccb0b2b410d9d0f1ca48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acb1c7a46260c3512034b1b9771a2fd6f2adb366410ccb0b2b410d9d0f1ca48->enter($__internal_9acb1c7a46260c3512034b1b9771a2fd6f2adb366410ccb0b2b410d9d0f1ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9acb1c7a46260c3512034b1b9771a2fd6f2adb366410ccb0b2b410d9d0f1ca48->leave($__internal_9acb1c7a46260c3512034b1b9771a2fd6f2adb366410ccb0b2b410d9d0f1ca48_prof);

        
        $__internal_1ffe1c2fe4a9cc4902f973dcac768d219f15f0acaa39d30f319cb95dcc05fcd4->leave($__internal_1ffe1c2fe4a9cc4902f973dcac768d219f15f0acaa39d30f319cb95dcc05fcd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5813be29d4028681dd852e42618a388b3c90ca5ca5aad67df7a6fceac7c20b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5813be29d4028681dd852e42618a388b3c90ca5ca5aad67df7a6fceac7c20b6->enter($__internal_c5813be29d4028681dd852e42618a388b3c90ca5ca5aad67df7a6fceac7c20b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99be0df4783f95dbff7069cf927cb8b88f7eca1f7c83e32c092d125d0ab7d800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99be0df4783f95dbff7069cf927cb8b88f7eca1f7c83e32c092d125d0ab7d800->enter($__internal_99be0df4783f95dbff7069cf927cb8b88f7eca1f7c83e32c092d125d0ab7d800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_99be0df4783f95dbff7069cf927cb8b88f7eca1f7c83e32c092d125d0ab7d800->leave($__internal_99be0df4783f95dbff7069cf927cb8b88f7eca1f7c83e32c092d125d0ab7d800_prof);

        
        $__internal_c5813be29d4028681dd852e42618a388b3c90ca5ca5aad67df7a6fceac7c20b6->leave($__internal_c5813be29d4028681dd852e42618a388b3c90ca5ca5aad67df7a6fceac7c20b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
