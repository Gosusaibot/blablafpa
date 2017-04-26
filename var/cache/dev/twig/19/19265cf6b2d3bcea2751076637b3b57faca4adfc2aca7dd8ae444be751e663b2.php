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
        $__internal_09f9e5cd05901011ce7d76507a1e3f71b9739517f9f84c09c3d062d6b1fc3bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f9e5cd05901011ce7d76507a1e3f71b9739517f9f84c09c3d062d6b1fc3bad->enter($__internal_09f9e5cd05901011ce7d76507a1e3f71b9739517f9f84c09c3d062d6b1fc3bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2bc60ca0e1254e2c535aa565e971c63b38c26c8956ae2240c1635bd038ae9aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc60ca0e1254e2c535aa565e971c63b38c26c8956ae2240c1635bd038ae9aad->enter($__internal_2bc60ca0e1254e2c535aa565e971c63b38c26c8956ae2240c1635bd038ae9aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09f9e5cd05901011ce7d76507a1e3f71b9739517f9f84c09c3d062d6b1fc3bad->leave($__internal_09f9e5cd05901011ce7d76507a1e3f71b9739517f9f84c09c3d062d6b1fc3bad_prof);

        
        $__internal_2bc60ca0e1254e2c535aa565e971c63b38c26c8956ae2240c1635bd038ae9aad->leave($__internal_2bc60ca0e1254e2c535aa565e971c63b38c26c8956ae2240c1635bd038ae9aad_prof);

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
