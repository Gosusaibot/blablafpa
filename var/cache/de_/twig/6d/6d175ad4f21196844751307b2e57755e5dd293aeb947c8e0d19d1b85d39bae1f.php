<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7b527bb703af8d518e55eeee5aaef1f3641dcc20b5a49b25d90913abae13ef90 extends Twig_Template
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
        $__internal_18fa921b05a1bbf81d7e677690c1a529be005636437d3cd7725adc1f875fd083 = $this->env->getExtension("native_profiler");
        $__internal_18fa921b05a1bbf81d7e677690c1a529be005636437d3cd7725adc1f875fd083->enter($__internal_18fa921b05a1bbf81d7e677690c1a529be005636437d3cd7725adc1f875fd083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_18fa921b05a1bbf81d7e677690c1a529be005636437d3cd7725adc1f875fd083->leave($__internal_18fa921b05a1bbf81d7e677690c1a529be005636437d3cd7725adc1f875fd083_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
