<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_a36f708a1bff1b17c4748b7ccb7950728b353aa81afad0d5fbdaf01d7fe43c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d2fc8bc068ef0391cb57c0702ee95b5f534f66b285a4074e9810780b34fc90 = $this->env->getExtension("native_profiler");
        $__internal_08d2fc8bc068ef0391cb57c0702ee95b5f534f66b285a4074e9810780b34fc90->enter($__internal_08d2fc8bc068ef0391cb57c0702ee95b5f534f66b285a4074e9810780b34fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d2fc8bc068ef0391cb57c0702ee95b5f534f66b285a4074e9810780b34fc90->leave($__internal_08d2fc8bc068ef0391cb57c0702ee95b5f534f66b285a4074e9810780b34fc90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3471201944b35b9514345ad73eb04508ad863284a9ecddfe6f83c94b685aa5ce = $this->env->getExtension("native_profiler");
        $__internal_3471201944b35b9514345ad73eb04508ad863284a9ecddfe6f83c94b685aa5ce->enter($__internal_3471201944b35b9514345ad73eb04508ad863284a9ecddfe6f83c94b685aa5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3471201944b35b9514345ad73eb04508ad863284a9ecddfe6f83c94b685aa5ce->leave($__internal_3471201944b35b9514345ad73eb04508ad863284a9ecddfe6f83c94b685aa5ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_addb2dcdc1c88f300717910b1541b7d6ce6cdd4f23eb7697de9ca88f80d32997 = $this->env->getExtension("native_profiler");
        $__internal_addb2dcdc1c88f300717910b1541b7d6ce6cdd4f23eb7697de9ca88f80d32997->enter($__internal_addb2dcdc1c88f300717910b1541b7d6ce6cdd4f23eb7697de9ca88f80d32997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_addb2dcdc1c88f300717910b1541b7d6ce6cdd4f23eb7697de9ca88f80d32997->leave($__internal_addb2dcdc1c88f300717910b1541b7d6ce6cdd4f23eb7697de9ca88f80d32997_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2a3180584e5a1abc7c8719a51d531524e6f254d223a810ee321805edec666aac = $this->env->getExtension("native_profiler");
        $__internal_2a3180584e5a1abc7c8719a51d531524e6f254d223a810ee321805edec666aac->enter($__internal_2a3180584e5a1abc7c8719a51d531524e6f254d223a810ee321805edec666aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_2a3180584e5a1abc7c8719a51d531524e6f254d223a810ee321805edec666aac->leave($__internal_2a3180584e5a1abc7c8719a51d531524e6f254d223a810ee321805edec666aac_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
