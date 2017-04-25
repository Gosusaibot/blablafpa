<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6a37100ea8baa93fc114bc7ce5cbbca067d566d52b43c8ed0e10a8e89da726c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_7ae29b299f6cec77fcc18dac7e1884d80f329096441bc9f7d94c83868e14057a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae29b299f6cec77fcc18dac7e1884d80f329096441bc9f7d94c83868e14057a->enter($__internal_7ae29b299f6cec77fcc18dac7e1884d80f329096441bc9f7d94c83868e14057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ccaeb79dca347c55153b732d1766291a5baee5d12feaac4e24d4b1302722b35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccaeb79dca347c55153b732d1766291a5baee5d12feaac4e24d4b1302722b35f->enter($__internal_ccaeb79dca347c55153b732d1766291a5baee5d12feaac4e24d4b1302722b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae29b299f6cec77fcc18dac7e1884d80f329096441bc9f7d94c83868e14057a->leave($__internal_7ae29b299f6cec77fcc18dac7e1884d80f329096441bc9f7d94c83868e14057a_prof);

        
        $__internal_ccaeb79dca347c55153b732d1766291a5baee5d12feaac4e24d4b1302722b35f->leave($__internal_ccaeb79dca347c55153b732d1766291a5baee5d12feaac4e24d4b1302722b35f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1f3b585cfbee05be46297c841f72e7fe5a62ed0bb9e4d1f1204f91f8f6425ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f3b585cfbee05be46297c841f72e7fe5a62ed0bb9e4d1f1204f91f8f6425ef->enter($__internal_c1f3b585cfbee05be46297c841f72e7fe5a62ed0bb9e4d1f1204f91f8f6425ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d2b3a548a14072755c03356461f1197ed9b5284c8325de4e66a6e49c5a3e293e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b3a548a14072755c03356461f1197ed9b5284c8325de4e66a6e49c5a3e293e->enter($__internal_d2b3a548a14072755c03356461f1197ed9b5284c8325de4e66a6e49c5a3e293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d2b3a548a14072755c03356461f1197ed9b5284c8325de4e66a6e49c5a3e293e->leave($__internal_d2b3a548a14072755c03356461f1197ed9b5284c8325de4e66a6e49c5a3e293e_prof);

        
        $__internal_c1f3b585cfbee05be46297c841f72e7fe5a62ed0bb9e4d1f1204f91f8f6425ef->leave($__internal_c1f3b585cfbee05be46297c841f72e7fe5a62ed0bb9e4d1f1204f91f8f6425ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
