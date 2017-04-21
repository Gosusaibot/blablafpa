<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8cceaad95214ac9a7d54ad85c7034344b55952f6f17dcce5ccfa597145601133 extends Twig_Template
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
        $__internal_6aaf0f2691e4d174a440da1a9d9e966009f83673b3fb198916bdb4c2fc99fcc4 = $this->env->getExtension("native_profiler");
        $__internal_6aaf0f2691e4d174a440da1a9d9e966009f83673b3fb198916bdb4c2fc99fcc4->enter($__internal_6aaf0f2691e4d174a440da1a9d9e966009f83673b3fb198916bdb4c2fc99fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6aaf0f2691e4d174a440da1a9d9e966009f83673b3fb198916bdb4c2fc99fcc4->leave($__internal_6aaf0f2691e4d174a440da1a9d9e966009f83673b3fb198916bdb4c2fc99fcc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
