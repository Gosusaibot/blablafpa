<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6cb57fe70c703688312c435af693ce1847856a13b7aa91c2842593d3634fbac0 extends Twig_Template
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
        $__internal_f9567cf82fe5369b260686816f8c175918ecce4e3761c3cafd528946fa128192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9567cf82fe5369b260686816f8c175918ecce4e3761c3cafd528946fa128192->enter($__internal_f9567cf82fe5369b260686816f8c175918ecce4e3761c3cafd528946fa128192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_5f2d5243fd82557162791b4aa0596a13360a5baa5f54c1c3dcb3e4cd9e71b0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2d5243fd82557162791b4aa0596a13360a5baa5f54c1c3dcb3e4cd9e71b0aa->enter($__internal_5f2d5243fd82557162791b4aa0596a13360a5baa5f54c1c3dcb3e4cd9e71b0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f9567cf82fe5369b260686816f8c175918ecce4e3761c3cafd528946fa128192->leave($__internal_f9567cf82fe5369b260686816f8c175918ecce4e3761c3cafd528946fa128192_prof);

        
        $__internal_5f2d5243fd82557162791b4aa0596a13360a5baa5f54c1c3dcb3e4cd9e71b0aa->leave($__internal_5f2d5243fd82557162791b4aa0596a13360a5baa5f54c1c3dcb3e4cd9e71b0aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
