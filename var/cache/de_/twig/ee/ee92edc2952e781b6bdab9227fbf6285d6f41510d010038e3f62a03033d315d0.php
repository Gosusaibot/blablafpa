<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_78014a21a37986186ae2cd008e787b14ee4ee07cec5a653e6ff44a749a572f49 extends Twig_Template
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
        $__internal_80c92c04d51fed2c32f66c90c2ff143b8c99e1b1c1c126e07f60f30ddc3198a5 = $this->env->getExtension("native_profiler");
        $__internal_80c92c04d51fed2c32f66c90c2ff143b8c99e1b1c1c126e07f60f30ddc3198a5->enter($__internal_80c92c04d51fed2c32f66c90c2ff143b8c99e1b1c1c126e07f60f30ddc3198a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_80c92c04d51fed2c32f66c90c2ff143b8c99e1b1c1c126e07f60f30ddc3198a5->leave($__internal_80c92c04d51fed2c32f66c90c2ff143b8c99e1b1c1c126e07f60f30ddc3198a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
