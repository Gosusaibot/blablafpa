<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6003d13de377b7c4a2c8ddec50ddd46f0dc01463ba5570395a362d19129c3670 extends Twig_Template
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
        $__internal_f48abfcf06701c60a96e84713d3e1a258def785d52dde4dfe557b478c9552427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48abfcf06701c60a96e84713d3e1a258def785d52dde4dfe557b478c9552427->enter($__internal_f48abfcf06701c60a96e84713d3e1a258def785d52dde4dfe557b478c9552427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b8777f0b9be7577471b194b7de29a11f9b5ee371ec283114f5cc85ce6bac704c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8777f0b9be7577471b194b7de29a11f9b5ee371ec283114f5cc85ce6bac704c->enter($__internal_b8777f0b9be7577471b194b7de29a11f9b5ee371ec283114f5cc85ce6bac704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f48abfcf06701c60a96e84713d3e1a258def785d52dde4dfe557b478c9552427->leave($__internal_f48abfcf06701c60a96e84713d3e1a258def785d52dde4dfe557b478c9552427_prof);

        
        $__internal_b8777f0b9be7577471b194b7de29a11f9b5ee371ec283114f5cc85ce6bac704c->leave($__internal_b8777f0b9be7577471b194b7de29a11f9b5ee371ec283114f5cc85ce6bac704c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
