<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1bbb5cfb0424a66b916b876e5302db0089ee8098d2d3c660a350f9846704c14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_7caabe8cc5d93c3b50927a11a6c8d5a91a6bbb05ada475ec2cab16aa4ccc1c97 = $this->env->getExtension("native_profiler");
        $__internal_7caabe8cc5d93c3b50927a11a6c8d5a91a6bbb05ada475ec2cab16aa4ccc1c97->enter($__internal_7caabe8cc5d93c3b50927a11a6c8d5a91a6bbb05ada475ec2cab16aa4ccc1c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7caabe8cc5d93c3b50927a11a6c8d5a91a6bbb05ada475ec2cab16aa4ccc1c97->leave($__internal_7caabe8cc5d93c3b50927a11a6c8d5a91a6bbb05ada475ec2cab16aa4ccc1c97_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de041183408ee048e226dbbff5051fd4f1786589960f0e4eb68f49abf938d207 = $this->env->getExtension("native_profiler");
        $__internal_de041183408ee048e226dbbff5051fd4f1786589960f0e4eb68f49abf938d207->enter($__internal_de041183408ee048e226dbbff5051fd4f1786589960f0e4eb68f49abf938d207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_de041183408ee048e226dbbff5051fd4f1786589960f0e4eb68f49abf938d207->leave($__internal_de041183408ee048e226dbbff5051fd4f1786589960f0e4eb68f49abf938d207_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
