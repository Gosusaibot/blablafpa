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
        $__internal_77fdf155841fc665882a12d4fe58ba7f2c206640fd534b351736fe3fd45c99a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fdf155841fc665882a12d4fe58ba7f2c206640fd534b351736fe3fd45c99a8->enter($__internal_77fdf155841fc665882a12d4fe58ba7f2c206640fd534b351736fe3fd45c99a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_28191a0b959c25b524c283540a7925ee5cc5e30c8dfaa174a41f4af5225c53e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28191a0b959c25b524c283540a7925ee5cc5e30c8dfaa174a41f4af5225c53e8->enter($__internal_28191a0b959c25b524c283540a7925ee5cc5e30c8dfaa174a41f4af5225c53e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_77fdf155841fc665882a12d4fe58ba7f2c206640fd534b351736fe3fd45c99a8->leave($__internal_77fdf155841fc665882a12d4fe58ba7f2c206640fd534b351736fe3fd45c99a8_prof);

        
        $__internal_28191a0b959c25b524c283540a7925ee5cc5e30c8dfaa174a41f4af5225c53e8->leave($__internal_28191a0b959c25b524c283540a7925ee5cc5e30c8dfaa174a41f4af5225c53e8_prof);

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
