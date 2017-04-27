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
        $__internal_2d6affe52c87a5273aaad332934b7c0bece61ba83a460db90971aa34022a19c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6affe52c87a5273aaad332934b7c0bece61ba83a460db90971aa34022a19c6->enter($__internal_2d6affe52c87a5273aaad332934b7c0bece61ba83a460db90971aa34022a19c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_66458b1bcbd807584d6f325ef6beda480a0c65f8e8bcd3afc03ea42b4853d57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66458b1bcbd807584d6f325ef6beda480a0c65f8e8bcd3afc03ea42b4853d57a->enter($__internal_66458b1bcbd807584d6f325ef6beda480a0c65f8e8bcd3afc03ea42b4853d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2d6affe52c87a5273aaad332934b7c0bece61ba83a460db90971aa34022a19c6->leave($__internal_2d6affe52c87a5273aaad332934b7c0bece61ba83a460db90971aa34022a19c6_prof);

        
        $__internal_66458b1bcbd807584d6f325ef6beda480a0c65f8e8bcd3afc03ea42b4853d57a->leave($__internal_66458b1bcbd807584d6f325ef6beda480a0c65f8e8bcd3afc03ea42b4853d57a_prof);

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
