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
        $__internal_51de8a4c0765589bd77511daf3158c6a2d68398620f6a622a9191fd64b8889d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51de8a4c0765589bd77511daf3158c6a2d68398620f6a622a9191fd64b8889d6->enter($__internal_51de8a4c0765589bd77511daf3158c6a2d68398620f6a622a9191fd64b8889d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_dd4e64c07fa3f795c636f958852e3e94577d8f395ece965e116ee356d4cf523f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4e64c07fa3f795c636f958852e3e94577d8f395ece965e116ee356d4cf523f->enter($__internal_dd4e64c07fa3f795c636f958852e3e94577d8f395ece965e116ee356d4cf523f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51de8a4c0765589bd77511daf3158c6a2d68398620f6a622a9191fd64b8889d6->leave($__internal_51de8a4c0765589bd77511daf3158c6a2d68398620f6a622a9191fd64b8889d6_prof);

        
        $__internal_dd4e64c07fa3f795c636f958852e3e94577d8f395ece965e116ee356d4cf523f->leave($__internal_dd4e64c07fa3f795c636f958852e3e94577d8f395ece965e116ee356d4cf523f_prof);

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
