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
        $__internal_21476d8bddd38f657e0bece27b634096afac9540703e4f4b718de94c0836fdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21476d8bddd38f657e0bece27b634096afac9540703e4f4b718de94c0836fdba->enter($__internal_21476d8bddd38f657e0bece27b634096afac9540703e4f4b718de94c0836fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f5cc72e43c33fa48c1c6792d84d7f4c9226885529cccf54327297e714fc79d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cc72e43c33fa48c1c6792d84d7f4c9226885529cccf54327297e714fc79d43->enter($__internal_f5cc72e43c33fa48c1c6792d84d7f4c9226885529cccf54327297e714fc79d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_21476d8bddd38f657e0bece27b634096afac9540703e4f4b718de94c0836fdba->leave($__internal_21476d8bddd38f657e0bece27b634096afac9540703e4f4b718de94c0836fdba_prof);

        
        $__internal_f5cc72e43c33fa48c1c6792d84d7f4c9226885529cccf54327297e714fc79d43->leave($__internal_f5cc72e43c33fa48c1c6792d84d7f4c9226885529cccf54327297e714fc79d43_prof);

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
