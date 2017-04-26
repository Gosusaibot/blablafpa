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
        $__internal_a2fe48631395022a79012f3cce44e074e4f03c451cd120ac305f6c7f25412917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fe48631395022a79012f3cce44e074e4f03c451cd120ac305f6c7f25412917->enter($__internal_a2fe48631395022a79012f3cce44e074e4f03c451cd120ac305f6c7f25412917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_57cb014d3f48937e406f7987ccd6f72adef995a92041496650c4ce952ea0569c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cb014d3f48937e406f7987ccd6f72adef995a92041496650c4ce952ea0569c->enter($__internal_57cb014d3f48937e406f7987ccd6f72adef995a92041496650c4ce952ea0569c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2fe48631395022a79012f3cce44e074e4f03c451cd120ac305f6c7f25412917->leave($__internal_a2fe48631395022a79012f3cce44e074e4f03c451cd120ac305f6c7f25412917_prof);

        
        $__internal_57cb014d3f48937e406f7987ccd6f72adef995a92041496650c4ce952ea0569c->leave($__internal_57cb014d3f48937e406f7987ccd6f72adef995a92041496650c4ce952ea0569c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d94534ec3db426a9290e251ec4d7f63cd4775121dca835c2223d3bc2efd7e571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94534ec3db426a9290e251ec4d7f63cd4775121dca835c2223d3bc2efd7e571->enter($__internal_d94534ec3db426a9290e251ec4d7f63cd4775121dca835c2223d3bc2efd7e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa0aae3080a2052415b470d72a14abd30595d56639ae7f87329b6801d337aefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0aae3080a2052415b470d72a14abd30595d56639ae7f87329b6801d337aefb->enter($__internal_aa0aae3080a2052415b470d72a14abd30595d56639ae7f87329b6801d337aefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_aa0aae3080a2052415b470d72a14abd30595d56639ae7f87329b6801d337aefb->leave($__internal_aa0aae3080a2052415b470d72a14abd30595d56639ae7f87329b6801d337aefb_prof);

        
        $__internal_d94534ec3db426a9290e251ec4d7f63cd4775121dca835c2223d3bc2efd7e571->leave($__internal_d94534ec3db426a9290e251ec4d7f63cd4775121dca835c2223d3bc2efd7e571_prof);

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
