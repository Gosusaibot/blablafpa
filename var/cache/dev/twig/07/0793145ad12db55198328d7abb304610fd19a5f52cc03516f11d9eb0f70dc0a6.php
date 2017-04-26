<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d35eec8e9b315424b47cede732b54b95b63f690434743aa00fb0eb2cf57aa317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b53e1f23f752f0f1fad547a4fb1095279795ac1ef106dcb6d60a35b9c297a94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53e1f23f752f0f1fad547a4fb1095279795ac1ef106dcb6d60a35b9c297a94e->enter($__internal_b53e1f23f752f0f1fad547a4fb1095279795ac1ef106dcb6d60a35b9c297a94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_ad5fd885c8815809eb46ef5eeec90fe04eddce3eed3b3f3b6d58acb2da2bf33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5fd885c8815809eb46ef5eeec90fe04eddce3eed3b3f3b6d58acb2da2bf33e->enter($__internal_ad5fd885c8815809eb46ef5eeec90fe04eddce3eed3b3f3b6d58acb2da2bf33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b53e1f23f752f0f1fad547a4fb1095279795ac1ef106dcb6d60a35b9c297a94e->leave($__internal_b53e1f23f752f0f1fad547a4fb1095279795ac1ef106dcb6d60a35b9c297a94e_prof);

        
        $__internal_ad5fd885c8815809eb46ef5eeec90fe04eddce3eed3b3f3b6d58acb2da2bf33e->leave($__internal_ad5fd885c8815809eb46ef5eeec90fe04eddce3eed3b3f3b6d58acb2da2bf33e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_226770adefbac8873c0056faff4ddb15a723d6e3a79b7bb566441c0e96df0244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226770adefbac8873c0056faff4ddb15a723d6e3a79b7bb566441c0e96df0244->enter($__internal_226770adefbac8873c0056faff4ddb15a723d6e3a79b7bb566441c0e96df0244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3fb4ecd8653a42643dafe5b7e0bdebfe704d8b20618a15dc3ac63d9644e1d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fb4ecd8653a42643dafe5b7e0bdebfe704d8b20618a15dc3ac63d9644e1d5b->enter($__internal_b3fb4ecd8653a42643dafe5b7e0bdebfe704d8b20618a15dc3ac63d9644e1d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b3fb4ecd8653a42643dafe5b7e0bdebfe704d8b20618a15dc3ac63d9644e1d5b->leave($__internal_b3fb4ecd8653a42643dafe5b7e0bdebfe704d8b20618a15dc3ac63d9644e1d5b_prof);

        
        $__internal_226770adefbac8873c0056faff4ddb15a723d6e3a79b7bb566441c0e96df0244->leave($__internal_226770adefbac8873c0056faff4ddb15a723d6e3a79b7bb566441c0e96df0244_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
