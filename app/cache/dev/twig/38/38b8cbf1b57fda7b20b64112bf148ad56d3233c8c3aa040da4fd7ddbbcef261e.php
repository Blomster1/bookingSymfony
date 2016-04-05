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
        $__internal_b0776c2caa0d32f25f649c5b6d37b0bc8e74846bcc35093e6a911a28f153ad8a = $this->env->getExtension("native_profiler");
        $__internal_b0776c2caa0d32f25f649c5b6d37b0bc8e74846bcc35093e6a911a28f153ad8a->enter($__internal_b0776c2caa0d32f25f649c5b6d37b0bc8e74846bcc35093e6a911a28f153ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Partials:sideNav.html.twig"));

        // line 1
        echo "<div class=\"row no-margin\">
    <nav id=\"sideNav\" class=\"grey lighten-5 col m2\">
        <div id=\"user-section\" class=\"light-blue\">
            <img class=\"circle responsive-img\" id=\"image-user\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Dropdown Trigger -->
            <a class='dropdown-button' id=\"name-user\" href='#' data-activates='dropdown1'>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Parametres</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
            </ul>
        </div>
        <ul>
            <li><a href=\"\">Tableau de bord</a></li>
            <li><a href=\"\">Calendrier</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Contact</a></li>
        </ul>
    </nav>
</div>
";
        
        $__internal_b0776c2caa0d32f25f649c5b6d37b0bc8e74846bcc35093e6a911a28f153ad8a->leave($__internal_b0776c2caa0d32f25f649c5b6d37b0bc8e74846bcc35093e6a911a28f153ad8a_prof);

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
        return array (  52 => 17,  43 => 11,  39 => 10,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <div class="row no-margin">*/
/*     <nav id="sideNav" class="grey lighten-5 col m2">*/
/*         <div id="user-section" class="light-blue">*/
/*             <img class="circle responsive-img" id="image-user" src="{{ asset("images/user.jpg") }}" alt="">*/
/*             <!-- Dropdown Trigger -->*/
/*             <a class='dropdown-button' id="name-user" href='#' data-activates='dropdown1'>{{ user.username }}</a>*/
/* */
/*             <!-- Dropdown Structure -->*/
/*             <ul id='dropdown1' class='dropdown-content'>*/
/*                 <li><a href="{{ path('fos_user_profile_show') }}">Parametres</a></li>*/
/*                 <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <ul>*/
/*             <li><a href="">Tableau de bord</a></li>*/
/*             <li><a href="">Calendrier</a></li>*/
/*             <li><a href="{{ path('contact_index') }}">Contact</a></li>*/
/*         </ul>*/
/*     </nav>*/
/* </div>*/
/* */
