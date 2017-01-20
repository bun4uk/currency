<?php

/* ACSEOGraphicBundle:Graphic\Flot:timeline.html.twig */
class __TwigTemplate_15f116cea705808257056b6383fbe2297ce4e0185f309f3c2cffc71ba7013554 extends Twig_Template
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
        $__internal_d269b1fd32025be6f3b0478f5668d5789f2456060b3fa82c061f7af80ae08f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d269b1fd32025be6f3b0478f5668d5789f2456060b3fa82c061f7af80ae08f5b->enter($__internal_d269b1fd32025be6f3b0478f5668d5789f2456060b3fa82c061f7af80ae08f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOGraphicBundle:Graphic\\Flot:timeline.html.twig"));

        $__internal_694b3f729e5c6cc548c1307aa9f250abde50173995704884fbc64ccdefe94660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694b3f729e5c6cc548c1307aa9f250abde50173995704884fbc64ccdefe94660->enter($__internal_694b3f729e5c6cc548c1307aa9f250abde50173995704884fbc64ccdefe94660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOGraphicBundle:Graphic\\Flot:timeline.html.twig"));

        // line 1
        echo "\$.plot(\$(\"";
        echo twig_escape_filter($this->env, (isset($context["domSelector"]) || array_key_exists("domSelector", $context) ? $context["domSelector"] : (function () { throw new Twig_Error_Runtime('Variable "domSelector" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\"), [{
    data: ";
        // line 2
        echo json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()));
        echo ",
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "data", array()));
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo " : ";
            echo json_encode($context["data"]);
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    }], 
    ";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 7, $this->getSourceContext()); })()), "options", array()));
        echo "
);


            \$(\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["domSelector"]) || array_key_exists("domSelector", $context) ? $context["domSelector"] : (function () { throw new Twig_Error_Runtime('Variable "domSelector" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "\").bind(\"plothover\", function(i, o, t) {
                if (t) {
                    if (a !== t.dataIndex) {
                        a = t.dataIndex, \$(\"#chart-tooltip\").remove();
                        var l = (t.datapoint[0], t.datapoint[1]),
                            //f = t.series.xaxis.options.ticks[t.dataIndex][1];
                            f = \"f\";
                        s = \"<strong>\" + l + \"</strong>\";
                        \$('<div id=\"chart-tooltip\" class=\"chart-tooltip\">' + s + \"</div>\").appendTo(\"body\");

                        \$(\"#chart-tooltip\").show();
                        console.log(\$(\"#chart-tooltip\").width());
                        \$(\"#chart-tooltip\").css({
                            top: t.pageY  -50  ,
                            left: t.pageX - (\$(\"#chart-tooltip\").width() )
                        })
                    }
                } else \$(\"#chart-tooltip\").remove(), a = null
            })
";
        
        $__internal_d269b1fd32025be6f3b0478f5668d5789f2456060b3fa82c061f7af80ae08f5b->leave($__internal_d269b1fd32025be6f3b0478f5668d5789f2456060b3fa82c061f7af80ae08f5b_prof);

        
        $__internal_694b3f729e5c6cc548c1307aa9f250abde50173995704884fbc64ccdefe94660->leave($__internal_694b3f729e5c6cc548c1307aa9f250abde50173995704884fbc64ccdefe94660_prof);

    }

    public function getTemplateName()
    {
        return "ACSEOGraphicBundle:Graphic\\Flot:timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  52 => 7,  49 => 6,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\$.plot(\$(\"{{domSelector}}\"), [{
    data: {{ data|json_encode|raw }},
    {% for index, data in options.data %}
    {{ index }} : {{ data | json_encode | raw }},
    {% endfor %}
    }], 
    {{ options.options| json_encode | raw }}
);


            \$(\"{{domSelector}}\").bind(\"plothover\", function(i, o, t) {
                if (t) {
                    if (a !== t.dataIndex) {
                        a = t.dataIndex, \$(\"#chart-tooltip\").remove();
                        var l = (t.datapoint[0], t.datapoint[1]),
                            //f = t.series.xaxis.options.ticks[t.dataIndex][1];
                            f = \"f\";
                        s = \"<strong>\" + l + \"</strong>\";
                        \$('<div id=\"chart-tooltip\" class=\"chart-tooltip\">' + s + \"</div>\").appendTo(\"body\");

                        \$(\"#chart-tooltip\").show();
                        console.log(\$(\"#chart-tooltip\").width());
                        \$(\"#chart-tooltip\").css({
                            top: t.pageY  -50  ,
                            left: t.pageX - (\$(\"#chart-tooltip\").width() )
                        })
                    }
                } else \$(\"#chart-tooltip\").remove(), a = null
            })
", "ACSEOGraphicBundle:Graphic\\Flot:timeline.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/acseo/graphic-bundle/ACSEO/Bundle/GraphicBundle/Resources/views/Graphic/Flot/timeline.html.twig");
    }
}
