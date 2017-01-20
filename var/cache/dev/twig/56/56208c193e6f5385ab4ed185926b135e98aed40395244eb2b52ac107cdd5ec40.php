<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6842060438db324a079140d8af097e9824da4143badaf8cf57560e102adae3ff extends Twig_Template
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
        $__internal_75523475e8d5eccb5d6057c5ef4b0db2102b55d512928a2b3283a76ede24c461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75523475e8d5eccb5d6057c5ef4b0db2102b55d512928a2b3283a76ede24c461->enter($__internal_75523475e8d5eccb5d6057c5ef4b0db2102b55d512928a2b3283a76ede24c461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e8b422078081b80054111d4eb5dad3de66f290879b84d9ceb286924ee94d5714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b422078081b80054111d4eb5dad3de66f290879b84d9ceb286924ee94d5714->enter($__internal_e8b422078081b80054111d4eb5dad3de66f290879b84d9ceb286924ee94d5714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75523475e8d5eccb5d6057c5ef4b0db2102b55d512928a2b3283a76ede24c461->leave($__internal_75523475e8d5eccb5d6057c5ef4b0db2102b55d512928a2b3283a76ede24c461_prof);

        
        $__internal_e8b422078081b80054111d4eb5dad3de66f290879b84d9ceb286924ee94d5714->leave($__internal_e8b422078081b80054111d4eb5dad3de66f290879b84d9ceb286924ee94d5714_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12b5ab3ab896f031f3f81955b96f134fb97df2e93f7d2d6483bd77025c1dd2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b5ab3ab896f031f3f81955b96f134fb97df2e93f7d2d6483bd77025c1dd2da->enter($__internal_12b5ab3ab896f031f3f81955b96f134fb97df2e93f7d2d6483bd77025c1dd2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2a9e2d17861e843607d7b03d685a5324e225ac166b80dadc7f44ff3fea1352e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a9e2d17861e843607d7b03d685a5324e225ac166b80dadc7f44ff3fea1352e->enter($__internal_a2a9e2d17861e843607d7b03d685a5324e225ac166b80dadc7f44ff3fea1352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a2a9e2d17861e843607d7b03d685a5324e225ac166b80dadc7f44ff3fea1352e->leave($__internal_a2a9e2d17861e843607d7b03d685a5324e225ac166b80dadc7f44ff3fea1352e_prof);

        
        $__internal_12b5ab3ab896f031f3f81955b96f134fb97df2e93f7d2d6483bd77025c1dd2da->leave($__internal_12b5ab3ab896f031f3f81955b96f134fb97df2e93f7d2d6483bd77025c1dd2da_prof);

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
