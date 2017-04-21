<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_875beef98ea68ae8c632fa4d87efc71e0d674e73bfd912e8bcf6df81b0dd1d3e extends Twig_Template
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
        $__internal_6a87561c81dd09995d6d3bb254cda45701fdd19ac839cc87556d99a0f9e6c4b7 = $this->env->getExtension("native_profiler");
        $__internal_6a87561c81dd09995d6d3bb254cda45701fdd19ac839cc87556d99a0f9e6c4b7->enter($__internal_6a87561c81dd09995d6d3bb254cda45701fdd19ac839cc87556d99a0f9e6c4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 2
        echo "
<html>
  <body>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hello", array("%name%" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
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
        
        $__internal_6a87561c81dd09995d6d3bb254cda45701fdd19ac839cc87556d99a0f9e6c4b7->leave($__internal_6a87561c81dd09995d6d3bb254cda45701fdd19ac839cc87556d99a0f9e6c4b7_prof);

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
        return array (  32 => 7,  27 => 5,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig #}*/
/* */
/* <html>*/
/*   <body>*/
/*     {{ 'hello'|trans({'%name%': name}) }}*/
/*     <br>*/
/*     Aujourd'hui nous sommes le {{ 'now'|localizeddate('full', 'none') }} et il est {{ 'now'|localizeddate('none', 'short') }}*/
/*   </body>*/
/* </html>*/
/* */
