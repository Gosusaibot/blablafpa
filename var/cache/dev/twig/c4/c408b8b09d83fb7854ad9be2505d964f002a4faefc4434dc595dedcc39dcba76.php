<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3a03f5837300c387706e6d79c67eba0c03750769d84ee75295c2fd8e910a1c83 extends Twig_Template
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
        $__internal_4455f07a2ac7a61d71de0467ff340791f7e98eefc7628caf2e241df43b7cc3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4455f07a2ac7a61d71de0467ff340791f7e98eefc7628caf2e241df43b7cc3b7->enter($__internal_4455f07a2ac7a61d71de0467ff340791f7e98eefc7628caf2e241df43b7cc3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_42ae2ea77b3d755c9804268ef5fc22c0db088180a70c81d6d6cf737feac70707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ae2ea77b3d755c9804268ef5fc22c0db088180a70c81d6d6cf737feac70707->enter($__internal_42ae2ea77b3d755c9804268ef5fc22c0db088180a70c81d6d6cf737feac70707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4455f07a2ac7a61d71de0467ff340791f7e98eefc7628caf2e241df43b7cc3b7->leave($__internal_4455f07a2ac7a61d71de0467ff340791f7e98eefc7628caf2e241df43b7cc3b7_prof);

        
        $__internal_42ae2ea77b3d755c9804268ef5fc22c0db088180a70c81d6d6cf737feac70707->leave($__internal_42ae2ea77b3d755c9804268ef5fc22c0db088180a70c81d6d6cf737feac70707_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
