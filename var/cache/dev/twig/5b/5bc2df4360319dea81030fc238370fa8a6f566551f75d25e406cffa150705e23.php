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
        $__internal_b6a98b8546ebae4b5691bf915cd6cc004cc468321840124f727b992c55741f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a98b8546ebae4b5691bf915cd6cc004cc468321840124f727b992c55741f08->enter($__internal_b6a98b8546ebae4b5691bf915cd6cc004cc468321840124f727b992c55741f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_7aa7f1224072e4e0f751cc0e5b949c90a0d85c51708c9bd6723945192c3e2aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa7f1224072e4e0f751cc0e5b949c90a0d85c51708c9bd6723945192c3e2aa9->enter($__internal_7aa7f1224072e4e0f751cc0e5b949c90a0d85c51708c9bd6723945192c3e2aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_b6a98b8546ebae4b5691bf915cd6cc004cc468321840124f727b992c55741f08->leave($__internal_b6a98b8546ebae4b5691bf915cd6cc004cc468321840124f727b992c55741f08_prof);

        
        $__internal_7aa7f1224072e4e0f751cc0e5b949c90a0d85c51708c9bd6723945192c3e2aa9->leave($__internal_7aa7f1224072e4e0f751cc0e5b949c90a0d85c51708c9bd6723945192c3e2aa9_prof);

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
