<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_7b16d66d5cec677a6b5bd2357625d1879ddf679ca2732270774cefa5b5d03713 extends Twig_Template
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
        $__internal_729d6f4c39b8328292121b3de7898a071b81610c33f696986bb3d2efd73b9c67 = $this->env->getExtension("native_profiler");
        $__internal_729d6f4c39b8328292121b3de7898a071b81610c33f696986bb3d2efd73b9c67->enter($__internal_729d6f4c39b8328292121b3de7898a071b81610c33f696986bb3d2efd73b9c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 43
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oc_platform_add");
            echo "\">Ajouter une annonce</a></li>
          ";
        }
        // line 45
        echo "        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

        <h3>Utilisateur</h3>
        ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 52
            echo "          Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
          <br>
          <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 56
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
        ";
        }
        // line 58
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "
  </body>
</html>
";
        
        $__internal_729d6f4c39b8328292121b3de7898a071b81610c33f696986bb3d2efd73b9c67->leave($__internal_729d6f4c39b8328292121b3de7898a071b81610c33f696986bb3d2efd73b9c67_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_72a4ad5706fb1afb9d08530eb104d3445b0a16284643edfdeafd6360ce81a149 = $this->env->getExtension("native_profiler");
        $__internal_72a4ad5706fb1afb9d08530eb104d3445b0a16284643edfdeafd6360ce81a149->enter($__internal_72a4ad5706fb1afb9d08530eb104d3445b0a16284643edfdeafd6360ce81a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_72a4ad5706fb1afb9d08530eb104d3445b0a16284643edfdeafd6360ce81a149->leave($__internal_72a4ad5706fb1afb9d08530eb104d3445b0a16284643edfdeafd6360ce81a149_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfd347f3191e6bd0261080164a07b2705bcf7d0cd3d0d976a5d5be973e4d33a4 = $this->env->getExtension("native_profiler");
        $__internal_bfd347f3191e6bd0261080164a07b2705bcf7d0cd3d0d976a5d5be973e4d33a4->enter($__internal_bfd347f3191e6bd0261080164a07b2705bcf7d0cd3d0d976a5d5be973e4d33a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

      ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dee2c48_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dee2c48_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dee2c48_main_1.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "dee2c48_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dee2c48_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dee2c48_platform_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "dee2c48"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dee2c48") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dee2c48.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    ";
        
        $__internal_bfd347f3191e6bd0261080164a07b2705bcf7d0cd3d0d976a5d5be973e4d33a4->leave($__internal_bfd347f3191e6bd0261080164a07b2705bcf7d0cd3d0d976a5d5be973e4d33a4_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0ec19a51ae407425dd9b40fb2f0cd88803bb2ff3e64407da0bef1bb0495cd2 = $this->env->getExtension("native_profiler");
        $__internal_2d0ec19a51ae407425dd9b40fb2f0cd88803bb2ff3e64407da0bef1bb0495cd2->enter($__internal_2d0ec19a51ae407425dd9b40fb2f0cd88803bb2ff3e64407da0bef1bb0495cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "        ";
        
        $__internal_2d0ec19a51ae407425dd9b40fb2f0cd88803bb2ff3e64407da0bef1bb0495cd2->leave($__internal_2d0ec19a51ae407425dd9b40fb2f0cd88803bb2ff3e64407da0bef1bb0495cd2_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6ccf8af0925cac38f6ab816462fb52c82e4f97dcedb35b82a1b3a935c70330f = $this->env->getExtension("native_profiler");
        $__internal_f6ccf8af0925cac38f6ab816462fb52c82e4f97dcedb35b82a1b3a935c70330f->enter($__internal_f6ccf8af0925cac38f6ab816462fb52c82e4f97dcedb35b82a1b3a935c70330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        // line 74
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_f6ccf8af0925cac38f6ab816462fb52c82e4f97dcedb35b82a1b3a935c70330f->leave($__internal_f6ccf8af0925cac38f6ab816462fb52c82e4f97dcedb35b82a1b3a935c70330f_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  213 => 73,  207 => 72,  200 => 61,  194 => 60,  187 => 20,  167 => 18,  163 => 15,  159 => 13,  157 => 12,  151 => 11,  139 => 9,  129 => 77,  127 => 72,  120 => 68,  112 => 62,  110 => 60,  106 => 58,  100 => 56,  95 => 54,  89 => 52,  87 => 51,  81 => 48,  76 => 45,  70 => 43,  68 => 42,  64 => 41,  42 => 21,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* */
/*       {% stylesheets filter="cssrewrite, ?scssphp"*/
/*         'bundles/ocplatform/css/main.css'*/
/*         'bundles/ocplatform/css/platform.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*       {% endstylesheets %}*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           {% if is_granted('ROLE_AUTEUR') %}*/
/*             <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* */
/*         <h3>Utilisateur</h3>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           Connecté en tant que {{ app.user.username }}*/
/*           <br>*/
/*           <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*         {% else %}*/
/*           <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
