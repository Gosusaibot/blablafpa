<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_776d629ab72d8c1a6a4c24fca16feb178216d8d82b4a082af39031f5a818c6f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52be0a44abeadb7985f07b415f4823f3423f05e97362238654c3504261bd2b5 = $this->env->getExtension("native_profiler");
        $__internal_b52be0a44abeadb7985f07b415f4823f3423f05e97362238654c3504261bd2b5->enter($__internal_b52be0a44abeadb7985f07b415f4823f3423f05e97362238654c3504261bd2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52be0a44abeadb7985f07b415f4823f3423f05e97362238654c3504261bd2b5->leave($__internal_b52be0a44abeadb7985f07b415f4823f3423f05e97362238654c3504261bd2b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0bf2cf3852e05330bc1f22ea312a59e5c2f81210cb7eb65dfc227ac3b3218dc = $this->env->getExtension("native_profiler");
        $__internal_d0bf2cf3852e05330bc1f22ea312a59e5c2f81210cb7eb65dfc227ac3b3218dc->enter($__internal_d0bf2cf3852e05330bc1f22ea312a59e5c2f81210cb7eb65dfc227ac3b3218dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0bf2cf3852e05330bc1f22ea312a59e5c2f81210cb7eb65dfc227ac3b3218dc->leave($__internal_d0bf2cf3852e05330bc1f22ea312a59e5c2f81210cb7eb65dfc227ac3b3218dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_453ff0bcf9e4eb939b48a3c9efcac8171fa02a9531669337d3f3ada658be0983 = $this->env->getExtension("native_profiler");
        $__internal_453ff0bcf9e4eb939b48a3c9efcac8171fa02a9531669337d3f3ada658be0983->enter($__internal_453ff0bcf9e4eb939b48a3c9efcac8171fa02a9531669337d3f3ada658be0983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_453ff0bcf9e4eb939b48a3c9efcac8171fa02a9531669337d3f3ada658be0983->leave($__internal_453ff0bcf9e4eb939b48a3c9efcac8171fa02a9531669337d3f3ada658be0983_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4a4f827b8ce7e1c13280f20f50576ef11ecc70c1903eb3a1b990632dcfcd96b = $this->env->getExtension("native_profiler");
        $__internal_e4a4f827b8ce7e1c13280f20f50576ef11ecc70c1903eb3a1b990632dcfcd96b->enter($__internal_e4a4f827b8ce7e1c13280f20f50576ef11ecc70c1903eb3a1b990632dcfcd96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4a4f827b8ce7e1c13280f20f50576ef11ecc70c1903eb3a1b990632dcfcd96b->leave($__internal_e4a4f827b8ce7e1c13280f20f50576ef11ecc70c1903eb3a1b990632dcfcd96b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
