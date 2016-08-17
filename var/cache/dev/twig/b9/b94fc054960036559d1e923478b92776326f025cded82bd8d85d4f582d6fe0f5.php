<?php

/* product/create.html.twig */
class __TwigTemplate_a9278050a9be973f0c2970c7ee68fcff54c788e74d0efa86a8077971ea35aee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/create.html.twig", 1);
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
        $__internal_418e74e3c5fd50abad345f007c523fb14a4bb3f966c96670a07f4f2bc93fb789 = $this->env->getExtension("native_profiler");
        $__internal_418e74e3c5fd50abad345f007c523fb14a4bb3f966c96670a07f4f2bc93fb789->enter($__internal_418e74e3c5fd50abad345f007c523fb14a4bb3f966c96670a07f4f2bc93fb789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418e74e3c5fd50abad345f007c523fb14a4bb3f966c96670a07f4f2bc93fb789->leave($__internal_418e74e3c5fd50abad345f007c523fb14a4bb3f966c96670a07f4f2bc93fb789_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_498ef06c8c69042cafb6f95b7be3125f49b8f45073365dbeb433746df03cc0db = $this->env->getExtension("native_profiler");
        $__internal_498ef06c8c69042cafb6f95b7be3125f49b8f45073365dbeb433746df03cc0db->enter($__internal_498ef06c8c69042cafb6f95b7be3125f49b8f45073365dbeb433746df03cc0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Saved new product <br>
    id: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo " <br>
    name: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo " <br>
    description: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo " <br>
    price: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "
    category: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "html", null, true);
        echo "

";
        
        $__internal_498ef06c8c69042cafb6f95b7be3125f49b8f45073365dbeb433746df03cc0db->leave($__internal_498ef06c8c69042cafb6f95b7be3125f49b8f45073365dbeb433746df03cc0db_prof);

    }

    public function getTemplateName()
    {
        return "product/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Saved new product <br>*/
/*     id: {{ product.id }} <br>*/
/*     name: {{ product.name }} <br>*/
/*     description: {{ product.description }} <br>*/
/*     price: {{ product.price }}*/
/*     category: {{ product.category }}*/
/* */
/* {% endblock %}*/
/* */
