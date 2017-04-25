<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_01fe8729c149d66ac85174d8838cc8c901667ecbacfee7fb22e39893c3812da3 extends Twig_Template
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
        $__internal_23210dfff6962da48ec2e4e9da1f916562fc83d2758ac24919d4621546f85d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23210dfff6962da48ec2e4e9da1f916562fc83d2758ac24919d4621546f85d01->enter($__internal_23210dfff6962da48ec2e4e9da1f916562fc83d2758ac24919d4621546f85d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_756c9c4c1f806014226bec94c5e03621cd2e6d878bee750a4632a6d36b239ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756c9c4c1f806014226bec94c5e03621cd2e6d878bee750a4632a6d36b239ced->enter($__internal_756c9c4c1f806014226bec94c5e03621cd2e6d878bee750a4632a6d36b239ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23210dfff6962da48ec2e4e9da1f916562fc83d2758ac24919d4621546f85d01->leave($__internal_23210dfff6962da48ec2e4e9da1f916562fc83d2758ac24919d4621546f85d01_prof);

        
        $__internal_756c9c4c1f806014226bec94c5e03621cd2e6d878bee750a4632a6d36b239ced->leave($__internal_756c9c4c1f806014226bec94c5e03621cd2e6d878bee750a4632a6d36b239ced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
