<?php

/* ::base.html.twig */
class __TwigTemplate_f47c3062cf058e3f9541c23021d4dea87ba65be4652549ddd8c269597866b482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f605f150490c8743094b82f85e310c56ecdf68695c1fa297e033acdf7c993c6 = $this->env->getExtension("native_profiler");
        $__internal_2f605f150490c8743094b82f85e310c56ecdf68695c1fa297e033acdf7c993c6->enter($__internal_2f605f150490c8743094b82f85e310c56ecdf68695c1fa297e033acdf7c993c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2f605f150490c8743094b82f85e310c56ecdf68695c1fa297e033acdf7c993c6->leave($__internal_2f605f150490c8743094b82f85e310c56ecdf68695c1fa297e033acdf7c993c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7097aef21b4aabbf75003b27247bae9a5fb9f338dc72434751a6f144cd63029 = $this->env->getExtension("native_profiler");
        $__internal_a7097aef21b4aabbf75003b27247bae9a5fb9f338dc72434751a6f144cd63029->enter($__internal_a7097aef21b4aabbf75003b27247bae9a5fb9f338dc72434751a6f144cd63029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7097aef21b4aabbf75003b27247bae9a5fb9f338dc72434751a6f144cd63029->leave($__internal_a7097aef21b4aabbf75003b27247bae9a5fb9f338dc72434751a6f144cd63029_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_600a458db78ebce9f2788c228ae7578fbfe0485fe045186a320039b83e403ac3 = $this->env->getExtension("native_profiler");
        $__internal_600a458db78ebce9f2788c228ae7578fbfe0485fe045186a320039b83e403ac3->enter($__internal_600a458db78ebce9f2788c228ae7578fbfe0485fe045186a320039b83e403ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_600a458db78ebce9f2788c228ae7578fbfe0485fe045186a320039b83e403ac3->leave($__internal_600a458db78ebce9f2788c228ae7578fbfe0485fe045186a320039b83e403ac3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a6c6773e8be0af5ea19d3229358eb7ba707e0c5b1c658c1609379ecf740bdc = $this->env->getExtension("native_profiler");
        $__internal_d0a6c6773e8be0af5ea19d3229358eb7ba707e0c5b1c658c1609379ecf740bdc->enter($__internal_d0a6c6773e8be0af5ea19d3229358eb7ba707e0c5b1c658c1609379ecf740bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0a6c6773e8be0af5ea19d3229358eb7ba707e0c5b1c658c1609379ecf740bdc->leave($__internal_d0a6c6773e8be0af5ea19d3229358eb7ba707e0c5b1c658c1609379ecf740bdc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed3b8cc44169c3e56a51b1a75eceab982a1c622288194f8776522082019f8b27 = $this->env->getExtension("native_profiler");
        $__internal_ed3b8cc44169c3e56a51b1a75eceab982a1c622288194f8776522082019f8b27->enter($__internal_ed3b8cc44169c3e56a51b1a75eceab982a1c622288194f8776522082019f8b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed3b8cc44169c3e56a51b1a75eceab982a1c622288194f8776522082019f8b27->leave($__internal_ed3b8cc44169c3e56a51b1a75eceab982a1c622288194f8776522082019f8b27_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
