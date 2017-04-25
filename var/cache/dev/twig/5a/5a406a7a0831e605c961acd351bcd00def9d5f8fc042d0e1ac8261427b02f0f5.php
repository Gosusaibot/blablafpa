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
        $__internal_d841503d0ec44eafa2c95a4ef81236e340160b64a2d233dbbe3b856e9db97e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d841503d0ec44eafa2c95a4ef81236e340160b64a2d233dbbe3b856e9db97e1e->enter($__internal_d841503d0ec44eafa2c95a4ef81236e340160b64a2d233dbbe3b856e9db97e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_aaf6bb5ef4fbdd55514676c428e568674a51049f38059a8ccc02db614468679d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf6bb5ef4fbdd55514676c428e568674a51049f38059a8ccc02db614468679d->enter($__internal_aaf6bb5ef4fbdd55514676c428e568674a51049f38059a8ccc02db614468679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d841503d0ec44eafa2c95a4ef81236e340160b64a2d233dbbe3b856e9db97e1e->leave($__internal_d841503d0ec44eafa2c95a4ef81236e340160b64a2d233dbbe3b856e9db97e1e_prof);

        
        $__internal_aaf6bb5ef4fbdd55514676c428e568674a51049f38059a8ccc02db614468679d->leave($__internal_aaf6bb5ef4fbdd55514676c428e568674a51049f38059a8ccc02db614468679d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a76090ab2d0b516f075b1cf6f5745ea3d86d35d82bbda974bb2312318e01fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a76090ab2d0b516f075b1cf6f5745ea3d86d35d82bbda974bb2312318e01fc9->enter($__internal_5a76090ab2d0b516f075b1cf6f5745ea3d86d35d82bbda974bb2312318e01fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4092f7a0a060a6c8c608b0398b16222377d7dced6a6c4ef1aa0111e93e1f756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4092f7a0a060a6c8c608b0398b16222377d7dced6a6c4ef1aa0111e93e1f756->enter($__internal_b4092f7a0a060a6c8c608b0398b16222377d7dced6a6c4ef1aa0111e93e1f756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b4092f7a0a060a6c8c608b0398b16222377d7dced6a6c4ef1aa0111e93e1f756->leave($__internal_b4092f7a0a060a6c8c608b0398b16222377d7dced6a6c4ef1aa0111e93e1f756_prof);

        
        $__internal_5a76090ab2d0b516f075b1cf6f5745ea3d86d35d82bbda974bb2312318e01fc9->leave($__internal_5a76090ab2d0b516f075b1cf6f5745ea3d86d35d82bbda974bb2312318e01fc9_prof);

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
