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
        $__internal_1ad9a02c5a88a46c8854fc487584a58b1a81dee71f5ce6313449826358e1ea29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad9a02c5a88a46c8854fc487584a58b1a81dee71f5ce6313449826358e1ea29->enter($__internal_1ad9a02c5a88a46c8854fc487584a58b1a81dee71f5ce6313449826358e1ea29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e777c836ad4745997cb5f24c656233c848fe14536266578a2d5b3511d380c995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e777c836ad4745997cb5f24c656233c848fe14536266578a2d5b3511d380c995->enter($__internal_e777c836ad4745997cb5f24c656233c848fe14536266578a2d5b3511d380c995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1ad9a02c5a88a46c8854fc487584a58b1a81dee71f5ce6313449826358e1ea29->leave($__internal_1ad9a02c5a88a46c8854fc487584a58b1a81dee71f5ce6313449826358e1ea29_prof);

        
        $__internal_e777c836ad4745997cb5f24c656233c848fe14536266578a2d5b3511d380c995->leave($__internal_e777c836ad4745997cb5f24c656233c848fe14536266578a2d5b3511d380c995_prof);

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
