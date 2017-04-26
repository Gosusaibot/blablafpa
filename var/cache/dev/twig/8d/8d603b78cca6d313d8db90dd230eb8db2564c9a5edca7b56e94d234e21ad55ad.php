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
        $__internal_aa6efe03475c15b77bb06bbe88351f5f507c2d1599dce43a0e6c68dcb03ea750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6efe03475c15b77bb06bbe88351f5f507c2d1599dce43a0e6c68dcb03ea750->enter($__internal_aa6efe03475c15b77bb06bbe88351f5f507c2d1599dce43a0e6c68dcb03ea750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5d9f022ce9acaef091770f95f8acf3bfb33f7b880c5f25592c8cec72060e69b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9f022ce9acaef091770f95f8acf3bfb33f7b880c5f25592c8cec72060e69b9->enter($__internal_5d9f022ce9acaef091770f95f8acf3bfb33f7b880c5f25592c8cec72060e69b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aa6efe03475c15b77bb06bbe88351f5f507c2d1599dce43a0e6c68dcb03ea750->leave($__internal_aa6efe03475c15b77bb06bbe88351f5f507c2d1599dce43a0e6c68dcb03ea750_prof);

        
        $__internal_5d9f022ce9acaef091770f95f8acf3bfb33f7b880c5f25592c8cec72060e69b9->leave($__internal_5d9f022ce9acaef091770f95f8acf3bfb33f7b880c5f25592c8cec72060e69b9_prof);

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
