<?php

/* ::base.html.twig */
class __TwigTemplate_0c0e5d50a747b1ad4b2e6a4567645209d72480a26c9b5e001975334786101e81 extends Twig_Template
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
        $__internal_d9f45c0328e2c35a3e9952c25bac7b91d696a267e6432d5caee68a03e1a31543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f45c0328e2c35a3e9952c25bac7b91d696a267e6432d5caee68a03e1a31543->enter($__internal_d9f45c0328e2c35a3e9952c25bac7b91d696a267e6432d5caee68a03e1a31543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8bb1113eeb790dea0ceb6259d9f6f9a78551594b223c137f2e3a56b95b83b63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb1113eeb790dea0ceb6259d9f6f9a78551594b223c137f2e3a56b95b83b63a->enter($__internal_8bb1113eeb790dea0ceb6259d9f6f9a78551594b223c137f2e3a56b95b83b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_d9f45c0328e2c35a3e9952c25bac7b91d696a267e6432d5caee68a03e1a31543->leave($__internal_d9f45c0328e2c35a3e9952c25bac7b91d696a267e6432d5caee68a03e1a31543_prof);

        
        $__internal_8bb1113eeb790dea0ceb6259d9f6f9a78551594b223c137f2e3a56b95b83b63a->leave($__internal_8bb1113eeb790dea0ceb6259d9f6f9a78551594b223c137f2e3a56b95b83b63a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eefbe82fda22d03ef68bee5af2fbfbf3cb426cfa0136708030a06f6831af15cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefbe82fda22d03ef68bee5af2fbfbf3cb426cfa0136708030a06f6831af15cf->enter($__internal_eefbe82fda22d03ef68bee5af2fbfbf3cb426cfa0136708030a06f6831af15cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e0e6bbc610fb77af3cacdaff01093b4d0bf9a82752fba9559707764347e3184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0e6bbc610fb77af3cacdaff01093b4d0bf9a82752fba9559707764347e3184->enter($__internal_8e0e6bbc610fb77af3cacdaff01093b4d0bf9a82752fba9559707764347e3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e0e6bbc610fb77af3cacdaff01093b4d0bf9a82752fba9559707764347e3184->leave($__internal_8e0e6bbc610fb77af3cacdaff01093b4d0bf9a82752fba9559707764347e3184_prof);

        
        $__internal_eefbe82fda22d03ef68bee5af2fbfbf3cb426cfa0136708030a06f6831af15cf->leave($__internal_eefbe82fda22d03ef68bee5af2fbfbf3cb426cfa0136708030a06f6831af15cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_302c41368deefbea1ad246619759f2973a390c8bcc9b89b9debc92fcd158bdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302c41368deefbea1ad246619759f2973a390c8bcc9b89b9debc92fcd158bdf2->enter($__internal_302c41368deefbea1ad246619759f2973a390c8bcc9b89b9debc92fcd158bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c3fc4a63de27345a2bd2395a2f16768f7b6d2a2c1343fa6596163d9b8e623cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fc4a63de27345a2bd2395a2f16768f7b6d2a2c1343fa6596163d9b8e623cf9->enter($__internal_c3fc4a63de27345a2bd2395a2f16768f7b6d2a2c1343fa6596163d9b8e623cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c3fc4a63de27345a2bd2395a2f16768f7b6d2a2c1343fa6596163d9b8e623cf9->leave($__internal_c3fc4a63de27345a2bd2395a2f16768f7b6d2a2c1343fa6596163d9b8e623cf9_prof);

        
        $__internal_302c41368deefbea1ad246619759f2973a390c8bcc9b89b9debc92fcd158bdf2->leave($__internal_302c41368deefbea1ad246619759f2973a390c8bcc9b89b9debc92fcd158bdf2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7252fcd22003d0e3b6b976ddfb3c40ac3a437139c3031a8e3a49abbdc98ea74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7252fcd22003d0e3b6b976ddfb3c40ac3a437139c3031a8e3a49abbdc98ea74e->enter($__internal_7252fcd22003d0e3b6b976ddfb3c40ac3a437139c3031a8e3a49abbdc98ea74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55f3995f5422004f4f6f65d67b2f83a7a82914da81596c28983220a7cfebc1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f3995f5422004f4f6f65d67b2f83a7a82914da81596c28983220a7cfebc1d7->enter($__internal_55f3995f5422004f4f6f65d67b2f83a7a82914da81596c28983220a7cfebc1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55f3995f5422004f4f6f65d67b2f83a7a82914da81596c28983220a7cfebc1d7->leave($__internal_55f3995f5422004f4f6f65d67b2f83a7a82914da81596c28983220a7cfebc1d7_prof);

        
        $__internal_7252fcd22003d0e3b6b976ddfb3c40ac3a437139c3031a8e3a49abbdc98ea74e->leave($__internal_7252fcd22003d0e3b6b976ddfb3c40ac3a437139c3031a8e3a49abbdc98ea74e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04fddd84978229028389da5ce4d6a220f2a8e1076dff6cb3c703e678e66e656f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fddd84978229028389da5ce4d6a220f2a8e1076dff6cb3c703e678e66e656f->enter($__internal_04fddd84978229028389da5ce4d6a220f2a8e1076dff6cb3c703e678e66e656f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_661cd5ec25192c2ab1e4c9ec591ab07b46bbf3e93d63be51ef1e514b08817bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661cd5ec25192c2ab1e4c9ec591ab07b46bbf3e93d63be51ef1e514b08817bc0->enter($__internal_661cd5ec25192c2ab1e4c9ec591ab07b46bbf3e93d63be51ef1e514b08817bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_661cd5ec25192c2ab1e4c9ec591ab07b46bbf3e93d63be51ef1e514b08817bc0->leave($__internal_661cd5ec25192c2ab1e4c9ec591ab07b46bbf3e93d63be51ef1e514b08817bc0_prof);

        
        $__internal_04fddd84978229028389da5ce4d6a220f2a8e1076dff6cb3c703e678e66e656f->leave($__internal_04fddd84978229028389da5ce4d6a220f2a8e1076dff6cb3c703e678e66e656f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/blablafpa/app/Resources/views/base.html.twig");
    }
}
