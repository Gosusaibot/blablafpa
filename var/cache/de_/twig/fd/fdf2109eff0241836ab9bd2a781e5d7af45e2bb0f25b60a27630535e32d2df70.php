<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ac8357e65e286bf6aeef2c2b74974c10b0ae3154bbe0f170c76126642766bd20 extends Twig_Template
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
        $__internal_82f93cbbdb4c050549b66e5692350cee1da7f3ef8f576111b5ca058450d82301 = $this->env->getExtension("native_profiler");
        $__internal_82f93cbbdb4c050549b66e5692350cee1da7f3ef8f576111b5ca058450d82301->enter($__internal_82f93cbbdb4c050549b66e5692350cee1da7f3ef8f576111b5ca058450d82301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_82f93cbbdb4c050549b66e5692350cee1da7f3ef8f576111b5ca058450d82301->leave($__internal_82f93cbbdb4c050549b66e5692350cee1da7f3ef8f576111b5ca058450d82301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
