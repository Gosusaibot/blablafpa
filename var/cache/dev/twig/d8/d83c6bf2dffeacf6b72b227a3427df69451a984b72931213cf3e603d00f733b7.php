<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_878f65fff183341a6b5e467b5a2fe6811013a3ab7636bb2cfd9c557e42212b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_98b889183493087c6b4498ef2518c7aac3323cce24b9d4570176e67efb6a151c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b889183493087c6b4498ef2518c7aac3323cce24b9d4570176e67efb6a151c->enter($__internal_98b889183493087c6b4498ef2518c7aac3323cce24b9d4570176e67efb6a151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_571ae8f2d12bf556fe4893b769994b8332a8a0e5c685a8f044ba95849fc9ff6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ae8f2d12bf556fe4893b769994b8332a8a0e5c685a8f044ba95849fc9ff6e->enter($__internal_571ae8f2d12bf556fe4893b769994b8332a8a0e5c685a8f044ba95849fc9ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b889183493087c6b4498ef2518c7aac3323cce24b9d4570176e67efb6a151c->leave($__internal_98b889183493087c6b4498ef2518c7aac3323cce24b9d4570176e67efb6a151c_prof);

        
        $__internal_571ae8f2d12bf556fe4893b769994b8332a8a0e5c685a8f044ba95849fc9ff6e->leave($__internal_571ae8f2d12bf556fe4893b769994b8332a8a0e5c685a8f044ba95849fc9ff6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bedd4fda2ed2ed316547ee5195c2527b88e8857b4665267e3f75d98d2f8e5960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedd4fda2ed2ed316547ee5195c2527b88e8857b4665267e3f75d98d2f8e5960->enter($__internal_bedd4fda2ed2ed316547ee5195c2527b88e8857b4665267e3f75d98d2f8e5960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30e1f12ca39f6025eccc8622ea3f2f61a9c731da4ccd74285f5d95bfa70cb78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e1f12ca39f6025eccc8622ea3f2f61a9c731da4ccd74285f5d95bfa70cb78d->enter($__internal_30e1f12ca39f6025eccc8622ea3f2f61a9c731da4ccd74285f5d95bfa70cb78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_30e1f12ca39f6025eccc8622ea3f2f61a9c731da4ccd74285f5d95bfa70cb78d->leave($__internal_30e1f12ca39f6025eccc8622ea3f2f61a9c731da4ccd74285f5d95bfa70cb78d_prof);

        
        $__internal_bedd4fda2ed2ed316547ee5195c2527b88e8857b4665267e3f75d98d2f8e5960->leave($__internal_bedd4fda2ed2ed316547ee5195c2527b88e8857b4665267e3f75d98d2f8e5960_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
