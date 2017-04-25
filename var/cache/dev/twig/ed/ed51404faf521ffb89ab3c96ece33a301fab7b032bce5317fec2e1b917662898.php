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
        $__internal_c31e90dea9dc19dcf79288ac8f780f62bcda8500ae2f06c82854a68bdbef1f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31e90dea9dc19dcf79288ac8f780f62bcda8500ae2f06c82854a68bdbef1f2d->enter($__internal_c31e90dea9dc19dcf79288ac8f780f62bcda8500ae2f06c82854a68bdbef1f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_555aea22949bb12bf61d362467e22457616e673e3f663afcadb869f14a60cbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555aea22949bb12bf61d362467e22457616e673e3f663afcadb869f14a60cbef->enter($__internal_555aea22949bb12bf61d362467e22457616e673e3f663afcadb869f14a60cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c31e90dea9dc19dcf79288ac8f780f62bcda8500ae2f06c82854a68bdbef1f2d->leave($__internal_c31e90dea9dc19dcf79288ac8f780f62bcda8500ae2f06c82854a68bdbef1f2d_prof);

        
        $__internal_555aea22949bb12bf61d362467e22457616e673e3f663afcadb869f14a60cbef->leave($__internal_555aea22949bb12bf61d362467e22457616e673e3f663afcadb869f14a60cbef_prof);

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
