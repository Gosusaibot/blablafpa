<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_52e3a3bddc8aa359d88da326431cf57be85480d9d491cc4e4105cd4532e6b31f extends Twig_Template
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
        $__internal_830f48c8a1d4f318ac973c3345c2b0d5ec5988d0b3279fd63f2f28eae84f3e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830f48c8a1d4f318ac973c3345c2b0d5ec5988d0b3279fd63f2f28eae84f3e70->enter($__internal_830f48c8a1d4f318ac973c3345c2b0d5ec5988d0b3279fd63f2f28eae84f3e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2d9a6306f1e36e7752552bfd764d4f661118cf957bd045aee3680764eefbc78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9a6306f1e36e7752552bfd764d4f661118cf957bd045aee3680764eefbc78e->enter($__internal_2d9a6306f1e36e7752552bfd764d4f661118cf957bd045aee3680764eefbc78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_830f48c8a1d4f318ac973c3345c2b0d5ec5988d0b3279fd63f2f28eae84f3e70->leave($__internal_830f48c8a1d4f318ac973c3345c2b0d5ec5988d0b3279fd63f2f28eae84f3e70_prof);

        
        $__internal_2d9a6306f1e36e7752552bfd764d4f661118cf957bd045aee3680764eefbc78e->leave($__internal_2d9a6306f1e36e7752552bfd764d4f661118cf957bd045aee3680764eefbc78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
