<?php

/* currency/chart.html.twig */
class __TwigTemplate_b92f80373b2bf62b95a907c7c095734ad1a3de22b853816af1f050b7f3a61e46 extends Twig_Template
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
        $__internal_1284eca008d46a7f7d268a638dcd9c095654866fe8ed3e2c965c79230feba02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1284eca008d46a7f7d268a638dcd9c095654866fe8ed3e2c965c79230feba02e->enter($__internal_1284eca008d46a7f7d268a638dcd9c095654866fe8ed3e2c965c79230feba02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/chart.html.twig"));

        $__internal_f33f435f83fcdeee1b5d1e4d5e0ee0be38137adf0da23e309a39a3f60595d495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33f435f83fcdeee1b5d1e4d5e0ee0be38137adf0da23e309a39a3f60595d495->enter($__internal_f33f435f83fcdeee1b5d1e4d5e0ee0be38137adf0da23e309a39a3f60595d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/chart.html.twig"));

        // line 1
        echo "<html>
<head>
    <!-- include jQuery and jQuery Flot Javascript form CDN or from your project -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.pie.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.time.min.js\"></script>

    <script type=\"text/javascript\">

        \$(document).ready(function() {
            ";
        // line 12
        echo $this->env->getExtension('ACSEO\Bundle\GraphicBundle\Graphic\Flot\Twig\Extension\FlotTwigExtension')->flotGraph($this->env, (isset($context["buyTimeline"]) || array_key_exists("buyTimeline", $context) ? $context["buyTimeline"] : (function () { throw new Twig_Error_Runtime('Variable "buyTimeline" does not exist.', 12, $this->getSourceContext()); })()));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('ACSEO\Bundle\GraphicBundle\Graphic\Flot\Twig\Extension\FlotTwigExtension')->flotGraph($this->env, (isset($context["saleTimeline"]) || array_key_exists("saleTimeline", $context) ? $context["saleTimeline"] : (function () { throw new Twig_Error_Runtime('Variable "saleTimeline" does not exist.', 13, $this->getSourceContext()); })()));
        echo "
        });
    </script>
</head>
<body>
";
        // line 18
        $this->loadTemplate("currency/menu.html.twig", "currency/chart.html.twig", 18)->display($context);
        // line 19
        echo "<!-- remember to give width and height to your graph containers -->
<div id=\"buyTimeline\" style=\"width:500px;height:20%\"></div>
<div id=\"saleTimeline\" style=\"width:500px;height:20%\"></div>
</body>
</html>";
        
        $__internal_1284eca008d46a7f7d268a638dcd9c095654866fe8ed3e2c965c79230feba02e->leave($__internal_1284eca008d46a7f7d268a638dcd9c095654866fe8ed3e2c965c79230feba02e_prof);

        
        $__internal_f33f435f83fcdeee1b5d1e4d5e0ee0be38137adf0da23e309a39a3f60595d495->leave($__internal_f33f435f83fcdeee1b5d1e4d5e0ee0be38137adf0da23e309a39a3f60595d495_prof);

    }

    public function getTemplateName()
    {
        return "currency/chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  50 => 18,  42 => 13,  38 => 12,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <!-- include jQuery and jQuery Flot Javascript form CDN or from your project -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.pie.min.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.time.min.js\"></script>

    <script type=\"text/javascript\">

        \$(document).ready(function() {
            {{ flot_graph(buyTimeline) }}
            {{ flot_graph(saleTimeline) }}
        });
    </script>
</head>
<body>
{% include 'currency/menu.html.twig' %}
<!-- remember to give width and height to your graph containers -->
<div id=\"buyTimeline\" style=\"width:500px;height:20%\"></div>
<div id=\"saleTimeline\" style=\"width:500px;height:20%\"></div>
</body>
</html>", "currency/chart.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/app/Resources/views/currency/chart.html.twig");
    }
}
