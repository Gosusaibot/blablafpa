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
        $__internal_e912364a3178d5a01fc39a4ce28200f59888aeb740e3e31e96d236edba03c94f = $this->env->getExtension("native_profiler");
        $__internal_e912364a3178d5a01fc39a4ce28200f59888aeb740e3e31e96d236edba03c94f->enter($__internal_e912364a3178d5a01fc39a4ce28200f59888aeb740e3e31e96d236edba03c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e912364a3178d5a01fc39a4ce28200f59888aeb740e3e31e96d236edba03c94f->leave($__internal_e912364a3178d5a01fc39a4ce28200f59888aeb740e3e31e96d236edba03c94f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_434a01e9129affad2fe64cf023fefd3b69608bde1b038c23fbacf5a45717bbb7 = $this->env->getExtension("native_profiler");
        $__internal_434a01e9129affad2fe64cf023fefd3b69608bde1b038c23fbacf5a45717bbb7->enter($__internal_434a01e9129affad2fe64cf023fefd3b69608bde1b038c23fbacf5a45717bbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_434a01e9129affad2fe64cf023fefd3b69608bde1b038c23fbacf5a45717bbb7->leave($__internal_434a01e9129affad2fe64cf023fefd3b69608bde1b038c23fbacf5a45717bbb7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0465a493bbbfc1a33b2ff5b3e2a68e547e00fbc8ad833c8cefd9ee3b78a601c = $this->env->getExtension("native_profiler");
        $__internal_c0465a493bbbfc1a33b2ff5b3e2a68e547e00fbc8ad833c8cefd9ee3b78a601c->enter($__internal_c0465a493bbbfc1a33b2ff5b3e2a68e547e00fbc8ad833c8cefd9ee3b78a601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0465a493bbbfc1a33b2ff5b3e2a68e547e00fbc8ad833c8cefd9ee3b78a601c->leave($__internal_c0465a493bbbfc1a33b2ff5b3e2a68e547e00fbc8ad833c8cefd9ee3b78a601c_prof);

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
