<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6a37100ea8baa93fc114bc7ce5cbbca067d566d52b43c8ed0e10a8e89da726c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07dff355638dc8501199af512fefbe8b77b532afbd3845227568b2d01a5895fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dff355638dc8501199af512fefbe8b77b532afbd3845227568b2d01a5895fc->enter($__internal_07dff355638dc8501199af512fefbe8b77b532afbd3845227568b2d01a5895fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_dc477fc37dcf0e09eb2ced0802f3845f4b0d9a342f3112af2ab0d1b8680d305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc477fc37dcf0e09eb2ced0802f3845f4b0d9a342f3112af2ab0d1b8680d305d->enter($__internal_dc477fc37dcf0e09eb2ced0802f3845f4b0d9a342f3112af2ab0d1b8680d305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dff355638dc8501199af512fefbe8b77b532afbd3845227568b2d01a5895fc->leave($__internal_07dff355638dc8501199af512fefbe8b77b532afbd3845227568b2d01a5895fc_prof);

        
        $__internal_dc477fc37dcf0e09eb2ced0802f3845f4b0d9a342f3112af2ab0d1b8680d305d->leave($__internal_dc477fc37dcf0e09eb2ced0802f3845f4b0d9a342f3112af2ab0d1b8680d305d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_567d27242abe18eb24cd87ee884d44252001aa76a475b61ffe9d22b773f8fce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567d27242abe18eb24cd87ee884d44252001aa76a475b61ffe9d22b773f8fce3->enter($__internal_567d27242abe18eb24cd87ee884d44252001aa76a475b61ffe9d22b773f8fce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_30706b3d71baa0f723e70b5649625f228fba5f88ec5311db899b68ea7655d547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30706b3d71baa0f723e70b5649625f228fba5f88ec5311db899b68ea7655d547->enter($__internal_30706b3d71baa0f723e70b5649625f228fba5f88ec5311db899b68ea7655d547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_30706b3d71baa0f723e70b5649625f228fba5f88ec5311db899b68ea7655d547->leave($__internal_30706b3d71baa0f723e70b5649625f228fba5f88ec5311db899b68ea7655d547_prof);

        
        $__internal_567d27242abe18eb24cd87ee884d44252001aa76a475b61ffe9d22b773f8fce3->leave($__internal_567d27242abe18eb24cd87ee884d44252001aa76a475b61ffe9d22b773f8fce3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
