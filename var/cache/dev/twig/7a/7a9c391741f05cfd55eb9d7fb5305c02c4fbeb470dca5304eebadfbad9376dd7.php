<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_02a2cb58fa61fa0a886d56dbb3f2d6767fbd4ca505d9a446b6df88de05abdcf3 extends Twig_Template
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
        $__internal_905e7207fd1fcaf0234c52e55fb8552193fd604e28d5bcf87761f7bec410908c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905e7207fd1fcaf0234c52e55fb8552193fd604e28d5bcf87761f7bec410908c->enter($__internal_905e7207fd1fcaf0234c52e55fb8552193fd604e28d5bcf87761f7bec410908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1686a0c9968ee7165036db54029e1862308a490854c31081ae269e3c52aec368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1686a0c9968ee7165036db54029e1862308a490854c31081ae269e3c52aec368->enter($__internal_1686a0c9968ee7165036db54029e1862308a490854c31081ae269e3c52aec368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_905e7207fd1fcaf0234c52e55fb8552193fd604e28d5bcf87761f7bec410908c->leave($__internal_905e7207fd1fcaf0234c52e55fb8552193fd604e28d5bcf87761f7bec410908c_prof);

        
        $__internal_1686a0c9968ee7165036db54029e1862308a490854c31081ae269e3c52aec368->leave($__internal_1686a0c9968ee7165036db54029e1862308a490854c31081ae269e3c52aec368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
