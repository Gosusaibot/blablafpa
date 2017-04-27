<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9afc1f20634106c21cdddd67cb60a6b1703a9ea178598aa3e319a924c571e71d extends Twig_Template
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
        $__internal_dfbc5c42e237946ed14c801d48862e352281469710c4c406da393434f1e0a854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbc5c42e237946ed14c801d48862e352281469710c4c406da393434f1e0a854->enter($__internal_dfbc5c42e237946ed14c801d48862e352281469710c4c406da393434f1e0a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f6c11d62bea816fb7ec9a15e69252f2b6fd7b148c0563ed6c1d959533246bc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c11d62bea816fb7ec9a15e69252f2b6fd7b148c0563ed6c1d959533246bc1c->enter($__internal_f6c11d62bea816fb7ec9a15e69252f2b6fd7b148c0563ed6c1d959533246bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dfbc5c42e237946ed14c801d48862e352281469710c4c406da393434f1e0a854->leave($__internal_dfbc5c42e237946ed14c801d48862e352281469710c4c406da393434f1e0a854_prof);

        
        $__internal_f6c11d62bea816fb7ec9a15e69252f2b6fd7b148c0563ed6c1d959533246bc1c->leave($__internal_f6c11d62bea816fb7ec9a15e69252f2b6fd7b148c0563ed6c1d959533246bc1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
