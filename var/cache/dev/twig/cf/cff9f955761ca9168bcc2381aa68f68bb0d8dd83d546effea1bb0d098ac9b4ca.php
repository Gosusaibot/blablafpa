<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_45dc7f05f34f2d8ec61d4bb4d0e181409221451010beb4565c894da053b62e66 extends Twig_Template
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
        $__internal_9603104273e170b8870780a2eb918ad0cd80487e51f90addf2ae9b00de77a0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9603104273e170b8870780a2eb918ad0cd80487e51f90addf2ae9b00de77a0e1->enter($__internal_9603104273e170b8870780a2eb918ad0cd80487e51f90addf2ae9b00de77a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_efe10355d46a081ecc22d56bd6b356dfbda95f661cee6f61b2660af6bbea07e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe10355d46a081ecc22d56bd6b356dfbda95f661cee6f61b2660af6bbea07e3->enter($__internal_efe10355d46a081ecc22d56bd6b356dfbda95f661cee6f61b2660af6bbea07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_9603104273e170b8870780a2eb918ad0cd80487e51f90addf2ae9b00de77a0e1->leave($__internal_9603104273e170b8870780a2eb918ad0cd80487e51f90addf2ae9b00de77a0e1_prof);

        
        $__internal_efe10355d46a081ecc22d56bd6b356dfbda95f661cee6f61b2660af6bbea07e3->leave($__internal_efe10355d46a081ecc22d56bd6b356dfbda95f661cee6f61b2660af6bbea07e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
