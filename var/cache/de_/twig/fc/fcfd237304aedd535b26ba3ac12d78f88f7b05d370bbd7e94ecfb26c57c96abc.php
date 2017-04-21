<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5d5795fd2c012c67c3a6e2344c798c01d495efc1fb8039980d28855317b49000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f8929eb8db49e20f99fa12a27de69e9dc85919a51e151873a9b19c94a991abf6 = $this->env->getExtension("native_profiler");
        $__internal_f8929eb8db49e20f99fa12a27de69e9dc85919a51e151873a9b19c94a991abf6->enter($__internal_f8929eb8db49e20f99fa12a27de69e9dc85919a51e151873a9b19c94a991abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8929eb8db49e20f99fa12a27de69e9dc85919a51e151873a9b19c94a991abf6->leave($__internal_f8929eb8db49e20f99fa12a27de69e9dc85919a51e151873a9b19c94a991abf6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_732d01215464f3b915f7da9f6006f7f1764604e1c1d048585e7403e17be60f99 = $this->env->getExtension("native_profiler");
        $__internal_732d01215464f3b915f7da9f6006f7f1764604e1c1d048585e7403e17be60f99->enter($__internal_732d01215464f3b915f7da9f6006f7f1764604e1c1d048585e7403e17be60f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_732d01215464f3b915f7da9f6006f7f1764604e1c1d048585e7403e17be60f99->leave($__internal_732d01215464f3b915f7da9f6006f7f1764604e1c1d048585e7403e17be60f99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07c55fff12492a2d605cb467be0704479d4563b66d0af9d67ef54a8245779b9e = $this->env->getExtension("native_profiler");
        $__internal_07c55fff12492a2d605cb467be0704479d4563b66d0af9d67ef54a8245779b9e->enter($__internal_07c55fff12492a2d605cb467be0704479d4563b66d0af9d67ef54a8245779b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07c55fff12492a2d605cb467be0704479d4563b66d0af9d67ef54a8245779b9e->leave($__internal_07c55fff12492a2d605cb467be0704479d4563b66d0af9d67ef54a8245779b9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cf3fc2c115ad442d673ce16bcca5b8023798d5504aee596f17724a16f56f9b7 = $this->env->getExtension("native_profiler");
        $__internal_5cf3fc2c115ad442d673ce16bcca5b8023798d5504aee596f17724a16f56f9b7->enter($__internal_5cf3fc2c115ad442d673ce16bcca5b8023798d5504aee596f17724a16f56f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5cf3fc2c115ad442d673ce16bcca5b8023798d5504aee596f17724a16f56f9b7->leave($__internal_5cf3fc2c115ad442d673ce16bcca5b8023798d5504aee596f17724a16f56f9b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
