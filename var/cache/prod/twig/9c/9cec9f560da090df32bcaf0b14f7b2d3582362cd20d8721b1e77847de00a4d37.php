<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_634b477fc47dc036156da782afff1c99bb9324750b851a2674eaeaac60c93824 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 10
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/var/www/blablafpa/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
