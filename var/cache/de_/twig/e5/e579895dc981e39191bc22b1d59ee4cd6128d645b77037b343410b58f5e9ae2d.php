<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b8026c35371fe416bd79ae4bfb375ff104ca96a37eb5cd3975a3284eff342069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_04ada2dad1338cd574acaef81fb14a1ffdc7da1de6439556f91c01833177cb5c = $this->env->getExtension("native_profiler");
        $__internal_04ada2dad1338cd574acaef81fb14a1ffdc7da1de6439556f91c01833177cb5c->enter($__internal_04ada2dad1338cd574acaef81fb14a1ffdc7da1de6439556f91c01833177cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ada2dad1338cd574acaef81fb14a1ffdc7da1de6439556f91c01833177cb5c->leave($__internal_04ada2dad1338cd574acaef81fb14a1ffdc7da1de6439556f91c01833177cb5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f38b6bd4810f77faf6a21a1e2a290daa1e7c82e174c81ce58bfb2f3cf83f0f36 = $this->env->getExtension("native_profiler");
        $__internal_f38b6bd4810f77faf6a21a1e2a290daa1e7c82e174c81ce58bfb2f3cf83f0f36->enter($__internal_f38b6bd4810f77faf6a21a1e2a290daa1e7c82e174c81ce58bfb2f3cf83f0f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f38b6bd4810f77faf6a21a1e2a290daa1e7c82e174c81ce58bfb2f3cf83f0f36->leave($__internal_f38b6bd4810f77faf6a21a1e2a290daa1e7c82e174c81ce58bfb2f3cf83f0f36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
