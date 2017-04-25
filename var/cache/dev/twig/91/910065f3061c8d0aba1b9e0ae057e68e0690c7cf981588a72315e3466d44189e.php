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
        $__internal_39e9c09413deaa174884af6bb63f3defccdde1cd809469021517e49f39ffab36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e9c09413deaa174884af6bb63f3defccdde1cd809469021517e49f39ffab36->enter($__internal_39e9c09413deaa174884af6bb63f3defccdde1cd809469021517e49f39ffab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_96815790c5531d3291d8dc52c42be6af488ed07bdce2a9dd07ebbab5167174b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96815790c5531d3291d8dc52c42be6af488ed07bdce2a9dd07ebbab5167174b0->enter($__internal_96815790c5531d3291d8dc52c42be6af488ed07bdce2a9dd07ebbab5167174b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_39e9c09413deaa174884af6bb63f3defccdde1cd809469021517e49f39ffab36->leave($__internal_39e9c09413deaa174884af6bb63f3defccdde1cd809469021517e49f39ffab36_prof);

        
        $__internal_96815790c5531d3291d8dc52c42be6af488ed07bdce2a9dd07ebbab5167174b0->leave($__internal_96815790c5531d3291d8dc52c42be6af488ed07bdce2a9dd07ebbab5167174b0_prof);

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
