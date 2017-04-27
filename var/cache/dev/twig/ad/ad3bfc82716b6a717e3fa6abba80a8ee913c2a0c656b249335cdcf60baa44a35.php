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
        $__internal_4330b22066dabcfba25fa52a6556ec29fb514e8d488e0ff726cbfa3251d95a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4330b22066dabcfba25fa52a6556ec29fb514e8d488e0ff726cbfa3251d95a19->enter($__internal_4330b22066dabcfba25fa52a6556ec29fb514e8d488e0ff726cbfa3251d95a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4510ac29b5c855fe31757d8dbce49b7c296682312bad73d9c69d632e1ac3153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4510ac29b5c855fe31757d8dbce49b7c296682312bad73d9c69d632e1ac3153e->enter($__internal_4510ac29b5c855fe31757d8dbce49b7c296682312bad73d9c69d632e1ac3153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4330b22066dabcfba25fa52a6556ec29fb514e8d488e0ff726cbfa3251d95a19->leave($__internal_4330b22066dabcfba25fa52a6556ec29fb514e8d488e0ff726cbfa3251d95a19_prof);

        
        $__internal_4510ac29b5c855fe31757d8dbce49b7c296682312bad73d9c69d632e1ac3153e->leave($__internal_4510ac29b5c855fe31757d8dbce49b7c296682312bad73d9c69d632e1ac3153e_prof);

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
