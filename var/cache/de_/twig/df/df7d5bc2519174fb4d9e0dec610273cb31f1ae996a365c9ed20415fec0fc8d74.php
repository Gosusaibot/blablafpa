<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_efcb00e274d7a6862bd7dc05abbac92cc94ca3e4140d616e6ef4f353d6e44257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2820cfe075a3c9c04d737705b7d1ee32650113a9e5c54667ec3a996101b56e5 = $this->env->getExtension("native_profiler");
        $__internal_e2820cfe075a3c9c04d737705b7d1ee32650113a9e5c54667ec3a996101b56e5->enter($__internal_e2820cfe075a3c9c04d737705b7d1ee32650113a9e5c54667ec3a996101b56e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2820cfe075a3c9c04d737705b7d1ee32650113a9e5c54667ec3a996101b56e5->leave($__internal_e2820cfe075a3c9c04d737705b7d1ee32650113a9e5c54667ec3a996101b56e5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_664abe27342ba5d74a2a84601b9dbb2ce1e170aa61f90fb705ac8d97cc51b8c6 = $this->env->getExtension("native_profiler");
        $__internal_664abe27342ba5d74a2a84601b9dbb2ce1e170aa61f90fb705ac8d97cc51b8c6->enter($__internal_664abe27342ba5d74a2a84601b9dbb2ce1e170aa61f90fb705ac8d97cc51b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_664abe27342ba5d74a2a84601b9dbb2ce1e170aa61f90fb705ac8d97cc51b8c6->leave($__internal_664abe27342ba5d74a2a84601b9dbb2ce1e170aa61f90fb705ac8d97cc51b8c6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_822ac852a13b873e00f11b9406a93f4cf9901e4fb4036e79d6a35d51b783e709 = $this->env->getExtension("native_profiler");
        $__internal_822ac852a13b873e00f11b9406a93f4cf9901e4fb4036e79d6a35d51b783e709->enter($__internal_822ac852a13b873e00f11b9406a93f4cf9901e4fb4036e79d6a35d51b783e709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_822ac852a13b873e00f11b9406a93f4cf9901e4fb4036e79d6a35d51b783e709->leave($__internal_822ac852a13b873e00f11b9406a93f4cf9901e4fb4036e79d6a35d51b783e709_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7f57282fe902e70488c5846c374710256551f75a75f12edb1745694ae6d7f77 = $this->env->getExtension("native_profiler");
        $__internal_c7f57282fe902e70488c5846c374710256551f75a75f12edb1745694ae6d7f77->enter($__internal_c7f57282fe902e70488c5846c374710256551f75a75f12edb1745694ae6d7f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c7f57282fe902e70488c5846c374710256551f75a75f12edb1745694ae6d7f77->leave($__internal_c7f57282fe902e70488c5846c374710256551f75a75f12edb1745694ae6d7f77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
