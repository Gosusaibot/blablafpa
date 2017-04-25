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
        $__internal_10afc714d808299719751f3a49e07a34bde1dba5f5fa5d7fea4ceb77c2c2cdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10afc714d808299719751f3a49e07a34bde1dba5f5fa5d7fea4ceb77c2c2cdf9->enter($__internal_10afc714d808299719751f3a49e07a34bde1dba5f5fa5d7fea4ceb77c2c2cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c0cf1f4f7ecfdc7064989936afe1b4d121f4088a5fb91b7161e989e1083df4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cf1f4f7ecfdc7064989936afe1b4d121f4088a5fb91b7161e989e1083df4c6->enter($__internal_c0cf1f4f7ecfdc7064989936afe1b4d121f4088a5fb91b7161e989e1083df4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10afc714d808299719751f3a49e07a34bde1dba5f5fa5d7fea4ceb77c2c2cdf9->leave($__internal_10afc714d808299719751f3a49e07a34bde1dba5f5fa5d7fea4ceb77c2c2cdf9_prof);

        
        $__internal_c0cf1f4f7ecfdc7064989936afe1b4d121f4088a5fb91b7161e989e1083df4c6->leave($__internal_c0cf1f4f7ecfdc7064989936afe1b4d121f4088a5fb91b7161e989e1083df4c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_974efdf6e56b750a04996c1dc5f030de6c38799cc93fd1f7c639e8aa6bbc8ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974efdf6e56b750a04996c1dc5f030de6c38799cc93fd1f7c639e8aa6bbc8ade->enter($__internal_974efdf6e56b750a04996c1dc5f030de6c38799cc93fd1f7c639e8aa6bbc8ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c927877fa64bc6e0bc2de5be6f6eabb8aac007e4bb30000fba15aedcf5fab7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c927877fa64bc6e0bc2de5be6f6eabb8aac007e4bb30000fba15aedcf5fab7d->enter($__internal_1c927877fa64bc6e0bc2de5be6f6eabb8aac007e4bb30000fba15aedcf5fab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1c927877fa64bc6e0bc2de5be6f6eabb8aac007e4bb30000fba15aedcf5fab7d->leave($__internal_1c927877fa64bc6e0bc2de5be6f6eabb8aac007e4bb30000fba15aedcf5fab7d_prof);

        
        $__internal_974efdf6e56b750a04996c1dc5f030de6c38799cc93fd1f7c639e8aa6bbc8ade->leave($__internal_974efdf6e56b750a04996c1dc5f030de6c38799cc93fd1f7c639e8aa6bbc8ade_prof);

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
