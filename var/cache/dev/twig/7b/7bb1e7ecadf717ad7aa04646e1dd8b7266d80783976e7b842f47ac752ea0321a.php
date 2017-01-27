<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_0169eb25230df2f23f844451fd26a983d2f84e811ac7433ba18ef6c16f40c930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        $__internal_48e9d87d8a7d067ef9a437d24eefc1da5b52c89b4e85764ba192df0077a2cb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e9d87d8a7d067ef9a437d24eefc1da5b52c89b4e85764ba192df0077a2cb93->enter($__internal_48e9d87d8a7d067ef9a437d24eefc1da5b52c89b4e85764ba192df0077a2cb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_8ce49670ecabff516c940d5228eabebdacb4c7223e5d772ea305fd88ca156165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce49670ecabff516c940d5228eabebdacb4c7223e5d772ea305fd88ca156165->enter($__internal_8ce49670ecabff516c940d5228eabebdacb4c7223e5d772ea305fd88ca156165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e9d87d8a7d067ef9a437d24eefc1da5b52c89b4e85764ba192df0077a2cb93->leave($__internal_48e9d87d8a7d067ef9a437d24eefc1da5b52c89b4e85764ba192df0077a2cb93_prof);

        
        $__internal_8ce49670ecabff516c940d5228eabebdacb4c7223e5d772ea305fd88ca156165->leave($__internal_8ce49670ecabff516c940d5228eabebdacb4c7223e5d772ea305fd88ca156165_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8ba3f58bf2ea134a6b363839d78001e32c8b4e799d6b7d71816824b22c0b82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ba3f58bf2ea134a6b363839d78001e32c8b4e799d6b7d71816824b22c0b82d->enter($__internal_f8ba3f58bf2ea134a6b363839d78001e32c8b4e799d6b7d71816824b22c0b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e860ccdc288d7fa08d6f80d820856069db6a83989534794a8156c8b48849835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e860ccdc288d7fa08d6f80d820856069db6a83989534794a8156c8b48849835->enter($__internal_9e860ccdc288d7fa08d6f80d820856069db6a83989534794a8156c8b48849835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "dumpsCount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "dumpsCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array())) {
                    // line 15
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                    // line 16
                    echo "                        ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 16, $this->getSourceContext()); })())) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
                echo "</span>

                    ";
                // line 27
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_9e860ccdc288d7fa08d6f80d820856069db6a83989534794a8156c8b48849835->leave($__internal_9e860ccdc288d7fa08d6f80d820856069db6a83989534794a8156c8b48849835_prof);

        
        $__internal_f8ba3f58bf2ea134a6b363839d78001e32c8b4e799d6b7d71816824b22c0b82d->leave($__internal_f8ba3f58bf2ea134a6b363839d78001e32c8b4e799d6b7d71816824b22c0b82d_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8537d2cfbdd2f708d392688e33c672f925d3db5050d60547aa8d77164ae66abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8537d2cfbdd2f708d392688e33c672f925d3db5050d60547aa8d77164ae66abc->enter($__internal_8537d2cfbdd2f708d392688e33c672f925d3db5050d60547aa8d77164ae66abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd2f62fd208bc7afc9eaaed9a0cc442f17eb1a3c8a32b75b2b0b05c041244289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2f62fd208bc7afc9eaaed9a0cc442f17eb1a3c8a32b75b2b0b05c041244289->enter($__internal_bd2f62fd208bc7afc9eaaed9a0cc442f17eb1a3c8a32b75b2b0b05c041244289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 38
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_bd2f62fd208bc7afc9eaaed9a0cc442f17eb1a3c8a32b75b2b0b05c041244289->leave($__internal_bd2f62fd208bc7afc9eaaed9a0cc442f17eb1a3c8a32b75b2b0b05c041244289_prof);

        
        $__internal_8537d2cfbdd2f708d392688e33c672f925d3db5050d60547aa8d77164ae66abc->leave($__internal_8537d2cfbdd2f708d392688e33c672f925d3db5050d60547aa8d77164ae66abc_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bad98ed17557f725e0e791f2c153e1de64e5278b378e941b1a0abfecab4f048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bad98ed17557f725e0e791f2c153e1de64e5278b378e941b1a0abfecab4f048->enter($__internal_9bad98ed17557f725e0e791f2c153e1de64e5278b378e941b1a0abfecab4f048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cda9c339214537c2b554a4c2b3400c1d007059e3eddc290bae859c41b1c00cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda9c339214537c2b554a4c2b3400c1d007059e3eddc290bae859c41b1c00cd8->enter($__internal_cda9c339214537c2b554a4c2b3400c1d007059e3eddc290bae859c41b1c00cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array())) {
                // line 50
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                // line 51
                echo "                    ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 51, $this->getSourceContext()); })())) {
                    // line 52
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 54
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 56
                echo "                ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 59
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 64
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()))));
            echo "
                </div>
            </div>

            ";
            // line 68
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cda9c339214537c2b554a4c2b3400c1d007059e3eddc290bae859c41b1c00cd8->leave($__internal_cda9c339214537c2b554a4c2b3400c1d007059e3eddc290bae859c41b1c00cd8_prof);

        
        $__internal_9bad98ed17557f725e0e791f2c153e1de64e5278b378e941b1a0abfecab4f048->leave($__internal_9bad98ed17557f725e0e791f2c153e1de64e5278b378e941b1a0abfecab4f048_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 71,  271 => 68,  264 => 64,  259 => 62,  250 => 59,  244 => 57,  241 => 56,  233 => 54,  223 => 52,  220 => 51,  217 => 50,  215 => 49,  211 => 47,  193 => 46,  189 => 44,  180 => 43,  166 => 38,  161 => 37,  152 => 36,  139 => 32,  136 => 31,  133 => 30,  124 => 27,  119 => 25,  116 => 24,  110 => 22,  107 => 21,  99 => 19,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  77 => 12,  72 => 11,  70 => 10,  67 => 9,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views/Profiler/dump.html.twig");
    }
}
