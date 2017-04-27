<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4e3fb5a63fe32ddcf9a112b6a751bc5a0428c42101dcffc966eaf9227e6394aa extends Twig_Template
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
        $__internal_fc1c95fb36852e9c842180b96bd4993632b3e6d5539b5dcba2794183043ec45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1c95fb36852e9c842180b96bd4993632b3e6d5539b5dcba2794183043ec45a->enter($__internal_fc1c95fb36852e9c842180b96bd4993632b3e6d5539b5dcba2794183043ec45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4c7c733b5bf445cfd74417c70a712ae5e88bc3be52378dc602ffd641103b937b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7c733b5bf445cfd74417c70a712ae5e88bc3be52378dc602ffd641103b937b->enter($__internal_4c7c733b5bf445cfd74417c70a712ae5e88bc3be52378dc602ffd641103b937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fc1c95fb36852e9c842180b96bd4993632b3e6d5539b5dcba2794183043ec45a->leave($__internal_fc1c95fb36852e9c842180b96bd4993632b3e6d5539b5dcba2794183043ec45a_prof);

        
        $__internal_4c7c733b5bf445cfd74417c70a712ae5e88bc3be52378dc602ffd641103b937b->leave($__internal_4c7c733b5bf445cfd74417c70a712ae5e88bc3be52378dc602ffd641103b937b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
