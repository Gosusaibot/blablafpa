<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7c12136ee9ccc24e19666b1b1766faf29f734f45e4fcd4775bcb081adcbe65c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_512bca3d3519a367731382c2463050395aeb9204a459e613256ad2a1437142bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512bca3d3519a367731382c2463050395aeb9204a459e613256ad2a1437142bd->enter($__internal_512bca3d3519a367731382c2463050395aeb9204a459e613256ad2a1437142bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_70384d21fb0180545173694820a258e5f0c1759874fc4c10e4fa511198eb0b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70384d21fb0180545173694820a258e5f0c1759874fc4c10e4fa511198eb0b9f->enter($__internal_70384d21fb0180545173694820a258e5f0c1759874fc4c10e4fa511198eb0b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512bca3d3519a367731382c2463050395aeb9204a459e613256ad2a1437142bd->leave($__internal_512bca3d3519a367731382c2463050395aeb9204a459e613256ad2a1437142bd_prof);

        
        $__internal_70384d21fb0180545173694820a258e5f0c1759874fc4c10e4fa511198eb0b9f->leave($__internal_70384d21fb0180545173694820a258e5f0c1759874fc4c10e4fa511198eb0b9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6afa89283d0abed45caf52960166af14f9ce3e5cec4fbd7f2302f02ad6369e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afa89283d0abed45caf52960166af14f9ce3e5cec4fbd7f2302f02ad6369e7b->enter($__internal_6afa89283d0abed45caf52960166af14f9ce3e5cec4fbd7f2302f02ad6369e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e037f699663a812ab6b54f03ac92a2e1d7db6c493dcdfd9510c9c07c50adcc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e037f699663a812ab6b54f03ac92a2e1d7db6c493dcdfd9510c9c07c50adcc87->enter($__internal_e037f699663a812ab6b54f03ac92a2e1d7db6c493dcdfd9510c9c07c50adcc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e037f699663a812ab6b54f03ac92a2e1d7db6c493dcdfd9510c9c07c50adcc87->leave($__internal_e037f699663a812ab6b54f03ac92a2e1d7db6c493dcdfd9510c9c07c50adcc87_prof);

        
        $__internal_6afa89283d0abed45caf52960166af14f9ce3e5cec4fbd7f2302f02ad6369e7b->leave($__internal_6afa89283d0abed45caf52960166af14f9ce3e5cec4fbd7f2302f02ad6369e7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
