<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_c03ba4d2c6e9e699089594754cb8e0f462decca76792cc00c317ee5370331fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_f79c1804d2d0a99bd8fb86a8d1e003d8f9b8450d7b060f6d9bdce2d519a88a15 = $this->env->getExtension("native_profiler");
        $__internal_f79c1804d2d0a99bd8fb86a8d1e003d8f9b8450d7b060f6d9bdce2d519a88a15->enter($__internal_f79c1804d2d0a99bd8fb86a8d1e003d8f9b8450d7b060f6d9bdce2d519a88a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79c1804d2d0a99bd8fb86a8d1e003d8f9b8450d7b060f6d9bdce2d519a88a15->leave($__internal_f79c1804d2d0a99bd8fb86a8d1e003d8f9b8450d7b060f6d9bdce2d519a88a15_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_452d2f5b99351cdb989105bc57aafd9f7151c6197fb1cbc36df1cf16f008a46a = $this->env->getExtension("native_profiler");
        $__internal_452d2f5b99351cdb989105bc57aafd9f7151c6197fb1cbc36df1cf16f008a46a->enter($__internal_452d2f5b99351cdb989105bc57aafd9f7151c6197fb1cbc36df1cf16f008a46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_452d2f5b99351cdb989105bc57aafd9f7151c6197fb1cbc36df1cf16f008a46a->leave($__internal_452d2f5b99351cdb989105bc57aafd9f7151c6197fb1cbc36df1cf16f008a46a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
