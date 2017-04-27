<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e635fb53647bf5592f76384e13e129f9e8fa68babf17253196b391e8cfaa44f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e773af0b36d12f498547e3f60e9418dd688fd3a4b23edcd398cf597759314ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e773af0b36d12f498547e3f60e9418dd688fd3a4b23edcd398cf597759314ac2->enter($__internal_e773af0b36d12f498547e3f60e9418dd688fd3a4b23edcd398cf597759314ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_403817f36b04cd5c37092ef698044d7c9e7613a67febfe3fb7a0257c91aa59d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403817f36b04cd5c37092ef698044d7c9e7613a67febfe3fb7a0257c91aa59d2->enter($__internal_403817f36b04cd5c37092ef698044d7c9e7613a67febfe3fb7a0257c91aa59d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e773af0b36d12f498547e3f60e9418dd688fd3a4b23edcd398cf597759314ac2->leave($__internal_e773af0b36d12f498547e3f60e9418dd688fd3a4b23edcd398cf597759314ac2_prof);

        
        $__internal_403817f36b04cd5c37092ef698044d7c9e7613a67febfe3fb7a0257c91aa59d2->leave($__internal_403817f36b04cd5c37092ef698044d7c9e7613a67febfe3fb7a0257c91aa59d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7550ddbb58ae45745bb1b3a3553c391ce65adafc94232bd8682364fff6fac9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7550ddbb58ae45745bb1b3a3553c391ce65adafc94232bd8682364fff6fac9a4->enter($__internal_7550ddbb58ae45745bb1b3a3553c391ce65adafc94232bd8682364fff6fac9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cec6a5af8afbc1d5b1dac7ed3316a72a1ae62d4d3f362bece348c83e1e211981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec6a5af8afbc1d5b1dac7ed3316a72a1ae62d4d3f362bece348c83e1e211981->enter($__internal_cec6a5af8afbc1d5b1dac7ed3316a72a1ae62d4d3f362bece348c83e1e211981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cec6a5af8afbc1d5b1dac7ed3316a72a1ae62d4d3f362bece348c83e1e211981->leave($__internal_cec6a5af8afbc1d5b1dac7ed3316a72a1ae62d4d3f362bece348c83e1e211981_prof);

        
        $__internal_7550ddbb58ae45745bb1b3a3553c391ce65adafc94232bd8682364fff6fac9a4->leave($__internal_7550ddbb58ae45745bb1b3a3553c391ce65adafc94232bd8682364fff6fac9a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5c87623d945e999355cd2857a2e7c7fcac62bf3d9b8da38ead76ede173913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5c87623d945e999355cd2857a2e7c7fcac62bf3d9b8da38ead76ede173913c->enter($__internal_3d5c87623d945e999355cd2857a2e7c7fcac62bf3d9b8da38ead76ede173913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32a19e8841ab26af043403677f9a807a9894584914245ef56c4c10c88ac85230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a19e8841ab26af043403677f9a807a9894584914245ef56c4c10c88ac85230->enter($__internal_32a19e8841ab26af043403677f9a807a9894584914245ef56c4c10c88ac85230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_32a19e8841ab26af043403677f9a807a9894584914245ef56c4c10c88ac85230->leave($__internal_32a19e8841ab26af043403677f9a807a9894584914245ef56c4c10c88ac85230_prof);

        
        $__internal_3d5c87623d945e999355cd2857a2e7c7fcac62bf3d9b8da38ead76ede173913c->leave($__internal_3d5c87623d945e999355cd2857a2e7c7fcac62bf3d9b8da38ead76ede173913c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
