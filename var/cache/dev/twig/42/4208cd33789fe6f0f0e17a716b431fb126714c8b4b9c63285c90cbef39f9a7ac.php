<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9ecdf95ce1a079eeb4e6c4d246c6ba7fc9acb707b744f3c41056001e82857252 extends Twig_Template
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
        $__internal_7c7ad187ecc92d05e12c7e7675685bdc3cc219f19cba5a9326fa9718e97e583b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7ad187ecc92d05e12c7e7675685bdc3cc219f19cba5a9326fa9718e97e583b->enter($__internal_7c7ad187ecc92d05e12c7e7675685bdc3cc219f19cba5a9326fa9718e97e583b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c41126f404f7f7156824318e17479690390a81810f4e8e16882082beae4f5670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41126f404f7f7156824318e17479690390a81810f4e8e16882082beae4f5670->enter($__internal_c41126f404f7f7156824318e17479690390a81810f4e8e16882082beae4f5670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7c7ad187ecc92d05e12c7e7675685bdc3cc219f19cba5a9326fa9718e97e583b->leave($__internal_7c7ad187ecc92d05e12c7e7675685bdc3cc219f19cba5a9326fa9718e97e583b_prof);

        
        $__internal_c41126f404f7f7156824318e17479690390a81810f4e8e16882082beae4f5670->leave($__internal_c41126f404f7f7156824318e17479690390a81810f4e8e16882082beae4f5670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
