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
        $__internal_be58b74adebe1673726be04740abdd01d568ac6acf285ab3bbee3d6e1d2ae016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be58b74adebe1673726be04740abdd01d568ac6acf285ab3bbee3d6e1d2ae016->enter($__internal_be58b74adebe1673726be04740abdd01d568ac6acf285ab3bbee3d6e1d2ae016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_00f5ba7d3a5b627f7368b6096e3fb5a4fff11798e61983788243f13485896d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f5ba7d3a5b627f7368b6096e3fb5a4fff11798e61983788243f13485896d48->enter($__internal_00f5ba7d3a5b627f7368b6096e3fb5a4fff11798e61983788243f13485896d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_be58b74adebe1673726be04740abdd01d568ac6acf285ab3bbee3d6e1d2ae016->leave($__internal_be58b74adebe1673726be04740abdd01d568ac6acf285ab3bbee3d6e1d2ae016_prof);

        
        $__internal_00f5ba7d3a5b627f7368b6096e3fb5a4fff11798e61983788243f13485896d48->leave($__internal_00f5ba7d3a5b627f7368b6096e3fb5a4fff11798e61983788243f13485896d48_prof);

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
