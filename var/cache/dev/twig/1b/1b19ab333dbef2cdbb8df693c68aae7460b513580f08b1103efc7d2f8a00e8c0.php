<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_4a07d7e5e5d93bf65881b359ecf60fe489ece52e96e3435ab4072413cbee8745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a68d9429a967ba8f3f8251e92f31b45a5f8c02f1217f5e4819f03ecc0e58bcab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d9429a967ba8f3f8251e92f31b45a5f8c02f1217f5e4819f03ecc0e58bcab->enter($__internal_a68d9429a967ba8f3f8251e92f31b45a5f8c02f1217f5e4819f03ecc0e58bcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_348c79db64f382a0e4564c90779e8f1826bc04b27f40e34179c8e6b92571ed08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348c79db64f382a0e4564c90779e8f1826bc04b27f40e34179c8e6b92571ed08->enter($__internal_348c79db64f382a0e4564c90779e8f1826bc04b27f40e34179c8e6b92571ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        
        $__internal_a68d9429a967ba8f3f8251e92f31b45a5f8c02f1217f5e4819f03ecc0e58bcab->leave($__internal_a68d9429a967ba8f3f8251e92f31b45a5f8c02f1217f5e4819f03ecc0e58bcab_prof);

        
        $__internal_348c79db64f382a0e4564c90779e8f1826bc04b27f40e34179c8e6b92571ed08->leave($__internal_348c79db64f382a0e4564c90779e8f1826bc04b27f40e34179c8e6b92571ed08_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  43 => 9,  39 => 8,  36 => 7,  32 => 6,  28 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne, tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>
", "OCPlatformBundle:Advert:menu.html.twig", "/var/www/blablafpa/src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
