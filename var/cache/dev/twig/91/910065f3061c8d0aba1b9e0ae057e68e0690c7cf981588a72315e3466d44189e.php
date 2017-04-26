<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_50aa459273cdb147c1f6eee69b055b7755975be8080c30891e065e37b5322897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6e9f64bef472c09b1b6d672d86db54541636d975518ea9939aea624309d3e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e9f64bef472c09b1b6d672d86db54541636d975518ea9939aea624309d3e82->enter($__internal_e6e9f64bef472c09b1b6d672d86db54541636d975518ea9939aea624309d3e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_657d7e12fde49a90d27312a5b70b080f881d12113568381e31a61688cad649b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657d7e12fde49a90d27312a5b70b080f881d12113568381e31a61688cad649b7->enter($__internal_657d7e12fde49a90d27312a5b70b080f881d12113568381e31a61688cad649b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e6e9f64bef472c09b1b6d672d86db54541636d975518ea9939aea624309d3e82->leave($__internal_e6e9f64bef472c09b1b6d672d86db54541636d975518ea9939aea624309d3e82_prof);

        
        $__internal_657d7e12fde49a90d27312a5b70b080f881d12113568381e31a61688cad649b7->leave($__internal_657d7e12fde49a90d27312a5b70b080f881d12113568381e31a61688cad649b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
