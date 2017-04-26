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
        $__internal_778752037df8ae40cb03fea8d7632fd26149a77a26efda5de901092de415c513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778752037df8ae40cb03fea8d7632fd26149a77a26efda5de901092de415c513->enter($__internal_778752037df8ae40cb03fea8d7632fd26149a77a26efda5de901092de415c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3a9eb56d96f3282957ec3eeb95904d3737eb199191bceafb952d6cd7f3796e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9eb56d96f3282957ec3eeb95904d3737eb199191bceafb952d6cd7f3796e79->enter($__internal_3a9eb56d96f3282957ec3eeb95904d3737eb199191bceafb952d6cd7f3796e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_778752037df8ae40cb03fea8d7632fd26149a77a26efda5de901092de415c513->leave($__internal_778752037df8ae40cb03fea8d7632fd26149a77a26efda5de901092de415c513_prof);

        
        $__internal_3a9eb56d96f3282957ec3eeb95904d3737eb199191bceafb952d6cd7f3796e79->leave($__internal_3a9eb56d96f3282957ec3eeb95904d3737eb199191bceafb952d6cd7f3796e79_prof);

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
