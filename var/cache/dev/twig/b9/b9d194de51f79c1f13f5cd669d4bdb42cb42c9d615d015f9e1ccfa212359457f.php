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
        $__internal_3a53679d2e1adb28b1bb566fd2304a101a290bd59f071bc44d76c4cd17ceed79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a53679d2e1adb28b1bb566fd2304a101a290bd59f071bc44d76c4cd17ceed79->enter($__internal_3a53679d2e1adb28b1bb566fd2304a101a290bd59f071bc44d76c4cd17ceed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7cb3f7cf02153364f6612726fe7e1473cd1b7366dd39c19c77ed1857e149f9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb3f7cf02153364f6612726fe7e1473cd1b7366dd39c19c77ed1857e149f9ab->enter($__internal_7cb3f7cf02153364f6612726fe7e1473cd1b7366dd39c19c77ed1857e149f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3a53679d2e1adb28b1bb566fd2304a101a290bd59f071bc44d76c4cd17ceed79->leave($__internal_3a53679d2e1adb28b1bb566fd2304a101a290bd59f071bc44d76c4cd17ceed79_prof);

        
        $__internal_7cb3f7cf02153364f6612726fe7e1473cd1b7366dd39c19c77ed1857e149f9ab->leave($__internal_7cb3f7cf02153364f6612726fe7e1473cd1b7366dd39c19c77ed1857e149f9ab_prof);

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
