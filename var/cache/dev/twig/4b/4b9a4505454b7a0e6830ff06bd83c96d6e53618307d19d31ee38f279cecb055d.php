<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d971f8a18058b71e5291955ace3cf9d70bdf0d062d80f5754cfedbcf45ba491d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d194274a25d43eee3526795d5c5c68b192094ad009cc99a331970ea847ad5e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d194274a25d43eee3526795d5c5c68b192094ad009cc99a331970ea847ad5e2f->enter($__internal_d194274a25d43eee3526795d5c5c68b192094ad009cc99a331970ea847ad5e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dc116fd8e32cef10c76b2dba3a3e59e2ad47fe96955eb8966f1dcc450463875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc116fd8e32cef10c76b2dba3a3e59e2ad47fe96955eb8966f1dcc450463875f->enter($__internal_dc116fd8e32cef10c76b2dba3a3e59e2ad47fe96955eb8966f1dcc450463875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d194274a25d43eee3526795d5c5c68b192094ad009cc99a331970ea847ad5e2f->leave($__internal_d194274a25d43eee3526795d5c5c68b192094ad009cc99a331970ea847ad5e2f_prof);

        
        $__internal_dc116fd8e32cef10c76b2dba3a3e59e2ad47fe96955eb8966f1dcc450463875f->leave($__internal_dc116fd8e32cef10c76b2dba3a3e59e2ad47fe96955eb8966f1dcc450463875f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f81d7b4e4983bf2b144324ae6d97212c746918e43b0c71620ef1f0770166ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81d7b4e4983bf2b144324ae6d97212c746918e43b0c71620ef1f0770166ef52->enter($__internal_f81d7b4e4983bf2b144324ae6d97212c746918e43b0c71620ef1f0770166ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f78a43bc4ec8b2d367aa48733e2c78db0cf77d121fbb75056ae02903092f47df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78a43bc4ec8b2d367aa48733e2c78db0cf77d121fbb75056ae02903092f47df->enter($__internal_f78a43bc4ec8b2d367aa48733e2c78db0cf77d121fbb75056ae02903092f47df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f78a43bc4ec8b2d367aa48733e2c78db0cf77d121fbb75056ae02903092f47df->leave($__internal_f78a43bc4ec8b2d367aa48733e2c78db0cf77d121fbb75056ae02903092f47df_prof);

        
        $__internal_f81d7b4e4983bf2b144324ae6d97212c746918e43b0c71620ef1f0770166ef52->leave($__internal_f81d7b4e4983bf2b144324ae6d97212c746918e43b0c71620ef1f0770166ef52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28129c71a6032efa3c1f9019c4a09bbcf617261ce38a36160ff978f1e5ce268d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28129c71a6032efa3c1f9019c4a09bbcf617261ce38a36160ff978f1e5ce268d->enter($__internal_28129c71a6032efa3c1f9019c4a09bbcf617261ce38a36160ff978f1e5ce268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0edb124d546b06acadf567e6cc0d4dfa00a635b44584d36635a0a4176492a390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edb124d546b06acadf567e6cc0d4dfa00a635b44584d36635a0a4176492a390->enter($__internal_0edb124d546b06acadf567e6cc0d4dfa00a635b44584d36635a0a4176492a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0edb124d546b06acadf567e6cc0d4dfa00a635b44584d36635a0a4176492a390->leave($__internal_0edb124d546b06acadf567e6cc0d4dfa00a635b44584d36635a0a4176492a390_prof);

        
        $__internal_28129c71a6032efa3c1f9019c4a09bbcf617261ce38a36160ff978f1e5ce268d->leave($__internal_28129c71a6032efa3c1f9019c4a09bbcf617261ce38a36160ff978f1e5ce268d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6ca5c3020c881fb6bd63b304e5499ae32b407ab918251944dc2f8d80980e4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ca5c3020c881fb6bd63b304e5499ae32b407ab918251944dc2f8d80980e4e2->enter($__internal_f6ca5c3020c881fb6bd63b304e5499ae32b407ab918251944dc2f8d80980e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66d36853cf811e845ca85ee9bfe38f09bff494d0d4efc984c8ec024b5777ed68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d36853cf811e845ca85ee9bfe38f09bff494d0d4efc984c8ec024b5777ed68->enter($__internal_66d36853cf811e845ca85ee9bfe38f09bff494d0d4efc984c8ec024b5777ed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_66d36853cf811e845ca85ee9bfe38f09bff494d0d4efc984c8ec024b5777ed68->leave($__internal_66d36853cf811e845ca85ee9bfe38f09bff494d0d4efc984c8ec024b5777ed68_prof);

        
        $__internal_f6ca5c3020c881fb6bd63b304e5499ae32b407ab918251944dc2f8d80980e4e2->leave($__internal_f6ca5c3020c881fb6bd63b304e5499ae32b407ab918251944dc2f8d80980e4e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
