<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ca87fb9063f770b9a2ca5c1fa5f61eecbdb545da000a51dc99812ceeb9ec3b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a37a3516db80ab3b365f4a0ba633429f25d76f39c4da98e31107c9f49590d782 = $this->env->getExtension("native_profiler");
        $__internal_a37a3516db80ab3b365f4a0ba633429f25d76f39c4da98e31107c9f49590d782->enter($__internal_a37a3516db80ab3b365f4a0ba633429f25d76f39c4da98e31107c9f49590d782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37a3516db80ab3b365f4a0ba633429f25d76f39c4da98e31107c9f49590d782->leave($__internal_a37a3516db80ab3b365f4a0ba633429f25d76f39c4da98e31107c9f49590d782_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d70c377bd71b7fb5dc2e0c7abe5e8b93533b8d8a329c625e01981340c755fcc = $this->env->getExtension("native_profiler");
        $__internal_9d70c377bd71b7fb5dc2e0c7abe5e8b93533b8d8a329c625e01981340c755fcc->enter($__internal_9d70c377bd71b7fb5dc2e0c7abe5e8b93533b8d8a329c625e01981340c755fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d70c377bd71b7fb5dc2e0c7abe5e8b93533b8d8a329c625e01981340c755fcc->leave($__internal_9d70c377bd71b7fb5dc2e0c7abe5e8b93533b8d8a329c625e01981340c755fcc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3094646b5204fee2d935d259b3be63f38ba0b00fac618a0bdb2153e100d9baa = $this->env->getExtension("native_profiler");
        $__internal_d3094646b5204fee2d935d259b3be63f38ba0b00fac618a0bdb2153e100d9baa->enter($__internal_d3094646b5204fee2d935d259b3be63f38ba0b00fac618a0bdb2153e100d9baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3094646b5204fee2d935d259b3be63f38ba0b00fac618a0bdb2153e100d9baa->leave($__internal_d3094646b5204fee2d935d259b3be63f38ba0b00fac618a0bdb2153e100d9baa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58c757eea120b73a062ed6487d8d5601d9abb68e6754d9d5f407c4dbaa7b60e7 = $this->env->getExtension("native_profiler");
        $__internal_58c757eea120b73a062ed6487d8d5601d9abb68e6754d9d5f407c4dbaa7b60e7->enter($__internal_58c757eea120b73a062ed6487d8d5601d9abb68e6754d9d5f407c4dbaa7b60e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58c757eea120b73a062ed6487d8d5601d9abb68e6754d9d5f407c4dbaa7b60e7->leave($__internal_58c757eea120b73a062ed6487d8d5601d9abb68e6754d9d5f407c4dbaa7b60e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
