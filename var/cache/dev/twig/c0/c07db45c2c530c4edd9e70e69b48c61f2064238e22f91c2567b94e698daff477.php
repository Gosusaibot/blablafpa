<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2419cff27bccc1c57e86bfc710c4372721837785ac28ac6ed9fd3c18e39e70a6 extends Twig_Template
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
        $__internal_8a6b4114d98b151d3f997e81f7207efde0b1e41fb172ecc48c598c285e9e83ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6b4114d98b151d3f997e81f7207efde0b1e41fb172ecc48c598c285e9e83ed->enter($__internal_8a6b4114d98b151d3f997e81f7207efde0b1e41fb172ecc48c598c285e9e83ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_13122105cecbdc2965c553262f64ec6db5ca7968cdd844e7b49372250cb65380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13122105cecbdc2965c553262f64ec6db5ca7968cdd844e7b49372250cb65380->enter($__internal_13122105cecbdc2965c553262f64ec6db5ca7968cdd844e7b49372250cb65380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8a6b4114d98b151d3f997e81f7207efde0b1e41fb172ecc48c598c285e9e83ed->leave($__internal_8a6b4114d98b151d3f997e81f7207efde0b1e41fb172ecc48c598c285e9e83ed_prof);

        
        $__internal_13122105cecbdc2965c553262f64ec6db5ca7968cdd844e7b49372250cb65380->leave($__internal_13122105cecbdc2965c553262f64ec6db5ca7968cdd844e7b49372250cb65380_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
