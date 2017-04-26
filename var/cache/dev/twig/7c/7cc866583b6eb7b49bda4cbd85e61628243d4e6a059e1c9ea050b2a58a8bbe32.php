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
        $__internal_bf186776d2e1291d0143e57b8da8a35918ced9749856c32ea3bc5e675f2c827a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf186776d2e1291d0143e57b8da8a35918ced9749856c32ea3bc5e675f2c827a->enter($__internal_bf186776d2e1291d0143e57b8da8a35918ced9749856c32ea3bc5e675f2c827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a2b31fa47c4ed6688f9f3b2cdf82e5738f490c7913c53a71ca4b9a0848a860c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b31fa47c4ed6688f9f3b2cdf82e5738f490c7913c53a71ca4b9a0848a860c6->enter($__internal_a2b31fa47c4ed6688f9f3b2cdf82e5738f490c7913c53a71ca4b9a0848a860c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bf186776d2e1291d0143e57b8da8a35918ced9749856c32ea3bc5e675f2c827a->leave($__internal_bf186776d2e1291d0143e57b8da8a35918ced9749856c32ea3bc5e675f2c827a_prof);

        
        $__internal_a2b31fa47c4ed6688f9f3b2cdf82e5738f490c7913c53a71ca4b9a0848a860c6->leave($__internal_a2b31fa47c4ed6688f9f3b2cdf82e5738f490c7913c53a71ca4b9a0848a860c6_prof);

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
