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
        $__internal_85c1a870661326d8872af9e460d4ce3f0b6d9c255ff540e9627a2f44f1b74ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c1a870661326d8872af9e460d4ce3f0b6d9c255ff540e9627a2f44f1b74ae3->enter($__internal_85c1a870661326d8872af9e460d4ce3f0b6d9c255ff540e9627a2f44f1b74ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_09a45547e5959d9778f3d5902ca1bba53b5b57b761f9291c23138ca354fd0bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a45547e5959d9778f3d5902ca1bba53b5b57b761f9291c23138ca354fd0bad->enter($__internal_09a45547e5959d9778f3d5902ca1bba53b5b57b761f9291c23138ca354fd0bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_85c1a870661326d8872af9e460d4ce3f0b6d9c255ff540e9627a2f44f1b74ae3->leave($__internal_85c1a870661326d8872af9e460d4ce3f0b6d9c255ff540e9627a2f44f1b74ae3_prof);

        
        $__internal_09a45547e5959d9778f3d5902ca1bba53b5b57b761f9291c23138ca354fd0bad->leave($__internal_09a45547e5959d9778f3d5902ca1bba53b5b57b761f9291c23138ca354fd0bad_prof);

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
