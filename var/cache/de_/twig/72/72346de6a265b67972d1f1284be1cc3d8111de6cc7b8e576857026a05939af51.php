<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_ab7b387153787b8d0f8c4675093e68ca01d43a6719661fae3825a4db1102481f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b31b71048360aa5713bd00ca20a9db571cf7e5a7181379a69adfef762902cbda = $this->env->getExtension("native_profiler");
        $__internal_b31b71048360aa5713bd00ca20a9db571cf7e5a7181379a69adfef762902cbda->enter($__internal_b31b71048360aa5713bd00ca20a9db571cf7e5a7181379a69adfef762902cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31b71048360aa5713bd00ca20a9db571cf7e5a7181379a69adfef762902cbda->leave($__internal_b31b71048360aa5713bd00ca20a9db571cf7e5a7181379a69adfef762902cbda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0c66cacea2593c00dde57158a42165393e50b2129d2fd70f7fbfe5d3963fa9c = $this->env->getExtension("native_profiler");
        $__internal_d0c66cacea2593c00dde57158a42165393e50b2129d2fd70f7fbfe5d3963fa9c->enter($__internal_d0c66cacea2593c00dde57158a42165393e50b2129d2fd70f7fbfe5d3963fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d0c66cacea2593c00dde57158a42165393e50b2129d2fd70f7fbfe5d3963fa9c->leave($__internal_d0c66cacea2593c00dde57158a42165393e50b2129d2fd70f7fbfe5d3963fa9c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e3a0decb27925c0b2c2d952a301fe5e7a26a47d28ebbff329565ca4015edf4 = $this->env->getExtension("native_profiler");
        $__internal_84e3a0decb27925c0b2c2d952a301fe5e7a26a47d28ebbff329565ca4015edf4->enter($__internal_84e3a0decb27925c0b2c2d952a301fe5e7a26a47d28ebbff329565ca4015edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_84e3a0decb27925c0b2c2d952a301fe5e7a26a47d28ebbff329565ca4015edf4->leave($__internal_84e3a0decb27925c0b2c2d952a301fe5e7a26a47d28ebbff329565ca4015edf4_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e24ed1c7139e4f8d2ae44cc4e96d09dae331bc58614ebdca9ce31a065dfb0c29 = $this->env->getExtension("native_profiler");
        $__internal_e24ed1c7139e4f8d2ae44cc4e96d09dae331bc58614ebdca9ce31a065dfb0c29->enter($__internal_e24ed1c7139e4f8d2ae44cc4e96d09dae331bc58614ebdca9ce31a065dfb0c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e24ed1c7139e4f8d2ae44cc4e96d09dae331bc58614ebdca9ce31a065dfb0c29->leave($__internal_e24ed1c7139e4f8d2ae44cc4e96d09dae331bc58614ebdca9ce31a065dfb0c29_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
