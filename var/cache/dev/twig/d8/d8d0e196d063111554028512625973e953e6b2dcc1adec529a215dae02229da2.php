<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3ab18df55e9fd2c733802974fd99e0d4abf31fb9e37fb8ae5e16a015591f12ed extends Twig_Template
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
        $__internal_e091916c415b86a19bb757a8af7ddedacd4b497c564619766e80751d41d0cbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e091916c415b86a19bb757a8af7ddedacd4b497c564619766e80751d41d0cbd6->enter($__internal_e091916c415b86a19bb757a8af7ddedacd4b497c564619766e80751d41d0cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a26e18b7ca5b10524f8e2cc302ac01f5ac9b7ada2d2ba2d9693a2242180685c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26e18b7ca5b10524f8e2cc302ac01f5ac9b7ada2d2ba2d9693a2242180685c4->enter($__internal_a26e18b7ca5b10524f8e2cc302ac01f5ac9b7ada2d2ba2d9693a2242180685c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e091916c415b86a19bb757a8af7ddedacd4b497c564619766e80751d41d0cbd6->leave($__internal_e091916c415b86a19bb757a8af7ddedacd4b497c564619766e80751d41d0cbd6_prof);

        
        $__internal_a26e18b7ca5b10524f8e2cc302ac01f5ac9b7ada2d2ba2d9693a2242180685c4->leave($__internal_a26e18b7ca5b10524f8e2cc302ac01f5ac9b7ada2d2ba2d9693a2242180685c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
