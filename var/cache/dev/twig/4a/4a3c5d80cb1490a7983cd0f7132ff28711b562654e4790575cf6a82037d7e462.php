<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_62bf49eeaa9e8e8e1ab63927f0a9fe1146c24d0c9e55cd4ac0214cf77b387220 extends Twig_Template
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
        $__internal_2806d79ad4ebfa90eeb5c7dd96640f95cec96405a9488faed4920adc616a4f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2806d79ad4ebfa90eeb5c7dd96640f95cec96405a9488faed4920adc616a4f69->enter($__internal_2806d79ad4ebfa90eeb5c7dd96640f95cec96405a9488faed4920adc616a4f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_cce9ba2ba81c21d351a3384f98ff94cbd8cd7779a4a0a7be512f48362b6edf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce9ba2ba81c21d351a3384f98ff94cbd8cd7779a4a0a7be512f48362b6edf4d->enter($__internal_cce9ba2ba81c21d351a3384f98ff94cbd8cd7779a4a0a7be512f48362b6edf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2806d79ad4ebfa90eeb5c7dd96640f95cec96405a9488faed4920adc616a4f69->leave($__internal_2806d79ad4ebfa90eeb5c7dd96640f95cec96405a9488faed4920adc616a4f69_prof);

        
        $__internal_cce9ba2ba81c21d351a3384f98ff94cbd8cd7779a4a0a7be512f48362b6edf4d->leave($__internal_cce9ba2ba81c21d351a3384f98ff94cbd8cd7779a4a0a7be512f48362b6edf4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
