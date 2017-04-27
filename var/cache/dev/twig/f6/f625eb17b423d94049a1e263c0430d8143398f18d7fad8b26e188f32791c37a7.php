<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_ec53da43dac31861b146849412bfbfe2e900065e16b23b88169eae1b7aeb7be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f613ce528d438ff1a5f11094d045161b0b44166a235041bc41d275c8ff29407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f613ce528d438ff1a5f11094d045161b0b44166a235041bc41d275c8ff29407->enter($__internal_2f613ce528d438ff1a5f11094d045161b0b44166a235041bc41d275c8ff29407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_b94a6236bfff760226d4c74d2eaa589940abc4d2800d2e7e211e416e1546bb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94a6236bfff760226d4c74d2eaa589940abc4d2800d2e7e211e416e1546bb67->enter($__internal_b94a6236bfff760226d4c74d2eaa589940abc4d2800d2e7e211e416e1546bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f613ce528d438ff1a5f11094d045161b0b44166a235041bc41d275c8ff29407->leave($__internal_2f613ce528d438ff1a5f11094d045161b0b44166a235041bc41d275c8ff29407_prof);

        
        $__internal_b94a6236bfff760226d4c74d2eaa589940abc4d2800d2e7e211e416e1546bb67->leave($__internal_b94a6236bfff760226d4c74d2eaa589940abc4d2800d2e7e211e416e1546bb67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a52beb7bb9222a058f6a2419b0d5173d2cde07dd949250d350567d22d03a07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a52beb7bb9222a058f6a2419b0d5173d2cde07dd949250d350567d22d03a07d->enter($__internal_0a52beb7bb9222a058f6a2419b0d5173d2cde07dd949250d350567d22d03a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddade4e09bac49f522ce7c772c853457446979aef3fb92535aa6f21bc4f30403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddade4e09bac49f522ce7c772c853457446979aef3fb92535aa6f21bc4f30403->enter($__internal_ddade4e09bac49f522ce7c772c853457446979aef3fb92535aa6f21bc4f30403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_ddade4e09bac49f522ce7c772c853457446979aef3fb92535aa6f21bc4f30403->leave($__internal_ddade4e09bac49f522ce7c772c853457446979aef3fb92535aa6f21bc4f30403_prof);

        
        $__internal_0a52beb7bb9222a058f6a2419b0d5173d2cde07dd949250d350567d22d03a07d->leave($__internal_0a52beb7bb9222a058f6a2419b0d5173d2cde07dd949250d350567d22d03a07d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c55685f624add4c67b147879b2a42b0f0c85a3dbbe470ac89a0fff04cf438b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c55685f624add4c67b147879b2a42b0f0c85a3dbbe470ac89a0fff04cf438b2->enter($__internal_2c55685f624add4c67b147879b2a42b0f0c85a3dbbe470ac89a0fff04cf438b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_311170cf8560a3c9ebfd19555f2a3acf364c6edc1cf87c56c9b5fd527f06e63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311170cf8560a3c9ebfd19555f2a3acf364c6edc1cf87c56c9b5fd527f06e63d->enter($__internal_311170cf8560a3c9ebfd19555f2a3acf364c6edc1cf87c56c9b5fd527f06e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_311170cf8560a3c9ebfd19555f2a3acf364c6edc1cf87c56c9b5fd527f06e63d->leave($__internal_311170cf8560a3c9ebfd19555f2a3acf364c6edc1cf87c56c9b5fd527f06e63d_prof);

        
        $__internal_2c55685f624add4c67b147879b2a42b0f0c85a3dbbe470ac89a0fff04cf438b2->leave($__internal_2c55685f624add4c67b147879b2a42b0f0c85a3dbbe470ac89a0fff04cf438b2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7145f48affe8d35807dc4bb352895b82616f1becca2da397b9d87f597d2c0266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7145f48affe8d35807dc4bb352895b82616f1becca2da397b9d87f597d2c0266->enter($__internal_7145f48affe8d35807dc4bb352895b82616f1becca2da397b9d87f597d2c0266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4c05c02ad5e5e1fcdded7b2a5929add51240fd261cadc5c279e483e575cc9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c05c02ad5e5e1fcdded7b2a5929add51240fd261cadc5c279e483e575cc9d0->enter($__internal_f4c05c02ad5e5e1fcdded7b2a5929add51240fd261cadc5c279e483e575cc9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_f4c05c02ad5e5e1fcdded7b2a5929add51240fd261cadc5c279e483e575cc9d0->leave($__internal_f4c05c02ad5e5e1fcdded7b2a5929add51240fd261cadc5c279e483e575cc9d0_prof);

        
        $__internal_7145f48affe8d35807dc4bb352895b82616f1becca2da397b9d87f597d2c0266->leave($__internal_7145f48affe8d35807dc4bb352895b82616f1becca2da397b9d87f597d2c0266_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4a62b60e88f82d481187f1140dd0d7e61488e08ccebdaa8480c21827f49e082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a62b60e88f82d481187f1140dd0d7e61488e08ccebdaa8480c21827f49e082->enter($__internal_b4a62b60e88f82d481187f1140dd0d7e61488e08ccebdaa8480c21827f49e082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62e6751cfd71957fc05f58792410cca16f4367a598288acb78bc358042c25ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e6751cfd71957fc05f58792410cca16f4367a598288acb78bc358042c25ada->enter($__internal_62e6751cfd71957fc05f58792410cca16f4367a598288acb78bc358042c25ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo json_encode(twig_get_array_keys_filter((isset($context["commands"]) || array_key_exists("commands", $context) ? $context["commands"] : (function () { throw new Twig_Error_Runtime('Variable "commands" does not exist.', 23, $this->getSourceContext()); })())));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 25, $this->getSourceContext()); })()), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_62e6751cfd71957fc05f58792410cca16f4367a598288acb78bc358042c25ada->leave($__internal_62e6751cfd71957fc05f58792410cca16f4367a598288acb78bc358042c25ada_prof);

        
        $__internal_b4a62b60e88f82d481187f1140dd0d7e61488e08ccebdaa8480c21827f49e082->leave($__internal_b4a62b60e88f82d481187f1140dd0d7e61488e08ccebdaa8480c21827f49e082_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
