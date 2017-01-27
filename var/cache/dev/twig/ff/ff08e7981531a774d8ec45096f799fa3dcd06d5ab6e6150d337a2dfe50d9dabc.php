<?php

/* currency/tax.html.twig */
class __TwigTemplate_5956bb9e303f7423bac0f9ac160e6a847d8bb179c8d61f49e6a1c1783b134256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwitterBootstrapBundle::layout.html.twig", "currency/tax.html.twig", 1);
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
        $__internal_fbfd210a5f2848de20e42664d53f5d28e33bebf14525a83652a984acf7077fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfd210a5f2848de20e42664d53f5d28e33bebf14525a83652a984acf7077fe4->enter($__internal_fbfd210a5f2848de20e42664d53f5d28e33bebf14525a83652a984acf7077fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax.html.twig"));

        $__internal_62145d908ecb9039a9d225629b8261a6739fbab2b281f110bafe6e4d20993409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62145d908ecb9039a9d225629b8261a6739fbab2b281f110bafe6e4d20993409->enter($__internal_62145d908ecb9039a9d225629b8261a6739fbab2b281f110bafe6e4d20993409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbfd210a5f2848de20e42664d53f5d28e33bebf14525a83652a984acf7077fe4->leave($__internal_fbfd210a5f2848de20e42664d53f5d28e33bebf14525a83652a984acf7077fe4_prof);

        
        $__internal_62145d908ecb9039a9d225629b8261a6739fbab2b281f110bafe6e4d20993409->leave($__internal_62145d908ecb9039a9d225629b8261a6739fbab2b281f110bafe6e4d20993409_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4753e6ffd2beda3822c913b4fbf0f8fd1e0fd4f78cc0b99cd13495c2aaa69cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4753e6ffd2beda3822c913b4fbf0f8fd1e0fd4f78cc0b99cd13495c2aaa69cce->enter($__internal_4753e6ffd2beda3822c913b4fbf0f8fd1e0fd4f78cc0b99cd13495c2aaa69cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7bdb1432862d9948b1d96f5ae219b674a6ccb621affea3d6f5c891dedc8e6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bdb1432862d9948b1d96f5ae219b674a6ccb621affea3d6f5c891dedc8e6e7->enter($__internal_e7bdb1432862d9948b1d96f5ae219b674a6ccb621affea3d6f5c891dedc8e6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_e7bdb1432862d9948b1d96f5ae219b674a6ccb621affea3d6f5c891dedc8e6e7->leave($__internal_e7bdb1432862d9948b1d96f5ae219b674a6ccb621affea3d6f5c891dedc8e6e7_prof);

        
        $__internal_4753e6ffd2beda3822c913b4fbf0f8fd1e0fd4f78cc0b99cd13495c2aaa69cce->leave($__internal_4753e6ffd2beda3822c913b4fbf0f8fd1e0fd4f78cc0b99cd13495c2aaa69cce_prof);

    }

    public function getTemplateName()
    {
        return "currency/tax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwitterBootstrapBundle::layout.html.twig\" %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "currency/tax.html.twig", "/var/www/html/app/Resources/views/currency/tax.html.twig");
    }
}
