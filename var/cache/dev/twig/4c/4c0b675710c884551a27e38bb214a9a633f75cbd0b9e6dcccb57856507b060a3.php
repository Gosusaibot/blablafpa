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
        $__internal_1efb9a794f9ea991bcfa65017cce24a68c89608608b60b5d489420f469e77b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efb9a794f9ea991bcfa65017cce24a68c89608608b60b5d489420f469e77b66->enter($__internal_1efb9a794f9ea991bcfa65017cce24a68c89608608b60b5d489420f469e77b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e7b3baa8e61b06e4add6c4c951dbf6773acc7fe69a2f808aacb4e5b4e5c04f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b3baa8e61b06e4add6c4c951dbf6773acc7fe69a2f808aacb4e5b4e5c04f13->enter($__internal_e7b3baa8e61b06e4add6c4c951dbf6773acc7fe69a2f808aacb4e5b4e5c04f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1efb9a794f9ea991bcfa65017cce24a68c89608608b60b5d489420f469e77b66->leave($__internal_1efb9a794f9ea991bcfa65017cce24a68c89608608b60b5d489420f469e77b66_prof);

        
        $__internal_e7b3baa8e61b06e4add6c4c951dbf6773acc7fe69a2f808aacb4e5b4e5c04f13->leave($__internal_e7b3baa8e61b06e4add6c4c951dbf6773acc7fe69a2f808aacb4e5b4e5c04f13_prof);

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
