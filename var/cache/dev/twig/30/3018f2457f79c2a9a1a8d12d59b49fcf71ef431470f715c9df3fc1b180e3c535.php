<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d4a5c2652aefe8f7e386939e0696552fdb0bb5537c431ac70e1348d0d7460a12 extends Twig_Template
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
        $__internal_a5d9d52297497dbddd124bbd3e877b84434915f0b6876be1c21be339f04d05cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d9d52297497dbddd124bbd3e877b84434915f0b6876be1c21be339f04d05cf->enter($__internal_a5d9d52297497dbddd124bbd3e877b84434915f0b6876be1c21be339f04d05cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2f6a28894606eea7662edf0fd3de3bcb0cadc1e2d3211687a6d25c55cdb8dfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6a28894606eea7662edf0fd3de3bcb0cadc1e2d3211687a6d25c55cdb8dfa1->enter($__internal_2f6a28894606eea7662edf0fd3de3bcb0cadc1e2d3211687a6d25c55cdb8dfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a5d9d52297497dbddd124bbd3e877b84434915f0b6876be1c21be339f04d05cf->leave($__internal_a5d9d52297497dbddd124bbd3e877b84434915f0b6876be1c21be339f04d05cf_prof);

        
        $__internal_2f6a28894606eea7662edf0fd3de3bcb0cadc1e2d3211687a6d25c55cdb8dfa1->leave($__internal_2f6a28894606eea7662edf0fd3de3bcb0cadc1e2d3211687a6d25c55cdb8dfa1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
