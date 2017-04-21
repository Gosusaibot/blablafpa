<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e6873af0fc15cea299192367279533afb26b080eb1fe54dbb42426d340362424 extends Twig_Template
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
        $__internal_511bf40c441886c4a2e8be5b9ab2ed7dd2ce35f6a3ca8a68fb92b8b83b937697 = $this->env->getExtension("native_profiler");
        $__internal_511bf40c441886c4a2e8be5b9ab2ed7dd2ce35f6a3ca8a68fb92b8b83b937697->enter($__internal_511bf40c441886c4a2e8be5b9ab2ed7dd2ce35f6a3ca8a68fb92b8b83b937697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_511bf40c441886c4a2e8be5b9ab2ed7dd2ce35f6a3ca8a68fb92b8b83b937697->leave($__internal_511bf40c441886c4a2e8be5b9ab2ed7dd2ce35f6a3ca8a68fb92b8b83b937697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
