<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02fce60ffe5f8f09ac554529d3f11b439809dc5e9d4b844a8494df23407cf3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12858ab99d3f290b4fb447a0a6d608b6d48631c7e51c125123b18d28a5248eb3 = $this->env->getExtension("native_profiler");
        $__internal_12858ab99d3f290b4fb447a0a6d608b6d48631c7e51c125123b18d28a5248eb3->enter($__internal_12858ab99d3f290b4fb447a0a6d608b6d48631c7e51c125123b18d28a5248eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12858ab99d3f290b4fb447a0a6d608b6d48631c7e51c125123b18d28a5248eb3->leave($__internal_12858ab99d3f290b4fb447a0a6d608b6d48631c7e51c125123b18d28a5248eb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7c9f40b61ea1c16c199d0db071ab7eaad735faa68c892f671880a423fd0a12a = $this->env->getExtension("native_profiler");
        $__internal_d7c9f40b61ea1c16c199d0db071ab7eaad735faa68c892f671880a423fd0a12a->enter($__internal_d7c9f40b61ea1c16c199d0db071ab7eaad735faa68c892f671880a423fd0a12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7c9f40b61ea1c16c199d0db071ab7eaad735faa68c892f671880a423fd0a12a->leave($__internal_d7c9f40b61ea1c16c199d0db071ab7eaad735faa68c892f671880a423fd0a12a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef2ec35073e8141d2d0825af81c44934a4930e32b45d2777a1715fe1654da534 = $this->env->getExtension("native_profiler");
        $__internal_ef2ec35073e8141d2d0825af81c44934a4930e32b45d2777a1715fe1654da534->enter($__internal_ef2ec35073e8141d2d0825af81c44934a4930e32b45d2777a1715fe1654da534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef2ec35073e8141d2d0825af81c44934a4930e32b45d2777a1715fe1654da534->leave($__internal_ef2ec35073e8141d2d0825af81c44934a4930e32b45d2777a1715fe1654da534_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d719baa0c055decd062367e68881782ccfa38b81c1cae67d31521cc2538cddcd = $this->env->getExtension("native_profiler");
        $__internal_d719baa0c055decd062367e68881782ccfa38b81c1cae67d31521cc2538cddcd->enter($__internal_d719baa0c055decd062367e68881782ccfa38b81c1cae67d31521cc2538cddcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d719baa0c055decd062367e68881782ccfa38b81c1cae67d31521cc2538cddcd->leave($__internal_d719baa0c055decd062367e68881782ccfa38b81c1cae67d31521cc2538cddcd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
