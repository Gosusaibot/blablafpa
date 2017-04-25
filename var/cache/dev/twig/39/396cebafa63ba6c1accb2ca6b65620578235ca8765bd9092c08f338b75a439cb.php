<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3a0bb407a1b763bf8e545e05602e10803fcb4ad01171fe8c9b4a5b18dfba357e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69b5f97c928d4b8309c7c452a4b24a392b241425feb3b2457e15f10ed334c1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b5f97c928d4b8309c7c452a4b24a392b241425feb3b2457e15f10ed334c1d2->enter($__internal_69b5f97c928d4b8309c7c452a4b24a392b241425feb3b2457e15f10ed334c1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2545df80e7553ba7c411a5ba89ce5043617d6f05dce5e2db24fe9af645b7bc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2545df80e7553ba7c411a5ba89ce5043617d6f05dce5e2db24fe9af645b7bc12->enter($__internal_2545df80e7553ba7c411a5ba89ce5043617d6f05dce5e2db24fe9af645b7bc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_69b5f97c928d4b8309c7c452a4b24a392b241425feb3b2457e15f10ed334c1d2->leave($__internal_69b5f97c928d4b8309c7c452a4b24a392b241425feb3b2457e15f10ed334c1d2_prof);

        
        $__internal_2545df80e7553ba7c411a5ba89ce5043617d6f05dce5e2db24fe9af645b7bc12->leave($__internal_2545df80e7553ba7c411a5ba89ce5043617d6f05dce5e2db24fe9af645b7bc12_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_33d74aa7906fc0ed7ceb7db27a9206d53cf0c2e1e834c752123b23fe6ea667af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d74aa7906fc0ed7ceb7db27a9206d53cf0c2e1e834c752123b23fe6ea667af->enter($__internal_33d74aa7906fc0ed7ceb7db27a9206d53cf0c2e1e834c752123b23fe6ea667af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_918aa4bdab2a130296204ff55b1d4fbc169089df9a53018d10e335e5ac031226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918aa4bdab2a130296204ff55b1d4fbc169089df9a53018d10e335e5ac031226->enter($__internal_918aa4bdab2a130296204ff55b1d4fbc169089df9a53018d10e335e5ac031226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_918aa4bdab2a130296204ff55b1d4fbc169089df9a53018d10e335e5ac031226->leave($__internal_918aa4bdab2a130296204ff55b1d4fbc169089df9a53018d10e335e5ac031226_prof);

        
        $__internal_33d74aa7906fc0ed7ceb7db27a9206d53cf0c2e1e834c752123b23fe6ea667af->leave($__internal_33d74aa7906fc0ed7ceb7db27a9206d53cf0c2e1e834c752123b23fe6ea667af_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_29234220b08c68d6e9f208f6852c557e504723d185c704ce48c00df725843a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29234220b08c68d6e9f208f6852c557e504723d185c704ce48c00df725843a70->enter($__internal_29234220b08c68d6e9f208f6852c557e504723d185c704ce48c00df725843a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ab3bf991d902a0b5e2dcf15e8e3863f31e0e2e7603c0a71c170bebac27e6e881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3bf991d902a0b5e2dcf15e8e3863f31e0e2e7603c0a71c170bebac27e6e881->enter($__internal_ab3bf991d902a0b5e2dcf15e8e3863f31e0e2e7603c0a71c170bebac27e6e881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ab3bf991d902a0b5e2dcf15e8e3863f31e0e2e7603c0a71c170bebac27e6e881->leave($__internal_ab3bf991d902a0b5e2dcf15e8e3863f31e0e2e7603c0a71c170bebac27e6e881_prof);

        
        $__internal_29234220b08c68d6e9f208f6852c557e504723d185c704ce48c00df725843a70->leave($__internal_29234220b08c68d6e9f208f6852c557e504723d185c704ce48c00df725843a70_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7f7e42dbda9f4e11b17ac35595435ca702568134c50fff84c8cc267f0a28969a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7e42dbda9f4e11b17ac35595435ca702568134c50fff84c8cc267f0a28969a->enter($__internal_7f7e42dbda9f4e11b17ac35595435ca702568134c50fff84c8cc267f0a28969a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3c55f53489f003bc48b32fb2262c1dac9bdd8dbf4c7deb783e37e2eddfce2d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c55f53489f003bc48b32fb2262c1dac9bdd8dbf4c7deb783e37e2eddfce2d49->enter($__internal_3c55f53489f003bc48b32fb2262c1dac9bdd8dbf4c7deb783e37e2eddfce2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_3c55f53489f003bc48b32fb2262c1dac9bdd8dbf4c7deb783e37e2eddfce2d49->leave($__internal_3c55f53489f003bc48b32fb2262c1dac9bdd8dbf4c7deb783e37e2eddfce2d49_prof);

        
        $__internal_7f7e42dbda9f4e11b17ac35595435ca702568134c50fff84c8cc267f0a28969a->leave($__internal_7f7e42dbda9f4e11b17ac35595435ca702568134c50fff84c8cc267f0a28969a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c4a358b3bede80e627869e4a329a8229c098413058ff5697d5e5344441c1b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4a358b3bede80e627869e4a329a8229c098413058ff5697d5e5344441c1b11->enter($__internal_5c4a358b3bede80e627869e4a329a8229c098413058ff5697d5e5344441c1b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fb627a7ac859ae9a5bdbbbf15c761fe200f842f6cb923e01e32d4ceae0375248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb627a7ac859ae9a5bdbbbf15c761fe200f842f6cb923e01e32d4ceae0375248->enter($__internal_fb627a7ac859ae9a5bdbbbf15c761fe200f842f6cb923e01e32d4ceae0375248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_fb627a7ac859ae9a5bdbbbf15c761fe200f842f6cb923e01e32d4ceae0375248->leave($__internal_fb627a7ac859ae9a5bdbbbf15c761fe200f842f6cb923e01e32d4ceae0375248_prof);

        
        $__internal_5c4a358b3bede80e627869e4a329a8229c098413058ff5697d5e5344441c1b11->leave($__internal_5c4a358b3bede80e627869e4a329a8229c098413058ff5697d5e5344441c1b11_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a25872d144da321d9aa1f64ea858621c3796aecf2d89c153ddb054a78550ca45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25872d144da321d9aa1f64ea858621c3796aecf2d89c153ddb054a78550ca45->enter($__internal_a25872d144da321d9aa1f64ea858621c3796aecf2d89c153ddb054a78550ca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1ab95b2b2a538628f9b0c785ae2ee7f75fa3ca369f238c27c4959a78e22d60eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab95b2b2a538628f9b0c785ae2ee7f75fa3ca369f238c27c4959a78e22d60eb->enter($__internal_1ab95b2b2a538628f9b0c785ae2ee7f75fa3ca369f238c27c4959a78e22d60eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_1ab95b2b2a538628f9b0c785ae2ee7f75fa3ca369f238c27c4959a78e22d60eb->leave($__internal_1ab95b2b2a538628f9b0c785ae2ee7f75fa3ca369f238c27c4959a78e22d60eb_prof);

        
        $__internal_a25872d144da321d9aa1f64ea858621c3796aecf2d89c153ddb054a78550ca45->leave($__internal_a25872d144da321d9aa1f64ea858621c3796aecf2d89c153ddb054a78550ca45_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cd8b30de515301d86571afc60e1a4c498e3b1db22ce998c48a35a49b71c1daf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8b30de515301d86571afc60e1a4c498e3b1db22ce998c48a35a49b71c1daf4->enter($__internal_cd8b30de515301d86571afc60e1a4c498e3b1db22ce998c48a35a49b71c1daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_02c28ca31fe80e8d41eef6f71883f8333239c8052e16bb81cf1ec3bf8512c315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c28ca31fe80e8d41eef6f71883f8333239c8052e16bb81cf1ec3bf8512c315->enter($__internal_02c28ca31fe80e8d41eef6f71883f8333239c8052e16bb81cf1ec3bf8512c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_02c28ca31fe80e8d41eef6f71883f8333239c8052e16bb81cf1ec3bf8512c315->leave($__internal_02c28ca31fe80e8d41eef6f71883f8333239c8052e16bb81cf1ec3bf8512c315_prof);

        
        $__internal_cd8b30de515301d86571afc60e1a4c498e3b1db22ce998c48a35a49b71c1daf4->leave($__internal_cd8b30de515301d86571afc60e1a4c498e3b1db22ce998c48a35a49b71c1daf4_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a12d8f3d66ab0444b32529866ddc1128a97c0fbd0ac6a2cf436a69e62d2d4556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12d8f3d66ab0444b32529866ddc1128a97c0fbd0ac6a2cf436a69e62d2d4556->enter($__internal_a12d8f3d66ab0444b32529866ddc1128a97c0fbd0ac6a2cf436a69e62d2d4556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_eca8f7b4b2f36c0b670b1810c83b108bb2bbc8ed42043a19b84fac2da42ea7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca8f7b4b2f36c0b670b1810c83b108bb2bbc8ed42043a19b84fac2da42ea7c3->enter($__internal_eca8f7b4b2f36c0b670b1810c83b108bb2bbc8ed42043a19b84fac2da42ea7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eca8f7b4b2f36c0b670b1810c83b108bb2bbc8ed42043a19b84fac2da42ea7c3->leave($__internal_eca8f7b4b2f36c0b670b1810c83b108bb2bbc8ed42043a19b84fac2da42ea7c3_prof);

        
        $__internal_a12d8f3d66ab0444b32529866ddc1128a97c0fbd0ac6a2cf436a69e62d2d4556->leave($__internal_a12d8f3d66ab0444b32529866ddc1128a97c0fbd0ac6a2cf436a69e62d2d4556_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4151c853adea4ed5ba3eda0d6ec9d30ab81a7a6cd14e73d9e66fdaa67a64c4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4151c853adea4ed5ba3eda0d6ec9d30ab81a7a6cd14e73d9e66fdaa67a64c4bb->enter($__internal_4151c853adea4ed5ba3eda0d6ec9d30ab81a7a6cd14e73d9e66fdaa67a64c4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_17d2c5a646e60c63c9c173f3459b635011c102ab4ab496bcda4d776e93949460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d2c5a646e60c63c9c173f3459b635011c102ab4ab496bcda4d776e93949460->enter($__internal_17d2c5a646e60c63c9c173f3459b635011c102ab4ab496bcda4d776e93949460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_17d2c5a646e60c63c9c173f3459b635011c102ab4ab496bcda4d776e93949460->leave($__internal_17d2c5a646e60c63c9c173f3459b635011c102ab4ab496bcda4d776e93949460_prof);

        
        $__internal_4151c853adea4ed5ba3eda0d6ec9d30ab81a7a6cd14e73d9e66fdaa67a64c4bb->leave($__internal_4151c853adea4ed5ba3eda0d6ec9d30ab81a7a6cd14e73d9e66fdaa67a64c4bb_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c603c05b6263dd8b5b27ae5b37dd02f192021fc6332421031219e24d48806cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c603c05b6263dd8b5b27ae5b37dd02f192021fc6332421031219e24d48806cc1->enter($__internal_c603c05b6263dd8b5b27ae5b37dd02f192021fc6332421031219e24d48806cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_86e328cc0e694347f32c718f64b499369b3498a7a99346c3ff34082c4db3b9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e328cc0e694347f32c718f64b499369b3498a7a99346c3ff34082c4db3b9c1->enter($__internal_86e328cc0e694347f32c718f64b499369b3498a7a99346c3ff34082c4db3b9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_86e328cc0e694347f32c718f64b499369b3498a7a99346c3ff34082c4db3b9c1->leave($__internal_86e328cc0e694347f32c718f64b499369b3498a7a99346c3ff34082c4db3b9c1_prof);

        
        $__internal_c603c05b6263dd8b5b27ae5b37dd02f192021fc6332421031219e24d48806cc1->leave($__internal_c603c05b6263dd8b5b27ae5b37dd02f192021fc6332421031219e24d48806cc1_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0a5d8a48e5f11f5c3187616589447c65535751e44568d835b153f9b3e15750f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5d8a48e5f11f5c3187616589447c65535751e44568d835b153f9b3e15750f8->enter($__internal_0a5d8a48e5f11f5c3187616589447c65535751e44568d835b153f9b3e15750f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f27196d4d9ca10d1a3e417b754f9000301c1cae56a7f174816f7a35ad22d5a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27196d4d9ca10d1a3e417b754f9000301c1cae56a7f174816f7a35ad22d5a7f->enter($__internal_f27196d4d9ca10d1a3e417b754f9000301c1cae56a7f174816f7a35ad22d5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_f27196d4d9ca10d1a3e417b754f9000301c1cae56a7f174816f7a35ad22d5a7f->leave($__internal_f27196d4d9ca10d1a3e417b754f9000301c1cae56a7f174816f7a35ad22d5a7f_prof);

        
        $__internal_0a5d8a48e5f11f5c3187616589447c65535751e44568d835b153f9b3e15750f8->leave($__internal_0a5d8a48e5f11f5c3187616589447c65535751e44568d835b153f9b3e15750f8_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
