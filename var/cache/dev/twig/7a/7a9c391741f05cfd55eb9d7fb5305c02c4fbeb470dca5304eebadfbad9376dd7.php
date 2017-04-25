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
        $__internal_3c2abb5490f0c9a260e23c8139c0d438cb807144cda78362f8a77bca880e87b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2abb5490f0c9a260e23c8139c0d438cb807144cda78362f8a77bca880e87b5->enter($__internal_3c2abb5490f0c9a260e23c8139c0d438cb807144cda78362f8a77bca880e87b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8a1b0e2781f8fc85d9618d7d3827d31e254bf95b82c802a0317e8b9b366c4821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1b0e2781f8fc85d9618d7d3827d31e254bf95b82c802a0317e8b9b366c4821->enter($__internal_8a1b0e2781f8fc85d9618d7d3827d31e254bf95b82c802a0317e8b9b366c4821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3c2abb5490f0c9a260e23c8139c0d438cb807144cda78362f8a77bca880e87b5->leave($__internal_3c2abb5490f0c9a260e23c8139c0d438cb807144cda78362f8a77bca880e87b5_prof);

        
        $__internal_8a1b0e2781f8fc85d9618d7d3827d31e254bf95b82c802a0317e8b9b366c4821->leave($__internal_8a1b0e2781f8fc85d9618d7d3827d31e254bf95b82c802a0317e8b9b366c4821_prof);

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
