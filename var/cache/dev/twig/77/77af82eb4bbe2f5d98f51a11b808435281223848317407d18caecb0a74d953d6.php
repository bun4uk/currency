<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4816910f5e3dcfaf9a628c6eb8483a358ccbf3ebe954559a5c7283b2840dc6bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_246d76894f11827bea462f7d2aa3f909debdc96b54080d31fcf6bd4866c05acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246d76894f11827bea462f7d2aa3f909debdc96b54080d31fcf6bd4866c05acd->enter($__internal_246d76894f11827bea462f7d2aa3f909debdc96b54080d31fcf6bd4866c05acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5cadf2205d7c3e3f1cc131824b739b3f3185fdbf791478b16ebf25f386ab6f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cadf2205d7c3e3f1cc131824b739b3f3185fdbf791478b16ebf25f386ab6f72->enter($__internal_5cadf2205d7c3e3f1cc131824b739b3f3185fdbf791478b16ebf25f386ab6f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_246d76894f11827bea462f7d2aa3f909debdc96b54080d31fcf6bd4866c05acd->leave($__internal_246d76894f11827bea462f7d2aa3f909debdc96b54080d31fcf6bd4866c05acd_prof);

        
        $__internal_5cadf2205d7c3e3f1cc131824b739b3f3185fdbf791478b16ebf25f386ab6f72->leave($__internal_5cadf2205d7c3e3f1cc131824b739b3f3185fdbf791478b16ebf25f386ab6f72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f153ba9361003a37aeb062c3d3ad876f10423a168699ba9e9a4faf23774aa695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f153ba9361003a37aeb062c3d3ad876f10423a168699ba9e9a4faf23774aa695->enter($__internal_f153ba9361003a37aeb062c3d3ad876f10423a168699ba9e9a4faf23774aa695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74c437d0a03a0ecd4596947f1dd93a462d5f2f58ae427915f32b7db25bcfd2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c437d0a03a0ecd4596947f1dd93a462d5f2f58ae427915f32b7db25bcfd2ce->enter($__internal_74c437d0a03a0ecd4596947f1dd93a462d5f2f58ae427915f32b7db25bcfd2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_74c437d0a03a0ecd4596947f1dd93a462d5f2f58ae427915f32b7db25bcfd2ce->leave($__internal_74c437d0a03a0ecd4596947f1dd93a462d5f2f58ae427915f32b7db25bcfd2ce_prof);

        
        $__internal_f153ba9361003a37aeb062c3d3ad876f10423a168699ba9e9a4faf23774aa695->leave($__internal_f153ba9361003a37aeb062c3d3ad876f10423a168699ba9e9a4faf23774aa695_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b4f9a14e242c246123689e154d8b32a981ff384550127e7f1de6adf64691b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4f9a14e242c246123689e154d8b32a981ff384550127e7f1de6adf64691b62->enter($__internal_7b4f9a14e242c246123689e154d8b32a981ff384550127e7f1de6adf64691b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c8f3d59dbb3983060eaf128e26eea0cfdf0f598468cfc0b1539be7e295b631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8f3d59dbb3983060eaf128e26eea0cfdf0f598468cfc0b1539be7e295b631c->enter($__internal_8c8f3d59dbb3983060eaf128e26eea0cfdf0f598468cfc0b1539be7e295b631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8c8f3d59dbb3983060eaf128e26eea0cfdf0f598468cfc0b1539be7e295b631c->leave($__internal_8c8f3d59dbb3983060eaf128e26eea0cfdf0f598468cfc0b1539be7e295b631c_prof);

        
        $__internal_7b4f9a14e242c246123689e154d8b32a981ff384550127e7f1de6adf64691b62->leave($__internal_7b4f9a14e242c246123689e154d8b32a981ff384550127e7f1de6adf64691b62_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_200b269c861b1935ff85a51aa91c36be6cdb76cc54c16afabe6671d57571f28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200b269c861b1935ff85a51aa91c36be6cdb76cc54c16afabe6671d57571f28d->enter($__internal_200b269c861b1935ff85a51aa91c36be6cdb76cc54c16afabe6671d57571f28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb9b6496f0d0eaff6ed88d1bac75e6dd0f2137d6a73022ce84f484256f6f500a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9b6496f0d0eaff6ed88d1bac75e6dd0f2137d6a73022ce84f484256f6f500a->enter($__internal_bb9b6496f0d0eaff6ed88d1bac75e6dd0f2137d6a73022ce84f484256f6f500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb9b6496f0d0eaff6ed88d1bac75e6dd0f2137d6a73022ce84f484256f6f500a->leave($__internal_bb9b6496f0d0eaff6ed88d1bac75e6dd0f2137d6a73022ce84f484256f6f500a_prof);

        
        $__internal_200b269c861b1935ff85a51aa91c36be6cdb76cc54c16afabe6671d57571f28d->leave($__internal_200b269c861b1935ff85a51aa91c36be6cdb76cc54c16afabe6671d57571f28d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
