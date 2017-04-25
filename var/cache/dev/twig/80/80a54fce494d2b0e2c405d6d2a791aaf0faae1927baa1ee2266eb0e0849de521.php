<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_7997af44ca9573cd1fd2ae7b21173ecb904cef1e36fec30cbe8c339dffd73f8b extends Twig_Template
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
        $__internal_b295bf24dcf1b0fdfe639899638d34677b9fbfd1d3598f4ce1b37f986cfffd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b295bf24dcf1b0fdfe639899638d34677b9fbfd1d3598f4ce1b37f986cfffd2b->enter($__internal_b295bf24dcf1b0fdfe639899638d34677b9fbfd1d3598f4ce1b37f986cfffd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_aad874530f89e9e73532baf592270f8fbe927f781e4a826f4c14116e6cffeff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad874530f89e9e73532baf592270f8fbe927f781e4a826f4c14116e6cffeff4->enter($__internal_aad874530f89e9e73532baf592270f8fbe927f781e4a826f4c14116e6cffeff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>
";
        
        $__internal_b295bf24dcf1b0fdfe639899638d34677b9fbfd1d3598f4ce1b37f986cfffd2b->leave($__internal_b295bf24dcf1b0fdfe639899638d34677b9fbfd1d3598f4ce1b37f986cfffd2b_prof);

        
        $__internal_aad874530f89e9e73532baf592270f8fbe927f781e4a826f4c14116e6cffeff4->leave($__internal_aad874530f89e9e73532baf592270f8fbe927f781e4a826f4c14116e6cffeff4_prof);

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
        return array (  39 => 10,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : {{ status_text }}</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur {{ status_code }} : {{ status_text }}.</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>
", "TwigBundle:Exception:error404.html.twig", "/var/www/blablafpa/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
