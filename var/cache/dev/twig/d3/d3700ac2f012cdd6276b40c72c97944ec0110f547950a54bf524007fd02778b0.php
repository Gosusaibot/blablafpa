<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7851224a9d7ce3a691efd67084689f1895706da6550deed45e15185199042a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a31c3ab6605bea4593f633357d52ba80495a9ed14ec752e9dd13a1174ae7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a31c3ab6605bea4593f633357d52ba80495a9ed14ec752e9dd13a1174ae7e4->enter($__internal_f6a31c3ab6605bea4593f633357d52ba80495a9ed14ec752e9dd13a1174ae7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d288ea77e65b9b63ffefa8c3d8b42785319d1e6cc0d993d3ae3fc249e95aa7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d288ea77e65b9b63ffefa8c3d8b42785319d1e6cc0d993d3ae3fc249e95aa7cc->enter($__internal_d288ea77e65b9b63ffefa8c3d8b42785319d1e6cc0d993d3ae3fc249e95aa7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a31c3ab6605bea4593f633357d52ba80495a9ed14ec752e9dd13a1174ae7e4->leave($__internal_f6a31c3ab6605bea4593f633357d52ba80495a9ed14ec752e9dd13a1174ae7e4_prof);

        
        $__internal_d288ea77e65b9b63ffefa8c3d8b42785319d1e6cc0d993d3ae3fc249e95aa7cc->leave($__internal_d288ea77e65b9b63ffefa8c3d8b42785319d1e6cc0d993d3ae3fc249e95aa7cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d37f7e850bde83d02a9d189bd796fe7fae7d21de2bbb062bfb29994d8ed902af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37f7e850bde83d02a9d189bd796fe7fae7d21de2bbb062bfb29994d8ed902af->enter($__internal_d37f7e850bde83d02a9d189bd796fe7fae7d21de2bbb062bfb29994d8ed902af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d8324a1a0558837784e22a6d65660d1fa3d095e0b1133eb4ce9ea0723fafb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8324a1a0558837784e22a6d65660d1fa3d095e0b1133eb4ce9ea0723fafb05->enter($__internal_2d8324a1a0558837784e22a6d65660d1fa3d095e0b1133eb4ce9ea0723fafb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2d8324a1a0558837784e22a6d65660d1fa3d095e0b1133eb4ce9ea0723fafb05->leave($__internal_2d8324a1a0558837784e22a6d65660d1fa3d095e0b1133eb4ce9ea0723fafb05_prof);

        
        $__internal_d37f7e850bde83d02a9d189bd796fe7fae7d21de2bbb062bfb29994d8ed902af->leave($__internal_d37f7e850bde83d02a9d189bd796fe7fae7d21de2bbb062bfb29994d8ed902af_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01d50bfbd69590e161a26ba011e7be00292cdc4da49d6a5184ea4f8947959450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d50bfbd69590e161a26ba011e7be00292cdc4da49d6a5184ea4f8947959450->enter($__internal_01d50bfbd69590e161a26ba011e7be00292cdc4da49d6a5184ea4f8947959450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d843a1347c71b76e4586e596c3149c78b1e227557dbb67a4fe02e482462af889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d843a1347c71b76e4586e596c3149c78b1e227557dbb67a4fe02e482462af889->enter($__internal_d843a1347c71b76e4586e596c3149c78b1e227557dbb67a4fe02e482462af889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d843a1347c71b76e4586e596c3149c78b1e227557dbb67a4fe02e482462af889->leave($__internal_d843a1347c71b76e4586e596c3149c78b1e227557dbb67a4fe02e482462af889_prof);

        
        $__internal_01d50bfbd69590e161a26ba011e7be00292cdc4da49d6a5184ea4f8947959450->leave($__internal_01d50bfbd69590e161a26ba011e7be00292cdc4da49d6a5184ea4f8947959450_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8db3dd183af6d78dbe2bf589ad68ea4325863607a1aa48f20c13bdbe10d0152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8db3dd183af6d78dbe2bf589ad68ea4325863607a1aa48f20c13bdbe10d0152->enter($__internal_d8db3dd183af6d78dbe2bf589ad68ea4325863607a1aa48f20c13bdbe10d0152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc1c93aacc4f3fd7b245846926969d8efdc6f2c7f9a542a0f93d99be34b3f6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1c93aacc4f3fd7b245846926969d8efdc6f2c7f9a542a0f93d99be34b3f6dd->enter($__internal_bc1c93aacc4f3fd7b245846926969d8efdc6f2c7f9a542a0f93d99be34b3f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bc1c93aacc4f3fd7b245846926969d8efdc6f2c7f9a542a0f93d99be34b3f6dd->leave($__internal_bc1c93aacc4f3fd7b245846926969d8efdc6f2c7f9a542a0f93d99be34b3f6dd_prof);

        
        $__internal_d8db3dd183af6d78dbe2bf589ad68ea4325863607a1aa48f20c13bdbe10d0152->leave($__internal_d8db3dd183af6d78dbe2bf589ad68ea4325863607a1aa48f20c13bdbe10d0152_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
