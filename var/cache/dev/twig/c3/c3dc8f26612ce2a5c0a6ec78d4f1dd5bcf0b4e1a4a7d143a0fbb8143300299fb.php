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
        $__internal_741f2ba064ae680ef108bf516da1ba99c743c9e345bb692c6a891a2f48255297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741f2ba064ae680ef108bf516da1ba99c743c9e345bb692c6a891a2f48255297->enter($__internal_741f2ba064ae680ef108bf516da1ba99c743c9e345bb692c6a891a2f48255297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7863fb113604ed20906ee02a7b2430d8f33b57d914843bd6b63401a4ed899824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7863fb113604ed20906ee02a7b2430d8f33b57d914843bd6b63401a4ed899824->enter($__internal_7863fb113604ed20906ee02a7b2430d8f33b57d914843bd6b63401a4ed899824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_741f2ba064ae680ef108bf516da1ba99c743c9e345bb692c6a891a2f48255297->leave($__internal_741f2ba064ae680ef108bf516da1ba99c743c9e345bb692c6a891a2f48255297_prof);

        
        $__internal_7863fb113604ed20906ee02a7b2430d8f33b57d914843bd6b63401a4ed899824->leave($__internal_7863fb113604ed20906ee02a7b2430d8f33b57d914843bd6b63401a4ed899824_prof);

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
