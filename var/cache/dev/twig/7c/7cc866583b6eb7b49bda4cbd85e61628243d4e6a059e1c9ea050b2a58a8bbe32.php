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
        $__internal_65d2ebef9e7a6c59886e25cedee5c27a52a1bef0fa8b5e74ae0cf122c7fa0e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d2ebef9e7a6c59886e25cedee5c27a52a1bef0fa8b5e74ae0cf122c7fa0e57->enter($__internal_65d2ebef9e7a6c59886e25cedee5c27a52a1bef0fa8b5e74ae0cf122c7fa0e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3f15ca1d0668463197662294a86bc3ffbfb493572970e0878f8077c2dcbab3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f15ca1d0668463197662294a86bc3ffbfb493572970e0878f8077c2dcbab3a3->enter($__internal_3f15ca1d0668463197662294a86bc3ffbfb493572970e0878f8077c2dcbab3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_65d2ebef9e7a6c59886e25cedee5c27a52a1bef0fa8b5e74ae0cf122c7fa0e57->leave($__internal_65d2ebef9e7a6c59886e25cedee5c27a52a1bef0fa8b5e74ae0cf122c7fa0e57_prof);

        
        $__internal_3f15ca1d0668463197662294a86bc3ffbfb493572970e0878f8077c2dcbab3a3->leave($__internal_3f15ca1d0668463197662294a86bc3ffbfb493572970e0878f8077c2dcbab3a3_prof);

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
