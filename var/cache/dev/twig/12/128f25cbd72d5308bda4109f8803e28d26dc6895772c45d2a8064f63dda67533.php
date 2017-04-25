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
        $__internal_07f898c65ee391d3b57ec8404e34f3c3ff031d62ec2ec7ea35f92aca81f26820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f898c65ee391d3b57ec8404e34f3c3ff031d62ec2ec7ea35f92aca81f26820->enter($__internal_07f898c65ee391d3b57ec8404e34f3c3ff031d62ec2ec7ea35f92aca81f26820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_063b0447ff4be8ff2fdfc79292b0a357d3bc948c4772a4d4af2a7e06ff809dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063b0447ff4be8ff2fdfc79292b0a357d3bc948c4772a4d4af2a7e06ff809dc4->enter($__internal_063b0447ff4be8ff2fdfc79292b0a357d3bc948c4772a4d4af2a7e06ff809dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_07f898c65ee391d3b57ec8404e34f3c3ff031d62ec2ec7ea35f92aca81f26820->leave($__internal_07f898c65ee391d3b57ec8404e34f3c3ff031d62ec2ec7ea35f92aca81f26820_prof);

        
        $__internal_063b0447ff4be8ff2fdfc79292b0a357d3bc948c4772a4d4af2a7e06ff809dc4->leave($__internal_063b0447ff4be8ff2fdfc79292b0a357d3bc948c4772a4d4af2a7e06ff809dc4_prof);

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
