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
        $__internal_e185653edd5e5191d13f58d3cef4cd2c30d0f0bb369b3b8a233f28457f455d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e185653edd5e5191d13f58d3cef4cd2c30d0f0bb369b3b8a233f28457f455d48->enter($__internal_e185653edd5e5191d13f58d3cef4cd2c30d0f0bb369b3b8a233f28457f455d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_bc09de4a1270ce064f9c1a616c1654e7c1dda08c3231b5aed228905d496e3e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc09de4a1270ce064f9c1a616c1654e7c1dda08c3231b5aed228905d496e3e86->enter($__internal_bc09de4a1270ce064f9c1a616c1654e7c1dda08c3231b5aed228905d496e3e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

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
        
        $__internal_e185653edd5e5191d13f58d3cef4cd2c30d0f0bb369b3b8a233f28457f455d48->leave($__internal_e185653edd5e5191d13f58d3cef4cd2c30d0f0bb369b3b8a233f28457f455d48_prof);

        
        $__internal_bc09de4a1270ce064f9c1a616c1654e7c1dda08c3231b5aed228905d496e3e86->leave($__internal_bc09de4a1270ce064f9c1a616c1654e7c1dda08c3231b5aed228905d496e3e86_prof);

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
