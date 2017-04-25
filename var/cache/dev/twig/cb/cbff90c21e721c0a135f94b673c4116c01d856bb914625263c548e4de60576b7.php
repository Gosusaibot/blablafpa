<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7026cf91d21131a4825f09ddaf8bfb206c059eb8a193abbf2aa2b8f4ae8a26ef extends Twig_Template
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
        $__internal_b03d0606cb56caac293e2f043c66e6d796351d4a7361ad22a116b7d7901791a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03d0606cb56caac293e2f043c66e6d796351d4a7361ad22a116b7d7901791a9->enter($__internal_b03d0606cb56caac293e2f043c66e6d796351d4a7361ad22a116b7d7901791a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_51069f94b0481566eaac7551b1a23e67c0989268f92c5d62706a39fd3cb543fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51069f94b0481566eaac7551b1a23e67c0989268f92c5d62706a39fd3cb543fb->enter($__internal_51069f94b0481566eaac7551b1a23e67c0989268f92c5d62706a39fd3cb543fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b03d0606cb56caac293e2f043c66e6d796351d4a7361ad22a116b7d7901791a9->leave($__internal_b03d0606cb56caac293e2f043c66e6d796351d4a7361ad22a116b7d7901791a9_prof);

        
        $__internal_51069f94b0481566eaac7551b1a23e67c0989268f92c5d62706a39fd3cb543fb->leave($__internal_51069f94b0481566eaac7551b1a23e67c0989268f92c5d62706a39fd3cb543fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
