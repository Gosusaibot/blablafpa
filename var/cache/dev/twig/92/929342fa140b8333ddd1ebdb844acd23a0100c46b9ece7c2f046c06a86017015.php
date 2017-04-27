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
        $__internal_8f4fbcd6a36fe67425d72c30feda69accb7482c35705877923abdaaa4fad4034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4fbcd6a36fe67425d72c30feda69accb7482c35705877923abdaaa4fad4034->enter($__internal_8f4fbcd6a36fe67425d72c30feda69accb7482c35705877923abdaaa4fad4034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6845277669cf93e0932ac50489640209c004560e022314b45dd733dce33fce12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6845277669cf93e0932ac50489640209c004560e022314b45dd733dce33fce12->enter($__internal_6845277669cf93e0932ac50489640209c004560e022314b45dd733dce33fce12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8f4fbcd6a36fe67425d72c30feda69accb7482c35705877923abdaaa4fad4034->leave($__internal_8f4fbcd6a36fe67425d72c30feda69accb7482c35705877923abdaaa4fad4034_prof);

        
        $__internal_6845277669cf93e0932ac50489640209c004560e022314b45dd733dce33fce12->leave($__internal_6845277669cf93e0932ac50489640209c004560e022314b45dd733dce33fce12_prof);

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
