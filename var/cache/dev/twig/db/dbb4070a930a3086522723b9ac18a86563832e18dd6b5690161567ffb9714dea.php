<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_31a7ea903ea16fd9ec32ed10549b7dc6c8f21aef589b5fef7bff33be3630e5bf extends Twig_Template
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
        $__internal_9984ffde13153911a45a5b037c80365e9e089dc21156f249b7c2ea3555045060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9984ffde13153911a45a5b037c80365e9e089dc21156f249b7c2ea3555045060->enter($__internal_9984ffde13153911a45a5b037c80365e9e089dc21156f249b7c2ea3555045060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_dfcdffe9fa65b44cbd58a5ba43ad74707d0494eb8de78c3c3602e83cd890232f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcdffe9fa65b44cbd58a5ba43ad74707d0494eb8de78c3c3602e83cd890232f->enter($__internal_dfcdffe9fa65b44cbd58a5ba43ad74707d0494eb8de78c3c3602e83cd890232f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9984ffde13153911a45a5b037c80365e9e089dc21156f249b7c2ea3555045060->leave($__internal_9984ffde13153911a45a5b037c80365e9e089dc21156f249b7c2ea3555045060_prof);

        
        $__internal_dfcdffe9fa65b44cbd58a5ba43ad74707d0494eb8de78c3c3602e83cd890232f->leave($__internal_dfcdffe9fa65b44cbd58a5ba43ad74707d0494eb8de78c3c3602e83cd890232f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
