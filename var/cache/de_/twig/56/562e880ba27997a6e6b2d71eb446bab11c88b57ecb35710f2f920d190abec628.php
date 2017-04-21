<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6cd0022007b68437091d16a068d6ea999307b89f5fef36a0878c0c11fe77fd82 extends Twig_Template
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
        $__internal_faa97728df231b75474c071dfd1710d626df94520a87ad18971425377d0ff82a = $this->env->getExtension("native_profiler");
        $__internal_faa97728df231b75474c071dfd1710d626df94520a87ad18971425377d0ff82a->enter($__internal_faa97728df231b75474c071dfd1710d626df94520a87ad18971425377d0ff82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_faa97728df231b75474c071dfd1710d626df94520a87ad18971425377d0ff82a->leave($__internal_faa97728df231b75474c071dfd1710d626df94520a87ad18971425377d0ff82a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
