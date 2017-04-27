<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6badead791d2c3fe808da7aa025b6ddc0f62ccc4ccf3679c86a6346db7fdcd12 extends Twig_Template
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
        $__internal_f12673d856a68e5291091bc62d6c98aa90429f325636751b04a11aa0b81c9ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12673d856a68e5291091bc62d6c98aa90429f325636751b04a11aa0b81c9ade->enter($__internal_f12673d856a68e5291091bc62d6c98aa90429f325636751b04a11aa0b81c9ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_aecafc8d7bee1d0163667c12e3522d8f6b536e0bae7a4873a851f6db34a1eeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecafc8d7bee1d0163667c12e3522d8f6b536e0bae7a4873a851f6db34a1eeb4->enter($__internal_aecafc8d7bee1d0163667c12e3522d8f6b536e0bae7a4873a851f6db34a1eeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f12673d856a68e5291091bc62d6c98aa90429f325636751b04a11aa0b81c9ade->leave($__internal_f12673d856a68e5291091bc62d6c98aa90429f325636751b04a11aa0b81c9ade_prof);

        
        $__internal_aecafc8d7bee1d0163667c12e3522d8f6b536e0bae7a4873a851f6db34a1eeb4->leave($__internal_aecafc8d7bee1d0163667c12e3522d8f6b536e0bae7a4873a851f6db34a1eeb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
