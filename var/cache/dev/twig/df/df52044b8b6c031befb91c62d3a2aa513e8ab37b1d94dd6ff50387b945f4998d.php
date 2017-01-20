<?php

/* currency/tax.html.twig */
class __TwigTemplate_ce90549d4587f8e5da2924f5d12cca7a7920f32e770329a0242f41746386fc29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "currency/tax.html.twig", 1);
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
        $__internal_63e294eb4d9c7b74f81b750fb7c17fc5045e988f785bcc242c50e3965c1752ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e294eb4d9c7b74f81b750fb7c17fc5045e988f785bcc242c50e3965c1752ce->enter($__internal_63e294eb4d9c7b74f81b750fb7c17fc5045e988f785bcc242c50e3965c1752ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax.html.twig"));

        $__internal_06434077d99fd5cc9eac80fecb1730d3150cfe0abfe1af4b92260a4f6de5a2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06434077d99fd5cc9eac80fecb1730d3150cfe0abfe1af4b92260a4f6de5a2e6->enter($__internal_06434077d99fd5cc9eac80fecb1730d3150cfe0abfe1af4b92260a4f6de5a2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/tax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e294eb4d9c7b74f81b750fb7c17fc5045e988f785bcc242c50e3965c1752ce->leave($__internal_63e294eb4d9c7b74f81b750fb7c17fc5045e988f785bcc242c50e3965c1752ce_prof);

        
        $__internal_06434077d99fd5cc9eac80fecb1730d3150cfe0abfe1af4b92260a4f6de5a2e6->leave($__internal_06434077d99fd5cc9eac80fecb1730d3150cfe0abfe1af4b92260a4f6de5a2e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_271c94edd408ec65bfa6d3118e9aa9fbcdfcbb2fafd2780808806f1d3a237234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271c94edd408ec65bfa6d3118e9aa9fbcdfcbb2fafd2780808806f1d3a237234->enter($__internal_271c94edd408ec65bfa6d3118e9aa9fbcdfcbb2fafd2780808806f1d3a237234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2347f5bc6c2eb4289d19cac731be72bbac519912c64139be2695a922b8507c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2347f5bc6c2eb4289d19cac731be72bbac519912c64139be2695a922b8507c2->enter($__internal_a2347f5bc6c2eb4289d19cac731be72bbac519912c64139be2695a922b8507c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2347f5bc6c2eb4289d19cac731be72bbac519912c64139be2695a922b8507c2->leave($__internal_a2347f5bc6c2eb4289d19cac731be72bbac519912c64139be2695a922b8507c2_prof);

        
        $__internal_271c94edd408ec65bfa6d3118e9aa9fbcdfcbb2fafd2780808806f1d3a237234->leave($__internal_271c94edd408ec65bfa6d3118e9aa9fbcdfcbb2fafd2780808806f1d3a237234_prof);

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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", "currency/tax.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/app/Resources/views/currency/tax.html.twig");
    }
}
