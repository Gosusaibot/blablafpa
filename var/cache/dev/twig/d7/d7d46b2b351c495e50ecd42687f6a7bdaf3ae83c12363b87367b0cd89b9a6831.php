<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6beb8993bf5bd5b2da7ee0a4bf0aef08b18711dee013c4b731439e792665578d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8d7da0e9b48bb8003f3914c6c53890f1efe0568eb385354c0c77a994e797f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d7da0e9b48bb8003f3914c6c53890f1efe0568eb385354c0c77a994e797f72->enter($__internal_e8d7da0e9b48bb8003f3914c6c53890f1efe0568eb385354c0c77a994e797f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f081b1ef9f86cf7b7a9f1405356a58d78f938bd20730960eba07b1923c84e026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f081b1ef9f86cf7b7a9f1405356a58d78f938bd20730960eba07b1923c84e026->enter($__internal_f081b1ef9f86cf7b7a9f1405356a58d78f938bd20730960eba07b1923c84e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d7da0e9b48bb8003f3914c6c53890f1efe0568eb385354c0c77a994e797f72->leave($__internal_e8d7da0e9b48bb8003f3914c6c53890f1efe0568eb385354c0c77a994e797f72_prof);

        
        $__internal_f081b1ef9f86cf7b7a9f1405356a58d78f938bd20730960eba07b1923c84e026->leave($__internal_f081b1ef9f86cf7b7a9f1405356a58d78f938bd20730960eba07b1923c84e026_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9eee122ba26cbe3b5cf208baa40e45131b6fc2433046ec616dc1e6d2e95b7cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eee122ba26cbe3b5cf208baa40e45131b6fc2433046ec616dc1e6d2e95b7cd0->enter($__internal_9eee122ba26cbe3b5cf208baa40e45131b6fc2433046ec616dc1e6d2e95b7cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23ab0fed4f4f3a0bfc19415ac03c1c996b8d080c66d939f7196cad8d61619337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ab0fed4f4f3a0bfc19415ac03c1c996b8d080c66d939f7196cad8d61619337->enter($__internal_23ab0fed4f4f3a0bfc19415ac03c1c996b8d080c66d939f7196cad8d61619337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_23ab0fed4f4f3a0bfc19415ac03c1c996b8d080c66d939f7196cad8d61619337->leave($__internal_23ab0fed4f4f3a0bfc19415ac03c1c996b8d080c66d939f7196cad8d61619337_prof);

        
        $__internal_9eee122ba26cbe3b5cf208baa40e45131b6fc2433046ec616dc1e6d2e95b7cd0->leave($__internal_9eee122ba26cbe3b5cf208baa40e45131b6fc2433046ec616dc1e6d2e95b7cd0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
