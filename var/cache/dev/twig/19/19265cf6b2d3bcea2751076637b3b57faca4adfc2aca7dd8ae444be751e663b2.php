<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7c57052108a9c8858ccc8a839e1b04dd96da5e51ad5cbab0df98828dd3b956c5 extends Twig_Template
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
        $__internal_3212902a40fe56dcb287369d2e386ea3b279881ed7bc2a963f71643bd5346ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3212902a40fe56dcb287369d2e386ea3b279881ed7bc2a963f71643bd5346ea1->enter($__internal_3212902a40fe56dcb287369d2e386ea3b279881ed7bc2a963f71643bd5346ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e94e6c917e26ec74bbe770264013ee0e3bbda37436299af5ed98b27ca3e48bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94e6c917e26ec74bbe770264013ee0e3bbda37436299af5ed98b27ca3e48bd8->enter($__internal_e94e6c917e26ec74bbe770264013ee0e3bbda37436299af5ed98b27ca3e48bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3212902a40fe56dcb287369d2e386ea3b279881ed7bc2a963f71643bd5346ea1->leave($__internal_3212902a40fe56dcb287369d2e386ea3b279881ed7bc2a963f71643bd5346ea1_prof);

        
        $__internal_e94e6c917e26ec74bbe770264013ee0e3bbda37436299af5ed98b27ca3e48bd8->leave($__internal_e94e6c917e26ec74bbe770264013ee0e3bbda37436299af5ed98b27ca3e48bd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
