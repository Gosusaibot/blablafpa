<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9ecdf95ce1a079eeb4e6c4d246c6ba7fc9acb707b744f3c41056001e82857252 extends Twig_Template
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
        $__internal_8e83c9279fc866afa43d5e9f0fe548c5a9e80e9bcbf99f99f8807d651cf14bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e83c9279fc866afa43d5e9f0fe548c5a9e80e9bcbf99f99f8807d651cf14bf9->enter($__internal_8e83c9279fc866afa43d5e9f0fe548c5a9e80e9bcbf99f99f8807d651cf14bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5756a3f16cd5a6da60f396a1c537ebfb0be2bf484cea3a9f812baa9b54d1f209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5756a3f16cd5a6da60f396a1c537ebfb0be2bf484cea3a9f812baa9b54d1f209->enter($__internal_5756a3f16cd5a6da60f396a1c537ebfb0be2bf484cea3a9f812baa9b54d1f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8e83c9279fc866afa43d5e9f0fe548c5a9e80e9bcbf99f99f8807d651cf14bf9->leave($__internal_8e83c9279fc866afa43d5e9f0fe548c5a9e80e9bcbf99f99f8807d651cf14bf9_prof);

        
        $__internal_5756a3f16cd5a6da60f396a1c537ebfb0be2bf484cea3a9f812baa9b54d1f209->leave($__internal_5756a3f16cd5a6da60f396a1c537ebfb0be2bf484cea3a9f812baa9b54d1f209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
