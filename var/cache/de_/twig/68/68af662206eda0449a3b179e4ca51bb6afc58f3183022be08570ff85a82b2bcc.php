<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ff7fd176ec598d8370697aaea25cfb3f1edcccccd9f8b1085d126ca6638b015c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c38d5b69e781116985146a8fa8265245f21011e926d74554864a1e9ea056b212 = $this->env->getExtension("native_profiler");
        $__internal_c38d5b69e781116985146a8fa8265245f21011e926d74554864a1e9ea056b212->enter($__internal_c38d5b69e781116985146a8fa8265245f21011e926d74554864a1e9ea056b212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38d5b69e781116985146a8fa8265245f21011e926d74554864a1e9ea056b212->leave($__internal_c38d5b69e781116985146a8fa8265245f21011e926d74554864a1e9ea056b212_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff74fd2c23705db3e79c9d726a0004d639a28c13872e966545dcf9d719cdaaa8 = $this->env->getExtension("native_profiler");
        $__internal_ff74fd2c23705db3e79c9d726a0004d639a28c13872e966545dcf9d719cdaaa8->enter($__internal_ff74fd2c23705db3e79c9d726a0004d639a28c13872e966545dcf9d719cdaaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ff74fd2c23705db3e79c9d726a0004d639a28c13872e966545dcf9d719cdaaa8->leave($__internal_ff74fd2c23705db3e79c9d726a0004d639a28c13872e966545dcf9d719cdaaa8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
