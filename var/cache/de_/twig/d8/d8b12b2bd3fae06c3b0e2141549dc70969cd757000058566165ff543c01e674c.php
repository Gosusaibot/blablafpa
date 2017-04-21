<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_e11a347153a9ee4985395b2cc76b14f593583d1548e360acfc58a2af4f35afe3 extends Twig_Template
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
        $__internal_1c5deefc965a0ab985fc9a4ef8501b87389d095f4c6d08b7b5c9a62bc8a6914b = $this->env->getExtension("native_profiler");
        $__internal_1c5deefc965a0ab985fc9a4ef8501b87389d095f4c6d08b7b5c9a62bc8a6914b->enter($__internal_1c5deefc965a0ab985fc9a4ef8501b87389d095f4c6d08b7b5c9a62bc8a6914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) ? $context["working_dir"] : $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "html", null, true);
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
        
        $__internal_1c5deefc965a0ab985fc9a4ef8501b87389d095f4c6d08b7b5c9a62bc8a6914b->leave($__internal_1c5deefc965a0ab985fc9a4ef8501b87389d095f4c6d08b7b5c9a62bc8a6914b_prof);

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
        return array (  35 => 5,  29 => 4,  22 => 1,);
    }
}
/* <h1>{{ 'coresphere_console.headline.index'|trans }}</h1>*/
/* <div id="coresphere_consolebundle_console" class="console">*/
/*     <div class="console_info_bar">*/
/*         {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>*/
/*         <span class="console_env_info">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>*/
/*     </div>*/
/*     <div class="console_log_container">*/
/*         <ol class="console_log">*/
/* */
/*         </ol>*/
/*     </div>*/
/*     <div class="console_prompt">*/
/*         <div contenteditable="true" class="console_input"></div>*/
/*         <div class="console_input_background"></div>*/
/*     </div>*/
/*     <div class="console_suggestions"></div>*/
/* </div>*/
/* */
