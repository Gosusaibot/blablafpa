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
        $__internal_6e85a5b860a019a780ee6e1fb10b72af56655dc09e4c724e2cf56d2a65ac30a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e85a5b860a019a780ee6e1fb10b72af56655dc09e4c724e2cf56d2a65ac30a8->enter($__internal_6e85a5b860a019a780ee6e1fb10b72af56655dc09e4c724e2cf56d2a65ac30a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3d1b38d033303afacecc51c683c15ff2e5f5ec467f6c6145852ea5d39cffe105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1b38d033303afacecc51c683c15ff2e5f5ec467f6c6145852ea5d39cffe105->enter($__internal_3d1b38d033303afacecc51c683c15ff2e5f5ec467f6c6145852ea5d39cffe105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6e85a5b860a019a780ee6e1fb10b72af56655dc09e4c724e2cf56d2a65ac30a8->leave($__internal_6e85a5b860a019a780ee6e1fb10b72af56655dc09e4c724e2cf56d2a65ac30a8_prof);

        
        $__internal_3d1b38d033303afacecc51c683c15ff2e5f5ec467f6c6145852ea5d39cffe105->leave($__internal_3d1b38d033303afacecc51c683c15ff2e5f5ec467f6c6145852ea5d39cffe105_prof);

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
