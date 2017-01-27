<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8720f567f581a91aca1e7ac468892aa1e0ffa8f229c098b2802082842ff49e84 extends Twig_Template
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
        $__internal_425b6bb8373ba43b594c177a1d3e4dfee6f125ae3cbafe764822cf95377a6981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425b6bb8373ba43b594c177a1d3e4dfee6f125ae3cbafe764822cf95377a6981->enter($__internal_425b6bb8373ba43b594c177a1d3e4dfee6f125ae3cbafe764822cf95377a6981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_52b5bdb9d6ef1dd0cc6ba44855d1e859a6269d42a4cee6c4efa649d6f2de626f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b5bdb9d6ef1dd0cc6ba44855d1e859a6269d42a4cee6c4efa649d6f2de626f->enter($__internal_52b5bdb9d6ef1dd0cc6ba44855d1e859a6269d42a4cee6c4efa649d6f2de626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425b6bb8373ba43b594c177a1d3e4dfee6f125ae3cbafe764822cf95377a6981->leave($__internal_425b6bb8373ba43b594c177a1d3e4dfee6f125ae3cbafe764822cf95377a6981_prof);

        
        $__internal_52b5bdb9d6ef1dd0cc6ba44855d1e859a6269d42a4cee6c4efa649d6f2de626f->leave($__internal_52b5bdb9d6ef1dd0cc6ba44855d1e859a6269d42a4cee6c4efa649d6f2de626f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3d72c400c018f7179484d6c93e5d347cd15f88584e79fe1bf993fd0b0afa185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d72c400c018f7179484d6c93e5d347cd15f88584e79fe1bf993fd0b0afa185->enter($__internal_d3d72c400c018f7179484d6c93e5d347cd15f88584e79fe1bf993fd0b0afa185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dfb89eef054aa7220265350b0202914ff13d4dd0117b279755916cf9b3bdb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfb89eef054aa7220265350b0202914ff13d4dd0117b279755916cf9b3bdb32->enter($__internal_2dfb89eef054aa7220265350b0202914ff13d4dd0117b279755916cf9b3bdb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2dfb89eef054aa7220265350b0202914ff13d4dd0117b279755916cf9b3bdb32->leave($__internal_2dfb89eef054aa7220265350b0202914ff13d4dd0117b279755916cf9b3bdb32_prof);

        
        $__internal_d3d72c400c018f7179484d6c93e5d347cd15f88584e79fe1bf993fd0b0afa185->leave($__internal_d3d72c400c018f7179484d6c93e5d347cd15f88584e79fe1bf993fd0b0afa185_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_808876662baefa5530f66cb86ca3c3843b82d137d3066d72c002e5c28dffc955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808876662baefa5530f66cb86ca3c3843b82d137d3066d72c002e5c28dffc955->enter($__internal_808876662baefa5530f66cb86ca3c3843b82d137d3066d72c002e5c28dffc955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f03ce112fa9853803acdb41ef2c49ecac486be7343c08c7e3e1f9f16692a6425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03ce112fa9853803acdb41ef2c49ecac486be7343c08c7e3e1f9f16692a6425->enter($__internal_f03ce112fa9853803acdb41ef2c49ecac486be7343c08c7e3e1f9f16692a6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f03ce112fa9853803acdb41ef2c49ecac486be7343c08c7e3e1f9f16692a6425->leave($__internal_f03ce112fa9853803acdb41ef2c49ecac486be7343c08c7e3e1f9f16692a6425_prof);

        
        $__internal_808876662baefa5530f66cb86ca3c3843b82d137d3066d72c002e5c28dffc955->leave($__internal_808876662baefa5530f66cb86ca3c3843b82d137d3066d72c002e5c28dffc955_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8bba871d4fc679fcec9e13a9daf45aadbc9730e590ba641f4cc820d52e2e584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bba871d4fc679fcec9e13a9daf45aadbc9730e590ba641f4cc820d52e2e584->enter($__internal_e8bba871d4fc679fcec9e13a9daf45aadbc9730e590ba641f4cc820d52e2e584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_062b28cf4e948054876be62a9be0329539d77868e3328c5793160917bcf3767c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062b28cf4e948054876be62a9be0329539d77868e3328c5793160917bcf3767c->enter($__internal_062b28cf4e948054876be62a9be0329539d77868e3328c5793160917bcf3767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_062b28cf4e948054876be62a9be0329539d77868e3328c5793160917bcf3767c->leave($__internal_062b28cf4e948054876be62a9be0329539d77868e3328c5793160917bcf3767c_prof);

        
        $__internal_e8bba871d4fc679fcec9e13a9daf45aadbc9730e590ba641f4cc820d52e2e584->leave($__internal_e8bba871d4fc679fcec9e13a9daf45aadbc9730e590ba641f4cc820d52e2e584_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
