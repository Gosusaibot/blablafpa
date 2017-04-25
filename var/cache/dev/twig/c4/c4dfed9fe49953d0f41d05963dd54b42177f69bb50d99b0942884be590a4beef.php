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
        $__internal_a62491e9dcefc6cb1ab435d99107e7e43cc8333a2fac952f9650eae1e8c37711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62491e9dcefc6cb1ab435d99107e7e43cc8333a2fac952f9650eae1e8c37711->enter($__internal_a62491e9dcefc6cb1ab435d99107e7e43cc8333a2fac952f9650eae1e8c37711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_309836e781c8904993d8871318d55eb04eca07dd03dace72f29fe848c3776eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309836e781c8904993d8871318d55eb04eca07dd03dace72f29fe848c3776eac->enter($__internal_309836e781c8904993d8871318d55eb04eca07dd03dace72f29fe848c3776eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62491e9dcefc6cb1ab435d99107e7e43cc8333a2fac952f9650eae1e8c37711->leave($__internal_a62491e9dcefc6cb1ab435d99107e7e43cc8333a2fac952f9650eae1e8c37711_prof);

        
        $__internal_309836e781c8904993d8871318d55eb04eca07dd03dace72f29fe848c3776eac->leave($__internal_309836e781c8904993d8871318d55eb04eca07dd03dace72f29fe848c3776eac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9fea7a9028411d62622b7297265b0102ca04e82a2606af2359e51b32044bd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fea7a9028411d62622b7297265b0102ca04e82a2606af2359e51b32044bd91->enter($__internal_a9fea7a9028411d62622b7297265b0102ca04e82a2606af2359e51b32044bd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4add179f6d20dda0193d28ba3cce5c793b395e7521c08503a9611969d993961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4add179f6d20dda0193d28ba3cce5c793b395e7521c08503a9611969d993961->enter($__internal_d4add179f6d20dda0193d28ba3cce5c793b395e7521c08503a9611969d993961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d4add179f6d20dda0193d28ba3cce5c793b395e7521c08503a9611969d993961->leave($__internal_d4add179f6d20dda0193d28ba3cce5c793b395e7521c08503a9611969d993961_prof);

        
        $__internal_a9fea7a9028411d62622b7297265b0102ca04e82a2606af2359e51b32044bd91->leave($__internal_a9fea7a9028411d62622b7297265b0102ca04e82a2606af2359e51b32044bd91_prof);

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
