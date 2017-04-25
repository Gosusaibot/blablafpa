<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_efcfec5cb9f68899e62b7f333b858e088ac51b80313eb16eae944918cecbba6b extends Twig_Template
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
        $__internal_6c43d7ac5a3d45255bdfcf5375585ae5089877b433dbfedfc5497f7245e8c208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c43d7ac5a3d45255bdfcf5375585ae5089877b433dbfedfc5497f7245e8c208->enter($__internal_6c43d7ac5a3d45255bdfcf5375585ae5089877b433dbfedfc5497f7245e8c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_6b9df5d5ac359b3a723d354ebfd0acef173db187e1f8bf923d001503ea5c32ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9df5d5ac359b3a723d354ebfd0acef173db187e1f8bf923d001503ea5c32ad->enter($__internal_6b9df5d5ac359b3a723d354ebfd0acef173db187e1f8bf923d001503ea5c32ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_6c43d7ac5a3d45255bdfcf5375585ae5089877b433dbfedfc5497f7245e8c208->leave($__internal_6c43d7ac5a3d45255bdfcf5375585ae5089877b433dbfedfc5497f7245e8c208_prof);

        
        $__internal_6b9df5d5ac359b3a723d354ebfd0acef173db187e1f8bf923d001503ea5c32ad->leave($__internal_6b9df5d5ac359b3a723d354ebfd0acef173db187e1f8bf923d001503ea5c32ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aa0d1efbdd5da07db36ba59cd920383638c688c668e951bb22f4f27d5dfe130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0d1efbdd5da07db36ba59cd920383638c688c668e951bb22f4f27d5dfe130->enter($__internal_8aa0d1efbdd5da07db36ba59cd920383638c688c668e951bb22f4f27d5dfe130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf3dc7273b7de3a191e058f40e4d885d0541d235283a7a9cc296f7f9395573a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3dc7273b7de3a191e058f40e4d885d0541d235283a7a9cc296f7f9395573a3->enter($__internal_cf3dc7273b7de3a191e058f40e4d885d0541d235283a7a9cc296f7f9395573a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_cf3dc7273b7de3a191e058f40e4d885d0541d235283a7a9cc296f7f9395573a3->leave($__internal_cf3dc7273b7de3a191e058f40e4d885d0541d235283a7a9cc296f7f9395573a3_prof);

        
        $__internal_8aa0d1efbdd5da07db36ba59cd920383638c688c668e951bb22f4f27d5dfe130->leave($__internal_8aa0d1efbdd5da07db36ba59cd920383638c688c668e951bb22f4f27d5dfe130_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70d542079bfef3c90ffe7c426db66f2f41a1e99288f01c5fbe1801588505b30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d542079bfef3c90ffe7c426db66f2f41a1e99288f01c5fbe1801588505b30a->enter($__internal_70d542079bfef3c90ffe7c426db66f2f41a1e99288f01c5fbe1801588505b30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_553534100697cb7dd7fe3ddebece6c388597745fc2bd1309a71785cf469cacac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553534100697cb7dd7fe3ddebece6c388597745fc2bd1309a71785cf469cacac->enter($__internal_553534100697cb7dd7fe3ddebece6c388597745fc2bd1309a71785cf469cacac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_553534100697cb7dd7fe3ddebece6c388597745fc2bd1309a71785cf469cacac->leave($__internal_553534100697cb7dd7fe3ddebece6c388597745fc2bd1309a71785cf469cacac_prof);

        
        $__internal_70d542079bfef3c90ffe7c426db66f2f41a1e99288f01c5fbe1801588505b30a->leave($__internal_70d542079bfef3c90ffe7c426db66f2f41a1e99288f01c5fbe1801588505b30a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_14c73707268df8889999f8c57f155c12929a15b4f714e7d836d1faff48055b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c73707268df8889999f8c57f155c12929a15b4f714e7d836d1faff48055b25->enter($__internal_14c73707268df8889999f8c57f155c12929a15b4f714e7d836d1faff48055b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddf67e428b090acf76c4234d2bf037d2b0362517c469dcbfd510f0f1bd6fe8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf67e428b090acf76c4234d2bf037d2b0362517c469dcbfd510f0f1bd6fe8ff->enter($__internal_ddf67e428b090acf76c4234d2bf037d2b0362517c469dcbfd510f0f1bd6fe8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_ddf67e428b090acf76c4234d2bf037d2b0362517c469dcbfd510f0f1bd6fe8ff->leave($__internal_ddf67e428b090acf76c4234d2bf037d2b0362517c469dcbfd510f0f1bd6fe8ff_prof);

        
        $__internal_14c73707268df8889999f8c57f155c12929a15b4f714e7d836d1faff48055b25->leave($__internal_14c73707268df8889999f8c57f155c12929a15b4f714e7d836d1faff48055b25_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7aa794f4cb6ecd9c7fc7643497c670aae9afa007acec5d54c36f2705042a95fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa794f4cb6ecd9c7fc7643497c670aae9afa007acec5d54c36f2705042a95fb->enter($__internal_7aa794f4cb6ecd9c7fc7643497c670aae9afa007acec5d54c36f2705042a95fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82b59158bcf55b4f29b7ca0d82644458751ca121708448e4aa5dc521b801d5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b59158bcf55b4f29b7ca0d82644458751ca121708448e4aa5dc521b801d5da->enter($__internal_82b59158bcf55b4f29b7ca0d82644458751ca121708448e4aa5dc521b801d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_82b59158bcf55b4f29b7ca0d82644458751ca121708448e4aa5dc521b801d5da->leave($__internal_82b59158bcf55b4f29b7ca0d82644458751ca121708448e4aa5dc521b801d5da_prof);

        
        $__internal_7aa794f4cb6ecd9c7fc7643497c670aae9afa007acec5d54c36f2705042a95fb->leave($__internal_7aa794f4cb6ecd9c7fc7643497c670aae9afa007acec5d54c36f2705042a95fb_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/blablafpa/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
