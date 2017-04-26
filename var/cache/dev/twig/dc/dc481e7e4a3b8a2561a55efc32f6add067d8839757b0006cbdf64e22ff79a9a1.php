<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a6c8cc78b192bc58284a767df204f484b639afc5ac1c75a8b623785342b41889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1c0728a22937139f9be9843c1c0f14ed77e84d0def25eb8b123452a822a46e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0728a22937139f9be9843c1c0f14ed77e84d0def25eb8b123452a822a46e11->enter($__internal_1c0728a22937139f9be9843c1c0f14ed77e84d0def25eb8b123452a822a46e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_195ac16525a5e48b93d5db3a5fbb3f88ffd47f3c75081247f5c31f2976c9b423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195ac16525a5e48b93d5db3a5fbb3f88ffd47f3c75081247f5c31f2976c9b423->enter($__internal_195ac16525a5e48b93d5db3a5fbb3f88ffd47f3c75081247f5c31f2976c9b423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c0728a22937139f9be9843c1c0f14ed77e84d0def25eb8b123452a822a46e11->leave($__internal_1c0728a22937139f9be9843c1c0f14ed77e84d0def25eb8b123452a822a46e11_prof);

        
        $__internal_195ac16525a5e48b93d5db3a5fbb3f88ffd47f3c75081247f5c31f2976c9b423->leave($__internal_195ac16525a5e48b93d5db3a5fbb3f88ffd47f3c75081247f5c31f2976c9b423_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a9b7e89fd2ed0e1280e6bfa5c370ee8e120cbdaf92cf5585509603ea9425eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9b7e89fd2ed0e1280e6bfa5c370ee8e120cbdaf92cf5585509603ea9425eb4->enter($__internal_1a9b7e89fd2ed0e1280e6bfa5c370ee8e120cbdaf92cf5585509603ea9425eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8bb1d2012184c368e9abddaca385fdbba60abbef244be92fe9be89622dbd9fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb1d2012184c368e9abddaca385fdbba60abbef244be92fe9be89622dbd9fa9->enter($__internal_8bb1d2012184c368e9abddaca385fdbba60abbef244be92fe9be89622dbd9fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8bb1d2012184c368e9abddaca385fdbba60abbef244be92fe9be89622dbd9fa9->leave($__internal_8bb1d2012184c368e9abddaca385fdbba60abbef244be92fe9be89622dbd9fa9_prof);

        
        $__internal_1a9b7e89fd2ed0e1280e6bfa5c370ee8e120cbdaf92cf5585509603ea9425eb4->leave($__internal_1a9b7e89fd2ed0e1280e6bfa5c370ee8e120cbdaf92cf5585509603ea9425eb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
