<?php

/* currency/index.html.twig */
class __TwigTemplate_c09f265d3c6460bf20675e875746cd8064ecb1c62d7a0ee1ab902ea364e58863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "currency/index.html.twig", 1);
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
        $__internal_d74463edf813b2a5b0cc071ddbafdca93c56cf7fdaa08edb882f7ff13d98bb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74463edf813b2a5b0cc071ddbafdca93c56cf7fdaa08edb882f7ff13d98bb50->enter($__internal_d74463edf813b2a5b0cc071ddbafdca93c56cf7fdaa08edb882f7ff13d98bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $__internal_6c7df2af21c080ad52ad5941f432d75404ec7458110fef183f2ee1bd146a2849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7df2af21c080ad52ad5941f432d75404ec7458110fef183f2ee1bd146a2849->enter($__internal_6c7df2af21c080ad52ad5941f432d75404ec7458110fef183f2ee1bd146a2849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74463edf813b2a5b0cc071ddbafdca93c56cf7fdaa08edb882f7ff13d98bb50->leave($__internal_d74463edf813b2a5b0cc071ddbafdca93c56cf7fdaa08edb882f7ff13d98bb50_prof);

        
        $__internal_6c7df2af21c080ad52ad5941f432d75404ec7458110fef183f2ee1bd146a2849->leave($__internal_6c7df2af21c080ad52ad5941f432d75404ec7458110fef183f2ee1bd146a2849_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_855749c20f46c0764b54e251012a8f0bb9492ff6da88efe3a0e0bb7bb513e6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855749c20f46c0764b54e251012a8f0bb9492ff6da88efe3a0e0bb7bb513e6a0->enter($__internal_855749c20f46c0764b54e251012a8f0bb9492ff6da88efe3a0e0bb7bb513e6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82f4e329176471631712526bfac6a05a6504ad1a36a479b3733db9f4e2a11447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f4e329176471631712526bfac6a05a6504ad1a36a479b3733db9f4e2a11447->enter($__internal_82f4e329176471631712526bfac6a05a6504ad1a36a479b3733db9f4e2a11447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("currency/menu.html.twig", "currency/index.html.twig", 5)->display($context);
        // line 6
        echo "
    <table>
        <thead>
        <tr>
            <th colspan=\"2\">Валюта</th>
            <th>Покупка</th>
            <th>Продажа</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "ccy", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "base_ccy", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "buy", array()), 3, "ceil"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "sale", array()), 3, "ceil"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

";
        
        $__internal_82f4e329176471631712526bfac6a05a6504ad1a36a479b3733db9f4e2a11447->leave($__internal_82f4e329176471631712526bfac6a05a6504ad1a36a479b3733db9f4e2a11447_prof);

        
        $__internal_855749c20f46c0764b54e251012a8f0bb9492ff6da88efe3a0e0bb7bb513e6a0->leave($__internal_855749c20f46c0764b54e251012a8f0bb9492ff6da88efe3a0e0bb7bb513e6a0_prof);

    }

    public function getTemplateName()
    {
        return "currency/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  70 => 17,  66 => 16,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% include 'currency/menu.html.twig' %}

    <table>
        <thead>
        <tr>
            <th colspan=\"2\">Валюта</th>
            <th>Покупка</th>
            <th>Продажа</th>
        </tr>
        </thead>
        <tbody>
        {% for currency in currencies %}
            <tr>
                <td>{{ currency.ccy }}</td>
                <td>{{ currency.base_ccy }}</td>
                <td>{{ currency.buy | round(3, 'ceil') }}</td>
                <td>{{ currency.sale | round(3, 'ceil') }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "currency/index.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/app/Resources/views/currency/index.html.twig");
    }
}
