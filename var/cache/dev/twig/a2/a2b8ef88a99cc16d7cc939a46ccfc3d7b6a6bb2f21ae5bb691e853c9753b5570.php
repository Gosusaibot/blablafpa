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
        $__internal_74fd02066c1db909716708e6f97b5717dfc9dbd67febc7d0c4b52dc2f54ae1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fd02066c1db909716708e6f97b5717dfc9dbd67febc7d0c4b52dc2f54ae1b3->enter($__internal_74fd02066c1db909716708e6f97b5717dfc9dbd67febc7d0c4b52dc2f54ae1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1342620e29f80950af241eb15e2e067fc5f918b901cee51063d0e7414cf7f472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1342620e29f80950af241eb15e2e067fc5f918b901cee51063d0e7414cf7f472->enter($__internal_1342620e29f80950af241eb15e2e067fc5f918b901cee51063d0e7414cf7f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_74fd02066c1db909716708e6f97b5717dfc9dbd67febc7d0c4b52dc2f54ae1b3->leave($__internal_74fd02066c1db909716708e6f97b5717dfc9dbd67febc7d0c4b52dc2f54ae1b3_prof);

        
        $__internal_1342620e29f80950af241eb15e2e067fc5f918b901cee51063d0e7414cf7f472->leave($__internal_1342620e29f80950af241eb15e2e067fc5f918b901cee51063d0e7414cf7f472_prof);

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
