<?php

/* base.html.twig */
class __TwigTemplate_7e15a045f11fbe09f3cc123387790f36c86125ee19c33bf9665cee39ae805eec extends Twig_Template
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
        $__internal_837c71003ef007484699bdf9770b212732dc0b6e79738b30bc5388b83064d762 = $this->env->getExtension("native_profiler");
        $__internal_837c71003ef007484699bdf9770b212732dc0b6e79738b30bc5388b83064d762->enter($__internal_837c71003ef007484699bdf9770b212732dc0b6e79738b30bc5388b83064d762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_837c71003ef007484699bdf9770b212732dc0b6e79738b30bc5388b83064d762->leave($__internal_837c71003ef007484699bdf9770b212732dc0b6e79738b30bc5388b83064d762_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b9f0871f8bf91a47d881f3454c9472b4be9064622e5cc27a674666955d4d4d6 = $this->env->getExtension("native_profiler");
        $__internal_9b9f0871f8bf91a47d881f3454c9472b4be9064622e5cc27a674666955d4d4d6->enter($__internal_9b9f0871f8bf91a47d881f3454c9472b4be9064622e5cc27a674666955d4d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b9f0871f8bf91a47d881f3454c9472b4be9064622e5cc27a674666955d4d4d6->leave($__internal_9b9f0871f8bf91a47d881f3454c9472b4be9064622e5cc27a674666955d4d4d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0fce78d9c99507b20b6c5aa7f4d3dae249bf2aa3be2127979dd79f4eec027b8 = $this->env->getExtension("native_profiler");
        $__internal_f0fce78d9c99507b20b6c5aa7f4d3dae249bf2aa3be2127979dd79f4eec027b8->enter($__internal_f0fce78d9c99507b20b6c5aa7f4d3dae249bf2aa3be2127979dd79f4eec027b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f0fce78d9c99507b20b6c5aa7f4d3dae249bf2aa3be2127979dd79f4eec027b8->leave($__internal_f0fce78d9c99507b20b6c5aa7f4d3dae249bf2aa3be2127979dd79f4eec027b8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd165ead53b5469c74a4f414d3fb2dbc42173099282e937ac75d3b8b3ceb855 = $this->env->getExtension("native_profiler");
        $__internal_2fd165ead53b5469c74a4f414d3fb2dbc42173099282e937ac75d3b8b3ceb855->enter($__internal_2fd165ead53b5469c74a4f414d3fb2dbc42173099282e937ac75d3b8b3ceb855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fd165ead53b5469c74a4f414d3fb2dbc42173099282e937ac75d3b8b3ceb855->leave($__internal_2fd165ead53b5469c74a4f414d3fb2dbc42173099282e937ac75d3b8b3ceb855_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48fb667ec7d2b16516d14d1d1ed54fe45650af50dd0c965cdcba74fa631bc3eb = $this->env->getExtension("native_profiler");
        $__internal_48fb667ec7d2b16516d14d1d1ed54fe45650af50dd0c965cdcba74fa631bc3eb->enter($__internal_48fb667ec7d2b16516d14d1d1ed54fe45650af50dd0c965cdcba74fa631bc3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48fb667ec7d2b16516d14d1d1ed54fe45650af50dd0c965cdcba74fa631bc3eb->leave($__internal_48fb667ec7d2b16516d14d1d1ed54fe45650af50dd0c965cdcba74fa631bc3eb_prof);

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
        return array (  107 => 24,  96 => 23,  77 => 7,  71 => 6,  59 => 5,  50 => 25,  47 => 24,  45 => 23,  38 => 20,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <style>*/
/*                 table {*/
/*                     /*border: 1px solid;*//* */
/*                 }*/
/*                 td, th {*/
/*                     padding: 5px;*/
/*                 }*/
/*                 tr:nth-child(even) {background: #9ec8cb*/
/*                 }*/
/*                 tr:nth-child(odd) {background: #bcdfe2*/
/*                 }*/
/*             </style>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
