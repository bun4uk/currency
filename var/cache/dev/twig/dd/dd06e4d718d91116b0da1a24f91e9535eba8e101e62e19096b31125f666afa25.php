<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_37cf9a4eee5ce3a42c38e8f687e5a9504db0e9b0e7d1afcd4e17964689c5540d extends Twig_Template
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
        $__internal_0b16a30c3332deddec08ca1c3cf8915513bf67c6b2bed24e7cb1bfa88dc8a7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b16a30c3332deddec08ca1c3cf8915513bf67c6b2bed24e7cb1bfa88dc8a7fb->enter($__internal_0b16a30c3332deddec08ca1c3cf8915513bf67c6b2bed24e7cb1bfa88dc8a7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_af2700a83fb88727a6195eaed0ab22022e9363e2831feebbfdddf698be643767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2700a83fb88727a6195eaed0ab22022e9363e2831feebbfdddf698be643767->enter($__internal_af2700a83fb88727a6195eaed0ab22022e9363e2831feebbfdddf698be643767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b16a30c3332deddec08ca1c3cf8915513bf67c6b2bed24e7cb1bfa88dc8a7fb->leave($__internal_0b16a30c3332deddec08ca1c3cf8915513bf67c6b2bed24e7cb1bfa88dc8a7fb_prof);

        
        $__internal_af2700a83fb88727a6195eaed0ab22022e9363e2831feebbfdddf698be643767->leave($__internal_af2700a83fb88727a6195eaed0ab22022e9363e2831feebbfdddf698be643767_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0783f3ed0638291469c9207e5895d56459c5c61b0bd55f965ba46d0deb2facd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0783f3ed0638291469c9207e5895d56459c5c61b0bd55f965ba46d0deb2facd9->enter($__internal_0783f3ed0638291469c9207e5895d56459c5c61b0bd55f965ba46d0deb2facd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e15821a7f330f2fd92e84668237b2a3cc63a5a7802da1889942c3d7a6f79724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15821a7f330f2fd92e84668237b2a3cc63a5a7802da1889942c3d7a6f79724b->enter($__internal_e15821a7f330f2fd92e84668237b2a3cc63a5a7802da1889942c3d7a6f79724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e15821a7f330f2fd92e84668237b2a3cc63a5a7802da1889942c3d7a6f79724b->leave($__internal_e15821a7f330f2fd92e84668237b2a3cc63a5a7802da1889942c3d7a6f79724b_prof);

        
        $__internal_0783f3ed0638291469c9207e5895d56459c5c61b0bd55f965ba46d0deb2facd9->leave($__internal_0783f3ed0638291469c9207e5895d56459c5c61b0bd55f965ba46d0deb2facd9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41c072ba66525ca8ace6ddd99460e69d295e19aa225edf80f3baae4ac5950ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c072ba66525ca8ace6ddd99460e69d295e19aa225edf80f3baae4ac5950ad0->enter($__internal_41c072ba66525ca8ace6ddd99460e69d295e19aa225edf80f3baae4ac5950ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5acc8243d06d907834a20bc749b7d79c87e6b5dc3553a24a4439d737e70433f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acc8243d06d907834a20bc749b7d79c87e6b5dc3553a24a4439d737e70433f2->enter($__internal_5acc8243d06d907834a20bc749b7d79c87e6b5dc3553a24a4439d737e70433f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5acc8243d06d907834a20bc749b7d79c87e6b5dc3553a24a4439d737e70433f2->leave($__internal_5acc8243d06d907834a20bc749b7d79c87e6b5dc3553a24a4439d737e70433f2_prof);

        
        $__internal_41c072ba66525ca8ace6ddd99460e69d295e19aa225edf80f3baae4ac5950ad0->leave($__internal_41c072ba66525ca8ace6ddd99460e69d295e19aa225edf80f3baae4ac5950ad0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26a817cde12633611bd9f05284f9106a99f1e3232e5a278ea3d08ad39ad22a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a817cde12633611bd9f05284f9106a99f1e3232e5a278ea3d08ad39ad22a1b->enter($__internal_26a817cde12633611bd9f05284f9106a99f1e3232e5a278ea3d08ad39ad22a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc8b179d00c3217b33b08f17ca5eda7de7b70bab827bce2943c89770fde0fc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8b179d00c3217b33b08f17ca5eda7de7b70bab827bce2943c89770fde0fc18->enter($__internal_bc8b179d00c3217b33b08f17ca5eda7de7b70bab827bce2943c89770fde0fc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bc8b179d00c3217b33b08f17ca5eda7de7b70bab827bce2943c89770fde0fc18->leave($__internal_bc8b179d00c3217b33b08f17ca5eda7de7b70bab827bce2943c89770fde0fc18_prof);

        
        $__internal_26a817cde12633611bd9f05284f9106a99f1e3232e5a278ea3d08ad39ad22a1b->leave($__internal_26a817cde12633611bd9f05284f9106a99f1e3232e5a278ea3d08ad39ad22a1b_prof);

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
