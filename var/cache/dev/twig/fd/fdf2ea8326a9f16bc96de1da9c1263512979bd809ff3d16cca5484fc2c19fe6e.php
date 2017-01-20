<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f622a6c73e515a546f0dee265e99c97d3da1343b0c262db6e4941b3bb12e4f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fbd687ff4f7f02cb925a676daa469d970e474ddb737885dab28fd20c332deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fbd687ff4f7f02cb925a676daa469d970e474ddb737885dab28fd20c332deb->enter($__internal_74fbd687ff4f7f02cb925a676daa469d970e474ddb737885dab28fd20c332deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2b38e14d58b43e8614b287b7dd186042c364276cfc673bccd2ec23c1f6ae2c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b38e14d58b43e8614b287b7dd186042c364276cfc673bccd2ec23c1f6ae2c2d->enter($__internal_2b38e14d58b43e8614b287b7dd186042c364276cfc673bccd2ec23c1f6ae2c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fbd687ff4f7f02cb925a676daa469d970e474ddb737885dab28fd20c332deb->leave($__internal_74fbd687ff4f7f02cb925a676daa469d970e474ddb737885dab28fd20c332deb_prof);

        
        $__internal_2b38e14d58b43e8614b287b7dd186042c364276cfc673bccd2ec23c1f6ae2c2d->leave($__internal_2b38e14d58b43e8614b287b7dd186042c364276cfc673bccd2ec23c1f6ae2c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf7599bea7c9db502937df687538693779811ba38f3cb9e888b5c6c9de1ac94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7599bea7c9db502937df687538693779811ba38f3cb9e888b5c6c9de1ac94a->enter($__internal_cf7599bea7c9db502937df687538693779811ba38f3cb9e888b5c6c9de1ac94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c0c13c5bafcddb2450bcbe55791a4df8a695148501b4c113436bb93fac486a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0c13c5bafcddb2450bcbe55791a4df8a695148501b4c113436bb93fac486a6->enter($__internal_8c0c13c5bafcddb2450bcbe55791a4df8a695148501b4c113436bb93fac486a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8c0c13c5bafcddb2450bcbe55791a4df8a695148501b4c113436bb93fac486a6->leave($__internal_8c0c13c5bafcddb2450bcbe55791a4df8a695148501b4c113436bb93fac486a6_prof);

        
        $__internal_cf7599bea7c9db502937df687538693779811ba38f3cb9e888b5c6c9de1ac94a->leave($__internal_cf7599bea7c9db502937df687538693779811ba38f3cb9e888b5c6c9de1ac94a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff1a5c8c5f47f18faaea50a990cdf7a3ce81441e6155eacea03c66ffa879ad36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1a5c8c5f47f18faaea50a990cdf7a3ce81441e6155eacea03c66ffa879ad36->enter($__internal_ff1a5c8c5f47f18faaea50a990cdf7a3ce81441e6155eacea03c66ffa879ad36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a93e175f61f94b8c7faefc94a4a61f65de564524e569f8a95883c38a136ac706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93e175f61f94b8c7faefc94a4a61f65de564524e569f8a95883c38a136ac706->enter($__internal_a93e175f61f94b8c7faefc94a4a61f65de564524e569f8a95883c38a136ac706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_a93e175f61f94b8c7faefc94a4a61f65de564524e569f8a95883c38a136ac706->leave($__internal_a93e175f61f94b8c7faefc94a4a61f65de564524e569f8a95883c38a136ac706_prof);

        
        $__internal_ff1a5c8c5f47f18faaea50a990cdf7a3ce81441e6155eacea03c66ffa879ad36->leave($__internal_ff1a5c8c5f47f18faaea50a990cdf7a3ce81441e6155eacea03c66ffa879ad36_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8e5e8bdedccffa1fd5bb6019faf2b7f3bb34f5b4524cec6063b7b2fd959bd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e5e8bdedccffa1fd5bb6019faf2b7f3bb34f5b4524cec6063b7b2fd959bd84->enter($__internal_e8e5e8bdedccffa1fd5bb6019faf2b7f3bb34f5b4524cec6063b7b2fd959bd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_284148785501d17871ce177c1272c23ff577eb98b2b89e88ba538789caa048d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284148785501d17871ce177c1272c23ff577eb98b2b89e88ba538789caa048d9->enter($__internal_284148785501d17871ce177c1272c23ff577eb98b2b89e88ba538789caa048d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_284148785501d17871ce177c1272c23ff577eb98b2b89e88ba538789caa048d9->leave($__internal_284148785501d17871ce177c1272c23ff577eb98b2b89e88ba538789caa048d9_prof);

        
        $__internal_e8e5e8bdedccffa1fd5bb6019faf2b7f3bb34f5b4524cec6063b7b2fd959bd84->leave($__internal_e8e5e8bdedccffa1fd5bb6019faf2b7f3bb34f5b4524cec6063b7b2fd959bd84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
