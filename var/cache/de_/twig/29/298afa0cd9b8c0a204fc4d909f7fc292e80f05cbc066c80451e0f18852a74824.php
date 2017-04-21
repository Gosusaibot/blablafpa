<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b184bbd8c22729a7f84f2e1f218a079865725c8549b792633ffadd0bcb0dff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583d14b54546f1e2c5c4f71fb53313c1759455a6dae18a3b7317c8ce55555733 = $this->env->getExtension("native_profiler");
        $__internal_583d14b54546f1e2c5c4f71fb53313c1759455a6dae18a3b7317c8ce55555733->enter($__internal_583d14b54546f1e2c5c4f71fb53313c1759455a6dae18a3b7317c8ce55555733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583d14b54546f1e2c5c4f71fb53313c1759455a6dae18a3b7317c8ce55555733->leave($__internal_583d14b54546f1e2c5c4f71fb53313c1759455a6dae18a3b7317c8ce55555733_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46705b525192dbeb6ae9f584099b205e5767505b9c654f366de45f22f809d2de = $this->env->getExtension("native_profiler");
        $__internal_46705b525192dbeb6ae9f584099b205e5767505b9c654f366de45f22f809d2de->enter($__internal_46705b525192dbeb6ae9f584099b205e5767505b9c654f366de45f22f809d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46705b525192dbeb6ae9f584099b205e5767505b9c654f366de45f22f809d2de->leave($__internal_46705b525192dbeb6ae9f584099b205e5767505b9c654f366de45f22f809d2de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02b2d0b41eddd4a54a31f82662bc691c83943ccc45af8cc465aaac64afec21c = $this->env->getExtension("native_profiler");
        $__internal_c02b2d0b41eddd4a54a31f82662bc691c83943ccc45af8cc465aaac64afec21c->enter($__internal_c02b2d0b41eddd4a54a31f82662bc691c83943ccc45af8cc465aaac64afec21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c02b2d0b41eddd4a54a31f82662bc691c83943ccc45af8cc465aaac64afec21c->leave($__internal_c02b2d0b41eddd4a54a31f82662bc691c83943ccc45af8cc465aaac64afec21c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac647ae17f6f20bcb0677e6fc123139f83c590219456d489f03e7895bf606c00 = $this->env->getExtension("native_profiler");
        $__internal_ac647ae17f6f20bcb0677e6fc123139f83c590219456d489f03e7895bf606c00->enter($__internal_ac647ae17f6f20bcb0677e6fc123139f83c590219456d489f03e7895bf606c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac647ae17f6f20bcb0677e6fc123139f83c590219456d489f03e7895bf606c00->leave($__internal_ac647ae17f6f20bcb0677e6fc123139f83c590219456d489f03e7895bf606c00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
