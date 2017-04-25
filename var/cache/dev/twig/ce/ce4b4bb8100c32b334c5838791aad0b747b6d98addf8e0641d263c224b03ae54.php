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
        $__internal_b62829778ce3a18fa66b606779e7651c4d23bf0e70cf83c646876ed7c8f50fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62829778ce3a18fa66b606779e7651c4d23bf0e70cf83c646876ed7c8f50fc1->enter($__internal_b62829778ce3a18fa66b606779e7651c4d23bf0e70cf83c646876ed7c8f50fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c88c90440e6124eac7b85870dc3aa38ffec4a745b588a83cbe5d097c0642741c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88c90440e6124eac7b85870dc3aa38ffec4a745b588a83cbe5d097c0642741c->enter($__internal_c88c90440e6124eac7b85870dc3aa38ffec4a745b588a83cbe5d097c0642741c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62829778ce3a18fa66b606779e7651c4d23bf0e70cf83c646876ed7c8f50fc1->leave($__internal_b62829778ce3a18fa66b606779e7651c4d23bf0e70cf83c646876ed7c8f50fc1_prof);

        
        $__internal_c88c90440e6124eac7b85870dc3aa38ffec4a745b588a83cbe5d097c0642741c->leave($__internal_c88c90440e6124eac7b85870dc3aa38ffec4a745b588a83cbe5d097c0642741c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3bd90b2eabd7f41f3f19c5f411a6a7dd7644d9f57fec4e00e3d986c06d1a6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3bd90b2eabd7f41f3f19c5f411a6a7dd7644d9f57fec4e00e3d986c06d1a6ff->enter($__internal_a3bd90b2eabd7f41f3f19c5f411a6a7dd7644d9f57fec4e00e3d986c06d1a6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_960bafe949683b00ee23ab324c89f80cdd342078853fc85efa2a1e5709c66371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960bafe949683b00ee23ab324c89f80cdd342078853fc85efa2a1e5709c66371->enter($__internal_960bafe949683b00ee23ab324c89f80cdd342078853fc85efa2a1e5709c66371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_960bafe949683b00ee23ab324c89f80cdd342078853fc85efa2a1e5709c66371->leave($__internal_960bafe949683b00ee23ab324c89f80cdd342078853fc85efa2a1e5709c66371_prof);

        
        $__internal_a3bd90b2eabd7f41f3f19c5f411a6a7dd7644d9f57fec4e00e3d986c06d1a6ff->leave($__internal_a3bd90b2eabd7f41f3f19c5f411a6a7dd7644d9f57fec4e00e3d986c06d1a6ff_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7e2dafa1d2fba249eb96b21e0fa52d73498c8f4caaf0c967f63c3baa576f777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e2dafa1d2fba249eb96b21e0fa52d73498c8f4caaf0c967f63c3baa576f777->enter($__internal_a7e2dafa1d2fba249eb96b21e0fa52d73498c8f4caaf0c967f63c3baa576f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2e0c252c064ebe6bb9479da47b6471c383fdc5d1817000b72db89fa8d10af68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e0c252c064ebe6bb9479da47b6471c383fdc5d1817000b72db89fa8d10af68->enter($__internal_c2e0c252c064ebe6bb9479da47b6471c383fdc5d1817000b72db89fa8d10af68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_c2e0c252c064ebe6bb9479da47b6471c383fdc5d1817000b72db89fa8d10af68->leave($__internal_c2e0c252c064ebe6bb9479da47b6471c383fdc5d1817000b72db89fa8d10af68_prof);

        
        $__internal_a7e2dafa1d2fba249eb96b21e0fa52d73498c8f4caaf0c967f63c3baa576f777->leave($__internal_a7e2dafa1d2fba249eb96b21e0fa52d73498c8f4caaf0c967f63c3baa576f777_prof);

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
