<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_0cdd5b054c33ecc247c92e2f5e9fe0323e1c26168c1be85719bd0d0fdb6801d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8269aea396c8bae73ec2d4c4033029d399a0968fec70250f334d114c2d4382c1 = $this->env->getExtension("native_profiler");
        $__internal_8269aea396c8bae73ec2d4c4033029d399a0968fec70250f334d114c2d4382c1->enter($__internal_8269aea396c8bae73ec2d4c4033029d399a0968fec70250f334d114c2d4382c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8269aea396c8bae73ec2d4c4033029d399a0968fec70250f334d114c2d4382c1->leave($__internal_8269aea396c8bae73ec2d4c4033029d399a0968fec70250f334d114c2d4382c1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46eae447bf3fcd4b24c8bcc2a86b34b79de65ac40a7f39e63fa2f8adbba7d4db = $this->env->getExtension("native_profiler");
        $__internal_46eae447bf3fcd4b24c8bcc2a86b34b79de65ac40a7f39e63fa2f8adbba7d4db->enter($__internal_46eae447bf3fcd4b24c8bcc2a86b34b79de65ac40a7f39e63fa2f8adbba7d4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_46eae447bf3fcd4b24c8bcc2a86b34b79de65ac40a7f39e63fa2f8adbba7d4db->leave($__internal_46eae447bf3fcd4b24c8bcc2a86b34b79de65ac40a7f39e63fa2f8adbba7d4db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
