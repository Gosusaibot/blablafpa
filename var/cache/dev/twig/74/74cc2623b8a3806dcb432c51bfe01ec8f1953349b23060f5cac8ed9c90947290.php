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
        $__internal_9a849c2bd051027fc4ade9ae932e5c2e5f4d74775de5a29e65a716b8a1c13f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a849c2bd051027fc4ade9ae932e5c2e5f4d74775de5a29e65a716b8a1c13f23->enter($__internal_9a849c2bd051027fc4ade9ae932e5c2e5f4d74775de5a29e65a716b8a1c13f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_31747e3856410d45be13e95199a56871df2072b1bd0f57e95ce37bc62efe6b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31747e3856410d45be13e95199a56871df2072b1bd0f57e95ce37bc62efe6b5e->enter($__internal_31747e3856410d45be13e95199a56871df2072b1bd0f57e95ce37bc62efe6b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9a849c2bd051027fc4ade9ae932e5c2e5f4d74775de5a29e65a716b8a1c13f23->leave($__internal_9a849c2bd051027fc4ade9ae932e5c2e5f4d74775de5a29e65a716b8a1c13f23_prof);

        
        $__internal_31747e3856410d45be13e95199a56871df2072b1bd0f57e95ce37bc62efe6b5e->leave($__internal_31747e3856410d45be13e95199a56871df2072b1bd0f57e95ce37bc62efe6b5e_prof);

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
