<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_364ea80ae0ba698e62971c04902109dfac71fd197491b6d8be9377272bc8e29d extends Twig_Template
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
        $__internal_9a952700a5222fb88b7e3a46b866e5c719b36a2d6213e5f9911fc2c43bca249c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a952700a5222fb88b7e3a46b866e5c719b36a2d6213e5f9911fc2c43bca249c->enter($__internal_9a952700a5222fb88b7e3a46b866e5c719b36a2d6213e5f9911fc2c43bca249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e22e46351d93718bc6a176815f3aebf171ba6c7e606e5fcc29572ef898c1c2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22e46351d93718bc6a176815f3aebf171ba6c7e606e5fcc29572ef898c1c2fd->enter($__internal_e22e46351d93718bc6a176815f3aebf171ba6c7e606e5fcc29572ef898c1c2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9a952700a5222fb88b7e3a46b866e5c719b36a2d6213e5f9911fc2c43bca249c->leave($__internal_9a952700a5222fb88b7e3a46b866e5c719b36a2d6213e5f9911fc2c43bca249c_prof);

        
        $__internal_e22e46351d93718bc6a176815f3aebf171ba6c7e606e5fcc29572ef898c1c2fd->leave($__internal_e22e46351d93718bc6a176815f3aebf171ba6c7e606e5fcc29572ef898c1c2fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
