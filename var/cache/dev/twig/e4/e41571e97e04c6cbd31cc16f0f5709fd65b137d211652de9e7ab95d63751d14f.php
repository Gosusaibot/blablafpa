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
        $__internal_c9ba334384d96b6c416526f41d635bb36e2de907d245de1783b2279a0132ff64 = $this->env->getExtension("native_profiler");
        $__internal_c9ba334384d96b6c416526f41d635bb36e2de907d245de1783b2279a0132ff64->enter($__internal_c9ba334384d96b6c416526f41d635bb36e2de907d245de1783b2279a0132ff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ba334384d96b6c416526f41d635bb36e2de907d245de1783b2279a0132ff64->leave($__internal_c9ba334384d96b6c416526f41d635bb36e2de907d245de1783b2279a0132ff64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d418d7cad6467c105615811413a3599ad1e2804a87ea29f0739d09a1223bd1 = $this->env->getExtension("native_profiler");
        $__internal_a7d418d7cad6467c105615811413a3599ad1e2804a87ea29f0739d09a1223bd1->enter($__internal_a7d418d7cad6467c105615811413a3599ad1e2804a87ea29f0739d09a1223bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7d418d7cad6467c105615811413a3599ad1e2804a87ea29f0739d09a1223bd1->leave($__internal_a7d418d7cad6467c105615811413a3599ad1e2804a87ea29f0739d09a1223bd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82549e029799993d0a31ffadd2ff40bc7724f32e78aff00d5e0feb151d3c58a2 = $this->env->getExtension("native_profiler");
        $__internal_82549e029799993d0a31ffadd2ff40bc7724f32e78aff00d5e0feb151d3c58a2->enter($__internal_82549e029799993d0a31ffadd2ff40bc7724f32e78aff00d5e0feb151d3c58a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82549e029799993d0a31ffadd2ff40bc7724f32e78aff00d5e0feb151d3c58a2->leave($__internal_82549e029799993d0a31ffadd2ff40bc7724f32e78aff00d5e0feb151d3c58a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d5880cade6b657149bd98ccecd056e13ec7cae4415f1ad52e4e15bb82ab35c2 = $this->env->getExtension("native_profiler");
        $__internal_3d5880cade6b657149bd98ccecd056e13ec7cae4415f1ad52e4e15bb82ab35c2->enter($__internal_3d5880cade6b657149bd98ccecd056e13ec7cae4415f1ad52e4e15bb82ab35c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d5880cade6b657149bd98ccecd056e13ec7cae4415f1ad52e4e15bb82ab35c2->leave($__internal_3d5880cade6b657149bd98ccecd056e13ec7cae4415f1ad52e4e15bb82ab35c2_prof);

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
