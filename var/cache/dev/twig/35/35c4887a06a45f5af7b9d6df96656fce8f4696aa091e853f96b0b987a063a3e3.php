<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_eaf5c8950b8c11e09c8e3490e109d2089dc2b9a7d4fbe059b7a5fb50d04ca52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b23bc843d38ecf8de3cd89846ac9ec86a516b3aa9f776a2b5bff2322fd06746e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23bc843d38ecf8de3cd89846ac9ec86a516b3aa9f776a2b5bff2322fd06746e->enter($__internal_b23bc843d38ecf8de3cd89846ac9ec86a516b3aa9f776a2b5bff2322fd06746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ac9a9f3ad1085cb97f3c0e77ffe0a9ced34e28234de20514d28d12dcfa36d798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9a9f3ad1085cb97f3c0e77ffe0a9ced34e28234de20514d28d12dcfa36d798->enter($__internal_ac9a9f3ad1085cb97f3c0e77ffe0a9ced34e28234de20514d28d12dcfa36d798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23bc843d38ecf8de3cd89846ac9ec86a516b3aa9f776a2b5bff2322fd06746e->leave($__internal_b23bc843d38ecf8de3cd89846ac9ec86a516b3aa9f776a2b5bff2322fd06746e_prof);

        
        $__internal_ac9a9f3ad1085cb97f3c0e77ffe0a9ced34e28234de20514d28d12dcfa36d798->leave($__internal_ac9a9f3ad1085cb97f3c0e77ffe0a9ced34e28234de20514d28d12dcfa36d798_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_334fa2511d96860c357e8effe2f1d048a9516ab4f1f8c33e8aebafd360c7f838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334fa2511d96860c357e8effe2f1d048a9516ab4f1f8c33e8aebafd360c7f838->enter($__internal_334fa2511d96860c357e8effe2f1d048a9516ab4f1f8c33e8aebafd360c7f838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_528850a541a318496cb1ae4adc2b5e71d134d19c5e9325452b601db582bf6bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528850a541a318496cb1ae4adc2b5e71d134d19c5e9325452b601db582bf6bdd->enter($__internal_528850a541a318496cb1ae4adc2b5e71d134d19c5e9325452b601db582bf6bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_528850a541a318496cb1ae4adc2b5e71d134d19c5e9325452b601db582bf6bdd->leave($__internal_528850a541a318496cb1ae4adc2b5e71d134d19c5e9325452b601db582bf6bdd_prof);

        
        $__internal_334fa2511d96860c357e8effe2f1d048a9516ab4f1f8c33e8aebafd360c7f838->leave($__internal_334fa2511d96860c357e8effe2f1d048a9516ab4f1f8c33e8aebafd360c7f838_prof);

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
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
