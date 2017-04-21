<?php

/* @CoreSphereConsole/Console/htmlTemplates.html.twig */
class __TwigTemplate_f787cc5a20bcea0a54ca5602bed86b20a40fa57e206bfcad1f14293fa838ea78 extends Twig_Template
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
        $__internal_8a985bbaef2163d7c4139b6a29494e775bdde0e3eb57af649622361a46ff5f18 = $this->env->getExtension("native_profiler");
        $__internal_8a985bbaef2163d7c4139b6a29494e775bdde0e3eb57af649622361a46ff5f18->enter($__internal_8a985bbaef2163d7c4139b6a29494e775bdde0e3eb57af649622361a46ff5f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/htmlTemplates.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
";
        
        $__internal_8a985bbaef2163d7c4139b6a29494e775bdde0e3eb57af649622361a46ff5f18->leave($__internal_8a985bbaef2163d7c4139b6a29494e775bdde0e3eb57af649622361a46ff5f18_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/htmlTemplates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script type="text/html" id="template_console_command">*/
/*     <li>*/
/*         <div class="console_log_input console_%status%">%command%%environment%</div>*/
/*         <div class="console_log_output">%output%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_environment">*/
/*     <span class="console_env_info">%label%: <strong>%environment%</strong></span>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_error">*/
/*     <li class="console_error">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">[%message%] %error%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_loading">*/
/*     <li class="console_loading">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">%message%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_suggestion_list">*/
/*     <h2 class="console_suggestion_head">%head%</h2>*/
/*     <ul>%suggestions%</ul>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_highlight">*/
/*     <strong class="match">%word%</strong>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item_active">*/
/*     <li class="%state%">%suggestion%</li>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item">*/
/*     <li>%suggestion%</li>*/
/* </script>*/
/* */
