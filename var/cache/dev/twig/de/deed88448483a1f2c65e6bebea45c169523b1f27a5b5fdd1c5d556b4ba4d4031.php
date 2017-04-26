<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1ab169971d94c2457e8da04086610d1836518804b9ff8cb5966f1e8842f677f4 extends Twig_Template
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
        $__internal_339020475f8b2a928e89c9c72f2150a06db82aa304f855a23f8ef294fcc28bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339020475f8b2a928e89c9c72f2150a06db82aa304f855a23f8ef294fcc28bee->enter($__internal_339020475f8b2a928e89c9c72f2150a06db82aa304f855a23f8ef294fcc28bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_09f5cb00287f0c39fd8314bf22d023afa5ac7ccee968d55701155a23f3b79261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f5cb00287f0c39fd8314bf22d023afa5ac7ccee968d55701155a23f3b79261->enter($__internal_09f5cb00287f0c39fd8314bf22d023afa5ac7ccee968d55701155a23f3b79261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_339020475f8b2a928e89c9c72f2150a06db82aa304f855a23f8ef294fcc28bee->leave($__internal_339020475f8b2a928e89c9c72f2150a06db82aa304f855a23f8ef294fcc28bee_prof);

        
        $__internal_09f5cb00287f0c39fd8314bf22d023afa5ac7ccee968d55701155a23f3b79261->leave($__internal_09f5cb00287f0c39fd8314bf22d023afa5ac7ccee968d55701155a23f3b79261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
