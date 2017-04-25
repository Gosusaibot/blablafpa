<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6df43727939037632ebf822faee37f25ca06fbb8a22ea6a61595d2481a1f4972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6e771d57a3c156035919c523a1f0aa0e4b819293b71dba240b3e6eb39f65b2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e771d57a3c156035919c523a1f0aa0e4b819293b71dba240b3e6eb39f65b2ed->enter($__internal_6e771d57a3c156035919c523a1f0aa0e4b819293b71dba240b3e6eb39f65b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c2aae38ed7505799f18d75edc2feb433aa8762ac4c688d1b15f367234cda1554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aae38ed7505799f18d75edc2feb433aa8762ac4c688d1b15f367234cda1554->enter($__internal_c2aae38ed7505799f18d75edc2feb433aa8762ac4c688d1b15f367234cda1554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e771d57a3c156035919c523a1f0aa0e4b819293b71dba240b3e6eb39f65b2ed->leave($__internal_6e771d57a3c156035919c523a1f0aa0e4b819293b71dba240b3e6eb39f65b2ed_prof);

        
        $__internal_c2aae38ed7505799f18d75edc2feb433aa8762ac4c688d1b15f367234cda1554->leave($__internal_c2aae38ed7505799f18d75edc2feb433aa8762ac4c688d1b15f367234cda1554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f79a1b7e87381b2186d64fc3641eff1e9fa59ef9430d8bed25697a8533880278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79a1b7e87381b2186d64fc3641eff1e9fa59ef9430d8bed25697a8533880278->enter($__internal_f79a1b7e87381b2186d64fc3641eff1e9fa59ef9430d8bed25697a8533880278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00fb6fe7df65b9c37d2ca9239442606b7ce21e436215ee6001473ec7612de719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fb6fe7df65b9c37d2ca9239442606b7ce21e436215ee6001473ec7612de719->enter($__internal_00fb6fe7df65b9c37d2ca9239442606b7ce21e436215ee6001473ec7612de719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_00fb6fe7df65b9c37d2ca9239442606b7ce21e436215ee6001473ec7612de719->leave($__internal_00fb6fe7df65b9c37d2ca9239442606b7ce21e436215ee6001473ec7612de719_prof);

        
        $__internal_f79a1b7e87381b2186d64fc3641eff1e9fa59ef9430d8bed25697a8533880278->leave($__internal_f79a1b7e87381b2186d64fc3641eff1e9fa59ef9430d8bed25697a8533880278_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
