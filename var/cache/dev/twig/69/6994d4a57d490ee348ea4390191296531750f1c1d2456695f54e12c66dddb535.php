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
        $__internal_818033368afef78fd5b43b0592841fba553c9e7a1673887e105d6eae7898968c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818033368afef78fd5b43b0592841fba553c9e7a1673887e105d6eae7898968c->enter($__internal_818033368afef78fd5b43b0592841fba553c9e7a1673887e105d6eae7898968c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_7b376ec58ef7e2035d851dc090331a4d0876f31f7fa0b9ffd257c457808c5c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b376ec58ef7e2035d851dc090331a4d0876f31f7fa0b9ffd257c457808c5c7c->enter($__internal_7b376ec58ef7e2035d851dc090331a4d0876f31f7fa0b9ffd257c457808c5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_818033368afef78fd5b43b0592841fba553c9e7a1673887e105d6eae7898968c->leave($__internal_818033368afef78fd5b43b0592841fba553c9e7a1673887e105d6eae7898968c_prof);

        
        $__internal_7b376ec58ef7e2035d851dc090331a4d0876f31f7fa0b9ffd257c457808c5c7c->leave($__internal_7b376ec58ef7e2035d851dc090331a4d0876f31f7fa0b9ffd257c457808c5c7c_prof);

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
