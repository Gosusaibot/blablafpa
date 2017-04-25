<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_13525e94a0e03a3c7bb76045e7d7fe9cd187f76b446436fb351d43b9d528c2e7 extends Twig_Template
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
        $__internal_6e84e2e56a000b1e6d950816ccb755dbe9e268a0788feb57d4e02b6155a3d520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e84e2e56a000b1e6d950816ccb755dbe9e268a0788feb57d4e02b6155a3d520->enter($__internal_6e84e2e56a000b1e6d950816ccb755dbe9e268a0788feb57d4e02b6155a3d520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8c6a48451d281d53884cd0636b752aaed05ab3a34f02fbd246dc792c5aa6324e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a48451d281d53884cd0636b752aaed05ab3a34f02fbd246dc792c5aa6324e->enter($__internal_8c6a48451d281d53884cd0636b752aaed05ab3a34f02fbd246dc792c5aa6324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6e84e2e56a000b1e6d950816ccb755dbe9e268a0788feb57d4e02b6155a3d520->leave($__internal_6e84e2e56a000b1e6d950816ccb755dbe9e268a0788feb57d4e02b6155a3d520_prof);

        
        $__internal_8c6a48451d281d53884cd0636b752aaed05ab3a34f02fbd246dc792c5aa6324e->leave($__internal_8c6a48451d281d53884cd0636b752aaed05ab3a34f02fbd246dc792c5aa6324e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
