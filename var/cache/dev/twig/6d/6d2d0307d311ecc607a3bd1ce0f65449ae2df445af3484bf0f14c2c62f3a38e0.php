<?php

/* base.html.twig */
class __TwigTemplate_3bf6be013802df5cc2204d3899c199076597ff2bd8cbf63fb94c785c26a2e859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e885b798c14e49de93fea7159e0c27b63ca79fb19c22738b0f70cec3cb84ff77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e885b798c14e49de93fea7159e0c27b63ca79fb19c22738b0f70cec3cb84ff77->enter($__internal_e885b798c14e49de93fea7159e0c27b63ca79fb19c22738b0f70cec3cb84ff77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cf551131c95fc6e9267389cfaceaf774968050b9cae4e407374d73a5984456e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf551131c95fc6e9267389cfaceaf774968050b9cae4e407374d73a5984456e0->enter($__internal_cf551131c95fc6e9267389cfaceaf774968050b9cae4e407374d73a5984456e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_e885b798c14e49de93fea7159e0c27b63ca79fb19c22738b0f70cec3cb84ff77->leave($__internal_e885b798c14e49de93fea7159e0c27b63ca79fb19c22738b0f70cec3cb84ff77_prof);

        
        $__internal_cf551131c95fc6e9267389cfaceaf774968050b9cae4e407374d73a5984456e0->leave($__internal_cf551131c95fc6e9267389cfaceaf774968050b9cae4e407374d73a5984456e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22df453f5e98a0c093571729991e3970c66fc24353cf634466085f7be01a1461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22df453f5e98a0c093571729991e3970c66fc24353cf634466085f7be01a1461->enter($__internal_22df453f5e98a0c093571729991e3970c66fc24353cf634466085f7be01a1461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91188cc67374cf27c33e25929c44395c55de83745398389877fdeccdf210f0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91188cc67374cf27c33e25929c44395c55de83745398389877fdeccdf210f0dd->enter($__internal_91188cc67374cf27c33e25929c44395c55de83745398389877fdeccdf210f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91188cc67374cf27c33e25929c44395c55de83745398389877fdeccdf210f0dd->leave($__internal_91188cc67374cf27c33e25929c44395c55de83745398389877fdeccdf210f0dd_prof);

        
        $__internal_22df453f5e98a0c093571729991e3970c66fc24353cf634466085f7be01a1461->leave($__internal_22df453f5e98a0c093571729991e3970c66fc24353cf634466085f7be01a1461_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d749ba4fa35caf0c74f7c600bc54cf09cbbd9395a31361dd6977cad626b75cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d749ba4fa35caf0c74f7c600bc54cf09cbbd9395a31361dd6977cad626b75cc->enter($__internal_7d749ba4fa35caf0c74f7c600bc54cf09cbbd9395a31361dd6977cad626b75cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f90769b89081f26941003100247d862b9beac3500bca54da8316741be8a9f0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90769b89081f26941003100247d862b9beac3500bca54da8316741be8a9f0af->enter($__internal_f90769b89081f26941003100247d862b9beac3500bca54da8316741be8a9f0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <style>
                table {
                    /*border: 1px solid;*/
                }
                td, th {
                    padding: 5px;
                }
                tr:nth-child(even) {background: #9ec8cb
                }
                tr:nth-child(odd) {background: #bcdfe2
                }
            </style>
        ";
        
        $__internal_f90769b89081f26941003100247d862b9beac3500bca54da8316741be8a9f0af->leave($__internal_f90769b89081f26941003100247d862b9beac3500bca54da8316741be8a9f0af_prof);

        
        $__internal_7d749ba4fa35caf0c74f7c600bc54cf09cbbd9395a31361dd6977cad626b75cc->leave($__internal_7d749ba4fa35caf0c74f7c600bc54cf09cbbd9395a31361dd6977cad626b75cc_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9217ee1d7bf211dff7df6cc44fa42a5046e46190f095f01ecc05a63b99722d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9217ee1d7bf211dff7df6cc44fa42a5046e46190f095f01ecc05a63b99722d0->enter($__internal_f9217ee1d7bf211dff7df6cc44fa42a5046e46190f095f01ecc05a63b99722d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f8a32c32d95ab97c5b8b990d8fda080ecac8cb6ae8a63a01e1f631e01263142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8a32c32d95ab97c5b8b990d8fda080ecac8cb6ae8a63a01e1f631e01263142->enter($__internal_3f8a32c32d95ab97c5b8b990d8fda080ecac8cb6ae8a63a01e1f631e01263142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f8a32c32d95ab97c5b8b990d8fda080ecac8cb6ae8a63a01e1f631e01263142->leave($__internal_3f8a32c32d95ab97c5b8b990d8fda080ecac8cb6ae8a63a01e1f631e01263142_prof);

        
        $__internal_f9217ee1d7bf211dff7df6cc44fa42a5046e46190f095f01ecc05a63b99722d0->leave($__internal_f9217ee1d7bf211dff7df6cc44fa42a5046e46190f095f01ecc05a63b99722d0_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2efb7045d89006c70f881a308a291fbbb02cbaded96e9cfbbf9e053ac138eb36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efb7045d89006c70f881a308a291fbbb02cbaded96e9cfbbf9e053ac138eb36->enter($__internal_2efb7045d89006c70f881a308a291fbbb02cbaded96e9cfbbf9e053ac138eb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_36c9be05ecaee8148a9fdadff5bb49c9952cc184c1df6ffbab9d87e669a4b281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c9be05ecaee8148a9fdadff5bb49c9952cc184c1df6ffbab9d87e669a4b281->enter($__internal_36c9be05ecaee8148a9fdadff5bb49c9952cc184c1df6ffbab9d87e669a4b281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_36c9be05ecaee8148a9fdadff5bb49c9952cc184c1df6ffbab9d87e669a4b281->leave($__internal_36c9be05ecaee8148a9fdadff5bb49c9952cc184c1df6ffbab9d87e669a4b281_prof);

        
        $__internal_2efb7045d89006c70f881a308a291fbbb02cbaded96e9cfbbf9e053ac138eb36->leave($__internal_2efb7045d89006c70f881a308a291fbbb02cbaded96e9cfbbf9e053ac138eb36_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 24,  114 => 23,  92 => 7,  83 => 6,  65 => 5,  53 => 25,  50 => 24,  48 => 23,  41 => 20,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <style>
                table {
                    /*border: 1px solid;*/
                }
                td, th {
                    padding: 5px;
                }
                tr:nth-child(even) {background: #9ec8cb
                }
                tr:nth-child(odd) {background: #bcdfe2
                }
            </style>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
