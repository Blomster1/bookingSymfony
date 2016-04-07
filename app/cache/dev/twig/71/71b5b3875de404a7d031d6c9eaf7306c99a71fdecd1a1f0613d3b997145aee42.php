<?php

/* :contact:index.html.twig */
class __TwigTemplate_21108257922e9d97cf40f00565c7e45bf1d814abe3f3d40b03c2baea4dced6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contact:index.html.twig", 1);
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
        $__internal_f09cdc11714280ea4d28e4b9769bc8246c26d278d00d81621be0e0efb3187d39 = $this->env->getExtension("native_profiler");
        $__internal_f09cdc11714280ea4d28e4b9769bc8246c26d278d00d81621be0e0efb3187d39->enter($__internal_f09cdc11714280ea4d28e4b9769bc8246c26d278d00d81621be0e0efb3187d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09cdc11714280ea4d28e4b9769bc8246c26d278d00d81621be0e0efb3187d39->leave($__internal_f09cdc11714280ea4d28e4b9769bc8246c26d278d00d81621be0e0efb3187d39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07cc889337c0c94157b97999bf5bb7d9ffa12e29c1adc6896e75dee8e3b9b23e = $this->env->getExtension("native_profiler");
        $__internal_07cc889337c0c94157b97999bf5bb7d9ffa12e29c1adc6896e75dee8e3b9b23e->enter($__internal_07cc889337c0c94157b97999bf5bb7d9ffa12e29c1adc6896e75dee8e3b9b23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Role</th>
                <th>Adresse</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Lastmaj</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["contact"], "lastMaJ", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "lastMaJ", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    
";
        
        $__internal_07cc889337c0c94157b97999bf5bb7d9ffa12e29c1adc6896e75dee8e3b9b23e->leave($__internal_07cc889337c0c94157b97999bf5bb7d9ffa12e29c1adc6896e75dee8e3b9b23e_prof);

    }

    public function getTemplateName()
    {
        return ":contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  115 => 38,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Email</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Role</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Longitude</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Lastmaj</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contact in contacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contact_show', { 'id': contact.id }) }}">{{ contact.id }}</a></td>*/
/*                 <td>{{ contact.nom }}</td>*/
/*                 <td>{{ contact.prenom }}</td>*/
/*                 <td>{{ contact.email }}</td>*/
/*                 <td>{{ contact.tel }}</td>*/
/*                 <td>{{ contact.role }}</td>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*                 <td>{{ contact.longitude }}</td>*/
/*                 <td>{{ contact.latitude }}</td>*/
/*                 <td>{% if contact.lastMaJ %}{{ contact.lastMaJ|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_show', { 'id': contact.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
