<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2002aed15158fec60f4f1f9e6184fd7de2c434c4fab6b7113dc1b993c2b113ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_835e2ef59bc18dbe9c319b20e62811a8c129350c89f46a9d8b01b7d148234fb6 = $this->env->getExtension("native_profiler");
        $__internal_835e2ef59bc18dbe9c319b20e62811a8c129350c89f46a9d8b01b7d148234fb6->enter($__internal_835e2ef59bc18dbe9c319b20e62811a8c129350c89f46a9d8b01b7d148234fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835e2ef59bc18dbe9c319b20e62811a8c129350c89f46a9d8b01b7d148234fb6->leave($__internal_835e2ef59bc18dbe9c319b20e62811a8c129350c89f46a9d8b01b7d148234fb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9c214bbd7e5ae60e9c0d61c9a2f39f52f55cbf6e440e54cb20aa6a82d65c343 = $this->env->getExtension("native_profiler");
        $__internal_c9c214bbd7e5ae60e9c0d61c9a2f39f52f55cbf6e440e54cb20aa6a82d65c343->enter($__internal_c9c214bbd7e5ae60e9c0d61c9a2f39f52f55cbf6e440e54cb20aa6a82d65c343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9c214bbd7e5ae60e9c0d61c9a2f39f52f55cbf6e440e54cb20aa6a82d65c343->leave($__internal_c9c214bbd7e5ae60e9c0d61c9a2f39f52f55cbf6e440e54cb20aa6a82d65c343_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6c7f7cbbc32be3cd7cb2ce16a535d483d204878eeef609672976ba60e2349b1 = $this->env->getExtension("native_profiler");
        $__internal_c6c7f7cbbc32be3cd7cb2ce16a535d483d204878eeef609672976ba60e2349b1->enter($__internal_c6c7f7cbbc32be3cd7cb2ce16a535d483d204878eeef609672976ba60e2349b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6c7f7cbbc32be3cd7cb2ce16a535d483d204878eeef609672976ba60e2349b1->leave($__internal_c6c7f7cbbc32be3cd7cb2ce16a535d483d204878eeef609672976ba60e2349b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
