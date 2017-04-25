<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f5a484be8634226e3e71d9ab08e085cbde813f7309e9444f341bc06e33b32e31 extends Twig_Template
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
        $__internal_078122d939e7a514deec78812effed89736c36d9bbcf9c0bbb1a06a94b904b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078122d939e7a514deec78812effed89736c36d9bbcf9c0bbb1a06a94b904b55->enter($__internal_078122d939e7a514deec78812effed89736c36d9bbcf9c0bbb1a06a94b904b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ef0efcce15c6d45b22ed251dcbe9c733e7377818718f773706a27d7ebcfa33d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0efcce15c6d45b22ed251dcbe9c733e7377818718f773706a27d7ebcfa33d9->enter($__internal_ef0efcce15c6d45b22ed251dcbe9c733e7377818718f773706a27d7ebcfa33d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_078122d939e7a514deec78812effed89736c36d9bbcf9c0bbb1a06a94b904b55->leave($__internal_078122d939e7a514deec78812effed89736c36d9bbcf9c0bbb1a06a94b904b55_prof);

        
        $__internal_ef0efcce15c6d45b22ed251dcbe9c733e7377818718f773706a27d7ebcfa33d9->leave($__internal_ef0efcce15c6d45b22ed251dcbe9c733e7377818718f773706a27d7ebcfa33d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
