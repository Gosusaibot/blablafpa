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
        $__internal_cc47581f4bca00c337f2f2104e58f6b61f4424584115bd62f90b2ef963fe015d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc47581f4bca00c337f2f2104e58f6b61f4424584115bd62f90b2ef963fe015d->enter($__internal_cc47581f4bca00c337f2f2104e58f6b61f4424584115bd62f90b2ef963fe015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9b1f69addab56d5a6fb9af320c319ed6ec03dc68a3416421c18194f2255142e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1f69addab56d5a6fb9af320c319ed6ec03dc68a3416421c18194f2255142e6->enter($__internal_9b1f69addab56d5a6fb9af320c319ed6ec03dc68a3416421c18194f2255142e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cc47581f4bca00c337f2f2104e58f6b61f4424584115bd62f90b2ef963fe015d->leave($__internal_cc47581f4bca00c337f2f2104e58f6b61f4424584115bd62f90b2ef963fe015d_prof);

        
        $__internal_9b1f69addab56d5a6fb9af320c319ed6ec03dc68a3416421c18194f2255142e6->leave($__internal_9b1f69addab56d5a6fb9af320c319ed6ec03dc68a3416421c18194f2255142e6_prof);

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
