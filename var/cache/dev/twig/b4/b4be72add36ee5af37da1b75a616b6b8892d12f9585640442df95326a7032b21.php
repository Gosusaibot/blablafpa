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
        $__internal_63a354755bda9ade5514935acae5f168dad3b899bd75b4b7440f8b88bb0eccf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a354755bda9ade5514935acae5f168dad3b899bd75b4b7440f8b88bb0eccf7->enter($__internal_63a354755bda9ade5514935acae5f168dad3b899bd75b4b7440f8b88bb0eccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6f44015ea49f19ce7d59cbc4154d704505b9b10ea27672682f11a1aea6199dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f44015ea49f19ce7d59cbc4154d704505b9b10ea27672682f11a1aea6199dbd->enter($__internal_6f44015ea49f19ce7d59cbc4154d704505b9b10ea27672682f11a1aea6199dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_63a354755bda9ade5514935acae5f168dad3b899bd75b4b7440f8b88bb0eccf7->leave($__internal_63a354755bda9ade5514935acae5f168dad3b899bd75b4b7440f8b88bb0eccf7_prof);

        
        $__internal_6f44015ea49f19ce7d59cbc4154d704505b9b10ea27672682f11a1aea6199dbd->leave($__internal_6f44015ea49f19ce7d59cbc4154d704505b9b10ea27672682f11a1aea6199dbd_prof);

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
