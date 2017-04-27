<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c458d7c6a9c09dfa7daea39c5b996c64c9f64d46a62e70dd6212cbd77af1f737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a4d434bb07c4113c3132317dbfdd112c248f88241af279f751989d242583733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4d434bb07c4113c3132317dbfdd112c248f88241af279f751989d242583733->enter($__internal_6a4d434bb07c4113c3132317dbfdd112c248f88241af279f751989d242583733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_37fda280730a87776737c594298f46169e8e6a8c13a21ef1e5a0b55c0f78491e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fda280730a87776737c594298f46169e8e6a8c13a21ef1e5a0b55c0f78491e->enter($__internal_37fda280730a87776737c594298f46169e8e6a8c13a21ef1e5a0b55c0f78491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a4d434bb07c4113c3132317dbfdd112c248f88241af279f751989d242583733->leave($__internal_6a4d434bb07c4113c3132317dbfdd112c248f88241af279f751989d242583733_prof);

        
        $__internal_37fda280730a87776737c594298f46169e8e6a8c13a21ef1e5a0b55c0f78491e->leave($__internal_37fda280730a87776737c594298f46169e8e6a8c13a21ef1e5a0b55c0f78491e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b42095ef48db4167bc814274ebae3f24d339e08119657a7d7ba8d5c1ca975b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42095ef48db4167bc814274ebae3f24d339e08119657a7d7ba8d5c1ca975b44->enter($__internal_b42095ef48db4167bc814274ebae3f24d339e08119657a7d7ba8d5c1ca975b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_960ec7ee6d3e637e8992626b7cc2aa647ea6d1f2fd62ab4d7e1cd2c4b2242571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960ec7ee6d3e637e8992626b7cc2aa647ea6d1f2fd62ab4d7e1cd2c4b2242571->enter($__internal_960ec7ee6d3e637e8992626b7cc2aa647ea6d1f2fd62ab4d7e1cd2c4b2242571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_960ec7ee6d3e637e8992626b7cc2aa647ea6d1f2fd62ab4d7e1cd2c4b2242571->leave($__internal_960ec7ee6d3e637e8992626b7cc2aa647ea6d1f2fd62ab4d7e1cd2c4b2242571_prof);

        
        $__internal_b42095ef48db4167bc814274ebae3f24d339e08119657a7d7ba8d5c1ca975b44->leave($__internal_b42095ef48db4167bc814274ebae3f24d339e08119657a7d7ba8d5c1ca975b44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
