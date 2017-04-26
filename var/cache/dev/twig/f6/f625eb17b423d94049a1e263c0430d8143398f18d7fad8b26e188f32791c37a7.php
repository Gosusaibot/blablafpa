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
        $__internal_4c9a077b7ff16057eb19866bb75ea0d9c2dc57e311d7d7b2d02cd86bd27c9261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9a077b7ff16057eb19866bb75ea0d9c2dc57e311d7d7b2d02cd86bd27c9261->enter($__internal_4c9a077b7ff16057eb19866bb75ea0d9c2dc57e311d7d7b2d02cd86bd27c9261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_b42f8b7150207d8365c59d9486efe9a6da5bdd3d9a14f3ddf77409adec474639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42f8b7150207d8365c59d9486efe9a6da5bdd3d9a14f3ddf77409adec474639->enter($__internal_b42f8b7150207d8365c59d9486efe9a6da5bdd3d9a14f3ddf77409adec474639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9a077b7ff16057eb19866bb75ea0d9c2dc57e311d7d7b2d02cd86bd27c9261->leave($__internal_4c9a077b7ff16057eb19866bb75ea0d9c2dc57e311d7d7b2d02cd86bd27c9261_prof);

        
        $__internal_b42f8b7150207d8365c59d9486efe9a6da5bdd3d9a14f3ddf77409adec474639->leave($__internal_b42f8b7150207d8365c59d9486efe9a6da5bdd3d9a14f3ddf77409adec474639_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e8b7095d83b4db4bcc6f0cc2aee39f7980cf72c7860c252e62a25e16c597e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8b7095d83b4db4bcc6f0cc2aee39f7980cf72c7860c252e62a25e16c597e2b->enter($__internal_4e8b7095d83b4db4bcc6f0cc2aee39f7980cf72c7860c252e62a25e16c597e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8032239fee2685a04e4704b263a3bed8e3cb467e21d0f406c9ab3d2811c8641d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8032239fee2685a04e4704b263a3bed8e3cb467e21d0f406c9ab3d2811c8641d->enter($__internal_8032239fee2685a04e4704b263a3bed8e3cb467e21d0f406c9ab3d2811c8641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_8032239fee2685a04e4704b263a3bed8e3cb467e21d0f406c9ab3d2811c8641d->leave($__internal_8032239fee2685a04e4704b263a3bed8e3cb467e21d0f406c9ab3d2811c8641d_prof);

        
        $__internal_4e8b7095d83b4db4bcc6f0cc2aee39f7980cf72c7860c252e62a25e16c597e2b->leave($__internal_4e8b7095d83b4db4bcc6f0cc2aee39f7980cf72c7860c252e62a25e16c597e2b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_763a91745e0cb942d18998ce91c38e340a555f3fc85dd4231ce2b8508409ede9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763a91745e0cb942d18998ce91c38e340a555f3fc85dd4231ce2b8508409ede9->enter($__internal_763a91745e0cb942d18998ce91c38e340a555f3fc85dd4231ce2b8508409ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d55e5f88de120a102480c0c1905fd9d83cdd7b569c731f8e22b5be7d1c8c666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d55e5f88de120a102480c0c1905fd9d83cdd7b569c731f8e22b5be7d1c8c666->enter($__internal_4d55e5f88de120a102480c0c1905fd9d83cdd7b569c731f8e22b5be7d1c8c666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_4d55e5f88de120a102480c0c1905fd9d83cdd7b569c731f8e22b5be7d1c8c666->leave($__internal_4d55e5f88de120a102480c0c1905fd9d83cdd7b569c731f8e22b5be7d1c8c666_prof);

        
        $__internal_763a91745e0cb942d18998ce91c38e340a555f3fc85dd4231ce2b8508409ede9->leave($__internal_763a91745e0cb942d18998ce91c38e340a555f3fc85dd4231ce2b8508409ede9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ee39dd12bd5496ad0bcfc6bb0f26b60323245f0af34450f6fdb4a7a105ffe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ee39dd12bd5496ad0bcfc6bb0f26b60323245f0af34450f6fdb4a7a105ffe4->enter($__internal_66ee39dd12bd5496ad0bcfc6bb0f26b60323245f0af34450f6fdb4a7a105ffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c01e06536aaa54e25301355bd7f53248def09013243ebe75ccbec54a979d0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c01e06536aaa54e25301355bd7f53248def09013243ebe75ccbec54a979d0e3->enter($__internal_3c01e06536aaa54e25301355bd7f53248def09013243ebe75ccbec54a979d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_3c01e06536aaa54e25301355bd7f53248def09013243ebe75ccbec54a979d0e3->leave($__internal_3c01e06536aaa54e25301355bd7f53248def09013243ebe75ccbec54a979d0e3_prof);

        
        $__internal_66ee39dd12bd5496ad0bcfc6bb0f26b60323245f0af34450f6fdb4a7a105ffe4->leave($__internal_66ee39dd12bd5496ad0bcfc6bb0f26b60323245f0af34450f6fdb4a7a105ffe4_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de1078ee4cac5bc887f0a06d60f99a6c09f33dd5c7be9c1797f58bb3fd98b5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1078ee4cac5bc887f0a06d60f99a6c09f33dd5c7be9c1797f58bb3fd98b5c5->enter($__internal_de1078ee4cac5bc887f0a06d60f99a6c09f33dd5c7be9c1797f58bb3fd98b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21a3f9e41398a598f8b858fc94ed4144d84328e8a45e7ba3c1e0ca6ad68b2772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a3f9e41398a598f8b858fc94ed4144d84328e8a45e7ba3c1e0ca6ad68b2772->enter($__internal_21a3f9e41398a598f8b858fc94ed4144d84328e8a45e7ba3c1e0ca6ad68b2772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_21a3f9e41398a598f8b858fc94ed4144d84328e8a45e7ba3c1e0ca6ad68b2772->leave($__internal_21a3f9e41398a598f8b858fc94ed4144d84328e8a45e7ba3c1e0ca6ad68b2772_prof);

        
        $__internal_de1078ee4cac5bc887f0a06d60f99a6c09f33dd5c7be9c1797f58bb3fd98b5c5->leave($__internal_de1078ee4cac5bc887f0a06d60f99a6c09f33dd5c7be9c1797f58bb3fd98b5c5_prof);

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
