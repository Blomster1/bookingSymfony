<?php

/* tache/index.html.twig */
class __TwigTemplate_1da6461dcd42d3942a1360afd3d892ecaa6b1201c7e156605867c96b25d6513e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tache/index.html.twig", 1);
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
        $__internal_fd07fb61345facbcc410ec612b9bd85c004624e98375a42b5f2d4fd277392890 = $this->env->getExtension("native_profiler");
        $__internal_fd07fb61345facbcc410ec612b9bd85c004624e98375a42b5f2d4fd277392890->enter($__internal_fd07fb61345facbcc410ec612b9bd85c004624e98375a42b5f2d4fd277392890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd07fb61345facbcc410ec612b9bd85c004624e98375a42b5f2d4fd277392890->leave($__internal_fd07fb61345facbcc410ec612b9bd85c004624e98375a42b5f2d4fd277392890_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7a9a22223fe0b8ff0df605a461ba504d4863c1f9a71b7421968a1f2311bd0da = $this->env->getExtension("native_profiler");
        $__internal_e7a9a22223fe0b8ff0df605a461ba504d4863c1f9a71b7421968a1f2311bd0da->enter($__internal_e7a9a22223fe0b8ff0df605a461ba504d4863c1f9a71b7421968a1f2311bd0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <a class=\"btn-floating btn-large waves-effect waves-light purple darken-4 modal-trigger add\" onclick=\"getFormTache()\" href=\"#modal1\"><i class=\"material-icons\">add</i></a>
    <nav class=\"purple darken-4 horizontal-nav\">
        <div class=\"nav-wrapper\">
            <a href=\"#!\">Taches</a>
            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"sass.html\"><i class=\"material-icons\">search</i></a></li>
                <li><a href=\"badges.html\"><i class=\"material-icons\">view_module</i></a></li>
                <li><a href=\"collapsible.html\"><i class=\"material-icons\">refresh</i></a></li>
                <li><a href=\"mobile.html\"><i class=\"material-icons\">more_vert</i></a></li>
            </ul>
        </div>
    </nav>

    <div id=\"modal1\" class=\"modal\">
        <div class=\"modal-content\">
        </div>
        <div class=\"modal-footer\">
            <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Agree</a>
        </div>
    </div>


            <div class=\"row\">
                <div class=\"col s10\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) ? $context["taches"] : $this->getContext($context, "taches")));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 29
            echo "                    <form action=\"#\">
                        <p>
                            <input onclick=\"";
            // line 31
            if ($this->getAttribute($context["tache"], "fait", array())) {
                echo " tacheNonFaite(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "id", array()), "html", null, true);
                echo ") ";
            } else {
                echo " tacheFaite(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "id", array()), "html", null, true);
                echo ") ";
            }
            echo "\" type=\"checkbox\" ";
            if ($this->getAttribute($context["tache"], "fait", array())) {
                echo " checked=\"checked\" ";
            }
            echo " id=\"tache";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "id", array()), "html", null, true);
            echo "\">
                            <label for=\"tache";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "intitule", array()), "html", null, true);
            echo "</label>
                            <span class=\"new badge tag\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "tag", array()), "html", null, true);
            echo "</span>
                        </p>

                    </form>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
            </div>
";
        
        $__internal_e7a9a22223fe0b8ff0df605a461ba504d4863c1f9a71b7421968a1f2311bd0da->leave($__internal_e7a9a22223fe0b8ff0df605a461ba504d4863c1f9a71b7421968a1f2311bd0da_prof);

    }

    public function getTemplateName()
    {
        return "tache/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  98 => 33,  92 => 32,  74 => 31,  70 => 29,  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <a class="btn-floating btn-large waves-effect waves-light purple darken-4 modal-trigger add" onclick="getFormTache()" href="#modal1"><i class="material-icons">add</i></a>*/
/*     <nav class="purple darken-4 horizontal-nav">*/
/*         <div class="nav-wrapper">*/
/*             <a href="#!">Taches</a>*/
/*             <ul class="right hide-on-med-and-down">*/
/*                 <li><a href="sass.html"><i class="material-icons">search</i></a></li>*/
/*                 <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>*/
/*                 <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>*/
/*                 <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <div id="modal1" class="modal">*/
/*         <div class="modal-content">*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col s10">*/
/*                 {% for tache in taches %}*/
/*                     <form action="#">*/
/*                         <p>*/
/*                             <input onclick="{% if tache.fait %} tacheNonFaite({{ tache.id }}) {% else %} tacheFaite({{ tache.id }}) {% endif %}" type="checkbox" {% if tache.fait %} checked="checked" {% endif %} id="tache{{ tache.id }}">*/
/*                             <label for="tache{{ tache.id }}">{{ tache.intitule }}</label>*/
/*                             <span class="new badge tag">{{ tache.tag }}</span>*/
/*                         </p>*/
/* */
/*                     </form>*/
/* */
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/* {% endblock %}*/
/* */
