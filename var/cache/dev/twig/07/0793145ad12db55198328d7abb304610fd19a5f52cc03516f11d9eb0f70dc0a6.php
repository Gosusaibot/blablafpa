<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d35eec8e9b315424b47cede732b54b95b63f690434743aa00fb0eb2cf57aa317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_af73f063863272e6b7e930c8718e85f57b75ac267b5f493e9644086eb8d31a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af73f063863272e6b7e930c8718e85f57b75ac267b5f493e9644086eb8d31a41->enter($__internal_af73f063863272e6b7e930c8718e85f57b75ac267b5f493e9644086eb8d31a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6f3f9a36ac0ab0bf5a1173498d057b8fb3dd3828597cedb70deea3b087cc53d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3f9a36ac0ab0bf5a1173498d057b8fb3dd3828597cedb70deea3b087cc53d0->enter($__internal_6f3f9a36ac0ab0bf5a1173498d057b8fb3dd3828597cedb70deea3b087cc53d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af73f063863272e6b7e930c8718e85f57b75ac267b5f493e9644086eb8d31a41->leave($__internal_af73f063863272e6b7e930c8718e85f57b75ac267b5f493e9644086eb8d31a41_prof);

        
        $__internal_6f3f9a36ac0ab0bf5a1173498d057b8fb3dd3828597cedb70deea3b087cc53d0->leave($__internal_6f3f9a36ac0ab0bf5a1173498d057b8fb3dd3828597cedb70deea3b087cc53d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad2c74be93beff0221de4babf06176517987bdd5b6367c2eee700a8c64767ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2c74be93beff0221de4babf06176517987bdd5b6367c2eee700a8c64767ac3->enter($__internal_ad2c74be93beff0221de4babf06176517987bdd5b6367c2eee700a8c64767ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41dde4f44248cfc43181bed2ff8a3db1748d1d4b78b65dbd61499e9d647452ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dde4f44248cfc43181bed2ff8a3db1748d1d4b78b65dbd61499e9d647452ef->enter($__internal_41dde4f44248cfc43181bed2ff8a3db1748d1d4b78b65dbd61499e9d647452ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_41dde4f44248cfc43181bed2ff8a3db1748d1d4b78b65dbd61499e9d647452ef->leave($__internal_41dde4f44248cfc43181bed2ff8a3db1748d1d4b78b65dbd61499e9d647452ef_prof);

        
        $__internal_ad2c74be93beff0221de4babf06176517987bdd5b6367c2eee700a8c64767ac3->leave($__internal_ad2c74be93beff0221de4babf06176517987bdd5b6367c2eee700a8c64767ac3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
