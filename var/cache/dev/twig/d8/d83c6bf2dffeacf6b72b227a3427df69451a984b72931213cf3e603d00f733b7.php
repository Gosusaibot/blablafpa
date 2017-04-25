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
        $__internal_7fa2ab6ae9fdd0ab31b238f92d0118549acf67b4ed5838e63ee0b7974c24fbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa2ab6ae9fdd0ab31b238f92d0118549acf67b4ed5838e63ee0b7974c24fbb5->enter($__internal_7fa2ab6ae9fdd0ab31b238f92d0118549acf67b4ed5838e63ee0b7974c24fbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d81d5ba6855cbf84526c2a4a7f78fa09cf3bff86a37e692a0b489477212421b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81d5ba6855cbf84526c2a4a7f78fa09cf3bff86a37e692a0b489477212421b5->enter($__internal_d81d5ba6855cbf84526c2a4a7f78fa09cf3bff86a37e692a0b489477212421b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa2ab6ae9fdd0ab31b238f92d0118549acf67b4ed5838e63ee0b7974c24fbb5->leave($__internal_7fa2ab6ae9fdd0ab31b238f92d0118549acf67b4ed5838e63ee0b7974c24fbb5_prof);

        
        $__internal_d81d5ba6855cbf84526c2a4a7f78fa09cf3bff86a37e692a0b489477212421b5->leave($__internal_d81d5ba6855cbf84526c2a4a7f78fa09cf3bff86a37e692a0b489477212421b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_976c44f4e87fa9647236fe0ae31a9111e91f3435eee347bc681fa479a2848cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976c44f4e87fa9647236fe0ae31a9111e91f3435eee347bc681fa479a2848cb4->enter($__internal_976c44f4e87fa9647236fe0ae31a9111e91f3435eee347bc681fa479a2848cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6004afc93a3dcab05c80f02a4029f9fcb661d7609515297e58df47753f4abb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6004afc93a3dcab05c80f02a4029f9fcb661d7609515297e58df47753f4abb5->enter($__internal_e6004afc93a3dcab05c80f02a4029f9fcb661d7609515297e58df47753f4abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e6004afc93a3dcab05c80f02a4029f9fcb661d7609515297e58df47753f4abb5->leave($__internal_e6004afc93a3dcab05c80f02a4029f9fcb661d7609515297e58df47753f4abb5_prof);

        
        $__internal_976c44f4e87fa9647236fe0ae31a9111e91f3435eee347bc681fa479a2848cb4->leave($__internal_976c44f4e87fa9647236fe0ae31a9111e91f3435eee347bc681fa479a2848cb4_prof);

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
