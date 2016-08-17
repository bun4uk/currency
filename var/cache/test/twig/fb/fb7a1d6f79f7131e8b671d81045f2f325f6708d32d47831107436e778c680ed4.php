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
        $__internal_edcb548c6f9a4a3fbf25cbeeef6b29cd7d197e994e43c35727946df87d463a9e = $this->env->getExtension("native_profiler");
        $__internal_edcb548c6f9a4a3fbf25cbeeef6b29cd7d197e994e43c35727946df87d463a9e->enter($__internal_edcb548c6f9a4a3fbf25cbeeef6b29cd7d197e994e43c35727946df87d463a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_edcb548c6f9a4a3fbf25cbeeef6b29cd7d197e994e43c35727946df87d463a9e->leave($__internal_edcb548c6f9a4a3fbf25cbeeef6b29cd7d197e994e43c35727946df87d463a9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e9585338b495dece99b5f22e25f151e771396e2b0a0259e43235b5e506047a7 = $this->env->getExtension("native_profiler");
        $__internal_8e9585338b495dece99b5f22e25f151e771396e2b0a0259e43235b5e506047a7->enter($__internal_8e9585338b495dece99b5f22e25f151e771396e2b0a0259e43235b5e506047a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e9585338b495dece99b5f22e25f151e771396e2b0a0259e43235b5e506047a7->leave($__internal_8e9585338b495dece99b5f22e25f151e771396e2b0a0259e43235b5e506047a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa25a6513e94a6777f114d1e549c2e5c5bb290f3f255c69cff7a648e2edbcbd0 = $this->env->getExtension("native_profiler");
        $__internal_fa25a6513e94a6777f114d1e549c2e5c5bb290f3f255c69cff7a648e2edbcbd0->enter($__internal_fa25a6513e94a6777f114d1e549c2e5c5bb290f3f255c69cff7a648e2edbcbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fa25a6513e94a6777f114d1e549c2e5c5bb290f3f255c69cff7a648e2edbcbd0->leave($__internal_fa25a6513e94a6777f114d1e549c2e5c5bb290f3f255c69cff7a648e2edbcbd0_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_53e344ad7002bfe896b67689dc0a5dd1ccecdeee850b05cf68450f681307483b = $this->env->getExtension("native_profiler");
        $__internal_53e344ad7002bfe896b67689dc0a5dd1ccecdeee850b05cf68450f681307483b->enter($__internal_53e344ad7002bfe896b67689dc0a5dd1ccecdeee850b05cf68450f681307483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53e344ad7002bfe896b67689dc0a5dd1ccecdeee850b05cf68450f681307483b->leave($__internal_53e344ad7002bfe896b67689dc0a5dd1ccecdeee850b05cf68450f681307483b_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_210ac230430259aaf0fdbf212aa81dfdc21e2d52d0c5db8f94cb274e1e6bc04c = $this->env->getExtension("native_profiler");
        $__internal_210ac230430259aaf0fdbf212aa81dfdc21e2d52d0c5db8f94cb274e1e6bc04c->enter($__internal_210ac230430259aaf0fdbf212aa81dfdc21e2d52d0c5db8f94cb274e1e6bc04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_210ac230430259aaf0fdbf212aa81dfdc21e2d52d0c5db8f94cb274e1e6bc04c->leave($__internal_210ac230430259aaf0fdbf212aa81dfdc21e2d52d0c5db8f94cb274e1e6bc04c_prof);

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
