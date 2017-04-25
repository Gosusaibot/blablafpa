<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_364ea80ae0ba698e62971c04902109dfac71fd197491b6d8be9377272bc8e29d extends Twig_Template
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
        $__internal_46844852242c1da36898fea9361a09731f28cbcd28603613be830f1c7a5bb3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46844852242c1da36898fea9361a09731f28cbcd28603613be830f1c7a5bb3a7->enter($__internal_46844852242c1da36898fea9361a09731f28cbcd28603613be830f1c7a5bb3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8d8c4b3e080ef1f9a70101e87e0578be57e3d0a92254d5dacdbda41e8d57b373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8c4b3e080ef1f9a70101e87e0578be57e3d0a92254d5dacdbda41e8d57b373->enter($__internal_8d8c4b3e080ef1f9a70101e87e0578be57e3d0a92254d5dacdbda41e8d57b373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_46844852242c1da36898fea9361a09731f28cbcd28603613be830f1c7a5bb3a7->leave($__internal_46844852242c1da36898fea9361a09731f28cbcd28603613be830f1c7a5bb3a7_prof);

        
        $__internal_8d8c4b3e080ef1f9a70101e87e0578be57e3d0a92254d5dacdbda41e8d57b373->leave($__internal_8d8c4b3e080ef1f9a70101e87e0578be57e3d0a92254d5dacdbda41e8d57b373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
