<?php

/* ::base.html.twig */
class __TwigTemplate_0c0e5d50a747b1ad4b2e6a4567645209d72480a26c9b5e001975334786101e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77662fcbe56b152d03caf259a4b09a07c688f3b221de4f68c3b05bb0736001b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77662fcbe56b152d03caf259a4b09a07c688f3b221de4f68c3b05bb0736001b4->enter($__internal_77662fcbe56b152d03caf259a4b09a07c688f3b221de4f68c3b05bb0736001b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7d0a425bbebf57ab948d1b81fbfe35edfb6c2065fa9170d531fe79fcfd125e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0a425bbebf57ab948d1b81fbfe35edfb6c2065fa9170d531fe79fcfd125e3e->enter($__internal_7d0a425bbebf57ab948d1b81fbfe35edfb6c2065fa9170d531fe79fcfd125e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_77662fcbe56b152d03caf259a4b09a07c688f3b221de4f68c3b05bb0736001b4->leave($__internal_77662fcbe56b152d03caf259a4b09a07c688f3b221de4f68c3b05bb0736001b4_prof);

        
        $__internal_7d0a425bbebf57ab948d1b81fbfe35edfb6c2065fa9170d531fe79fcfd125e3e->leave($__internal_7d0a425bbebf57ab948d1b81fbfe35edfb6c2065fa9170d531fe79fcfd125e3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a9efb97b2e43c0e7fee1f6e52b0dc7b5817868754bb97788abf5808a443e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a9efb97b2e43c0e7fee1f6e52b0dc7b5817868754bb97788abf5808a443e1f->enter($__internal_53a9efb97b2e43c0e7fee1f6e52b0dc7b5817868754bb97788abf5808a443e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da3f156b6a6e5318a22b972a2e2576861d54fa6acc7a5ae22673ce36b1be4ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3f156b6a6e5318a22b972a2e2576861d54fa6acc7a5ae22673ce36b1be4ef5->enter($__internal_da3f156b6a6e5318a22b972a2e2576861d54fa6acc7a5ae22673ce36b1be4ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da3f156b6a6e5318a22b972a2e2576861d54fa6acc7a5ae22673ce36b1be4ef5->leave($__internal_da3f156b6a6e5318a22b972a2e2576861d54fa6acc7a5ae22673ce36b1be4ef5_prof);

        
        $__internal_53a9efb97b2e43c0e7fee1f6e52b0dc7b5817868754bb97788abf5808a443e1f->leave($__internal_53a9efb97b2e43c0e7fee1f6e52b0dc7b5817868754bb97788abf5808a443e1f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0083e9b36503b654c508e209c651ccf5baa6527989f059f7b20e565de828990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0083e9b36503b654c508e209c651ccf5baa6527989f059f7b20e565de828990->enter($__internal_e0083e9b36503b654c508e209c651ccf5baa6527989f059f7b20e565de828990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b0640e6caac0d1b4190dba5219796480340d2ea55a548659c558cc16c8adad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0640e6caac0d1b4190dba5219796480340d2ea55a548659c558cc16c8adad2->enter($__internal_7b0640e6caac0d1b4190dba5219796480340d2ea55a548659c558cc16c8adad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b0640e6caac0d1b4190dba5219796480340d2ea55a548659c558cc16c8adad2->leave($__internal_7b0640e6caac0d1b4190dba5219796480340d2ea55a548659c558cc16c8adad2_prof);

        
        $__internal_e0083e9b36503b654c508e209c651ccf5baa6527989f059f7b20e565de828990->leave($__internal_e0083e9b36503b654c508e209c651ccf5baa6527989f059f7b20e565de828990_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d995198ef746e78b4cebfd49aef80954a6965abbcba17e1661cb6c7ea57b067c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d995198ef746e78b4cebfd49aef80954a6965abbcba17e1661cb6c7ea57b067c->enter($__internal_d995198ef746e78b4cebfd49aef80954a6965abbcba17e1661cb6c7ea57b067c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be1c368cf916256438bd08fc9c79e5b2552d9d65e52af1be1d4a33cb252f53a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1c368cf916256438bd08fc9c79e5b2552d9d65e52af1be1d4a33cb252f53a0->enter($__internal_be1c368cf916256438bd08fc9c79e5b2552d9d65e52af1be1d4a33cb252f53a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be1c368cf916256438bd08fc9c79e5b2552d9d65e52af1be1d4a33cb252f53a0->leave($__internal_be1c368cf916256438bd08fc9c79e5b2552d9d65e52af1be1d4a33cb252f53a0_prof);

        
        $__internal_d995198ef746e78b4cebfd49aef80954a6965abbcba17e1661cb6c7ea57b067c->leave($__internal_d995198ef746e78b4cebfd49aef80954a6965abbcba17e1661cb6c7ea57b067c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c6fa2abd22a02b1b652049614e6e17c27daef573aff4e00e454715ed31b6785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6fa2abd22a02b1b652049614e6e17c27daef573aff4e00e454715ed31b6785->enter($__internal_4c6fa2abd22a02b1b652049614e6e17c27daef573aff4e00e454715ed31b6785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0cbcbc5bb0de162bec7386ff9a5bb5b14b108d3be6ec48ba39ec3dbf2f35d612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbcbc5bb0de162bec7386ff9a5bb5b14b108d3be6ec48ba39ec3dbf2f35d612->enter($__internal_0cbcbc5bb0de162bec7386ff9a5bb5b14b108d3be6ec48ba39ec3dbf2f35d612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cbcbc5bb0de162bec7386ff9a5bb5b14b108d3be6ec48ba39ec3dbf2f35d612->leave($__internal_0cbcbc5bb0de162bec7386ff9a5bb5b14b108d3be6ec48ba39ec3dbf2f35d612_prof);

        
        $__internal_4c6fa2abd22a02b1b652049614e6e17c27daef573aff4e00e454715ed31b6785->leave($__internal_4c6fa2abd22a02b1b652049614e6e17c27daef573aff4e00e454715ed31b6785_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/blablafpa/app/Resources/views/base.html.twig");
    }
}
