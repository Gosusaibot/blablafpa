<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_66f9ecc2c4c1e71407fa0e9422dc10837ee7f2516bf36afa2fee822428ed6854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d6fe603183a7f88b56ed32de58d46b17d98b31dd5211a8ef8dcac77420f3f761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fe603183a7f88b56ed32de58d46b17d98b31dd5211a8ef8dcac77420f3f761->enter($__internal_d6fe603183a7f88b56ed32de58d46b17d98b31dd5211a8ef8dcac77420f3f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1fb585930ee7971a62fccf549356f1b8ac49609e8f6a66e2bb7b7ea0f1e145ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb585930ee7971a62fccf549356f1b8ac49609e8f6a66e2bb7b7ea0f1e145ff->enter($__internal_1fb585930ee7971a62fccf549356f1b8ac49609e8f6a66e2bb7b7ea0f1e145ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6fe603183a7f88b56ed32de58d46b17d98b31dd5211a8ef8dcac77420f3f761->leave($__internal_d6fe603183a7f88b56ed32de58d46b17d98b31dd5211a8ef8dcac77420f3f761_prof);

        
        $__internal_1fb585930ee7971a62fccf549356f1b8ac49609e8f6a66e2bb7b7ea0f1e145ff->leave($__internal_1fb585930ee7971a62fccf549356f1b8ac49609e8f6a66e2bb7b7ea0f1e145ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ec9530583b40bec55e8412c9195e89d5ffff84865507b7fb13b0e51d3cd535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ec9530583b40bec55e8412c9195e89d5ffff84865507b7fb13b0e51d3cd535->enter($__internal_a4ec9530583b40bec55e8412c9195e89d5ffff84865507b7fb13b0e51d3cd535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55633d827006969b29c0e856bfbd4f4b7b45c6ae7e45aa882f8ac479a629824e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55633d827006969b29c0e856bfbd4f4b7b45c6ae7e45aa882f8ac479a629824e->enter($__internal_55633d827006969b29c0e856bfbd4f4b7b45c6ae7e45aa882f8ac479a629824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_55633d827006969b29c0e856bfbd4f4b7b45c6ae7e45aa882f8ac479a629824e->leave($__internal_55633d827006969b29c0e856bfbd4f4b7b45c6ae7e45aa882f8ac479a629824e_prof);

        
        $__internal_a4ec9530583b40bec55e8412c9195e89d5ffff84865507b7fb13b0e51d3cd535->leave($__internal_a4ec9530583b40bec55e8412c9195e89d5ffff84865507b7fb13b0e51d3cd535_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_608078494185bc13bcacdbbc8ada777df5c7c12b3ecaf9074be5f0321c8ef00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608078494185bc13bcacdbbc8ada777df5c7c12b3ecaf9074be5f0321c8ef00f->enter($__internal_608078494185bc13bcacdbbc8ada777df5c7c12b3ecaf9074be5f0321c8ef00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5730e95b084a340ca5b26f6ab4010cd2abb73e528d838db55577b5b88db64db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5730e95b084a340ca5b26f6ab4010cd2abb73e528d838db55577b5b88db64db->enter($__internal_e5730e95b084a340ca5b26f6ab4010cd2abb73e528d838db55577b5b88db64db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e5730e95b084a340ca5b26f6ab4010cd2abb73e528d838db55577b5b88db64db->leave($__internal_e5730e95b084a340ca5b26f6ab4010cd2abb73e528d838db55577b5b88db64db_prof);

        
        $__internal_608078494185bc13bcacdbbc8ada777df5c7c12b3ecaf9074be5f0321c8ef00f->leave($__internal_608078494185bc13bcacdbbc8ada777df5c7c12b3ecaf9074be5f0321c8ef00f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
