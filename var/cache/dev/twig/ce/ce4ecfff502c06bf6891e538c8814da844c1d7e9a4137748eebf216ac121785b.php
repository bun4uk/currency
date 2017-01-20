<?php

/* base.html.twig */
class __TwigTemplate_768654ecf4010b789dfc68ac1446388a4444e9186aff1f45205552818bb1d05e extends Twig_Template
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
        $__internal_e5e467f7a78d1294f8d36073d7aa2bff7799cd2de7954b13804ecf0ccbeebb84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e467f7a78d1294f8d36073d7aa2bff7799cd2de7954b13804ecf0ccbeebb84->enter($__internal_e5e467f7a78d1294f8d36073d7aa2bff7799cd2de7954b13804ecf0ccbeebb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f8bb00566d9c90208ac2b8214924bc2d902926fea741690f1ebc8681cfc8bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8bb00566d9c90208ac2b8214924bc2d902926fea741690f1ebc8681cfc8bfa->enter($__internal_6f8bb00566d9c90208ac2b8214924bc2d902926fea741690f1ebc8681cfc8bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e5e467f7a78d1294f8d36073d7aa2bff7799cd2de7954b13804ecf0ccbeebb84->leave($__internal_e5e467f7a78d1294f8d36073d7aa2bff7799cd2de7954b13804ecf0ccbeebb84_prof);

        
        $__internal_6f8bb00566d9c90208ac2b8214924bc2d902926fea741690f1ebc8681cfc8bfa->leave($__internal_6f8bb00566d9c90208ac2b8214924bc2d902926fea741690f1ebc8681cfc8bfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_897edfe2a3138e7f1ffd2813406b23a027b1594b76b136eab72c9a5a6ccd6473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897edfe2a3138e7f1ffd2813406b23a027b1594b76b136eab72c9a5a6ccd6473->enter($__internal_897edfe2a3138e7f1ffd2813406b23a027b1594b76b136eab72c9a5a6ccd6473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c80661242a83eba9140271be30b3ed5434057b667b76e06290edbb75418ae362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80661242a83eba9140271be30b3ed5434057b667b76e06290edbb75418ae362->enter($__internal_c80661242a83eba9140271be30b3ed5434057b667b76e06290edbb75418ae362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c80661242a83eba9140271be30b3ed5434057b667b76e06290edbb75418ae362->leave($__internal_c80661242a83eba9140271be30b3ed5434057b667b76e06290edbb75418ae362_prof);

        
        $__internal_897edfe2a3138e7f1ffd2813406b23a027b1594b76b136eab72c9a5a6ccd6473->leave($__internal_897edfe2a3138e7f1ffd2813406b23a027b1594b76b136eab72c9a5a6ccd6473_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f68c56605b6dca96288813f1b7d30156632ad2509dbbca527874a15d88eec57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f68c56605b6dca96288813f1b7d30156632ad2509dbbca527874a15d88eec57->enter($__internal_8f68c56605b6dca96288813f1b7d30156632ad2509dbbca527874a15d88eec57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eebf0e87015b5e398d6a32cee8380b8f0c8b7ea26662255ab3ef63d2f737193b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebf0e87015b5e398d6a32cee8380b8f0c8b7ea26662255ab3ef63d2f737193b->enter($__internal_eebf0e87015b5e398d6a32cee8380b8f0c8b7ea26662255ab3ef63d2f737193b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_eebf0e87015b5e398d6a32cee8380b8f0c8b7ea26662255ab3ef63d2f737193b->leave($__internal_eebf0e87015b5e398d6a32cee8380b8f0c8b7ea26662255ab3ef63d2f737193b_prof);

        
        $__internal_8f68c56605b6dca96288813f1b7d30156632ad2509dbbca527874a15d88eec57->leave($__internal_8f68c56605b6dca96288813f1b7d30156632ad2509dbbca527874a15d88eec57_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_c103e4dd3fde942531ddda76c1e84943d783ca6c194964e08bbca23242e5e8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c103e4dd3fde942531ddda76c1e84943d783ca6c194964e08bbca23242e5e8cd->enter($__internal_c103e4dd3fde942531ddda76c1e84943d783ca6c194964e08bbca23242e5e8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85d880e4a5153bb96d002c8dfe754a7a37042263a34328d68b3cd58d1ae84995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d880e4a5153bb96d002c8dfe754a7a37042263a34328d68b3cd58d1ae84995->enter($__internal_85d880e4a5153bb96d002c8dfe754a7a37042263a34328d68b3cd58d1ae84995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85d880e4a5153bb96d002c8dfe754a7a37042263a34328d68b3cd58d1ae84995->leave($__internal_85d880e4a5153bb96d002c8dfe754a7a37042263a34328d68b3cd58d1ae84995_prof);

        
        $__internal_c103e4dd3fde942531ddda76c1e84943d783ca6c194964e08bbca23242e5e8cd->leave($__internal_c103e4dd3fde942531ddda76c1e84943d783ca6c194964e08bbca23242e5e8cd_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a93754547ed4114a2a490d0599bc9226e860216bbaea8d5d1dfe8f63362b2a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93754547ed4114a2a490d0599bc9226e860216bbaea8d5d1dfe8f63362b2a59->enter($__internal_a93754547ed4114a2a490d0599bc9226e860216bbaea8d5d1dfe8f63362b2a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f0b270322d0ab1209db247466c0a5f996fe10ec36acfbf581cbb524705d3f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b270322d0ab1209db247466c0a5f996fe10ec36acfbf581cbb524705d3f05->enter($__internal_6f0b270322d0ab1209db247466c0a5f996fe10ec36acfbf581cbb524705d3f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f0b270322d0ab1209db247466c0a5f996fe10ec36acfbf581cbb524705d3f05->leave($__internal_6f0b270322d0ab1209db247466c0a5f996fe10ec36acfbf581cbb524705d3f05_prof);

        
        $__internal_a93754547ed4114a2a490d0599bc9226e860216bbaea8d5d1dfe8f63362b2a59->leave($__internal_a93754547ed4114a2a490d0599bc9226e860216bbaea8d5d1dfe8f63362b2a59_prof);

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
