<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_315b960868d5aa60be61d2e40af912b78d4518b4acbd23e3e2844a5caa550ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@FOSUser/layout.html.twig", 4);
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
        $__internal_72b7d22906fd8e7db7d05049a2d2c0142739a610a075d7e11322b338869dff79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b7d22906fd8e7db7d05049a2d2c0142739a610a075d7e11322b338869dff79->enter($__internal_72b7d22906fd8e7db7d05049a2d2c0142739a610a075d7e11322b338869dff79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1b9f6eef94c9aa765baced2391fd46d3e87b92334fc990f1c6dce770918e82f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9f6eef94c9aa765baced2391fd46d3e87b92334fc990f1c6dce770918e82f3->enter($__internal_1b9f6eef94c9aa765baced2391fd46d3e87b92334fc990f1c6dce770918e82f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b7d22906fd8e7db7d05049a2d2c0142739a610a075d7e11322b338869dff79->leave($__internal_72b7d22906fd8e7db7d05049a2d2c0142739a610a075d7e11322b338869dff79_prof);

        
        $__internal_1b9f6eef94c9aa765baced2391fd46d3e87b92334fc990f1c6dce770918e82f3->leave($__internal_1b9f6eef94c9aa765baced2391fd46d3e87b92334fc990f1c6dce770918e82f3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38aed2edb5b9028413ad47d962167c8d5089a09e463d0870f3f1c8ca7e7a75c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38aed2edb5b9028413ad47d962167c8d5089a09e463d0870f3f1c8ca7e7a75c3->enter($__internal_38aed2edb5b9028413ad47d962167c8d5089a09e463d0870f3f1c8ca7e7a75c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25df5cc4569f69063f08ff4dfeb0398275209d21448a1dccb2029a4f1bc35d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df5cc4569f69063f08ff4dfeb0398275209d21448a1dccb2029a4f1bc35d40->enter($__internal_25df5cc4569f69063f08ff4dfeb0398275209d21448a1dccb2029a4f1bc35d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_25df5cc4569f69063f08ff4dfeb0398275209d21448a1dccb2029a4f1bc35d40->leave($__internal_25df5cc4569f69063f08ff4dfeb0398275209d21448a1dccb2029a4f1bc35d40_prof);

        
        $__internal_38aed2edb5b9028413ad47d962167c8d5089a09e463d0870f3f1c8ca7e7a75c3->leave($__internal_38aed2edb5b9028413ad47d962167c8d5089a09e463d0870f3f1c8ca7e7a75c3_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fadb352603ca80e42cf1e0c35bb0f329ce52ecb314421e510e719d33d75a0e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadb352603ca80e42cf1e0c35bb0f329ce52ecb314421e510e719d33d75a0e1e->enter($__internal_fadb352603ca80e42cf1e0c35bb0f329ce52ecb314421e510e719d33d75a0e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb61051a6825adf7f61c9a2a23c009bf17c1f52a6670bc79495238db92824564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb61051a6825adf7f61c9a2a23c009bf17c1f52a6670bc79495238db92824564->enter($__internal_eb61051a6825adf7f61c9a2a23c009bf17c1f52a6670bc79495238db92824564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_eb61051a6825adf7f61c9a2a23c009bf17c1f52a6670bc79495238db92824564->leave($__internal_eb61051a6825adf7f61c9a2a23c009bf17c1f52a6670bc79495238db92824564_prof);

        
        $__internal_fadb352603ca80e42cf1e0c35bb0f329ce52ecb314421e510e719d33d75a0e1e->leave($__internal_fadb352603ca80e42cf1e0c35bb0f329ce52ecb314421e510e719d33d75a0e1e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  100 => 19,  89 => 21,  86 => 19,  83 => 17,  77 => 16,  68 => 13,  63 => 12,  58 => 11,  53 => 10,  50 => 8,  41 => 7,  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}

{# On étend notre layout #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

  {# On affiche les messages flash que définissent les contrôleurs du bundle #}
  {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}

  {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
  {% block fos_user_content %}
  {% endblock fos_user_content %}

{% endblock %}
", "@FOSUser/layout.html.twig", "/var/www/blablafpa/src/OC/UserBundle/Resources/views/layout.html.twig");
    }
}
