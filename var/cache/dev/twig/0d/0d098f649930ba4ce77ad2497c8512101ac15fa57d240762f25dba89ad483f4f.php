<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_13faa5fc7618d42af97a9e42f06058f17ffa94b94ca86bd6906bc3aef3ef56dc extends Twig_Template
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
        $__internal_8b775b352a6d3198cc6a00db0142671b127a58383c94ea9cc559f14d615d73f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b775b352a6d3198cc6a00db0142671b127a58383c94ea9cc559f14d615d73f8->enter($__internal_8b775b352a6d3198cc6a00db0142671b127a58383c94ea9cc559f14d615d73f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3d94f2fdc10dc940927bedf9acde08829a6b8f04bf88e8afb397d0d6727e1391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d94f2fdc10dc940927bedf9acde08829a6b8f04bf88e8afb397d0d6727e1391->enter($__internal_3d94f2fdc10dc940927bedf9acde08829a6b8f04bf88e8afb397d0d6727e1391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b775b352a6d3198cc6a00db0142671b127a58383c94ea9cc559f14d615d73f8->leave($__internal_8b775b352a6d3198cc6a00db0142671b127a58383c94ea9cc559f14d615d73f8_prof);

        
        $__internal_3d94f2fdc10dc940927bedf9acde08829a6b8f04bf88e8afb397d0d6727e1391->leave($__internal_3d94f2fdc10dc940927bedf9acde08829a6b8f04bf88e8afb397d0d6727e1391_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97e1414d5643d01c92c1edc3d89c6cc539550b55a0bcda8d7ed6e0bf11474157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e1414d5643d01c92c1edc3d89c6cc539550b55a0bcda8d7ed6e0bf11474157->enter($__internal_97e1414d5643d01c92c1edc3d89c6cc539550b55a0bcda8d7ed6e0bf11474157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73cb6c7f05882e1c54e4fd2e41b872cadf30e908db0f44d07cd32f537aa19b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cb6c7f05882e1c54e4fd2e41b872cadf30e908db0f44d07cd32f537aa19b49->enter($__internal_73cb6c7f05882e1c54e4fd2e41b872cadf30e908db0f44d07cd32f537aa19b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_73cb6c7f05882e1c54e4fd2e41b872cadf30e908db0f44d07cd32f537aa19b49->leave($__internal_73cb6c7f05882e1c54e4fd2e41b872cadf30e908db0f44d07cd32f537aa19b49_prof);

        
        $__internal_97e1414d5643d01c92c1edc3d89c6cc539550b55a0bcda8d7ed6e0bf11474157->leave($__internal_97e1414d5643d01c92c1edc3d89c6cc539550b55a0bcda8d7ed6e0bf11474157_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
