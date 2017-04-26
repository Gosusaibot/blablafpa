<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_f3da31838b7f0f9f0b9356ba798e03984da22c19090892d721f8b79aa25a8d95 extends Twig_Template
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
        $__internal_cdc4a7395299620ec60d4d84db8a4ba6cc9e9bd3f7542ee4115700c37039c4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc4a7395299620ec60d4d84db8a4ba6cc9e9bd3f7542ee4115700c37039c4d2->enter($__internal_cdc4a7395299620ec60d4d84db8a4ba6cc9e9bd3f7542ee4115700c37039c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_92133304a50a50fb7834171affeed61f376abf93bd8b3ca56f3b6f0c7983bf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92133304a50a50fb7834171affeed61f376abf93bd8b3ca56f3b6f0c7983bf85->enter($__internal_92133304a50a50fb7834171affeed61f376abf93bd8b3ca56f3b6f0c7983bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cdc4a7395299620ec60d4d84db8a4ba6cc9e9bd3f7542ee4115700c37039c4d2->leave($__internal_cdc4a7395299620ec60d4d84db8a4ba6cc9e9bd3f7542ee4115700c37039c4d2_prof);

        
        $__internal_92133304a50a50fb7834171affeed61f376abf93bd8b3ca56f3b6f0c7983bf85->leave($__internal_92133304a50a50fb7834171affeed61f376abf93bd8b3ca56f3b6f0c7983bf85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
