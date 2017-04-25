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
        $__internal_32c0de0acd7d60ae27e28cf8afca5c4ac1032a14da8c7113b71c1621d5512ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c0de0acd7d60ae27e28cf8afca5c4ac1032a14da8c7113b71c1621d5512ce5->enter($__internal_32c0de0acd7d60ae27e28cf8afca5c4ac1032a14da8c7113b71c1621d5512ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f674e260eed03595c85f3e284ba9ffd0176b4fff64fdeb1b2e4e259b0293a50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f674e260eed03595c85f3e284ba9ffd0176b4fff64fdeb1b2e4e259b0293a50c->enter($__internal_f674e260eed03595c85f3e284ba9ffd0176b4fff64fdeb1b2e4e259b0293a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32c0de0acd7d60ae27e28cf8afca5c4ac1032a14da8c7113b71c1621d5512ce5->leave($__internal_32c0de0acd7d60ae27e28cf8afca5c4ac1032a14da8c7113b71c1621d5512ce5_prof);

        
        $__internal_f674e260eed03595c85f3e284ba9ffd0176b4fff64fdeb1b2e4e259b0293a50c->leave($__internal_f674e260eed03595c85f3e284ba9ffd0176b4fff64fdeb1b2e4e259b0293a50c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_04ee447e8afc44826819465a9c63eb7530bfabe93fe8496e89676226d476247b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ee447e8afc44826819465a9c63eb7530bfabe93fe8496e89676226d476247b->enter($__internal_04ee447e8afc44826819465a9c63eb7530bfabe93fe8496e89676226d476247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ede8df4a46ffa11bf6fa1a36536b6b1e0061229853954ff6939cb3dcfae81c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede8df4a46ffa11bf6fa1a36536b6b1e0061229853954ff6939cb3dcfae81c2b->enter($__internal_ede8df4a46ffa11bf6fa1a36536b6b1e0061229853954ff6939cb3dcfae81c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ede8df4a46ffa11bf6fa1a36536b6b1e0061229853954ff6939cb3dcfae81c2b->leave($__internal_ede8df4a46ffa11bf6fa1a36536b6b1e0061229853954ff6939cb3dcfae81c2b_prof);

        
        $__internal_04ee447e8afc44826819465a9c63eb7530bfabe93fe8496e89676226d476247b->leave($__internal_04ee447e8afc44826819465a9c63eb7530bfabe93fe8496e89676226d476247b_prof);

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
