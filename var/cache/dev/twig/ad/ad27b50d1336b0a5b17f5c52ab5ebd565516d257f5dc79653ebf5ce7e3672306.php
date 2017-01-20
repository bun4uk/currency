<?php

/* currency/tax_result.html.twig */
class __TwigTemplate_eda5f3b581f9702b43f003763ce570524432a97ddb47724c260ad88b5ec48844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "currency/tax_result.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4a2722e069a8fdd6da8ffff8cb6e70650759f3fc9441e8b4dd7d57921f67311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a2722e069a8fdd6da8ffff8cb6e70650759f3fc9441e8b4dd7d57921f67311->enter($__internal_e4a2722e069a8fdd6da8ffff8cb6e70650759f3fc9441e8b4dd7d57921f67311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax_result.html.twig"));

        $__internal_cc6795946859f66f4cf17ee450ea4f27ed5f81259fd058d3a5c4cefc0daaec5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6795946859f66f4cf17ee450ea4f27ed5f81259fd058d3a5c4cefc0daaec5e->enter($__internal_cc6795946859f66f4cf17ee450ea4f27ed5f81259fd058d3a5c4cefc0daaec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax_result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a2722e069a8fdd6da8ffff8cb6e70650759f3fc9441e8b4dd7d57921f67311->leave($__internal_e4a2722e069a8fdd6da8ffff8cb6e70650759f3fc9441e8b4dd7d57921f67311_prof);

        
        $__internal_cc6795946859f66f4cf17ee450ea4f27ed5f81259fd058d3a5c4cefc0daaec5e->leave($__internal_cc6795946859f66f4cf17ee450ea4f27ed5f81259fd058d3a5c4cefc0daaec5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd5501849e1adace445f8e7726e478df4caa7ee0e74d64515016ced280e3c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd5501849e1adace445f8e7726e478df4caa7ee0e74d64515016ced280e3c28->enter($__internal_7dd5501849e1adace445f8e7726e478df4caa7ee0e74d64515016ced280e3c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86641fca572a1f15c5c7aac3111289b8dd6c3cf8ec11bd326e52254a8d6947f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86641fca572a1f15c5c7aac3111289b8dd6c3cf8ec11bd326e52254a8d6947f4->enter($__internal_86641fca572a1f15c5c7aac3111289b8dd6c3cf8ec11bd326e52254a8d6947f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
    <h2>Курс ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new Twig_Error_Runtime('Variable "formData" does not exist.', 5, $this->getSourceContext()); })()), "currency", array()), "html", null, true);
        echo " на ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["hrnRate"]) || array_key_exists("hrnRate", $context) ? $context["hrnRate"] : (function () { throw new Twig_Error_Runtime('Variable "hrnRate" does not exist.', 5, $this->getSourceContext()); })()), "exchangedate", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["hrnRate"]) || array_key_exists("hrnRate", $context) ? $context["hrnRate"] : (function () { throw new Twig_Error_Runtime('Variable "hrnRate" does not exist.', 5, $this->getSourceContext()); })()), "rate", array()), "html", null, true);
        echo " грн</h2>
    <p>Получено в ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new Twig_Error_Runtime('Variable "formData" does not exist.', 6, $this->getSourceContext()); })()), "currency", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new Twig_Error_Runtime('Variable "formData" does not exist.', 6, $this->getSourceContext()); })()), "sum", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new Twig_Error_Runtime('Variable "formData" does not exist.', 6, $this->getSourceContext()); })()), "currency", array()), "html", null, true);
        echo "</p>
    <p>Получено в грн - ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["sumHrn"]) || array_key_exists("sumHrn", $context) ? $context["sumHrn"] : (function () { throw new Twig_Error_Runtime('Variable "sumHrn" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo " грн</p>
    <p>Сумма единого налога - ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["tax"]) || array_key_exists("tax", $context) ? $context["tax"] : (function () { throw new Twig_Error_Runtime('Variable "tax" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "грн</p>
";
        
        $__internal_86641fca572a1f15c5c7aac3111289b8dd6c3cf8ec11bd326e52254a8d6947f4->leave($__internal_86641fca572a1f15c5c7aac3111289b8dd6c3cf8ec11bd326e52254a8d6947f4_prof);

        
        $__internal_7dd5501849e1adace445f8e7726e478df4caa7ee0e74d64515016ced280e3c28->leave($__internal_7dd5501849e1adace445f8e7726e478df4caa7ee0e74d64515016ced280e3c28_prof);

    }

    public function getTemplateName()
    {
        return "currency/tax_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  70 => 7,  62 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ dump() }}
    <h2>Курс {{ formData.currency }} на {{ hrnRate.exchangedate }} - {{ hrnRate.rate }} грн</h2>
    <p>Получено в {{ formData.currency }} - {{ formData.sum }} {{ formData.currency }}</p>
    <p>Получено в грн - {{ sumHrn }} грн</p>
    <p>Сумма единого налога - {{ tax }}грн</p>
{% endblock %}", "currency/tax_result.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/app/Resources/views/currency/tax_result.html.twig");
    }
}
