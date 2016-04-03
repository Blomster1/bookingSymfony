<?php

/* CoreBundle:Partials:sideNav.html.twig */
class __TwigTemplate_096256ac416e49387efd20caafc6360d696b75b77a1590b62e2cb381934eeb7a extends Twig_Template
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
        $__internal_bb076ab7945293bd9fb5057c43f1bd1c9de0fc86be192c2e0fb5d4ef9601e72c = $this->env->getExtension("native_profiler");
        $__internal_bb076ab7945293bd9fb5057c43f1bd1c9de0fc86be192c2e0fb5d4ef9601e72c->enter($__internal_bb076ab7945293bd9fb5057c43f1bd1c9de0fc86be192c2e0fb5d4ef9601e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Partials:sideNav.html.twig"));

        // line 1
        echo "<nav id=\"sideNav\" class=\"grey lighten-5\">
    <div id=\"user-section\" class=\" light-blue\">
        <img class=\"circle responsive-img\" id=\"image-user\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <!-- Dropdown Trigger -->
        <a class='dropdown-button' id=\"name-user\" href='#' data-activates='dropdown1'>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Parametres</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
        </ul>
    </div>
    <ul>
        <li><a href=\"\">Tableau de bord</a></li>
        <li><a href=\"\">Calendrier</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Contact</a></li>
    </ul>
</nav>";
        
        $__internal_bb076ab7945293bd9fb5057c43f1bd1c9de0fc86be192c2e0fb5d4ef9601e72c->leave($__internal_bb076ab7945293bd9fb5057c43f1bd1c9de0fc86be192c2e0fb5d4ef9601e72c_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Partials:sideNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 10,  38 => 9,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <nav id="sideNav" class="grey lighten-5">*/
/*     <div id="user-section" class=" light-blue">*/
/*         <img class="circle responsive-img" id="image-user" src="{{ asset("images/user.jpg") }}" alt="">*/
/*         <!-- Dropdown Trigger -->*/
/*         <a class='dropdown-button' id="name-user" href='#' data-activates='dropdown1'>{{ user.username }}</a>*/
/* */
/*         <!-- Dropdown Structure -->*/
/*         <ul id='dropdown1' class='dropdown-content'>*/
/*             <li><a href="{{ path('fos_user_profile_show') }}">Parametres</a></li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <ul>*/
/*         <li><a href="">Tableau de bord</a></li>*/
/*         <li><a href="">Calendrier</a></li>*/
/*         <li><a href="{{ path('contact_index') }}">Contact</a></li>*/
/*     </ul>*/
/* </nav>*/
