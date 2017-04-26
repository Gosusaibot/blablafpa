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
        $__internal_7d1aa6070a0eea3a42569bdc92df0fb790162d7904bdcdc5c7573f106255d221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1aa6070a0eea3a42569bdc92df0fb790162d7904bdcdc5c7573f106255d221->enter($__internal_7d1aa6070a0eea3a42569bdc92df0fb790162d7904bdcdc5c7573f106255d221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_56cc2fcdde6cbe154886d4cc99358ad5793b25d45f32ffdec6bbecabe32c4c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cc2fcdde6cbe154886d4cc99358ad5793b25d45f32ffdec6bbecabe32c4c2a->enter($__internal_56cc2fcdde6cbe154886d4cc99358ad5793b25d45f32ffdec6bbecabe32c4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7d1aa6070a0eea3a42569bdc92df0fb790162d7904bdcdc5c7573f106255d221->leave($__internal_7d1aa6070a0eea3a42569bdc92df0fb790162d7904bdcdc5c7573f106255d221_prof);

        
        $__internal_56cc2fcdde6cbe154886d4cc99358ad5793b25d45f32ffdec6bbecabe32c4c2a->leave($__internal_56cc2fcdde6cbe154886d4cc99358ad5793b25d45f32ffdec6bbecabe32c4c2a_prof);

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
