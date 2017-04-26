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
        $__internal_e6ec34e73a48bae849c91cc9a8da54562f8dd4a8f4769e94a63c306fb9bb6d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ec34e73a48bae849c91cc9a8da54562f8dd4a8f4769e94a63c306fb9bb6d7d->enter($__internal_e6ec34e73a48bae849c91cc9a8da54562f8dd4a8f4769e94a63c306fb9bb6d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_a84806186deff06f78f041db86741366affdda17c691d65bd323a7126b6169cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84806186deff06f78f041db86741366affdda17c691d65bd323a7126b6169cd->enter($__internal_a84806186deff06f78f041db86741366affdda17c691d65bd323a7126b6169cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

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
        
        $__internal_e6ec34e73a48bae849c91cc9a8da54562f8dd4a8f4769e94a63c306fb9bb6d7d->leave($__internal_e6ec34e73a48bae849c91cc9a8da54562f8dd4a8f4769e94a63c306fb9bb6d7d_prof);

        
        $__internal_a84806186deff06f78f041db86741366affdda17c691d65bd323a7126b6169cd->leave($__internal_a84806186deff06f78f041db86741366affdda17c691d65bd323a7126b6169cd_prof);

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
