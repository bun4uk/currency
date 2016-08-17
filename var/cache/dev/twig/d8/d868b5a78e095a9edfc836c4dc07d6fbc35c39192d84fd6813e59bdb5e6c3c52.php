<?php

/* product/list.html.twig */
class __TwigTemplate_66c411d127b94aaca530474c03fd1fb23b6f77c51f37a620355485d2930fad4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/list.html.twig", 1);
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
        $__internal_41660dcb48afc51bdebec120e3dbc15e2fb88d422e87174e0f4e0ed8ab068f45 = $this->env->getExtension("native_profiler");
        $__internal_41660dcb48afc51bdebec120e3dbc15e2fb88d422e87174e0f4e0ed8ab068f45->enter($__internal_41660dcb48afc51bdebec120e3dbc15e2fb88d422e87174e0f4e0ed8ab068f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41660dcb48afc51bdebec120e3dbc15e2fb88d422e87174e0f4e0ed8ab068f45->leave($__internal_41660dcb48afc51bdebec120e3dbc15e2fb88d422e87174e0f4e0ed8ab068f45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67beed73b99e213bc644e300fc3468eab4235c1fdff9d55f4a71638aa0fbc028 = $this->env->getExtension("native_profiler");
        $__internal_67beed73b99e213bc644e300fc3468eab4235c1fdff9d55f4a71638aa0fbc028->enter($__internal_67beed73b99e213bc644e300fc3468eab4235c1fdff9d55f4a71638aa0fbc028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products List</h1>
    <table id=\"list\">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Date</th>
        </tr>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "            <tr>
                <td>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "date", array()), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    </table>

";
        
        $__internal_67beed73b99e213bc644e300fc3468eab4235c1fdff9d55f4a71638aa0fbc028->leave($__internal_67beed73b99e213bc644e300fc3468eab4235c1fdff9d55f4a71638aa0fbc028_prof);

    }

    public function getTemplateName()
    {
        return "product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  91 => 33,  85 => 30,  79 => 27,  73 => 24,  67 => 21,  61 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Products List</h1>*/
/*     <table id="list">*/
/* */
/*         <tr>*/
/*             <th>ID</th>*/
/*             <th>Name</th>*/
/*             <th>Description</th>*/
/*             <th>Price</th>*/
/*             <th>Category</th>*/
/*             <th>Date</th>*/
/*         </tr>*/
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <td>*/
/*                     {{ product.id }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.name }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.description }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.price }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.category }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ product.date }}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
