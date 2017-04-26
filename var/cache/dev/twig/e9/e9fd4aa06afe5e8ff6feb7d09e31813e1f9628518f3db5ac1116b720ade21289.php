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
        $__internal_04363e74feb655f4388f14aed89fbea60f8fcdf47f5256e6cab0e5f7e3f78fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04363e74feb655f4388f14aed89fbea60f8fcdf47f5256e6cab0e5f7e3f78fab->enter($__internal_04363e74feb655f4388f14aed89fbea60f8fcdf47f5256e6cab0e5f7e3f78fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_543ca46f61115628721d2fdd70a79688ac0701700c1a0af08235c7ae1e8cf3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543ca46f61115628721d2fdd70a79688ac0701700c1a0af08235c7ae1e8cf3a3->enter($__internal_543ca46f61115628721d2fdd70a79688ac0701700c1a0af08235c7ae1e8cf3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04363e74feb655f4388f14aed89fbea60f8fcdf47f5256e6cab0e5f7e3f78fab->leave($__internal_04363e74feb655f4388f14aed89fbea60f8fcdf47f5256e6cab0e5f7e3f78fab_prof);

        
        $__internal_543ca46f61115628721d2fdd70a79688ac0701700c1a0af08235c7ae1e8cf3a3->leave($__internal_543ca46f61115628721d2fdd70a79688ac0701700c1a0af08235c7ae1e8cf3a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8eda1507be2c656ea868c3674bd18677dbac0cdb8c4de01f5a1817ceb8869d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8eda1507be2c656ea868c3674bd18677dbac0cdb8c4de01f5a1817ceb8869d8->enter($__internal_e8eda1507be2c656ea868c3674bd18677dbac0cdb8c4de01f5a1817ceb8869d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9f9109955c0e5085ae781ada2377c9fd14c425aaacbaff9cefad73fd419422c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f9109955c0e5085ae781ada2377c9fd14c425aaacbaff9cefad73fd419422c->enter($__internal_a9f9109955c0e5085ae781ada2377c9fd14c425aaacbaff9cefad73fd419422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a9f9109955c0e5085ae781ada2377c9fd14c425aaacbaff9cefad73fd419422c->leave($__internal_a9f9109955c0e5085ae781ada2377c9fd14c425aaacbaff9cefad73fd419422c_prof);

        
        $__internal_e8eda1507be2c656ea868c3674bd18677dbac0cdb8c4de01f5a1817ceb8869d8->leave($__internal_e8eda1507be2c656ea868c3674bd18677dbac0cdb8c4de01f5a1817ceb8869d8_prof);

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
