<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1833ddbedf0a1eb7e57168be6fc77d00fde0a37758c15101cead52fb3fc4df5f extends Twig_Template
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
        $__internal_fc92d786a382023f945e5bf0bdc04843365dfd0d3ce42c48d7f0c5b8f79a7a52 = $this->env->getExtension("native_profiler");
        $__internal_fc92d786a382023f945e5bf0bdc04843365dfd0d3ce42c48d7f0c5b8f79a7a52->enter($__internal_fc92d786a382023f945e5bf0bdc04843365dfd0d3ce42c48d7f0c5b8f79a7a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fc92d786a382023f945e5bf0bdc04843365dfd0d3ce42c48d7f0c5b8f79a7a52->leave($__internal_fc92d786a382023f945e5bf0bdc04843365dfd0d3ce42c48d7f0c5b8f79a7a52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
