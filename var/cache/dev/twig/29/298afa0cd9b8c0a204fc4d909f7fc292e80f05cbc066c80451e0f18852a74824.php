<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b184bbd8c22729a7f84f2e1f218a079865725c8549b792633ffadd0bcb0dff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5ec1e5f0e1eb5c7bd87b22d51858f0b4e8bd62dfcbbfea0d56c0d41ed0d718 = $this->env->getExtension("native_profiler");
        $__internal_8c5ec1e5f0e1eb5c7bd87b22d51858f0b4e8bd62dfcbbfea0d56c0d41ed0d718->enter($__internal_8c5ec1e5f0e1eb5c7bd87b22d51858f0b4e8bd62dfcbbfea0d56c0d41ed0d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5ec1e5f0e1eb5c7bd87b22d51858f0b4e8bd62dfcbbfea0d56c0d41ed0d718->leave($__internal_8c5ec1e5f0e1eb5c7bd87b22d51858f0b4e8bd62dfcbbfea0d56c0d41ed0d718_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e8a53448bfa722e21847625a5a531853e8b1ef27592cdddc841fdf4245607a4 = $this->env->getExtension("native_profiler");
        $__internal_1e8a53448bfa722e21847625a5a531853e8b1ef27592cdddc841fdf4245607a4->enter($__internal_1e8a53448bfa722e21847625a5a531853e8b1ef27592cdddc841fdf4245607a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e8a53448bfa722e21847625a5a531853e8b1ef27592cdddc841fdf4245607a4->leave($__internal_1e8a53448bfa722e21847625a5a531853e8b1ef27592cdddc841fdf4245607a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44dc390d5233f777a802b32b8dc8ad14ad75f1e992b7485a7146e90138b0c552 = $this->env->getExtension("native_profiler");
        $__internal_44dc390d5233f777a802b32b8dc8ad14ad75f1e992b7485a7146e90138b0c552->enter($__internal_44dc390d5233f777a802b32b8dc8ad14ad75f1e992b7485a7146e90138b0c552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44dc390d5233f777a802b32b8dc8ad14ad75f1e992b7485a7146e90138b0c552->leave($__internal_44dc390d5233f777a802b32b8dc8ad14ad75f1e992b7485a7146e90138b0c552_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ee9fcade8925b38b4ef0d907ec4ca8d403b678e52509bec20b67e40e276b81b = $this->env->getExtension("native_profiler");
        $__internal_6ee9fcade8925b38b4ef0d907ec4ca8d403b678e52509bec20b67e40e276b81b->enter($__internal_6ee9fcade8925b38b4ef0d907ec4ca8d403b678e52509bec20b67e40e276b81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ee9fcade8925b38b4ef0d907ec4ca8d403b678e52509bec20b67e40e276b81b->leave($__internal_6ee9fcade8925b38b4ef0d907ec4ca8d403b678e52509bec20b67e40e276b81b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
