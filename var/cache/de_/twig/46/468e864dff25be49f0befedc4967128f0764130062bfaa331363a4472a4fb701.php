<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_60a5d4cac6e1b6e010b19d9bc00cfb800b8f1862b1f12ff764b3b3e950c391d6 extends Twig_Template
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
        $__internal_24017a4f733e90dbb920a15a1f02103d57b288b2e6866233aec238a917258783 = $this->env->getExtension("native_profiler");
        $__internal_24017a4f733e90dbb920a15a1f02103d57b288b2e6866233aec238a917258783->enter($__internal_24017a4f733e90dbb920a15a1f02103d57b288b2e6866233aec238a917258783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_24017a4f733e90dbb920a15a1f02103d57b288b2e6866233aec238a917258783->leave($__internal_24017a4f733e90dbb920a15a1f02103d57b288b2e6866233aec238a917258783_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
