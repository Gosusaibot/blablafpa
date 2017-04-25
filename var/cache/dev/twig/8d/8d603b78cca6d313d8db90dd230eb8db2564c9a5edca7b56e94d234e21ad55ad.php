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
        $__internal_10b7c061b8985a72a335ceb696437e5cedac13f39a66901a453633e63e2e141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b7c061b8985a72a335ceb696437e5cedac13f39a66901a453633e63e2e141d->enter($__internal_10b7c061b8985a72a335ceb696437e5cedac13f39a66901a453633e63e2e141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_45173c07ab46d7d4aa3a74908189751872b615b22643e30dcb6244325d1f1510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45173c07ab46d7d4aa3a74908189751872b615b22643e30dcb6244325d1f1510->enter($__internal_45173c07ab46d7d4aa3a74908189751872b615b22643e30dcb6244325d1f1510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_10b7c061b8985a72a335ceb696437e5cedac13f39a66901a453633e63e2e141d->leave($__internal_10b7c061b8985a72a335ceb696437e5cedac13f39a66901a453633e63e2e141d_prof);

        
        $__internal_45173c07ab46d7d4aa3a74908189751872b615b22643e30dcb6244325d1f1510->leave($__internal_45173c07ab46d7d4aa3a74908189751872b615b22643e30dcb6244325d1f1510_prof);

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
