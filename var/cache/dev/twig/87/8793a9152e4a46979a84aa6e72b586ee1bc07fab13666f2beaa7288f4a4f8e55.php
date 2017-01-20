<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9c4cf3681950fe0be1da0d7745c39354af56b90ca63dc8b9b5902b09343ca5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10d5798090a1141b9c7456a4a4cca263f3f607cfb195cd329752bc71399d393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10d5798090a1141b9c7456a4a4cca263f3f607cfb195cd329752bc71399d393->enter($__internal_d10d5798090a1141b9c7456a4a4cca263f3f607cfb195cd329752bc71399d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_dedc7689e37310804fe916caeea51f1b1db601292518922774fa003fb643deab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedc7689e37310804fe916caeea51f1b1db601292518922774fa003fb643deab->enter($__internal_dedc7689e37310804fe916caeea51f1b1db601292518922774fa003fb643deab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10d5798090a1141b9c7456a4a4cca263f3f607cfb195cd329752bc71399d393->leave($__internal_d10d5798090a1141b9c7456a4a4cca263f3f607cfb195cd329752bc71399d393_prof);

        
        $__internal_dedc7689e37310804fe916caeea51f1b1db601292518922774fa003fb643deab->leave($__internal_dedc7689e37310804fe916caeea51f1b1db601292518922774fa003fb643deab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_461811e9618009c9ff46434facc5ddc3faf626273bbf346f4c3b7960d9d14503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461811e9618009c9ff46434facc5ddc3faf626273bbf346f4c3b7960d9d14503->enter($__internal_461811e9618009c9ff46434facc5ddc3faf626273bbf346f4c3b7960d9d14503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96a6b5899f301bfa3f4cbaa0a0f0dd8ddfb95377cc261844475d393197aa2586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a6b5899f301bfa3f4cbaa0a0f0dd8ddfb95377cc261844475d393197aa2586->enter($__internal_96a6b5899f301bfa3f4cbaa0a0f0dd8ddfb95377cc261844475d393197aa2586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_96a6b5899f301bfa3f4cbaa0a0f0dd8ddfb95377cc261844475d393197aa2586->leave($__internal_96a6b5899f301bfa3f4cbaa0a0f0dd8ddfb95377cc261844475d393197aa2586_prof);

        
        $__internal_461811e9618009c9ff46434facc5ddc3faf626273bbf346f4c3b7960d9d14503->leave($__internal_461811e9618009c9ff46434facc5ddc3faf626273bbf346f4c3b7960d9d14503_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb9d0651b08d72414a640508b312fd3369cd371bd2113f26faf1d6ac296d202d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9d0651b08d72414a640508b312fd3369cd371bd2113f26faf1d6ac296d202d->enter($__internal_cb9d0651b08d72414a640508b312fd3369cd371bd2113f26faf1d6ac296d202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ee404133b76a27b019341c5c938d53a152ac9aec61b5a06bee01fdbedbeda82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee404133b76a27b019341c5c938d53a152ac9aec61b5a06bee01fdbedbeda82->enter($__internal_1ee404133b76a27b019341c5c938d53a152ac9aec61b5a06bee01fdbedbeda82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_1ee404133b76a27b019341c5c938d53a152ac9aec61b5a06bee01fdbedbeda82->leave($__internal_1ee404133b76a27b019341c5c938d53a152ac9aec61b5a06bee01fdbedbeda82_prof);

        
        $__internal_cb9d0651b08d72414a640508b312fd3369cd371bd2113f26faf1d6ac296d202d->leave($__internal_cb9d0651b08d72414a640508b312fd3369cd371bd2113f26faf1d6ac296d202d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
