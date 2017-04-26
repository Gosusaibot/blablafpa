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
        $__internal_8a74d269bad84ca10a750586e164070c1b7f77869ae255d3af1a3acb0e7989ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a74d269bad84ca10a750586e164070c1b7f77869ae255d3af1a3acb0e7989ed->enter($__internal_8a74d269bad84ca10a750586e164070c1b7f77869ae255d3af1a3acb0e7989ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f5e2e9d9726686cd22b44f488acad4a8c97da3daa97cfe30138b615cc35694c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e2e9d9726686cd22b44f488acad4a8c97da3daa97cfe30138b615cc35694c0->enter($__internal_f5e2e9d9726686cd22b44f488acad4a8c97da3daa97cfe30138b615cc35694c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8a74d269bad84ca10a750586e164070c1b7f77869ae255d3af1a3acb0e7989ed->leave($__internal_8a74d269bad84ca10a750586e164070c1b7f77869ae255d3af1a3acb0e7989ed_prof);

        
        $__internal_f5e2e9d9726686cd22b44f488acad4a8c97da3daa97cfe30138b615cc35694c0->leave($__internal_f5e2e9d9726686cd22b44f488acad4a8c97da3daa97cfe30138b615cc35694c0_prof);

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
