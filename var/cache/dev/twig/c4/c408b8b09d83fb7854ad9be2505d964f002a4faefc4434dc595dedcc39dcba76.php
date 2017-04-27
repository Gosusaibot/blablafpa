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
        $__internal_b9f5d053baa491ab1c682a9c9f8c5176c2bd1d1b8ca3fa21df70db9210596aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f5d053baa491ab1c682a9c9f8c5176c2bd1d1b8ca3fa21df70db9210596aa2->enter($__internal_b9f5d053baa491ab1c682a9c9f8c5176c2bd1d1b8ca3fa21df70db9210596aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_dfd81d66a69800a93193ba5cc6ab180a89d5e244d8f5e8f7dfb605370f9bce2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd81d66a69800a93193ba5cc6ab180a89d5e244d8f5e8f7dfb605370f9bce2a->enter($__internal_dfd81d66a69800a93193ba5cc6ab180a89d5e244d8f5e8f7dfb605370f9bce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b9f5d053baa491ab1c682a9c9f8c5176c2bd1d1b8ca3fa21df70db9210596aa2->leave($__internal_b9f5d053baa491ab1c682a9c9f8c5176c2bd1d1b8ca3fa21df70db9210596aa2_prof);

        
        $__internal_dfd81d66a69800a93193ba5cc6ab180a89d5e244d8f5e8f7dfb605370f9bce2a->leave($__internal_dfd81d66a69800a93193ba5cc6ab180a89d5e244d8f5e8f7dfb605370f9bce2a_prof);

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
