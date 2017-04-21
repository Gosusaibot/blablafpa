<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_afe163e5bf7140353246d1db999d2f235929f4fd700d71ef4db926c9d74c97a7 extends Twig_Template
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
        $__internal_921aaa5444331b4bd0030a66d4dad571ac326c3c4c6145c616e1a23aaaa2ffca = $this->env->getExtension("native_profiler");
        $__internal_921aaa5444331b4bd0030a66d4dad571ac326c3c4c6145c616e1a23aaaa2ffca->enter($__internal_921aaa5444331b4bd0030a66d4dad571ac326c3c4c6145c616e1a23aaaa2ffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_921aaa5444331b4bd0030a66d4dad571ac326c3c4c6145c616e1a23aaaa2ffca->leave($__internal_921aaa5444331b4bd0030a66d4dad571ac326c3c4c6145c616e1a23aaaa2ffca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b682d7479368ed9d93a520afdad1ca058fee0b42b1e7bab582988386e13c55d = $this->env->getExtension("native_profiler");
        $__internal_6b682d7479368ed9d93a520afdad1ca058fee0b42b1e7bab582988386e13c55d->enter($__internal_6b682d7479368ed9d93a520afdad1ca058fee0b42b1e7bab582988386e13c55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6b682d7479368ed9d93a520afdad1ca058fee0b42b1e7bab582988386e13c55d->leave($__internal_6b682d7479368ed9d93a520afdad1ca058fee0b42b1e7bab582988386e13c55d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_95ae67e8736ebafcfa71dfecd0a7c9825584391f4e57d540697cb8c207590752 = $this->env->getExtension("native_profiler");
        $__internal_95ae67e8736ebafcfa71dfecd0a7c9825584391f4e57d540697cb8c207590752->enter($__internal_95ae67e8736ebafcfa71dfecd0a7c9825584391f4e57d540697cb8c207590752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_95ae67e8736ebafcfa71dfecd0a7c9825584391f4e57d540697cb8c207590752->leave($__internal_95ae67e8736ebafcfa71dfecd0a7c9825584391f4e57d540697cb8c207590752_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f2b72c5623885474d9beb43ed6720aeab3c529647eca9d08f8701b4aa0a322b1 = $this->env->getExtension("native_profiler");
        $__internal_f2b72c5623885474d9beb43ed6720aeab3c529647eca9d08f8701b4aa0a322b1->enter($__internal_f2b72c5623885474d9beb43ed6720aeab3c529647eca9d08f8701b4aa0a322b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f2b72c5623885474d9beb43ed6720aeab3c529647eca9d08f8701b4aa0a322b1->leave($__internal_f2b72c5623885474d9beb43ed6720aeab3c529647eca9d08f8701b4aa0a322b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
