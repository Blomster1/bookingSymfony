<?php

/* contact/show.html.twig */
class __TwigTemplate_97a75852a844460e93441731738a9bf73ebbdedab05cd69c6b4842bcb8816bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/show.html.twig", 1);
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
        $__internal_06dd229a523ee79df8b18c0b7f2cd31a0a23232abc65681c077cd300c295e646 = $this->env->getExtension("native_profiler");
        $__internal_06dd229a523ee79df8b18c0b7f2cd31a0a23232abc65681c077cd300c295e646->enter($__internal_06dd229a523ee79df8b18c0b7f2cd31a0a23232abc65681c077cd300c295e646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06dd229a523ee79df8b18c0b7f2cd31a0a23232abc65681c077cd300c295e646->leave($__internal_06dd229a523ee79df8b18c0b7f2cd31a0a23232abc65681c077cd300c295e646_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4aa15955eb6c9e4e0451e4bd4e680978fd280c196fef107e329efbc5d64054fb = $this->env->getExtension("native_profiler");
        $__internal_4aa15955eb6c9e4e0451e4bd4e680978fd280c196fef107e329efbc5d64054fb->enter($__internal_4aa15955eb6c9e4e0451e4bd4e680978fd280c196fef107e329efbc5d64054fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Contact</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "role", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastmaj</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastMaJ", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastMaJ", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4aa15955eb6c9e4e0451e4bd4e680978fd280c196fef107e329efbc5d64054fb->leave($__internal_4aa15955eb6c9e4e0451e4bd4e680978fd280c196fef107e329efbc5d64054fb_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  121 => 51,  115 => 48,  109 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Contact</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ contact.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ contact.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ contact.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Role</th>*/
/*                 <td>{{ contact.role }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Longitude</th>*/
/*                 <td>{{ contact.longitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Latitude</th>*/
/*                 <td>{{ contact.latitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastmaj</th>*/
/*                 <td>{% if contact.lastMaJ %}{{ contact.lastMaJ|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('contact_edit', { 'id': contact.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
