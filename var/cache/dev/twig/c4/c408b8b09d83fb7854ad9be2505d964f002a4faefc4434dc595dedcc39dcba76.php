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
        $__internal_bc13d8fe6a279f351648aca966913269a9819df7ef32a67aa49248db84a5283e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc13d8fe6a279f351648aca966913269a9819df7ef32a67aa49248db84a5283e->enter($__internal_bc13d8fe6a279f351648aca966913269a9819df7ef32a67aa49248db84a5283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_73eb6bb96cff69f98e0e39c972b49293d8b9bf9bf08d8b277f111e21f33334c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73eb6bb96cff69f98e0e39c972b49293d8b9bf9bf08d8b277f111e21f33334c9->enter($__internal_73eb6bb96cff69f98e0e39c972b49293d8b9bf9bf08d8b277f111e21f33334c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bc13d8fe6a279f351648aca966913269a9819df7ef32a67aa49248db84a5283e->leave($__internal_bc13d8fe6a279f351648aca966913269a9819df7ef32a67aa49248db84a5283e_prof);

        
        $__internal_73eb6bb96cff69f98e0e39c972b49293d8b9bf9bf08d8b277f111e21f33334c9->leave($__internal_73eb6bb96cff69f98e0e39c972b49293d8b9bf9bf08d8b277f111e21f33334c9_prof);

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
