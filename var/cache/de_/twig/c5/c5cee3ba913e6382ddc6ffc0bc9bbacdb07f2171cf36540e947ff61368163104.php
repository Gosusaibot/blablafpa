<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2844fadd837f811851b7d96709c240bd14093bbc5090150ee27ec3db2e3bb51d extends Twig_Template
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
        $__internal_9cc907f6867167364be7129261c0bebc7bcd6cf51fb9b7979b305572ce6f65b4 = $this->env->getExtension("native_profiler");
        $__internal_9cc907f6867167364be7129261c0bebc7bcd6cf51fb9b7979b305572ce6f65b4->enter($__internal_9cc907f6867167364be7129261c0bebc7bcd6cf51fb9b7979b305572ce6f65b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9cc907f6867167364be7129261c0bebc7bcd6cf51fb9b7979b305572ce6f65b4->leave($__internal_9cc907f6867167364be7129261c0bebc7bcd6cf51fb9b7979b305572ce6f65b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
