<?php

/* @CoreSphereConsole/base.html.twig */
class __TwigTemplate_6a1b6aed620cf7b6581dec83de152e892fabae37700533fcbda6e7290a7db884 extends Twig_Template
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
        $__internal_655b16823adfcfb4985e8b4cb7ab2a5466de2da27d96458cbc3f4356db58a39f = $this->env->getExtension("native_profiler");
        $__internal_655b16823adfcfb4985e8b4cb7ab2a5466de2da27d96458cbc3f4356db58a39f->enter($__internal_655b16823adfcfb4985e8b4cb7ab2a5466de2da27d96458cbc3f4356db58a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

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
        
        $__internal_655b16823adfcfb4985e8b4cb7ab2a5466de2da27d96458cbc3f4356db58a39f->leave($__internal_655b16823adfcfb4985e8b4cb7ab2a5466de2da27d96458cbc3f4356db58a39f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2f738254111923698cb998281f8091fa494066bbe84d27248816da740dfac51 = $this->env->getExtension("native_profiler");
        $__internal_b2f738254111923698cb998281f8091fa494066bbe84d27248816da740dfac51->enter($__internal_b2f738254111923698cb998281f8091fa494066bbe84d27248816da740dfac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_b2f738254111923698cb998281f8091fa494066bbe84d27248816da740dfac51->leave($__internal_b2f738254111923698cb998281f8091fa494066bbe84d27248816da740dfac51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec59ab8a2c7ff140fb60aa975597d0036b3845632f9f0c3078ca825f395b1a39 = $this->env->getExtension("native_profiler");
        $__internal_ec59ab8a2c7ff140fb60aa975597d0036b3845632f9f0c3078ca825f395b1a39->enter($__internal_ec59ab8a2c7ff140fb60aa975597d0036b3845632f9f0c3078ca825f395b1a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_ec59ab8a2c7ff140fb60aa975597d0036b3845632f9f0c3078ca825f395b1a39->leave($__internal_ec59ab8a2c7ff140fb60aa975597d0036b3845632f9f0c3078ca825f395b1a39_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eb6ecd2259d6661e1e2f3ed2c0a085f9bd8c3c535a2b7a86c623868bd3409fd = $this->env->getExtension("native_profiler");
        $__internal_2eb6ecd2259d6661e1e2f3ed2c0a085f9bd8c3c535a2b7a86c623868bd3409fd->enter($__internal_2eb6ecd2259d6661e1e2f3ed2c0a085f9bd8c3c535a2b7a86c623868bd3409fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_2eb6ecd2259d6661e1e2f3ed2c0a085f9bd8c3c535a2b7a86c623868bd3409fd->leave($__internal_2eb6ecd2259d6661e1e2f3ed2c0a085f9bd8c3c535a2b7a86c623868bd3409fd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3061b59e250e096218cd54dbbd3f18b4f2e7f6cfbe1128d79367162da4a1e733 = $this->env->getExtension("native_profiler");
        $__internal_3061b59e250e096218cd54dbbd3f18b4f2e7f6cfbe1128d79367162da4a1e733->enter($__internal_3061b59e250e096218cd54dbbd3f18b4f2e7f6cfbe1128d79367162da4a1e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3061b59e250e096218cd54dbbd3f18b4f2e7f6cfbe1128d79367162da4a1e733->leave($__internal_3061b59e250e096218cd54dbbd3f18b4f2e7f6cfbe1128d79367162da4a1e733_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/base.html.twig";
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
