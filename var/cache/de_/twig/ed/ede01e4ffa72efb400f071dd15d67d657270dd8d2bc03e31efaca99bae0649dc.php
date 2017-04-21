<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c71e34a6c043b1512218a6f484362da43cbd7d7a3a494472eba6a731986e10b7 extends Twig_Template
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
        $__internal_fb7f5ddc7c8e83426a5c23b98e60625dadd5e7d2ee590012f0331014b700456c = $this->env->getExtension("native_profiler");
        $__internal_fb7f5ddc7c8e83426a5c23b98e60625dadd5e7d2ee590012f0331014b700456c->enter($__internal_fb7f5ddc7c8e83426a5c23b98e60625dadd5e7d2ee590012f0331014b700456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fb7f5ddc7c8e83426a5c23b98e60625dadd5e7d2ee590012f0331014b700456c->leave($__internal_fb7f5ddc7c8e83426a5c23b98e60625dadd5e7d2ee590012f0331014b700456c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
