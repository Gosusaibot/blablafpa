<?php

/* @Twig/Exception/traces.txt.twig */
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
        $__internal_c35a411cb026e4c91ff6812d4f6b7176c5c3faeb9e92b3de61132b46ef05843a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35a411cb026e4c91ff6812d4f6b7176c5c3faeb9e92b3de61132b46ef05843a->enter($__internal_c35a411cb026e4c91ff6812d4f6b7176c5c3faeb9e92b3de61132b46ef05843a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_fb473dfb340f760f94251ffc0bc1156426c9b88d0f7439eb752cb7bf140e6532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb473dfb340f760f94251ffc0bc1156426c9b88d0f7439eb752cb7bf140e6532->enter($__internal_fb473dfb340f760f94251ffc0bc1156426c9b88d0f7439eb752cb7bf140e6532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c35a411cb026e4c91ff6812d4f6b7176c5c3faeb9e92b3de61132b46ef05843a->leave($__internal_c35a411cb026e4c91ff6812d4f6b7176c5c3faeb9e92b3de61132b46ef05843a_prof);

        
        $__internal_fb473dfb340f760f94251ffc0bc1156426c9b88d0f7439eb752cb7bf140e6532->leave($__internal_fb473dfb340f760f94251ffc0bc1156426c9b88d0f7439eb752cb7bf140e6532_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
