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
        $__internal_2d7cadf6e86f07f000dd0e9e7cb0873924c1e79f71de4ffbe3fd2977585c1284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7cadf6e86f07f000dd0e9e7cb0873924c1e79f71de4ffbe3fd2977585c1284->enter($__internal_2d7cadf6e86f07f000dd0e9e7cb0873924c1e79f71de4ffbe3fd2977585c1284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d1ab93e70218488d8043d93d49bb9678850d74188a0b02ccbd423c5aefb357e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ab93e70218488d8043d93d49bb9678850d74188a0b02ccbd423c5aefb357e1->enter($__internal_d1ab93e70218488d8043d93d49bb9678850d74188a0b02ccbd423c5aefb357e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7cadf6e86f07f000dd0e9e7cb0873924c1e79f71de4ffbe3fd2977585c1284->leave($__internal_2d7cadf6e86f07f000dd0e9e7cb0873924c1e79f71de4ffbe3fd2977585c1284_prof);

        
        $__internal_d1ab93e70218488d8043d93d49bb9678850d74188a0b02ccbd423c5aefb357e1->leave($__internal_d1ab93e70218488d8043d93d49bb9678850d74188a0b02ccbd423c5aefb357e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3916bee3f2a8db9654dfa9a8c0daef33957e4e60763b6b59b82697dcfce34f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3916bee3f2a8db9654dfa9a8c0daef33957e4e60763b6b59b82697dcfce34f54->enter($__internal_3916bee3f2a8db9654dfa9a8c0daef33957e4e60763b6b59b82697dcfce34f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59a263fe0d95a1a67e9fb5c15d69e825e2900bf274d809ca3286933aa353c430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a263fe0d95a1a67e9fb5c15d69e825e2900bf274d809ca3286933aa353c430->enter($__internal_59a263fe0d95a1a67e9fb5c15d69e825e2900bf274d809ca3286933aa353c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59a263fe0d95a1a67e9fb5c15d69e825e2900bf274d809ca3286933aa353c430->leave($__internal_59a263fe0d95a1a67e9fb5c15d69e825e2900bf274d809ca3286933aa353c430_prof);

        
        $__internal_3916bee3f2a8db9654dfa9a8c0daef33957e4e60763b6b59b82697dcfce34f54->leave($__internal_3916bee3f2a8db9654dfa9a8c0daef33957e4e60763b6b59b82697dcfce34f54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c41f7124877260db4948ef2c34deb67e5bc806dd92397a5783add9e1e2209496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41f7124877260db4948ef2c34deb67e5bc806dd92397a5783add9e1e2209496->enter($__internal_c41f7124877260db4948ef2c34deb67e5bc806dd92397a5783add9e1e2209496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69d84e38f7d098072231152fb900ee02cad90002416e38f08514ce64cf9a2b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d84e38f7d098072231152fb900ee02cad90002416e38f08514ce64cf9a2b50->enter($__internal_69d84e38f7d098072231152fb900ee02cad90002416e38f08514ce64cf9a2b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69d84e38f7d098072231152fb900ee02cad90002416e38f08514ce64cf9a2b50->leave($__internal_69d84e38f7d098072231152fb900ee02cad90002416e38f08514ce64cf9a2b50_prof);

        
        $__internal_c41f7124877260db4948ef2c34deb67e5bc806dd92397a5783add9e1e2209496->leave($__internal_c41f7124877260db4948ef2c34deb67e5bc806dd92397a5783add9e1e2209496_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4369b1bfe65d5028be5071f180d2c9c77e791fdf5e167d26d989cb2384e136b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4369b1bfe65d5028be5071f180d2c9c77e791fdf5e167d26d989cb2384e136b5->enter($__internal_4369b1bfe65d5028be5071f180d2c9c77e791fdf5e167d26d989cb2384e136b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ed030a9e54514ed15edd333892a4c366a070962cc445b5fb34349d0403533db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed030a9e54514ed15edd333892a4c366a070962cc445b5fb34349d0403533db->enter($__internal_5ed030a9e54514ed15edd333892a4c366a070962cc445b5fb34349d0403533db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5ed030a9e54514ed15edd333892a4c366a070962cc445b5fb34349d0403533db->leave($__internal_5ed030a9e54514ed15edd333892a4c366a070962cc445b5fb34349d0403533db_prof);

        
        $__internal_4369b1bfe65d5028be5071f180d2c9c77e791fdf5e167d26d989cb2384e136b5->leave($__internal_4369b1bfe65d5028be5071f180d2c9c77e791fdf5e167d26d989cb2384e136b5_prof);

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
