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
        $__internal_d8d9d477c482d72d002aae6b878187e127782efda8dd32dc2026d93222e991bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d9d477c482d72d002aae6b878187e127782efda8dd32dc2026d93222e991bd->enter($__internal_d8d9d477c482d72d002aae6b878187e127782efda8dd32dc2026d93222e991bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7383a0a18dcf22e3242a4f6d336605f5e5607d257428c095a02668784d10e12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7383a0a18dcf22e3242a4f6d336605f5e5607d257428c095a02668784d10e12d->enter($__internal_7383a0a18dcf22e3242a4f6d336605f5e5607d257428c095a02668784d10e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d8d9d477c482d72d002aae6b878187e127782efda8dd32dc2026d93222e991bd->leave($__internal_d8d9d477c482d72d002aae6b878187e127782efda8dd32dc2026d93222e991bd_prof);

        
        $__internal_7383a0a18dcf22e3242a4f6d336605f5e5607d257428c095a02668784d10e12d->leave($__internal_7383a0a18dcf22e3242a4f6d336605f5e5607d257428c095a02668784d10e12d_prof);

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
