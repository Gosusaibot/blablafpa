<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_a16c5a5c10468f1b1a90f31ff467b7018b9433d675dd4a5a9ae0ea2e886b5e18 extends Twig_Template
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
        $__internal_66730d44c7debe3459eac8630f3cb60f75ca54f411b954531d346c8bfc44ff24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66730d44c7debe3459eac8630f3cb60f75ca54f411b954531d346c8bfc44ff24->enter($__internal_66730d44c7debe3459eac8630f3cb60f75ca54f411b954531d346c8bfc44ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        $__internal_16ce1a1aee89802df01da92fbb4534affd784cbfc48c5ce9c952474567fb8cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ce1a1aee89802df01da92fbb4534affd784cbfc48c5ce9c952474567fb8cba->enter($__internal_16ce1a1aee89802df01da92fbb4534affd784cbfc48c5ce9c952474567fb8cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) || array_key_exists("working_dir", $context) ? $context["working_dir"] : (function () { throw new Twig_Error_Runtime('Variable "working_dir" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_66730d44c7debe3459eac8630f3cb60f75ca54f411b954531d346c8bfc44ff24->leave($__internal_66730d44c7debe3459eac8630f3cb60f75ca54f411b954531d346c8bfc44ff24_prof);

        
        $__internal_16ce1a1aee89802df01da92fbb4534affd784cbfc48c5ce9c952474567fb8cba->leave($__internal_16ce1a1aee89802df01da92fbb4534affd784cbfc48c5ce9c952474567fb8cba_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "CoreSphereConsoleBundle:Console:terminal.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/Console/terminal.html.twig");
    }
}
