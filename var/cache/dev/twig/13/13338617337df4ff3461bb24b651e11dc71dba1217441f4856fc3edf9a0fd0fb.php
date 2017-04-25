<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b490a67d1700b8dc3ecd49e1879c9bd021d36df20ec4c504ba81910476da0dc6 extends Twig_Template
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
        $__internal_bd03c622fe05aeb8a8ff954486095b3098d7d40b4777ed4a5c043356423d359f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd03c622fe05aeb8a8ff954486095b3098d7d40b4777ed4a5c043356423d359f->enter($__internal_bd03c622fe05aeb8a8ff954486095b3098d7d40b4777ed4a5c043356423d359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8eb9dfad4706c41f56550a9c5804682295c2f0bfa59b56f57f64db627f71e877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb9dfad4706c41f56550a9c5804682295c2f0bfa59b56f57f64db627f71e877->enter($__internal_8eb9dfad4706c41f56550a9c5804682295c2f0bfa59b56f57f64db627f71e877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bd03c622fe05aeb8a8ff954486095b3098d7d40b4777ed4a5c043356423d359f->leave($__internal_bd03c622fe05aeb8a8ff954486095b3098d7d40b4777ed4a5c043356423d359f_prof);

        
        $__internal_8eb9dfad4706c41f56550a9c5804682295c2f0bfa59b56f57f64db627f71e877->leave($__internal_8eb9dfad4706c41f56550a9c5804682295c2f0bfa59b56f57f64db627f71e877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
