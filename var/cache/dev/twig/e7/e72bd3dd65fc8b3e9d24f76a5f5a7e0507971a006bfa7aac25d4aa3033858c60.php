<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bba4c732775ac9653172ee166db7582d6984a032a7453b71f41fe5b90f1869d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f30317727ddf92d9b21a5d1345ac2b6750b8802eed6d11d5ad0744692cddcf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30317727ddf92d9b21a5d1345ac2b6750b8802eed6d11d5ad0744692cddcf46->enter($__internal_f30317727ddf92d9b21a5d1345ac2b6750b8802eed6d11d5ad0744692cddcf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b9ff44e959d37ef587638c9093745a38b7a42814e23c3587001e0a9afce4fd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ff44e959d37ef587638c9093745a38b7a42814e23c3587001e0a9afce4fd5f->enter($__internal_b9ff44e959d37ef587638c9093745a38b7a42814e23c3587001e0a9afce4fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f30317727ddf92d9b21a5d1345ac2b6750b8802eed6d11d5ad0744692cddcf46->leave($__internal_f30317727ddf92d9b21a5d1345ac2b6750b8802eed6d11d5ad0744692cddcf46_prof);

        
        $__internal_b9ff44e959d37ef587638c9093745a38b7a42814e23c3587001e0a9afce4fd5f->leave($__internal_b9ff44e959d37ef587638c9093745a38b7a42814e23c3587001e0a9afce4fd5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a84f0f99dfa0034450f9675062719d51e1fc028a02da5ec24db6ec1e8ac18e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a84f0f99dfa0034450f9675062719d51e1fc028a02da5ec24db6ec1e8ac18e9->enter($__internal_1a84f0f99dfa0034450f9675062719d51e1fc028a02da5ec24db6ec1e8ac18e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ad23d28c4b742893ae91eb1395670cd1ef3d3d915d5797b8b6b5acf65d110c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad23d28c4b742893ae91eb1395670cd1ef3d3d915d5797b8b6b5acf65d110c3->enter($__internal_3ad23d28c4b742893ae91eb1395670cd1ef3d3d915d5797b8b6b5acf65d110c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3ad23d28c4b742893ae91eb1395670cd1ef3d3d915d5797b8b6b5acf65d110c3->leave($__internal_3ad23d28c4b742893ae91eb1395670cd1ef3d3d915d5797b8b6b5acf65d110c3_prof);

        
        $__internal_1a84f0f99dfa0034450f9675062719d51e1fc028a02da5ec24db6ec1e8ac18e9->leave($__internal_1a84f0f99dfa0034450f9675062719d51e1fc028a02da5ec24db6ec1e8ac18e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
