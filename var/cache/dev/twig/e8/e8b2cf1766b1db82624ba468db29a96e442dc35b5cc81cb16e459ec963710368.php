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
        $__internal_97aa2401cd4a9037dddda3a948930b1fafa76b38cfda5c0bd399ebac11fa228b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97aa2401cd4a9037dddda3a948930b1fafa76b38cfda5c0bd399ebac11fa228b->enter($__internal_97aa2401cd4a9037dddda3a948930b1fafa76b38cfda5c0bd399ebac11fa228b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_11090d748ed14858ce2256877f1edbe367e22b120e186ec9a03afedf77242073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11090d748ed14858ce2256877f1edbe367e22b120e186ec9a03afedf77242073->enter($__internal_11090d748ed14858ce2256877f1edbe367e22b120e186ec9a03afedf77242073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_97aa2401cd4a9037dddda3a948930b1fafa76b38cfda5c0bd399ebac11fa228b->leave($__internal_97aa2401cd4a9037dddda3a948930b1fafa76b38cfda5c0bd399ebac11fa228b_prof);

        
        $__internal_11090d748ed14858ce2256877f1edbe367e22b120e186ec9a03afedf77242073->leave($__internal_11090d748ed14858ce2256877f1edbe367e22b120e186ec9a03afedf77242073_prof);

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
