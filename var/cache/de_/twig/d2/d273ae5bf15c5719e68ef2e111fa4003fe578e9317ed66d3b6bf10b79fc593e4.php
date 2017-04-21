<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2a9880b95a47be7fb032faae50bb92a4aca26b66b2c6e5cc6f62cc8edb0a8715 extends Twig_Template
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
        $__internal_4fec55f37828388d56c535a6dc40a00bbe6f72b108c9d805573bb0381d43851c = $this->env->getExtension("native_profiler");
        $__internal_4fec55f37828388d56c535a6dc40a00bbe6f72b108c9d805573bb0381d43851c->enter($__internal_4fec55f37828388d56c535a6dc40a00bbe6f72b108c9d805573bb0381d43851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4fec55f37828388d56c535a6dc40a00bbe6f72b108c9d805573bb0381d43851c->leave($__internal_4fec55f37828388d56c535a6dc40a00bbe6f72b108c9d805573bb0381d43851c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
