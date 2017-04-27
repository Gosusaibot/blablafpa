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
        $__internal_5b5a14a67c6f30c0c8498b4394539eed92c4f11f4e56f5a5759ede5c54ad2629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5a14a67c6f30c0c8498b4394539eed92c4f11f4e56f5a5759ede5c54ad2629->enter($__internal_5b5a14a67c6f30c0c8498b4394539eed92c4f11f4e56f5a5759ede5c54ad2629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_acc38bbef6ddd4a409f11bb4e92828a6948971405605233a118fe384420ff10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc38bbef6ddd4a409f11bb4e92828a6948971405605233a118fe384420ff10f->enter($__internal_acc38bbef6ddd4a409f11bb4e92828a6948971405605233a118fe384420ff10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5b5a14a67c6f30c0c8498b4394539eed92c4f11f4e56f5a5759ede5c54ad2629->leave($__internal_5b5a14a67c6f30c0c8498b4394539eed92c4f11f4e56f5a5759ede5c54ad2629_prof);

        
        $__internal_acc38bbef6ddd4a409f11bb4e92828a6948971405605233a118fe384420ff10f->leave($__internal_acc38bbef6ddd4a409f11bb4e92828a6948971405605233a118fe384420ff10f_prof);

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
