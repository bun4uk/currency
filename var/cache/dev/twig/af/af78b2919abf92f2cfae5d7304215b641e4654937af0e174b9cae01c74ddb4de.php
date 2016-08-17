<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b67b24a47cf8d8b3e3c4ee54b51316c3d46af1a5cc1b0e4748400e75a75703ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d4760fb2ec685bf1771fac1ae696222f2a437acc99533cac26a7e3066a7a7f8b = $this->env->getExtension("native_profiler");
        $__internal_d4760fb2ec685bf1771fac1ae696222f2a437acc99533cac26a7e3066a7a7f8b->enter($__internal_d4760fb2ec685bf1771fac1ae696222f2a437acc99533cac26a7e3066a7a7f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4760fb2ec685bf1771fac1ae696222f2a437acc99533cac26a7e3066a7a7f8b->leave($__internal_d4760fb2ec685bf1771fac1ae696222f2a437acc99533cac26a7e3066a7a7f8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca1a896a633cd72ca5b629ddf5b71180fb43e90d4a348629f74504982fd2f4e3 = $this->env->getExtension("native_profiler");
        $__internal_ca1a896a633cd72ca5b629ddf5b71180fb43e90d4a348629f74504982fd2f4e3->enter($__internal_ca1a896a633cd72ca5b629ddf5b71180fb43e90d4a348629f74504982fd2f4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ca1a896a633cd72ca5b629ddf5b71180fb43e90d4a348629f74504982fd2f4e3->leave($__internal_ca1a896a633cd72ca5b629ddf5b71180fb43e90d4a348629f74504982fd2f4e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_008c2d7190d7e8b34902edccd025495a5478ed427a25f75455ea2a56fabde823 = $this->env->getExtension("native_profiler");
        $__internal_008c2d7190d7e8b34902edccd025495a5478ed427a25f75455ea2a56fabde823->enter($__internal_008c2d7190d7e8b34902edccd025495a5478ed427a25f75455ea2a56fabde823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_008c2d7190d7e8b34902edccd025495a5478ed427a25f75455ea2a56fabde823->leave($__internal_008c2d7190d7e8b34902edccd025495a5478ed427a25f75455ea2a56fabde823_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5d39a1e32036ce294d5f2685ce1d4aef9df3cd13db38e3bfd8a4607b76a90ab = $this->env->getExtension("native_profiler");
        $__internal_a5d39a1e32036ce294d5f2685ce1d4aef9df3cd13db38e3bfd8a4607b76a90ab->enter($__internal_a5d39a1e32036ce294d5f2685ce1d4aef9df3cd13db38e3bfd8a4607b76a90ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a5d39a1e32036ce294d5f2685ce1d4aef9df3cd13db38e3bfd8a4607b76a90ab->leave($__internal_a5d39a1e32036ce294d5f2685ce1d4aef9df3cd13db38e3bfd8a4607b76a90ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
