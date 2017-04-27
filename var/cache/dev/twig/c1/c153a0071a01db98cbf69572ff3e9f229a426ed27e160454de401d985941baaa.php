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
        $__internal_61441eb592f8091c404aa8112ae38b588132c61e3dbe5e3ecb94d818ad34b652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61441eb592f8091c404aa8112ae38b588132c61e3dbe5e3ecb94d818ad34b652->enter($__internal_61441eb592f8091c404aa8112ae38b588132c61e3dbe5e3ecb94d818ad34b652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_d1f6a8a406d6b1b74217547eb8514db8adcc2b21af87f8fb71f5c8b20c8b48da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f6a8a406d6b1b74217547eb8514db8adcc2b21af87f8fb71f5c8b20c8b48da->enter($__internal_d1f6a8a406d6b1b74217547eb8514db8adcc2b21af87f8fb71f5c8b20c8b48da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_61441eb592f8091c404aa8112ae38b588132c61e3dbe5e3ecb94d818ad34b652->leave($__internal_61441eb592f8091c404aa8112ae38b588132c61e3dbe5e3ecb94d818ad34b652_prof);

        
        $__internal_d1f6a8a406d6b1b74217547eb8514db8adcc2b21af87f8fb71f5c8b20c8b48da->leave($__internal_d1f6a8a406d6b1b74217547eb8514db8adcc2b21af87f8fb71f5c8b20c8b48da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da49ea9bf9e6c16099913aa35ec9bd8e4d3a6a09cbb7011b18848a5bb2b2d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da49ea9bf9e6c16099913aa35ec9bd8e4d3a6a09cbb7011b18848a5bb2b2d67->enter($__internal_2da49ea9bf9e6c16099913aa35ec9bd8e4d3a6a09cbb7011b18848a5bb2b2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6dcf1f447eaeb1b7198a42b47bd55157cf6875efc01ed7a967ec9342d269e455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcf1f447eaeb1b7198a42b47bd55157cf6875efc01ed7a967ec9342d269e455->enter($__internal_6dcf1f447eaeb1b7198a42b47bd55157cf6875efc01ed7a967ec9342d269e455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_6dcf1f447eaeb1b7198a42b47bd55157cf6875efc01ed7a967ec9342d269e455->leave($__internal_6dcf1f447eaeb1b7198a42b47bd55157cf6875efc01ed7a967ec9342d269e455_prof);

        
        $__internal_2da49ea9bf9e6c16099913aa35ec9bd8e4d3a6a09cbb7011b18848a5bb2b2d67->leave($__internal_2da49ea9bf9e6c16099913aa35ec9bd8e4d3a6a09cbb7011b18848a5bb2b2d67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c783891894bf414852e2f4205b1e50aa3ff8ddbb17b8a33b4eddf1110ce0487d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c783891894bf414852e2f4205b1e50aa3ff8ddbb17b8a33b4eddf1110ce0487d->enter($__internal_c783891894bf414852e2f4205b1e50aa3ff8ddbb17b8a33b4eddf1110ce0487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b31ef4cf901a625290fe7e49d42b1910180d606218d3075c2001be24f9875281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31ef4cf901a625290fe7e49d42b1910180d606218d3075c2001be24f9875281->enter($__internal_b31ef4cf901a625290fe7e49d42b1910180d606218d3075c2001be24f9875281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_b31ef4cf901a625290fe7e49d42b1910180d606218d3075c2001be24f9875281->leave($__internal_b31ef4cf901a625290fe7e49d42b1910180d606218d3075c2001be24f9875281_prof);

        
        $__internal_c783891894bf414852e2f4205b1e50aa3ff8ddbb17b8a33b4eddf1110ce0487d->leave($__internal_c783891894bf414852e2f4205b1e50aa3ff8ddbb17b8a33b4eddf1110ce0487d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_612b06e82abd29d8d97b890a6efbcca041423e1e2b2ec54734e8725868368f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612b06e82abd29d8d97b890a6efbcca041423e1e2b2ec54734e8725868368f7b->enter($__internal_612b06e82abd29d8d97b890a6efbcca041423e1e2b2ec54734e8725868368f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adb9fca8cbb030727e0faf2ab69d69edd8dce3b3a9033cf7cb6df7d30b111f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb9fca8cbb030727e0faf2ab69d69edd8dce3b3a9033cf7cb6df7d30b111f5a->enter($__internal_adb9fca8cbb030727e0faf2ab69d69edd8dce3b3a9033cf7cb6df7d30b111f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_adb9fca8cbb030727e0faf2ab69d69edd8dce3b3a9033cf7cb6df7d30b111f5a->leave($__internal_adb9fca8cbb030727e0faf2ab69d69edd8dce3b3a9033cf7cb6df7d30b111f5a_prof);

        
        $__internal_612b06e82abd29d8d97b890a6efbcca041423e1e2b2ec54734e8725868368f7b->leave($__internal_612b06e82abd29d8d97b890a6efbcca041423e1e2b2ec54734e8725868368f7b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2687beaacad048b8c6690ab61e926dd42b0dd0642e8fa4e57d1555e776f49b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2687beaacad048b8c6690ab61e926dd42b0dd0642e8fa4e57d1555e776f49b92->enter($__internal_2687beaacad048b8c6690ab61e926dd42b0dd0642e8fa4e57d1555e776f49b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_082fb1d310041919a6fedb8a7e7321e624ea8f06f240e1c7b7e15bb7e387fe9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082fb1d310041919a6fedb8a7e7321e624ea8f06f240e1c7b7e15bb7e387fe9d->enter($__internal_082fb1d310041919a6fedb8a7e7321e624ea8f06f240e1c7b7e15bb7e387fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_082fb1d310041919a6fedb8a7e7321e624ea8f06f240e1c7b7e15bb7e387fe9d->leave($__internal_082fb1d310041919a6fedb8a7e7321e624ea8f06f240e1c7b7e15bb7e387fe9d_prof);

        
        $__internal_2687beaacad048b8c6690ab61e926dd42b0dd0642e8fa4e57d1555e776f49b92->leave($__internal_2687beaacad048b8c6690ab61e926dd42b0dd0642e8fa4e57d1555e776f49b92_prof);

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
