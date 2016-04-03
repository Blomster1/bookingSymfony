<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_28e6358899b910dbafff1fadc4c63f4334c71516ba038bd66615ab0516b8b127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7c2997b78a2f3dd28a5ead3ba8bcb0eaf9e8629562a650a8893a529512c4066f = $this->env->getExtension("native_profiler");
        $__internal_7c2997b78a2f3dd28a5ead3ba8bcb0eaf9e8629562a650a8893a529512c4066f->enter($__internal_7c2997b78a2f3dd28a5ead3ba8bcb0eaf9e8629562a650a8893a529512c4066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2997b78a2f3dd28a5ead3ba8bcb0eaf9e8629562a650a8893a529512c4066f->leave($__internal_7c2997b78a2f3dd28a5ead3ba8bcb0eaf9e8629562a650a8893a529512c4066f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c65672da181ac3c9e4e17795a8fad73ca9a1467c28f390c7a57f61e8cb44c40 = $this->env->getExtension("native_profiler");
        $__internal_5c65672da181ac3c9e4e17795a8fad73ca9a1467c28f390c7a57f61e8cb44c40->enter($__internal_5c65672da181ac3c9e4e17795a8fad73ca9a1467c28f390c7a57f61e8cb44c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5c65672da181ac3c9e4e17795a8fad73ca9a1467c28f390c7a57f61e8cb44c40->leave($__internal_5c65672da181ac3c9e4e17795a8fad73ca9a1467c28f390c7a57f61e8cb44c40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
