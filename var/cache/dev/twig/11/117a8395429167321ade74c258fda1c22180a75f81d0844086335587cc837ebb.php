<?php

/* currency/index.html.twig */
class __TwigTemplate_e56c4d7306f2f4d06218fe58a17dabdc3c38329a23e282d45f5e0a318bd4a84d extends Twig_Template
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
        $__internal_baedba7f6ac00b63f09a0d82b695b4fcec3b9d516086d2b66fb13b41dfa14bd8 = $this->env->getExtension("native_profiler");
        $__internal_baedba7f6ac00b63f09a0d82b695b4fcec3b9d516086d2b66fb13b41dfa14bd8->enter($__internal_baedba7f6ac00b63f09a0d82b695b4fcec3b9d516086d2b66fb13b41dfa14bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baedba7f6ac00b63f09a0d82b695b4fcec3b9d516086d2b66fb13b41dfa14bd8->leave($__internal_baedba7f6ac00b63f09a0d82b695b4fcec3b9d516086d2b66fb13b41dfa14bd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6e0f552276c4e4b68fe69a2fbe99b02cb58b9dd8c504c1644cdb6b1000fe7c = $this->env->getExtension("native_profiler");
        $__internal_ca6e0f552276c4e4b68fe69a2fbe99b02cb58b9dd8c504c1644cdb6b1000fe7c->enter($__internal_ca6e0f552276c4e4b68fe69a2fbe99b02cb58b9dd8c504c1644cdb6b1000fe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["currencies"]) ? $context["currencies"] : $this->getContext($context, "currencies")));
        echo "

    ";
        // line 7
        echo "        ";
        // line 8
        echo "        ";
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "            ";
        // line 17
        echo "                ";
        // line 18
        echo "                ";
        // line 19
        echo "                ";
        // line 20
        echo "                ";
        // line 21
        echo "            ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "    ";
        // line 25
        echo "
";
        
        $__internal_ca6e0f552276c4e4b68fe69a2fbe99b02cb58b9dd8c504c1644cdb6b1000fe7c->leave($__internal_ca6e0f552276c4e4b68fe69a2fbe99b02cb58b9dd8c504c1644cdb6b1000fe7c_prof);

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
        return array (  81 => 25,  79 => 24,  77 => 23,  75 => 22,  73 => 21,  71 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ dump(currencies) }}*/
/* */
/*     {#<table>#}*/
/*         {#<thead>#}*/
/*         {#<tr>#}*/
/*             {#<th colspan="2">Валюта</th>#}*/
/*             {#<th>Покупка</th>#}*/
/*             {#<th>Продажа</th>#}*/
/*         {#</tr>#}*/
/*         {#</thead>#}*/
/*         {#<tbody>#}*/
/*         {#{% for currency in currencies %}#}*/
/*             {#<tr>#}*/
/*                 {#<td>{{ currency.ccy }}</td>#}*/
/*                 {#<td>{{ currency.base_ccy }}</td>#}*/
/*                 {#<td>{{ currency.buy | round(3, 'ceil') }}</td>#}*/
/*                 {#<td>{{ currency.sale | round(3, 'ceil') }}</td>#}*/
/*             {#</tr>#}*/
/*         {#{% endfor %}#}*/
/*         {#</tbody>#}*/
/*     {#</table>#}*/
/* */
/* {% endblock %}*/
/* */
