<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7026cf91d21131a4825f09ddaf8bfb206c059eb8a193abbf2aa2b8f4ae8a26ef extends Twig_Template
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
        $__internal_d8d93598f9b428125ae0d982d679582175f67fcd135550af8d6d38997c549b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d93598f9b428125ae0d982d679582175f67fcd135550af8d6d38997c549b93->enter($__internal_d8d93598f9b428125ae0d982d679582175f67fcd135550af8d6d38997c549b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d303abdb9964a9ce4ccc8ce6ccbf4c772a02b20bab9695307444448c8134d613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d303abdb9964a9ce4ccc8ce6ccbf4c772a02b20bab9695307444448c8134d613->enter($__internal_d303abdb9964a9ce4ccc8ce6ccbf4c772a02b20bab9695307444448c8134d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d8d93598f9b428125ae0d982d679582175f67fcd135550af8d6d38997c549b93->leave($__internal_d8d93598f9b428125ae0d982d679582175f67fcd135550af8d6d38997c549b93_prof);

        
        $__internal_d303abdb9964a9ce4ccc8ce6ccbf4c772a02b20bab9695307444448c8134d613->leave($__internal_d303abdb9964a9ce4ccc8ce6ccbf4c772a02b20bab9695307444448c8134d613_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
