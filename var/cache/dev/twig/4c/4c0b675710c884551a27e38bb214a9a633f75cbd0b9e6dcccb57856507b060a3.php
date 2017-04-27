<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d28150e62fff52fb2a2d30da69d318ff65b31f40ccff94790846adaa84f60bf2 extends Twig_Template
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
        $__internal_dbc66ede2f64975a18492beac9c19263e2d516d238e85cbc5bcde3a7dce4d533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc66ede2f64975a18492beac9c19263e2d516d238e85cbc5bcde3a7dce4d533->enter($__internal_dbc66ede2f64975a18492beac9c19263e2d516d238e85cbc5bcde3a7dce4d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c69497a7ff7e6e45b2754c1548a012904f9b2e45b5f1550b7d4ed64eb3dbe4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69497a7ff7e6e45b2754c1548a012904f9b2e45b5f1550b7d4ed64eb3dbe4e7->enter($__internal_c69497a7ff7e6e45b2754c1548a012904f9b2e45b5f1550b7d4ed64eb3dbe4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dbc66ede2f64975a18492beac9c19263e2d516d238e85cbc5bcde3a7dce4d533->leave($__internal_dbc66ede2f64975a18492beac9c19263e2d516d238e85cbc5bcde3a7dce4d533_prof);

        
        $__internal_c69497a7ff7e6e45b2754c1548a012904f9b2e45b5f1550b7d4ed64eb3dbe4e7->leave($__internal_c69497a7ff7e6e45b2754c1548a012904f9b2e45b5f1550b7d4ed64eb3dbe4e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
