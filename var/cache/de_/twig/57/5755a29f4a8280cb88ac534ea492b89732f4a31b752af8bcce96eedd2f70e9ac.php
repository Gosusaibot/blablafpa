<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b2554a7156ecc28d67e7348c1d95814f6483a3a659b2ac3fd56e14f634e7e93b extends Twig_Template
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
        $__internal_4d97b57ebd16bffe7dd611c46b81c59d6eddc477c58931b695efce2a0b4482fd = $this->env->getExtension("native_profiler");
        $__internal_4d97b57ebd16bffe7dd611c46b81c59d6eddc477c58931b695efce2a0b4482fd->enter($__internal_4d97b57ebd16bffe7dd611c46b81c59d6eddc477c58931b695efce2a0b4482fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4d97b57ebd16bffe7dd611c46b81c59d6eddc477c58931b695efce2a0b4482fd->leave($__internal_4d97b57ebd16bffe7dd611c46b81c59d6eddc477c58931b695efce2a0b4482fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
