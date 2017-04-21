<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_48e0134dd6b16d69ec2a521f8e5aa0170e54edd550c178f7fd15541f10049788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20d613c4cea83b9dd47404c793386ceea19f841e4239bfa12d2e8b17f1b01a0d = $this->env->getExtension("native_profiler");
        $__internal_20d613c4cea83b9dd47404c793386ceea19f841e4239bfa12d2e8b17f1b01a0d->enter($__internal_20d613c4cea83b9dd47404c793386ceea19f841e4239bfa12d2e8b17f1b01a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d613c4cea83b9dd47404c793386ceea19f841e4239bfa12d2e8b17f1b01a0d->leave($__internal_20d613c4cea83b9dd47404c793386ceea19f841e4239bfa12d2e8b17f1b01a0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b888f34bd35fd9f987dd827ae649fc9f3dc5c39e2728d32b7ab04e731774265 = $this->env->getExtension("native_profiler");
        $__internal_5b888f34bd35fd9f987dd827ae649fc9f3dc5c39e2728d32b7ab04e731774265->enter($__internal_5b888f34bd35fd9f987dd827ae649fc9f3dc5c39e2728d32b7ab04e731774265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b888f34bd35fd9f987dd827ae649fc9f3dc5c39e2728d32b7ab04e731774265->leave($__internal_5b888f34bd35fd9f987dd827ae649fc9f3dc5c39e2728d32b7ab04e731774265_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_648fff9b08e7dd1c9fa6bf76dfd1b12afccf19240999f559c3318729d8f16079 = $this->env->getExtension("native_profiler");
        $__internal_648fff9b08e7dd1c9fa6bf76dfd1b12afccf19240999f559c3318729d8f16079->enter($__internal_648fff9b08e7dd1c9fa6bf76dfd1b12afccf19240999f559c3318729d8f16079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_648fff9b08e7dd1c9fa6bf76dfd1b12afccf19240999f559c3318729d8f16079->leave($__internal_648fff9b08e7dd1c9fa6bf76dfd1b12afccf19240999f559c3318729d8f16079_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
