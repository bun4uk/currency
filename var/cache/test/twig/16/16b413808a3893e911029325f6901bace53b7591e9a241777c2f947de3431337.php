<?php

/* product/index.html.twig */
class __TwigTemplate_eab574de0db3fd0c7b4fbb5e7b9fc70ee52ea7c9f0aee45d3a2abba9424a228c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f85832f0e790f4257cfea2ca40b3521231c07b336d6e18d4a81f30484f955beb = $this->env->getExtension("native_profiler");
        $__internal_f85832f0e790f4257cfea2ca40b3521231c07b336d6e18d4a81f30484f955beb->enter($__internal_f85832f0e790f4257cfea2ca40b3521231c07b336d6e18d4a81f30484f955beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85832f0e790f4257cfea2ca40b3521231c07b336d6e18d4a81f30484f955beb->leave($__internal_f85832f0e790f4257cfea2ca40b3521231c07b336d6e18d4a81f30484f955beb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_537bfd0d89e914403fcc6db7bc4f5f979658a30279e5a79a805cf1edcba0c74d = $this->env->getExtension("native_profiler");
        $__internal_537bfd0d89e914403fcc6db7bc4f5f979658a30279e5a79a805cf1edcba0c74d->enter($__internal_537bfd0d89e914403fcc6db7bc4f5f979658a30279e5a79a805cf1edcba0c74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_537bfd0d89e914403fcc6db7bc4f5f979658a30279e5a79a805cf1edcba0c74d->leave($__internal_537bfd0d89e914403fcc6db7bc4f5f979658a30279e5a79a805cf1edcba0c74d_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
