<?php

/* TwitterBootstrapBundle::layout.html.twig */
class __TwigTemplate_870ebb9b6fa3223d4d4e34eda4dfb8f82e91355f29443bc107757a5af7005fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwitterBootstrapBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3514bd5aa9cb70c98dbc846f5fd3b7237c65bb78eab33192c06344b4283ea39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3514bd5aa9cb70c98dbc846f5fd3b7237c65bb78eab33192c06344b4283ea39->enter($__internal_c3514bd5aa9cb70c98dbc846f5fd3b7237c65bb78eab33192c06344b4283ea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwitterBootstrapBundle::layout.html.twig"));

        $__internal_d8cd7788a37390ea9d40071dc31d19f1dd7a3b84d531821c02522fc2cf52bdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cd7788a37390ea9d40071dc31d19f1dd7a3b84d531821c02522fc2cf52bdc0->enter($__internal_d8cd7788a37390ea9d40071dc31d19f1dd7a3b84d531821c02522fc2cf52bdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwitterBootstrapBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3514bd5aa9cb70c98dbc846f5fd3b7237c65bb78eab33192c06344b4283ea39->leave($__internal_c3514bd5aa9cb70c98dbc846f5fd3b7237c65bb78eab33192c06344b4283ea39_prof);

        
        $__internal_d8cd7788a37390ea9d40071dc31d19f1dd7a3b84d531821c02522fc2cf52bdc0->leave($__internal_d8cd7788a37390ea9d40071dc31d19f1dd7a3b84d531821c02522fc2cf52bdc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c1cc7e5ce2335f0458654ba23275b60f7bf3e49484940e49cfffba5745279c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c1cc7e5ce2335f0458654ba23275b60f7bf3e49484940e49cfffba5745279c->enter($__internal_20c1cc7e5ce2335f0458654ba23275b60f7bf3e49484940e49cfffba5745279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d82e7be4d649661011a9798e128fa5547aaf07aa56e73f09e21d9b58d500e448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82e7be4d649661011a9798e128fa5547aaf07aa56e73f09e21d9b58d500e448->enter($__internal_d82e7be4d649661011a9798e128fa5547aaf07aa56e73f09e21d9b58d500e448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        $this->displayBlock('container', $context, $blocks);
        // line 6
        echo "        <footer>";
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
    </div>
";
        
        $__internal_d82e7be4d649661011a9798e128fa5547aaf07aa56e73f09e21d9b58d500e448->leave($__internal_d82e7be4d649661011a9798e128fa5547aaf07aa56e73f09e21d9b58d500e448_prof);

        
        $__internal_20c1cc7e5ce2335f0458654ba23275b60f7bf3e49484940e49cfffba5745279c->leave($__internal_20c1cc7e5ce2335f0458654ba23275b60f7bf3e49484940e49cfffba5745279c_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_eee230b0149d3baae9faff80845edd845a36a113b393807d1203fd62fcda9cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee230b0149d3baae9faff80845edd845a36a113b393807d1203fd62fcda9cdb->enter($__internal_eee230b0149d3baae9faff80845edd845a36a113b393807d1203fd62fcda9cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_f47c7aefbe0111a6d9009fbd5ea1d456c994a6e09542f2686d06e502fae81776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47c7aefbe0111a6d9009fbd5ea1d456c994a6e09542f2686d06e502fae81776->enter($__internal_f47c7aefbe0111a6d9009fbd5ea1d456c994a6e09542f2686d06e502fae81776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_f47c7aefbe0111a6d9009fbd5ea1d456c994a6e09542f2686d06e502fae81776->leave($__internal_f47c7aefbe0111a6d9009fbd5ea1d456c994a6e09542f2686d06e502fae81776_prof);

        
        $__internal_eee230b0149d3baae9faff80845edd845a36a113b393807d1203fd62fcda9cdb->leave($__internal_eee230b0149d3baae9faff80845edd845a36a113b393807d1203fd62fcda9cdb_prof);

    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
        $__internal_101cc7b6cd9ae6ddaaf1dca11aa8b0dcdd0fd2bc5ea3debbfee1a4c3608e6404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101cc7b6cd9ae6ddaaf1dca11aa8b0dcdd0fd2bc5ea3debbfee1a4c3608e6404->enter($__internal_101cc7b6cd9ae6ddaaf1dca11aa8b0dcdd0fd2bc5ea3debbfee1a4c3608e6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a03ac2013ca8bc316b6f13e90f25e4bd38bf165eeda72d19f47049cc951f9bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03ac2013ca8bc316b6f13e90f25e4bd38bf165eeda72d19f47049cc951f9bf8->enter($__internal_a03ac2013ca8bc316b6f13e90f25e4bd38bf165eeda72d19f47049cc951f9bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<p>&copy; Company 2014</p>";
        
        $__internal_a03ac2013ca8bc316b6f13e90f25e4bd38bf165eeda72d19f47049cc951f9bf8->leave($__internal_a03ac2013ca8bc316b6f13e90f25e4bd38bf165eeda72d19f47049cc951f9bf8_prof);

        
        $__internal_101cc7b6cd9ae6ddaaf1dca11aa8b0dcdd0fd2bc5ea3debbfee1a4c3608e6404->leave($__internal_101cc7b6cd9ae6ddaaf1dca11aa8b0dcdd0fd2bc5ea3debbfee1a4c3608e6404_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68ffaca9111d134162d51e5ccf94e365d61c4fc07d80f9366b70b5240caf0837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ffaca9111d134162d51e5ccf94e365d61c4fc07d80f9366b70b5240caf0837->enter($__internal_68ffaca9111d134162d51e5ccf94e365d61c4fc07d80f9366b70b5240caf0837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c2d908545c99fb39fd1167bf9c90b304dd5f3dba376657740f689ada67c3117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2d908545c99fb39fd1167bf9c90b304dd5f3dba376657740f689ada67c3117->enter($__internal_1c2d908545c99fb39fd1167bf9c90b304dd5f3dba376657740f689ada67c3117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        echo twig_include($this->env, $context, "TwitterBootstrapBundle::html5shiv.html.twig");
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 13
        echo $this->env->getExtension('Twitter\BootstrapBundle\Twig\AssetsExtension')->assetsFunction("stylesheets");
        echo "
    ";
        // line 14
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1c2d908545c99fb39fd1167bf9c90b304dd5f3dba376657740f689ada67c3117->leave($__internal_1c2d908545c99fb39fd1167bf9c90b304dd5f3dba376657740f689ada67c3117_prof);

        
        $__internal_68ffaca9111d134162d51e5ccf94e365d61c4fc07d80f9366b70b5240caf0837->leave($__internal_68ffaca9111d134162d51e5ccf94e365d61c4fc07d80f9366b70b5240caf0837_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_681c28530e24ec0a0f1596b504e4ed44390b8fcf273e597ce878ded24ea90c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681c28530e24ec0a0f1596b504e4ed44390b8fcf273e597ce878ded24ea90c52->enter($__internal_681c28530e24ec0a0f1596b504e4ed44390b8fcf273e597ce878ded24ea90c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b0feb1dfdcaef845f4adede9b8242e38b319b3cb16a895daa622d82324672c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0feb1dfdcaef845f4adede9b8242e38b319b3cb16a895daa622d82324672c0->enter($__internal_7b0feb1dfdcaef845f4adede9b8242e38b319b3cb16a895daa622d82324672c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Twitter\BootstrapBundle\Twig\AssetsExtension')->assetsFunction("javascripts");
        echo "
    ";
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_7b0feb1dfdcaef845f4adede9b8242e38b319b3cb16a895daa622d82324672c0->leave($__internal_7b0feb1dfdcaef845f4adede9b8242e38b319b3cb16a895daa622d82324672c0_prof);

        
        $__internal_681c28530e24ec0a0f1596b504e4ed44390b8fcf273e597ce878ded24ea90c52->leave($__internal_681c28530e24ec0a0f1596b504e4ed44390b8fcf273e597ce878ded24ea90c52_prof);

    }

    public function getTemplateName()
    {
        return "TwitterBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 20,  147 => 19,  138 => 18,  126 => 14,  122 => 13,  116 => 11,  107 => 10,  89 => 6,  72 => 5,  58 => 6,  56 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <div class=\"container\">
        {% block container %}{% endblock %}
        <footer>{% block footer %}<p>&copy; Company 2014</p>{% endblock %}</footer>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ include('TwitterBootstrapBundle::html5shiv.html.twig') }}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {{ twitter_assets('stylesheets') }}
    {{ parent() }}
{% endblock %}


{% block javascripts %}
    {{ twitter_assets('javascripts') }}
    {{ parent() }}
{% endblock %}
", "TwitterBootstrapBundle::layout.html.twig", "/var/www/html/vendor/twitter/bootstrap-bundle/Resources/views/layout.html.twig");
    }
}
