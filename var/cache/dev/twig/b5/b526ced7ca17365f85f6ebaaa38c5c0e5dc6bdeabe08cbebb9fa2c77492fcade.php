<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fcc3fb1c7e3af52fdf39120c7c98416c1357cc5ec601d1171d36b96a556a7f81 extends Twig_Template
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
        $__internal_c23cca99fbe4c5f39f8e07ae58914e4f9ea53427beaa1cc23a46621592a758b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23cca99fbe4c5f39f8e07ae58914e4f9ea53427beaa1cc23a46621592a758b9->enter($__internal_c23cca99fbe4c5f39f8e07ae58914e4f9ea53427beaa1cc23a46621592a758b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b9bdbc9bff3541c43763d62de647dd283781835642aad154d2fee56b1f4eb6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bdbc9bff3541c43763d62de647dd283781835642aad154d2fee56b1f4eb6b2->enter($__internal_b9bdbc9bff3541c43763d62de647dd283781835642aad154d2fee56b1f4eb6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c23cca99fbe4c5f39f8e07ae58914e4f9ea53427beaa1cc23a46621592a758b9->leave($__internal_c23cca99fbe4c5f39f8e07ae58914e4f9ea53427beaa1cc23a46621592a758b9_prof);

        
        $__internal_b9bdbc9bff3541c43763d62de647dd283781835642aad154d2fee56b1f4eb6b2->leave($__internal_b9bdbc9bff3541c43763d62de647dd283781835642aad154d2fee56b1f4eb6b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
