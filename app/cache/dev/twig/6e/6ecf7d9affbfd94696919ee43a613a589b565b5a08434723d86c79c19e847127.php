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
        $__internal_dd2b6d4260993702048ef913fd7314537468fa805a14e8de7204d76a63190d69 = $this->env->getExtension("native_profiler");
        $__internal_dd2b6d4260993702048ef913fd7314537468fa805a14e8de7204d76a63190d69->enter($__internal_dd2b6d4260993702048ef913fd7314537468fa805a14e8de7204d76a63190d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        // line 1
        echo "<div class=\"header-profile\">
    <div class=\"banner-profil\">
        <img class=\"banner-background\" src=\"../";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/user-profile-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"col s2\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/yuna.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle responsive-img profil-picture\"> <!-- notice the \"circle\" class -->
        </div>
    </div>
</div>

<section class=\"user-info\">
    <h5><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo "</h5>
    <p>Mail : <a href=\"\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</a></p>
    <p>Tel : <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel", array()), "html", null, true);
        echo "</strong></p>

</section>

<!-- Modal Trigger -->
<a onclick=\"confirmDelete()\" class=\"modal-trigger waves-effect waves-light btn\" href=\"#modal2\">Delete</a>

<!-- Modal Structure -->
<div id=\"modal2\" class=\"modal modal-fixed-footer\">
    <div class=\"modal-content red lighten-1\">
        <p class=\"text-white\">Etes Vous sur de vouloir supprimer ce contact ?</p>
    </div>
    <div class=\"modal-footer red lighten-3\">
        <a href=\"#!\" class=\"text-white modal-action modal-close waves-effect waves-green btn-flat \">
            ANNULER
        </a>
        <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat \">
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input class=\"text-white\" type=\"submit\" value=\"SUPPRIMER\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </a>

    </div>
</div>
";
        
        $__internal_dd2b6d4260993702048ef913fd7314537468fa805a14e8de7204d76a63190d69->leave($__internal_dd2b6d4260993702048ef913fd7314537468fa805a14e8de7204d76a63190d69_prof);

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
        return array (  75 => 32,  70 => 30,  50 => 13,  46 => 12,  40 => 11,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <div class="header-profile">*/
/*     <div class="banner-profil">*/
/*         <img class="banner-background" src="../{{ asset('images/user-profile-bg.jpg') }}" alt="">*/
/*         <div class="col s2">*/
/*             <img src="{{ asset('images/yuna.jpg') }}" alt="" class="circle responsive-img profil-picture"> <!-- notice the "circle" class -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <section class="user-info">*/
/*     <h5><strong>{{ contact.nom }}</strong> {{ contact.prenom }}</h5>*/
/*     <p>Mail : <a href="">{{ contact.email }}</a></p>*/
/*     <p>Tel : <strong>{{ contact.tel }}</strong></p>*/
/* */
/* </section>*/
/* */
/* <!-- Modal Trigger -->*/
/* <a onclick="confirmDelete()" class="modal-trigger waves-effect waves-light btn" href="#modal2">Delete</a>*/
/* */
/* <!-- Modal Structure -->*/
/* <div id="modal2" class="modal modal-fixed-footer">*/
/*     <div class="modal-content red lighten-1">*/
/*         <p class="text-white">Etes Vous sur de vouloir supprimer ce contact ?</p>*/
/*     </div>*/
/*     <div class="modal-footer red lighten-3">*/
/*         <a href="#!" class="text-white modal-action modal-close waves-effect waves-green btn-flat ">*/
/*             ANNULER*/
/*         </a>*/
/*         <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">*/
/*             {{ form_start(delete_form) }}*/
/*             <input class="text-white" type="submit" value="SUPPRIMER">*/
/*             {{ form_end(delete_form) }}*/
/*         </a>*/
/* */
/*     </div>*/
/* </div>*/
/* */
