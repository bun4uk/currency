<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_624ebb66ce3c4a9345627110b5e156db12fb12dfce85fbc6b1ed9f949f65e51c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3606be3da7a6d00739339809aef823073fff66489013d0b82b8a49732041dd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3606be3da7a6d00739339809aef823073fff66489013d0b82b8a49732041dd28->enter($__internal_3606be3da7a6d00739339809aef823073fff66489013d0b82b8a49732041dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e2195bad57714b8d4f669d6932833f6f22302115f2da342883e2d2c403a1518f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2195bad57714b8d4f669d6932833f6f22302115f2da342883e2d2c403a1518f->enter($__internal_e2195bad57714b8d4f669d6932833f6f22302115f2da342883e2d2c403a1518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3606be3da7a6d00739339809aef823073fff66489013d0b82b8a49732041dd28->leave($__internal_3606be3da7a6d00739339809aef823073fff66489013d0b82b8a49732041dd28_prof);

        
        $__internal_e2195bad57714b8d4f669d6932833f6f22302115f2da342883e2d2c403a1518f->leave($__internal_e2195bad57714b8d4f669d6932833f6f22302115f2da342883e2d2c403a1518f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_061856bf29f45f7784a15990e014c7b836f35b52ffc67f351659afdc1d845fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061856bf29f45f7784a15990e014c7b836f35b52ffc67f351659afdc1d845fe6->enter($__internal_061856bf29f45f7784a15990e014c7b836f35b52ffc67f351659afdc1d845fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_393cede828175ecfd1e4ca16255b566d41d1b9e3a83e1a59f6481befcd30e1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393cede828175ecfd1e4ca16255b566d41d1b9e3a83e1a59f6481befcd30e1e5->enter($__internal_393cede828175ecfd1e4ca16255b566d41d1b9e3a83e1a59f6481befcd30e1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_393cede828175ecfd1e4ca16255b566d41d1b9e3a83e1a59f6481befcd30e1e5->leave($__internal_393cede828175ecfd1e4ca16255b566d41d1b9e3a83e1a59f6481befcd30e1e5_prof);

        
        $__internal_061856bf29f45f7784a15990e014c7b836f35b52ffc67f351659afdc1d845fe6->leave($__internal_061856bf29f45f7784a15990e014c7b836f35b52ffc67f351659afdc1d845fe6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
