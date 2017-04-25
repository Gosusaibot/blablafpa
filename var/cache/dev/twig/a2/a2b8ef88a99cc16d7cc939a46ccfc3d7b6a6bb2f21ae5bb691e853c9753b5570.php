<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bea71ae888b19daa935e489e30b77dc9d814a84fcd3ff7a5766db62a9d235bb2 extends Twig_Template
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
        $__internal_12c13e7d92c90c1c45105b5852a8a04a34136a104874af18b102a61228e20cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c13e7d92c90c1c45105b5852a8a04a34136a104874af18b102a61228e20cd1->enter($__internal_12c13e7d92c90c1c45105b5852a8a04a34136a104874af18b102a61228e20cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_af8d688e90022545c6cf72b2874af179ee79bb1413fa043ddfcdfb6c8f088f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8d688e90022545c6cf72b2874af179ee79bb1413fa043ddfcdfb6c8f088f43->enter($__internal_af8d688e90022545c6cf72b2874af179ee79bb1413fa043ddfcdfb6c8f088f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_12c13e7d92c90c1c45105b5852a8a04a34136a104874af18b102a61228e20cd1->leave($__internal_12c13e7d92c90c1c45105b5852a8a04a34136a104874af18b102a61228e20cd1_prof);

        
        $__internal_af8d688e90022545c6cf72b2874af179ee79bb1413fa043ddfcdfb6c8f088f43->leave($__internal_af8d688e90022545c6cf72b2874af179ee79bb1413fa043ddfcdfb6c8f088f43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
