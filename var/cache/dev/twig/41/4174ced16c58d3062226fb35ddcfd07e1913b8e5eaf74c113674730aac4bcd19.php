<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_7b28f4f1721bd8a819338172c298e157f6b1cf8802c09dc6009ac74e0998652e extends Twig_Template
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
        $__internal_d256371778caf6ad700d3f4179a945b6262f9aedd1954d1807fe403dae66ca2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d256371778caf6ad700d3f4179a945b6262f9aedd1954d1807fe403dae66ca2c->enter($__internal_d256371778caf6ad700d3f4179a945b6262f9aedd1954d1807fe403dae66ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_b61f0572f5929ad65baa0467f4e9667e4dcdd1ed746e41cd664d877b8257a72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61f0572f5929ad65baa0467f4e9667e4dcdd1ed746e41cd664d877b8257a72a->enter($__internal_b61f0572f5929ad65baa0467f4e9667e4dcdd1ed746e41cd664d877b8257a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 2
        echo "
<html>
  <body>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello", array("%name%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->getSourceContext()); })()))), "html", null, true);
        echo "
    <br>
    Aujourd'hui nous sommes le ";
        // line 7
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "none"), "html", null, true);
        echo " et il est ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "none", "short"), "html", null, true);
        echo "
  </body>
</html>
";
        
        $__internal_d256371778caf6ad700d3f4179a945b6262f9aedd1954d1807fe403dae66ca2c->leave($__internal_d256371778caf6ad700d3f4179a945b6262f9aedd1954d1807fe403dae66ca2c_prof);

        
        $__internal_b61f0572f5929ad65baa0467f4e9667e4dcdd1ed746e41cd664d877b8257a72a->leave($__internal_b61f0572f5929ad65baa0467f4e9667e4dcdd1ed746e41cd664d877b8257a72a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig #}

<html>
  <body>
    {{ 'hello'|trans({'%name%': name}) }}
    <br>
    Aujourd'hui nous sommes le {{ 'now'|localizeddate('full', 'none') }} et il est {{ 'now'|localizeddate('none', 'short') }}
  </body>
</html>
", "OCPlatformBundle:Advert:translation.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
