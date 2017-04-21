<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c5ebee0cdc30833bf0b96b13e05a03ec352b2a7fbbe9ce4a3df7b823e3c01f35 extends Twig_Template
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
        $__internal_83c9ac3a58655081f2f5d786b8bc99a522a819f8eb95f4dfa4094eab8a716fb0 = $this->env->getExtension("native_profiler");
        $__internal_83c9ac3a58655081f2f5d786b8bc99a522a819f8eb95f4dfa4094eab8a716fb0->enter($__internal_83c9ac3a58655081f2f5d786b8bc99a522a819f8eb95f4dfa4094eab8a716fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_83c9ac3a58655081f2f5d786b8bc99a522a819f8eb95f4dfa4094eab8a716fb0->leave($__internal_83c9ac3a58655081f2f5d786b8bc99a522a819f8eb95f4dfa4094eab8a716fb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
