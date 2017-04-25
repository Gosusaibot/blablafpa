<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34b2535be08e650ac2323c393f2c28095572192e89edda26614aabce7f4a5ee9 extends Twig_Template
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
        $__internal_b26b1e9e51de78bdf65baab4620dcc2404724da9bb624bce0b9d27c228000fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26b1e9e51de78bdf65baab4620dcc2404724da9bb624bce0b9d27c228000fad->enter($__internal_b26b1e9e51de78bdf65baab4620dcc2404724da9bb624bce0b9d27c228000fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ed8997d977c101ad4cfe4367ffb26a9995cd5274331631fb05c9c8f9609f9117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8997d977c101ad4cfe4367ffb26a9995cd5274331631fb05c9c8f9609f9117->enter($__internal_ed8997d977c101ad4cfe4367ffb26a9995cd5274331631fb05c9c8f9609f9117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b26b1e9e51de78bdf65baab4620dcc2404724da9bb624bce0b9d27c228000fad->leave($__internal_b26b1e9e51de78bdf65baab4620dcc2404724da9bb624bce0b9d27c228000fad_prof);

        
        $__internal_ed8997d977c101ad4cfe4367ffb26a9995cd5274331631fb05c9c8f9609f9117->leave($__internal_ed8997d977c101ad4cfe4367ffb26a9995cd5274331631fb05c9c8f9609f9117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
