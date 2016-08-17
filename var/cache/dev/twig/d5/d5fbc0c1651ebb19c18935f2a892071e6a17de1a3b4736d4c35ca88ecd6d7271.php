<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_738edcb3543aadb3119e4c6bbcb818a0d14f33070d96bdd26625ed9e08d42a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916ea6e0159b21459a6c77043ad819c231a5bdcb146adbb14f7acd7badc56ec8 = $this->env->getExtension("native_profiler");
        $__internal_916ea6e0159b21459a6c77043ad819c231a5bdcb146adbb14f7acd7badc56ec8->enter($__internal_916ea6e0159b21459a6c77043ad819c231a5bdcb146adbb14f7acd7badc56ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916ea6e0159b21459a6c77043ad819c231a5bdcb146adbb14f7acd7badc56ec8->leave($__internal_916ea6e0159b21459a6c77043ad819c231a5bdcb146adbb14f7acd7badc56ec8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e391245a3cde4eb9e79e0edeee462b3287c56c8cdab63d3005fd4db95e9310d0 = $this->env->getExtension("native_profiler");
        $__internal_e391245a3cde4eb9e79e0edeee462b3287c56c8cdab63d3005fd4db95e9310d0->enter($__internal_e391245a3cde4eb9e79e0edeee462b3287c56c8cdab63d3005fd4db95e9310d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e391245a3cde4eb9e79e0edeee462b3287c56c8cdab63d3005fd4db95e9310d0->leave($__internal_e391245a3cde4eb9e79e0edeee462b3287c56c8cdab63d3005fd4db95e9310d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e453d672f4d8c07ab7f325277dc5d1a29771ab99a7766464698025ef5ec9528a = $this->env->getExtension("native_profiler");
        $__internal_e453d672f4d8c07ab7f325277dc5d1a29771ab99a7766464698025ef5ec9528a->enter($__internal_e453d672f4d8c07ab7f325277dc5d1a29771ab99a7766464698025ef5ec9528a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e453d672f4d8c07ab7f325277dc5d1a29771ab99a7766464698025ef5ec9528a->leave($__internal_e453d672f4d8c07ab7f325277dc5d1a29771ab99a7766464698025ef5ec9528a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_713cca69cbb594b9e3355f041a051268fe040150e6fc059eede23289459d7f98 = $this->env->getExtension("native_profiler");
        $__internal_713cca69cbb594b9e3355f041a051268fe040150e6fc059eede23289459d7f98->enter($__internal_713cca69cbb594b9e3355f041a051268fe040150e6fc059eede23289459d7f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_713cca69cbb594b9e3355f041a051268fe040150e6fc059eede23289459d7f98->leave($__internal_713cca69cbb594b9e3355f041a051268fe040150e6fc059eede23289459d7f98_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
