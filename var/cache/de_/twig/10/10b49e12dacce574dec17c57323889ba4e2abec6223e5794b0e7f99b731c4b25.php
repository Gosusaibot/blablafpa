<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_3301867e2b51bf39d2b478141f4fcee8154bd1d1c157d9aa929c1b120412054b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28513421352dbb7ce8e7b620d1cf73b27f303f800c2a37c0caef74773ad2c5c7 = $this->env->getExtension("native_profiler");
        $__internal_28513421352dbb7ce8e7b620d1cf73b27f303f800c2a37c0caef74773ad2c5c7->enter($__internal_28513421352dbb7ce8e7b620d1cf73b27f303f800c2a37c0caef74773ad2c5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28513421352dbb7ce8e7b620d1cf73b27f303f800c2a37c0caef74773ad2c5c7->leave($__internal_28513421352dbb7ce8e7b620d1cf73b27f303f800c2a37c0caef74773ad2c5c7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_301c0f9ce202d091655816f31770aafebae9f46baf165503eefc65466d57d095 = $this->env->getExtension("native_profiler");
        $__internal_301c0f9ce202d091655816f31770aafebae9f46baf165503eefc65466d57d095->enter($__internal_301c0f9ce202d091655816f31770aafebae9f46baf165503eefc65466d57d095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_301c0f9ce202d091655816f31770aafebae9f46baf165503eefc65466d57d095->leave($__internal_301c0f9ce202d091655816f31770aafebae9f46baf165503eefc65466d57d095_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
