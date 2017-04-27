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
        $__internal_5a103c0f2cdb5dcce69bba65a9c0cfa0ddc64118026ebcf8e09d20c4df1991ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a103c0f2cdb5dcce69bba65a9c0cfa0ddc64118026ebcf8e09d20c4df1991ed->enter($__internal_5a103c0f2cdb5dcce69bba65a9c0cfa0ddc64118026ebcf8e09d20c4df1991ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_fea9392e5a45c6aade994c2dd4b6fb4429cf6446a463c11d4c04271b2462f41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea9392e5a45c6aade994c2dd4b6fb4429cf6446a463c11d4c04271b2462f41d->enter($__internal_fea9392e5a45c6aade994c2dd4b6fb4429cf6446a463c11d4c04271b2462f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a103c0f2cdb5dcce69bba65a9c0cfa0ddc64118026ebcf8e09d20c4df1991ed->leave($__internal_5a103c0f2cdb5dcce69bba65a9c0cfa0ddc64118026ebcf8e09d20c4df1991ed_prof);

        
        $__internal_fea9392e5a45c6aade994c2dd4b6fb4429cf6446a463c11d4c04271b2462f41d->leave($__internal_fea9392e5a45c6aade994c2dd4b6fb4429cf6446a463c11d4c04271b2462f41d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b7e5cec905ed6de38b4d70827d285beb6dfc902268142d7432fcd112d74509c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7e5cec905ed6de38b4d70827d285beb6dfc902268142d7432fcd112d74509c->enter($__internal_3b7e5cec905ed6de38b4d70827d285beb6dfc902268142d7432fcd112d74509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1e04fb5006c7746a5837db0c309426a1296c72bd892ae79e2864f08d6a46fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e04fb5006c7746a5837db0c309426a1296c72bd892ae79e2864f08d6a46fea->enter($__internal_d1e04fb5006c7746a5837db0c309426a1296c72bd892ae79e2864f08d6a46fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d1e04fb5006c7746a5837db0c309426a1296c72bd892ae79e2864f08d6a46fea->leave($__internal_d1e04fb5006c7746a5837db0c309426a1296c72bd892ae79e2864f08d6a46fea_prof);

        
        $__internal_3b7e5cec905ed6de38b4d70827d285beb6dfc902268142d7432fcd112d74509c->leave($__internal_3b7e5cec905ed6de38b4d70827d285beb6dfc902268142d7432fcd112d74509c_prof);

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
