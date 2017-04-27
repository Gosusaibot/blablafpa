<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_57f170118ed2c54c5c1172a93cc6c4d80a2f177669fbb2b03359110c22a0fbf2 extends Twig_Template
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
        $__internal_6c0546353db45f97e2febee076a4b4dd54464918d8faf7ec81fd507077c6b7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0546353db45f97e2febee076a4b4dd54464918d8faf7ec81fd507077c6b7dd->enter($__internal_6c0546353db45f97e2febee076a4b4dd54464918d8faf7ec81fd507077c6b7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5c3a65d329444182648940af91aceb4957badae3336fe30539ad73ff2e51d5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a65d329444182648940af91aceb4957badae3336fe30539ad73ff2e51d5e1->enter($__internal_5c3a65d329444182648940af91aceb4957badae3336fe30539ad73ff2e51d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6c0546353db45f97e2febee076a4b4dd54464918d8faf7ec81fd507077c6b7dd->leave($__internal_6c0546353db45f97e2febee076a4b4dd54464918d8faf7ec81fd507077c6b7dd_prof);

        
        $__internal_5c3a65d329444182648940af91aceb4957badae3336fe30539ad73ff2e51d5e1->leave($__internal_5c3a65d329444182648940af91aceb4957badae3336fe30539ad73ff2e51d5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
