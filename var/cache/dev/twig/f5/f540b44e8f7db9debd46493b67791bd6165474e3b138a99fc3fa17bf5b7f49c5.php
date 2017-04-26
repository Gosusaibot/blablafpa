<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34b2535be08e650ac2323c393f2c28095572192e89edda26614aabce7f4a5ee9 extends Twig_Template
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
        $__internal_dc3fe2e34414168abcb301386cb8c98094d879f3722f9aa1df6c04776bfb36cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3fe2e34414168abcb301386cb8c98094d879f3722f9aa1df6c04776bfb36cf->enter($__internal_dc3fe2e34414168abcb301386cb8c98094d879f3722f9aa1df6c04776bfb36cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_14707f669996a81c141f6e3ead0383ea197141b998faf25b1beae7b04448cf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14707f669996a81c141f6e3ead0383ea197141b998faf25b1beae7b04448cf2f->enter($__internal_14707f669996a81c141f6e3ead0383ea197141b998faf25b1beae7b04448cf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_dc3fe2e34414168abcb301386cb8c98094d879f3722f9aa1df6c04776bfb36cf->leave($__internal_dc3fe2e34414168abcb301386cb8c98094d879f3722f9aa1df6c04776bfb36cf_prof);

        
        $__internal_14707f669996a81c141f6e3ead0383ea197141b998faf25b1beae7b04448cf2f->leave($__internal_14707f669996a81c141f6e3ead0383ea197141b998faf25b1beae7b04448cf2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
