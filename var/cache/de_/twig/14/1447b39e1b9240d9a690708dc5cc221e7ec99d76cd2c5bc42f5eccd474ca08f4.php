<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4627433bd8f2b1aa22f42aaabdb94a6a64aad5302494cefd638eafec266e498e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f43501321931180a04a2041bdbe7f3cf89af1ab262c4a5dea791d09d44f7bed = $this->env->getExtension("native_profiler");
        $__internal_0f43501321931180a04a2041bdbe7f3cf89af1ab262c4a5dea791d09d44f7bed->enter($__internal_0f43501321931180a04a2041bdbe7f3cf89af1ab262c4a5dea791d09d44f7bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f43501321931180a04a2041bdbe7f3cf89af1ab262c4a5dea791d09d44f7bed->leave($__internal_0f43501321931180a04a2041bdbe7f3cf89af1ab262c4a5dea791d09d44f7bed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b3a0d3ae230d4c990104408e68ff2d1b9c3b033e9dbe0f6794caf68ea1c057d = $this->env->getExtension("native_profiler");
        $__internal_4b3a0d3ae230d4c990104408e68ff2d1b9c3b033e9dbe0f6794caf68ea1c057d->enter($__internal_4b3a0d3ae230d4c990104408e68ff2d1b9c3b033e9dbe0f6794caf68ea1c057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4b3a0d3ae230d4c990104408e68ff2d1b9c3b033e9dbe0f6794caf68ea1c057d->leave($__internal_4b3a0d3ae230d4c990104408e68ff2d1b9c3b033e9dbe0f6794caf68ea1c057d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
