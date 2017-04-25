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
        $__internal_9b78e9bc525d251b107bbea44e125cbd31f66231f343d81f3362f668ecc3418e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b78e9bc525d251b107bbea44e125cbd31f66231f343d81f3362f668ecc3418e->enter($__internal_9b78e9bc525d251b107bbea44e125cbd31f66231f343d81f3362f668ecc3418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f6d2ef00dfa856b1a04858360cf898dffb3231c699b472b78d69c1dcefbddb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d2ef00dfa856b1a04858360cf898dffb3231c699b472b78d69c1dcefbddb2d->enter($__internal_f6d2ef00dfa856b1a04858360cf898dffb3231c699b472b78d69c1dcefbddb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9b78e9bc525d251b107bbea44e125cbd31f66231f343d81f3362f668ecc3418e->leave($__internal_9b78e9bc525d251b107bbea44e125cbd31f66231f343d81f3362f668ecc3418e_prof);

        
        $__internal_f6d2ef00dfa856b1a04858360cf898dffb3231c699b472b78d69c1dcefbddb2d->leave($__internal_f6d2ef00dfa856b1a04858360cf898dffb3231c699b472b78d69c1dcefbddb2d_prof);

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
