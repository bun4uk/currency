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
        $__internal_3fcfef5c0cbe4b6582bb6f14360d016203cb2caba165129f8cd8d8ac73770a4f = $this->env->getExtension("native_profiler");
        $__internal_3fcfef5c0cbe4b6582bb6f14360d016203cb2caba165129f8cd8d8ac73770a4f->enter($__internal_3fcfef5c0cbe4b6582bb6f14360d016203cb2caba165129f8cd8d8ac73770a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fcfef5c0cbe4b6582bb6f14360d016203cb2caba165129f8cd8d8ac73770a4f->leave($__internal_3fcfef5c0cbe4b6582bb6f14360d016203cb2caba165129f8cd8d8ac73770a4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a78f68d6578768c215a2390f27f02d4c3cd928c70e732689c6af001194f29a1 = $this->env->getExtension("native_profiler");
        $__internal_1a78f68d6578768c215a2390f27f02d4c3cd928c70e732689c6af001194f29a1->enter($__internal_1a78f68d6578768c215a2390f27f02d4c3cd928c70e732689c6af001194f29a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a78f68d6578768c215a2390f27f02d4c3cd928c70e732689c6af001194f29a1->leave($__internal_1a78f68d6578768c215a2390f27f02d4c3cd928c70e732689c6af001194f29a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fda5bde062a7a5e50e79c010838ca437d72642ca5ec06e91504f3d48f57209d = $this->env->getExtension("native_profiler");
        $__internal_2fda5bde062a7a5e50e79c010838ca437d72642ca5ec06e91504f3d48f57209d->enter($__internal_2fda5bde062a7a5e50e79c010838ca437d72642ca5ec06e91504f3d48f57209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2fda5bde062a7a5e50e79c010838ca437d72642ca5ec06e91504f3d48f57209d->leave($__internal_2fda5bde062a7a5e50e79c010838ca437d72642ca5ec06e91504f3d48f57209d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_959e047ab2dade861f10f4602dfced55bc537974dfbc820963f508592f91025a = $this->env->getExtension("native_profiler");
        $__internal_959e047ab2dade861f10f4602dfced55bc537974dfbc820963f508592f91025a->enter($__internal_959e047ab2dade861f10f4602dfced55bc537974dfbc820963f508592f91025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_959e047ab2dade861f10f4602dfced55bc537974dfbc820963f508592f91025a->leave($__internal_959e047ab2dade861f10f4602dfced55bc537974dfbc820963f508592f91025a_prof);

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
