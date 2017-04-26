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
        $__internal_0f9b5c9f1a33565c99dd1baeeaf9b5c34f7dee05b5c10b1dc43d3059f495aba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9b5c9f1a33565c99dd1baeeaf9b5c34f7dee05b5c10b1dc43d3059f495aba8->enter($__internal_0f9b5c9f1a33565c99dd1baeeaf9b5c34f7dee05b5c10b1dc43d3059f495aba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4973a0eaaced2c3ff057f49fddda06e900886b93efb2cb338fce6d16148de692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4973a0eaaced2c3ff057f49fddda06e900886b93efb2cb338fce6d16148de692->enter($__internal_4973a0eaaced2c3ff057f49fddda06e900886b93efb2cb338fce6d16148de692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9b5c9f1a33565c99dd1baeeaf9b5c34f7dee05b5c10b1dc43d3059f495aba8->leave($__internal_0f9b5c9f1a33565c99dd1baeeaf9b5c34f7dee05b5c10b1dc43d3059f495aba8_prof);

        
        $__internal_4973a0eaaced2c3ff057f49fddda06e900886b93efb2cb338fce6d16148de692->leave($__internal_4973a0eaaced2c3ff057f49fddda06e900886b93efb2cb338fce6d16148de692_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bf19f1a057e195441d7186843e58a2d0df27da253bf628514e78a18dd5602c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf19f1a057e195441d7186843e58a2d0df27da253bf628514e78a18dd5602c2->enter($__internal_3bf19f1a057e195441d7186843e58a2d0df27da253bf628514e78a18dd5602c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2d3ace99ed0e1273c588b222201511248e38ac166699099b06ad37fb247d5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d3ace99ed0e1273c588b222201511248e38ac166699099b06ad37fb247d5bb->enter($__internal_f2d3ace99ed0e1273c588b222201511248e38ac166699099b06ad37fb247d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f2d3ace99ed0e1273c588b222201511248e38ac166699099b06ad37fb247d5bb->leave($__internal_f2d3ace99ed0e1273c588b222201511248e38ac166699099b06ad37fb247d5bb_prof);

        
        $__internal_3bf19f1a057e195441d7186843e58a2d0df27da253bf628514e78a18dd5602c2->leave($__internal_3bf19f1a057e195441d7186843e58a2d0df27da253bf628514e78a18dd5602c2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2693d81664c937559c99ee08d7ec1b542ec063299e3ca18394740a6bd0f34a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2693d81664c937559c99ee08d7ec1b542ec063299e3ca18394740a6bd0f34a11->enter($__internal_2693d81664c937559c99ee08d7ec1b542ec063299e3ca18394740a6bd0f34a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f69015d3f9938ec97bf86dda8549d64dc7b48281191dc05d134cb4f6ff84de07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69015d3f9938ec97bf86dda8549d64dc7b48281191dc05d134cb4f6ff84de07->enter($__internal_f69015d3f9938ec97bf86dda8549d64dc7b48281191dc05d134cb4f6ff84de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f69015d3f9938ec97bf86dda8549d64dc7b48281191dc05d134cb4f6ff84de07->leave($__internal_f69015d3f9938ec97bf86dda8549d64dc7b48281191dc05d134cb4f6ff84de07_prof);

        
        $__internal_2693d81664c937559c99ee08d7ec1b542ec063299e3ca18394740a6bd0f34a11->leave($__internal_2693d81664c937559c99ee08d7ec1b542ec063299e3ca18394740a6bd0f34a11_prof);

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
