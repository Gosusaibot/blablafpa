<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7375375960ead5473c73ffed6842a3ebc50d88c72b662c2a814cb42d084a4a7c extends Twig_Template
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
        $__internal_1042d3641eea552ec89d5f4ad5008867a4407fb44cded199224377b3c284cd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1042d3641eea552ec89d5f4ad5008867a4407fb44cded199224377b3c284cd7b->enter($__internal_1042d3641eea552ec89d5f4ad5008867a4407fb44cded199224377b3c284cd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2230fd7cab04feb7a955d83aaffc5c39e086e0a1e1ed008a53a965fb476d1693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2230fd7cab04feb7a955d83aaffc5c39e086e0a1e1ed008a53a965fb476d1693->enter($__internal_2230fd7cab04feb7a955d83aaffc5c39e086e0a1e1ed008a53a965fb476d1693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1042d3641eea552ec89d5f4ad5008867a4407fb44cded199224377b3c284cd7b->leave($__internal_1042d3641eea552ec89d5f4ad5008867a4407fb44cded199224377b3c284cd7b_prof);

        
        $__internal_2230fd7cab04feb7a955d83aaffc5c39e086e0a1e1ed008a53a965fb476d1693->leave($__internal_2230fd7cab04feb7a955d83aaffc5c39e086e0a1e1ed008a53a965fb476d1693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
