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
        $__internal_3969fe35d524d009e6267f4cd23580e8f37181d834b586861b7f29e10a9b2223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3969fe35d524d009e6267f4cd23580e8f37181d834b586861b7f29e10a9b2223->enter($__internal_3969fe35d524d009e6267f4cd23580e8f37181d834b586861b7f29e10a9b2223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4ae3a324cde264870505b15932cb32fa8eed3e951a949a9b2d4aa4d34c9902bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae3a324cde264870505b15932cb32fa8eed3e951a949a9b2d4aa4d34c9902bc->enter($__internal_4ae3a324cde264870505b15932cb32fa8eed3e951a949a9b2d4aa4d34c9902bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3969fe35d524d009e6267f4cd23580e8f37181d834b586861b7f29e10a9b2223->leave($__internal_3969fe35d524d009e6267f4cd23580e8f37181d834b586861b7f29e10a9b2223_prof);

        
        $__internal_4ae3a324cde264870505b15932cb32fa8eed3e951a949a9b2d4aa4d34c9902bc->leave($__internal_4ae3a324cde264870505b15932cb32fa8eed3e951a949a9b2d4aa4d34c9902bc_prof);

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
