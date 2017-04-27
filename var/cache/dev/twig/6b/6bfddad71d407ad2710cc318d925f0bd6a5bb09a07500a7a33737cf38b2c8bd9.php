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
        $__internal_74b0824921aa3f195120fc2d10eaf1a43f7ea85c4b0f8d54d0ab56d2813d33fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b0824921aa3f195120fc2d10eaf1a43f7ea85c4b0f8d54d0ab56d2813d33fe->enter($__internal_74b0824921aa3f195120fc2d10eaf1a43f7ea85c4b0f8d54d0ab56d2813d33fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_658851661bb8ac2a0b68a959ac16ea10204135ab6c952dfca577f046cac0e1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658851661bb8ac2a0b68a959ac16ea10204135ab6c952dfca577f046cac0e1ca->enter($__internal_658851661bb8ac2a0b68a959ac16ea10204135ab6c952dfca577f046cac0e1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_74b0824921aa3f195120fc2d10eaf1a43f7ea85c4b0f8d54d0ab56d2813d33fe->leave($__internal_74b0824921aa3f195120fc2d10eaf1a43f7ea85c4b0f8d54d0ab56d2813d33fe_prof);

        
        $__internal_658851661bb8ac2a0b68a959ac16ea10204135ab6c952dfca577f046cac0e1ca->leave($__internal_658851661bb8ac2a0b68a959ac16ea10204135ab6c952dfca577f046cac0e1ca_prof);

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
