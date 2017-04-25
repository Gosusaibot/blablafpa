<?php

/* CoreSphereConsoleBundle:Console:htmlTemplates.html.twig */
class __TwigTemplate_fbbb47a1e89224e44ac0de653739f3bd5b33ed4563c84eebd7f99a90fe892da3 extends Twig_Template
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
        $__internal_13f0ac003fc8862769e67cde10edf859d36ed762e4f024b11d7a1874cb22998c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f0ac003fc8862769e67cde10edf859d36ed762e4f024b11d7a1874cb22998c->enter($__internal_13f0ac003fc8862769e67cde10edf859d36ed762e4f024b11d7a1874cb22998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        $__internal_68a38b53e606c0554e9fd16ff1cc6605840f1716a7df9824bc57d8c3baeb2a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a38b53e606c0554e9fd16ff1cc6605840f1716a7df9824bc57d8c3baeb2a8b->enter($__internal_68a38b53e606c0554e9fd16ff1cc6605840f1716a7df9824bc57d8c3baeb2a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

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
        
        $__internal_13f0ac003fc8862769e67cde10edf859d36ed762e4f024b11d7a1874cb22998c->leave($__internal_13f0ac003fc8862769e67cde10edf859d36ed762e4f024b11d7a1874cb22998c_prof);

        
        $__internal_68a38b53e606c0554e9fd16ff1cc6605840f1716a7df9824bc57d8c3baeb2a8b->leave($__internal_68a38b53e606c0554e9fd16ff1cc6605840f1716a7df9824bc57d8c3baeb2a8b_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"template_console_command\">
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
", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/Console/htmlTemplates.html.twig");
    }
}
