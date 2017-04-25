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
        $__internal_533e483c889c2b6a7f9708d57cb6c5e072aefc87153f5bd6dbd874f87500214f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533e483c889c2b6a7f9708d57cb6c5e072aefc87153f5bd6dbd874f87500214f->enter($__internal_533e483c889c2b6a7f9708d57cb6c5e072aefc87153f5bd6dbd874f87500214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_de7b08bc6dc6435c11f369345ca4c825c001d8a6b31017705560cde751f0894a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7b08bc6dc6435c11f369345ca4c825c001d8a6b31017705560cde751f0894a->enter($__internal_de7b08bc6dc6435c11f369345ca4c825c001d8a6b31017705560cde751f0894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_533e483c889c2b6a7f9708d57cb6c5e072aefc87153f5bd6dbd874f87500214f->leave($__internal_533e483c889c2b6a7f9708d57cb6c5e072aefc87153f5bd6dbd874f87500214f_prof);

        
        $__internal_de7b08bc6dc6435c11f369345ca4c825c001d8a6b31017705560cde751f0894a->leave($__internal_de7b08bc6dc6435c11f369345ca4c825c001d8a6b31017705560cde751f0894a_prof);

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
