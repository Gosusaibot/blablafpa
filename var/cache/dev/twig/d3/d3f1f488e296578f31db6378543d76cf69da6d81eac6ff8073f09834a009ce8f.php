<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f84f5379e2c1138e57e523e4303bcd6d8741dd42268542194d3ebc3f25c5c103 extends Twig_Template
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
        $__internal_87c87919de234ce103c05aa9392db9ba836e648fff11a41ae20170f031efc2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c87919de234ce103c05aa9392db9ba836e648fff11a41ae20170f031efc2dd->enter($__internal_87c87919de234ce103c05aa9392db9ba836e648fff11a41ae20170f031efc2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8fef43d90700b176eea3352188abce3f00efaef0d341091c1b872f827f13b031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fef43d90700b176eea3352188abce3f00efaef0d341091c1b872f827f13b031->enter($__internal_8fef43d90700b176eea3352188abce3f00efaef0d341091c1b872f827f13b031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_87c87919de234ce103c05aa9392db9ba836e648fff11a41ae20170f031efc2dd->leave($__internal_87c87919de234ce103c05aa9392db9ba836e648fff11a41ae20170f031efc2dd_prof);

        
        $__internal_8fef43d90700b176eea3352188abce3f00efaef0d341091c1b872f827f13b031->leave($__internal_8fef43d90700b176eea3352188abce3f00efaef0d341091c1b872f827f13b031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
