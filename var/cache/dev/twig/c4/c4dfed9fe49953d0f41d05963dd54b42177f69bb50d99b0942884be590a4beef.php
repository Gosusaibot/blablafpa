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
        $__internal_fb4e473a3807f028b7708c9007e37e14d7c8b3a398b1ebb64b5a2301fbdc2228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4e473a3807f028b7708c9007e37e14d7c8b3a398b1ebb64b5a2301fbdc2228->enter($__internal_fb4e473a3807f028b7708c9007e37e14d7c8b3a398b1ebb64b5a2301fbdc2228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_6863ea86ce68e7b7d746d1c4a756b4cd66839d7b27ad323cea8c35c008296fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6863ea86ce68e7b7d746d1c4a756b4cd66839d7b27ad323cea8c35c008296fb3->enter($__internal_6863ea86ce68e7b7d746d1c4a756b4cd66839d7b27ad323cea8c35c008296fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4e473a3807f028b7708c9007e37e14d7c8b3a398b1ebb64b5a2301fbdc2228->leave($__internal_fb4e473a3807f028b7708c9007e37e14d7c8b3a398b1ebb64b5a2301fbdc2228_prof);

        
        $__internal_6863ea86ce68e7b7d746d1c4a756b4cd66839d7b27ad323cea8c35c008296fb3->leave($__internal_6863ea86ce68e7b7d746d1c4a756b4cd66839d7b27ad323cea8c35c008296fb3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e862c92bc3810669a0e2b0904c78d21df26075fd916b26798e7b636d19072432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e862c92bc3810669a0e2b0904c78d21df26075fd916b26798e7b636d19072432->enter($__internal_e862c92bc3810669a0e2b0904c78d21df26075fd916b26798e7b636d19072432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f61a63600763e363b4e55350fc6530570d0f13634a447e1939dbd232999a6c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61a63600763e363b4e55350fc6530570d0f13634a447e1939dbd232999a6c7e->enter($__internal_f61a63600763e363b4e55350fc6530570d0f13634a447e1939dbd232999a6c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f61a63600763e363b4e55350fc6530570d0f13634a447e1939dbd232999a6c7e->leave($__internal_f61a63600763e363b4e55350fc6530570d0f13634a447e1939dbd232999a6c7e_prof);

        
        $__internal_e862c92bc3810669a0e2b0904c78d21df26075fd916b26798e7b636d19072432->leave($__internal_e862c92bc3810669a0e2b0904c78d21df26075fd916b26798e7b636d19072432_prof);

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
