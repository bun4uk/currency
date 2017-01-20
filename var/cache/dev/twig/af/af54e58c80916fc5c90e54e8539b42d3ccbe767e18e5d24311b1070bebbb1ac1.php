<?php

/* base.html.twig */
class __TwigTemplate_9a3807c73db04dc25e20a7ad187b929620ee17c3605c897e97bb9bb361cfd085 extends Twig_Template
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
        $__internal_c6fcf38dc4e67459d5624383956f72ea7c55f11bb68161a1ad4cac34c9924733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fcf38dc4e67459d5624383956f72ea7c55f11bb68161a1ad4cac34c9924733->enter($__internal_c6fcf38dc4e67459d5624383956f72ea7c55f11bb68161a1ad4cac34c9924733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_85c965ffe23fb3acd2e60d0509854998e8a2a827181bbab38842e4a384066f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c965ffe23fb3acd2e60d0509854998e8a2a827181bbab38842e4a384066f61->enter($__internal_85c965ffe23fb3acd2e60d0509854998e8a2a827181bbab38842e4a384066f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c6fcf38dc4e67459d5624383956f72ea7c55f11bb68161a1ad4cac34c9924733->leave($__internal_c6fcf38dc4e67459d5624383956f72ea7c55f11bb68161a1ad4cac34c9924733_prof);

        
        $__internal_85c965ffe23fb3acd2e60d0509854998e8a2a827181bbab38842e4a384066f61->leave($__internal_85c965ffe23fb3acd2e60d0509854998e8a2a827181bbab38842e4a384066f61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eef518cdf7a22045af1d7dd7c862daefa9db50a0a5fd9cddda61613c4fe6a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eef518cdf7a22045af1d7dd7c862daefa9db50a0a5fd9cddda61613c4fe6a5c->enter($__internal_8eef518cdf7a22045af1d7dd7c862daefa9db50a0a5fd9cddda61613c4fe6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e12cbe53c062f376164d8088d379f074fdb921fec4f158248a948a3f29116c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12cbe53c062f376164d8088d379f074fdb921fec4f158248a948a3f29116c93->enter($__internal_e12cbe53c062f376164d8088d379f074fdb921fec4f158248a948a3f29116c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e12cbe53c062f376164d8088d379f074fdb921fec4f158248a948a3f29116c93->leave($__internal_e12cbe53c062f376164d8088d379f074fdb921fec4f158248a948a3f29116c93_prof);

        
        $__internal_8eef518cdf7a22045af1d7dd7c862daefa9db50a0a5fd9cddda61613c4fe6a5c->leave($__internal_8eef518cdf7a22045af1d7dd7c862daefa9db50a0a5fd9cddda61613c4fe6a5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c572c2d1f3f86db4a6c029b960621e0b75d67f5955ba82a836cd5b708edc495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c572c2d1f3f86db4a6c029b960621e0b75d67f5955ba82a836cd5b708edc495->enter($__internal_3c572c2d1f3f86db4a6c029b960621e0b75d67f5955ba82a836cd5b708edc495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc8575a378845f37948093ba195822a2b2f9baf4c2db1fc0733ae5e740d0978e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8575a378845f37948093ba195822a2b2f9baf4c2db1fc0733ae5e740d0978e->enter($__internal_cc8575a378845f37948093ba195822a2b2f9baf4c2db1fc0733ae5e740d0978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cc8575a378845f37948093ba195822a2b2f9baf4c2db1fc0733ae5e740d0978e->leave($__internal_cc8575a378845f37948093ba195822a2b2f9baf4c2db1fc0733ae5e740d0978e_prof);

        
        $__internal_3c572c2d1f3f86db4a6c029b960621e0b75d67f5955ba82a836cd5b708edc495->leave($__internal_3c572c2d1f3f86db4a6c029b960621e0b75d67f5955ba82a836cd5b708edc495_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9d4ee7d44cd25bdbb7fb688ad2ad742335e1bfb13fdf6c3b582e22cc2fc7448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d4ee7d44cd25bdbb7fb688ad2ad742335e1bfb13fdf6c3b582e22cc2fc7448->enter($__internal_a9d4ee7d44cd25bdbb7fb688ad2ad742335e1bfb13fdf6c3b582e22cc2fc7448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaadd89d27d18a41cc75817f518554c2451968f45cb5487706e533ef82726212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaadd89d27d18a41cc75817f518554c2451968f45cb5487706e533ef82726212->enter($__internal_aaadd89d27d18a41cc75817f518554c2451968f45cb5487706e533ef82726212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaadd89d27d18a41cc75817f518554c2451968f45cb5487706e533ef82726212->leave($__internal_aaadd89d27d18a41cc75817f518554c2451968f45cb5487706e533ef82726212_prof);

        
        $__internal_a9d4ee7d44cd25bdbb7fb688ad2ad742335e1bfb13fdf6c3b582e22cc2fc7448->leave($__internal_a9d4ee7d44cd25bdbb7fb688ad2ad742335e1bfb13fdf6c3b582e22cc2fc7448_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c36aaa338f6c9394474bbc692cf24c9c6ff8c6a460506aca4a1bb90c10700aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c36aaa338f6c9394474bbc692cf24c9c6ff8c6a460506aca4a1bb90c10700aa->enter($__internal_7c36aaa338f6c9394474bbc692cf24c9c6ff8c6a460506aca4a1bb90c10700aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f4987e1ae2cb4be38843e6a6f461e9831eb66b4648d358131d6bf818a5642e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4987e1ae2cb4be38843e6a6f461e9831eb66b4648d358131d6bf818a5642e6->enter($__internal_3f4987e1ae2cb4be38843e6a6f461e9831eb66b4648d358131d6bf818a5642e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f4987e1ae2cb4be38843e6a6f461e9831eb66b4648d358131d6bf818a5642e6->leave($__internal_3f4987e1ae2cb4be38843e6a6f461e9831eb66b4648d358131d6bf818a5642e6_prof);

        
        $__internal_7c36aaa338f6c9394474bbc692cf24c9c6ff8c6a460506aca4a1bb90c10700aa->leave($__internal_7c36aaa338f6c9394474bbc692cf24c9c6ff8c6a460506aca4a1bb90c10700aa_prof);

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
", "base.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/app/Resources/views/base.html.twig");
    }
}
