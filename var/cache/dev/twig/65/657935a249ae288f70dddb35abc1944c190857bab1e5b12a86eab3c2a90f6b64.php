<?php

/* currency/chart.html.twig */
class __TwigTemplate_fdbfbe8141ff87872a3fea15bf7093bf68cbdf02dc79288c227365236d1befe2 extends Twig_Template
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
        $__internal_334b87fceaa65d380ad409ad845295f496d791988d71b054e4d1c024aac7ff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334b87fceaa65d380ad409ad845295f496d791988d71b054e4d1c024aac7ff42->enter($__internal_334b87fceaa65d380ad409ad845295f496d791988d71b054e4d1c024aac7ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/chart.html.twig"));

        $__internal_68db2fa05e5e757c4035ce2fdb04e705d9717e8e0699691155be2c45398ff077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68db2fa05e5e757c4035ce2fdb04e705d9717e8e0699691155be2c45398ff077->enter($__internal_68db2fa05e5e757c4035ce2fdb04e705d9717e8e0699691155be2c45398ff077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "currency/chart.html.twig"));

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
        
        $__internal_334b87fceaa65d380ad409ad845295f496d791988d71b054e4d1c024aac7ff42->leave($__internal_334b87fceaa65d380ad409ad845295f496d791988d71b054e4d1c024aac7ff42_prof);

        
        $__internal_68db2fa05e5e757c4035ce2fdb04e705d9717e8e0699691155be2c45398ff077->leave($__internal_68db2fa05e5e757c4035ce2fdb04e705d9717e8e0699691155be2c45398ff077_prof);

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
</html>", "currency/chart.html.twig", "/var/www/html/app/Resources/views/currency/chart.html.twig");
    }
}
