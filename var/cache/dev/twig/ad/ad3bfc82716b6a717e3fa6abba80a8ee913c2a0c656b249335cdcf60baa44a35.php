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
        $__internal_356001ff64871846854d1eae076796cec0e0f7ad223c3bdf2dd09f525b5fc7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356001ff64871846854d1eae076796cec0e0f7ad223c3bdf2dd09f525b5fc7fe->enter($__internal_356001ff64871846854d1eae076796cec0e0f7ad223c3bdf2dd09f525b5fc7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3655451260f0fd3d208e0973af261b80767ed58ad4cce1bc2b3e2d30bf61a564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655451260f0fd3d208e0973af261b80767ed58ad4cce1bc2b3e2d30bf61a564->enter($__internal_3655451260f0fd3d208e0973af261b80767ed58ad4cce1bc2b3e2d30bf61a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_356001ff64871846854d1eae076796cec0e0f7ad223c3bdf2dd09f525b5fc7fe->leave($__internal_356001ff64871846854d1eae076796cec0e0f7ad223c3bdf2dd09f525b5fc7fe_prof);

        
        $__internal_3655451260f0fd3d208e0973af261b80767ed58ad4cce1bc2b3e2d30bf61a564->leave($__internal_3655451260f0fd3d208e0973af261b80767ed58ad4cce1bc2b3e2d30bf61a564_prof);

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
