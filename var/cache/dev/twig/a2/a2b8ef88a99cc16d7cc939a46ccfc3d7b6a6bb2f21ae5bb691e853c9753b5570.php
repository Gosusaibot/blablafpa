<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bea71ae888b19daa935e489e30b77dc9d814a84fcd3ff7a5766db62a9d235bb2 extends Twig_Template
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
        $__internal_53717d943e1b85a55f28387b4e740a9096bfaa3082dd39536c5ff3d00672e54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53717d943e1b85a55f28387b4e740a9096bfaa3082dd39536c5ff3d00672e54c->enter($__internal_53717d943e1b85a55f28387b4e740a9096bfaa3082dd39536c5ff3d00672e54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5704e2f3e877be9affd4a738f29fb9c5ce704e0e908b6a5a1ee18ca4ade85bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5704e2f3e877be9affd4a738f29fb9c5ce704e0e908b6a5a1ee18ca4ade85bc6->enter($__internal_5704e2f3e877be9affd4a738f29fb9c5ce704e0e908b6a5a1ee18ca4ade85bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_53717d943e1b85a55f28387b4e740a9096bfaa3082dd39536c5ff3d00672e54c->leave($__internal_53717d943e1b85a55f28387b4e740a9096bfaa3082dd39536c5ff3d00672e54c_prof);

        
        $__internal_5704e2f3e877be9affd4a738f29fb9c5ce704e0e908b6a5a1ee18ca4ade85bc6->leave($__internal_5704e2f3e877be9affd4a738f29fb9c5ce704e0e908b6a5a1ee18ca4ade85bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
