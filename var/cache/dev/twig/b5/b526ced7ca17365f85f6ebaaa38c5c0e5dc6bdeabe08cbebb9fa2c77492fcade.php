<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fcc3fb1c7e3af52fdf39120c7c98416c1357cc5ec601d1171d36b96a556a7f81 extends Twig_Template
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
        $__internal_0645176a9872039a46892a6abb5a1f119362d43770f808d687e5baa2683eba61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0645176a9872039a46892a6abb5a1f119362d43770f808d687e5baa2683eba61->enter($__internal_0645176a9872039a46892a6abb5a1f119362d43770f808d687e5baa2683eba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2ba28e8c772f6584ab3bbe089a49374dd291ef82e888e9c546de62168caf5255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba28e8c772f6584ab3bbe089a49374dd291ef82e888e9c546de62168caf5255->enter($__internal_2ba28e8c772f6584ab3bbe089a49374dd291ef82e888e9c546de62168caf5255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0645176a9872039a46892a6abb5a1f119362d43770f808d687e5baa2683eba61->leave($__internal_0645176a9872039a46892a6abb5a1f119362d43770f808d687e5baa2683eba61_prof);

        
        $__internal_2ba28e8c772f6584ab3bbe089a49374dd291ef82e888e9c546de62168caf5255->leave($__internal_2ba28e8c772f6584ab3bbe089a49374dd291ef82e888e9c546de62168caf5255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
