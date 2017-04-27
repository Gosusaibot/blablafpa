<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2802163f7ff1e00305ffb419d4d1d51c9c6a14c35908c3ccc310f6ab385245a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_78f0b21595a79ce22a278c61e7f0b8bc0fa3b0701450009d6bbc39267159c3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f0b21595a79ce22a278c61e7f0b8bc0fa3b0701450009d6bbc39267159c3cc->enter($__internal_78f0b21595a79ce22a278c61e7f0b8bc0fa3b0701450009d6bbc39267159c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_bb9c77592769e5ff2cf022ef8c5a96a13510c4a12b808810f9ba3d6d2426edee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9c77592769e5ff2cf022ef8c5a96a13510c4a12b808810f9ba3d6d2426edee->enter($__internal_bb9c77592769e5ff2cf022ef8c5a96a13510c4a12b808810f9ba3d6d2426edee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f0b21595a79ce22a278c61e7f0b8bc0fa3b0701450009d6bbc39267159c3cc->leave($__internal_78f0b21595a79ce22a278c61e7f0b8bc0fa3b0701450009d6bbc39267159c3cc_prof);

        
        $__internal_bb9c77592769e5ff2cf022ef8c5a96a13510c4a12b808810f9ba3d6d2426edee->leave($__internal_bb9c77592769e5ff2cf022ef8c5a96a13510c4a12b808810f9ba3d6d2426edee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ac17e7e75986640efbac78e12763232fe9fb508a19a9575b2843660e7319dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac17e7e75986640efbac78e12763232fe9fb508a19a9575b2843660e7319dd6->enter($__internal_2ac17e7e75986640efbac78e12763232fe9fb508a19a9575b2843660e7319dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97015bafbc27ab79c92ce06d0665b2b153b4bcafa6245d610f47ac933d0be467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97015bafbc27ab79c92ce06d0665b2b153b4bcafa6245d610f47ac933d0be467->enter($__internal_97015bafbc27ab79c92ce06d0665b2b153b4bcafa6245d610f47ac933d0be467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_97015bafbc27ab79c92ce06d0665b2b153b4bcafa6245d610f47ac933d0be467->leave($__internal_97015bafbc27ab79c92ce06d0665b2b153b4bcafa6245d610f47ac933d0be467_prof);

        
        $__internal_2ac17e7e75986640efbac78e12763232fe9fb508a19a9575b2843660e7319dd6->leave($__internal_2ac17e7e75986640efbac78e12763232fe9fb508a19a9575b2843660e7319dd6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
