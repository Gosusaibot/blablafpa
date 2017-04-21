<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_676c4332936b8f185b121ed41be09c0c4e2a38a83afd1ba0b296e588eb687bd2 extends Twig_Template
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
        $__internal_5a2be3a3c7c6a7b3fe54639d7a64aae9d886298432e9a2ecca074f5897137906 = $this->env->getExtension("native_profiler");
        $__internal_5a2be3a3c7c6a7b3fe54639d7a64aae9d886298432e9a2ecca074f5897137906->enter($__internal_5a2be3a3c7c6a7b3fe54639d7a64aae9d886298432e9a2ecca074f5897137906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5a2be3a3c7c6a7b3fe54639d7a64aae9d886298432e9a2ecca074f5897137906->leave($__internal_5a2be3a3c7c6a7b3fe54639d7a64aae9d886298432e9a2ecca074f5897137906_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e230997bcf48f30f44957f58a731975e61a7f94c017ce2ba3b1b0cbd71773f65 = $this->env->getExtension("native_profiler");
        $__internal_e230997bcf48f30f44957f58a731975e61a7f94c017ce2ba3b1b0cbd71773f65->enter($__internal_e230997bcf48f30f44957f58a731975e61a7f94c017ce2ba3b1b0cbd71773f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e230997bcf48f30f44957f58a731975e61a7f94c017ce2ba3b1b0cbd71773f65->leave($__internal_e230997bcf48f30f44957f58a731975e61a7f94c017ce2ba3b1b0cbd71773f65_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2631992096c14700331e5465b2e5469f678faecbc368b7fdc27d6c070bdb15b = $this->env->getExtension("native_profiler");
        $__internal_c2631992096c14700331e5465b2e5469f678faecbc368b7fdc27d6c070bdb15b->enter($__internal_c2631992096c14700331e5465b2e5469f678faecbc368b7fdc27d6c070bdb15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2631992096c14700331e5465b2e5469f678faecbc368b7fdc27d6c070bdb15b->leave($__internal_c2631992096c14700331e5465b2e5469f678faecbc368b7fdc27d6c070bdb15b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_39f0b3f31432f25196c1b0b787ebca3bcb84ed280366ed11552e587cf2cee9cb = $this->env->getExtension("native_profiler");
        $__internal_39f0b3f31432f25196c1b0b787ebca3bcb84ed280366ed11552e587cf2cee9cb->enter($__internal_39f0b3f31432f25196c1b0b787ebca3bcb84ed280366ed11552e587cf2cee9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39f0b3f31432f25196c1b0b787ebca3bcb84ed280366ed11552e587cf2cee9cb->leave($__internal_39f0b3f31432f25196c1b0b787ebca3bcb84ed280366ed11552e587cf2cee9cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
