<?php

/* contact/list.html.twig */
class __TwigTemplate_f82850139f6a7656e67390c0ae771a08a483f2dd0ab887c44da497bf3a040dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/list.html.twig", 1);
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
        $__internal_98eeca9d717b32da04f7f7325c73c98ce42d9889d48f7f3fb4c61cd0891860d6 = $this->env->getExtension("native_profiler");
        $__internal_98eeca9d717b32da04f7f7325c73c98ce42d9889d48f7f3fb4c61cd0891860d6->enter($__internal_98eeca9d717b32da04f7f7325c73c98ce42d9889d48f7f3fb4c61cd0891860d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98eeca9d717b32da04f7f7325c73c98ce42d9889d48f7f3fb4c61cd0891860d6->leave($__internal_98eeca9d717b32da04f7f7325c73c98ce42d9889d48f7f3fb4c61cd0891860d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_eadd47b242a969b950dd1f80624bd990295a907999a24147313c3440f0ec4976 = $this->env->getExtension("native_profiler");
        $__internal_eadd47b242a969b950dd1f80624bd990295a907999a24147313c3440f0ec4976->enter($__internal_eadd47b242a969b950dd1f80624bd990295a907999a24147313c3440f0ec4976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <a class=\"btn-floating btn-large waves-effect waves-light red modal-trigger add\" onclick=\"getFormContact()\" href=\"#modal1\"><i class=\"material-icons\">add</i></a>
    <nav class=\"red darken-3 horizontal-nav\">
        <div class=\"nav-wrapper\">
            <a href=\"#!\">Contacts</a>
            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"sass.html\"><i class=\"material-icons\">search</i></a></li>
                <li><a href=\"badges.html\"><i class=\"material-icons\">view_module</i></a></li>
                <li><a href=\"collapsible.html\"><i class=\"material-icons\">refresh</i></a></li>
                <li><a href=\"mobile.html\"><i class=\"material-icons\">more_vert</i></a></li>
            </ul>
        </div>
    </nav>
    <div class=\"row\">
        <div class=\"col m4 no-padding\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 19
            echo "                    <div class=\"col s12 m12 no-margin no-padding\">
                        <div class=\"card-panel grey lighten-5 z-depth-1 no-margin\">
                            <div class=\"row valign-wrapper\">
                                <div class=\"col s2\">
                                    <img src=\"../images/yuna.jpg\" alt=\"\" class=\"circle responsive-img\"> <!-- notice the \"circle\" class -->
                                </div>
                                <div class=\"col s9\">
                                    <p><strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo " <small>- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "role", array()), "html", null, true);
            echo "</small></p>
                                </div>
                                <div class=\"col s1\">
                                    <a href=\"#\" onclick=\"getInfoContact(";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo ")\"><i class=\"material-icons\">remove_red_eye</i></a>
                                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons\">mode_edit</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            <!-- Modal Structure -->
            <div id=\"modal1\" class=\"modal\">
                <div class=\"modal-content new-form\">
                </div>

            </div>
        </div>
        <div class=\"col m8 no-padding no-margin\" id=\"contact-view\">
        </div>
    </div>

";
        
        $__internal_eadd47b242a969b950dd1f80624bd990295a907999a24147313c3440f0ec4976->leave($__internal_eadd47b242a969b950dd1f80624bd990295a907999a24147313c3440f0ec4976_prof);

    }

    public function getTemplateName()
    {
        return "contact/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  83 => 30,  79 => 29,  69 => 26,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <a class="btn-floating btn-large waves-effect waves-light red modal-trigger add" onclick="getFormContact()" href="#modal1"><i class="material-icons">add</i></a>*/
/*     <nav class="red darken-3 horizontal-nav">*/
/*         <div class="nav-wrapper">*/
/*             <a href="#!">Contacts</a>*/
/*             <ul class="right hide-on-med-and-down">*/
/*                 <li><a href="sass.html"><i class="material-icons">search</i></a></li>*/
/*                 <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>*/
/*                 <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>*/
/*                 <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/*     <div class="row">*/
/*         <div class="col m4 no-padding">*/
/*                 {% for contact in contacts %}*/
/*                     <div class="col s12 m12 no-margin no-padding">*/
/*                         <div class="card-panel grey lighten-5 z-depth-1 no-margin">*/
/*                             <div class="row valign-wrapper">*/
/*                                 <div class="col s2">*/
/*                                     <img src="../images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->*/
/*                                 </div>*/
/*                                 <div class="col s9">*/
/*                                     <p><strong>{{ contact.nom }}</strong> {{ contact.prenom }} <small>- {{ contact.role }}</small></p>*/
/*                                 </div>*/
/*                                 <div class="col s1">*/
/*                                     <a href="#" onclick="getInfoContact({{ contact.id }})"><i class="material-icons">remove_red_eye</i></a>*/
/*                                     <a href="{{ path('contact_edit', { 'id': contact.id }) }}"><i class="material-icons">mode_edit</i></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             <!-- Modal Structure -->*/
/*             <div id="modal1" class="modal">*/
/*                 <div class="modal-content new-form">*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="col m8 no-padding no-margin" id="contact-view">*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
