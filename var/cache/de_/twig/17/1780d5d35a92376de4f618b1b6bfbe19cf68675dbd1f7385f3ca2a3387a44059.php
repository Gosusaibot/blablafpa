<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_f1d312fb309f8aaaff2c5bec8c02db0ac3f776897f07d53f95fe811c1f4a7a8c extends Twig_Template
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
        $__internal_f76dfd545301979147257f1dfb41a9596d9dfdfcce67c1614eef3f4254aeb3ab = $this->env->getExtension("native_profiler");
        $__internal_f76dfd545301979147257f1dfb41a9596d9dfdfcce67c1614eef3f4254aeb3ab->enter($__internal_f76dfd545301979147257f1dfb41a9596d9dfdfcce67c1614eef3f4254aeb3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76dfd545301979147257f1dfb41a9596d9dfdfcce67c1614eef3f4254aeb3ab->leave($__internal_f76dfd545301979147257f1dfb41a9596d9dfdfcce67c1614eef3f4254aeb3ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ef47c06262b58671b39897b5e407ee2540ecc1136b0e3019a5cf8c76d1b6677 = $this->env->getExtension("native_profiler");
        $__internal_3ef47c06262b58671b39897b5e407ee2540ecc1136b0e3019a5cf8c76d1b6677->enter($__internal_3ef47c06262b58671b39897b5e407ee2540ecc1136b0e3019a5cf8c76d1b6677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("console");
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
        
        $__internal_3ef47c06262b58671b39897b5e407ee2540ecc1136b0e3019a5cf8c76d1b6677->leave($__internal_3ef47c06262b58671b39897b5e407ee2540ecc1136b0e3019a5cf8c76d1b6677_prof);

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
        return array (  60 => 14,  57 => 13,  54 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <a href="{{ path('console') }}" class="coresphere_console_popover">*/
/*             <img width="13" height="28" alt="Console" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ*/
/* bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF*/
/* rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk*/
/* UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC"/>*/
/*         </a>*/
/*     {% endset %}*/
/*     {% set text %}Console{% endset %}*/
/* */
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}*/
/* {% endblock %}*/
/* */