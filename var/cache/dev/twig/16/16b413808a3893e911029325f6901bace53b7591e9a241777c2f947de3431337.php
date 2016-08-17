<?php

/* product/index.html.twig */
class __TwigTemplate_eab574de0db3fd0c7b4fbb5e7b9fc70ee52ea7c9f0aee45d3a2abba9424a228c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_6ccaf3f54c1d40a5cd35fc2dc1d927eb4b62ee69f27dad18b97b0dfc71e496eb = $this->env->getExtension("native_profiler");
        $__internal_6ccaf3f54c1d40a5cd35fc2dc1d927eb4b62ee69f27dad18b97b0dfc71e496eb->enter($__internal_6ccaf3f54c1d40a5cd35fc2dc1d927eb4b62ee69f27dad18b97b0dfc71e496eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccaf3f54c1d40a5cd35fc2dc1d927eb4b62ee69f27dad18b97b0dfc71e496eb->leave($__internal_6ccaf3f54c1d40a5cd35fc2dc1d927eb4b62ee69f27dad18b97b0dfc71e496eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4350077fee14462ad64c29c8720edd0a8138279a83bda9fb9ca0f2c62b224f = $this->env->getExtension("native_profiler");
        $__internal_8c4350077fee14462ad64c29c8720edd0a8138279a83bda9fb9ca0f2c62b224f->enter($__internal_8c4350077fee14462ad64c29c8720edd0a8138279a83bda9fb9ca0f2c62b224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_8c4350077fee14462ad64c29c8720edd0a8138279a83bda9fb9ca0f2c62b224f->leave($__internal_8c4350077fee14462ad64c29c8720edd0a8138279a83bda9fb9ca0f2c62b224f_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
