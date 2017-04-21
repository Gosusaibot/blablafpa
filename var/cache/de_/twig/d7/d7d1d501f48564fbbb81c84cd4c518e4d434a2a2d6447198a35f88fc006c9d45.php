<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_cea26ec740446d8de0f16b35a8793b8130a14ea7e09004dabba5885dff75ce91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c4e418eb0425dba9b9a7bca3ee54cbb9a0e9d5dc5bd66aca909056b3fe9734a2 = $this->env->getExtension("native_profiler");
        $__internal_c4e418eb0425dba9b9a7bca3ee54cbb9a0e9d5dc5bd66aca909056b3fe9734a2->enter($__internal_c4e418eb0425dba9b9a7bca3ee54cbb9a0e9d5dc5bd66aca909056b3fe9734a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e418eb0425dba9b9a7bca3ee54cbb9a0e9d5dc5bd66aca909056b3fe9734a2->leave($__internal_c4e418eb0425dba9b9a7bca3ee54cbb9a0e9d5dc5bd66aca909056b3fe9734a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e97092155a1fa66d5460230eb34e4f9891407b95ce6329a1b507814a8db58a3a = $this->env->getExtension("native_profiler");
        $__internal_e97092155a1fa66d5460230eb34e4f9891407b95ce6329a1b507814a8db58a3a->enter($__internal_e97092155a1fa66d5460230eb34e4f9891407b95ce6329a1b507814a8db58a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e97092155a1fa66d5460230eb34e4f9891407b95ce6329a1b507814a8db58a3a->leave($__internal_e97092155a1fa66d5460230eb34e4f9891407b95ce6329a1b507814a8db58a3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
