<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_846ade64d3cd5e7ca471e4e357f97ee110d7cc5a285ff114acc8d0a4c141b84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e81ad0590706871c1101784a2ab760feef8b3f73f85d2e74a3c4df9df593ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e81ad0590706871c1101784a2ab760feef8b3f73f85d2e74a3c4df9df593ec5->enter($__internal_8e81ad0590706871c1101784a2ab760feef8b3f73f85d2e74a3c4df9df593ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_92dfe690fac824b049108a3534d6021d1d780c157d3ac456a116c04fe28d6680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dfe690fac824b049108a3534d6021d1d780c157d3ac456a116c04fe28d6680->enter($__internal_92dfe690fac824b049108a3534d6021d1d780c157d3ac456a116c04fe28d6680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_8e81ad0590706871c1101784a2ab760feef8b3f73f85d2e74a3c4df9df593ec5->leave($__internal_8e81ad0590706871c1101784a2ab760feef8b3f73f85d2e74a3c4df9df593ec5_prof);

        
        $__internal_92dfe690fac824b049108a3534d6021d1d780c157d3ac456a116c04fe28d6680->leave($__internal_92dfe690fac824b049108a3534d6021d1d780c157d3ac456a116c04fe28d6680_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
