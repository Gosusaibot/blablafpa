<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f84f5379e2c1138e57e523e4303bcd6d8741dd42268542194d3ebc3f25c5c103 extends Twig_Template
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
        $__internal_84ffc014e218d43e819cb0ded224dd0b48aecb044e8e3f443392b8c35a89106a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ffc014e218d43e819cb0ded224dd0b48aecb044e8e3f443392b8c35a89106a->enter($__internal_84ffc014e218d43e819cb0ded224dd0b48aecb044e8e3f443392b8c35a89106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1939df7517633c536a6be12b23efbd44557b00412efe6292a7952ae424085670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1939df7517633c536a6be12b23efbd44557b00412efe6292a7952ae424085670->enter($__internal_1939df7517633c536a6be12b23efbd44557b00412efe6292a7952ae424085670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_84ffc014e218d43e819cb0ded224dd0b48aecb044e8e3f443392b8c35a89106a->leave($__internal_84ffc014e218d43e819cb0ded224dd0b48aecb044e8e3f443392b8c35a89106a_prof);

        
        $__internal_1939df7517633c536a6be12b23efbd44557b00412efe6292a7952ae424085670->leave($__internal_1939df7517633c536a6be12b23efbd44557b00412efe6292a7952ae424085670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
