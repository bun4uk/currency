<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42ba24b1d21359d1b826573d77b0857ab9c89dda48babfc45c7198892839bbfa extends Twig_Template
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
        $__internal_052007bcad68fc1267cafc889ac0f54d15eb31489620c1ad0b33728d48f2b003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052007bcad68fc1267cafc889ac0f54d15eb31489620c1ad0b33728d48f2b003->enter($__internal_052007bcad68fc1267cafc889ac0f54d15eb31489620c1ad0b33728d48f2b003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b95a38bdb217f439becbb7df21ba4fb47f4da78ea4d8780b0f85820620da5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b95a38bdb217f439becbb7df21ba4fb47f4da78ea4d8780b0f85820620da5dc->enter($__internal_7b95a38bdb217f439becbb7df21ba4fb47f4da78ea4d8780b0f85820620da5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052007bcad68fc1267cafc889ac0f54d15eb31489620c1ad0b33728d48f2b003->leave($__internal_052007bcad68fc1267cafc889ac0f54d15eb31489620c1ad0b33728d48f2b003_prof);

        
        $__internal_7b95a38bdb217f439becbb7df21ba4fb47f4da78ea4d8780b0f85820620da5dc->leave($__internal_7b95a38bdb217f439becbb7df21ba4fb47f4da78ea4d8780b0f85820620da5dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4565911ba8830d584973135c34dc5143a413ceb80fd78980e9fdc2f7ad53cbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4565911ba8830d584973135c34dc5143a413ceb80fd78980e9fdc2f7ad53cbe5->enter($__internal_4565911ba8830d584973135c34dc5143a413ceb80fd78980e9fdc2f7ad53cbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d99ea829e1f45a9c9dd321d25840e96971b68236567c103a47f34a825b0c4545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99ea829e1f45a9c9dd321d25840e96971b68236567c103a47f34a825b0c4545->enter($__internal_d99ea829e1f45a9c9dd321d25840e96971b68236567c103a47f34a825b0c4545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d99ea829e1f45a9c9dd321d25840e96971b68236567c103a47f34a825b0c4545->leave($__internal_d99ea829e1f45a9c9dd321d25840e96971b68236567c103a47f34a825b0c4545_prof);

        
        $__internal_4565911ba8830d584973135c34dc5143a413ceb80fd78980e9fdc2f7ad53cbe5->leave($__internal_4565911ba8830d584973135c34dc5143a413ceb80fd78980e9fdc2f7ad53cbe5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9932821d458eaf6ec4d56f2d5217c0ba0190c32d54b285308b33e3401bbaf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9932821d458eaf6ec4d56f2d5217c0ba0190c32d54b285308b33e3401bbaf06->enter($__internal_e9932821d458eaf6ec4d56f2d5217c0ba0190c32d54b285308b33e3401bbaf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c114b8b8c3bef9c9b376abcc51bbab394589eef3149e6b97fce6203b1117f971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c114b8b8c3bef9c9b376abcc51bbab394589eef3149e6b97fce6203b1117f971->enter($__internal_c114b8b8c3bef9c9b376abcc51bbab394589eef3149e6b97fce6203b1117f971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c114b8b8c3bef9c9b376abcc51bbab394589eef3149e6b97fce6203b1117f971->leave($__internal_c114b8b8c3bef9c9b376abcc51bbab394589eef3149e6b97fce6203b1117f971_prof);

        
        $__internal_e9932821d458eaf6ec4d56f2d5217c0ba0190c32d54b285308b33e3401bbaf06->leave($__internal_e9932821d458eaf6ec4d56f2d5217c0ba0190c32d54b285308b33e3401bbaf06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae4edf3cc9d29e8bc7e6864d4ff356e5839c47da962d39aa27bb39e7bb5a8d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4edf3cc9d29e8bc7e6864d4ff356e5839c47da962d39aa27bb39e7bb5a8d1c->enter($__internal_ae4edf3cc9d29e8bc7e6864d4ff356e5839c47da962d39aa27bb39e7bb5a8d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b1d56c6f6586caa07301e28ade0d10917cd6c42da2662e50d807c14bfe1e58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1d56c6f6586caa07301e28ade0d10917cd6c42da2662e50d807c14bfe1e58c->enter($__internal_6b1d56c6f6586caa07301e28ade0d10917cd6c42da2662e50d807c14bfe1e58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6b1d56c6f6586caa07301e28ade0d10917cd6c42da2662e50d807c14bfe1e58c->leave($__internal_6b1d56c6f6586caa07301e28ade0d10917cd6c42da2662e50d807c14bfe1e58c_prof);

        
        $__internal_ae4edf3cc9d29e8bc7e6864d4ff356e5839c47da962d39aa27bb39e7bb5a8d1c->leave($__internal_ae4edf3cc9d29e8bc7e6864d4ff356e5839c47da962d39aa27bb39e7bb5a8d1c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/vladimir/Documents/Work/Levi9/Home/Currency/files/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
