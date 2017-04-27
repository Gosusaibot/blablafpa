<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_847265c2e4469ec2646b4fbf2954383a891411a2e3cc9f1a6a8eceef9e0d40b7 extends Twig_Template
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
        $__internal_6d9ff5280f86d169d7d64ef58b29c7501136931c438d4768b2f25d004af51c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9ff5280f86d169d7d64ef58b29c7501136931c438d4768b2f25d004af51c4e->enter($__internal_6d9ff5280f86d169d7d64ef58b29c7501136931c438d4768b2f25d004af51c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c5ecabcbf6ed2148601a3aa0d3770363b66d6cdf673decba5dd2e912b5d3368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ecabcbf6ed2148601a3aa0d3770363b66d6cdf673decba5dd2e912b5d3368b->enter($__internal_c5ecabcbf6ed2148601a3aa0d3770363b66d6cdf673decba5dd2e912b5d3368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6d9ff5280f86d169d7d64ef58b29c7501136931c438d4768b2f25d004af51c4e->leave($__internal_6d9ff5280f86d169d7d64ef58b29c7501136931c438d4768b2f25d004af51c4e_prof);

        
        $__internal_c5ecabcbf6ed2148601a3aa0d3770363b66d6cdf673decba5dd2e912b5d3368b->leave($__internal_c5ecabcbf6ed2148601a3aa0d3770363b66d6cdf673decba5dd2e912b5d3368b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
