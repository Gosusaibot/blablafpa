<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_66f9ecc2c4c1e71407fa0e9422dc10837ee7f2516bf36afa2fee822428ed6854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f0bccf6f79a112261dcb191251cf2f8bd98cac27327bd50b362d7eb17939706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0bccf6f79a112261dcb191251cf2f8bd98cac27327bd50b362d7eb17939706->enter($__internal_0f0bccf6f79a112261dcb191251cf2f8bd98cac27327bd50b362d7eb17939706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4f1ae05dd630fccdc2d052d491f2434558c9508735ebccbf9a594f554fdae89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1ae05dd630fccdc2d052d491f2434558c9508735ebccbf9a594f554fdae89d->enter($__internal_4f1ae05dd630fccdc2d052d491f2434558c9508735ebccbf9a594f554fdae89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f0bccf6f79a112261dcb191251cf2f8bd98cac27327bd50b362d7eb17939706->leave($__internal_0f0bccf6f79a112261dcb191251cf2f8bd98cac27327bd50b362d7eb17939706_prof);

        
        $__internal_4f1ae05dd630fccdc2d052d491f2434558c9508735ebccbf9a594f554fdae89d->leave($__internal_4f1ae05dd630fccdc2d052d491f2434558c9508735ebccbf9a594f554fdae89d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54cab2145626fd400d218b3ffdd7ff5aa0f4991a57607af078a4df504c93bd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cab2145626fd400d218b3ffdd7ff5aa0f4991a57607af078a4df504c93bd96->enter($__internal_54cab2145626fd400d218b3ffdd7ff5aa0f4991a57607af078a4df504c93bd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcb2384e3fd89d7ee697ad67f907245d55c38689c7a045ad5b5a404cbfafaaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb2384e3fd89d7ee697ad67f907245d55c38689c7a045ad5b5a404cbfafaaea->enter($__internal_fcb2384e3fd89d7ee697ad67f907245d55c38689c7a045ad5b5a404cbfafaaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fcb2384e3fd89d7ee697ad67f907245d55c38689c7a045ad5b5a404cbfafaaea->leave($__internal_fcb2384e3fd89d7ee697ad67f907245d55c38689c7a045ad5b5a404cbfafaaea_prof);

        
        $__internal_54cab2145626fd400d218b3ffdd7ff5aa0f4991a57607af078a4df504c93bd96->leave($__internal_54cab2145626fd400d218b3ffdd7ff5aa0f4991a57607af078a4df504c93bd96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_362484388a1b32e0944977db222621d6a51cb3660ad0e7200e8fe707ca168989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362484388a1b32e0944977db222621d6a51cb3660ad0e7200e8fe707ca168989->enter($__internal_362484388a1b32e0944977db222621d6a51cb3660ad0e7200e8fe707ca168989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_084a95dc8aeb96832b0322db2971e62a8f6a0a8e43165e71645eab0e5e7b5367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084a95dc8aeb96832b0322db2971e62a8f6a0a8e43165e71645eab0e5e7b5367->enter($__internal_084a95dc8aeb96832b0322db2971e62a8f6a0a8e43165e71645eab0e5e7b5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_084a95dc8aeb96832b0322db2971e62a8f6a0a8e43165e71645eab0e5e7b5367->leave($__internal_084a95dc8aeb96832b0322db2971e62a8f6a0a8e43165e71645eab0e5e7b5367_prof);

        
        $__internal_362484388a1b32e0944977db222621d6a51cb3660ad0e7200e8fe707ca168989->leave($__internal_362484388a1b32e0944977db222621d6a51cb3660ad0e7200e8fe707ca168989_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/blablafpa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
