<?php

/* contact/index.html.twig */
class __TwigTemplate_21108257922e9d97cf40f00565c7e45bf1d814abe3f3d40b03c2baea4dced6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c34c8f5a42925e3a8e11a950fa9133c1ce4e2cabcfd7a550e3c9933cebd2a50 = $this->env->getExtension("native_profiler");
        $__internal_3c34c8f5a42925e3a8e11a950fa9133c1ce4e2cabcfd7a550e3c9933cebd2a50->enter($__internal_3c34c8f5a42925e3a8e11a950fa9133c1ce4e2cabcfd7a550e3c9933cebd2a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c34c8f5a42925e3a8e11a950fa9133c1ce4e2cabcfd7a550e3c9933cebd2a50->leave($__internal_3c34c8f5a42925e3a8e11a950fa9133c1ce4e2cabcfd7a550e3c9933cebd2a50_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_476ce832722aaa32bb9f2dcb2bc7ad017680b57660c9e9f2d36867b20678d5ac = $this->env->getExtension("native_profiler");
        $__internal_476ce832722aaa32bb9f2dcb2bc7ad017680b57660c9e9f2d36867b20678d5ac->enter($__internal_476ce832722aaa32bb9f2dcb2bc7ad017680b57660c9e9f2d36867b20678d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <a onclick=\"getFormContact()\" class=\"waves-effect waves-light btn modal-trigger\" href=\"#modal1\">Ajouter un contact</a>

    <h1>Contact list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "role", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["contact"], "lastMaJ", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "lastMaJ", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>

    <!-- Modal Structure -->
    <div id=\"modal1\" class=\"modal\">
        <div class=\"modal-content\">
        </div>
        <div class=\"modal-footer\">
            <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Agree</a>
        </div>
    </div>
";
        
        $__internal_476ce832722aaa32bb9f2dcb2bc7ad017680b57660c9e9f2d36867b20678d5ac->leave($__internal_476ce832722aaa32bb9f2dcb2bc7ad017680b57660c9e9f2d36867b20678d5ac_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  125 => 45,  113 => 39,  107 => 36,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <a onclick="getFormContact()" class="waves-effect waves-light btn modal-trigger" href="#modal1">Ajouter un contact</a>*/
/* */
/*     <h1>Contact list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
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
/*                         <li>*/
/*                             <a href="{{ path('contact_edit', { 'id': contact.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <!-- Modal Structure -->*/
/*     <div id="modal1" class="modal">*/
/*         <div class="modal-content">*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
