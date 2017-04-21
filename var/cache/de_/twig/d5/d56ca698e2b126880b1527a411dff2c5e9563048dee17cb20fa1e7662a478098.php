<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ace8f447527b8566af4dea0eb617534d2633a6648a27238de0f93d5109259fad extends Twig_Template
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
        $__internal_9c7515576a08047408deca008ddfd2e62ae0ac01a1565dbcf5758b42d2d74ce0 = $this->env->getExtension("native_profiler");
        $__internal_9c7515576a08047408deca008ddfd2e62ae0ac01a1565dbcf5758b42d2d74ce0->enter($__internal_9c7515576a08047408deca008ddfd2e62ae0ac01a1565dbcf5758b42d2d74ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9c7515576a08047408deca008ddfd2e62ae0ac01a1565dbcf5758b42d2d74ce0->leave($__internal_9c7515576a08047408deca008ddfd2e62ae0ac01a1565dbcf5758b42d2d74ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
