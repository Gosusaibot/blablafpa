<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_763040a3985099c6c9ce1ed07c3fb10edd438568d7e49eaf2eef2b7cf1acba90 extends Twig_Template
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
        $__internal_507e7ae8e04618128ae957058bbfcb9fb011e663d4eb48c15f08445cf544b9ce = $this->env->getExtension("native_profiler");
        $__internal_507e7ae8e04618128ae957058bbfcb9fb011e663d4eb48c15f08445cf544b9ce->enter($__internal_507e7ae8e04618128ae957058bbfcb9fb011e663d4eb48c15f08445cf544b9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>
";
        
        $__internal_507e7ae8e04618128ae957058bbfcb9fb011e663d4eb48c15f08445cf544b9ce->leave($__internal_507e7ae8e04618128ae957058bbfcb9fb011e663d4eb48c15f08445cf544b9ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     <title>Erreur : {{ status_text }}</title>*/
/*   </head>*/
/* <body>*/
/*   <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>*/
/* */
/*   <h2>Notre application a retourné une erreur {{ status_code }} : {{ status_text }}.</h2>*/
/* */
/*   <div>*/
/*     N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.*/
/*   </div>*/
/* </body>*/
/* </html>*/
/* */
