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
        $__internal_8e84b8d14a9839ffd813abcbb5a614a66063d96afeaf06a50b292b3d434086e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e84b8d14a9839ffd813abcbb5a614a66063d96afeaf06a50b292b3d434086e8->enter($__internal_8e84b8d14a9839ffd813abcbb5a614a66063d96afeaf06a50b292b3d434086e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_97351486902e197b3d7f229f9d43207de5b6b43319cd517d78c0500243781ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97351486902e197b3d7f229f9d43207de5b6b43319cd517d78c0500243781ae0->enter($__internal_97351486902e197b3d7f229f9d43207de5b6b43319cd517d78c0500243781ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8e84b8d14a9839ffd813abcbb5a614a66063d96afeaf06a50b292b3d434086e8->leave($__internal_8e84b8d14a9839ffd813abcbb5a614a66063d96afeaf06a50b292b3d434086e8_prof);

        
        $__internal_97351486902e197b3d7f229f9d43207de5b6b43319cd517d78c0500243781ae0->leave($__internal_97351486902e197b3d7f229f9d43207de5b6b43319cd517d78c0500243781ae0_prof);

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
