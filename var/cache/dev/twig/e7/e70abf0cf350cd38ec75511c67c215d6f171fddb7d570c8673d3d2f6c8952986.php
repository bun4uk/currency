<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cc30940fc59791e377efe4ddc27590b8d47f282de48801e612b9551f8b0d94bb extends Twig_Template
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
        $__internal_e05a4f938395d2f258e6b65061ca539765ec8034cf21cea0853aef448840b044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05a4f938395d2f258e6b65061ca539765ec8034cf21cea0853aef448840b044->enter($__internal_e05a4f938395d2f258e6b65061ca539765ec8034cf21cea0853aef448840b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_caa2aa362ae4ff2af473940a96194da9e47b69e730ceb49150dbdf318743108f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa2aa362ae4ff2af473940a96194da9e47b69e730ceb49150dbdf318743108f->enter($__internal_caa2aa362ae4ff2af473940a96194da9e47b69e730ceb49150dbdf318743108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05a4f938395d2f258e6b65061ca539765ec8034cf21cea0853aef448840b044->leave($__internal_e05a4f938395d2f258e6b65061ca539765ec8034cf21cea0853aef448840b044_prof);

        
        $__internal_caa2aa362ae4ff2af473940a96194da9e47b69e730ceb49150dbdf318743108f->leave($__internal_caa2aa362ae4ff2af473940a96194da9e47b69e730ceb49150dbdf318743108f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48433fed2487ad9d5a6be074e98d6ae2bcbb1923aa91b3bb8e8412d5aecc6774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48433fed2487ad9d5a6be074e98d6ae2bcbb1923aa91b3bb8e8412d5aecc6774->enter($__internal_48433fed2487ad9d5a6be074e98d6ae2bcbb1923aa91b3bb8e8412d5aecc6774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_61154279a1fc6f22b4d763df25da76228b58863127fd3f1b37392a84e9f6279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61154279a1fc6f22b4d763df25da76228b58863127fd3f1b37392a84e9f6279b->enter($__internal_61154279a1fc6f22b4d763df25da76228b58863127fd3f1b37392a84e9f6279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61154279a1fc6f22b4d763df25da76228b58863127fd3f1b37392a84e9f6279b->leave($__internal_61154279a1fc6f22b4d763df25da76228b58863127fd3f1b37392a84e9f6279b_prof);

        
        $__internal_48433fed2487ad9d5a6be074e98d6ae2bcbb1923aa91b3bb8e8412d5aecc6774->leave($__internal_48433fed2487ad9d5a6be074e98d6ae2bcbb1923aa91b3bb8e8412d5aecc6774_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1b8401db745c570d49091b23dd0dc7ddaa8c7e2213bda211d93d3c079084283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b8401db745c570d49091b23dd0dc7ddaa8c7e2213bda211d93d3c079084283->enter($__internal_a1b8401db745c570d49091b23dd0dc7ddaa8c7e2213bda211d93d3c079084283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8c91570654057e2b29bf75e7c74a4c8db1517dd8c2c93bd67421e4297539144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c91570654057e2b29bf75e7c74a4c8db1517dd8c2c93bd67421e4297539144->enter($__internal_b8c91570654057e2b29bf75e7c74a4c8db1517dd8c2c93bd67421e4297539144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8c91570654057e2b29bf75e7c74a4c8db1517dd8c2c93bd67421e4297539144->leave($__internal_b8c91570654057e2b29bf75e7c74a4c8db1517dd8c2c93bd67421e4297539144_prof);

        
        $__internal_a1b8401db745c570d49091b23dd0dc7ddaa8c7e2213bda211d93d3c079084283->leave($__internal_a1b8401db745c570d49091b23dd0dc7ddaa8c7e2213bda211d93d3c079084283_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_043a52b26e726c85c4f2904a2f8ea5c5b030a6e3d9bb0481ea021a2678cabe75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043a52b26e726c85c4f2904a2f8ea5c5b030a6e3d9bb0481ea021a2678cabe75->enter($__internal_043a52b26e726c85c4f2904a2f8ea5c5b030a6e3d9bb0481ea021a2678cabe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b850011d15b81f9af9d994516bd957a58603ea67fcf41cc1422b1106439d814d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b850011d15b81f9af9d994516bd957a58603ea67fcf41cc1422b1106439d814d->enter($__internal_b850011d15b81f9af9d994516bd957a58603ea67fcf41cc1422b1106439d814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b850011d15b81f9af9d994516bd957a58603ea67fcf41cc1422b1106439d814d->leave($__internal_b850011d15b81f9af9d994516bd957a58603ea67fcf41cc1422b1106439d814d_prof);

        
        $__internal_043a52b26e726c85c4f2904a2f8ea5c5b030a6e3d9bb0481ea021a2678cabe75->leave($__internal_043a52b26e726c85c4f2904a2f8ea5c5b030a6e3d9bb0481ea021a2678cabe75_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
