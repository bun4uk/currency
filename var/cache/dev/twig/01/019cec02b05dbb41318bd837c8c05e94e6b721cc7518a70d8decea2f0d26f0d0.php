<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_63e83a19f2a92e21de9177b7f4f98eaa445fd9512ff2144dda72883eab88d01f extends Twig_Template
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
        $__internal_56d5259e0318c6582ee2beb37e23bdf6717586adb3c5fb96412854f7dbd64683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d5259e0318c6582ee2beb37e23bdf6717586adb3c5fb96412854f7dbd64683->enter($__internal_56d5259e0318c6582ee2beb37e23bdf6717586adb3c5fb96412854f7dbd64683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e8c64c0ccd902118279bc45bd431344da0bc6f0f6cca88ff2c98f3219ee16e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c64c0ccd902118279bc45bd431344da0bc6f0f6cca88ff2c98f3219ee16e56->enter($__internal_e8c64c0ccd902118279bc45bd431344da0bc6f0f6cca88ff2c98f3219ee16e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d5259e0318c6582ee2beb37e23bdf6717586adb3c5fb96412854f7dbd64683->leave($__internal_56d5259e0318c6582ee2beb37e23bdf6717586adb3c5fb96412854f7dbd64683_prof);

        
        $__internal_e8c64c0ccd902118279bc45bd431344da0bc6f0f6cca88ff2c98f3219ee16e56->leave($__internal_e8c64c0ccd902118279bc45bd431344da0bc6f0f6cca88ff2c98f3219ee16e56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bfadd0cfd31cfb1b43ae287c75dc3d4b61564b7e5e01d3791080a856bab137c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfadd0cfd31cfb1b43ae287c75dc3d4b61564b7e5e01d3791080a856bab137c->enter($__internal_9bfadd0cfd31cfb1b43ae287c75dc3d4b61564b7e5e01d3791080a856bab137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39a56b1dda303c2f62ffe60a626003161e2a92a6d9b8cedbfbea3e2024959353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a56b1dda303c2f62ffe60a626003161e2a92a6d9b8cedbfbea3e2024959353->enter($__internal_39a56b1dda303c2f62ffe60a626003161e2a92a6d9b8cedbfbea3e2024959353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_39a56b1dda303c2f62ffe60a626003161e2a92a6d9b8cedbfbea3e2024959353->leave($__internal_39a56b1dda303c2f62ffe60a626003161e2a92a6d9b8cedbfbea3e2024959353_prof);

        
        $__internal_9bfadd0cfd31cfb1b43ae287c75dc3d4b61564b7e5e01d3791080a856bab137c->leave($__internal_9bfadd0cfd31cfb1b43ae287c75dc3d4b61564b7e5e01d3791080a856bab137c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7610894bb956f14ed84a5f149b8279842242476db67bb60bbf56ee9e4573a183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7610894bb956f14ed84a5f149b8279842242476db67bb60bbf56ee9e4573a183->enter($__internal_7610894bb956f14ed84a5f149b8279842242476db67bb60bbf56ee9e4573a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_894bd69f8b11825c21bde60ad5d21a3a5cb1b0d5de6a69ce535b25f36b143ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894bd69f8b11825c21bde60ad5d21a3a5cb1b0d5de6a69ce535b25f36b143ada->enter($__internal_894bd69f8b11825c21bde60ad5d21a3a5cb1b0d5de6a69ce535b25f36b143ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_894bd69f8b11825c21bde60ad5d21a3a5cb1b0d5de6a69ce535b25f36b143ada->leave($__internal_894bd69f8b11825c21bde60ad5d21a3a5cb1b0d5de6a69ce535b25f36b143ada_prof);

        
        $__internal_7610894bb956f14ed84a5f149b8279842242476db67bb60bbf56ee9e4573a183->leave($__internal_7610894bb956f14ed84a5f149b8279842242476db67bb60bbf56ee9e4573a183_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f1771f1e2a668e2228c8e587460d43916c1e517ef3925f01a12755e12bc5f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1771f1e2a668e2228c8e587460d43916c1e517ef3925f01a12755e12bc5f9d->enter($__internal_7f1771f1e2a668e2228c8e587460d43916c1e517ef3925f01a12755e12bc5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3da1f69949f154bd2edff1c1b8233175e59c815267cc5b8f172a4b126bc40aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3da1f69949f154bd2edff1c1b8233175e59c815267cc5b8f172a4b126bc40aa->enter($__internal_b3da1f69949f154bd2edff1c1b8233175e59c815267cc5b8f172a4b126bc40aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b3da1f69949f154bd2edff1c1b8233175e59c815267cc5b8f172a4b126bc40aa->leave($__internal_b3da1f69949f154bd2edff1c1b8233175e59c815267cc5b8f172a4b126bc40aa_prof);

        
        $__internal_7f1771f1e2a668e2228c8e587460d43916c1e517ef3925f01a12755e12bc5f9d->leave($__internal_7f1771f1e2a668e2228c8e587460d43916c1e517ef3925f01a12755e12bc5f9d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
