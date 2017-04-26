<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_573e4b47909cad55da9c33cafdcd6cc70cd8e6a4eb49251b42c1c77cc259636d extends Twig_Template
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
        $__internal_f1b7d8a49fd4a32830c482fd20d7677ad17b552fb17d3979a48c8da904195472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7d8a49fd4a32830c482fd20d7677ad17b552fb17d3979a48c8da904195472->enter($__internal_f1b7d8a49fd4a32830c482fd20d7677ad17b552fb17d3979a48c8da904195472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_26908e985bcbee91638ea6262ff421f601cecaa77c0d05337c4b1b8d15713e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26908e985bcbee91638ea6262ff421f601cecaa77c0d05337c4b1b8d15713e51->enter($__internal_26908e985bcbee91638ea6262ff421f601cecaa77c0d05337c4b1b8d15713e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_f1b7d8a49fd4a32830c482fd20d7677ad17b552fb17d3979a48c8da904195472->leave($__internal_f1b7d8a49fd4a32830c482fd20d7677ad17b552fb17d3979a48c8da904195472_prof);

        
        $__internal_26908e985bcbee91638ea6262ff421f601cecaa77c0d05337c4b1b8d15713e51->leave($__internal_26908e985bcbee91638ea6262ff421f601cecaa77c0d05337c4b1b8d15713e51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
