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
        $__internal_155eb7ad9e81107fc02222fa404cb74d9a2029adf0d912ea83999fdae0252a4a = $this->env->getExtension("native_profiler");
        $__internal_155eb7ad9e81107fc02222fa404cb74d9a2029adf0d912ea83999fdae0252a4a->enter($__internal_155eb7ad9e81107fc02222fa404cb74d9a2029adf0d912ea83999fdae0252a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_155eb7ad9e81107fc02222fa404cb74d9a2029adf0d912ea83999fdae0252a4a->leave($__internal_155eb7ad9e81107fc02222fa404cb74d9a2029adf0d912ea83999fdae0252a4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac7d82f6e058e7a6ae53e436645f8d04271dd9fe0cc251455e8ceb42db98b8a1 = $this->env->getExtension("native_profiler");
        $__internal_ac7d82f6e058e7a6ae53e436645f8d04271dd9fe0cc251455e8ceb42db98b8a1->enter($__internal_ac7d82f6e058e7a6ae53e436645f8d04271dd9fe0cc251455e8ceb42db98b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac7d82f6e058e7a6ae53e436645f8d04271dd9fe0cc251455e8ceb42db98b8a1->leave($__internal_ac7d82f6e058e7a6ae53e436645f8d04271dd9fe0cc251455e8ceb42db98b8a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_001c0a35956ef4064e06d3ee899c50a08b601c2228dfb4860f9bf319fe16d947 = $this->env->getExtension("native_profiler");
        $__internal_001c0a35956ef4064e06d3ee899c50a08b601c2228dfb4860f9bf319fe16d947->enter($__internal_001c0a35956ef4064e06d3ee899c50a08b601c2228dfb4860f9bf319fe16d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_001c0a35956ef4064e06d3ee899c50a08b601c2228dfb4860f9bf319fe16d947->leave($__internal_001c0a35956ef4064e06d3ee899c50a08b601c2228dfb4860f9bf319fe16d947_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09d03a4b2417e09d66fa563a53ab0d6b80d1aea8e52dd7e580856b0a2908dfc6 = $this->env->getExtension("native_profiler");
        $__internal_09d03a4b2417e09d66fa563a53ab0d6b80d1aea8e52dd7e580856b0a2908dfc6->enter($__internal_09d03a4b2417e09d66fa563a53ab0d6b80d1aea8e52dd7e580856b0a2908dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09d03a4b2417e09d66fa563a53ab0d6b80d1aea8e52dd7e580856b0a2908dfc6->leave($__internal_09d03a4b2417e09d66fa563a53ab0d6b80d1aea8e52dd7e580856b0a2908dfc6_prof);

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
