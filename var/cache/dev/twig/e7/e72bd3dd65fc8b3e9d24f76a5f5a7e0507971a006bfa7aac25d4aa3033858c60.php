<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bba4c732775ac9653172ee166db7582d6984a032a7453b71f41fe5b90f1869d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6701ab2a36ac59413398c0fc4cd2fee84ac6f5b6dab5c7723e38e094437c78ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6701ab2a36ac59413398c0fc4cd2fee84ac6f5b6dab5c7723e38e094437c78ac->enter($__internal_6701ab2a36ac59413398c0fc4cd2fee84ac6f5b6dab5c7723e38e094437c78ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_4dcb6fa658473013ecdc5976c4bffc40fb0e5db463af7de67483b29d324ec644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcb6fa658473013ecdc5976c4bffc40fb0e5db463af7de67483b29d324ec644->enter($__internal_4dcb6fa658473013ecdc5976c4bffc40fb0e5db463af7de67483b29d324ec644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6701ab2a36ac59413398c0fc4cd2fee84ac6f5b6dab5c7723e38e094437c78ac->leave($__internal_6701ab2a36ac59413398c0fc4cd2fee84ac6f5b6dab5c7723e38e094437c78ac_prof);

        
        $__internal_4dcb6fa658473013ecdc5976c4bffc40fb0e5db463af7de67483b29d324ec644->leave($__internal_4dcb6fa658473013ecdc5976c4bffc40fb0e5db463af7de67483b29d324ec644_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bf6e80e263e050128b0a51cdd578f818f7c86e04b62819394b9baa26a51e5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf6e80e263e050128b0a51cdd578f818f7c86e04b62819394b9baa26a51e5fa->enter($__internal_4bf6e80e263e050128b0a51cdd578f818f7c86e04b62819394b9baa26a51e5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2587f1b594a105ced4523e0ca24d0e2f706ec8bbd7c24a1245dcb6f6be36bd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2587f1b594a105ced4523e0ca24d0e2f706ec8bbd7c24a1245dcb6f6be36bd27->enter($__internal_2587f1b594a105ced4523e0ca24d0e2f706ec8bbd7c24a1245dcb6f6be36bd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2587f1b594a105ced4523e0ca24d0e2f706ec8bbd7c24a1245dcb6f6be36bd27->leave($__internal_2587f1b594a105ced4523e0ca24d0e2f706ec8bbd7c24a1245dcb6f6be36bd27_prof);

        
        $__internal_4bf6e80e263e050128b0a51cdd578f818f7c86e04b62819394b9baa26a51e5fa->leave($__internal_4bf6e80e263e050128b0a51cdd578f818f7c86e04b62819394b9baa26a51e5fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
