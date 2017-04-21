<?php

/* base.html.twig */
class __TwigTemplate_c9c9d0200da21e996e9e6c0abafa610a04c8d5b9f827498494ad664ea05534af extends Twig_Template
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
        $__internal_5cce5e5746f83b91c482a0d5ab7e729b254edf8346128ab766bb73a2d47597a9 = $this->env->getExtension("native_profiler");
        $__internal_5cce5e5746f83b91c482a0d5ab7e729b254edf8346128ab766bb73a2d47597a9->enter($__internal_5cce5e5746f83b91c482a0d5ab7e729b254edf8346128ab766bb73a2d47597a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5cce5e5746f83b91c482a0d5ab7e729b254edf8346128ab766bb73a2d47597a9->leave($__internal_5cce5e5746f83b91c482a0d5ab7e729b254edf8346128ab766bb73a2d47597a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab90d73a012a77bc2606e9c10ac6a4215a1772d4696e7f269708b5c2fad97c7d = $this->env->getExtension("native_profiler");
        $__internal_ab90d73a012a77bc2606e9c10ac6a4215a1772d4696e7f269708b5c2fad97c7d->enter($__internal_ab90d73a012a77bc2606e9c10ac6a4215a1772d4696e7f269708b5c2fad97c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab90d73a012a77bc2606e9c10ac6a4215a1772d4696e7f269708b5c2fad97c7d->leave($__internal_ab90d73a012a77bc2606e9c10ac6a4215a1772d4696e7f269708b5c2fad97c7d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1489213a31ad5437cc6717a2ffcf3bac192719696519d34eafdc33a8f793b6fe = $this->env->getExtension("native_profiler");
        $__internal_1489213a31ad5437cc6717a2ffcf3bac192719696519d34eafdc33a8f793b6fe->enter($__internal_1489213a31ad5437cc6717a2ffcf3bac192719696519d34eafdc33a8f793b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1489213a31ad5437cc6717a2ffcf3bac192719696519d34eafdc33a8f793b6fe->leave($__internal_1489213a31ad5437cc6717a2ffcf3bac192719696519d34eafdc33a8f793b6fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_409e06b904760eabcdf91c008bed9d652154867dde7bd12b4ce58783bf6d5d56 = $this->env->getExtension("native_profiler");
        $__internal_409e06b904760eabcdf91c008bed9d652154867dde7bd12b4ce58783bf6d5d56->enter($__internal_409e06b904760eabcdf91c008bed9d652154867dde7bd12b4ce58783bf6d5d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_409e06b904760eabcdf91c008bed9d652154867dde7bd12b4ce58783bf6d5d56->leave($__internal_409e06b904760eabcdf91c008bed9d652154867dde7bd12b4ce58783bf6d5d56_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b031afee8f93a6b8018c525c3b0cf1f0d915ec21e3f777eac50ed24a09c39e9 = $this->env->getExtension("native_profiler");
        $__internal_3b031afee8f93a6b8018c525c3b0cf1f0d915ec21e3f777eac50ed24a09c39e9->enter($__internal_3b031afee8f93a6b8018c525c3b0cf1f0d915ec21e3f777eac50ed24a09c39e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b031afee8f93a6b8018c525c3b0cf1f0d915ec21e3f777eac50ed24a09c39e9->leave($__internal_3b031afee8f93a6b8018c525c3b0cf1f0d915ec21e3f777eac50ed24a09c39e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
