<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2b64a16c4968649d4ef9eb75329ec02cd009db34decebbe3d09bbf730f4c92dd extends Twig_Template
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
        $__internal_cb7f66e81c8acc837b72a13dbe0a6db40686b21b6d02a41dbae9efb53fb8381a = $this->env->getExtension("native_profiler");
        $__internal_cb7f66e81c8acc837b72a13dbe0a6db40686b21b6d02a41dbae9efb53fb8381a->enter($__internal_cb7f66e81c8acc837b72a13dbe0a6db40686b21b6d02a41dbae9efb53fb8381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cb7f66e81c8acc837b72a13dbe0a6db40686b21b6d02a41dbae9efb53fb8381a->leave($__internal_cb7f66e81c8acc837b72a13dbe0a6db40686b21b6d02a41dbae9efb53fb8381a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
