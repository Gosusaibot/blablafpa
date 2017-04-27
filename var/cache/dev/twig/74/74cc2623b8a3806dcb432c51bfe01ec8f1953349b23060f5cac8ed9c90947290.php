<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4a0b8aa91706040f47160a6db2cf84dac288fb6a6c6084e0a1bb085547e30a8b extends Twig_Template
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
        $__internal_d0c85d65b2db9fb3d76013b1e8aae03bf5391f4be8dec011dd8776d06e87deb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c85d65b2db9fb3d76013b1e8aae03bf5391f4be8dec011dd8776d06e87deb8->enter($__internal_d0c85d65b2db9fb3d76013b1e8aae03bf5391f4be8dec011dd8776d06e87deb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_eaca528b21fd96c773dafa9daf279c7422f25b52dc50d66b8afbeddc50ca5036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaca528b21fd96c773dafa9daf279c7422f25b52dc50d66b8afbeddc50ca5036->enter($__internal_eaca528b21fd96c773dafa9daf279c7422f25b52dc50d66b8afbeddc50ca5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d0c85d65b2db9fb3d76013b1e8aae03bf5391f4be8dec011dd8776d06e87deb8->leave($__internal_d0c85d65b2db9fb3d76013b1e8aae03bf5391f4be8dec011dd8776d06e87deb8_prof);

        
        $__internal_eaca528b21fd96c773dafa9daf279c7422f25b52dc50d66b8afbeddc50ca5036->leave($__internal_eaca528b21fd96c773dafa9daf279c7422f25b52dc50d66b8afbeddc50ca5036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
