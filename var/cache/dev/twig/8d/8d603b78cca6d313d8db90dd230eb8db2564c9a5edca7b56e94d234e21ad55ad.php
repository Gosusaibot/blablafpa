<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_308e5d85f3a12fa5ba1ce39e770cd3302ebf1d4c35e212ff8a2a74f26bff6c96 extends Twig_Template
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
        $__internal_9fd3284a6cafd4f5640524fd84684bfdbe666c8e1b3c3a557ab335988471aea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd3284a6cafd4f5640524fd84684bfdbe666c8e1b3c3a557ab335988471aea5->enter($__internal_9fd3284a6cafd4f5640524fd84684bfdbe666c8e1b3c3a557ab335988471aea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_df32337c333c2226ad8d1b4f2906062c267a18f97e238beabc37e9f44a6b82aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df32337c333c2226ad8d1b4f2906062c267a18f97e238beabc37e9f44a6b82aa->enter($__internal_df32337c333c2226ad8d1b4f2906062c267a18f97e238beabc37e9f44a6b82aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9fd3284a6cafd4f5640524fd84684bfdbe666c8e1b3c3a557ab335988471aea5->leave($__internal_9fd3284a6cafd4f5640524fd84684bfdbe666c8e1b3c3a557ab335988471aea5_prof);

        
        $__internal_df32337c333c2226ad8d1b4f2906062c267a18f97e238beabc37e9f44a6b82aa->leave($__internal_df32337c333c2226ad8d1b4f2906062c267a18f97e238beabc37e9f44a6b82aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
