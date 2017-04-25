<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_000114a35c9eced951b3eb44d6d2f7aae3d6756f06278a309366a4ef1f4104ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a34487282e39cb75df8b2ce3ce4b4b8439bafd087cf7672af022655b792c473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a34487282e39cb75df8b2ce3ce4b4b8439bafd087cf7672af022655b792c473->enter($__internal_3a34487282e39cb75df8b2ce3ce4b4b8439bafd087cf7672af022655b792c473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_9ceff596ce8bc8b43313abd27a87a447942332074a5d579839f9e5266a105bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceff596ce8bc8b43313abd27a87a447942332074a5d579839f9e5266a105bfc->enter($__internal_9ceff596ce8bc8b43313abd27a87a447942332074a5d579839f9e5266a105bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_3a34487282e39cb75df8b2ce3ce4b4b8439bafd087cf7672af022655b792c473->leave($__internal_3a34487282e39cb75df8b2ce3ce4b4b8439bafd087cf7672af022655b792c473_prof);

        
        $__internal_9ceff596ce8bc8b43313abd27a87a447942332074a5d579839f9e5266a105bfc->leave($__internal_9ceff596ce8bc8b43313abd27a87a447942332074a5d579839f9e5266a105bfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
