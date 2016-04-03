<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e52493d2375ad29bef1238e6ab2400d46cb3b545e298fa9593d040a6bf89c3e6 extends Twig_Template
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
        $__internal_e4d4c24c3fb8c1c411f15ce53303c69b0abb11dec7632ea685edc24051c43ffd = $this->env->getExtension("native_profiler");
        $__internal_e4d4c24c3fb8c1c411f15ce53303c69b0abb11dec7632ea685edc24051c43ffd->enter($__internal_e4d4c24c3fb8c1c411f15ce53303c69b0abb11dec7632ea685edc24051c43ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e4d4c24c3fb8c1c411f15ce53303c69b0abb11dec7632ea685edc24051c43ffd->leave($__internal_e4d4c24c3fb8c1c411f15ce53303c69b0abb11dec7632ea685edc24051c43ffd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
