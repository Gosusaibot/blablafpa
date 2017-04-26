<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5b47cd0926fc51dcd2aa109c2165e38faacf171bc804f1f5e023fdddf944f755 extends Twig_Template
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
        $__internal_b93bec3e1d3bf550924878bfdaf47ddece03ff99133e9314ec382dc7e15de2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93bec3e1d3bf550924878bfdaf47ddece03ff99133e9314ec382dc7e15de2b1->enter($__internal_b93bec3e1d3bf550924878bfdaf47ddece03ff99133e9314ec382dc7e15de2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_15df698b3e0b95161a7faeea6b7d751d6d16cee9d528f3568418dc8930730ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15df698b3e0b95161a7faeea6b7d751d6d16cee9d528f3568418dc8930730ef7->enter($__internal_15df698b3e0b95161a7faeea6b7d751d6d16cee9d528f3568418dc8930730ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b93bec3e1d3bf550924878bfdaf47ddece03ff99133e9314ec382dc7e15de2b1->leave($__internal_b93bec3e1d3bf550924878bfdaf47ddece03ff99133e9314ec382dc7e15de2b1_prof);

        
        $__internal_15df698b3e0b95161a7faeea6b7d751d6d16cee9d528f3568418dc8930730ef7->leave($__internal_15df698b3e0b95161a7faeea6b7d751d6d16cee9d528f3568418dc8930730ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
