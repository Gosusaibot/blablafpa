<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a3abdeb6ab5bca5c63b9f402019ba46266c2f2448757155d54432aaba80be510 extends Twig_Template
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
        $__internal_a931d3dee124f4a00e981599753ca59952d43736703d1f088373e1f3353e6b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a931d3dee124f4a00e981599753ca59952d43736703d1f088373e1f3353e6b31->enter($__internal_a931d3dee124f4a00e981599753ca59952d43736703d1f088373e1f3353e6b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7ba7a02a97fe2b8821d9db52b7af559be7ac136d453d842abcc85bbee1ac2ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba7a02a97fe2b8821d9db52b7af559be7ac136d453d842abcc85bbee1ac2ae5->enter($__internal_7ba7a02a97fe2b8821d9db52b7af559be7ac136d453d842abcc85bbee1ac2ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a931d3dee124f4a00e981599753ca59952d43736703d1f088373e1f3353e6b31->leave($__internal_a931d3dee124f4a00e981599753ca59952d43736703d1f088373e1f3353e6b31_prof);

        
        $__internal_7ba7a02a97fe2b8821d9db52b7af559be7ac136d453d842abcc85bbee1ac2ae5->leave($__internal_7ba7a02a97fe2b8821d9db52b7af559be7ac136d453d842abcc85bbee1ac2ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
