<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_02a2cb58fa61fa0a886d56dbb3f2d6767fbd4ca505d9a446b6df88de05abdcf3 extends Twig_Template
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
        $__internal_fbb67b12015e1594997c3b0491f4af7a846e91abfed9ab581476c1e3f9cdc0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb67b12015e1594997c3b0491f4af7a846e91abfed9ab581476c1e3f9cdc0b7->enter($__internal_fbb67b12015e1594997c3b0491f4af7a846e91abfed9ab581476c1e3f9cdc0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2eff73a2da71a62f93db2910f0d4337ef83e974dd6e8e1b5ee5bd01fd1ce457e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eff73a2da71a62f93db2910f0d4337ef83e974dd6e8e1b5ee5bd01fd1ce457e->enter($__internal_2eff73a2da71a62f93db2910f0d4337ef83e974dd6e8e1b5ee5bd01fd1ce457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbb67b12015e1594997c3b0491f4af7a846e91abfed9ab581476c1e3f9cdc0b7->leave($__internal_fbb67b12015e1594997c3b0491f4af7a846e91abfed9ab581476c1e3f9cdc0b7_prof);

        
        $__internal_2eff73a2da71a62f93db2910f0d4337ef83e974dd6e8e1b5ee5bd01fd1ce457e->leave($__internal_2eff73a2da71a62f93db2910f0d4337ef83e974dd6e8e1b5ee5bd01fd1ce457e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
