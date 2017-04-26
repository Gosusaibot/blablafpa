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
        $__internal_db0e98d6b76c4dd5175919819ca70ac78a9daf758edc4947b0a906b91ec31f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0e98d6b76c4dd5175919819ca70ac78a9daf758edc4947b0a906b91ec31f80->enter($__internal_db0e98d6b76c4dd5175919819ca70ac78a9daf758edc4947b0a906b91ec31f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b362eca45c99eb5b6a1659c2e607e6b9424f63841567415deff4bea0eb53d16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b362eca45c99eb5b6a1659c2e607e6b9424f63841567415deff4bea0eb53d16a->enter($__internal_b362eca45c99eb5b6a1659c2e607e6b9424f63841567415deff4bea0eb53d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db0e98d6b76c4dd5175919819ca70ac78a9daf758edc4947b0a906b91ec31f80->leave($__internal_db0e98d6b76c4dd5175919819ca70ac78a9daf758edc4947b0a906b91ec31f80_prof);

        
        $__internal_b362eca45c99eb5b6a1659c2e607e6b9424f63841567415deff4bea0eb53d16a->leave($__internal_b362eca45c99eb5b6a1659c2e607e6b9424f63841567415deff4bea0eb53d16a_prof);

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
