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
        $__internal_16fc4752d220c3ab81e490c2e8b891b7071ec335ec2751cd968d20faf1806f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fc4752d220c3ab81e490c2e8b891b7071ec335ec2751cd968d20faf1806f0e->enter($__internal_16fc4752d220c3ab81e490c2e8b891b7071ec335ec2751cd968d20faf1806f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_30abdb3bbf7a0cb8492671de431f32dc65e3905ca13c16623dfc20ee9f1dd892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30abdb3bbf7a0cb8492671de431f32dc65e3905ca13c16623dfc20ee9f1dd892->enter($__internal_30abdb3bbf7a0cb8492671de431f32dc65e3905ca13c16623dfc20ee9f1dd892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_16fc4752d220c3ab81e490c2e8b891b7071ec335ec2751cd968d20faf1806f0e->leave($__internal_16fc4752d220c3ab81e490c2e8b891b7071ec335ec2751cd968d20faf1806f0e_prof);

        
        $__internal_30abdb3bbf7a0cb8492671de431f32dc65e3905ca13c16623dfc20ee9f1dd892->leave($__internal_30abdb3bbf7a0cb8492671de431f32dc65e3905ca13c16623dfc20ee9f1dd892_prof);

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
