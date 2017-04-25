<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_480bced5eb764ab0ae791d532a003fdbae898ea34dd741e42af41007b467edf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_04a16e2560381ca2ce5b3a13b143ecc1f5038f47888da98e57c335158a273fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a16e2560381ca2ce5b3a13b143ecc1f5038f47888da98e57c335158a273fdf->enter($__internal_04a16e2560381ca2ce5b3a13b143ecc1f5038f47888da98e57c335158a273fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_c69068fff15f1b2e7fa057914d52403ffc272d891b6b81ce850275fccbdc3a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69068fff15f1b2e7fa057914d52403ffc272d891b6b81ce850275fccbdc3a27->enter($__internal_c69068fff15f1b2e7fa057914d52403ffc272d891b6b81ce850275fccbdc3a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a16e2560381ca2ce5b3a13b143ecc1f5038f47888da98e57c335158a273fdf->leave($__internal_04a16e2560381ca2ce5b3a13b143ecc1f5038f47888da98e57c335158a273fdf_prof);

        
        $__internal_c69068fff15f1b2e7fa057914d52403ffc272d891b6b81ce850275fccbdc3a27->leave($__internal_c69068fff15f1b2e7fa057914d52403ffc272d891b6b81ce850275fccbdc3a27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46dc55e4465b90374defbeadb191b43d33a9eb98d72bb63a591bdd9a4bcc873e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dc55e4465b90374defbeadb191b43d33a9eb98d72bb63a591bdd9a4bcc873e->enter($__internal_46dc55e4465b90374defbeadb191b43d33a9eb98d72bb63a591bdd9a4bcc873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e5258c1bcd22701ee57c79f97ff05e751cbfef6f3bcfbf0dbec583dc4fb35e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5258c1bcd22701ee57c79f97ff05e751cbfef6f3bcfbf0dbec583dc4fb35e9->enter($__internal_2e5258c1bcd22701ee57c79f97ff05e751cbfef6f3bcfbf0dbec583dc4fb35e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e5258c1bcd22701ee57c79f97ff05e751cbfef6f3bcfbf0dbec583dc4fb35e9->leave($__internal_2e5258c1bcd22701ee57c79f97ff05e751cbfef6f3bcfbf0dbec583dc4fb35e9_prof);

        
        $__internal_46dc55e4465b90374defbeadb191b43d33a9eb98d72bb63a591bdd9a4bcc873e->leave($__internal_46dc55e4465b90374defbeadb191b43d33a9eb98d72bb63a591bdd9a4bcc873e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fcbd8aea6f52f2a162931baf3201b232269282242db6af8e67979d4de334377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbd8aea6f52f2a162931baf3201b232269282242db6af8e67979d4de334377a->enter($__internal_fcbd8aea6f52f2a162931baf3201b232269282242db6af8e67979d4de334377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_71f9a80cbf33521b9d426e451003b9ba3058a2f1305274492cd59cb3d2f9b71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f9a80cbf33521b9d426e451003b9ba3058a2f1305274492cd59cb3d2f9b71c->enter($__internal_71f9a80cbf33521b9d426e451003b9ba3058a2f1305274492cd59cb3d2f9b71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()))) {
            // line 14
            echo "      <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        height=\"60\"
      />
    ";
        }
        // line 20
        echo "  </div>

  <h2>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 22, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 23, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 23, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 26, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 29, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 30
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 32, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 34
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </p>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 38, $this->getSourceContext()); })())) > 0)) {
            // line 39
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 42, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 43
                echo "          <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </ul>
    </div>
  ";
        }
        // line 48
        echo "
  <p>
    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 54, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 58, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_71f9a80cbf33521b9d426e451003b9ba3058a2f1305274492cd59cb3d2f9b71c->leave($__internal_71f9a80cbf33521b9d426e451003b9ba3058a2f1305274492cd59cb3d2f9b71c_prof);

        
        $__internal_fcbd8aea6f52f2a162931baf3201b232269282242db6af8e67979d4de334377a->leave($__internal_fcbd8aea6f52f2a162931baf3201b232269282242db6af8e67979d4de334377a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 58,  203 => 54,  196 => 50,  192 => 48,  187 => 45,  176 => 43,  172 => 42,  167 => 39,  165 => 38,  162 => 37,  158 => 35,  144 => 34,  138 => 33,  121 => 32,  117 => 30,  115 => 29,  109 => 26,  101 => 23,  97 => 22,  93 => 20,  86 => 16,  82 => 15,  79 => 14,  76 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <div style=\"float: left; margin-right: 1em;\">
    {# On vérifie qu'une image soit bien associée à l'article #}
    {% if advert.image is not null %}
      <img
        src=\"{{ asset(advert.image.webPath) }}\"
        alt=\"{{ advert.image.alt }}\"
        height=\"60\"
      />
    {% endif %}
  </div>

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  {% if not advert.categories.empty %}
    <p>
      Cette annonce est parue dans les catégories suivantes :
      {% for category in advert.categories %}
        {{ category.name }}{% if not loop.last %}, {% endif %}
      {% endfor %}
    </p>
  {% endif %}

  {% if listAdvertSkills|length > 0 %}
    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        {% for advertSkill in listAdvertSkills %}
          <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
