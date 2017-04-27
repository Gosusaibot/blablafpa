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
        $__internal_d29fec25742754d7e1fe0a4d5b02852b70c4828669e2a16455c96286a7f8e4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29fec25742754d7e1fe0a4d5b02852b70c4828669e2a16455c96286a7f8e4cf->enter($__internal_d29fec25742754d7e1fe0a4d5b02852b70c4828669e2a16455c96286a7f8e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d66142af5ebbac947e84b300acf6395a6149282f1f620e4609308e7241631ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66142af5ebbac947e84b300acf6395a6149282f1f620e4609308e7241631ec7->enter($__internal_d66142af5ebbac947e84b300acf6395a6149282f1f620e4609308e7241631ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29fec25742754d7e1fe0a4d5b02852b70c4828669e2a16455c96286a7f8e4cf->leave($__internal_d29fec25742754d7e1fe0a4d5b02852b70c4828669e2a16455c96286a7f8e4cf_prof);

        
        $__internal_d66142af5ebbac947e84b300acf6395a6149282f1f620e4609308e7241631ec7->leave($__internal_d66142af5ebbac947e84b300acf6395a6149282f1f620e4609308e7241631ec7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae3856fb5dda3f3906e9c6435eaf12f247ceb73bb1a655cca3938d949c00000a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3856fb5dda3f3906e9c6435eaf12f247ceb73bb1a655cca3938d949c00000a->enter($__internal_ae3856fb5dda3f3906e9c6435eaf12f247ceb73bb1a655cca3938d949c00000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97c17501516aed346348c53374ecd88b67a2403b337713f0e3b67435bbb85118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c17501516aed346348c53374ecd88b67a2403b337713f0e3b67435bbb85118->enter($__internal_97c17501516aed346348c53374ecd88b67a2403b337713f0e3b67435bbb85118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_97c17501516aed346348c53374ecd88b67a2403b337713f0e3b67435bbb85118->leave($__internal_97c17501516aed346348c53374ecd88b67a2403b337713f0e3b67435bbb85118_prof);

        
        $__internal_ae3856fb5dda3f3906e9c6435eaf12f247ceb73bb1a655cca3938d949c00000a->leave($__internal_ae3856fb5dda3f3906e9c6435eaf12f247ceb73bb1a655cca3938d949c00000a_prof);

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
