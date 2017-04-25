<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1ab169971d94c2457e8da04086610d1836518804b9ff8cb5966f1e8842f677f4 extends Twig_Template
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
        $__internal_498d17f573ee5d14508ced8ea003b95c518c6505dae6faca324ab5d19e9f976f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498d17f573ee5d14508ced8ea003b95c518c6505dae6faca324ab5d19e9f976f->enter($__internal_498d17f573ee5d14508ced8ea003b95c518c6505dae6faca324ab5d19e9f976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8ae1911546cd86920438e2c327c6052bb4da1caa3825abab8414834d4a0788f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae1911546cd86920438e2c327c6052bb4da1caa3825abab8414834d4a0788f7->enter($__internal_8ae1911546cd86920438e2c327c6052bb4da1caa3825abab8414834d4a0788f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_498d17f573ee5d14508ced8ea003b95c518c6505dae6faca324ab5d19e9f976f->leave($__internal_498d17f573ee5d14508ced8ea003b95c518c6505dae6faca324ab5d19e9f976f_prof);

        
        $__internal_8ae1911546cd86920438e2c327c6052bb4da1caa3825abab8414834d4a0788f7->leave($__internal_8ae1911546cd86920438e2c327c6052bb4da1caa3825abab8414834d4a0788f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
