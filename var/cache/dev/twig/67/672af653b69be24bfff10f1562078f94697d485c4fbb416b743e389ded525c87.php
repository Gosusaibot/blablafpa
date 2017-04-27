<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f5a484be8634226e3e71d9ab08e085cbde813f7309e9444f341bc06e33b32e31 extends Twig_Template
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
        $__internal_62728ff2f99830a8d52796e40dc459c231780bd1738413726f0e6fa2fb3fad24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62728ff2f99830a8d52796e40dc459c231780bd1738413726f0e6fa2fb3fad24->enter($__internal_62728ff2f99830a8d52796e40dc459c231780bd1738413726f0e6fa2fb3fad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2ef009f2a925c7587cc90cc2e7710849055292e98ba43cf7434e246ea80d52e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef009f2a925c7587cc90cc2e7710849055292e98ba43cf7434e246ea80d52e1->enter($__internal_2ef009f2a925c7587cc90cc2e7710849055292e98ba43cf7434e246ea80d52e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_62728ff2f99830a8d52796e40dc459c231780bd1738413726f0e6fa2fb3fad24->leave($__internal_62728ff2f99830a8d52796e40dc459c231780bd1738413726f0e6fa2fb3fad24_prof);

        
        $__internal_2ef009f2a925c7587cc90cc2e7710849055292e98ba43cf7434e246ea80d52e1->leave($__internal_2ef009f2a925c7587cc90cc2e7710849055292e98ba43cf7434e246ea80d52e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
