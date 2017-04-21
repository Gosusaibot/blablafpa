<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7ba691ffd7df1487b7a76e84e4f2916872d4f337c84dbe118fe8b7668f73757d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_76bc2aabd230a68e6edc2848127e1c202387f9f1343607a5deb89e082b5a5ba1 = $this->env->getExtension("native_profiler");
        $__internal_76bc2aabd230a68e6edc2848127e1c202387f9f1343607a5deb89e082b5a5ba1->enter($__internal_76bc2aabd230a68e6edc2848127e1c202387f9f1343607a5deb89e082b5a5ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76bc2aabd230a68e6edc2848127e1c202387f9f1343607a5deb89e082b5a5ba1->leave($__internal_76bc2aabd230a68e6edc2848127e1c202387f9f1343607a5deb89e082b5a5ba1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bb66bd82768f9feb9a07cbe7ccc91e80821ad7bb43c9799603be27ab89f24fc = $this->env->getExtension("native_profiler");
        $__internal_5bb66bd82768f9feb9a07cbe7ccc91e80821ad7bb43c9799603be27ab89f24fc->enter($__internal_5bb66bd82768f9feb9a07cbe7ccc91e80821ad7bb43c9799603be27ab89f24fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5bb66bd82768f9feb9a07cbe7ccc91e80821ad7bb43c9799603be27ab89f24fc->leave($__internal_5bb66bd82768f9feb9a07cbe7ccc91e80821ad7bb43c9799603be27ab89f24fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
