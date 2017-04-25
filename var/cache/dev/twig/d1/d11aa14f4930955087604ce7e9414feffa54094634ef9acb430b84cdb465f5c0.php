<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a4b32573374cf25ed0aca90e6e7e23ef5c8a54047e66945e0c35faa2e3b7053d extends Twig_Template
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
        $__internal_3a58bd5dc80bb344ea4b9aa4f2f3ba652c4ee13130cc47ad6b137a80f05162d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a58bd5dc80bb344ea4b9aa4f2f3ba652c4ee13130cc47ad6b137a80f05162d4->enter($__internal_3a58bd5dc80bb344ea4b9aa4f2f3ba652c4ee13130cc47ad6b137a80f05162d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_42c0b6ca23b85ac7347926823c4bb5ff8232509ad18b0f5770ff94e8b1631e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c0b6ca23b85ac7347926823c4bb5ff8232509ad18b0f5770ff94e8b1631e47->enter($__internal_42c0b6ca23b85ac7347926823c4bb5ff8232509ad18b0f5770ff94e8b1631e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3a58bd5dc80bb344ea4b9aa4f2f3ba652c4ee13130cc47ad6b137a80f05162d4->leave($__internal_3a58bd5dc80bb344ea4b9aa4f2f3ba652c4ee13130cc47ad6b137a80f05162d4_prof);

        
        $__internal_42c0b6ca23b85ac7347926823c4bb5ff8232509ad18b0f5770ff94e8b1631e47->leave($__internal_42c0b6ca23b85ac7347926823c4bb5ff8232509ad18b0f5770ff94e8b1631e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
