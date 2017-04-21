<?php

/* CoreSphereConsoleBundle:Console:htmlTemplates.html.twig */
class __TwigTemplate_cb064603387b8213ad170ddd0c8f9ad4810b2815649779830ab506f20a99a36b extends Twig_Template
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
        $__internal_21bd45a709f259d445cf85eea7456701b786777c3d0790c5473467fbfeb13dec = $this->env->getExtension("native_profiler");
        $__internal_21bd45a709f259d445cf85eea7456701b786777c3d0790c5473467fbfeb13dec->enter($__internal_21bd45a709f259d445cf85eea7456701b786777c3d0790c5473467fbfeb13dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

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
        
        $__internal_21bd45a709f259d445cf85eea7456701b786777c3d0790c5473467fbfeb13dec->leave($__internal_21bd45a709f259d445cf85eea7456701b786777c3d0790c5473467fbfeb13dec_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig";
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
