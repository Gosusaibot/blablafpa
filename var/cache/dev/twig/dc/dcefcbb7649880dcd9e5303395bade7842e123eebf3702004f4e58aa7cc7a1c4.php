<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9d7d9ee40a0be16eea8680cf7352c02f409f464b227d7a92e621c2621758014e extends Twig_Template
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
        $__internal_e406d4e91826ef2dbccd7399e09da36a97a8c245aad1c6984a67e8158fefa8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e406d4e91826ef2dbccd7399e09da36a97a8c245aad1c6984a67e8158fefa8e3->enter($__internal_e406d4e91826ef2dbccd7399e09da36a97a8c245aad1c6984a67e8158fefa8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e524f6d17631ffe6e5828a95516085a634b82b9e03e9b8c30024132fba8847d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e524f6d17631ffe6e5828a95516085a634b82b9e03e9b8c30024132fba8847d3->enter($__internal_e524f6d17631ffe6e5828a95516085a634b82b9e03e9b8c30024132fba8847d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e406d4e91826ef2dbccd7399e09da36a97a8c245aad1c6984a67e8158fefa8e3->leave($__internal_e406d4e91826ef2dbccd7399e09da36a97a8c245aad1c6984a67e8158fefa8e3_prof);

        
        $__internal_e524f6d17631ffe6e5828a95516085a634b82b9e03e9b8c30024132fba8847d3->leave($__internal_e524f6d17631ffe6e5828a95516085a634b82b9e03e9b8c30024132fba8847d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
