<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b5b9bce418eaaea86328706aa9a8f637c98816fe4d489887308ab2202b4544b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1399c610e8a29c86621a05d81b5867d709926e5094149d06eb2a733afc2a5cfd = $this->env->getExtension("native_profiler");
        $__internal_1399c610e8a29c86621a05d81b5867d709926e5094149d06eb2a733afc2a5cfd->enter($__internal_1399c610e8a29c86621a05d81b5867d709926e5094149d06eb2a733afc2a5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1399c610e8a29c86621a05d81b5867d709926e5094149d06eb2a733afc2a5cfd->leave($__internal_1399c610e8a29c86621a05d81b5867d709926e5094149d06eb2a733afc2a5cfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa1b4f3aefa86acc75296d40740fabf49d449f0b38ef3a3802029bdaa0ea217c = $this->env->getExtension("native_profiler");
        $__internal_fa1b4f3aefa86acc75296d40740fabf49d449f0b38ef3a3802029bdaa0ea217c->enter($__internal_fa1b4f3aefa86acc75296d40740fabf49d449f0b38ef3a3802029bdaa0ea217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div class=\"row\">
    <div id=\"form-login\" class=\"col m4 offset-m4 z-depth-3 valign white\">
        <h1 class=\"center-align\">Arters booking web app</h1>
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"input-field\">
                <i class=\"material-icons prefix\">account_circle</i>
                <input type=\"text\" class=\"validate\" id=\"username icon_prefix\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                <label for=\"username icon_prefix\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"input-field\">
                <i class=\"material-icons prefix\">https</i>
                <input type=\"password\" id=\"password icon-prefix\" name=\"_password\" required=\"required\" />
                <label for=\"password icon-prefix\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <div class=\"center-align\">
                <input class=\"btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se connecter", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_fa1b4f3aefa86acc75296d40740fabf49d449f0b38ef3a3802029bdaa0ea217c->leave($__internal_fa1b4f3aefa86acc75296d40740fabf49d449f0b38ef3a3802029bdaa0ea217c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  84 => 26,  77 => 22,  68 => 16,  64 => 15,  57 => 11,  53 => 10,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* <div class="row">*/
/*     <div id="form-login" class="col m4 offset-m4 z-depth-3 valign white">*/
/*         <h1 class="center-align">Arters booking web app</h1>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">account_circle</i>*/
/*                 <input type="text" class="validate" id="username icon_prefix" name="_username" value="{{ last_username }}" required="required" />*/
/*                 <label for="username icon_prefix">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*             </div>*/
/* */
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">https</i>*/
/*                 <input type="password" id="password icon-prefix" name="_password" required="required" />*/
/*                 <label for="password icon-prefix">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*             </div>*/
/* */
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*             <div class="center-align">*/
/*                 <input class="btn" type="submit" id="_submit" name="_submit" value="{{ 'Se connecter'|trans({}, 'FOSUserBundle') }}" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
