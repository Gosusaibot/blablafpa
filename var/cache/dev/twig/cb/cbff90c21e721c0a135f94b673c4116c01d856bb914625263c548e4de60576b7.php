<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7026cf91d21131a4825f09ddaf8bfb206c059eb8a193abbf2aa2b8f4ae8a26ef extends Twig_Template
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
        $__internal_d75a3f6399d36def425125e7f63dec8adb0b8bb534364c47c02c15951e0c4774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75a3f6399d36def425125e7f63dec8adb0b8bb534364c47c02c15951e0c4774->enter($__internal_d75a3f6399d36def425125e7f63dec8adb0b8bb534364c47c02c15951e0c4774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0745f15c29330d118de83b4665d82d2f798f45400642b68e5f11ac6d5336505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0745f15c29330d118de83b4665d82d2f798f45400642b68e5f11ac6d5336505b->enter($__internal_0745f15c29330d118de83b4665d82d2f798f45400642b68e5f11ac6d5336505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d75a3f6399d36def425125e7f63dec8adb0b8bb534364c47c02c15951e0c4774->leave($__internal_d75a3f6399d36def425125e7f63dec8adb0b8bb534364c47c02c15951e0c4774_prof);

        
        $__internal_0745f15c29330d118de83b4665d82d2f798f45400642b68e5f11ac6d5336505b->leave($__internal_0745f15c29330d118de83b4665d82d2f798f45400642b68e5f11ac6d5336505b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
