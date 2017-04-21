<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fd3fc7887b9abf5f3d5ca69d6f2c202cdf294fd8306b36b50768439f5d51be51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5adc520d885ef563e27079bc83639cd0e0df8d36a60fde635b64535dc074b790 = $this->env->getExtension("native_profiler");
        $__internal_5adc520d885ef563e27079bc83639cd0e0df8d36a60fde635b64535dc074b790->enter($__internal_5adc520d885ef563e27079bc83639cd0e0df8d36a60fde635b64535dc074b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5adc520d885ef563e27079bc83639cd0e0df8d36a60fde635b64535dc074b790->leave($__internal_5adc520d885ef563e27079bc83639cd0e0df8d36a60fde635b64535dc074b790_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af9f84158f5c01fd4d90aaab9d31b95873cd9ccd6daafe373dded310cd283987 = $this->env->getExtension("native_profiler");
        $__internal_af9f84158f5c01fd4d90aaab9d31b95873cd9ccd6daafe373dded310cd283987->enter($__internal_af9f84158f5c01fd4d90aaab9d31b95873cd9ccd6daafe373dded310cd283987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_af9f84158f5c01fd4d90aaab9d31b95873cd9ccd6daafe373dded310cd283987->leave($__internal_af9f84158f5c01fd4d90aaab9d31b95873cd9ccd6daafe373dded310cd283987_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
