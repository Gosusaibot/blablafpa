<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2a75b332009d6a1614755390a1777bd8ddd30a64ea73007b79a352b861be9d47 extends Twig_Template
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
        $__internal_26a785ddfb552597565ba7488eac91fd70f482f5602631fd454969af68020355 = $this->env->getExtension("native_profiler");
        $__internal_26a785ddfb552597565ba7488eac91fd70f482f5602631fd454969af68020355->enter($__internal_26a785ddfb552597565ba7488eac91fd70f482f5602631fd454969af68020355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_26a785ddfb552597565ba7488eac91fd70f482f5602631fd454969af68020355->leave($__internal_26a785ddfb552597565ba7488eac91fd70f482f5602631fd454969af68020355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
