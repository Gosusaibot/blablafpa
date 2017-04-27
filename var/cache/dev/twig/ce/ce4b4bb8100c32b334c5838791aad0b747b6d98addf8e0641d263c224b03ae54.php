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
        $__internal_e0786b2c28ca66318057ede6033b28ba0c671ddd6040f85c6604ddadef255652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0786b2c28ca66318057ede6033b28ba0c671ddd6040f85c6604ddadef255652->enter($__internal_e0786b2c28ca66318057ede6033b28ba0c671ddd6040f85c6604ddadef255652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e1da1c14dc3d9d7ead08f2eac763f5d351daf8fbfdd44a9e786f55a651547fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da1c14dc3d9d7ead08f2eac763f5d351daf8fbfdd44a9e786f55a651547fe8->enter($__internal_e1da1c14dc3d9d7ead08f2eac763f5d351daf8fbfdd44a9e786f55a651547fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0786b2c28ca66318057ede6033b28ba0c671ddd6040f85c6604ddadef255652->leave($__internal_e0786b2c28ca66318057ede6033b28ba0c671ddd6040f85c6604ddadef255652_prof);

        
        $__internal_e1da1c14dc3d9d7ead08f2eac763f5d351daf8fbfdd44a9e786f55a651547fe8->leave($__internal_e1da1c14dc3d9d7ead08f2eac763f5d351daf8fbfdd44a9e786f55a651547fe8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_11625f414fd5ca3ede243db05a197ead794360d6dd9ef0fd8a59cc6dea67792f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11625f414fd5ca3ede243db05a197ead794360d6dd9ef0fd8a59cc6dea67792f->enter($__internal_11625f414fd5ca3ede243db05a197ead794360d6dd9ef0fd8a59cc6dea67792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17cde329c9f997e4fbfad7ff02427267c2b178ad849e3dde516abbb2037328d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cde329c9f997e4fbfad7ff02427267c2b178ad849e3dde516abbb2037328d0->enter($__internal_17cde329c9f997e4fbfad7ff02427267c2b178ad849e3dde516abbb2037328d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17cde329c9f997e4fbfad7ff02427267c2b178ad849e3dde516abbb2037328d0->leave($__internal_17cde329c9f997e4fbfad7ff02427267c2b178ad849e3dde516abbb2037328d0_prof);

        
        $__internal_11625f414fd5ca3ede243db05a197ead794360d6dd9ef0fd8a59cc6dea67792f->leave($__internal_11625f414fd5ca3ede243db05a197ead794360d6dd9ef0fd8a59cc6dea67792f_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95c8f729b7376d271e43eac55a5a0cd59ac627de932880411b366ed8a991b496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c8f729b7376d271e43eac55a5a0cd59ac627de932880411b366ed8a991b496->enter($__internal_95c8f729b7376d271e43eac55a5a0cd59ac627de932880411b366ed8a991b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b3ad86c412ccf5dbe991bb6083286cd937f1b2ae960bd0fa0841bbcd31db5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3ad86c412ccf5dbe991bb6083286cd937f1b2ae960bd0fa0841bbcd31db5d1->enter($__internal_8b3ad86c412ccf5dbe991bb6083286cd937f1b2ae960bd0fa0841bbcd31db5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_8b3ad86c412ccf5dbe991bb6083286cd937f1b2ae960bd0fa0841bbcd31db5d1->leave($__internal_8b3ad86c412ccf5dbe991bb6083286cd937f1b2ae960bd0fa0841bbcd31db5d1_prof);

        
        $__internal_95c8f729b7376d271e43eac55a5a0cd59ac627de932880411b366ed8a991b496->leave($__internal_95c8f729b7376d271e43eac55a5a0cd59ac627de932880411b366ed8a991b496_prof);

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
