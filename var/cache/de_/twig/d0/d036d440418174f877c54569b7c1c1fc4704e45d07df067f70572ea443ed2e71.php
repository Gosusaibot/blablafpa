<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_5b19ed7ed6c7621a4298ea361ebd8a381a53f6493426d3b2031ec65f0baf4a5e extends Twig_Template
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
        $__internal_1fda19acb5cb819bcef1f4393e10455b16cc4a9477823bbf289f0650829b6c58 = $this->env->getExtension("native_profiler");
        $__internal_1fda19acb5cb819bcef1f4393e10455b16cc4a9477823bbf289f0650829b6c58->enter($__internal_1fda19acb5cb819bcef1f4393e10455b16cc4a9477823bbf289f0650829b6c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_1fda19acb5cb819bcef1f4393e10455b16cc4a9477823bbf289f0650829b6c58->leave($__internal_1fda19acb5cb819bcef1f4393e10455b16cc4a9477823bbf289f0650829b6c58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1065a32a52c180fdfe3e4eb75057a14eee8f96ce61f3ed1c0d8bf34effedabcc = $this->env->getExtension("native_profiler");
        $__internal_1065a32a52c180fdfe3e4eb75057a14eee8f96ce61f3ed1c0d8bf34effedabcc->enter($__internal_1065a32a52c180fdfe3e4eb75057a14eee8f96ce61f3ed1c0d8bf34effedabcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_1065a32a52c180fdfe3e4eb75057a14eee8f96ce61f3ed1c0d8bf34effedabcc->leave($__internal_1065a32a52c180fdfe3e4eb75057a14eee8f96ce61f3ed1c0d8bf34effedabcc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35da2a4a58c85a47a5e02792efb259a0a8cbc26347e5d6e2270b28891d3f4b2f = $this->env->getExtension("native_profiler");
        $__internal_35da2a4a58c85a47a5e02792efb259a0a8cbc26347e5d6e2270b28891d3f4b2f->enter($__internal_35da2a4a58c85a47a5e02792efb259a0a8cbc26347e5d6e2270b28891d3f4b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_35da2a4a58c85a47a5e02792efb259a0a8cbc26347e5d6e2270b28891d3f4b2f->leave($__internal_35da2a4a58c85a47a5e02792efb259a0a8cbc26347e5d6e2270b28891d3f4b2f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f72c2fb380b32bf60285ea0088758c741e236b8109926ab3f313bc1b3a6736cf = $this->env->getExtension("native_profiler");
        $__internal_f72c2fb380b32bf60285ea0088758c741e236b8109926ab3f313bc1b3a6736cf->enter($__internal_f72c2fb380b32bf60285ea0088758c741e236b8109926ab3f313bc1b3a6736cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_f72c2fb380b32bf60285ea0088758c741e236b8109926ab3f313bc1b3a6736cf->leave($__internal_f72c2fb380b32bf60285ea0088758c741e236b8109926ab3f313bc1b3a6736cf_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94e28e4901aa2142128575f30655246e1a744b17cd45491646a2b0f11556ecbd = $this->env->getExtension("native_profiler");
        $__internal_94e28e4901aa2142128575f30655246e1a744b17cd45491646a2b0f11556ecbd->enter($__internal_94e28e4901aa2142128575f30655246e1a744b17cd45491646a2b0f11556ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_94e28e4901aa2142128575f30655246e1a744b17cd45491646a2b0f11556ecbd->leave($__internal_94e28e4901aa2142128575f30655246e1a744b17cd45491646a2b0f11556ecbd_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
