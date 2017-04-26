<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_57f170118ed2c54c5c1172a93cc6c4d80a2f177669fbb2b03359110c22a0fbf2 extends Twig_Template
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
        $__internal_3bb86f2ac483e6ba024dfc307b321607d45aaee8a863249ed1b19d9c8a868d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb86f2ac483e6ba024dfc307b321607d45aaee8a863249ed1b19d9c8a868d85->enter($__internal_3bb86f2ac483e6ba024dfc307b321607d45aaee8a863249ed1b19d9c8a868d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5a65611aff9d592af7c08d7e7473871edaf0e83a4963efc409f254c386565e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a65611aff9d592af7c08d7e7473871edaf0e83a4963efc409f254c386565e15->enter($__internal_5a65611aff9d592af7c08d7e7473871edaf0e83a4963efc409f254c386565e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3bb86f2ac483e6ba024dfc307b321607d45aaee8a863249ed1b19d9c8a868d85->leave($__internal_3bb86f2ac483e6ba024dfc307b321607d45aaee8a863249ed1b19d9c8a868d85_prof);

        
        $__internal_5a65611aff9d592af7c08d7e7473871edaf0e83a4963efc409f254c386565e15->leave($__internal_5a65611aff9d592af7c08d7e7473871edaf0e83a4963efc409f254c386565e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
