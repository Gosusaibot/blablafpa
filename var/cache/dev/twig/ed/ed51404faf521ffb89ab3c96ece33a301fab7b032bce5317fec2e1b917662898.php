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
        $__internal_b885167660d925bbec78c7d678c4e762739fe44226bd793ddbd47b9d58ef7985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b885167660d925bbec78c7d678c4e762739fe44226bd793ddbd47b9d58ef7985->enter($__internal_b885167660d925bbec78c7d678c4e762739fe44226bd793ddbd47b9d58ef7985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8ffba0adf72e987b0b62e56f896a55f5e4ffb5085bf5c5e4bc56c76aa08d341d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffba0adf72e987b0b62e56f896a55f5e4ffb5085bf5c5e4bc56c76aa08d341d->enter($__internal_8ffba0adf72e987b0b62e56f896a55f5e4ffb5085bf5c5e4bc56c76aa08d341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b885167660d925bbec78c7d678c4e762739fe44226bd793ddbd47b9d58ef7985->leave($__internal_b885167660d925bbec78c7d678c4e762739fe44226bd793ddbd47b9d58ef7985_prof);

        
        $__internal_8ffba0adf72e987b0b62e56f896a55f5e4ffb5085bf5c5e4bc56c76aa08d341d->leave($__internal_8ffba0adf72e987b0b62e56f896a55f5e4ffb5085bf5c5e4bc56c76aa08d341d_prof);

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
