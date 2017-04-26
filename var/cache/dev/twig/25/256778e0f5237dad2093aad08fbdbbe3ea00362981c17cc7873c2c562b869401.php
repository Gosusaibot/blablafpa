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
        $__internal_fb36e155092919eb5d10298d85622a77b638811ecb6d3c1c9d006e15266802c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb36e155092919eb5d10298d85622a77b638811ecb6d3c1c9d006e15266802c0->enter($__internal_fb36e155092919eb5d10298d85622a77b638811ecb6d3c1c9d006e15266802c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_13cd3e03f0901ac080420b8a32332da63edf2be1a092f9651b3ea3a075171700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cd3e03f0901ac080420b8a32332da63edf2be1a092f9651b3ea3a075171700->enter($__internal_13cd3e03f0901ac080420b8a32332da63edf2be1a092f9651b3ea3a075171700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fb36e155092919eb5d10298d85622a77b638811ecb6d3c1c9d006e15266802c0->leave($__internal_fb36e155092919eb5d10298d85622a77b638811ecb6d3c1c9d006e15266802c0_prof);

        
        $__internal_13cd3e03f0901ac080420b8a32332da63edf2be1a092f9651b3ea3a075171700->leave($__internal_13cd3e03f0901ac080420b8a32332da63edf2be1a092f9651b3ea3a075171700_prof);

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
