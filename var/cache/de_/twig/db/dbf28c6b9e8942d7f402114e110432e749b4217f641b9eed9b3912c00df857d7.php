<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7277bfc7fb1ad405af57d0c9aa4b80e1e13cfb35da10d5d030c6a21aed9b85e5 extends Twig_Template
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
        $__internal_a45bbd648c3d9de6377f30a9203fe54081f99ea8fb701bdf8954d864a15b5fb8 = $this->env->getExtension("native_profiler");
        $__internal_a45bbd648c3d9de6377f30a9203fe54081f99ea8fb701bdf8954d864a15b5fb8->enter($__internal_a45bbd648c3d9de6377f30a9203fe54081f99ea8fb701bdf8954d864a15b5fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a45bbd648c3d9de6377f30a9203fe54081f99ea8fb701bdf8954d864a15b5fb8->leave($__internal_a45bbd648c3d9de6377f30a9203fe54081f99ea8fb701bdf8954d864a15b5fb8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
