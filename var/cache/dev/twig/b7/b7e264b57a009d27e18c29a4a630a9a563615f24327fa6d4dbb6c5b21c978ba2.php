<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_27056137b6101a729d88e4d15eb00b6606b09dcebd096bda601d017d47aae131 extends Twig_Template
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
        $__internal_e3de4526ab435fc89721ac87ada218c461d9964c3508b98f18ca9e9a907efd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3de4526ab435fc89721ac87ada218c461d9964c3508b98f18ca9e9a907efd27->enter($__internal_e3de4526ab435fc89721ac87ada218c461d9964c3508b98f18ca9e9a907efd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e17ca0a00e88fca023777eacff723cbd24fb706a0d4d259e26b768a282db401b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17ca0a00e88fca023777eacff723cbd24fb706a0d4d259e26b768a282db401b->enter($__internal_e17ca0a00e88fca023777eacff723cbd24fb706a0d4d259e26b768a282db401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e3de4526ab435fc89721ac87ada218c461d9964c3508b98f18ca9e9a907efd27->leave($__internal_e3de4526ab435fc89721ac87ada218c461d9964c3508b98f18ca9e9a907efd27_prof);

        
        $__internal_e17ca0a00e88fca023777eacff723cbd24fb706a0d4d259e26b768a282db401b->leave($__internal_e17ca0a00e88fca023777eacff723cbd24fb706a0d4d259e26b768a282db401b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
