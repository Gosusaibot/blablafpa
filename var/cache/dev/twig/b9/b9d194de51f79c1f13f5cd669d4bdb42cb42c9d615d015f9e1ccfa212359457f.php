<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f25415a9a2168a33da81a3b506745a42200260c389ad942295718040b46c1901 extends Twig_Template
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
        $__internal_19549a6a3e0e905a25f98fb6a114e68f6eb5c3363dc2354acdf5dae1ebc2704f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19549a6a3e0e905a25f98fb6a114e68f6eb5c3363dc2354acdf5dae1ebc2704f->enter($__internal_19549a6a3e0e905a25f98fb6a114e68f6eb5c3363dc2354acdf5dae1ebc2704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2716817babc6628d7634fb6a90768701b8ad65f7270bc150d916ed2e081b1194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2716817babc6628d7634fb6a90768701b8ad65f7270bc150d916ed2e081b1194->enter($__internal_2716817babc6628d7634fb6a90768701b8ad65f7270bc150d916ed2e081b1194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_19549a6a3e0e905a25f98fb6a114e68f6eb5c3363dc2354acdf5dae1ebc2704f->leave($__internal_19549a6a3e0e905a25f98fb6a114e68f6eb5c3363dc2354acdf5dae1ebc2704f_prof);

        
        $__internal_2716817babc6628d7634fb6a90768701b8ad65f7270bc150d916ed2e081b1194->leave($__internal_2716817babc6628d7634fb6a90768701b8ad65f7270bc150d916ed2e081b1194_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
