<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9642abc6250cc636c490b98272e1aad6378ddd0ef4830c7b37c20a380d580685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aefe34c004b08e98d41a80047e13f53bac57ace29d291df71f7a54ca9b2e5e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefe34c004b08e98d41a80047e13f53bac57ace29d291df71f7a54ca9b2e5e36->enter($__internal_aefe34c004b08e98d41a80047e13f53bac57ace29d291df71f7a54ca9b2e5e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_bd730a6e843c08b8c582cd845fa1df3cbb4622ec5e44ec4d53ec6bcb0c0d4d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd730a6e843c08b8c582cd845fa1df3cbb4622ec5e44ec4d53ec6bcb0c0d4d43->enter($__internal_bd730a6e843c08b8c582cd845fa1df3cbb4622ec5e44ec4d53ec6bcb0c0d4d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aefe34c004b08e98d41a80047e13f53bac57ace29d291df71f7a54ca9b2e5e36->leave($__internal_aefe34c004b08e98d41a80047e13f53bac57ace29d291df71f7a54ca9b2e5e36_prof);

        
        $__internal_bd730a6e843c08b8c582cd845fa1df3cbb4622ec5e44ec4d53ec6bcb0c0d4d43->leave($__internal_bd730a6e843c08b8c582cd845fa1df3cbb4622ec5e44ec4d53ec6bcb0c0d4d43_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9eb40ce5ef89240c9d6f4f1df960918ac57e5e410e5247c9082604d0fb38a333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb40ce5ef89240c9d6f4f1df960918ac57e5e410e5247c9082604d0fb38a333->enter($__internal_9eb40ce5ef89240c9d6f4f1df960918ac57e5e410e5247c9082604d0fb38a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a7b7e728a2e6a2d67f1dd6f1f0e9fc085e9be7d60c61a48cfa39e4983e10a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7b7e728a2e6a2d67f1dd6f1f0e9fc085e9be7d60c61a48cfa39e4983e10a7e->enter($__internal_4a7b7e728a2e6a2d67f1dd6f1f0e9fc085e9be7d60c61a48cfa39e4983e10a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4a7b7e728a2e6a2d67f1dd6f1f0e9fc085e9be7d60c61a48cfa39e4983e10a7e->leave($__internal_4a7b7e728a2e6a2d67f1dd6f1f0e9fc085e9be7d60c61a48cfa39e4983e10a7e_prof);

        
        $__internal_9eb40ce5ef89240c9d6f4f1df960918ac57e5e410e5247c9082604d0fb38a333->leave($__internal_9eb40ce5ef89240c9d6f4f1df960918ac57e5e410e5247c9082604d0fb38a333_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
