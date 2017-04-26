<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9afc1f20634106c21cdddd67cb60a6b1703a9ea178598aa3e319a924c571e71d extends Twig_Template
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
        $__internal_8a3477ebaf51d74b32d9c16b4fb20a74b41e962ea5f2a64ff1f2aab7f6f11b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3477ebaf51d74b32d9c16b4fb20a74b41e962ea5f2a64ff1f2aab7f6f11b7d->enter($__internal_8a3477ebaf51d74b32d9c16b4fb20a74b41e962ea5f2a64ff1f2aab7f6f11b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fceccd2d58846aa04f9039e968a3865b2eb3bb28d0522555f6126f35e44f13ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fceccd2d58846aa04f9039e968a3865b2eb3bb28d0522555f6126f35e44f13ab->enter($__internal_fceccd2d58846aa04f9039e968a3865b2eb3bb28d0522555f6126f35e44f13ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8a3477ebaf51d74b32d9c16b4fb20a74b41e962ea5f2a64ff1f2aab7f6f11b7d->leave($__internal_8a3477ebaf51d74b32d9c16b4fb20a74b41e962ea5f2a64ff1f2aab7f6f11b7d_prof);

        
        $__internal_fceccd2d58846aa04f9039e968a3865b2eb3bb28d0522555f6126f35e44f13ab->leave($__internal_fceccd2d58846aa04f9039e968a3865b2eb3bb28d0522555f6126f35e44f13ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
