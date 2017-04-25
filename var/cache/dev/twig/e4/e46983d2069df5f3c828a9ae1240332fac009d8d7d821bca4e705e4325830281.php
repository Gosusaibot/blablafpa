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
        $__internal_d1218deabba0a60987f95e8fa5d46ce036ce136e5afa1a769336680ca4b64d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1218deabba0a60987f95e8fa5d46ce036ce136e5afa1a769336680ca4b64d89->enter($__internal_d1218deabba0a60987f95e8fa5d46ce036ce136e5afa1a769336680ca4b64d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_03f4b6150cdaf0d76d0230dd705f9fba80932899833c27b5dce0fad9174ad386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f4b6150cdaf0d76d0230dd705f9fba80932899833c27b5dce0fad9174ad386->enter($__internal_03f4b6150cdaf0d76d0230dd705f9fba80932899833c27b5dce0fad9174ad386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d1218deabba0a60987f95e8fa5d46ce036ce136e5afa1a769336680ca4b64d89->leave($__internal_d1218deabba0a60987f95e8fa5d46ce036ce136e5afa1a769336680ca4b64d89_prof);

        
        $__internal_03f4b6150cdaf0d76d0230dd705f9fba80932899833c27b5dce0fad9174ad386->leave($__internal_03f4b6150cdaf0d76d0230dd705f9fba80932899833c27b5dce0fad9174ad386_prof);

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
