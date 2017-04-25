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
        $__internal_66ba348fa5cd0a176bca3c39d0805798c324a5bf7d90f039531fabb26695fb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ba348fa5cd0a176bca3c39d0805798c324a5bf7d90f039531fabb26695fb64->enter($__internal_66ba348fa5cd0a176bca3c39d0805798c324a5bf7d90f039531fabb26695fb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_02c3bb1218d3c72564eadb97b22e33484aa11dd2a21f43aacd82a4adec882dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c3bb1218d3c72564eadb97b22e33484aa11dd2a21f43aacd82a4adec882dde->enter($__internal_02c3bb1218d3c72564eadb97b22e33484aa11dd2a21f43aacd82a4adec882dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_66ba348fa5cd0a176bca3c39d0805798c324a5bf7d90f039531fabb26695fb64->leave($__internal_66ba348fa5cd0a176bca3c39d0805798c324a5bf7d90f039531fabb26695fb64_prof);

        
        $__internal_02c3bb1218d3c72564eadb97b22e33484aa11dd2a21f43aacd82a4adec882dde->leave($__internal_02c3bb1218d3c72564eadb97b22e33484aa11dd2a21f43aacd82a4adec882dde_prof);

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
