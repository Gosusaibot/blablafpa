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
        $__internal_3185b12439390d0c06a5a60bb69712cf6cd4292ef820a3f7c9b477aa87af4da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3185b12439390d0c06a5a60bb69712cf6cd4292ef820a3f7c9b477aa87af4da1->enter($__internal_3185b12439390d0c06a5a60bb69712cf6cd4292ef820a3f7c9b477aa87af4da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_3fbcdf10d87ba070d96969fb74d90a97c84900f00f6f06521a5f745a361c79c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbcdf10d87ba070d96969fb74d90a97c84900f00f6f06521a5f745a361c79c6->enter($__internal_3fbcdf10d87ba070d96969fb74d90a97c84900f00f6f06521a5f745a361c79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3185b12439390d0c06a5a60bb69712cf6cd4292ef820a3f7c9b477aa87af4da1->leave($__internal_3185b12439390d0c06a5a60bb69712cf6cd4292ef820a3f7c9b477aa87af4da1_prof);

        
        $__internal_3fbcdf10d87ba070d96969fb74d90a97c84900f00f6f06521a5f745a361c79c6->leave($__internal_3fbcdf10d87ba070d96969fb74d90a97c84900f00f6f06521a5f745a361c79c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_146d4f53b913813b10052c02a470d023b160e0f36a647361fb46595b05a522ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146d4f53b913813b10052c02a470d023b160e0f36a647361fb46595b05a522ff->enter($__internal_146d4f53b913813b10052c02a470d023b160e0f36a647361fb46595b05a522ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_716899a4c62c9ca863635bbd974e39e8ef49cbac828ee6a65d12c973f9d76633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716899a4c62c9ca863635bbd974e39e8ef49cbac828ee6a65d12c973f9d76633->enter($__internal_716899a4c62c9ca863635bbd974e39e8ef49cbac828ee6a65d12c973f9d76633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_716899a4c62c9ca863635bbd974e39e8ef49cbac828ee6a65d12c973f9d76633->leave($__internal_716899a4c62c9ca863635bbd974e39e8ef49cbac828ee6a65d12c973f9d76633_prof);

        
        $__internal_146d4f53b913813b10052c02a470d023b160e0f36a647361fb46595b05a522ff->leave($__internal_146d4f53b913813b10052c02a470d023b160e0f36a647361fb46595b05a522ff_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c479de2b4ab035dd9fb22166c56ad4c16780a1a8aea8914e5f4e9958d41077f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c479de2b4ab035dd9fb22166c56ad4c16780a1a8aea8914e5f4e9958d41077f9->enter($__internal_c479de2b4ab035dd9fb22166c56ad4c16780a1a8aea8914e5f4e9958d41077f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_66d75dbb623f5bec2690b1d4d8a313664a4b0620978f6bd176d30785b19714db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d75dbb623f5bec2690b1d4d8a313664a4b0620978f6bd176d30785b19714db->enter($__internal_66d75dbb623f5bec2690b1d4d8a313664a4b0620978f6bd176d30785b19714db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_66d75dbb623f5bec2690b1d4d8a313664a4b0620978f6bd176d30785b19714db->leave($__internal_66d75dbb623f5bec2690b1d4d8a313664a4b0620978f6bd176d30785b19714db_prof);

        
        $__internal_c479de2b4ab035dd9fb22166c56ad4c16780a1a8aea8914e5f4e9958d41077f9->leave($__internal_c479de2b4ab035dd9fb22166c56ad4c16780a1a8aea8914e5f4e9958d41077f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cad23c3c720127a4f305cc31b7f29cd0f014cdfb5b305c8254eb36d6a6dd83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cad23c3c720127a4f305cc31b7f29cd0f014cdfb5b305c8254eb36d6a6dd83e->enter($__internal_3cad23c3c720127a4f305cc31b7f29cd0f014cdfb5b305c8254eb36d6a6dd83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39876a4052494d98cee0faef718ac8af935c0def6eb086143594d6473f063aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39876a4052494d98cee0faef718ac8af935c0def6eb086143594d6473f063aa9->enter($__internal_39876a4052494d98cee0faef718ac8af935c0def6eb086143594d6473f063aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_39876a4052494d98cee0faef718ac8af935c0def6eb086143594d6473f063aa9->leave($__internal_39876a4052494d98cee0faef718ac8af935c0def6eb086143594d6473f063aa9_prof);

        
        $__internal_3cad23c3c720127a4f305cc31b7f29cd0f014cdfb5b305c8254eb36d6a6dd83e->leave($__internal_3cad23c3c720127a4f305cc31b7f29cd0f014cdfb5b305c8254eb36d6a6dd83e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f63d45eee1144532614d93fd914b0668d4adf12a44689be7fb5f8d9ecc21e61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63d45eee1144532614d93fd914b0668d4adf12a44689be7fb5f8d9ecc21e61e->enter($__internal_f63d45eee1144532614d93fd914b0668d4adf12a44689be7fb5f8d9ecc21e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5456e371b0bbc800fdef4900f61f956b4321bd9c6112b0f7116db54808f2dfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5456e371b0bbc800fdef4900f61f956b4321bd9c6112b0f7116db54808f2dfb9->enter($__internal_5456e371b0bbc800fdef4900f61f956b4321bd9c6112b0f7116db54808f2dfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5456e371b0bbc800fdef4900f61f956b4321bd9c6112b0f7116db54808f2dfb9->leave($__internal_5456e371b0bbc800fdef4900f61f956b4321bd9c6112b0f7116db54808f2dfb9_prof);

        
        $__internal_f63d45eee1144532614d93fd914b0668d4adf12a44689be7fb5f8d9ecc21e61e->leave($__internal_f63d45eee1144532614d93fd914b0668d4adf12a44689be7fb5f8d9ecc21e61e_prof);

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
