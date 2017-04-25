<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4eeb1516657ae84568da24c2e24cfd028eb64781409d2998fa7c6c82a43bb39d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a1d729e4720a0d35d24d4ad1409d5c64a010e152c5902c8ca55d23d88ee5b2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d729e4720a0d35d24d4ad1409d5c64a010e152c5902c8ca55d23d88ee5b2fb->enter($__internal_a1d729e4720a0d35d24d4ad1409d5c64a010e152c5902c8ca55d23d88ee5b2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_6044d491cc81b3a9dad25049120cbd4bf92706a3a99c471928ddf97262cfa943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6044d491cc81b3a9dad25049120cbd4bf92706a3a99c471928ddf97262cfa943->enter($__internal_6044d491cc81b3a9dad25049120cbd4bf92706a3a99c471928ddf97262cfa943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d729e4720a0d35d24d4ad1409d5c64a010e152c5902c8ca55d23d88ee5b2fb->leave($__internal_a1d729e4720a0d35d24d4ad1409d5c64a010e152c5902c8ca55d23d88ee5b2fb_prof);

        
        $__internal_6044d491cc81b3a9dad25049120cbd4bf92706a3a99c471928ddf97262cfa943->leave($__internal_6044d491cc81b3a9dad25049120cbd4bf92706a3a99c471928ddf97262cfa943_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f571874d36d0dc598738bedd71568453c4d5257c9a7629cc8b06f3a26414f9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f571874d36d0dc598738bedd71568453c4d5257c9a7629cc8b06f3a26414f9f2->enter($__internal_f571874d36d0dc598738bedd71568453c4d5257c9a7629cc8b06f3a26414f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87f236c414eb2329e85e6cd5916b0ebd3c4ba0100029c5ed439b8bf5cf023dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f236c414eb2329e85e6cd5916b0ebd3c4ba0100029c5ed439b8bf5cf023dcf->enter($__internal_87f236c414eb2329e85e6cd5916b0ebd3c4ba0100029c5ed439b8bf5cf023dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_87f236c414eb2329e85e6cd5916b0ebd3c4ba0100029c5ed439b8bf5cf023dcf->leave($__internal_87f236c414eb2329e85e6cd5916b0ebd3c4ba0100029c5ed439b8bf5cf023dcf_prof);

        
        $__internal_f571874d36d0dc598738bedd71568453c4d5257c9a7629cc8b06f3a26414f9f2->leave($__internal_f571874d36d0dc598738bedd71568453c4d5257c9a7629cc8b06f3a26414f9f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
