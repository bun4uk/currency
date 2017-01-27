<?php

/* currency/index.html.twig */
class __TwigTemplate_ca22cf18f79a80ac10e6d5d9ba97d84ecc82ae16a2568785d90c636fca980646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwitterBootstrapBundle::layout.html.twig", "currency/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwitterBootstrapBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1324b757b503142bb3621c5fe1249c61d2bebab3f40c4d0e020a077fd3c78c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1324b757b503142bb3621c5fe1249c61d2bebab3f40c4d0e020a077fd3c78c3->enter($__internal_a1324b757b503142bb3621c5fe1249c61d2bebab3f40c4d0e020a077fd3c78c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $__internal_1d3b44872a8269ebaef620e9fa1ce7a2f9d307b773b3692041590f9ca74240f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3b44872a8269ebaef620e9fa1ce7a2f9d307b773b3692041590f9ca74240f2->enter($__internal_1d3b44872a8269ebaef620e9fa1ce7a2f9d307b773b3692041590f9ca74240f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1324b757b503142bb3621c5fe1249c61d2bebab3f40c4d0e020a077fd3c78c3->leave($__internal_a1324b757b503142bb3621c5fe1249c61d2bebab3f40c4d0e020a077fd3c78c3_prof);

        
        $__internal_1d3b44872a8269ebaef620e9fa1ce7a2f9d307b773b3692041590f9ca74240f2->leave($__internal_1d3b44872a8269ebaef620e9fa1ce7a2f9d307b773b3692041590f9ca74240f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3c5f367e1a230c700ff53dbf9c79ba4561af70a18888234aac575669b49ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3c5f367e1a230c700ff53dbf9c79ba4561af70a18888234aac575669b49ca7->enter($__internal_fd3c5f367e1a230c700ff53dbf9c79ba4561af70a18888234aac575669b49ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8355276e6894603015454ca541b797f1b32fdda671272f50a58ceaa4f59eb29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8355276e6894603015454ca541b797f1b32fdda671272f50a58ceaa4f59eb29e->enter($__internal_8355276e6894603015454ca541b797f1b32fdda671272f50a58ceaa4f59eb29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("currency/menu.html.twig", "currency/index.html.twig", 4)->display($context);
        // line 5
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "ccy", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "base_ccy", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "buy", array()), 3, "ceil"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "sale", array()), 3, "ceil"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>

";
        
        $__internal_8355276e6894603015454ca541b797f1b32fdda671272f50a58ceaa4f59eb29e->leave($__internal_8355276e6894603015454ca541b797f1b32fdda671272f50a58ceaa4f59eb29e_prof);

        
        $__internal_fd3c5f367e1a230c700ff53dbf9c79ba4561af70a18888234aac575669b49ca7->leave($__internal_fd3c5f367e1a230c700ff53dbf9c79ba4561af70a18888234aac575669b49ca7_prof);

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
        return array (  91 => 23,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  63 => 15,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwitterBootstrapBundle::layout.html.twig\" %}

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
", "currency/index.html.twig", "/var/www/html/app/Resources/views/currency/index.html.twig");
    }
}
