<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_d62b1174dcd613e3890bf1559e22392ce28d8b2a8b96e69c1ae9481746ca4674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc04c17d890d3cc35f65191166a00b8ebd30177d21be0ae16e7f87c964dbca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc04c17d890d3cc35f65191166a00b8ebd30177d21be0ae16e7f87c964dbca1->enter($__internal_cdc04c17d890d3cc35f65191166a00b8ebd30177d21be0ae16e7f87c964dbca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_dfe8718489f6da328f2c8c3d289aa8a4d58fe38adeedd1bf01a8d11ef0c89205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe8718489f6da328f2c8c3d289aa8a4d58fe38adeedd1bf01a8d11ef0c89205->enter($__internal_dfe8718489f6da328f2c8c3d289aa8a4d58fe38adeedd1bf01a8d11ef0c89205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 1, $this->getSourceContext()); })()), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) || array_key_exists("additional_classes", $context) ? $context["additional_classes"] : (function () { throw new Twig_Error_Runtime('Variable "additional_classes" does not exist.', 1, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 2, $this->getSourceContext()); })()))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 2, $this->getSourceContext()); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 2, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 5, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_cdc04c17d890d3cc35f65191166a00b8ebd30177d21be0ae16e7f87c964dbca1->leave($__internal_cdc04c17d890d3cc35f65191166a00b8ebd30177d21be0ae16e7f87c964dbca1_prof);

        
        $__internal_dfe8718489f6da328f2c8c3d289aa8a4d58fe38adeedd1bf01a8d11ef0c89205->leave($__internal_dfe8718489f6da328f2c8c3d289aa8a4d58fe38adeedd1bf01a8d11ef0c89205_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 3,  34 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
