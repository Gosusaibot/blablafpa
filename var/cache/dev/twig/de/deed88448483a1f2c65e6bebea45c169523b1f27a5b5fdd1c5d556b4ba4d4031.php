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
        $__internal_6026e0e25b63ab3423405bb1d7e5db2b58db1e95aebc6c2834f51ff36571e48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6026e0e25b63ab3423405bb1d7e5db2b58db1e95aebc6c2834f51ff36571e48e->enter($__internal_6026e0e25b63ab3423405bb1d7e5db2b58db1e95aebc6c2834f51ff36571e48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e50731b32a75bdf21bca764de6122ff9a84f70f01ebb25a55a3d06b02db7b8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50731b32a75bdf21bca764de6122ff9a84f70f01ebb25a55a3d06b02db7b8cb->enter($__internal_e50731b32a75bdf21bca764de6122ff9a84f70f01ebb25a55a3d06b02db7b8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6026e0e25b63ab3423405bb1d7e5db2b58db1e95aebc6c2834f51ff36571e48e->leave($__internal_6026e0e25b63ab3423405bb1d7e5db2b58db1e95aebc6c2834f51ff36571e48e_prof);

        
        $__internal_e50731b32a75bdf21bca764de6122ff9a84f70f01ebb25a55a3d06b02db7b8cb->leave($__internal_e50731b32a75bdf21bca764de6122ff9a84f70f01ebb25a55a3d06b02db7b8cb_prof);

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
