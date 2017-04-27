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
        $__internal_ce62991d0fef2431c5fb288d5f798d17f5f6acf484cf245e1aad21fed84b73c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce62991d0fef2431c5fb288d5f798d17f5f6acf484cf245e1aad21fed84b73c5->enter($__internal_ce62991d0fef2431c5fb288d5f798d17f5f6acf484cf245e1aad21fed84b73c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e5577ddadbce75470c5d7ba8b33f2151cac4ed57d21f4f448293225b69589faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5577ddadbce75470c5d7ba8b33f2151cac4ed57d21f4f448293225b69589faa->enter($__internal_e5577ddadbce75470c5d7ba8b33f2151cac4ed57d21f4f448293225b69589faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ce62991d0fef2431c5fb288d5f798d17f5f6acf484cf245e1aad21fed84b73c5->leave($__internal_ce62991d0fef2431c5fb288d5f798d17f5f6acf484cf245e1aad21fed84b73c5_prof);

        
        $__internal_e5577ddadbce75470c5d7ba8b33f2151cac4ed57d21f4f448293225b69589faa->leave($__internal_e5577ddadbce75470c5d7ba8b33f2151cac4ed57d21f4f448293225b69589faa_prof);

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
