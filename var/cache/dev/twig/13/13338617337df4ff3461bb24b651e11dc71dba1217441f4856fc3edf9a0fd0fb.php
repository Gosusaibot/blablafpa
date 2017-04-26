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
        $__internal_eeae68fcec2bd196b711fe79bd6805ddd6bda107179fae513fe325accc0c093c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeae68fcec2bd196b711fe79bd6805ddd6bda107179fae513fe325accc0c093c->enter($__internal_eeae68fcec2bd196b711fe79bd6805ddd6bda107179fae513fe325accc0c093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_35833489e4580e3f1cad92878ad142163baeb39d1e06a2c4a84bd832b018290b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35833489e4580e3f1cad92878ad142163baeb39d1e06a2c4a84bd832b018290b->enter($__internal_35833489e4580e3f1cad92878ad142163baeb39d1e06a2c4a84bd832b018290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eeae68fcec2bd196b711fe79bd6805ddd6bda107179fae513fe325accc0c093c->leave($__internal_eeae68fcec2bd196b711fe79bd6805ddd6bda107179fae513fe325accc0c093c_prof);

        
        $__internal_35833489e4580e3f1cad92878ad142163baeb39d1e06a2c4a84bd832b018290b->leave($__internal_35833489e4580e3f1cad92878ad142163baeb39d1e06a2c4a84bd832b018290b_prof);

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
