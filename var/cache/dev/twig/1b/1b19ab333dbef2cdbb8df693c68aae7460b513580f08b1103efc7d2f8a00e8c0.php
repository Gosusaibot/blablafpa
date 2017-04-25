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
        $__internal_80b54fbf1369467844578e4e78d898f42c85ededc7f5135fbace582254324cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b54fbf1369467844578e4e78d898f42c85ededc7f5135fbace582254324cc3->enter($__internal_80b54fbf1369467844578e4e78d898f42c85ededc7f5135fbace582254324cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_c2309e5e94837a1937a5403a92c28b9a190dc71f7ca030b268e5098b74315bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2309e5e94837a1937a5403a92c28b9a190dc71f7ca030b268e5098b74315bcc->enter($__internal_c2309e5e94837a1937a5403a92c28b9a190dc71f7ca030b268e5098b74315bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_80b54fbf1369467844578e4e78d898f42c85ededc7f5135fbace582254324cc3->leave($__internal_80b54fbf1369467844578e4e78d898f42c85ededc7f5135fbace582254324cc3_prof);

        
        $__internal_c2309e5e94837a1937a5403a92c28b9a190dc71f7ca030b268e5098b74315bcc->leave($__internal_c2309e5e94837a1937a5403a92c28b9a190dc71f7ca030b268e5098b74315bcc_prof);

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
