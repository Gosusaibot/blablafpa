<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_612052a8503801ec7d1b01398d1c08cf207365585856668860edb2a38f1c072d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0eaf5ec8f9b6f22270f599346cfb10b9ea852eabd8cdfa63ae280f9f9c9649a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eaf5ec8f9b6f22270f599346cfb10b9ea852eabd8cdfa63ae280f9f9c9649a7->enter($__internal_0eaf5ec8f9b6f22270f599346cfb10b9ea852eabd8cdfa63ae280f9f9c9649a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8e7a640df8289c4d0aec87dcb24fedb4f2551da905309d615f875f1994d5d1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7a640df8289c4d0aec87dcb24fedb4f2551da905309d615f875f1994d5d1e3->enter($__internal_8e7a640df8289c4d0aec87dcb24fedb4f2551da905309d615f875f1994d5d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eaf5ec8f9b6f22270f599346cfb10b9ea852eabd8cdfa63ae280f9f9c9649a7->leave($__internal_0eaf5ec8f9b6f22270f599346cfb10b9ea852eabd8cdfa63ae280f9f9c9649a7_prof);

        
        $__internal_8e7a640df8289c4d0aec87dcb24fedb4f2551da905309d615f875f1994d5d1e3->leave($__internal_8e7a640df8289c4d0aec87dcb24fedb4f2551da905309d615f875f1994d5d1e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68951c403713866cbd40c5e4db108c73e971ccac98515f7d071ffcd757f9ded0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68951c403713866cbd40c5e4db108c73e971ccac98515f7d071ffcd757f9ded0->enter($__internal_68951c403713866cbd40c5e4db108c73e971ccac98515f7d071ffcd757f9ded0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dbac7d73b3cea7e02a28168d057137dead1ea89ca3770c1c4e5092dad68d900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbac7d73b3cea7e02a28168d057137dead1ea89ca3770c1c4e5092dad68d900a->enter($__internal_dbac7d73b3cea7e02a28168d057137dead1ea89ca3770c1c4e5092dad68d900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbac7d73b3cea7e02a28168d057137dead1ea89ca3770c1c4e5092dad68d900a->leave($__internal_dbac7d73b3cea7e02a28168d057137dead1ea89ca3770c1c4e5092dad68d900a_prof);

        
        $__internal_68951c403713866cbd40c5e4db108c73e971ccac98515f7d071ffcd757f9ded0->leave($__internal_68951c403713866cbd40c5e4db108c73e971ccac98515f7d071ffcd757f9ded0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97efacbb330f34fc8b6007914f84cdf680f3f82478fe0087cf3c0072b952c940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97efacbb330f34fc8b6007914f84cdf680f3f82478fe0087cf3c0072b952c940->enter($__internal_97efacbb330f34fc8b6007914f84cdf680f3f82478fe0087cf3c0072b952c940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cd7ad3869777c3725fbe5b29e289a8f4c09e9e673dd4196911a9cd8d0ad02d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd7ad3869777c3725fbe5b29e289a8f4c09e9e673dd4196911a9cd8d0ad02d2->enter($__internal_7cd7ad3869777c3725fbe5b29e289a8f4c09e9e673dd4196911a9cd8d0ad02d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cd7ad3869777c3725fbe5b29e289a8f4c09e9e673dd4196911a9cd8d0ad02d2->leave($__internal_7cd7ad3869777c3725fbe5b29e289a8f4c09e9e673dd4196911a9cd8d0ad02d2_prof);

        
        $__internal_97efacbb330f34fc8b6007914f84cdf680f3f82478fe0087cf3c0072b952c940->leave($__internal_97efacbb330f34fc8b6007914f84cdf680f3f82478fe0087cf3c0072b952c940_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fa00e5cf540cd3eba0947163439b654162d447af0d101024281d0d9804733cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa00e5cf540cd3eba0947163439b654162d447af0d101024281d0d9804733cf->enter($__internal_9fa00e5cf540cd3eba0947163439b654162d447af0d101024281d0d9804733cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_054f0398caebfe98b2ab5c7d939ae6107ce68685e46de20c98203e5c02ce6a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054f0398caebfe98b2ab5c7d939ae6107ce68685e46de20c98203e5c02ce6a26->enter($__internal_054f0398caebfe98b2ab5c7d939ae6107ce68685e46de20c98203e5c02ce6a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_054f0398caebfe98b2ab5c7d939ae6107ce68685e46de20c98203e5c02ce6a26->leave($__internal_054f0398caebfe98b2ab5c7d939ae6107ce68685e46de20c98203e5c02ce6a26_prof);

        
        $__internal_9fa00e5cf540cd3eba0947163439b654162d447af0d101024281d0d9804733cf->leave($__internal_9fa00e5cf540cd3eba0947163439b654162d447af0d101024281d0d9804733cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
