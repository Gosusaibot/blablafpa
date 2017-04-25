<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_228473deaf9451271f9c83f3836298e1969064b11e8fd0cd1323bfa5a78416c7 extends Twig_Template
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
        $__internal_e645f233c0a41f0eccd40a58201aa898a5c592cd08f05984fb2841d951dd44b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e645f233c0a41f0eccd40a58201aa898a5c592cd08f05984fb2841d951dd44b6->enter($__internal_e645f233c0a41f0eccd40a58201aa898a5c592cd08f05984fb2841d951dd44b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_533cb7ac4113cf3c20f541e707f09e5a1a97549042228a97b6b137ee7e80763d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533cb7ac4113cf3c20f541e707f09e5a1a97549042228a97b6b137ee7e80763d->enter($__internal_533cb7ac4113cf3c20f541e707f09e5a1a97549042228a97b6b137ee7e80763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e645f233c0a41f0eccd40a58201aa898a5c592cd08f05984fb2841d951dd44b6->leave($__internal_e645f233c0a41f0eccd40a58201aa898a5c592cd08f05984fb2841d951dd44b6_prof);

        
        $__internal_533cb7ac4113cf3c20f541e707f09e5a1a97549042228a97b6b137ee7e80763d->leave($__internal_533cb7ac4113cf3c20f541e707f09e5a1a97549042228a97b6b137ee7e80763d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
