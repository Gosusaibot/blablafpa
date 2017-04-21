<?php

/* @OCPlatform/Advert/translation.html.twig */
class __TwigTemplate_065c5c400e07edd30c76ecabf06b784f5aaf4c76a1e9385aa57f1c2be2c72f33 extends Twig_Template
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
        $__internal_ce499c63b196032e8e976ee578fc1cdf9dd2fcfa240f883b761a0509e1032bbb = $this->env->getExtension("native_profiler");
        $__internal_ce499c63b196032e8e976ee578fc1cdf9dd2fcfa240f883b761a0509e1032bbb->enter($__internal_ce499c63b196032e8e976ee578fc1cdf9dd2fcfa240f883b761a0509e1032bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/translation.html.twig"));

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
        
        $__internal_ce499c63b196032e8e976ee578fc1cdf9dd2fcfa240f883b761a0509e1032bbb->leave($__internal_ce499c63b196032e8e976ee578fc1cdf9dd2fcfa240f883b761a0509e1032bbb_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/translation.html.twig";
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
