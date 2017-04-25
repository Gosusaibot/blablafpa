<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3e109b5dabfafb4f6e81be02249be195e26780b0febad944025e1735aac7d29c extends Twig_Template
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
        $__internal_aa7ccbdb4ccaf4dedaaaee7e58255090dbe345bed9ea9be5e9cf29c31d5c47e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7ccbdb4ccaf4dedaaaee7e58255090dbe345bed9ea9be5e9cf29c31d5c47e6->enter($__internal_aa7ccbdb4ccaf4dedaaaee7e58255090dbe345bed9ea9be5e9cf29c31d5c47e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_08d6b3fbe490a6a127905422ea3ef493f3fb50464ebb68eabf6330a9834197ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d6b3fbe490a6a127905422ea3ef493f3fb50464ebb68eabf6330a9834197ab->enter($__internal_08d6b3fbe490a6a127905422ea3ef493f3fb50464ebb68eabf6330a9834197ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_aa7ccbdb4ccaf4dedaaaee7e58255090dbe345bed9ea9be5e9cf29c31d5c47e6->leave($__internal_aa7ccbdb4ccaf4dedaaaee7e58255090dbe345bed9ea9be5e9cf29c31d5c47e6_prof);

        
        $__internal_08d6b3fbe490a6a127905422ea3ef493f3fb50464ebb68eabf6330a9834197ab->leave($__internal_08d6b3fbe490a6a127905422ea3ef493f3fb50464ebb68eabf6330a9834197ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
