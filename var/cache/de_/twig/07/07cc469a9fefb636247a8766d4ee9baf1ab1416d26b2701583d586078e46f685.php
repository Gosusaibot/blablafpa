<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_cc5a9dfc1477cc7a0084e12666f06f0f1fba1205170201ae84d4670a0813e5c2 extends Twig_Template
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
        $__internal_1f1428d24ca7f4e26f0e41b943b64952f0a4bdd49d9b4df7290c7c6d8b8801ed = $this->env->getExtension("native_profiler");
        $__internal_1f1428d24ca7f4e26f0e41b943b64952f0a4bdd49d9b4df7290c7c6d8b8801ed->enter($__internal_1f1428d24ca7f4e26f0e41b943b64952f0a4bdd49d9b4df7290c7c6d8b8801ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1f1428d24ca7f4e26f0e41b943b64952f0a4bdd49d9b4df7290c7c6d8b8801ed->leave($__internal_1f1428d24ca7f4e26f0e41b943b64952f0a4bdd49d9b4df7290c7c6d8b8801ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_22ec109889515bb4bd6e2645fa1da1c246514a9b41f61c8cf6f7821a9e918df0 = $this->env->getExtension("native_profiler");
        $__internal_22ec109889515bb4bd6e2645fa1da1c246514a9b41f61c8cf6f7821a9e918df0->enter($__internal_22ec109889515bb4bd6e2645fa1da1c246514a9b41f61c8cf6f7821a9e918df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_22ec109889515bb4bd6e2645fa1da1c246514a9b41f61c8cf6f7821a9e918df0->leave($__internal_22ec109889515bb4bd6e2645fa1da1c246514a9b41f61c8cf6f7821a9e918df0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bd6fafb1c30ca5779900483cf2798cc78b471774c7ce5b18942290df4d4ae40f = $this->env->getExtension("native_profiler");
        $__internal_bd6fafb1c30ca5779900483cf2798cc78b471774c7ce5b18942290df4d4ae40f->enter($__internal_bd6fafb1c30ca5779900483cf2798cc78b471774c7ce5b18942290df4d4ae40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd6fafb1c30ca5779900483cf2798cc78b471774c7ce5b18942290df4d4ae40f->leave($__internal_bd6fafb1c30ca5779900483cf2798cc78b471774c7ce5b18942290df4d4ae40f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_923a3c8dd17d714840b9a746b005bd2f9128b9ece54b7248130f5f63422a6fd4 = $this->env->getExtension("native_profiler");
        $__internal_923a3c8dd17d714840b9a746b005bd2f9128b9ece54b7248130f5f63422a6fd4->enter($__internal_923a3c8dd17d714840b9a746b005bd2f9128b9ece54b7248130f5f63422a6fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_923a3c8dd17d714840b9a746b005bd2f9128b9ece54b7248130f5f63422a6fd4->leave($__internal_923a3c8dd17d714840b9a746b005bd2f9128b9ece54b7248130f5f63422a6fd4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
