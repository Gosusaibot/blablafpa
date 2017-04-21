<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0377b51cf7cf80234da8c1703d79e2bddeb101d9a7695f1676823e3343e67196 extends Twig_Template
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
        $__internal_842e73339e16a4ad194512885dbf96f417701d27eab3d7e0d4ceee6b0b32ab23 = $this->env->getExtension("native_profiler");
        $__internal_842e73339e16a4ad194512885dbf96f417701d27eab3d7e0d4ceee6b0b32ab23->enter($__internal_842e73339e16a4ad194512885dbf96f417701d27eab3d7e0d4ceee6b0b32ab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_842e73339e16a4ad194512885dbf96f417701d27eab3d7e0d4ceee6b0b32ab23->leave($__internal_842e73339e16a4ad194512885dbf96f417701d27eab3d7e0d4ceee6b0b32ab23_prof);

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
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
