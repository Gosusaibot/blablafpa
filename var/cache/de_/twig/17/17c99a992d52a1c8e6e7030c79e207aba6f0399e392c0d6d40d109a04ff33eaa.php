<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6e5eb6f6c281995515a43776a5abceb35f7e0df91df2424d15d1c7716b065095 extends Twig_Template
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
        $__internal_f322e4884333eed92c5a16fd2d2dcad46367cd4eab7aa8a04342cf3b7db148d4 = $this->env->getExtension("native_profiler");
        $__internal_f322e4884333eed92c5a16fd2d2dcad46367cd4eab7aa8a04342cf3b7db148d4->enter($__internal_f322e4884333eed92c5a16fd2d2dcad46367cd4eab7aa8a04342cf3b7db148d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_f322e4884333eed92c5a16fd2d2dcad46367cd4eab7aa8a04342cf3b7db148d4->leave($__internal_f322e4884333eed92c5a16fd2d2dcad46367cd4eab7aa8a04342cf3b7db148d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
