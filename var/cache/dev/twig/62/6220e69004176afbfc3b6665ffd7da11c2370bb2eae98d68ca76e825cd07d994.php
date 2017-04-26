<?php

/* ::base.html.twig */
class __TwigTemplate_0c0e5d50a747b1ad4b2e6a4567645209d72480a26c9b5e001975334786101e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_465269079b2878a201a0f82204d202e377199adb052f372dca44c77c15cc37a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465269079b2878a201a0f82204d202e377199adb052f372dca44c77c15cc37a6->enter($__internal_465269079b2878a201a0f82204d202e377199adb052f372dca44c77c15cc37a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0631e012ebe39a7f6b326bed16f05643b73d548546388d3b03e03617d8f238c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0631e012ebe39a7f6b326bed16f05643b73d548546388d3b03e03617d8f238c1->enter($__internal_0631e012ebe39a7f6b326bed16f05643b73d548546388d3b03e03617d8f238c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_465269079b2878a201a0f82204d202e377199adb052f372dca44c77c15cc37a6->leave($__internal_465269079b2878a201a0f82204d202e377199adb052f372dca44c77c15cc37a6_prof);

        
        $__internal_0631e012ebe39a7f6b326bed16f05643b73d548546388d3b03e03617d8f238c1->leave($__internal_0631e012ebe39a7f6b326bed16f05643b73d548546388d3b03e03617d8f238c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5940a911d5d31cffadef534a93054024eb3c4aded719fc20d87454a8863421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5940a911d5d31cffadef534a93054024eb3c4aded719fc20d87454a8863421a->enter($__internal_d5940a911d5d31cffadef534a93054024eb3c4aded719fc20d87454a8863421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bfcc65e4095ae12a1edc83c655f0b9e77c8b41a6999a026a3cd7a3e45aae1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfcc65e4095ae12a1edc83c655f0b9e77c8b41a6999a026a3cd7a3e45aae1ad->enter($__internal_8bfcc65e4095ae12a1edc83c655f0b9e77c8b41a6999a026a3cd7a3e45aae1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8bfcc65e4095ae12a1edc83c655f0b9e77c8b41a6999a026a3cd7a3e45aae1ad->leave($__internal_8bfcc65e4095ae12a1edc83c655f0b9e77c8b41a6999a026a3cd7a3e45aae1ad_prof);

        
        $__internal_d5940a911d5d31cffadef534a93054024eb3c4aded719fc20d87454a8863421a->leave($__internal_d5940a911d5d31cffadef534a93054024eb3c4aded719fc20d87454a8863421a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27e3331a9cd45123cce0f89d47dbffe0b9b04a211193229a45748bc422e6856b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e3331a9cd45123cce0f89d47dbffe0b9b04a211193229a45748bc422e6856b->enter($__internal_27e3331a9cd45123cce0f89d47dbffe0b9b04a211193229a45748bc422e6856b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7b7e70b5e5e49dbd92d82c74365278bce917e78412fb8d08cdd635ca5c6c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b7e70b5e5e49dbd92d82c74365278bce917e78412fb8d08cdd635ca5c6c230->enter($__internal_d7b7e70b5e5e49dbd92d82c74365278bce917e78412fb8d08cdd635ca5c6c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7b7e70b5e5e49dbd92d82c74365278bce917e78412fb8d08cdd635ca5c6c230->leave($__internal_d7b7e70b5e5e49dbd92d82c74365278bce917e78412fb8d08cdd635ca5c6c230_prof);

        
        $__internal_27e3331a9cd45123cce0f89d47dbffe0b9b04a211193229a45748bc422e6856b->leave($__internal_27e3331a9cd45123cce0f89d47dbffe0b9b04a211193229a45748bc422e6856b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52ade5964942e30667b4a3d485ac4c3678b230ff18d3c6262e6693ee9a6474d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ade5964942e30667b4a3d485ac4c3678b230ff18d3c6262e6693ee9a6474d1->enter($__internal_52ade5964942e30667b4a3d485ac4c3678b230ff18d3c6262e6693ee9a6474d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d185d0d3518c0147129742e1ae5ef5a42662f952f00ce81f1b927244d9d9737c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d185d0d3518c0147129742e1ae5ef5a42662f952f00ce81f1b927244d9d9737c->enter($__internal_d185d0d3518c0147129742e1ae5ef5a42662f952f00ce81f1b927244d9d9737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d185d0d3518c0147129742e1ae5ef5a42662f952f00ce81f1b927244d9d9737c->leave($__internal_d185d0d3518c0147129742e1ae5ef5a42662f952f00ce81f1b927244d9d9737c_prof);

        
        $__internal_52ade5964942e30667b4a3d485ac4c3678b230ff18d3c6262e6693ee9a6474d1->leave($__internal_52ade5964942e30667b4a3d485ac4c3678b230ff18d3c6262e6693ee9a6474d1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64d8a966846f4bcfab79846c34e7c46f725342f00055477cf76fee4731e05f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d8a966846f4bcfab79846c34e7c46f725342f00055477cf76fee4731e05f5c->enter($__internal_64d8a966846f4bcfab79846c34e7c46f725342f00055477cf76fee4731e05f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b5f8c837579d147068462417f49839b3022c353c74b345218895e24c5bc6b9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f8c837579d147068462417f49839b3022c353c74b345218895e24c5bc6b9a4->enter($__internal_b5f8c837579d147068462417f49839b3022c353c74b345218895e24c5bc6b9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5f8c837579d147068462417f49839b3022c353c74b345218895e24c5bc6b9a4->leave($__internal_b5f8c837579d147068462417f49839b3022c353c74b345218895e24c5bc6b9a4_prof);

        
        $__internal_64d8a966846f4bcfab79846c34e7c46f725342f00055477cf76fee4731e05f5c->leave($__internal_64d8a966846f4bcfab79846c34e7c46f725342f00055477cf76fee4731e05f5c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/blablafpa/app/Resources/views/base.html.twig");
    }
}
