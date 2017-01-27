<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_44686738de531a458b2bb7759fcd44332b07d271336e86ad0f4b108200f1d2bc extends Twig_Template
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
        $__internal_fb8c6ca9d5e11fe0ed26660fd809b4b19c8460e30fd968bf8a933d288d548428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8c6ca9d5e11fe0ed26660fd809b4b19c8460e30fd968bf8a933d288d548428->enter($__internal_fb8c6ca9d5e11fe0ed26660fd809b4b19c8460e30fd968bf8a933d288d548428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_6377b52078b55c86a2bfc769ccf28db23e2e89d4678617dbb1a24bb095de3de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6377b52078b55c86a2bfc769ccf28db23e2e89d4678617dbb1a24bb095de3de7->enter($__internal_6377b52078b55c86a2bfc769ccf28db23e2e89d4678617dbb1a24bb095de3de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_fb8c6ca9d5e11fe0ed26660fd809b4b19c8460e30fd968bf8a933d288d548428->leave($__internal_fb8c6ca9d5e11fe0ed26660fd809b4b19c8460e30fd968bf8a933d288d548428_prof);

        
        $__internal_6377b52078b55c86a2bfc769ccf28db23e2e89d4678617dbb1a24bb095de3de7->leave($__internal_6377b52078b55c86a2bfc769ccf28db23e2e89d4678617dbb1a24bb095de3de7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
