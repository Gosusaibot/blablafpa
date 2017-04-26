<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_8341f36462f8106665cc01cad26078077743c2fb3f032357701d3856b69d5f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_112edbae557fd3fc48e51eaef869bae0a6fca631edd160af770d8562239cc774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112edbae557fd3fc48e51eaef869bae0a6fca631edd160af770d8562239cc774->enter($__internal_112edbae557fd3fc48e51eaef869bae0a6fca631edd160af770d8562239cc774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_fe696f212e3f32a8261a62af4adfb88f0dd0a06bc707c51d107ee2962c473545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe696f212e3f32a8261a62af4adfb88f0dd0a06bc707c51d107ee2962c473545->enter($__internal_fe696f212e3f32a8261a62af4adfb88f0dd0a06bc707c51d107ee2962c473545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112edbae557fd3fc48e51eaef869bae0a6fca631edd160af770d8562239cc774->leave($__internal_112edbae557fd3fc48e51eaef869bae0a6fca631edd160af770d8562239cc774_prof);

        
        $__internal_fe696f212e3f32a8261a62af4adfb88f0dd0a06bc707c51d107ee2962c473545->leave($__internal_fe696f212e3f32a8261a62af4adfb88f0dd0a06bc707c51d107ee2962c473545_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e2a0901ea17706275fe53ae8f6e8604418eeb265d55b2c300586408c9da114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e2a0901ea17706275fe53ae8f6e8604418eeb265d55b2c300586408c9da114->enter($__internal_d8e2a0901ea17706275fe53ae8f6e8604418eeb265d55b2c300586408c9da114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5bb0820531f1eeed1286ee21d381a04ff797fa672f27548e65093b13f91d781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb0820531f1eeed1286ee21d381a04ff797fa672f27548e65093b13f91d781d->enter($__internal_5bb0820531f1eeed1286ee21d381a04ff797fa672f27548e65093b13f91d781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_5bb0820531f1eeed1286ee21d381a04ff797fa672f27548e65093b13f91d781d->leave($__internal_5bb0820531f1eeed1286ee21d381a04ff797fa672f27548e65093b13f91d781d_prof);

        
        $__internal_d8e2a0901ea17706275fe53ae8f6e8604418eeb265d55b2c300586408c9da114->leave($__internal_d8e2a0901ea17706275fe53ae8f6e8604418eeb265d55b2c300586408c9da114_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
