<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_926d9ad9a4c89503d510f6205f5a68e39e14ff80a13fb2240ebbb1ff5b4bb30d extends Twig_Template
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
        $__internal_2ae4316d1e45ac6eade3ccece09e3b743cecc6f0559d099bd743550b5e28eb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae4316d1e45ac6eade3ccece09e3b743cecc6f0559d099bd743550b5e28eb72->enter($__internal_2ae4316d1e45ac6eade3ccece09e3b743cecc6f0559d099bd743550b5e28eb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_dd84f39c57e976f4e27ec7c4bc80c46262fa4d13c5ac68b7acccd59eab56bcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd84f39c57e976f4e27ec7c4bc80c46262fa4d13c5ac68b7acccd59eab56bcb4->enter($__internal_dd84f39c57e976f4e27ec7c4bc80c46262fa4d13c5ac68b7acccd59eab56bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_2ae4316d1e45ac6eade3ccece09e3b743cecc6f0559d099bd743550b5e28eb72->leave($__internal_2ae4316d1e45ac6eade3ccece09e3b743cecc6f0559d099bd743550b5e28eb72_prof);

        
        $__internal_dd84f39c57e976f4e27ec7c4bc80c46262fa4d13c5ac68b7acccd59eab56bcb4->leave($__internal_dd84f39c57e976f4e27ec7c4bc80c46262fa4d13c5ac68b7acccd59eab56bcb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
