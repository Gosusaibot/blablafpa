<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b67b02262aa4624d4752bb5fea8d037e083fe4a74a8c59c97e65a122aead5f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a5f5f307de527716da46c3676a6c93bcd8268f84d48368d190b02ca9801beb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f5f307de527716da46c3676a6c93bcd8268f84d48368d190b02ca9801beb30->enter($__internal_a5f5f307de527716da46c3676a6c93bcd8268f84d48368d190b02ca9801beb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f6b6e486ae6ee864662c540d2e91afe11c653647bb2223fa9c26e5d41ce5ed9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b6e486ae6ee864662c540d2e91afe11c653647bb2223fa9c26e5d41ce5ed9f->enter($__internal_f6b6e486ae6ee864662c540d2e91afe11c653647bb2223fa9c26e5d41ce5ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f5f307de527716da46c3676a6c93bcd8268f84d48368d190b02ca9801beb30->leave($__internal_a5f5f307de527716da46c3676a6c93bcd8268f84d48368d190b02ca9801beb30_prof);

        
        $__internal_f6b6e486ae6ee864662c540d2e91afe11c653647bb2223fa9c26e5d41ce5ed9f->leave($__internal_f6b6e486ae6ee864662c540d2e91afe11c653647bb2223fa9c26e5d41ce5ed9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd0b24392d84a61a5b4b09582305aec0d7b33e51fddc03f083ce659b15e6e1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0b24392d84a61a5b4b09582305aec0d7b33e51fddc03f083ce659b15e6e1e9->enter($__internal_bd0b24392d84a61a5b4b09582305aec0d7b33e51fddc03f083ce659b15e6e1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56a9042c4a2c2201002ad212d0c76faf82e7525107a1627dcb9c60cbdc1f5b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a9042c4a2c2201002ad212d0c76faf82e7525107a1627dcb9c60cbdc1f5b94->enter($__internal_56a9042c4a2c2201002ad212d0c76faf82e7525107a1627dcb9c60cbdc1f5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_56a9042c4a2c2201002ad212d0c76faf82e7525107a1627dcb9c60cbdc1f5b94->leave($__internal_56a9042c4a2c2201002ad212d0c76faf82e7525107a1627dcb9c60cbdc1f5b94_prof);

        
        $__internal_bd0b24392d84a61a5b4b09582305aec0d7b33e51fddc03f083ce659b15e6e1e9->leave($__internal_bd0b24392d84a61a5b4b09582305aec0d7b33e51fddc03f083ce659b15e6e1e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
