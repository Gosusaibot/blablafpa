<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_898e65d044920824ab74c0c95be1acef9164169de08e2b885dd6ba04c67d0683 extends Twig_Template
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
        $__internal_679cfca8cca0244e73dd10dae0ea14e2690cb79eb944c123bcd8364f1a3179bc = $this->env->getExtension("native_profiler");
        $__internal_679cfca8cca0244e73dd10dae0ea14e2690cb79eb944c123bcd8364f1a3179bc->enter($__internal_679cfca8cca0244e73dd10dae0ea14e2690cb79eb944c123bcd8364f1a3179bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_679cfca8cca0244e73dd10dae0ea14e2690cb79eb944c123bcd8364f1a3179bc->leave($__internal_679cfca8cca0244e73dd10dae0ea14e2690cb79eb944c123bcd8364f1a3179bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
