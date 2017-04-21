<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_beda313c5494ad0149b9b5d5a3fc640228d19c2cc766511d91dfc4a7d84c53b9 extends Twig_Template
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
        $__internal_0895bffb0378c655a10c49c1d1400140fb263676d4ad473b8fb3b72511184ece = $this->env->getExtension("native_profiler");
        $__internal_0895bffb0378c655a10c49c1d1400140fb263676d4ad473b8fb3b72511184ece->enter($__internal_0895bffb0378c655a10c49c1d1400140fb263676d4ad473b8fb3b72511184ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0895bffb0378c655a10c49c1d1400140fb263676d4ad473b8fb3b72511184ece->leave($__internal_0895bffb0378c655a10c49c1d1400140fb263676d4ad473b8fb3b72511184ece_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
