<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_10051a6e8d3de2423bbadd47ec7e093625a0bd4f3acbb067b9c4ca486856a564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26b2ff102ec45a21348eb1fd3bd72ce1b9cced08454035e88d4e6026fcc207e = $this->env->getExtension("native_profiler");
        $__internal_c26b2ff102ec45a21348eb1fd3bd72ce1b9cced08454035e88d4e6026fcc207e->enter($__internal_c26b2ff102ec45a21348eb1fd3bd72ce1b9cced08454035e88d4e6026fcc207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26b2ff102ec45a21348eb1fd3bd72ce1b9cced08454035e88d4e6026fcc207e->leave($__internal_c26b2ff102ec45a21348eb1fd3bd72ce1b9cced08454035e88d4e6026fcc207e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc43588ed976a6919d90460f3327165dc1164e1b614c47863834e4176b6f0c44 = $this->env->getExtension("native_profiler");
        $__internal_bc43588ed976a6919d90460f3327165dc1164e1b614c47863834e4176b6f0c44->enter($__internal_bc43588ed976a6919d90460f3327165dc1164e1b614c47863834e4176b6f0c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_bc43588ed976a6919d90460f3327165dc1164e1b614c47863834e4176b6f0c44->leave($__internal_bc43588ed976a6919d90460f3327165dc1164e1b614c47863834e4176b6f0c44_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d76c4ee1936f48598b2cea888c19f8e7102af5197b36c96e283cab5575e2e78 = $this->env->getExtension("native_profiler");
        $__internal_4d76c4ee1936f48598b2cea888c19f8e7102af5197b36c96e283cab5575e2e78->enter($__internal_4d76c4ee1936f48598b2cea888c19f8e7102af5197b36c96e283cab5575e2e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_4d76c4ee1936f48598b2cea888c19f8e7102af5197b36c96e283cab5575e2e78->leave($__internal_4d76c4ee1936f48598b2cea888c19f8e7102af5197b36c96e283cab5575e2e78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  88 => 19,  80 => 21,  77 => 19,  74 => 17,  68 => 16,  59 => 13,  54 => 12,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*       <div class="alert alert-{{ key }}">*/
/*         {{ message|trans({}, 'FOSUserBundle') }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
