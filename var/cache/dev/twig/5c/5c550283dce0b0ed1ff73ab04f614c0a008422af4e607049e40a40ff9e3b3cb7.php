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
        $__internal_2f5bf0f32f55ace94536f2bdb11d94d2c947705497c01808e44bbd3a00aeeaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5bf0f32f55ace94536f2bdb11d94d2c947705497c01808e44bbd3a00aeeaf5->enter($__internal_2f5bf0f32f55ace94536f2bdb11d94d2c947705497c01808e44bbd3a00aeeaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_982f320036fb9675a3c6aacac630603b3b00ceec50c756578a43528e715be3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982f320036fb9675a3c6aacac630603b3b00ceec50c756578a43528e715be3b5->enter($__internal_982f320036fb9675a3c6aacac630603b3b00ceec50c756578a43528e715be3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5bf0f32f55ace94536f2bdb11d94d2c947705497c01808e44bbd3a00aeeaf5->leave($__internal_2f5bf0f32f55ace94536f2bdb11d94d2c947705497c01808e44bbd3a00aeeaf5_prof);

        
        $__internal_982f320036fb9675a3c6aacac630603b3b00ceec50c756578a43528e715be3b5->leave($__internal_982f320036fb9675a3c6aacac630603b3b00ceec50c756578a43528e715be3b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0637e74ad48e8a4a32a00f36b64328ea95cc60575d35eb9f5aff6348910b8a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0637e74ad48e8a4a32a00f36b64328ea95cc60575d35eb9f5aff6348910b8a26->enter($__internal_0637e74ad48e8a4a32a00f36b64328ea95cc60575d35eb9f5aff6348910b8a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebc6f72a041d4d8f98b3d5966ec2aa28d22e05a66b197aaf7304eb1f954412a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc6f72a041d4d8f98b3d5966ec2aa28d22e05a66b197aaf7304eb1f954412a8->enter($__internal_ebc6f72a041d4d8f98b3d5966ec2aa28d22e05a66b197aaf7304eb1f954412a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ebc6f72a041d4d8f98b3d5966ec2aa28d22e05a66b197aaf7304eb1f954412a8->leave($__internal_ebc6f72a041d4d8f98b3d5966ec2aa28d22e05a66b197aaf7304eb1f954412a8_prof);

        
        $__internal_0637e74ad48e8a4a32a00f36b64328ea95cc60575d35eb9f5aff6348910b8a26->leave($__internal_0637e74ad48e8a4a32a00f36b64328ea95cc60575d35eb9f5aff6348910b8a26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f78a816d6048da5963472b18a1060939ce3ddc71040b5ed275895411fed0811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f78a816d6048da5963472b18a1060939ce3ddc71040b5ed275895411fed0811->enter($__internal_4f78a816d6048da5963472b18a1060939ce3ddc71040b5ed275895411fed0811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9da5f73e4fb9bd8ec883b6525a5439321a10ad49f3f261388c431fb4f0de6dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da5f73e4fb9bd8ec883b6525a5439321a10ad49f3f261388c431fb4f0de6dd4->enter($__internal_9da5f73e4fb9bd8ec883b6525a5439321a10ad49f3f261388c431fb4f0de6dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9da5f73e4fb9bd8ec883b6525a5439321a10ad49f3f261388c431fb4f0de6dd4->leave($__internal_9da5f73e4fb9bd8ec883b6525a5439321a10ad49f3f261388c431fb4f0de6dd4_prof);

        
        $__internal_4f78a816d6048da5963472b18a1060939ce3ddc71040b5ed275895411fed0811->leave($__internal_4f78a816d6048da5963472b18a1060939ce3ddc71040b5ed275895411fed0811_prof);

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
