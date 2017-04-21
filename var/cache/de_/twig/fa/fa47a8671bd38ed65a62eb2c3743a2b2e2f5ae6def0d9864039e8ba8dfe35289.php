<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bae6c630b106bed405f176f5a99511d49435d8609665ca58fde4b331b2c2c506 extends Twig_Template
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
        $__internal_09e174432fbb5f12688a15c225cdab04cf2e768cf05c61b4275d7f3737dd1ba9 = $this->env->getExtension("native_profiler");
        $__internal_09e174432fbb5f12688a15c225cdab04cf2e768cf05c61b4275d7f3737dd1ba9->enter($__internal_09e174432fbb5f12688a15c225cdab04cf2e768cf05c61b4275d7f3737dd1ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_09e174432fbb5f12688a15c225cdab04cf2e768cf05c61b4275d7f3737dd1ba9->leave($__internal_09e174432fbb5f12688a15c225cdab04cf2e768cf05c61b4275d7f3737dd1ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
