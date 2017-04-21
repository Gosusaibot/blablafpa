<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_62b4f8f56a00fe0926ffdfe1b11c56ba02744d71b9bbfdbb4a6e848522e09604 extends Twig_Template
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
        $__internal_d3c22ffe74e1c826da207bd83f4f2a98450bcce73b30d845817097a18e876601 = $this->env->getExtension("native_profiler");
        $__internal_d3c22ffe74e1c826da207bd83f4f2a98450bcce73b30d845817097a18e876601->enter($__internal_d3c22ffe74e1c826da207bd83f4f2a98450bcce73b30d845817097a18e876601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d3c22ffe74e1c826da207bd83f4f2a98450bcce73b30d845817097a18e876601->leave($__internal_d3c22ffe74e1c826da207bd83f4f2a98450bcce73b30d845817097a18e876601_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
