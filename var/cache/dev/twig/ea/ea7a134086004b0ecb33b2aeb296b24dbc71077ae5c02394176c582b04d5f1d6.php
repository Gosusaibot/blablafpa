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
        $__internal_02c46fd46db70cf3fe7c24cf2f49c8d52e2cb524221ab3c4316d988168c9d7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c46fd46db70cf3fe7c24cf2f49c8d52e2cb524221ab3c4316d988168c9d7be->enter($__internal_02c46fd46db70cf3fe7c24cf2f49c8d52e2cb524221ab3c4316d988168c9d7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_a9afe4f3139e28a7258c220f55fd6975ec77b5eb47e8eaa8830e51fc9a9c1cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9afe4f3139e28a7258c220f55fd6975ec77b5eb47e8eaa8830e51fc9a9c1cf4->enter($__internal_a9afe4f3139e28a7258c220f55fd6975ec77b5eb47e8eaa8830e51fc9a9c1cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c46fd46db70cf3fe7c24cf2f49c8d52e2cb524221ab3c4316d988168c9d7be->leave($__internal_02c46fd46db70cf3fe7c24cf2f49c8d52e2cb524221ab3c4316d988168c9d7be_prof);

        
        $__internal_a9afe4f3139e28a7258c220f55fd6975ec77b5eb47e8eaa8830e51fc9a9c1cf4->leave($__internal_a9afe4f3139e28a7258c220f55fd6975ec77b5eb47e8eaa8830e51fc9a9c1cf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d8b99a6a38ec7d847901b952ad5931a108f14731e8c10b508c24f29e56ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d8b99a6a38ec7d847901b952ad5931a108f14731e8c10b508c24f29e56ef05->enter($__internal_c2d8b99a6a38ec7d847901b952ad5931a108f14731e8c10b508c24f29e56ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e017500cdab5038d759b8d4b71f55e855e749dac69986022bb33aea83fb3d1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e017500cdab5038d759b8d4b71f55e855e749dac69986022bb33aea83fb3d1d9->enter($__internal_e017500cdab5038d759b8d4b71f55e855e749dac69986022bb33aea83fb3d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e017500cdab5038d759b8d4b71f55e855e749dac69986022bb33aea83fb3d1d9->leave($__internal_e017500cdab5038d759b8d4b71f55e855e749dac69986022bb33aea83fb3d1d9_prof);

        
        $__internal_c2d8b99a6a38ec7d847901b952ad5931a108f14731e8c10b508c24f29e56ef05->leave($__internal_c2d8b99a6a38ec7d847901b952ad5931a108f14731e8c10b508c24f29e56ef05_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2acd63bbe672dc5d1fcd550fb2c25a756f734a4960b53c5c0923a9dfea35d393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acd63bbe672dc5d1fcd550fb2c25a756f734a4960b53c5c0923a9dfea35d393->enter($__internal_2acd63bbe672dc5d1fcd550fb2c25a756f734a4960b53c5c0923a9dfea35d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1475ee1b8403c8ae1a42839d6eb0bfb848f9edd6f80f62cfce600735dd2bc34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1475ee1b8403c8ae1a42839d6eb0bfb848f9edd6f80f62cfce600735dd2bc34b->enter($__internal_1475ee1b8403c8ae1a42839d6eb0bfb848f9edd6f80f62cfce600735dd2bc34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
  \t\t\t<h4>Départ de ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</h4>
    \t\t\t<div class=\"ratings\">
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
          </div>
          <p>Destination   ";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title2", array())), "html", null, true);
            echo "</p>

          ";
            // line 29
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "content", array()))) {
                echo "<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "content", array()), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 30
                echo "<a>sans commentaire</a>
          ";
            }
            // line 32
            echo "
          <p>par ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
               le ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</p>
    \t\t\t<hr class=\"line\">

    \t\t\t<div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
  \t\t\t\t\t <p class=\"price\">\$29,90</p>
  \t\t\t\t  </div>
  \t\t\t\t<div class=\"col-md-6 col-sm-6\">
  \t\t\t\t\t<a class=\"link btn btn-success right\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
              Plus de détails
            </a>
  \t\t\t\t</div>
    \t\t\t\t
    \t\t\t</div>
    \t\t</span>
  \t\t</div>


    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "      <div class=\"col-lg-4\">Pas (encore !) d'annonces</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        
 </div><!-- /.row -->



















 

   <ul class=\"pagination\">
    ";
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 80, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 81
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 81, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 82
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
        // line 85
        echo "  </ul>

";
        
        $__internal_1475ee1b8403c8ae1a42839d6eb0bfb848f9edd6f80f62cfce600735dd2bc34b->leave($__internal_1475ee1b8403c8ae1a42839d6eb0bfb848f9edd6f80f62cfce600735dd2bc34b_prof);

        
        $__internal_2acd63bbe672dc5d1fcd550fb2c25a756f734a4960b53c5c0923a9dfea35d393->leave($__internal_2acd63bbe672dc5d1fcd550fb2c25a756f734a4960b53c5c0923a9dfea35d393_prof);

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
        return array (  206 => 85,  195 => 82,  188 => 81,  183 => 80,  157 => 55,  150 => 53,  134 => 42,  123 => 34,  119 => 33,  116 => 32,  112 => 30,  105 => 29,  100 => 27,  89 => 19,  82 => 14,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
  \t\t\t<h4>Départ de {{ advert.title }}</h4>
    \t\t\t<div class=\"ratings\">
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
            <i class=\"fa fa-star\"></i>
          </div>
          <p>Destination   {{ advert.title2 | upper }}</p>

          {% if advert.content is not null %}<p>{{ advert.content }}</p>
          {% else %}<a>sans commentaire</a>
          {% endif %}

          <p>par {{ advert.author }},
               le {{ advert.date|date('d/m/Y') }}</p>
    \t\t\t<hr class=\"line\">

    \t\t\t<div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
  \t\t\t\t\t <p class=\"price\">\$29,90</p>
  \t\t\t\t  </div>
  \t\t\t\t<div class=\"col-md-6 col-sm-6\">
  \t\t\t\t\t<a class=\"link btn btn-success right\" href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
              Plus de détails
            </a>
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
