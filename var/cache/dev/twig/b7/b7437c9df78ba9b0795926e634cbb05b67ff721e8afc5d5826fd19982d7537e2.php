<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a6a0596fb1f894e22d918ee34399b6e97426ac4fd54dd52ca365b9231817ec72 extends Twig_Template
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
        $__internal_b788d189ae51ca84e5eef6c9f2a1fbce738c1ea06045ddf61e55208d46087931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788d189ae51ca84e5eef6c9f2a1fbce738c1ea06045ddf61e55208d46087931->enter($__internal_b788d189ae51ca84e5eef6c9f2a1fbce738c1ea06045ddf61e55208d46087931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_17d0ba9e53a09d647454bb0fbebcacaa507a9498f24de5dec488dd559ce50423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d0ba9e53a09d647454bb0fbebcacaa507a9498f24de5dec488dd559ce50423->enter($__internal_17d0ba9e53a09d647454bb0fbebcacaa507a9498f24de5dec488dd559ce50423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b788d189ae51ca84e5eef6c9f2a1fbce738c1ea06045ddf61e55208d46087931->leave($__internal_b788d189ae51ca84e5eef6c9f2a1fbce738c1ea06045ddf61e55208d46087931_prof);

        
        $__internal_17d0ba9e53a09d647454bb0fbebcacaa507a9498f24de5dec488dd559ce50423->leave($__internal_17d0ba9e53a09d647454bb0fbebcacaa507a9498f24de5dec488dd559ce50423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
