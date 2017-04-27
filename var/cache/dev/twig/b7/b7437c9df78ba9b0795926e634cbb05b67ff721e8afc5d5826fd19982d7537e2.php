<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a6a0596fb1f894e22d918ee34399b6e97426ac4fd54dd52ca365b9231817ec72 extends Twig_Template
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
        $__internal_e8cf38367468cb2275605288d2408a8053a8acffc5500c14bdc44d59abbd97b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cf38367468cb2275605288d2408a8053a8acffc5500c14bdc44d59abbd97b6->enter($__internal_e8cf38367468cb2275605288d2408a8053a8acffc5500c14bdc44d59abbd97b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7426fc670ee4e41ad5007471a0c13d54b3996f4355e8f07768986f611a41911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7426fc670ee4e41ad5007471a0c13d54b3996f4355e8f07768986f611a41911c->enter($__internal_7426fc670ee4e41ad5007471a0c13d54b3996f4355e8f07768986f611a41911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e8cf38367468cb2275605288d2408a8053a8acffc5500c14bdc44d59abbd97b6->leave($__internal_e8cf38367468cb2275605288d2408a8053a8acffc5500c14bdc44d59abbd97b6_prof);

        
        $__internal_7426fc670ee4e41ad5007471a0c13d54b3996f4355e8f07768986f611a41911c->leave($__internal_7426fc670ee4e41ad5007471a0c13d54b3996f4355e8f07768986f611a41911c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
