<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d50d3155f33fac3e50156a8235f7de790fe5d49f6884b2c37e390b5043f87fee extends Twig_Template
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
        $__internal_afb28dde11e9c7218a8149f04e1a78df94ddb2b7fb4cf5b148605657026b7ab2 = $this->env->getExtension("native_profiler");
        $__internal_afb28dde11e9c7218a8149f04e1a78df94ddb2b7fb4cf5b148605657026b7ab2->enter($__internal_afb28dde11e9c7218a8149f04e1a78df94ddb2b7fb4cf5b148605657026b7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_afb28dde11e9c7218a8149f04e1a78df94ddb2b7fb4cf5b148605657026b7ab2->leave($__internal_afb28dde11e9c7218a8149f04e1a78df94ddb2b7fb4cf5b148605657026b7ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
