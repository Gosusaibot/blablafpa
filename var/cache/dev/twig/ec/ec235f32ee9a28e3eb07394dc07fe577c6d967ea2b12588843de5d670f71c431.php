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
        $__internal_16a0af69fa7b3e753b4e66bef9548410a194d76e24e3bdd80e76616a0913de8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a0af69fa7b3e753b4e66bef9548410a194d76e24e3bdd80e76616a0913de8d->enter($__internal_16a0af69fa7b3e753b4e66bef9548410a194d76e24e3bdd80e76616a0913de8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7936242482bfb9ca7e9d09610117cdb9a334d91acb7eee0184164884c25eb94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7936242482bfb9ca7e9d09610117cdb9a334d91acb7eee0184164884c25eb94e->enter($__internal_7936242482bfb9ca7e9d09610117cdb9a334d91acb7eee0184164884c25eb94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

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
        
        $__internal_16a0af69fa7b3e753b4e66bef9548410a194d76e24e3bdd80e76616a0913de8d->leave($__internal_16a0af69fa7b3e753b4e66bef9548410a194d76e24e3bdd80e76616a0913de8d_prof);

        
        $__internal_7936242482bfb9ca7e9d09610117cdb9a334d91acb7eee0184164884c25eb94e->leave($__internal_7936242482bfb9ca7e9d09610117cdb9a334d91acb7eee0184164884c25eb94e_prof);

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
