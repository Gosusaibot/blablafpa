<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_364ea80ae0ba698e62971c04902109dfac71fd197491b6d8be9377272bc8e29d extends Twig_Template
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
        $__internal_2f19ea87f59381e74babb11dfa7160beb78f97f3e0beb715c243cc8ac12e4788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f19ea87f59381e74babb11dfa7160beb78f97f3e0beb715c243cc8ac12e4788->enter($__internal_2f19ea87f59381e74babb11dfa7160beb78f97f3e0beb715c243cc8ac12e4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_78b5cdfe0cb162dd2c9d6870049f843fb8aeb3e29ab64131fbf3a79610bbd9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b5cdfe0cb162dd2c9d6870049f843fb8aeb3e29ab64131fbf3a79610bbd9bb->enter($__internal_78b5cdfe0cb162dd2c9d6870049f843fb8aeb3e29ab64131fbf3a79610bbd9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2f19ea87f59381e74babb11dfa7160beb78f97f3e0beb715c243cc8ac12e4788->leave($__internal_2f19ea87f59381e74babb11dfa7160beb78f97f3e0beb715c243cc8ac12e4788_prof);

        
        $__internal_78b5cdfe0cb162dd2c9d6870049f843fb8aeb3e29ab64131fbf3a79610bbd9bb->leave($__internal_78b5cdfe0cb162dd2c9d6870049f843fb8aeb3e29ab64131fbf3a79610bbd9bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
