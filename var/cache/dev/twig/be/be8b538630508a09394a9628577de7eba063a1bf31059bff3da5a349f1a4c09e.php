<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5b47cd0926fc51dcd2aa109c2165e38faacf171bc804f1f5e023fdddf944f755 extends Twig_Template
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
        $__internal_076fdc882b3d7af48ac2be443c5eb0c92290d03e9d02f702d5927245a44224c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076fdc882b3d7af48ac2be443c5eb0c92290d03e9d02f702d5927245a44224c0->enter($__internal_076fdc882b3d7af48ac2be443c5eb0c92290d03e9d02f702d5927245a44224c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5bd8491ca83cde322c43cbf5b00376886c7e1a6428020ad3c25ea71e15ccf2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd8491ca83cde322c43cbf5b00376886c7e1a6428020ad3c25ea71e15ccf2b1->enter($__internal_5bd8491ca83cde322c43cbf5b00376886c7e1a6428020ad3c25ea71e15ccf2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_076fdc882b3d7af48ac2be443c5eb0c92290d03e9d02f702d5927245a44224c0->leave($__internal_076fdc882b3d7af48ac2be443c5eb0c92290d03e9d02f702d5927245a44224c0_prof);

        
        $__internal_5bd8491ca83cde322c43cbf5b00376886c7e1a6428020ad3c25ea71e15ccf2b1->leave($__internal_5bd8491ca83cde322c43cbf5b00376886c7e1a6428020ad3c25ea71e15ccf2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
