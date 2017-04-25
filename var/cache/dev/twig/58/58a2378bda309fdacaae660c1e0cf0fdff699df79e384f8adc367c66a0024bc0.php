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
        $__internal_abcd559825c087e3593aa293547b54ea3399b3f7cad0c804e27d81064f55eed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcd559825c087e3593aa293547b54ea3399b3f7cad0c804e27d81064f55eed4->enter($__internal_abcd559825c087e3593aa293547b54ea3399b3f7cad0c804e27d81064f55eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_294ce169e462ea58d94ad936262aefa7c5dc8cc2255c6b26f17cff3bea0b8617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294ce169e462ea58d94ad936262aefa7c5dc8cc2255c6b26f17cff3bea0b8617->enter($__internal_294ce169e462ea58d94ad936262aefa7c5dc8cc2255c6b26f17cff3bea0b8617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_abcd559825c087e3593aa293547b54ea3399b3f7cad0c804e27d81064f55eed4->leave($__internal_abcd559825c087e3593aa293547b54ea3399b3f7cad0c804e27d81064f55eed4_prof);

        
        $__internal_294ce169e462ea58d94ad936262aefa7c5dc8cc2255c6b26f17cff3bea0b8617->leave($__internal_294ce169e462ea58d94ad936262aefa7c5dc8cc2255c6b26f17cff3bea0b8617_prof);

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
