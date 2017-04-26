<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_efcfec5cb9f68899e62b7f333b858e088ac51b80313eb16eae944918cecbba6b extends Twig_Template
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
        $__internal_41ced317064326c05f4a8209afd633e3ee86fbd8892523d705fc24c70dd70216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ced317064326c05f4a8209afd633e3ee86fbd8892523d705fc24c70dd70216->enter($__internal_41ced317064326c05f4a8209afd633e3ee86fbd8892523d705fc24c70dd70216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_4f54e21f7f6219abc898337f22b0e39fa378898ae153e871465f0b854379fbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54e21f7f6219abc898337f22b0e39fa378898ae153e871465f0b854379fbd4->enter($__internal_4f54e21f7f6219abc898337f22b0e39fa378898ae153e871465f0b854379fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_41ced317064326c05f4a8209afd633e3ee86fbd8892523d705fc24c70dd70216->leave($__internal_41ced317064326c05f4a8209afd633e3ee86fbd8892523d705fc24c70dd70216_prof);

        
        $__internal_4f54e21f7f6219abc898337f22b0e39fa378898ae153e871465f0b854379fbd4->leave($__internal_4f54e21f7f6219abc898337f22b0e39fa378898ae153e871465f0b854379fbd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6e0fc9e9c5d4be56711548c97f18a7fd6655fc27d14d0d15627bda4ce50ad2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e0fc9e9c5d4be56711548c97f18a7fd6655fc27d14d0d15627bda4ce50ad2c->enter($__internal_c6e0fc9e9c5d4be56711548c97f18a7fd6655fc27d14d0d15627bda4ce50ad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_999d863e75ae2b8ff8c23be4858f191448b37ed604df42ab5f032c42fea4544c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999d863e75ae2b8ff8c23be4858f191448b37ed604df42ab5f032c42fea4544c->enter($__internal_999d863e75ae2b8ff8c23be4858f191448b37ed604df42ab5f032c42fea4544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_999d863e75ae2b8ff8c23be4858f191448b37ed604df42ab5f032c42fea4544c->leave($__internal_999d863e75ae2b8ff8c23be4858f191448b37ed604df42ab5f032c42fea4544c_prof);

        
        $__internal_c6e0fc9e9c5d4be56711548c97f18a7fd6655fc27d14d0d15627bda4ce50ad2c->leave($__internal_c6e0fc9e9c5d4be56711548c97f18a7fd6655fc27d14d0d15627bda4ce50ad2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8ed38fe9da16660b6875508c54cf7722cc9fc47f626f10ea9ac859eefd4af4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ed38fe9da16660b6875508c54cf7722cc9fc47f626f10ea9ac859eefd4af4c->enter($__internal_c8ed38fe9da16660b6875508c54cf7722cc9fc47f626f10ea9ac859eefd4af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d09e3a0a4af5ccfe905a93fd44ebeaa001200af551f1520f81f1cd8e45069df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d09e3a0a4af5ccfe905a93fd44ebeaa001200af551f1520f81f1cd8e45069df->enter($__internal_1d09e3a0a4af5ccfe905a93fd44ebeaa001200af551f1520f81f1cd8e45069df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_1d09e3a0a4af5ccfe905a93fd44ebeaa001200af551f1520f81f1cd8e45069df->leave($__internal_1d09e3a0a4af5ccfe905a93fd44ebeaa001200af551f1520f81f1cd8e45069df_prof);

        
        $__internal_c8ed38fe9da16660b6875508c54cf7722cc9fc47f626f10ea9ac859eefd4af4c->leave($__internal_c8ed38fe9da16660b6875508c54cf7722cc9fc47f626f10ea9ac859eefd4af4c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_406cc4b0430739182eb9b1ab31e6e7c1f3821ee0706cb2f05585d44732d4da41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406cc4b0430739182eb9b1ab31e6e7c1f3821ee0706cb2f05585d44732d4da41->enter($__internal_406cc4b0430739182eb9b1ab31e6e7c1f3821ee0706cb2f05585d44732d4da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a04bc04beefbcb16abaa43b9acfc28c30292ed811e551611fa4e48e9fe3e2a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04bc04beefbcb16abaa43b9acfc28c30292ed811e551611fa4e48e9fe3e2a4e->enter($__internal_a04bc04beefbcb16abaa43b9acfc28c30292ed811e551611fa4e48e9fe3e2a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_a04bc04beefbcb16abaa43b9acfc28c30292ed811e551611fa4e48e9fe3e2a4e->leave($__internal_a04bc04beefbcb16abaa43b9acfc28c30292ed811e551611fa4e48e9fe3e2a4e_prof);

        
        $__internal_406cc4b0430739182eb9b1ab31e6e7c1f3821ee0706cb2f05585d44732d4da41->leave($__internal_406cc4b0430739182eb9b1ab31e6e7c1f3821ee0706cb2f05585d44732d4da41_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4719662dc31e4e7441d88356a7f424d3c6ce8448588ceb5caacd98f84b64f4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4719662dc31e4e7441d88356a7f424d3c6ce8448588ceb5caacd98f84b64f4c6->enter($__internal_4719662dc31e4e7441d88356a7f424d3c6ce8448588ceb5caacd98f84b64f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a350b167b07ea403f68a7a7d679cc4909db1622e1eb5488d0b7699d91945ee85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a350b167b07ea403f68a7a7d679cc4909db1622e1eb5488d0b7699d91945ee85->enter($__internal_a350b167b07ea403f68a7a7d679cc4909db1622e1eb5488d0b7699d91945ee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_a350b167b07ea403f68a7a7d679cc4909db1622e1eb5488d0b7699d91945ee85->leave($__internal_a350b167b07ea403f68a7a7d679cc4909db1622e1eb5488d0b7699d91945ee85_prof);

        
        $__internal_4719662dc31e4e7441d88356a7f424d3c6ce8448588ceb5caacd98f84b64f4c6->leave($__internal_4719662dc31e4e7441d88356a7f424d3c6ce8448588ceb5caacd98f84b64f4c6_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
