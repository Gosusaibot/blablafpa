<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_72aa622bc6d81a970a31916b8f6929eb2cc5ef69bbb7580493e2fc56c7e5b03b extends Twig_Template
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
        $__internal_2bf363afb562fa5fd3fc909a373dd3583ff20cad882cbda2b762afc43a01e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf363afb562fa5fd3fc909a373dd3583ff20cad882cbda2b762afc43a01e875->enter($__internal_2bf363afb562fa5fd3fc909a373dd3583ff20cad882cbda2b762afc43a01e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_5840dfeb5406171769fa87c686c0e653daaf771e26ce207dbb1f4c5394f73204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5840dfeb5406171769fa87c686c0e653daaf771e26ce207dbb1f4c5394f73204->enter($__internal_5840dfeb5406171769fa87c686c0e653daaf771e26ce207dbb1f4c5394f73204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_2bf363afb562fa5fd3fc909a373dd3583ff20cad882cbda2b762afc43a01e875->leave($__internal_2bf363afb562fa5fd3fc909a373dd3583ff20cad882cbda2b762afc43a01e875_prof);

        
        $__internal_5840dfeb5406171769fa87c686c0e653daaf771e26ce207dbb1f4c5394f73204->leave($__internal_5840dfeb5406171769fa87c686c0e653daaf771e26ce207dbb1f4c5394f73204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
