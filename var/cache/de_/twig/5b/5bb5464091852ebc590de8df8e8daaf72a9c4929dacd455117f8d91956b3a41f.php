<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c3e05b739a421414365a701b17ca0223c09cd70dafbf6b14582dcbaaa86dccda extends Twig_Template
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
        $__internal_10fc7f03fa523e471e17786cc780d01cd87da67b9be16b110ee05376aa629fcb = $this->env->getExtension("native_profiler");
        $__internal_10fc7f03fa523e471e17786cc780d01cd87da67b9be16b110ee05376aa629fcb->enter($__internal_10fc7f03fa523e471e17786cc780d01cd87da67b9be16b110ee05376aa629fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_10fc7f03fa523e471e17786cc780d01cd87da67b9be16b110ee05376aa629fcb->leave($__internal_10fc7f03fa523e471e17786cc780d01cd87da67b9be16b110ee05376aa629fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
