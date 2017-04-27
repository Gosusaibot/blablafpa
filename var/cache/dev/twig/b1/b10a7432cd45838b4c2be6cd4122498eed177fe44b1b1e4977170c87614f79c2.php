<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b21f4148cebdc02a99da375a2aa1448fc8a90519c8c5939021a9274929fb1917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7ff58c2df8aab55026165911f9910326170667917144f4f22b9f704855a5bdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff58c2df8aab55026165911f9910326170667917144f4f22b9f704855a5bdfe->enter($__internal_7ff58c2df8aab55026165911f9910326170667917144f4f22b9f704855a5bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f57cfc58c77b024123cc8679be199bfcf6a779840b7401dd373e5e42d17a8a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57cfc58c77b024123cc8679be199bfcf6a779840b7401dd373e5e42d17a8a49->enter($__internal_f57cfc58c77b024123cc8679be199bfcf6a779840b7401dd373e5e42d17a8a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff58c2df8aab55026165911f9910326170667917144f4f22b9f704855a5bdfe->leave($__internal_7ff58c2df8aab55026165911f9910326170667917144f4f22b9f704855a5bdfe_prof);

        
        $__internal_f57cfc58c77b024123cc8679be199bfcf6a779840b7401dd373e5e42d17a8a49->leave($__internal_f57cfc58c77b024123cc8679be199bfcf6a779840b7401dd373e5e42d17a8a49_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76f7aa1e242c3ee2a7eed6ac62f70bfbbf8aafcc8f33a68e17eb5398955ded8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f7aa1e242c3ee2a7eed6ac62f70bfbbf8aafcc8f33a68e17eb5398955ded8b->enter($__internal_76f7aa1e242c3ee2a7eed6ac62f70bfbbf8aafcc8f33a68e17eb5398955ded8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_582ef19a03a49dd1f82d8a53438f840892ded28b55aca6bd5125e29ac8d71df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582ef19a03a49dd1f82d8a53438f840892ded28b55aca6bd5125e29ac8d71df1->enter($__internal_582ef19a03a49dd1f82d8a53438f840892ded28b55aca6bd5125e29ac8d71df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_582ef19a03a49dd1f82d8a53438f840892ded28b55aca6bd5125e29ac8d71df1->leave($__internal_582ef19a03a49dd1f82d8a53438f840892ded28b55aca6bd5125e29ac8d71df1_prof);

        
        $__internal_76f7aa1e242c3ee2a7eed6ac62f70bfbbf8aafcc8f33a68e17eb5398955ded8b->leave($__internal_76f7aa1e242c3ee2a7eed6ac62f70bfbbf8aafcc8f33a68e17eb5398955ded8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
