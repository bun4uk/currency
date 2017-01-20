<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b1eb6339145e9a35f4c75f97d2bf68a1c7ea39f5ad02397c5b65032205e73fcc extends Twig_Template
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
        $__internal_9138b718b292ccaf7e3a9466d185583bfd3f114a4f9477cf549b8058dd64785f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9138b718b292ccaf7e3a9466d185583bfd3f114a4f9477cf549b8058dd64785f->enter($__internal_9138b718b292ccaf7e3a9466d185583bfd3f114a4f9477cf549b8058dd64785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_92080b7820171f229fdf418c7b615cea0eeefcf95168032111b7e959f7455507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92080b7820171f229fdf418c7b615cea0eeefcf95168032111b7e959f7455507->enter($__internal_92080b7820171f229fdf418c7b615cea0eeefcf95168032111b7e959f7455507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9138b718b292ccaf7e3a9466d185583bfd3f114a4f9477cf549b8058dd64785f->leave($__internal_9138b718b292ccaf7e3a9466d185583bfd3f114a4f9477cf549b8058dd64785f_prof);

        
        $__internal_92080b7820171f229fdf418c7b615cea0eeefcf95168032111b7e959f7455507->leave($__internal_92080b7820171f229fdf418c7b615cea0eeefcf95168032111b7e959f7455507_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_583a8f077bae032be65705a1090bc8aab821974639b929f15f292161e62be8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583a8f077bae032be65705a1090bc8aab821974639b929f15f292161e62be8b2->enter($__internal_583a8f077bae032be65705a1090bc8aab821974639b929f15f292161e62be8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22aa906af6c08605f813ce77e5e5ad007662f0d96bcf7d9f2c4093acf5767771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22aa906af6c08605f813ce77e5e5ad007662f0d96bcf7d9f2c4093acf5767771->enter($__internal_22aa906af6c08605f813ce77e5e5ad007662f0d96bcf7d9f2c4093acf5767771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_22aa906af6c08605f813ce77e5e5ad007662f0d96bcf7d9f2c4093acf5767771->leave($__internal_22aa906af6c08605f813ce77e5e5ad007662f0d96bcf7d9f2c4093acf5767771_prof);

        
        $__internal_583a8f077bae032be65705a1090bc8aab821974639b929f15f292161e62be8b2->leave($__internal_583a8f077bae032be65705a1090bc8aab821974639b929f15f292161e62be8b2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd29da92846ff9bc052572eb31b1c14bf85f0eea36fc6e0d438818e2a9b3d03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd29da92846ff9bc052572eb31b1c14bf85f0eea36fc6e0d438818e2a9b3d03a->enter($__internal_bd29da92846ff9bc052572eb31b1c14bf85f0eea36fc6e0d438818e2a9b3d03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8496008664d3736000e9c3df94ffe99472823119391ba72ee7bfc08dbc7a7d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8496008664d3736000e9c3df94ffe99472823119391ba72ee7bfc08dbc7a7d17->enter($__internal_8496008664d3736000e9c3df94ffe99472823119391ba72ee7bfc08dbc7a7d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8496008664d3736000e9c3df94ffe99472823119391ba72ee7bfc08dbc7a7d17->leave($__internal_8496008664d3736000e9c3df94ffe99472823119391ba72ee7bfc08dbc7a7d17_prof);

        
        $__internal_bd29da92846ff9bc052572eb31b1c14bf85f0eea36fc6e0d438818e2a9b3d03a->leave($__internal_bd29da92846ff9bc052572eb31b1c14bf85f0eea36fc6e0d438818e2a9b3d03a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_06e35257bccd5329f3ce46aa33c2fe618d8097669c3b3200f070528904618c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e35257bccd5329f3ce46aa33c2fe618d8097669c3b3200f070528904618c46->enter($__internal_06e35257bccd5329f3ce46aa33c2fe618d8097669c3b3200f070528904618c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e04a102a41978641f6e152df67313a980cdf32a20d32310ed0e182697cde98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e04a102a41978641f6e152df67313a980cdf32a20d32310ed0e182697cde98b->enter($__internal_0e04a102a41978641f6e152df67313a980cdf32a20d32310ed0e182697cde98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0e04a102a41978641f6e152df67313a980cdf32a20d32310ed0e182697cde98b->leave($__internal_0e04a102a41978641f6e152df67313a980cdf32a20d32310ed0e182697cde98b_prof);

        
        $__internal_06e35257bccd5329f3ce46aa33c2fe618d8097669c3b3200f070528904618c46->leave($__internal_06e35257bccd5329f3ce46aa33c2fe618d8097669c3b3200f070528904618c46_prof);

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
