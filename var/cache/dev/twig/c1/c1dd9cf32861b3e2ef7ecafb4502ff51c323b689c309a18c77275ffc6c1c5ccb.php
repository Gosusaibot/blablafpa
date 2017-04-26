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
        $__internal_eddceace01342cb1f282013ff139b5d68dedcd12d97353df67a04831439342e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddceace01342cb1f282013ff139b5d68dedcd12d97353df67a04831439342e8->enter($__internal_eddceace01342cb1f282013ff139b5d68dedcd12d97353df67a04831439342e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3c7e00a7aeb75f4cb005a07bf43a79a2fe58da96e0f06a0ad9464c0fc4a15a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7e00a7aeb75f4cb005a07bf43a79a2fe58da96e0f06a0ad9464c0fc4a15a67->enter($__internal_3c7e00a7aeb75f4cb005a07bf43a79a2fe58da96e0f06a0ad9464c0fc4a15a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eddceace01342cb1f282013ff139b5d68dedcd12d97353df67a04831439342e8->leave($__internal_eddceace01342cb1f282013ff139b5d68dedcd12d97353df67a04831439342e8_prof);

        
        $__internal_3c7e00a7aeb75f4cb005a07bf43a79a2fe58da96e0f06a0ad9464c0fc4a15a67->leave($__internal_3c7e00a7aeb75f4cb005a07bf43a79a2fe58da96e0f06a0ad9464c0fc4a15a67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a2950ddbe49e096c88cabb6c8fceefe5acd7aa97ae86fc0d4aefb0942a735f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2950ddbe49e096c88cabb6c8fceefe5acd7aa97ae86fc0d4aefb0942a735f3->enter($__internal_0a2950ddbe49e096c88cabb6c8fceefe5acd7aa97ae86fc0d4aefb0942a735f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe9f00415202776bf03c130edb740ca12ea81b6d013215125bbbfefe0e3bf9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9f00415202776bf03c130edb740ca12ea81b6d013215125bbbfefe0e3bf9f7->enter($__internal_fe9f00415202776bf03c130edb740ca12ea81b6d013215125bbbfefe0e3bf9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fe9f00415202776bf03c130edb740ca12ea81b6d013215125bbbfefe0e3bf9f7->leave($__internal_fe9f00415202776bf03c130edb740ca12ea81b6d013215125bbbfefe0e3bf9f7_prof);

        
        $__internal_0a2950ddbe49e096c88cabb6c8fceefe5acd7aa97ae86fc0d4aefb0942a735f3->leave($__internal_0a2950ddbe49e096c88cabb6c8fceefe5acd7aa97ae86fc0d4aefb0942a735f3_prof);

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
