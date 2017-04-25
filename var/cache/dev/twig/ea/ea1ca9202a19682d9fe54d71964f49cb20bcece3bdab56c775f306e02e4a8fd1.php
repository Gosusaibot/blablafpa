<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4e3fb5a63fe32ddcf9a112b6a751bc5a0428c42101dcffc966eaf9227e6394aa extends Twig_Template
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
        $__internal_e4603e25f79aa25c61950221231ff91c6785cbcab0dda86b5c50ecab6b84a222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4603e25f79aa25c61950221231ff91c6785cbcab0dda86b5c50ecab6b84a222->enter($__internal_e4603e25f79aa25c61950221231ff91c6785cbcab0dda86b5c50ecab6b84a222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2e583f7feaa5f3e1c8f9bea500907e8eb30af00218da24960a4e461312b705eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e583f7feaa5f3e1c8f9bea500907e8eb30af00218da24960a4e461312b705eb->enter($__internal_2e583f7feaa5f3e1c8f9bea500907e8eb30af00218da24960a4e461312b705eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e4603e25f79aa25c61950221231ff91c6785cbcab0dda86b5c50ecab6b84a222->leave($__internal_e4603e25f79aa25c61950221231ff91c6785cbcab0dda86b5c50ecab6b84a222_prof);

        
        $__internal_2e583f7feaa5f3e1c8f9bea500907e8eb30af00218da24960a4e461312b705eb->leave($__internal_2e583f7feaa5f3e1c8f9bea500907e8eb30af00218da24960a4e461312b705eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
