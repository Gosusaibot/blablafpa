<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4a0b8aa91706040f47160a6db2cf84dac288fb6a6c6084e0a1bb085547e30a8b extends Twig_Template
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
        $__internal_3322107cdd67b9bb7c0fb11a9700bbdb5f805478bfc43a81f4f4e91d828f0c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3322107cdd67b9bb7c0fb11a9700bbdb5f805478bfc43a81f4f4e91d828f0c6c->enter($__internal_3322107cdd67b9bb7c0fb11a9700bbdb5f805478bfc43a81f4f4e91d828f0c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a952a52a2144753c9c23e8b6f4e84b79ae5b6539983d4b50d216794d17c28ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a952a52a2144753c9c23e8b6f4e84b79ae5b6539983d4b50d216794d17c28ea9->enter($__internal_a952a52a2144753c9c23e8b6f4e84b79ae5b6539983d4b50d216794d17c28ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3322107cdd67b9bb7c0fb11a9700bbdb5f805478bfc43a81f4f4e91d828f0c6c->leave($__internal_3322107cdd67b9bb7c0fb11a9700bbdb5f805478bfc43a81f4f4e91d828f0c6c_prof);

        
        $__internal_a952a52a2144753c9c23e8b6f4e84b79ae5b6539983d4b50d216794d17c28ea9->leave($__internal_a952a52a2144753c9c23e8b6f4e84b79ae5b6539983d4b50d216794d17c28ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
