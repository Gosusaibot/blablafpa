<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_98b2a73d1aa9692508b6f0b988daaf785f7c6ed812cf61ddbea0778c9b186e3a extends Twig_Template
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
        $__internal_c4c9b4130e4e906d34ea6be54ed9fe8b072b73eecf15ab75b90cbd6e404580cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c9b4130e4e906d34ea6be54ed9fe8b072b73eecf15ab75b90cbd6e404580cc->enter($__internal_c4c9b4130e4e906d34ea6be54ed9fe8b072b73eecf15ab75b90cbd6e404580cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_f48a6f08090c653e3aff58239a8e546fea380543499dca72abee7852cd5a7232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48a6f08090c653e3aff58239a8e546fea380543499dca72abee7852cd5a7232->enter($__internal_f48a6f08090c653e3aff58239a8e546fea380543499dca72abee7852cd5a7232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c4c9b4130e4e906d34ea6be54ed9fe8b072b73eecf15ab75b90cbd6e404580cc->leave($__internal_c4c9b4130e4e906d34ea6be54ed9fe8b072b73eecf15ab75b90cbd6e404580cc_prof);

        
        $__internal_f48a6f08090c653e3aff58239a8e546fea380543499dca72abee7852cd5a7232->leave($__internal_f48a6f08090c653e3aff58239a8e546fea380543499dca72abee7852cd5a7232_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/blablafpa/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
