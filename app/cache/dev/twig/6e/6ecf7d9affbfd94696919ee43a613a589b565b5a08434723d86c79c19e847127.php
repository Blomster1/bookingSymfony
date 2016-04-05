<?php

/* contact/show.html.twig */
class __TwigTemplate_97a75852a844460e93441731738a9bf73ebbdedab05cd69c6b4842bcb8816bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dd5e32322eb391a16f0f41ed5417d4d5f67e02753c3144320439a2197bd0cc9 = $this->env->getExtension("native_profiler");
        $__internal_5dd5e32322eb391a16f0f41ed5417d4d5f67e02753c3144320439a2197bd0cc9->enter($__internal_5dd5e32322eb391a16f0f41ed5417d4d5f67e02753c3144320439a2197bd0cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        // line 1
        echo "    
<div class=\"header-profile\">
    <div class=\"banner-profil\">
        <img class=\"banner-background\" src=\"../";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user-profile-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"col s2\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/yuna.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle responsive-img profil-picture\"> <!-- notice the \"circle\" class -->
        </div>
    </div>
</div>


<h1>Contact</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "role", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastmaj</th>
                <td>";
        // line 46
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
        // line 53
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5dd5e32322eb391a16f0f41ed5417d4d5f67e02753c3144320439a2197bd0cc9->leave($__internal_5dd5e32322eb391a16f0f41ed5417d4d5f67e02753c3144320439a2197bd0cc9_prof);

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
        return array (  125 => 61,  120 => 59,  114 => 56,  108 => 53,  96 => 46,  89 => 42,  82 => 38,  75 => 34,  68 => 30,  61 => 26,  54 => 22,  47 => 18,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/*     */
/* <div class="header-profile">*/
/*     <div class="banner-profil">*/
/*         <img class="banner-background" src="../{{ asset('images/user-profile-bg.jpg') }}" alt="">*/
/*         <div class="col s2">*/
/*             <img src="{{ asset('images/yuna.jpg') }}" alt="" class="circle responsive-img profil-picture"> <!-- notice the "circle" class -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <h1>Contact</h1>*/
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
/* */
