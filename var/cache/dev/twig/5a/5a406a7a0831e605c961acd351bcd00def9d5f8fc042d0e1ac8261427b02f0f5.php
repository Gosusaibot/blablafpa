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
        $__internal_be6ee7b5f4f555efe45ad52ab1bd4520a0374508dc36e6c4da6947602f30924a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6ee7b5f4f555efe45ad52ab1bd4520a0374508dc36e6c4da6947602f30924a->enter($__internal_be6ee7b5f4f555efe45ad52ab1bd4520a0374508dc36e6c4da6947602f30924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_9efc80e34d5e35f8f5e013c3f6f8a4e132d4d4781e6d4642567a0128b7142b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efc80e34d5e35f8f5e013c3f6f8a4e132d4d4781e6d4642567a0128b7142b83->enter($__internal_9efc80e34d5e35f8f5e013c3f6f8a4e132d4d4781e6d4642567a0128b7142b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be6ee7b5f4f555efe45ad52ab1bd4520a0374508dc36e6c4da6947602f30924a->leave($__internal_be6ee7b5f4f555efe45ad52ab1bd4520a0374508dc36e6c4da6947602f30924a_prof);

        
        $__internal_9efc80e34d5e35f8f5e013c3f6f8a4e132d4d4781e6d4642567a0128b7142b83->leave($__internal_9efc80e34d5e35f8f5e013c3f6f8a4e132d4d4781e6d4642567a0128b7142b83_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_160cbb32f968d88e3c88152308f7cb18e59719de985c5acab0f7c4a83c329f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160cbb32f968d88e3c88152308f7cb18e59719de985c5acab0f7c4a83c329f65->enter($__internal_160cbb32f968d88e3c88152308f7cb18e59719de985c5acab0f7c4a83c329f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c27b80813477cd8c015dba5330c9df45240acbfcfcd8b28eb5a3686d7ae464c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27b80813477cd8c015dba5330c9df45240acbfcfcd8b28eb5a3686d7ae464c1->enter($__internal_c27b80813477cd8c015dba5330c9df45240acbfcfcd8b28eb5a3686d7ae464c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c27b80813477cd8c015dba5330c9df45240acbfcfcd8b28eb5a3686d7ae464c1->leave($__internal_c27b80813477cd8c015dba5330c9df45240acbfcfcd8b28eb5a3686d7ae464c1_prof);

        
        $__internal_160cbb32f968d88e3c88152308f7cb18e59719de985c5acab0f7c4a83c329f65->leave($__internal_160cbb32f968d88e3c88152308f7cb18e59719de985c5acab0f7c4a83c329f65_prof);

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
