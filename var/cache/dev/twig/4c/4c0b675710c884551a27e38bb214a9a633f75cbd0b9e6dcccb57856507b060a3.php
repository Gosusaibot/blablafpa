<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d28150e62fff52fb2a2d30da69d318ff65b31f40ccff94790846adaa84f60bf2 extends Twig_Template
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
        $__internal_0ac7bed5bd1e0b9abf332263dffa18e7204046314208e645e0897ad4b7296969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac7bed5bd1e0b9abf332263dffa18e7204046314208e645e0897ad4b7296969->enter($__internal_0ac7bed5bd1e0b9abf332263dffa18e7204046314208e645e0897ad4b7296969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3a35f26a2e39732d7843949afd7e38b1c35ef3928ff3bcd564fe69b24ad7979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a35f26a2e39732d7843949afd7e38b1c35ef3928ff3bcd564fe69b24ad7979d->enter($__internal_3a35f26a2e39732d7843949afd7e38b1c35ef3928ff3bcd564fe69b24ad7979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0ac7bed5bd1e0b9abf332263dffa18e7204046314208e645e0897ad4b7296969->leave($__internal_0ac7bed5bd1e0b9abf332263dffa18e7204046314208e645e0897ad4b7296969_prof);

        
        $__internal_3a35f26a2e39732d7843949afd7e38b1c35ef3928ff3bcd564fe69b24ad7979d->leave($__internal_3a35f26a2e39732d7843949afd7e38b1c35ef3928ff3bcd564fe69b24ad7979d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
