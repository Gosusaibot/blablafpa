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
        $__internal_e8b29650c89458ea3ce0346555fc15ef4da067de2bca121bfb3c4bd8fff350b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b29650c89458ea3ce0346555fc15ef4da067de2bca121bfb3c4bd8fff350b6->enter($__internal_e8b29650c89458ea3ce0346555fc15ef4da067de2bca121bfb3c4bd8fff350b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ab5fea7366dd4ea8fe15ec75eff906b40a54d4a425f586b19704c3ce331a5d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5fea7366dd4ea8fe15ec75eff906b40a54d4a425f586b19704c3ce331a5d69->enter($__internal_ab5fea7366dd4ea8fe15ec75eff906b40a54d4a425f586b19704c3ce331a5d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e8b29650c89458ea3ce0346555fc15ef4da067de2bca121bfb3c4bd8fff350b6->leave($__internal_e8b29650c89458ea3ce0346555fc15ef4da067de2bca121bfb3c4bd8fff350b6_prof);

        
        $__internal_ab5fea7366dd4ea8fe15ec75eff906b40a54d4a425f586b19704c3ce331a5d69->leave($__internal_ab5fea7366dd4ea8fe15ec75eff906b40a54d4a425f586b19704c3ce331a5d69_prof);

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
