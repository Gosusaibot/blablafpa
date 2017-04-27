<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3777ba1090601c7c5b248106067ccb66d6006328d3c2f0712007fe7077aa83c4 extends Twig_Template
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
        $__internal_3b4f5afcdfc62f9a63ecd7b2969d3264b2fa81088aa36eed8bd258c46ea7a35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4f5afcdfc62f9a63ecd7b2969d3264b2fa81088aa36eed8bd258c46ea7a35d->enter($__internal_3b4f5afcdfc62f9a63ecd7b2969d3264b2fa81088aa36eed8bd258c46ea7a35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d25bec0950445ffd3cbeb267a81ed6029f99a5555862aa74818edfd2530175a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25bec0950445ffd3cbeb267a81ed6029f99a5555862aa74818edfd2530175a4->enter($__internal_d25bec0950445ffd3cbeb267a81ed6029f99a5555862aa74818edfd2530175a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3b4f5afcdfc62f9a63ecd7b2969d3264b2fa81088aa36eed8bd258c46ea7a35d->leave($__internal_3b4f5afcdfc62f9a63ecd7b2969d3264b2fa81088aa36eed8bd258c46ea7a35d_prof);

        
        $__internal_d25bec0950445ffd3cbeb267a81ed6029f99a5555862aa74818edfd2530175a4->leave($__internal_d25bec0950445ffd3cbeb267a81ed6029f99a5555862aa74818edfd2530175a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
