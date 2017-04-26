<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fcc3fb1c7e3af52fdf39120c7c98416c1357cc5ec601d1171d36b96a556a7f81 extends Twig_Template
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
        $__internal_4ea2d45d79d6cc97de836b434b5193a12d9535e9d02e2176dab456e7378883b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea2d45d79d6cc97de836b434b5193a12d9535e9d02e2176dab456e7378883b2->enter($__internal_4ea2d45d79d6cc97de836b434b5193a12d9535e9d02e2176dab456e7378883b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dc2c8b564318ceb8a9740b792f14322f3e01f1e43a059d6a79581b90c61bebb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2c8b564318ceb8a9740b792f14322f3e01f1e43a059d6a79581b90c61bebb3->enter($__internal_dc2c8b564318ceb8a9740b792f14322f3e01f1e43a059d6a79581b90c61bebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4ea2d45d79d6cc97de836b434b5193a12d9535e9d02e2176dab456e7378883b2->leave($__internal_4ea2d45d79d6cc97de836b434b5193a12d9535e9d02e2176dab456e7378883b2_prof);

        
        $__internal_dc2c8b564318ceb8a9740b792f14322f3e01f1e43a059d6a79581b90c61bebb3->leave($__internal_dc2c8b564318ceb8a9740b792f14322f3e01f1e43a059d6a79581b90c61bebb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
