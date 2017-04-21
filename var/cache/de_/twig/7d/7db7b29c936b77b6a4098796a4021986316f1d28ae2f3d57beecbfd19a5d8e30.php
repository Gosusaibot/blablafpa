<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c90f103e3efe8451b117a9fa2baf127ae704b3a5d76aa525eed69e9f82e7fc30 extends Twig_Template
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
        $__internal_1d1635a524acc7be1599391ebd14722335e54258b694be1f1e6e90586fb8331f = $this->env->getExtension("native_profiler");
        $__internal_1d1635a524acc7be1599391ebd14722335e54258b694be1f1e6e90586fb8331f->enter($__internal_1d1635a524acc7be1599391ebd14722335e54258b694be1f1e6e90586fb8331f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d1635a524acc7be1599391ebd14722335e54258b694be1f1e6e90586fb8331f->leave($__internal_1d1635a524acc7be1599391ebd14722335e54258b694be1f1e6e90586fb8331f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
