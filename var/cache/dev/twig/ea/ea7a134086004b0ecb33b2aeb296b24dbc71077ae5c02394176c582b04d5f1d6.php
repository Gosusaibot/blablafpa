<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_485bf9f32bf250104aca25dd2bad348279d0096e0be02aa7b5a9774419c28002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04bf3036497c8b390a954b384ad30b2d04817230b4041620b92a79961fea6e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bf3036497c8b390a954b384ad30b2d04817230b4041620b92a79961fea6e4c->enter($__internal_04bf3036497c8b390a954b384ad30b2d04817230b4041620b92a79961fea6e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_66c50aef574b4e8ae2d9d4887f2ec2897ba253a6a5cfe369cfde846106eba91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c50aef574b4e8ae2d9d4887f2ec2897ba253a6a5cfe369cfde846106eba91d->enter($__internal_66c50aef574b4e8ae2d9d4887f2ec2897ba253a6a5cfe369cfde846106eba91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bf3036497c8b390a954b384ad30b2d04817230b4041620b92a79961fea6e4c->leave($__internal_04bf3036497c8b390a954b384ad30b2d04817230b4041620b92a79961fea6e4c_prof);

        
        $__internal_66c50aef574b4e8ae2d9d4887f2ec2897ba253a6a5cfe369cfde846106eba91d->leave($__internal_66c50aef574b4e8ae2d9d4887f2ec2897ba253a6a5cfe369cfde846106eba91d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33dc1fdca044137fb2ae93bb3efc55b050573906b80757b3d20ce844d5e102df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dc1fdca044137fb2ae93bb3efc55b050573906b80757b3d20ce844d5e102df->enter($__internal_33dc1fdca044137fb2ae93bb3efc55b050573906b80757b3d20ce844d5e102df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2971f5c7d29f2bc24a1acb945943a6ef196679343bd63777b37482c52b8730f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971f5c7d29f2bc24a1acb945943a6ef196679343bd63777b37482c52b8730f4->enter($__internal_2971f5c7d29f2bc24a1acb945943a6ef196679343bd63777b37482c52b8730f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2971f5c7d29f2bc24a1acb945943a6ef196679343bd63777b37482c52b8730f4->leave($__internal_2971f5c7d29f2bc24a1acb945943a6ef196679343bd63777b37482c52b8730f4_prof);

        
        $__internal_33dc1fdca044137fb2ae93bb3efc55b050573906b80757b3d20ce844d5e102df->leave($__internal_33dc1fdca044137fb2ae93bb3efc55b050573906b80757b3d20ce844d5e102df_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2963ac9cfd4395bfabb618e19435108a9d79f9a0aafa4a5cb0e36b183d6560f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2963ac9cfd4395bfabb618e19435108a9d79f9a0aafa4a5cb0e36b183d6560f6->enter($__internal_2963ac9cfd4395bfabb618e19435108a9d79f9a0aafa4a5cb0e36b183d6560f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c45b3156a6f977819a0549c7d9184fa4dbfb1580054e615658db3f6858123362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45b3156a6f977819a0549c7d9184fa4dbfb1580054e615658db3f6858123362->enter($__internal_c45b3156a6f977819a0549c7d9184fa4dbfb1580054e615658db3f6858123362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
 <div class=\"row\">
        
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 13, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "


    <div class=\"col-md-3 col-sm-6\">
    \t\t<span class=\"thumbnail\">
      \t\t\t<h4>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</h4>
      \t\t\t<div class=\"ratings\">
                    <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i>
            </div>
      \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <p>par ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
                 le ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</p>
      \t\t\t<hr class=\"line\">
      \t\t\t<div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
      \t\t\t\t\t<p class=\"price\">\$29,90</p>
      \t\t\t\t</div>
      \t\t\t\t<div class=\"col-md-6 col-sm-6\">
      \t\t\t\t\t<button class=\"btn btn-success right\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\"> Plus de détails</button>
      \t\t\t\t</div>
      \t\t\t\t
      \t\t\t</div>
    \t\t</span>
  \t\t</div>


    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "      <div class=\"col-lg-4\">Pas (encore !) d'annonces</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        
 </div><!-- /.row -->



















 

   <ul class=\"pagination\">
    ";
        // line 68
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 68, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 69
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 69, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "  </ul>

";
        
        $__internal_c45b3156a6f977819a0549c7d9184fa4dbfb1580054e615658db3f6858123362->leave($__internal_c45b3156a6f977819a0549c7d9184fa4dbfb1580054e615658db3f6858123362_prof);

        
        $__internal_2963ac9cfd4395bfabb618e19435108a9d79f9a0aafa4a5cb0e36b183d6560f6->leave($__internal_2963ac9cfd4395bfabb618e19435108a9d79f9a0aafa4a5cb0e36b183d6560f6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 73,  170 => 70,  163 => 69,  158 => 68,  132 => 43,  125 => 41,  111 => 32,  101 => 25,  97 => 24,  89 => 19,  82 => 14,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

 <div class=\"row\">
        
    {% for advert in listAdverts %}



    <div class=\"col-md-3 col-sm-6\">
    \t\t<span class=\"thumbnail\">
      \t\t\t<h4>{{ advert.title }}</h4>
      \t\t\t<div class=\"ratings\">
                    <i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i>
            </div>
      \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <p>par {{ advert.author }},
                 le {{ advert.date|date('d/m/Y') }}</p>
      \t\t\t<hr class=\"line\">
      \t\t\t<div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
      \t\t\t\t\t<p class=\"price\">\$29,90</p>
      \t\t\t\t</div>
      \t\t\t\t<div class=\"col-md-6 col-sm-6\">
      \t\t\t\t\t<button class=\"btn btn-success right\" href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\"> Plus de détails</button>
      \t\t\t\t</div>
      \t\t\t\t
      \t\t\t</div>
    \t\t</span>
  \t\t</div>


    {% else %}
      <div class=\"col-lg-4\">Pas (encore !) d'annonces</div>
    {% endfor %}
        
 </div><!-- /.row -->



















 

   <ul class=\"pagination\">
    {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
    {% for p in range(1, nbPages) %}
      <li{% if p == page %} class=\"active\"{% endif %}>
        <a href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
      </li>
    {% endfor %}
  </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
