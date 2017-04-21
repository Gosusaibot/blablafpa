<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ba2b4ac04825df5ef46d4ad1aa0cb3b55ee87442be516597c2e5bec0a91e5362 extends Twig_Template
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
        $__internal_8502bf6c0df3ac1663e80ad1664df8b5c2f1551a716dd49f932d57bb73d1e5ed = $this->env->getExtension("native_profiler");
        $__internal_8502bf6c0df3ac1663e80ad1664df8b5c2f1551a716dd49f932d57bb73d1e5ed->enter($__internal_8502bf6c0df3ac1663e80ad1664df8b5c2f1551a716dd49f932d57bb73d1e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8502bf6c0df3ac1663e80ad1664df8b5c2f1551a716dd49f932d57bb73d1e5ed->leave($__internal_8502bf6c0df3ac1663e80ad1664df8b5c2f1551a716dd49f932d57bb73d1e5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
