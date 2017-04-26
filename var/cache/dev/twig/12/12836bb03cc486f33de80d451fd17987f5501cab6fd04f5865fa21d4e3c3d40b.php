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
        $__internal_371ae1226d577d35bd431c200396413996f00ba4509bcd55c8df897082155fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371ae1226d577d35bd431c200396413996f00ba4509bcd55c8df897082155fa6->enter($__internal_371ae1226d577d35bd431c200396413996f00ba4509bcd55c8df897082155fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b4a12c53cf8f6c04874262098e3764a9a0a3ed38575f8e2ddfceeec6ec55f624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a12c53cf8f6c04874262098e3764a9a0a3ed38575f8e2ddfceeec6ec55f624->enter($__internal_b4a12c53cf8f6c04874262098e3764a9a0a3ed38575f8e2ddfceeec6ec55f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_371ae1226d577d35bd431c200396413996f00ba4509bcd55c8df897082155fa6->leave($__internal_371ae1226d577d35bd431c200396413996f00ba4509bcd55c8df897082155fa6_prof);

        
        $__internal_b4a12c53cf8f6c04874262098e3764a9a0a3ed38575f8e2ddfceeec6ec55f624->leave($__internal_b4a12c53cf8f6c04874262098e3764a9a0a3ed38575f8e2ddfceeec6ec55f624_prof);

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
