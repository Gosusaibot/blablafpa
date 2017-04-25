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
        $__internal_498003fcd2731767b817685f2b9b5e41c8c07cea9bf9f9ae25bd219452d5fa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498003fcd2731767b817685f2b9b5e41c8c07cea9bf9f9ae25bd219452d5fa6a->enter($__internal_498003fcd2731767b817685f2b9b5e41c8c07cea9bf9f9ae25bd219452d5fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d5d6f24b90568c619d0327f73b6932e937cf5c405d5908c2637dc434e7bf4459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d6f24b90568c619d0327f73b6932e937cf5c405d5908c2637dc434e7bf4459->enter($__internal_d5d6f24b90568c619d0327f73b6932e937cf5c405d5908c2637dc434e7bf4459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498003fcd2731767b817685f2b9b5e41c8c07cea9bf9f9ae25bd219452d5fa6a->leave($__internal_498003fcd2731767b817685f2b9b5e41c8c07cea9bf9f9ae25bd219452d5fa6a_prof);

        
        $__internal_d5d6f24b90568c619d0327f73b6932e937cf5c405d5908c2637dc434e7bf4459->leave($__internal_d5d6f24b90568c619d0327f73b6932e937cf5c405d5908c2637dc434e7bf4459_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_973efa15b3ef1a528724d55704d8d04a4299d9111a9f0b758942b0aa4189a28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973efa15b3ef1a528724d55704d8d04a4299d9111a9f0b758942b0aa4189a28f->enter($__internal_973efa15b3ef1a528724d55704d8d04a4299d9111a9f0b758942b0aa4189a28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8321c226dad1d10f6fd779a4670730cd06f65d8dca07be6b3284b4dc3892bdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8321c226dad1d10f6fd779a4670730cd06f65d8dca07be6b3284b4dc3892bdfa->enter($__internal_8321c226dad1d10f6fd779a4670730cd06f65d8dca07be6b3284b4dc3892bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8321c226dad1d10f6fd779a4670730cd06f65d8dca07be6b3284b4dc3892bdfa->leave($__internal_8321c226dad1d10f6fd779a4670730cd06f65d8dca07be6b3284b4dc3892bdfa_prof);

        
        $__internal_973efa15b3ef1a528724d55704d8d04a4299d9111a9f0b758942b0aa4189a28f->leave($__internal_973efa15b3ef1a528724d55704d8d04a4299d9111a9f0b758942b0aa4189a28f_prof);

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
