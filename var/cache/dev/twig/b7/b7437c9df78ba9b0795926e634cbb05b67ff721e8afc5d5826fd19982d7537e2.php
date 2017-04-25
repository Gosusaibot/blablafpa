<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a6a0596fb1f894e22d918ee34399b6e97426ac4fd54dd52ca365b9231817ec72 extends Twig_Template
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
        $__internal_b2a235bd726cd4e6574becac06a11f0432ea3c331914d74b45fd407229dd5ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a235bd726cd4e6574becac06a11f0432ea3c331914d74b45fd407229dd5ffb->enter($__internal_b2a235bd726cd4e6574becac06a11f0432ea3c331914d74b45fd407229dd5ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_98aa0debf7f47daad20abec136ad1013028f90846aaca764bd9e591765365bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98aa0debf7f47daad20abec136ad1013028f90846aaca764bd9e591765365bd7->enter($__internal_98aa0debf7f47daad20abec136ad1013028f90846aaca764bd9e591765365bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b2a235bd726cd4e6574becac06a11f0432ea3c331914d74b45fd407229dd5ffb->leave($__internal_b2a235bd726cd4e6574becac06a11f0432ea3c331914d74b45fd407229dd5ffb_prof);

        
        $__internal_98aa0debf7f47daad20abec136ad1013028f90846aaca764bd9e591765365bd7->leave($__internal_98aa0debf7f47daad20abec136ad1013028f90846aaca764bd9e591765365bd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
