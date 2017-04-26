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
        $__internal_2cefb3b932ec371644019eaaae619a2880defbf95c088dc24fd5c5affc53a13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cefb3b932ec371644019eaaae619a2880defbf95c088dc24fd5c5affc53a13e->enter($__internal_2cefb3b932ec371644019eaaae619a2880defbf95c088dc24fd5c5affc53a13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8cbe6358d20db80aa1e31a49f22f92cb5fbc911f93245993d7ee6008e1b76c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbe6358d20db80aa1e31a49f22f92cb5fbc911f93245993d7ee6008e1b76c60->enter($__internal_8cbe6358d20db80aa1e31a49f22f92cb5fbc911f93245993d7ee6008e1b76c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2cefb3b932ec371644019eaaae619a2880defbf95c088dc24fd5c5affc53a13e->leave($__internal_2cefb3b932ec371644019eaaae619a2880defbf95c088dc24fd5c5affc53a13e_prof);

        
        $__internal_8cbe6358d20db80aa1e31a49f22f92cb5fbc911f93245993d7ee6008e1b76c60->leave($__internal_8cbe6358d20db80aa1e31a49f22f92cb5fbc911f93245993d7ee6008e1b76c60_prof);

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
