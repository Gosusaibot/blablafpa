<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_277b0f27102d4ad68de69d43ea6f91127a427a61fd0cbab8489843938b97e769 extends Twig_Template
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
        $__internal_ea53cf6a2dafae9e169ab0a1a84bc0169f56837e6f8b8942ed09b89e9a2eee23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53cf6a2dafae9e169ab0a1a84bc0169f56837e6f8b8942ed09b89e9a2eee23->enter($__internal_ea53cf6a2dafae9e169ab0a1a84bc0169f56837e6f8b8942ed09b89e9a2eee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d0831a6b9a8d6b85cd4a55047a5008f71318497cfb5de19d3fd0acf9f9ec45ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0831a6b9a8d6b85cd4a55047a5008f71318497cfb5de19d3fd0acf9f9ec45ec->enter($__internal_d0831a6b9a8d6b85cd4a55047a5008f71318497cfb5de19d3fd0acf9f9ec45ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
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
        
        $__internal_ea53cf6a2dafae9e169ab0a1a84bc0169f56837e6f8b8942ed09b89e9a2eee23->leave($__internal_ea53cf6a2dafae9e169ab0a1a84bc0169f56837e6f8b8942ed09b89e9a2eee23_prof);

        
        $__internal_d0831a6b9a8d6b85cd4a55047a5008f71318497cfb5de19d3fd0acf9f9ec45ec->leave($__internal_d0831a6b9a8d6b85cd4a55047a5008f71318497cfb5de19d3fd0acf9f9ec45ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
