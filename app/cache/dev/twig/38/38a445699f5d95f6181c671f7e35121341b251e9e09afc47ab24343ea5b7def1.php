<?php

/* tache/show.html.twig */
class __TwigTemplate_388be64f918c019a44582cce0a841c72cf9809b7701a605c36342b87b743cd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tache/show.html.twig", 1);
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
        $__internal_4f1fdd4f92260521d0405c39f19ea4efb3a1cdccd4e1fb8fb9a228aacf384d77 = $this->env->getExtension("native_profiler");
        $__internal_4f1fdd4f92260521d0405c39f19ea4efb3a1cdccd4e1fb8fb9a228aacf384d77->enter($__internal_4f1fdd4f92260521d0405c39f19ea4efb3a1cdccd4e1fb8fb9a228aacf384d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1fdd4f92260521d0405c39f19ea4efb3a1cdccd4e1fb8fb9a228aacf384d77->leave($__internal_4f1fdd4f92260521d0405c39f19ea4efb3a1cdccd4e1fb8fb9a228aacf384d77_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6d5d9bdb7ca13d815cb5877bcda6a4a907c3bd6194e61b325f4ec0e890d3925 = $this->env->getExtension("native_profiler");
        $__internal_d6d5d9bdb7ca13d815cb5877bcda6a4a907c3bd6194e61b325f4ec0e890d3925->enter($__internal_d6d5d9bdb7ca13d815cb5877bcda6a4a907c3bd6194e61b325f4ec0e890d3925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fait</th>
                <td>";
        // line 19
        if ($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "fait", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tag</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "tag", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("tache_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tache_edit", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : $this->getContext($context, "tache")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d6d5d9bdb7ca13d815cb5877bcda6a4a907c3bd6194e61b325f4ec0e890d3925->leave($__internal_d6d5d9bdb7ca13d815cb5877bcda6a4a907c3bd6194e61b325f4ec0e890d3925_prof);

    }

    public function getTemplateName()
    {
        return "tache/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  105 => 40,  99 => 37,  93 => 34,  83 => 27,  74 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ tache.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Intitule</th>*/
/*                 <td>{{ tache.intitule }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fait</th>*/
/*                 <td>{% if tache.fait %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{% if tache.date %}{{ tache.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tag</th>*/
/*                 <td>{{ tache.tag }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tache_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tache_edit', { 'id': tache.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
