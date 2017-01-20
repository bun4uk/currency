<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_7dd8afeecb236ba90792a8ccdd8d9c09f9d966134314d6b950484217be87e112 extends Twig_Template
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
        $__internal_fb3bd3db50901b4946291a64b709552ac296b40261fac9f9946cb5d97cae844e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3bd3db50901b4946291a64b709552ac296b40261fac9f9946cb5d97cae844e->enter($__internal_fb3bd3db50901b4946291a64b709552ac296b40261fac9f9946cb5d97cae844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_dad83bdce58e3b586d647849245bd1442596e8398d5edb578138747d72a770bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad83bdce58e3b586d647849245bd1442596e8398d5edb578138747d72a770bc->enter($__internal_dad83bdce58e3b586d647849245bd1442596e8398d5edb578138747d72a770bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3bd3db50901b4946291a64b709552ac296b40261fac9f9946cb5d97cae844e->leave($__internal_fb3bd3db50901b4946291a64b709552ac296b40261fac9f9946cb5d97cae844e_prof);

        
        $__internal_dad83bdce58e3b586d647849245bd1442596e8398d5edb578138747d72a770bc->leave($__internal_dad83bdce58e3b586d647849245bd1442596e8398d5edb578138747d72a770bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f184ad2b046d12b9a9d274f361f110979c7476a3796b4ea151a2b62f303c578d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f184ad2b046d12b9a9d274f361f110979c7476a3796b4ea151a2b62f303c578d->enter($__internal_f184ad2b046d12b9a9d274f361f110979c7476a3796b4ea151a2b62f303c578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31c19f79d4f25ac3e507ed62c7ae2ebc83bcde1f4f57951d19695bdc572d2074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c19f79d4f25ac3e507ed62c7ae2ebc83bcde1f4f57951d19695bdc572d2074->enter($__internal_31c19f79d4f25ac3e507ed62c7ae2ebc83bcde1f4f57951d19695bdc572d2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_31c19f79d4f25ac3e507ed62c7ae2ebc83bcde1f4f57951d19695bdc572d2074->leave($__internal_31c19f79d4f25ac3e507ed62c7ae2ebc83bcde1f4f57951d19695bdc572d2074_prof);

        
        $__internal_f184ad2b046d12b9a9d274f361f110979c7476a3796b4ea151a2b62f303c578d->leave($__internal_f184ad2b046d12b9a9d274f361f110979c7476a3796b4ea151a2b62f303c578d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6cd72479e26960003a42d72e0aead4af5c303e0321a37f19778ebd44f7242ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cd72479e26960003a42d72e0aead4af5c303e0321a37f19778ebd44f7242ae->enter($__internal_e6cd72479e26960003a42d72e0aead4af5c303e0321a37f19778ebd44f7242ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf994ddfc94f106252609274045aa2274073cf40270544b0c5693fd832a67ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf994ddfc94f106252609274045aa2274073cf40270544b0c5693fd832a67ea8->enter($__internal_bf994ddfc94f106252609274045aa2274073cf40270544b0c5693fd832a67ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf994ddfc94f106252609274045aa2274073cf40270544b0c5693fd832a67ea8->leave($__internal_bf994ddfc94f106252609274045aa2274073cf40270544b0c5693fd832a67ea8_prof);

        
        $__internal_e6cd72479e26960003a42d72e0aead4af5c303e0321a37f19778ebd44f7242ae->leave($__internal_e6cd72479e26960003a42d72e0aead4af5c303e0321a37f19778ebd44f7242ae_prof);

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
