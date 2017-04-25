<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f9bfe4f6574df645a38c2f4c30b138f23a38d4e4a9ebd5456b530190877dab71 extends Twig_Template
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
        $__internal_01a1b6348c224e9e9feae2a5ea980fc14b737b91f399d6d459735d1b074635a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a1b6348c224e9e9feae2a5ea980fc14b737b91f399d6d459735d1b074635a5->enter($__internal_01a1b6348c224e9e9feae2a5ea980fc14b737b91f399d6d459735d1b074635a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5abd4324f2ff7d81925596e28aa592099bea134863c7d7df3b823dd22c0816e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abd4324f2ff7d81925596e28aa592099bea134863c7d7df3b823dd22c0816e5->enter($__internal_5abd4324f2ff7d81925596e28aa592099bea134863c7d7df3b823dd22c0816e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_01a1b6348c224e9e9feae2a5ea980fc14b737b91f399d6d459735d1b074635a5->leave($__internal_01a1b6348c224e9e9feae2a5ea980fc14b737b91f399d6d459735d1b074635a5_prof);

        
        $__internal_5abd4324f2ff7d81925596e28aa592099bea134863c7d7df3b823dd22c0816e5->leave($__internal_5abd4324f2ff7d81925596e28aa592099bea134863c7d7df3b823dd22c0816e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
