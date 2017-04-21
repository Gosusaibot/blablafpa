<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6f5e433e49c1ac833a8deadd2f2b272bd11cbfb64962a844bad77dd5ef82fe78 extends Twig_Template
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
        $__internal_73ad9dfc301b50d9743cd724f303cb64a9b765ca3d9fc38e88af3c88b211408f = $this->env->getExtension("native_profiler");
        $__internal_73ad9dfc301b50d9743cd724f303cb64a9b765ca3d9fc38e88af3c88b211408f->enter($__internal_73ad9dfc301b50d9743cd724f303cb64a9b765ca3d9fc38e88af3c88b211408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_73ad9dfc301b50d9743cd724f303cb64a9b765ca3d9fc38e88af3c88b211408f->leave($__internal_73ad9dfc301b50d9743cd724f303cb64a9b765ca3d9fc38e88af3c88b211408f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6c23fbe486ab3cb905dcb41a7b202e185b6e8c1c6e961de0c7b3efa72661d1d = $this->env->getExtension("native_profiler");
        $__internal_e6c23fbe486ab3cb905dcb41a7b202e185b6e8c1c6e961de0c7b3efa72661d1d->enter($__internal_e6c23fbe486ab3cb905dcb41a7b202e185b6e8c1c6e961de0c7b3efa72661d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e6c23fbe486ab3cb905dcb41a7b202e185b6e8c1c6e961de0c7b3efa72661d1d->leave($__internal_e6c23fbe486ab3cb905dcb41a7b202e185b6e8c1c6e961de0c7b3efa72661d1d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
