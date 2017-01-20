<?php

/* currency/index.html.twig */
class __TwigTemplate_238ec20835d26061a39e587a94d3afbfa950a81c48e17cfba2626045714679b9 extends Twig_Template
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
        $__internal_b21a224800fecd527849ad3b8bd372e21571047913007c08bc1edd6763df6cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21a224800fecd527849ad3b8bd372e21571047913007c08bc1edd6763df6cee->enter($__internal_b21a224800fecd527849ad3b8bd372e21571047913007c08bc1edd6763df6cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $__internal_d1552eb9aa180bcb5f87be5bd34e9224226c1f0fab41571a7e3c8cf51cd731a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1552eb9aa180bcb5f87be5bd34e9224226c1f0fab41571a7e3c8cf51cd731a1->enter($__internal_d1552eb9aa180bcb5f87be5bd34e9224226c1f0fab41571a7e3c8cf51cd731a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21a224800fecd527849ad3b8bd372e21571047913007c08bc1edd6763df6cee->leave($__internal_b21a224800fecd527849ad3b8bd372e21571047913007c08bc1edd6763df6cee_prof);

        
        $__internal_d1552eb9aa180bcb5f87be5bd34e9224226c1f0fab41571a7e3c8cf51cd731a1->leave($__internal_d1552eb9aa180bcb5f87be5bd34e9224226c1f0fab41571a7e3c8cf51cd731a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb37ac170610ace3d7d8df7a313f22f776ef86041eabdbcd68b64a4a4d1cab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb37ac170610ace3d7d8df7a313f22f776ef86041eabdbcd68b64a4a4d1cab5->enter($__internal_dbb37ac170610ace3d7d8df7a313f22f776ef86041eabdbcd68b64a4a4d1cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc9f6adb36ac6d495c31d86c43cdc529711c3339219c762f560b62f79f3bfd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9f6adb36ac6d495c31d86c43cdc529711c3339219c762f560b62f79f3bfd5d->enter($__internal_fc9f6adb36ac6d495c31d86c43cdc529711c3339219c762f560b62f79f3bfd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc9f6adb36ac6d495c31d86c43cdc529711c3339219c762f560b62f79f3bfd5d->leave($__internal_fc9f6adb36ac6d495c31d86c43cdc529711c3339219c762f560b62f79f3bfd5d_prof);

        
        $__internal_dbb37ac170610ace3d7d8df7a313f22f776ef86041eabdbcd68b64a4a4d1cab5->leave($__internal_dbb37ac170610ace3d7d8df7a313f22f776ef86041eabdbcd68b64a4a4d1cab5_prof);

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
