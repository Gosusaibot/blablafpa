<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_da614c58d0ce6bae952bcbb32368b77d7d77c4f01945f4c9e67ead4ada7b39aa extends Twig_Template
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
        $__internal_4c1d0800f8c72dce9d6e3075fc3762c01fccf36ac759def8d05bb9959be1c053 = $this->env->getExtension("native_profiler");
        $__internal_4c1d0800f8c72dce9d6e3075fc3762c01fccf36ac759def8d05bb9959be1c053->enter($__internal_4c1d0800f8c72dce9d6e3075fc3762c01fccf36ac759def8d05bb9959be1c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4c1d0800f8c72dce9d6e3075fc3762c01fccf36ac759def8d05bb9959be1c053->leave($__internal_4c1d0800f8c72dce9d6e3075fc3762c01fccf36ac759def8d05bb9959be1c053_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
