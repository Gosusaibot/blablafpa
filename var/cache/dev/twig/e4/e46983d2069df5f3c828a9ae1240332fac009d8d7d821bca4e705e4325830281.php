<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3ef9022ab699d28f79d34afae9afb3006359ae4eeab876974705e1c48324a058 extends Twig_Template
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
        $__internal_b6b01430c00e913962353545259c544fa93f53b8c5b6a4abe2af9afd72406ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b01430c00e913962353545259c544fa93f53b8c5b6a4abe2af9afd72406ddf->enter($__internal_b6b01430c00e913962353545259c544fa93f53b8c5b6a4abe2af9afd72406ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_bcf627195a082eb352463cba9d87dbd314fe8434708e6f790e840fa7145a7ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf627195a082eb352463cba9d87dbd314fe8434708e6f790e840fa7145a7ae2->enter($__internal_bcf627195a082eb352463cba9d87dbd314fe8434708e6f790e840fa7145a7ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b6b01430c00e913962353545259c544fa93f53b8c5b6a4abe2af9afd72406ddf->leave($__internal_b6b01430c00e913962353545259c544fa93f53b8c5b6a4abe2af9afd72406ddf_prof);

        
        $__internal_bcf627195a082eb352463cba9d87dbd314fe8434708e6f790e840fa7145a7ae2->leave($__internal_bcf627195a082eb352463cba9d87dbd314fe8434708e6f790e840fa7145a7ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
