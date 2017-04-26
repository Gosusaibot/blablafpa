<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fb395342924a6d5100e34054b533a2ec207010aa1e6a359a80d428f38934f3ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_559cf5920128cfc48c038498369aa84b6c6cf3b2b340777553575ccc06dbad26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559cf5920128cfc48c038498369aa84b6c6cf3b2b340777553575ccc06dbad26->enter($__internal_559cf5920128cfc48c038498369aa84b6c6cf3b2b340777553575ccc06dbad26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_99f53e1023fb9cea1855447720832867bb438e930374eb6aa1eb17625f05bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f53e1023fb9cea1855447720832867bb438e930374eb6aa1eb17625f05bb10->enter($__internal_99f53e1023fb9cea1855447720832867bb438e930374eb6aa1eb17625f05bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_559cf5920128cfc48c038498369aa84b6c6cf3b2b340777553575ccc06dbad26->leave($__internal_559cf5920128cfc48c038498369aa84b6c6cf3b2b340777553575ccc06dbad26_prof);

        
        $__internal_99f53e1023fb9cea1855447720832867bb438e930374eb6aa1eb17625f05bb10->leave($__internal_99f53e1023fb9cea1855447720832867bb438e930374eb6aa1eb17625f05bb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
