<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f6e00ce2da40a006376d478ded1e92cfd93af5bda2361873e659976965d0e10d extends Twig_Template
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
        $__internal_d48ca8bd3a7ea7f26a1a50f8246d2c66f9532e1e0c8b8b5144718d7748e7e163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48ca8bd3a7ea7f26a1a50f8246d2c66f9532e1e0c8b8b5144718d7748e7e163->enter($__internal_d48ca8bd3a7ea7f26a1a50f8246d2c66f9532e1e0c8b8b5144718d7748e7e163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d625fc7b2d310edc3730e93cf6c59a1149d3c92bd42690da23ef1d0cfbb6d358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d625fc7b2d310edc3730e93cf6c59a1149d3c92bd42690da23ef1d0cfbb6d358->enter($__internal_d625fc7b2d310edc3730e93cf6c59a1149d3c92bd42690da23ef1d0cfbb6d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d48ca8bd3a7ea7f26a1a50f8246d2c66f9532e1e0c8b8b5144718d7748e7e163->leave($__internal_d48ca8bd3a7ea7f26a1a50f8246d2c66f9532e1e0c8b8b5144718d7748e7e163_prof);

        
        $__internal_d625fc7b2d310edc3730e93cf6c59a1149d3c92bd42690da23ef1d0cfbb6d358->leave($__internal_d625fc7b2d310edc3730e93cf6c59a1149d3c92bd42690da23ef1d0cfbb6d358_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
