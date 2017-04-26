<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6beb8993bf5bd5b2da7ee0a4bf0aef08b18711dee013c4b731439e792665578d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_faa8455d7cfe332f6bc64501d86519bb29748ed6a03f4bf3dac02ef99418471c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa8455d7cfe332f6bc64501d86519bb29748ed6a03f4bf3dac02ef99418471c->enter($__internal_faa8455d7cfe332f6bc64501d86519bb29748ed6a03f4bf3dac02ef99418471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d7fce83c756a88c7b30101529e6d3d775424c2f4695a6fbfa5ac53b4a556db9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fce83c756a88c7b30101529e6d3d775424c2f4695a6fbfa5ac53b4a556db9b->enter($__internal_d7fce83c756a88c7b30101529e6d3d775424c2f4695a6fbfa5ac53b4a556db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa8455d7cfe332f6bc64501d86519bb29748ed6a03f4bf3dac02ef99418471c->leave($__internal_faa8455d7cfe332f6bc64501d86519bb29748ed6a03f4bf3dac02ef99418471c_prof);

        
        $__internal_d7fce83c756a88c7b30101529e6d3d775424c2f4695a6fbfa5ac53b4a556db9b->leave($__internal_d7fce83c756a88c7b30101529e6d3d775424c2f4695a6fbfa5ac53b4a556db9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfc2331e2d1e86fe4271de1c8c49f98b1dc2077726a00598856a61a8464adcad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc2331e2d1e86fe4271de1c8c49f98b1dc2077726a00598856a61a8464adcad->enter($__internal_cfc2331e2d1e86fe4271de1c8c49f98b1dc2077726a00598856a61a8464adcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66c255b64910dc9e6dffb09d1351b17758fccbe1bf66e60f2e4501732a02235c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c255b64910dc9e6dffb09d1351b17758fccbe1bf66e60f2e4501732a02235c->enter($__internal_66c255b64910dc9e6dffb09d1351b17758fccbe1bf66e60f2e4501732a02235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_66c255b64910dc9e6dffb09d1351b17758fccbe1bf66e60f2e4501732a02235c->leave($__internal_66c255b64910dc9e6dffb09d1351b17758fccbe1bf66e60f2e4501732a02235c_prof);

        
        $__internal_cfc2331e2d1e86fe4271de1c8c49f98b1dc2077726a00598856a61a8464adcad->leave($__internal_cfc2331e2d1e86fe4271de1c8c49f98b1dc2077726a00598856a61a8464adcad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
